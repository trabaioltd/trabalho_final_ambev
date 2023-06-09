<!DOCTYPE html>
<html lang="pt-BR">
<?php
include('conexao.php');

session_start();

$nomeUsuario = isset($_SESSION['nome_usuario']) ? $_SESSION['nome_usuario'] : null;
$prioridade = isset($_SESSION['prioridade']) ? $_SESSION['prioridade'] : null;



$carteira = array('A', 'B', 'C', 'D', 'E');
$condutor = array('Condutor', 'Auxiliar');
$radiomopp = array('Sim', 'Não');

$observacoes = isset($_POST['observacoes']) ? $_POST['observacoes'] : null;
$mopp = isset($_POST['mopp']) ? $_POST['mopp'] : null;
$nome_condutor = isset($_POST['nameCondutor']) ? $_POST['nameCondutor'] : null;
$carteira_enviada = isset($_POST['carteira']) ? $_POST['carteira'] : NULL;
$condutor_enviado = isset($_POST['condutor']) ? $_POST['condutor'] : NULL;
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleCadastro.css">
    <title>Cadastro do Condutor</title>
</head>

<body>
    <fieldset>
        <div class="registroformulario">
            <h1>Cadastro do condutor</h1>
        </div>
        <div class="conteudo centralizacao">
        <form action="" method="post">
            <div>
                <input class="firstInput" type="text" id="nameCondutor" name="nameCondutor" placeholder="Nome do Condutor" value="<?= $nome_condutor ?>"><br><br>

                <select name="condutor" id="cargo">
                    <option value="null">--Cargo--</option>
                    <?php
                    foreach ($condutor as $cond) { ?>
                        <option value="<?= $cond ?>" <?= $condutor_enviado == $cond ? 'selected' : null; ?>><?= $cond ?></option>

                    <?php } ?>

                </select><br><br>
                <select name="carteira" id="carteira">
                    <option value="null">--Categoria da Carteira--</option>
                    <?php
                    foreach ($carteira as $cart) { ?>
                        <option value="<?= $cart ?>" <?= $carteira_enviada == $cart ? 'selected' : null; ?>><?= $cart ?></option>

                    <?php } ?>

                </select><br><br>


                <label for="possuiMOPP">O veículo possui <a title="Movimentação e Operação de Produtos Perigosos"><strong>MOPP</strong></a>?</label><br><br>
                <?php
                foreach ($radiomopp as $key => $value) { ?>
                    <input type="radio" value="<?= $value ?>" name="mopp" <?= $mopp == $value ? 'checked' : null ?> id="<?= $key ?>">
                    <label for="<?= $key ?>"><?= $value ?></label>
                <?php  } ?>
                <br><br>

                <textarea name="observacoes" id="observacoes" cols="30" rows="10" placeholder="Observações"><?= $observacoes ?></textarea>

                <div class="containerbutton">
                    <button type="submit">Cadastrar</button>
                </div>
        </form>
        </div>
    </fieldset>
    <a id="buttonVoltarCadastro" href="menu.php">Voltar</a>
</body>

</html>