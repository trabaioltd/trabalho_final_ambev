<!DOCTYPE html>
<html lang="pt-BR">
<?php
include('conexao.php');

session_start();

$nomeUsuario = isset($_SESSION['nome_usuario']) ? $_SESSION['nome_usuario'] : null;
$prioridade = isset($_SESSION['prioridade']) ? $_SESSION['prioridade'] : null;

$_SESSION['nome_usuario'] = $nomeUsuario;
$_SESSION['prioridade'] = $prioridade;

$sql = "SELECT * FROM usuarios ";
$result = mysqli_query($link, $sql) or die('Query failed: ' . mysqli_error($link));

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleTabelas.css">
    <title>Usuários</title>
</head>

<body>
    <table>
        <thead>
            <th>NOME</th>
            <th>CARGO</th>
            <th>CRIADOR DO USUÁRIO</th>
            <th>OBSERVAÇÕES</th>
            <?php
            if ($prioridade >= 50) { ?>
                <th>MUDAR SENHA</th>
            <?php } ?>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                <tr>
                    <td><?= $row['login'] ?></td>
                    <td><?= $row['cargo'] ?></td>
                    <td><?= $row['superior'] ?></td>
                    <td><?= $row['observacoes'] ?></td>
                    <?php
                    if ($prioridade >= 50) {
                        $id = $row['id'];
                    ?>
                        <td><a href="admsenha.php?id=<?= $id ?>">Realizar <?php $id ?></a></td>
                        <input type="hidden" name="id" value="<?= $id ?>">
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <a id="buttonVoltar" href="menu.php">Voltar</a>

</body>

</html>