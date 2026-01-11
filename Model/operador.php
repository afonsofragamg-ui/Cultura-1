<?php

namespace Cultura\APP\Model;
class Operador{
    private $id;
    private $nivel;

    public function save() : Operador
    {
        return new Operador();
    }

    public function getByid (int $id) : ?Operador
    {
        return new Operador ();
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
