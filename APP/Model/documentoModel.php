<?php
namespace Cultura\APP\Model;
class DocumentoModel {
    private $id;
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


    public function save() : DocumentoModel
    {
        return new DocumentoModel();
    }

    public function getByid (int $id) : ?DocumentoModel
    {
        return new DocumentoModel ();
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
