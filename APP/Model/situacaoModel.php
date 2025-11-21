<?php

namespace Cultura\APP\Model;
class SituacaoModel{
    private $id;
    private $nivel;

    public function save() : SituacaoModel
    {
        return new SituacaoModel();
    }

    public function getByid (int $id) : ?SituacaoModel
    {
        return new SituacaoModel ();
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
