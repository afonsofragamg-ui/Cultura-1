<?php
namespace Cultura\APP\Model;
class MensalidadeModel{

    private $id;
    private $codigo;
    private $datavencimento;
    private $datapagamento;
    private $mesdereferencia;
    private $formapagamento;
    private $valor;
    private $valorpago;
    private $status;

    public function save() : MensalidadeModel
    {
        return new MensalidadeModel();
    }

    public function getByid (int $id) : ?MensalidadeModel
    {
        return new MensalidadeModel ();
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
