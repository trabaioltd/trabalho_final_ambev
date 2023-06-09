<!DOCTYPE html>
<html lang="pt-BR">
<?php
include('conexao.php');

session_start();

$nomeUsuario = isset($_SESSION['nome_usuario']) ? $_SESSION['nome_usuario'] : null;
$prioridade = isset($_SESSION['prioridade']) ? $_SESSION['prioridade'] : null;

$_SESSION['nome_usuario'] = isset($nomeUsuario) ? $nomeUsuario : null;
$_SESSION['prioridade'] = isset($prioridade) ? $prioridade : null;

$sql = "SELECT * FROM modelo ";
$result = mysqli_query($link, $sql) or die('Query failed: ' . mysqli_error($link));

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleTabelas.css">
    <title>Vistoria de Veículos</title>
</head>

<body>
    <table>
        <thead>
            <th>MODELO</th>
            <th>PLACA</th>
            <th>CHASSI</th>
            <th>COR</th>
            <th>COMBUSTÍVEL</th>
            <th>MARCA</th>
            <th id="tdAno">ANO</th>
            <th>PESO</th>
            <th>CAPACIDADE</th>
            <th>CIPP</th>
            <th>ESTADO</th>
            <th>ÁREA</th>
            <th>OBSERVAÇÕES</th>
            <?php
            if ($prioridade >= 50) { ?>
                <th>VISTORIAR VEÍCULO</th>
            <?php } ?>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                <tr>
                    <td><?= $row['modelo'] ?></td>
                    <td><?= $row['placa'] ?></td>
                    <td><?= $row['chassi'] ?></td>
                    <td><?= $row['cor'] ?></td>
                    <td><?= $row['combustivel'] ?></td>
                    <td><?= $row['marca'] ?></td>
                    <td><?= $row['ano'] ?></td>
                    <td><?= $row['peso'] ?></td>
                    <td><?= $row['capacidade'] ?></td>
                    <td><?= $row['cipp'] ?></td>
                    <td><?= $row['estado'] ?></td>
                    <td><?= $row['area'] ?></td>
                    <td><?= $row['observacoes'] ?></td>
                    <?php
                    if ($prioridade >= 50) { ?>
                        <td><a href="vistoria.php?placa=<?= urlencode($row['placa']) ?>">Realizar</a></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <a id="buttonVoltar" href="menu.php">Voltar</a>
</body>

</html>