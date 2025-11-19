<?php 

use APP\Controller\boletoController;
use APP\Controller\BoletoController as ControllerBoletoController;

$url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

switch ($url) {

case  '/Cultura/APP/':
    echo "página inicial";
break;

case '/Cultura/APP/Controller/':
    echo "página Controller";
break;

}



