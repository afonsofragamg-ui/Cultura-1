<?php

namespace Cultura\APP\Model;
class ValorMensalidadeModel{
    private $id;
    private $nivel;

    public function save() : ValorMensalidadeModel
    {
        return new ValorMensalidadeModel();
    }

    public function getByid (int $id) : ?ValorMensalidadeModel
    {
        return new ValorMensalidadeModel ();
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
