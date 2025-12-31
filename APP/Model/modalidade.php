<?php
namespace Cultura\APP\Model;
use Cultura\APP\DAO\;

class Modalidade{
    private $id;
    private $modalidade;
    private $valor;

    public function save() : Modalidade
    {
        return new Modalidade();
    }

    public function getByid (int $id) : ?Modalidade
    {
        return new Modalidade ();
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

