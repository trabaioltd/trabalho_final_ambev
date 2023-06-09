<?php
    include('conexao.php');

     
    $sql = "SELECT * FROM modelo";
    $result = mysqli_query($link, $sql) or die('Query failed: ' . mysqli_error($link));
    
    if (mysqli_num_rows($result) >= 0) {
        ?>
        <select name="placa">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $placa = $row['placa'];
                ?>
                <option value="<?= $placa ?>"><?= $placa ?></option>
                <?php
            }
            ?>
        </select>
        <?php
    } else {
        echo 'Nenhuma linha encontrada.';
    }
    ?>

<script>
    var urlParams = new URLSearchParams(window.location.search);
    var placa = urlParams.get('placa');
    if (placa) {
        var select = document.getElementsByName('placa')[0];
        for (var i = 0; i < select.options.length; i++) {
            if (select.options[i].value === placa) {
                select.options[i].selected = true;
                break;
            }
        }
    }
</script>