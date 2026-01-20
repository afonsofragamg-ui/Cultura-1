<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/estilos/estilos.css">
    <link rel="stylesheet" href="/estilos/paletadecores.css">
    <link rel="stylesheet" href="/estilos/estiloformularios.css">
    <link rel="stylesheet" href="/estilos/estilojanelasmodal.css">
    <script src="funcoes/funcao.js" defer></script>
    <title>Contato</title>
</head>

<body>
    

    <?php
        define ('BASE_DIR',dirname(__FILE__,3));
        define ('VIEWS',BASE_DIR .'/View');
        include VIEWS .'\cabecalho\cabecalho.php';
        include VIEWS .'\menu\menu.php';
        $limpadados = [
            'nome' => "",
            'email' => null,
            'textarea' => null,
        ];
    ?>
       <div class="contato">
            <form action="#" method="post" autocomplete="no">
                <label form="login" class="labelInputTitulo1">Contato</label>
                <br>
                <div class="inputBox">
                    <label form="nome" class="labelInput">Nome completo:</label>
                    <input value="<?= $limpadados['nome']?>"type="text" name="nome" id="idnome" class="inputUser" required >
                </div>

                <div class="inputBox">
                    <label form="email" class="labelInput">Email:</label>
                    <input value="<?= $limpadados['email']?>"type="email" name="email" id="idemail" class="inputUser" required >
                </div>

                <div class="inputBox">
                    <label form="textarea" class="labeltextarea">Mensagem:</label>
                    <textarea class="text" name="textarea" id="idtextarea" cols="20" rows="10"  required>
                    </textarea>
                </div>

                <div class="inputBoxRodape">
                    <input type="submit" name="submit" id="idsubmit" value="Enviar" >
                </div>

                <div class="msnContato" id="idmsnContato">
                    <label form="login" class="labelInputTitulo1">Obrigado pelo seu contato!</label>
                    <br>
                    <label form="login" class="labelInputTitulo2">Em breve daremos retorno.</label>
                    <br>
                   <input type="submit" name="submit" id="idsubmit" value="Fechar">
                </div>
            </form>

        </div>
    <?php 
        include VIEWS .'\rodape\rodape.php'; 
    ?>
    <script>
         document.getElementById("idnome").focus();
    </script>
</body>
</html>