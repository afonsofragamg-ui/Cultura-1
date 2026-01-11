<?php

namespace Cultura\APP\Model;
class ValorMensalidade{
    private $id;
    private $nivel;

    public function save() : ValorMensalidade
    {
        return new ValorMensalidade();
    }

    public function getByid (int $id) : ?ValorMensalidade
    {
        return new ValorMensalidade ();
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
