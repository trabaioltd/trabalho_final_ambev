<?php
    include('conexao.php');

    session_start();

     
        
    $nomeUsuario = isset($_SESSION['nome_usuario']) ? $_SESSION['nome_usuario'] : null;
    $prioridade = isset($_SESSION['prioridade']) ? $_SESSION['prioridade'] : null;
  
    

    
    $_SESSION['nome_usuario'] = $nomeUsuario;
    $_SESSION['prioridade'] = $prioridade;
    


    $novasenha = isset($_POST['novasenha']) ? $_POST['novasenha'] : null;
    $repitasenha= isset($_POST['repitasenha']) ? $_POST['repitasenha'] : null;
    $id = isset($_GET['id']) ? $_GET['id'] : (isset($_POST['id']) ? $_POST['id'] : null);

     

   if(MD5($novasenha) == MD5($repitasenha)){ 

        $update = "UPDATE usuarios SET senha = '".md5($repitasenha)."' WHERE id = '".$id."'";

        if (mysqli_query($link, $update) === true) {
            echo 'Atualização realizada com sucesso';
            echo '<a href="usuarios.php">Voltar</a>';
            exit;

        } else {
            echo 'Erro ao atualizar: ' . mysqli_error($link);
            echo '<a href="usuarios.php">Voltar</a>';    
        }
    
   }

    echo '<a href="usuarios.php">Voltar</a>';

?>

