<?php
namespace Cultura\APP\Model;
class ContatoModel{
    public $id;
    public $nome;
    public $amail;
    public $mensagem;
    public $dataenvio;
    public $horaenvio;

    public function save() : ContatoModel
    {
        return new ContatoModel();
    }

    public function getByid (int $id) : ?ContatoModel
    {
        return new ContatoModel ();
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
