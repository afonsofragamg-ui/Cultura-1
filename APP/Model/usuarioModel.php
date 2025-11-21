<?php

namespace Cultura\APP\Model;
class UsuarioModel{
    private $id;
    private $nivel;

    public function save() : UsuarioModel
    {
        return new UsuarioModel();
    }

    public function getByid (int $id) : ?UsuarioModel
    {
        return new UsuarioModel ();
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
