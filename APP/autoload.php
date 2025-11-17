<?php

use FFI\Exception;

spl_autoload_register (function($nome_da_classe)
{
 $arquivo = BASE_DIR . "/" . $nome_da_classe . ".php";
 echo $arquivo;
 if (file_exists($arquivo))
    include $arquivo;
//else
    //throw new Exception("arquivo não existe");
//echo "<br/> <br/> <br/>";

//echo "<hr>";
}
);


