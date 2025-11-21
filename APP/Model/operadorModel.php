<?php

namespace Cultura\APP\Model;
class OperadorModel{
    private $id;
    private $nivel;

    public function save() : OperadorModel
    {
        return new OperadorModel();
    }

    public function getByid (int $id) : ?OperadorModel
    {
        return new OperadorModel ();
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
