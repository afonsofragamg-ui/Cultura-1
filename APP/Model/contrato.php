<?php
namespace Cultura\APP\Model;
class Contrato{
    public $id;
    public $codigocliente;
    public $modadlidade;
    public $datainicio;
    public $datatermino;
    public $datavencimento;

    public function save() : Contrato
    {
        return new Contrato();
    }

    public function getByid (int $id) : ?Contrato
    {
        return new Contrato ();
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
