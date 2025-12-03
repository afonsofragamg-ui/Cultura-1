<?php

namespace Cultura\APP\Model;
use Cultura\APP\DAO\BoletoDao;

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
        return (new Boleto())->save($this);
    }

    public function getByid (int $id) : ?Boleto
    {
        return (new Boleto())->selectById($id);
    }
    

    public function getAllRows () : array
    {
        return (new Boleto())->select();
    }

    public function delete (int $id) : bool
    {
        return false;
    }
}
