<?php
// 1º o diretório base
// 2º onde estão as views
// 3º Acesso ao Banco de Dados


define ('BASE_DIR',dirname(__FILE__,1));
define ('VIEWS',BASE_DIR .'/View');

$_ENV ['db']['host'] = "localhost:3306";
$_ENV ['db']['user'] = "root";
$_ENV ['db']['pass'] = "Lulu2015";
$_ENV ['db']['database'] = "cultura";
