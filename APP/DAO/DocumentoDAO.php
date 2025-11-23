<?php

namespace Cultura\APP\DAO;

use Cultura\APP\Model\Documento;
class DocumentoDAO{
    public function save (Documento $model) : Documento
    {
        return ($model->id == null) ? $this-> insert($model) : $this->update($model);
    }

    public function insert (Documento $mode) :Documento
    {
        return new Documento();
    }

    public function update (Documento $model) :Documento
    {
        return new Documento();
    }

    public function selectById (int $id) :?Documento
    {
         return new Documento();
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
