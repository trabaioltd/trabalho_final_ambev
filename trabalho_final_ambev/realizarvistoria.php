<?php

    include('conexao.php');
    date_default_timezone_set('America/Sao_Paulo');

    session_start();

        $placa= isset($_POST['placa']) ? $_POST['placa'] : null;
        $carroceria = isset($_POST['carroceria']) ? $_POST['carroceria'] : null;
        $pneu = isset($_POST['pneu']) ? $_POST['pneu'] : null;
        $vidros = isset($_POST['vidros']) ? $_POST['vidros'] : null;
        $pintura = isset($_POST['pintura']) ? $_POST['pintura'] : null;
        $passa_situacao = isset($_POST['situacao']) ? $_POST['situacao'] : null;
        $observacoes = isset($_POST['observacoes']) ? $_POST['observacoes'] : null;
        $proxima = isset($_POST['proxima']) ? $_POST['proxima'] : null;

        $dataAtual = date("Y-m-d H:i:s");


        if ($placa != null && $carroceria != null && $observacoes != null && $vidros != null && $pneu != null && $pintura != null && $passa_situacao != null) {
            $sql_select = "SELECT placa FROM vistoria WHERE placa = '$placa'";
            $result = mysqli_query($link, $sql_select);
        
            if (mysqli_num_rows($result) > 0) {
                // A placa já existe, executar a atualização
                $sql = "UPDATE vistoria SET carroceria = '$carroceria', pneu = '$pneu', vidros = '$vidros', pintura = '$pintura',
                        situacao = '$passa_situacao', observacoes = '$observacoes', dataatual = '$dataAtual',
                        dataprox = DATE_ADD(NOW(), INTERVAL '$proxima' DAY) WHERE placa = '$placa'";
        
                if (mysqli_query($link, $sql)) {
                    echo "Dados atualizados com sucesso!";
                } else {
                    echo "Erro ao atualizar dados: " . mysqli_error($link);
                }
            } else {
                // A placa não existe, executar a inserção
                $sql = "INSERT INTO vistoria (carroceria, pneu, vidros, pintura, situacao, observacoes, placa, dataatual, dataprox) 
                        VALUES ('$carroceria', '$pneu', '$vidros', '$pintura', '$passa_situacao', '$observacoes', '$placa',
                        '$dataAtual', DATE_ADD(NOW(), INTERVAL '$proxima' DAY))";
        
                if (mysqli_query($link, $sql)) {
                    echo "Registro inserido com sucesso!";
                } else {
                    echo "Erro ao inserir registro: " . mysqli_error($link);
                }
            }
        }
        
        mysqli_close($link);


?>
<a href="menu.php">Voltar</a>