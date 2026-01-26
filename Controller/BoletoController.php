<?php
/**
 * Declaração de namespaces com sub-namespaces:
 * https://www.php.net/manual/pt_BR/language.namespaces.nested.php
 */
namespace Cultura\Controller;
use Cultura\Model\Boleto;

/**
 * Declaração de membros de classes estaticos
 * https://www.php.net/manual/pt_BR/language.oop5.static.php
 */
class BoletoController
{
    public static function cadastro()
    {
        echo "";
    }

    public static function listar()
    {
        $boleto = new Boleto();
        $boleto->getAllRows();
    }
}
