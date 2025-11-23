<?php

namespace Cultura\APP\DAO;

use Cultura\APP\Model\Boleto;
class BoletoDao{

    public function save (Boleto $model) : Boleto
    {
        return ($model->id == null) ? $this-> insert($model) : $this->update($model);
    }

    public function insert (Boleto $mode) :Boleto
    {
        return new Boleto();
    }

    public function update (Boleto $model) :Boleto
    {
        return new Boleto();
    }

    public function selectById (int $id) :?Boleto
    {
         return new Boleto();
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
