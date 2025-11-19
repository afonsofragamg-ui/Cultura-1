<?php
namespace Cultura\APP\Model;
class NivelAcessoModel{
    private $id;
    private $nivel

    public function save() : NivelAcessoModel
    {
        return new NivelAcessoModel();
    }

    public function getByid (int $id) : ?NivelAcessoModel
    {
        return new NivelAcessoModel ();
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
}
