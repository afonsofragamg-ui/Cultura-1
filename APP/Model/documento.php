<?php
namespace Cultura\APP\Model;
use Cultura\APP\DAO\DocumentoDAO;

class Documento {
    private $iddocumento;
    private $idCliente;
    private $imagcpf;
    private $imgrg;
    private $imgcndmunicipal;
    private $imgcndestadual;
    private $imgcndfederal;
    private $imgcndeleitoral;
    private $imgcndtrabalho;
    private $imgcndfgts;
    private $imgcomprovanteresidencialatual;
    private $imgcomprovanteresidencial2anos;


    public function save() : Documento
    {
        return new Documento();
    }

    public function getByid (int $iddocumento) : ? Documento
    {
        return new Documento ();
    }

    public function getallrow () : array
    {
        return [];
    }

    public function delete (int $iddocumento) : bool
    {
        return false;
    }


}
