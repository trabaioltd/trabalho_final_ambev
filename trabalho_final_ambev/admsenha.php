<?php
include('conexao.php');

session_start();


$nomeUsuario = isset($_SESSION['nome_usuario']) ? $_SESSION['nome_usuario'] : null;
$prioridade = isset($_SESSION['prioridade']) ? $_SESSION['prioridade'] : null;


$_SESSION['nome_usuario'] = $nomeUsuario;
$_SESSION['prioridade'] = $prioridade;


$novasenha = isset($_POST['novasenha']) ? $_POST['novasenha'] : null;
$repitasenha = isset($_POST['repitasenha']) ? $_POST['repitasenha'] : null;

$id = isset($_GET['id']) ? $_GET['id'] : (isset($_POST['id']) ? $_POST['id'] : null);

//print_r($_GET);

?>
<!DOCTYPE html>
<html lang="en">

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
        <div class="conteudo centralizacao">
            <form action="admsenhatrocar.php" method="post">

                <input type="password" name="novasenha" id="novasenha" placeholder="Nova senha" required>
                <br><br>
                <input type="password" name="repitasenha" id="repitasenha" placeholder="Repita a senha" required>
                <br><br>
                <input type="hidden" value="<?= $id ?>" name="id">
                <button type="submit">Trocar a senha</button>
                
            </form>
        </div>
    </fieldset>
    <a href="usuarios.php">Voltar</a>

</body>

</html>