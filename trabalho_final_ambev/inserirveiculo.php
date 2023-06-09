<?php 
    include('conexao.php');
    session_start();


    $passa_marca = isset($_POST['marca']) ? $_POST['marca'] : null;
    $passa_estado = isset($_POST['uf']) ? $_POST['uf'] : null;
    $passa_combustivel = isset($_POST['combustivel']) ? $_POST['combustivel'] : null;
    $modelo = isset($_POST['modelo']) ? $_POST['modelo'] : null;
    $passa_area = isset($_POST['area']) ? $_POST['area'] : null;
    $ano = isset($_POST['ano']) ? $_POST['ano'] : null;
    $placa = isset($_POST['placa']) ? $_POST['placa'] : null;
    $chassi = isset($_POST['chassi']) ? $_POST['chassi'] : null;
    $cor = isset($_POST['cor']) ? $_POST['cor'] : null;
    $passa_cipp = isset($_POST['cipp']) ? $_POST['cipp'] : null;
    $observacoes = isset($_POST['observacoes']) ? $_POST['observacoes'] : null;
    $peso = isset($_POST['peso']) ? $_POST['peso'] : null;
    $capacidade = isset($_POST['capacidade']) ? $_POST['capacidade'] : null;


    if($placa != null && $passa_marca != null && $passa_area != null){

        $chassi_query = "SELECT chassi FROM modelo WHERE chassi = '$chassi'";
        $chassi_result = mysqli_query($link, $chassi_query);

        // Verificar duplicatas de placa
        $placa_query = "SELECT placa FROM modelo WHERE placa = '$placa'";
        $placa_result = mysqli_query($link, $placa_query);

        // Verificar se há duplicatas
        if (mysqli_num_rows($placa_result) > 0) {
            echo "Já existe um veículo com a mesma placa.";
            echo '<a href="menu.php">Voltar</a>';
        } else {
        
        $sql = "INSERT INTO modelo (modelo, placa, chassi, cor, combustivel, marca, ano, peso, capacidade, cipp, observacoes, area, estado) 
        VALUES ('$modelo', '$placa','$chassi','$cor','$passa_combustivel','$passa_marca','$ano','$peso','$capacidade','$passa_cipp','$observacoes','$passa_area','$passa_estado')";

        var_dump($sql);
$result = mysqli_query($link, $sql);

if ($result) {
    // Inserção bem-sucedida
    $linhas_afetadas = mysqli_affected_rows($link);
    if ($linhas_afetadas > 0) {
        echo "Inserção realizada com sucesso.";
        echo '<a href="menu.php">Voltar</a>';
    } else {
        echo "A consulta foi executada, mas nenhuma linha foi inserida.";
    }
} else {
    // Erro na execução da consulta
    echo "Erro ao executar a consulta: " . mysqli_error($link);
}
        }
    }

?>