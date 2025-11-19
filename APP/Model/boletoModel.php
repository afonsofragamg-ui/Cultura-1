<?php

use Cultura\APP\Controller\BoletoController;

class boletos{

    public $idboleto, $numeroboleto, $idcontrato, $pagador, $vendimento, $datapagamento, $valor, $textovalor, 
    $recebedor, $observaçoes, $qrcod, $idsituacaoboleto, $codigodebarra;
     
    function save() : boletos
    {
        return new boletos ();
    }

    function getByid (int $idboleto) : ?boletos
    {

        return new boletos ();
    }

    function getallrow ()
    {

    }

    function delete(int $idboleto)
    {

    }
}
