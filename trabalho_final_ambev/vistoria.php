<!DOCTYPE html>
<html lang="pt-BR">
<?php
include('conexao.php');


$prioridade = 0;
$nomeUsuario = null;

session_start();

$nomeUsuario = isset($_SESSION['nome_usuario']) ? $_SESSION['nome_usuario'] : null;
$prioridade = isset($_SESSION['prioridade']) ? $_SESSION['prioridade'] : null;


$_SESSION['nome_usuario'] = $nomeUsuario;
$_SESSION['prioridade'] = $prioridade;

$qualidade = array('Otimo', 'Bom', 'Regular', 'Ruim', 'Pessímo');
$situacao = array('Aprovado', 'Reprovado');

$placa = isset($_POST['placa']) ? $_POST['placa'] : null;
$carroceria = isset($_POST['carroceria']) ? $_POST['carroceria'] : null;
$pneu = isset($_POST['pneu']) ? $_POST['pneu'] : null;
$vidros = isset($_POST['vidros']) ? $_POST['vidros'] : null;
$pintura = isset($_POST['pintura']) ? $_POST['pintura'] : null;
$passa_situacao = isset($_POST['situacao']) ? $_POST['situacao'] : null;
$observacoes = isset($_POST['observacoes']) ? $_POST['observacoes'] : null;
$proxima = isset($_POST['proxima']) ? $_POST['proxima'] : null;

$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id !=  null) {
    $placa = isset($_GET['placa']) ? $_GET['placa'] : null;
    $carroceria = isset($_GET['carroceria']) ? $_GET['carroceria'] : null;
    $pneu = isset($_GET['pneu']) ? $_GET['pneu'] : null;
    $vidros = isset($_GET['vidros']) ? $_GET['vidros'] : null;
    $pintura = isset($_GET['pintura']) ? $_GET['pintura'] : null;
    $passa_situacao = isset($_GET['situacao']) ? $_GET['situacao'] : null;
    $observacoes = isset($_GET['observacoes']) ? $_GET['observacoes'] : null;
    $teste1 = isset($_GET['dataprox']) ? $_GET['dataprox'] : null;

    $dataAtual = new DateTime(); // Data atual
    $dataProxima = new DateTime($teste1); // Data fornecida

    $diferenca = $dataProxima->diff($dataAtual); // Calcula a diferença entre as datas

    $proxima = $diferenca->days; // Obtém a diferença em dias
}


?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleCadastro.css">
    <title>Vistoria</title>
</head>

<body>
    <fieldset>
        <div class="registroformulario">
            <h1>Vistoria</h1>
        </div>
        <div class="conteudo">
            <form action="realizarvistoria.php" method="post">
                <div>
                    <h3>Buscar Veículo:</h3>
                    <?php
                    include('consultaplaca.php');
                    ?>
                    <br>
                    <h3>Carroceria</h3>
                    <?php
                    foreach ($qualidade as $key => $value) { ?>
                        <input type="radio" id="carroceria_<?= $key ?>" name="carroceria" value="<?= $value ?>" <?= $value == $carroceria ? 'checked' : '' ?>>
                        <label for="carroceria_<?= $key ?>"><?= $value ?></label>
                    <?php   } ?>
                    <h3>Pneu</h3>
                    <?php
                    foreach ($qualidade as $key => $value) { ?>
                        <input type="radio" id="pneu_<?= $key ?>" name="pneu" value="<?= $value ?>" <?= $value == $pneu ? 'checked' : '' ?>>
                        <label for="pneu_<?= $key ?>"><?= $value ?></label>
                    <?php   } ?>
                    <h3>Vidros</h3>
                    <?php
                    foreach ($qualidade as $key => $value) { ?>
                        <input type="radio" id="vidros_<?= $key ?>" name="vidros" value="<?= $value ?>" <?= $value == $vidros ? 'checked' : '' ?>>
                        <label for="vidros_<?= $key ?>"><?= $value ?></label>
                    <?php   } ?>
                    <h3>Pintura</h3>
                    <?php
                    foreach ($qualidade as $key => $value) { ?>
                        <input type="radio" id="pintura_<?= $key ?>" name="pintura" value="<?= $value ?>" <?= $value == $pintura ? 'checked' : '' ?>>
                        <label for="pintura_<?= $key ?>"><?= $value ?></label>
                    <?php   } ?>
                    <h3>Situação</h3>
                    <?php
                    foreach ($situacao as $key => $value) { ?>
                        <input type="radio" id="<?= $key ?>" name="situacao" value="<?= $value ?>" <?= $value == $passa_situacao ? 'checked' : '' ?>>
                        <label for="<?= $key ?>"><?= $value ?></label>
                    <?php   } ?>
                    <h3>Data da próxima Avaliação</h3>
                    <input type="text" name="proxima" value="<?= $proxima ?>">

                    <br><br>

                    <textarea name="observacoes" id="ob" cols="30" rows="10" placeholder="Notas de reparo..."><?= $observacoes ?></textarea>

                    <button type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </fieldset>
    <a href="menu.php">Voltar</a>
</body>

</html>