<?php

namespace Cultura\APP\DAO;

use Cultura\APP\Model\Cliente;
class ClienteDAO{

    public function save (Cliente $model) : Cliente
    {
        return ($model->id == null) ? $this-> insert($model) : $this->update($model);
    }

    public function insert (Cliente $mode) :Cliente
    {
        return new Cliente();
    }

    public function update (Cliente $model) :Cliente
    {
        return new Cliente();
    }

    public function selectById (int $id) :?Cliente
    {
         return new Cliente();
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
