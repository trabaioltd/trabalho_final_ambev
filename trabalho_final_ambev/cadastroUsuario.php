<!DOCTYPE html>
<html lang="pt-BR">
<?php
include('conexao.php');
session_start();

$num = 0;

$nomeUsuario = isset($_SESSION['nome_usuario']) ? $_SESSION['nome_usuario'] : null;
$prioridade = isset($_SESSION['prioridade']) ? $_SESSION['prioridade'] : null;


$nome_responsavel = isset($_POST["nome_responsavel"]) ? $_POST["nome_responsavel"] : null;
$cargo_recebido = isset($_POST["cargo"]) ? $_POST["cargo"] : null;
$senha = isset($_POST["senha"]) ? $_POST["senha"] : null;
$novasenha = isset($_POST["novasenha"]) ? $_POST["novasenha"] : null;
$observacoes = isset($_POST["observacoes"]) ? $_POST["observacoes"] : null;
$prioridade = isset($_POST["prioridade"]) ? $_POST['prioridade'] : null;
$chefe = isset($_POST["chefe"]) ? $_POST['chefe'] : null;

$cargos = array("50" => "Engenheiro de Segurança do Trabalho", "40" => "Técnico de Segurança do Trabalho", "30" => "Gerente", "Supervisor", "20" => "Analista", "5" => "Condutor", "20" => "Mecânico", "1" => "Auxiliar");

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleCadastro.css">
    <title>Cadastro de Usuários</title>
</head>

<body>
    <fieldset>
        <div class="registroformulario">
            <h1>Cadastro de Usuários</h1>
        </div>
        <div class="conteudo centralizacao">
            <form action="inserirusuario.php" method="post">
                <input type="text" readonly value="<?= $nomeUsuario ?>" id="chefe" hidden name="chefe">

                <input class="firstInput" type="text" id="name" name="nome_responsavel" placeholder="Nome do Funcionario" value="<?= $nome_responsavel ?>"><br><br>

                <select name="cargo" id="cargo">
                    <option value="null">--Cargo--</option>
                    <?php foreach ($cargos as $key => $value) { ?>
                        <option value="<?= $value ?>" <?= $value == $cargo_recebido ? 'selected' : null ?> prioridade="<?= $key ?>"><?= $value ?></option>
                    <?php } ?>
                </select><br><br>
                <input type="text" name="prioridade" id="prioridade" value="<?= isset($cargo_recebido) ? $cargo_recebido : '' ?>" hidden>

                <span>Crie uma senha fácil, o colaborador deverá trocá-la depois</span><br><br>
                <input class="firstInput" type="password" id="pwd" name="senha" placeholder="Digite sua senha" value="<?= $senha ?>"><br><br>
                <input class="firstInput" type="password" id="pwd2" name="novasenha" placeholder="Confirme sua senha" value="<?= $novasenha ?>"><br><br><br>

                <textarea name="observacoes" id="observacoes" cols="30" rows="10" placeholder="Observações"><?= $observacoes ?></textarea>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </fieldset>
    <a href="menu.php">Voltar</a>

    <script>
        const cargoSelect = document.getElementById('cargo');
        const prioridadeInput = document.getElementById('prioridade');

        cargoSelect.addEventListener('change', function() {
            const selectedOption = cargoSelect.options[cargoSelect.selectedIndex];
            const prioridade = selectedOption.getAttribute('prioridade');
            prioridadeInput.value = prioridade;
        });
    </script>

</body>

</html>