<?php

namespace Cultura\APP\Model;
class PreCadastro{
    private $id;
    private $nivel;

    public function save() : PreCadastro
    {
        return new PreCadastro();
    }

    public function getByid (int $id) : ?PreCadastro
    {
        return new PreCadastro ();
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
