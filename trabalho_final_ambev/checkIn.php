<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Check-in</h1>

    <label for="placaVeiculo">Placa do Veículo</label>
    <input type="text" name="placaVeiculo" id="placaVeiculo">

    <input type="text" name="tipoVeiculo" id="tipoVeiculo" placeholder="Tipo do Veículo"><br><br>

    <label for="condutorResponsavel">Condutor Responsável</label>
    <select name="condutorResponsavel" id="condutorResponsavel">
        <option value="condutor1">Condutor1</option>
        <option value="condutor2">Condutor2</option>
    </select><br><br>

    <label for="auxiliarResponsavel">Auxiliar Responsável</label>
    <select name="auxiliarResponsavel" id="auxiliarResponsavel">
        <option value="auxiliar1">Auxiliar1</option>
        <option value="auxiliar2">Auxiliar2</option>
    </select><br><br>


    <label for="saidaVeiculo">Saída do Veículo da Garagem</label>
    <input type="datetime-local" name="saidaVeiculo" id="saidaVeiculo"><br><br>

    <label for="destino">Destino</label>
    <input type="text" name="destino" id="destino"><br><br>

    <label for="previsaoChegada">Previsão de Chegada ao Destino</label>
    <input type="datetime-local" name="previsaoChegada" id="previsaoChegada"><br><br>

    <label for="conducaoContinua">Condução Contínua</label><br><br>
    <label for="conducaoContinua">Máximo</label>
    <input type="text">
    <label for="conducaoContinua">min</label><br><br>

    <label for="intervaloDescanso">Intervalo Descanso</label><br><br>
    <label for="intervaloDescanso">Máxima</label>
    <input type="text">
    <label for="intervaloDescanso">min</label><br><br>

    <label for="intervaloRefeicoes">Intervalo Refeições</label><br><br>
    <label for="intervaloRefeicoes">Máxima</label>
    <input type="text">
    <label for="intervaloRefeicoes">min</label><br><br>

    <textarea name="observacoes" id="observacoes" cols="30" rows="10" placeholder="Observações"></textarea><br><br>

    <div class="containerbutton">
        <input class="buttonLink" type="submit" value="Cadastrar Veículo">
    </div><br><br>
</body>

</html>