<!DOCTYPE html>
<html lang="pt-br">
<?php
include('conexao.php');
$prioridade = 0;
$nomeUsuario = null;

session_start();

// Verificar se as informações de autenticação estão presentes
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    // Redirecionar para a página de login

    $nomeUsuario = isset($_SESSION['nome_usuario']) ? $_SESSION['nome_usuario'] : null;
    $prioridade = isset($_SESSION['prioridade']) ? $_SESSION['prioridade'] : null;
    $_SESSION['loggedIn'] = true;
} else {
    $_SESSION['loggedIn'] = false;
}

$nomeUsuario = isset($_SESSION['nome_usuario']) ? $_SESSION['nome_usuario'] : null;
$prioridade = isset($_SESSION['prioridade']) ? $_SESSION['prioridade'] : null;
$_SESSION['nome_usuario'] = $nomeUsuario;
$_SESSION['prioridade'] = $prioridade;


?>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleMenu.css">
    <title>Menu</title>

</head>

<body>

    <nav class="tabs">
        <user id="user">
            <img class="logo" src="img/logoTarumaBordaGrossa.png" alt="">
            <section class="logout">
                <div>
                    <a href="index.php?logout=logout">Logout</a>
                </div>
                <div>
                    <?php
                    if ($_SESSION['loggedIn'] == true) { ?>
                        <a href="senha.php">Trocar de senha</a>
                    <?php  } ?>
                </div>          
                <div>
                    <img class="logo2"src="https://i0.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?fit=256%2C256&quality=100&ssl=1" />
                </div>
                <div  id="nomeUsuario">
                    <name><?= $nomeUsuario ?></name>
                </div>  
            </section>
        </user>
    </nav>
 
    <fieldset>
        <legend>Relatórios</legend>
        <a href="veiculos.php">Veiculos cadastrados</a>
        <a href="usuarios.php">Usuários cadastrados</a>
        <a href="visualizarvistoria.php">Consultar Vistorias Realizadas</a>
    </fieldset>
    <?php
    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {

        if ($prioridade >= 50) { ?>
            <fieldset>
                <legend>Cadastros</legend>
                <a href="cadastroUsuario.php">Cadastro de funcionários</a>
                <a href="cadastroVeiculo.php">Cadastro de veículo</a>
            </fieldset>
        <?php  } ?>

        <?php
        if ($prioridade >= 15) { ?>
            <fieldset>
                <legend>Menu Vistoria</legend>
                <a href="vistoria.php">Realizar Vistorias</a>

            </fieldset><br><br>
        <?php   } ?>

    <?php } ?>
</body>


</html>