<?php

namespace Cultura\APP\Model;
class PreCadastroModel{
    private $id;
    private $nivel;

    public function save() : PreCadastroModel
    {
        return new PreCadastroModel();
    }

    public function getByid (int $id) : ?PreCadastroModel
    {
        return new PreCadastroModel ();
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
