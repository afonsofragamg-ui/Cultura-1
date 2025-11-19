<?php

namespace Cultura\APP\Model;

class Boleto{

    public $idboleto;
    public $numeroboleto;
    public $idcontrato;
    public $pagador;
    public $vendimento;
    public $datapagamento;
    public $valor;
    public $textovalor;
    public $recebedor;
    public $observacoes;
    public $qrcod;
    public $idsituacaoboleto;
    public $codigodebarra;
     
    public function save() : Boleto
    {
        return new Boleto();
    }

    public function getByid (int $idboleto) : ?Boleto
    {
        return new Boleto ();
    }

    public function getallrow () : array
    {
        return [];
    }

    public function delete (int $idboleto) : bool
    {
        return false;
    }
}
