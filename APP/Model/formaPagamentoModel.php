<?php
namespace Cultura\APP\Model;
class FormaPagamentoModel{

    private $id;
    private $tipo;

    public function save() : FormaPagamentoModel
    {
        return new FormaPagamentoModel();
    }

    public function getByid (int $id) : ?FormaPagamentoModel
    {
        return new FormaPagamentoModel ();
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

