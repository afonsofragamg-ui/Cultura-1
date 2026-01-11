<?php
namespace Cultura\APP\Model;
use Cultura\APP\DAO\MensalidadeDao;
class Mensalidade{

    private $id;
    private $codigo;
    private $datavencimento;
    private $datapagamento;
    private $mesdereferencia;
    private $formapagamento;
    private $valor;
    private $valorpago;
    private $status;

    public function save() : Mensalidade
    {
        return new Mensalidade();
    }

    public function getByid (int $id) : ?Mensalidade
    {
        return new Mensalidade ();
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
