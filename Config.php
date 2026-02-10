<?php
// 1º o diretório base
// 2º onde estão as views
// 3º Acesso ao Banco de Dados

define ('BASE_DIR',dirname(__FILE__,1));
define ('VIEWS',BASE_DIR .'/View');
define ('DAOS',BASE_DIR .'/DAO');
define ('CONTROLLERS',BASE_DIR .'/Controller');
define ('ESTILOS',BASE_DIR .'/estilos');
define ('FUNCOES',BASE_DIR .'/funcoes');
define ('IMAGENS',BASE_DIR .'/imagens');
define ('MODELS',BASE_DIR .'Model/');

//define ('VIEWS_menu',BASE_DIR .'/View/menu');

// isso aqui não é utilizado mas será aprendido mais adiante
$_ENV ['db']['host'] = "localhost:3306";
$_ENV ['db']['user'] = "root";
$_ENV ['db']['pass'] = "Lulu2015"; // senha mysql
$_ENV ['db']['database'] = "cultura"; // nome do banco de dados
