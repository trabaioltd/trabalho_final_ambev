<!DOCTYPE html>
<html lang="pt-BR">
<?php

include('conexao.php');

session_start();

$nomeUsuario = isset($_SESSION['nome_usuario']) ? $_SESSION['nome_usuario'] : null;
$prioridade = isset($_SESSION['prioridade']) ? $_SESSION['prioridade'] : null;

$_SESSION['nome_usuario'] = isset($nomeUsuario) ? $nomeUsuario : null;
$_SESSION['prioridade'] = isset($prioridade) ? $prioridade : null;


$placa = isset($_GET['placa']) ? $_GET['placa'] : null;
$carroceria = isset($_GET['carroceria']) ? $_GET['carroceria'] : null;
$pneu = isset($_GET['pneu']) ? $_GET['pneu'] : null;
$vidros = isset($_GET['vidros']) ? $_GET['vidros'] : null;
$pintura = isset($_GET['pintura']) ? $_GET['pintura'] : null;
$situacao = isset($_GET['situacao']) ? $_GET['situacao'] : null;
$observacoes = isset($_GET['observacoes']) ? $_GET['observacoes'] : null;
$dataprox = isset($_GET['dataprox']) ? $_GET['dataprox'] : null;

$sql = "SELECT * FROM vistoria";
$result = mysqli_query($link, $sql) or die('Query failed: ' . mysqli_error($link));


// print_r($line);

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleTabelas.css">
    <title>Relatório de Vistorias</title>
</head>

<body>
    <table>
        <thead>
            <th>SITUAÇÃO</th>
            <th>PLACA</th>
            <th>CARROCERIA</th>
            <th>PNEU</th>
            <th>VIDROS</th>
            <th>PINTURA</th>
            <th>DATA DA VISTORIA</th>
            <th>PRÓXIMA VISTORIA</th>
            <th>OBSERVAÇÕES</th>
            <?php
            if ($prioridade >= 50) { ?>
                <th>VISTORIAR VEÍCULO</th>
            <?php } ?>
        </thead>

        <tbody>
            <?php
            $ch = curl_init();
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                <tr>
                    <?php
                    if (strtotime($row['dataprox']) < strtotime(date('Y-m-d'))) {
                        $row['situacao'] = (strtotime($row['dataprox']) < strtotime(date('Y-m-d'))) ? 'Expirado' : $row['situacao'];
                    } ?>
                    <td class="<?= ($row['situacao'] === 'Aprovado' && strtotime($row['dataprox']) >= strtotime(date('Y-m-d'))) ? 'green' : ($row['situacao'] === 'Reprovado' ? 'red' : (strtotime($row['dataprox']) < strtotime(date('Y-m-d')) ? 'yellow' : '')) ?>"><?= ($row['situacao'] === 'Pendente' && strtotime($row['dataprox']) < strtotime(date('Y-m-d'))) ? 'Pendente' : $row['situacao'] ?></td>
                    <td><?= $row['placa'] ?></td>
                    <td><?= $row['carroceria'] ?></td>
                    <td><?= $row['pneu'] ?></td>
                    <td><?= $row['vidros'] ?></td>
                    <td><?= $row['pintura'] ?></td>
                    <td><?= $row['dataatual'] ?></td>
                    <td ><?= $row['dataprox'] ?></td>
                    <td><?= $row['observacoes'] ?></td>
                    <?php
                    if ($prioridade >= 50) {
                        $dados_query = http_build_query($row);
                        $url_destino = "vistoria.php?" . $dados_query;
                    ?>
                        <td><a href="<?= $url_destino ?>" <?= http_build_query($row) ?>>Realizar</a></td>
                    <?php } ?>

                </tr>
            <?php }

            $dados_query = http_build_query([
                'placa' => $placa,
                'carroceria' => $carroceria,
                'pneu' => $pneu,
                'vidros' => $vidros,
                'pintura' => $pintura,
                'situacao' => $situacao,
                'observacoes' => $observacoes,

            ]);
            ?>
        </tbody>

    </table>

    <a id="buttonVoltar" href="menu.php">Voltar</a>

</body>

</html>