<?php

namespace Cultura\APP\Model;
class PortifolioModel{
    private $id;
    private $nivel;

    public function save() : PortifolioModel
    {
        return new PortifolioModel();
    }

    public function getByid (int $id) : ?PortifolioModel
    {
        return new PortifolioModel ();
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
