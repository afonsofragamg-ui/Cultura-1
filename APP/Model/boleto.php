<?php

namespace Cultura\APP\Model;

class Boleto{

    public $id;
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

    public function getByid (int $id) : ?Boleto
    {
        return new Boleto ();
    }

    public function getAllRows () : array
    {
        return [];
    }

    public function delete (int $id) : bool
    {
        return false;
    }
}
