<?php

namespace Cultura\APP\Model;

class BoletoModel{

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
     
    public function save() : BoletoModel
    {
        return new BoletoModel();
    }

    public function getByid (int $idboleto) : ?BoletoModel
    {
        return new BoletoModel ();
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
