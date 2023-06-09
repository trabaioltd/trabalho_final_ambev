<?php

use FontLib\Table\Type\head;

include('conexao.php');
// Conecte-se ao banco de dados aqui
$result = array();
$sql = array();

// Recupere os valores enviados pelo formulário
$name_usuario = isset($_POST['name_usuario']) ? $_POST['name_usuario'] : null; 
$name_senha = isset($_POST['name_senha']) ? $_POST['name_senha'] : null;


$sql = "SELECT login, senha, prioridade FROM usuarios WHERE login = '$name_usuario'"; 
$result = mysqli_query($link,$sql) or die('Query failed: ' . mysqli_error($link));
$line = mysqli_fetch_array($result, MYSQLI_ASSOC) ? :  null;





// Realize a comparação com o banco de dados
// Substitua '123' pelo campo correto da tabela do banco de dados que contém as informações de login e senha
if ($line !== null && $name_usuario == $line['login'] && MD5($name_senha) == $line['senha']) {
    // Login bem-sucedido, redirecione para a página restrita
    session_start();

    // Armazenar informações de autenticação na sessão
    $_SESSION['nome_usuario'] = $name_usuario;
    $_SESSION['prioridade'] = $line['prioridade'];
    $_SESSION['loggedIn'] = true;
    
    // Redirecionar para a página restrita
    header('Location: menu.php');
    exit;
} else {
    // Login falhou, exiba uma mensagem de erro
    ?>
    <script>
        window.alert('Usuário ou senha incorretos.');
        window.location.href = 'login.php';
    </script>
    <?php
    
}
?>


   