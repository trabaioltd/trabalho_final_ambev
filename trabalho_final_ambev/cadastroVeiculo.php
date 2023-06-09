<!DOCTYPE html>
<html lang="pt-BR">
<?php
include('conexao.php');

$nomeUsuario = isset($_SESSION['nome_usuario']) ? $_SESSION['nome_usuario'] : null;
$prioridade = isset($_SESSION['prioridade']) ? $_SESSION['prioridade'] : null;



$cipp = array('Sim', 'Não');
$area = array('Distribuição', 'Puxada', 'Frota', 'Vendas', 'Marketing');
$carros = array('camionete', 'caminhão', 'carreta', 'cavalo-mecânico', 'carro');
$marcas = array('Chevrolet', 'Citroën', 'Fiat', 'Ford', 'Honda', 'DAF', 'Foton', 'Hyundai', 'Iveco', 'Mercedes-Benz', 'MAN', 'Scania', 'Volkswagen', 'Agrale', 'Peterbilt', 'JAC', 'BYD', 'Sinotruck', 'Shacman', 'Volvo');
$combustivel = array('N/A', 'Flex', 'Álcool', 'Gasolina', 'Diesel', 'Gás');
$estado = array('AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO');

$passa_marca = isset($_POST['marca']) ? $_POST['marca'] : null;
$passa_estado = isset($_POST['uf']) ? $_POST['uf'] : null;
$passa_combustivel = isset($_POST['combustivel']) ? $_POST['combustivel'] : null;
$modelo = isset($_POST['modelo']) ? $_POST['modelo'] : null;
$passa_area = isset($_POST['area']) ? $_POST['area'] : null;
$ano = isset($_POST['ano']) ? $_POST['ano'] : null;
$placa = isset($_POST['placa']) ? $_POST['placa'] : null;
$chassi = isset($_POST['chassi']) ? $_POST['chassi'] : null;
$cor = isset($_POST['cor']) ? $_POST['cor'] : null;
$passa_cipp = isset($_POST['cipp']) ? $_POST['cipp'] : null;
$observacoes = isset($_POST['observacoes']) ? $_POST['observacoes'] : null;
$peso = isset($_POST['peso']) ? $_POST['peso'] : null;
$capacidade = isset($_POST['capacidade']) ? $_POST['capacidade'] : null;

//print_r($_POST);

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleCadastro.css">
    <title>Cadastro Veículo</title>
</head>

<body>
    <fieldset>
        <div class="registroformulario">
            <h1>Cadastro Veículo</h1>
        </div>
        <div class="conteudo centralizacao">
        <form action="inserirveiculo.php" method="post">
            <div>
                <h1>Informações Gerais</h1>
                <h3>Informções do Veículo</h3>
                <select name="modelo" id="tipo">
                    <option value="">--Selecione--</option>
                    <?php
                    foreach ($carros as $ca) {
                    ?>
                        <option value="<?= $ca ?>" <?= $ca == $modelo ? 'selected' : '' ?>><?= $ca ?></option>
                    <?php
                    }
                    ?>
                </select><br><br>
                <select name="area" id="area">
                    <option value="">--Selecione--</option>
                    <?php
                    foreach ($area as $a) {
                    ?>
                        <option value="<?= $a ?>" <?= $a == $passa_area ? 'selected' : '' ?>><?= $a ?></option>
                    <?php
                    }
                    ?>
                </select><br><br>

                <input class="firstInput" type="text" id="placa" name="placa" placeholder="Placa" value="<?= $placa ?>"><br>
                <select name="uf" id="uf">
                    <option value="null">--UF--</option>
                    <?php foreach ($estado as $e) { ?>
                        <option value='<?= $e ?>' <?= $e == $passa_estado ? 'selected' : '' ?>><?= $e ?></option>
                    <?php   } ?>
                </select><br><br>
                <input class="firstInput" type="text" id="chassi" name="chassi" placeholder="Chassi" value="<?= $chassi ?>"><br><br>
                <input class="firstInput" type="text" id="cor" name="cor" placeholder="Cor" value="<?= $cor ?>"><br><br>

                <select name="combustivel" id="combustível">
                    <option value="null">--Selecione--</option>
                    <?php
                    foreach ($combustivel as $com) { ?>
                        <option value="<?= $com ?>" <?= $com == $passa_combustivel ? 'selected' : '' ?>><?= $com ?></option>
                    <?php } ?>
                </select><br><br>

                <select name="marca" id="marca">
                    <option value="null">--Selecione--</option>
                    <?php
                    foreach ($marcas as  $mar) { ?>
                        <option value="<?= $mar ?>" <?= $mar == $passa_marca ? 'selected' : '' ?>><?= $mar ?></option>
                    <?php  } ?>

                </select><br><br>
                <input class="firstInput" type="text" id="ano" name="ano" placeholder="Ano" value="<?= $ano ?>"><br><br>


                <input class="firstInput" type="text" id="peso" name="peso" placeholder="Peso(kg)" value="<?= $peso ?>"><br><br>
                <input class="firstInput" type="text" id="capacidade" name="capacidade" placeholder="Capacidade(kg)" value="<?= $capacidade ?>"><br><br>

                <label for="possuiCIPP">O veículo possui <a title="Certificado de Inspeção para o Transporte de Produtos Perigosos a Granel"><strong>CIPP</strong></a>?</label><br><br>
                <div>
                    <?php
                    foreach ($cipp as $key => $value) { ?>
                        <input type="radio" id="<?= $key ?>" name="cipp" value="<?= $value ?>" <?= $value == $passa_cipp ? 'checked' : '' ?>>
                        <label for="<?= $key ?>"><?= $value ?></label>
                    <?php  } ?>
                </div>
                <textarea name="observacoes" id="observacoes" cols="30" rows="10" placeholder="Observações"><?= $observacoes ?></textarea>

                <div>
                    <button type="submit">Cadastrar</button>
                </div>
            </div>
        </form>
        </div>
    </fieldset>
    <a href="menu.php">Voltar</a>
</body>

</html>