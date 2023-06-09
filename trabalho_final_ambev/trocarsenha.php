<?php
    include('conexao.php');

    session_start();

     
        
    $nomeUsuario = isset($_SESSION['nome_usuario']) ? $_SESSION['nome_usuario'] : null;
    $prioridade = isset($_SESSION['prioridade']) ? $_SESSION['prioridade'] : null;

    

    
    $_SESSION['nome_usuario'] = $nomeUsuario;
    $_SESSION['prioridade'] = $prioridade;


    $senhaatual = isset($_POST['senhaatual']) ? $_POST['senhaatual'] : null;
    $novasenha = isset($_POST['novasenha']) ? $_POST['novasenha'] : null;
    $repitasenha= isset($_POST['repitasenha']) ? $_POST['repitasenha'] : null;

    
        $sql = "SELECT senha FROM usuarios WHERE login = '$nomeUsuario'"; 
        $result = mysqli_query($link,$sql) or die('Query failed: ' . mysqli_error($link));
        $line = mysqli_fetch_array($result, MYSQLI_ASSOC) ? :  null;

        if($line == null){ 
            echo '<a href="senha.php">Voltar</a><br><br><br>';
            echo 'SENHAS INVÁLIDAS';
            exit();
        }

   if(MD5($senhaatual) == $line['senha'] && MD5($novasenha) == MD5($repitasenha)){ 

        $update = "UPDATE usuarios SET senha = '" . md5($repitasenha) . "' WHERE login = '" . $nomeUsuario . "'";

        if (mysqli_query($link, $update) === true) {
            echo 'Atualização realizada com sucesso';
            echo '<a href="menu.php">Voltar</a>';
            exit;

        } else {
            echo 'Erro ao atualizar: ' . mysqli_error($link);
            echo '<a href="senha.php">Voltar</a>';
        }
    
   }

    echo '<a href="senha.php">Voltar</a>';


?>

