<?php
namespace Cultura\APP\Model;
class FormaPagamento{

    private $id;
    private $tipo;

    public function save() : FormaPagamento
    {
        return new FormaPagamento();
    }

    public function getByid (int $id) : ?FormaPagamento
    {
        return new FormaPagamento ();
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

