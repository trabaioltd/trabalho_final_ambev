<!DOCTYPE html>
<html lang="pt-BR">
<?php
session_start();

include('conexao.php');
$name_usuario = isset($_POST['name_usuario']) ? $_POST['name_usuario'] : null;
$name_senha = isset($_POST['name_senha']) ? $_POST['name_senha'] : null;

?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styleLogin.css">
  <title>Login</title>
</head>

<body>
  <div>
    <div class="containerAreaLogin">
      <img src="img/TarumaDesfoque.jpg" alt="" class="teste">
      <div class="containerFormLogin">
        <div>
          <form action="verificarlogin.php" method="post" class="formularioLogin">
            <fieldset>
              <div>
                <div class="cabecalhoLogin">
                  <div class="logoLogin">
                    <img src="img/logoTarumaBordaGrossa.png">
                  </div>
                </div>

                <div class="containerFormularioLogin">
                  <div>
                    <input required type="text" id="usuario-login" name="name_usuario" placeholder="USUÁRIO" value="<?= $name_usuario ?>" class="input-area-login"><br>
                  </div>

                  <div>
                    <input required type="password" id="senha-login" name="name_senha" placeholder="SENHA" value="<?= $name_senha ?>" class="input-area-login"><br>
                  </div>
                </div>

                <p class="esqueceuSenhaLogin"><a title="Procure a gestão de T.I."> Esqueci a senha </a>?</p>
              </div>
              <div class="buttonsLogin">
                <div>
                  <button id="buttonEntrar"> Entrar </button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>

</html>