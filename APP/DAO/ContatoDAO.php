<?php

namespace Cultura\APP\DAO;

use Cultura\APP\Model\Contato;
class ContatoDAO{

    public function save (Contato $model) : Contato
    {
        return ($model->id == null) ? $this-> insert($model) : $this->update($model);
    }

    public function insert (Contato $model) :Contato
    {
        return new Contato();
    }

    public function update (Contato$model) :Contato
    {
        return new Contato();
    }

    public function selectById (int $id) :?Contato
    {
         return new Contato();
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
