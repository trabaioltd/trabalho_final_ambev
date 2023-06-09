<!DOCTYPE html>
<html lang="pt-BR">
<?php
include('conexao.php');
if (isset($_GET['logout']) && $_GET['logout'] == 'logout') {
    session_start(); // Inicia a sessão
    session_destroy(); // Destroi a sessão
    // Redireciona para a página de login ou qualquer outra página desejada
    header("Location: index.php");
    exit;
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleIndex.css">
    <title>Tarumã Distribuidora de Bebidas</title>

</head>

<body>
    <header class="headerCenter">
        <section id="barraDeMenu">
            <div>
                <img src="img/logoTarumaBordaGrossa.png" alt="">
            </div>
            <div class="divMainNav">
                <div class="mainNav">
                    <a href="" class="textoMainNav"> Home </a>
                    <a href="" class="textoMainNav"> Sobre </a>
                    <a href="" class="textoMainNav"> Serviços </a>
                    <a href="" class="textoMainNav"> Contato </a>
                </div>
            </div>
            <div id="divLogin">
                <div id="login">
                    <div>
                        <img src="img/pessoa-azul.png" alt="">
                    </div>
                    <div>
                        <a href="login.php" class="textologin"> Login </a>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <div class="conteudo">
        <div class="bodyContent">
            <div>
                <img class="imgFundo" src="img/tarumaimgteste3.png" alt="">
            </div>
            <div id="tituloHome">
                <div>
                    <h3>Tarumã Distribuidora Ambev</h3>
                </div>
                <div>
                    <p>Este é o lugar ideal para obter informações abrangentes sobre a Taruma Distribuidora de Bebidas
                        de Juiz de Fora, MG. A empresa é especializada no ramo de Distribuição de Bebidas, e aqui você
                        encontrará todas as informações que procura.</p>
                </div>
            </div>

            <section>
                <div id="divCards">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/deOndeVemONomeTaruma.png" alt="Você sabe de onde vem o nome Tarumã?">
                        <div class="card-body">
                            <h5 class="card-title">Você sabia?</h5>
                            <p class="card-text">O nome <strong>TARUMÃ</strong> originou-se de uma árvore de copa
                                grande, do
                                Centro-Oeste da Região Amazônica, capaz de, por seu grande porte, proporcionar sombra e
                                abrigo a muitos.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/horarioAtendimento.jpg" alt="Horário de atendimento">
                        <div class="card-body">
                            <h5 class="card-title">Fique ligado!</h5>
                            <p class="card-text">Domingo: Fechado <br>
                                Segunda-feira:
                                09:00 ‒ 18:00 <br>
                                Terça-feira:
                                09:00 ‒ 18:00 <br>
                                Quarta-feira:
                                09:00 ‒ 18:00 <br>
                                Quinta-feira:
                                09:00 ‒ 18:00 <br>
                                Sexta-feira:
                                09:00 ‒ 18:00 <br>
                                Sábado:
                                09:00 ‒ 12:00
                            </p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/5S.png" alt="Horário de atendimento">
                        <div class="card-body">
                            <h5 class="card-title">Quer saber sobre 5S?</h5> 
                            <p class="card-text"><a href="5s.php">Saiba mais...</a></p>
                        </div>
                    </div>
                </div>
                <div>

                </div>
            </section>

            <section>
                <div id="rectangle">
                    <p class="tituloPadrao"> SOBRE </p>
                </div>
                <div>
                    <p class="textoPadrao">A empresa Taruma Distribuidora De Bebidas Ltda que tem como razão social
                        Taruma
                        Distribuidora De
                        Bebidas
                        Ltda foi fundada em 23/01/1997 e está cadastrada na Solutudo no segmento de Depósitos de Bebidas
                        com
                        o
                        CNPJ 01.657.682/0001-72. No mercado, a empresa está sediada no endereço Rodovia BR-040 777 no
                        bairro Distrito Industrial
                        na cidade de Juiz de Fora, MG. A empresa Taruma
                        Distribuidora De
                        Bebidas Ltda está cadastrada na Receita Federal sob o CNAE 4635-4/02 com atividade fim de
                        Comércio
                        Atacadista
                        De Cerveja, Chope E Refrigerante.</p>
                    <p class="textoPadrao">Oferecendo atendimento em diversos horários e localizadas em bairros e
                        no
                        centro, as distribuidoras de bebidas trabalham com uma vasta gama de opções para os
                        consumidores.</p>


                    <p class="textoPadrao"><strong>Endereço no bairro Distrito Industrial:</strong></p>

                    <p class="textoPadrao">Logradouro: Rodovia Br 040<br>
                        Número: 777<br>
                        Bairro: Distrito Industrial<br>
                        Cidade: Juiz de Fora<br>
                        Estado: Minas Gerais<br>
                        CEP: 36092-005</p>

                    <div class="containerIcons">
                        <a href="hhttps://www.google.com/maps?q=RODOVIA%20BR-040,%20777%20JUIZ%20DE%20FORA%20-%20MG"><img src="img/icon-maps.png" alt="Maps" class="iconeMapa"></a>
                        <p> Explore o mapa e descubra nossa localização! Clique aqui para visualizar onde estamos. </p>
                    </div>
                </div>
            </section>
            <section>
                <div id="rectangle">
                    <p class="tituloPadrao"> Serviços </p>
                </div>
                <div>
                    <p class="textoPadrao"> Entre os produtos disponíveis estão
                        refrigerantes, águas, sucos, bebidas esportivas e energéticas, chás, infusões, café, cervejas,
                        vinhos,
                        destilados e coquetéis prontos para beber. Além disso, possuem acessórios e suprimentos para
                        complementar
                        as necessidades dos clientes. As distribuidoras de bebidas facilitam a vida dos consumidores ao
                        aceitar
                        pagamentos à vista, no cartão de crédito e débito. Também realizam entregas a domicílio ou
                        disponibilizam
                        a opção de retirada na loja. Frequentemente, oferecem promoções atraentes para satisfazer e
                        fidelizar seus
                        clientes.</p>


                </div>
            </section>
            <section>
                <div id="rectangle">
                    <p class="tituloPadrao"> Contato </p>
                </div>
                <div>
                    <div class="containerIcons">
                        <img src="img/icon-telefone.png" alt="Telefone: " class="iconesContato">
                        <p>(32) 3691-8208 (32) 3691-8234 (32) 9943-9010</p>
                    </div>
                    <div class="containerIcons">
                        <img src="img/icon-whatsapp.png" alt="Whatsapp: " class="iconesContato">
                        <p>(32) 3691-8208 (32) 3691-8234 (32) 9943-9010</p>
                    </div>
                    <div class="containerIcons">
                        <a href="https://www.instagram.com/tarumadistribuidoraambev/"><img src="img/icon-instagram.png" alt="Instagram: " class="iconesContato"></a>
                        <a href="https://www.instagram.com/tarumadistribuidoraambev/">tarumadistribuidoraambev</a>
                    </div>
                </div>
            </section>

            <section class="logotiposParcerias">
                <div id="logoLTD">
                    <img src="img/logoLTD.jpeg" alt="" srcset="">
                </div>
                <div id="logoEstacio">
                    <img src="img/logoEstacio.png" alt="" srcset="">
                </div>
                <div id="logoAmbev">
                    <img src="img/logoAmbev.jpeg" alt="" srcset="">
                </div>
            </section>
        </div>
    </div>

    <div>
        <footer class="containerFooter">
            <div>
                <div class="text-center p-3">
                    © 2023 Copyright:
                    <a class="text-white" href="">tarumadistribuidoraambev.com</a>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>