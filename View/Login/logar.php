<?php

  global $u;
  global $condicao;
  
  if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    require_once 'conectabanco.php';
    require_once 'Usuario.class.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="estilos/paletadecores.css">
    <link rel="stylesheet" href="estilos/estiloformularios.css">
    <link rel="stylesheet" href="estilos/estilojanelasmodal.css">
    <title>Logar</title>
</head>

<body>
    <?php require_once 'cabecalho.php' ?>
    <?php require_once 'menu.php'?>
    <div class="login">

      <?php
          $u = new Usuario();

          $email = addslashes ($_POST['email']);
          $senha = addslashes ($_POST['senha']);
          if($u->login($email, $senha)){
            if(isset($_SESSION['codigo'])){
              $nivel = ($_SESSION['idnivel']);
              $status = ($_SESSION['idcondicao']);
              
              if($nivel == "1") {
                header('Location: administrador/menuadministrador.php');
              }
              if($nivel == "2") {
                header('Location: financeiro/menufinanceiro.php');
              }
              if($nivel == "3"){
                header('Location: Cliente/menucliente.php');
              }
              if($nivel == "4"){
                header('');
              }
            }
          }else{?>
<!--Inicio janelas modal-->
        <!-- janela de dados invalidos -->
        <div id="fundo"></div>
        <div class="modalerro" id="idmodalerro">
            <div class="conteudo-modal">
                <h2>Dados Inválidos</h2>
            </div>
            <div class="corpo-modal">
                <p>E-mail ou senha inválidos</p>
            </div>
            <div class="inputBoxrodape">
                <button class="botoes" id="idfechar">Fechar</button>
            </div>
        </div>
        <script>
              document.getElementById("idmodalerro").style.display = 'block';
              
              const fecharmodal = document.querySelector ("#idfechar");

              var btn1 = [fecharmodal].forEach((el)=> {
              el.addEventListener("click", () => fechar ());
              })

              function fechar() {
                window.location.href = "login.php";
              }
        </script>
        <?php }
  }
  else{
          header('Location: login.php');
  }
  ?>
  </div>
<?php include_once 'rodape.php'?>
</body>
</html>
