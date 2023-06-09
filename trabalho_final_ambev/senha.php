<?php
include('conexao.php');

session_start();



$nomeUsuario = isset($_SESSION['nome_usuario']) ? $_SESSION['nome_usuario'] : null;
$prioridade = isset($_SESSION['prioridade']) ? $_SESSION['prioridade'] : null;




$_SESSION['nome_usuario'] = $nomeUsuario;
$_SESSION['prioridade'] = $prioridade;


$senhaatual = isset($_POST['senhaatual']) ? $_POST['senhaatual'] : null;
$novasenha = isset($_POST['novasenha']) ? $_POST['novasenha'] : null;
$repitasenha = isset($_POST['repitasenha']) ? $_POST['repitasenha'] : null;





?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleCadastro.css">
    <title>Trocar Senha</title>
</head>

<body>
    <fieldset>
        <div class="registroformulario">
            <h1>Trocar Senha</h1>
        </div>
        <div class = "conteudo centralizacao">
        <form action="trocarsenha.php" method="post">
            <input type="password" id="senhaatual" name="senhaatual" placeholder="Senha atual" required>
            <br><br>
            <input type="password" name="novasenha" id="novasenha" placeholder="Nova senha" required>
            <br><br>
            <input type="password" name="repitasenha" id="repitasenha" placeholder="Repita a senha" required>
            <br><br>
            <button type="submit">Trocar a senha</button>
        </form>
        </div>
    </fieldset>
    <a href="menu.php">Voltar</a>
</body>

</html>