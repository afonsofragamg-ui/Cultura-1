<?php
namespace Cultura\APP\Model;
class ModalidadeModel{
    private $id;
    private $modalidade;

    public function save() : ModalidadeModel
    {
        return new ModalidadeModel();
    }

    public function getByid (int $id) : ?ModalidadeModel
    {
        return new ModalidadeModel ();
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

