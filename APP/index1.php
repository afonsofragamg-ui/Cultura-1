<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Pagina para cadastro de dados de artistas para projetos">
        <meta name="keywords" content="Cultura,Incentivo, Projeto Cultural">
        <meta name="autor" content="Afonso Henrique Fraga de Souza">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="estilos/estilos.css">
        <link rel="stylesheet" href="estilos/paletadecores.css">
        <link rel= "shortcut icon" href="#" type="image/x-icon">
        <title>Cadastro Cultural</title>
    </head>

    <body class="index" onshow="logout.php()">
        <?php require_once 'cabecalho.php';
         require_once 'menu.php';
         session_start();
         session_destroy();
         ?>
        <section class="img" id="img06">
            <h2>Cultura em sua essência:</h2>
            <p>
                Tem o significado de cuidar, cultivar e crescer ou ainda pode ser um conjunto de hábitos, crenças e conhecimentos de um povo ou um determinado grupo que cultiva, de algum modo, um padrão estético semelhante.
            </p>
        </section>
        <?php include_once 'rodape.php'?>
    </body>
</html>