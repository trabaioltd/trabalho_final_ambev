<?php
    include('conexao.php');
    session_start();


    $nome_responsavel = isset($_POST["nome_responsavel"]) ? $_POST["nome_responsavel"] : null;
    $cargo_recebido = isset($_POST["cargo"]) ? $_POST["cargo"] : null;
    $senha = isset($_POST["senha"]) ? $_POST["senha"] : null;
    $novasenha = isset($_POST["novasenha"]) ? $_POST["novasenha"] : null;
    $observacoes = isset($_POST["observacoes"]) ? $_POST["observacoes"] : null;
    $prioridade = isset($_POST["prioridade"]) ? $_POST['prioridade'] : null;
    $chefe = isset($_POST["chefe"]) ? $_POST['chefe'] : null;


    if($nome_responsavel != null && $senha != null && MD5($senha) == MD5($novasenha)){ 

        $sql = "INSERT INTO usuarios (login, senha, prioridade,superior ,cargo ,observacoes) 
            VALUES ('$nome_responsavel',MD5('$senha'),'$prioridade','$chefe','$cargo_recebido','$observacoes')";
            $result = mysqli_query($link, $sql);
    
            if ($result) {
                // Verificar se o insert foi bem-sucedido
                if (mysqli_affected_rows($link) > 0) {
                    echo "Insert realizado com sucesso!";
                } else {
                    echo "Ocorreu um erro ao inserir os dados.";
                }
            } else {
                echo "Ocorreu um erro na consulta: " . mysqli_error($link);
            }
        }


        
?>
<a href="menu.php">voltar</a>