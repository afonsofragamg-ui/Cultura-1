<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/estilos/estilos.css">
    
    <link rel="stylesheet" href="/estilos/estiloformularios.css">
    <link rel="stylesheet" href="/estilos/estilojanelasmodal.css">
    <script src="funcoes/funcao.js" defer></script>
    <title>Login</title>
</head>

<body>
    <?php 
        define ('BASE_DIR',dirname(__FILE__,3));
        define ('VIEWS',BASE_DIR .'/View');
        include VIEWS .'\cabecalho\cabecalho.php';
        include VIEWS .'\menu\menu.php';    
    ?>
    
        <div class="login" id="idlogin">
            <div id="fundo">
            </div>
            <?php
                $limpadados = [
                    'email' => null,
                    'senha' => null,
                ];
            ?>
            <form action="logar.php" method="post" enctype="multipart/form-data"    class="formLogin" id="idformLogin">
                <label form="login" class="labelInputTitulo1">Acesso ao Sistema</label>
                <br>
                <label form="login" class="labelInputTitulo2">Seja bem-vindo!</label>
                <br>
                
                <div class="inputBox">
                    <label form="login" class="labelInput">Email:</label>
                    <input value="<?= $limpadados['email'] ?>" type="email" name="email" id="idemail" class="inputUser" autofocus="on" placeholder="Digite seu email" required>
                </div>
                
                <div class="inputBox">
                    <label form="login" class="labelInput">Senha:</label>
                    <input value="<?= $limpadados['senha']?>" type="password" name="senha" id="idsenha" class="inputUser" placeholder="Digite sua senha" required>
                </div>

                <div class="inputBoxesqueceu">
                    <btn class="btnesqueceu" id="idbtnesqueceu" onclick="esqueceusenha()"> Esqueceu sua senha?</btn>
                </div>

                <input type="submit" name="submit" id="idacesso" value="Acessar">

            </form>
        </div>

        <?php include VIEWS .'\rodape\rodape.php'; ?>
</body>
</html>