<?php

namespace Cultura\APP\Model;
class Situacao{
    private $id;
    private $nivel;

    public function save() : Situacao
    {
        return new Situacao();
    }

    public function getByid (int $id) : ?Situacao
    {
        return new Situacao ();
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
