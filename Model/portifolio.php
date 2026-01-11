<?php

namespace Cultura\APP\Model;
class Portifolio{
    private $id;
    private $nivel;

    public function save() : Portifolio
    {
        return new Portifolio();
    }

    public function getByid (int $id) : ?Portifolio
    {
        return new Portifolio ();
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
