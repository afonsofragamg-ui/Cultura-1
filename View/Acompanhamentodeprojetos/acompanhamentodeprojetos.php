<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro artítico cultural</title>
    <link rel="stylesheet" href="/estilos/estilos.css">
    <title>Acompanhamento</title>
</head>
<body>
    <?php 
        define ('BASE_DIR',dirname(__FILE__,3));
        define ('VIEWS',BASE_DIR .'/View');
        include VIEWS .'\cabecalho\cabecalho.php';
        include VIEWS .'\menu\menu.php';
    ?>
   

   	<section class="normal">
        <p>Quando se contrata uma empresa de assessoria para concretização de projetos culturais,  o acompanhamento dos mesmos se torna mais eficaz. O conhecimento da empresa quanto aos trâmites para cadastramento no Ministério da Cultura e sobre os meandros das leis de incentivo, é fundamental para a boa realização de acompanhamento de projetos culturais. Integrar alguma manifestação artístico-cultural na sociedade por meio de práticas realizadas a partir de orçamentos advindos da renúncia fiscal é uma ação que merece respeito.</p>
    </section>

    <section class="img" id="img02">
        <p>É importante fazer o acompanhamento dos projetos, pois seus  produtos, muitas vezes, não são exatamente um material. Intervenções, palestras, cursos profissionalizantes são alguns exemplos de produtos culturais aplicados em diversas comunidades. O acompanhamento de projetos culturais desse tipo é uma metodologia que potencializa os efeitos do projeto para melhor eficácia de aplicação.</p>
    </section>

    <SECTION class="normal">
        <P>Outra forma de se realizar a etapa de acompanhamento de projetos culturais é seguir o andamento pelo site do Sistema de Apoio às Leis de Incentivo à Cultura (Salic), onde estão cadastrados todos os projetos culturais vigentes e que podem ser consultados livremente.</P>
    </SECTION>
    <br>
    <?php include VIEWS .'\rodape\rodape.php'; ?>
</body>
</html>