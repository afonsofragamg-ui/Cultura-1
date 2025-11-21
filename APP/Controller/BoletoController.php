<?php
/**
 * Declaração de namespaces com sub-namespaces:
 * https://www.php.net/manual/pt_BR/language.namespaces.nested.php
 */
namespace Cultura\APP\Controller;
use Cultura\APP\Model;

/**
 * Declaração de membros de classes estaticos
 * https://www.php.net/manual/pt_BR/language.oop5.static.php
 */
class BoletoController
{
    public static function cadastro()
    {
        echo "cadastrar aluno";
    }

    public static function listar()
    {
        echo "listar aluno";
        $boleto = new BoletoController;
        $boleto->();
    }
}
