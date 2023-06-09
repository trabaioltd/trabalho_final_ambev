<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Check-out</h1>

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

    <label for="cargaTransportada">Carga entregue</label><br><br>

    <input type="checkbox" name="refrigerante" id="refrigerante">
    <label for="refrigerante">Refrigerante</label><br>

    <input type="checkbox" name="agua" id="agua">
    <label for="agua">Água</label><br>

    <input type="checkbox" name="suco" id="suco">
    <label for="suco">Suco</label><br>

    <input type="checkbox" name="bebidaEspotiva" id="bebidaEspotiva">
    <label for="bebidaEspotiva">Bebida Esportiva</label><br>

    <input type="checkbox" name="energetico" id="energetico">
    <label for="energetico">Energético</label><br>

    <input type="checkbox" name="cha" id="cha">
    <label for="cha">Chá</label><br>

    <input type="checkbox" name="infusao" id="infusao">
    <label for="infusao">Infusão</label><br>

    <input type="checkbox" name="cafe" id="cafe">
    <label for="cafe">Café</label><br>

    <input type="checkbox" name="cerveja" id="cerveja">
    <label for="cerveja">Cerveja</label><br>

    <input type="checkbox" name="vinho" id="vinho">
    <label for="vinho">Vinho</label><br>

    <input type="checkbox" name="destilado" id="destilado">
    <label for="destilado">Destilado</label><br>

    <input type="checkbox" name="coquetel" id="coquetel">
    <label for="coquetel">Coquetel</label><br>

    <input type="checkbox" name="outros" id="outros">
    <label for="outros">Outros</label><br>

    <input type="text" name="outros" id="item1"><br><br>


    <label for="chegadaVeiculoDestino">Chegada do Veículo ao Destino</label>
    <input type="datetime-local" name="chegadaVeiculoDestino" id="chegadaVeiculoDestino"><br><br>

    <label for="destino">Destino</label>
    <input type="text" name="destino" id="destino"><br><br>

    <label for="chegadaVeiculoGaragem">Chegada do Veículo na Garagem</label>
    <input type="datetime-local" name="chegadaVeiculoGaragem" id="chegadaVeiculoGaragem"><br><br>

    <textarea name="observacoes" id="observacoes" cols="30" rows="10" placeholder="Houve alguma intercorrência?"></textarea><br><br>

    <div class="containerbutton">
        <input class="buttonLink" type="submit" value="Cadastrar Veículo">
    </div><br><br>
</body>

</html>