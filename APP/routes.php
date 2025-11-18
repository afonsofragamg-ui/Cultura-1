<?php 

use APP\Controller\boletoController;

$url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

switch ($url)
{
    case '/':
        echo "página inicial";
    break;

    case '/boleto/cadastro';
     echo "cadastra Boleto";
    break;

    case '/boleto/Lista';
     echo "listar Boleto";
    break;
}
