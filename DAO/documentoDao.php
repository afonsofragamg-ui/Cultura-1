<?php
namespace Cultura\DAO;

use Cultura\Model\Documento;
class DocumentoDAO{

    public function insert (Documento $model) :Documento
    {
        return new  Documento();
    }

    public function update ( Documento $model) :Documento
    {
        return new  Documento();
    }

    public function selectById (int $id) :? Documento
    {
         return new  Documento();
    }

        public function select () : array
    {
        return [];
    }

        public function delete (int $id) : bool
    {
        return false;
    }

}
