<?php
namespace Cultura\APP\Model;
class NivelAcesso{
    private $id;
    private $nivel;

    public function save() : NivelAcesso
    {
        return new NivelAcesso();
    }

    public function getByid (int $id) : ?NivelAcesso
    {
        return new NivelAcesso ();
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

