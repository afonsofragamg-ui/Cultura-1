<?php
namespace Cultura\Model;
use Cultura\DAO\ContatoDAO;
class Contato{
    public $idcontato;
    public $nome;
    public $email;
    public $mensagem;
    public $dataenvio;
    public $horaenvio;

    public function save() : Contato
    {
        return new Contato();
    }

    public function getByid (int $idcontato) : ?Contato
    {
        return new Contato ();
    }

    public function getallrow () : array
    {
        return [];
    }

    public function delete (int $idcontato) : bool
    {
        return false;
    }


}
