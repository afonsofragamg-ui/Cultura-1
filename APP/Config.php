<?php
// 1º o diretório base
// 2º onde estão as views
// 3º Acesso ao Banco de Dados


define ('BASE_DIR',dirname(__FILE__,1));
define ('VIEWS',BASE_DIR .'/View');

// isso aqui não é utilizado mas será aprendido mais adiante
$_ENV ['db']['host'] = "localhost:3306";
$_ENV ['db']['user'] = "root";
$_ENV ['db']['pass'] = "Lulu2015"; // senha mysql
$_ENV ['db']['database'] = "cultura"; // nome do banco de dados
