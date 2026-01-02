<?php

namespace Cultura\APP\Model;
use Cultura\APP\DAO\BoletoDao;

class Boleto{

    public $idboletos;
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
    public $codigodebarra;
    public $id_situacaoboleto;
    public $id_fomaspagamento;
    public $id_contato;
   
    public function save() : Boleto
    {
        return (new Boleto())->save($this);
    }

    public function getByid (int $idboletos) : ?Boleto
    {
        return (new Boleto());
    }
    

    public function getAllRows () : array
    {
        return [];
    }

    public function delete (int $idboletos) : bool
    {
        return false;
    }
}
