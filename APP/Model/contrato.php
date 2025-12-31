<?php
namespace Cultura\APP\Model;
use Cultura\APP\DAO\ContratoDAO;
class Contrato{
    public $idcontrato;
    public $datainicio;
    public $datatermino;
    public $diavencimento;
    public $id_modadlidade;

    public function save() : Contrato
    {
        return new Contrato();
    }

    public function getByid (int $id) : ?Contrato
    {
        return new Contrato ($id);
    }

    public function getallrow () : array
    {
        return [];
    }

    public function delete (int $id) : bool
    {
        return false;
    }

}
