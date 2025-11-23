<?php

namespace Cultura\APP\Model;
class Usuario{
    private $id;
    private $nivel;

    public function save() : Usuario
    {
        return new Usuario();
    }

    public function getByid (int $id) : ?Usuario
    {
        return new Usuario ();
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
