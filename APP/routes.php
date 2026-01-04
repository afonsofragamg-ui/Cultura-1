<?php

use APP\Controller\boletoController;
use APP\Controller\BoletoController as ControllerBoletoController;

$url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

if ($url === '/Cultura1/APP/') {
    echo "página inicial";
} elseif ($url === '/Cultura1/APP/Controller/') {
    echo "página Controller";
} else {
    // default case: route not found
    http_response_code(404);
    echo "Página não encontrada";
}



