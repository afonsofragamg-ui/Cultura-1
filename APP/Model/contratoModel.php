<?php
namespace Cultura\APP\Model;
class ContratoModel{
    public $id;
    public $codigocliente;
    public $modadlidade;
    public $datainicio;
    public $datatermino;
    public $datavencimento;

    public function save() : ContratoModel
    {
        return new ContratoModel();
    }

    public function getByid (int $id) : ?ContratoModel
    {
        return new ContratoModel ();
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
