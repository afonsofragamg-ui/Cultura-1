<?php
namespace Cultura\APP\Model;
use Cultura\APP\DAO\ContatoDAO;
class Contato{
    public $idcontato;
    public $nome;
    public $amail;
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
