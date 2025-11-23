<?php

namespace Cultura\APP\DAO;

use Cultura\APP\Model\Boleto;
class BoletoDao{

    public function save (BoletoDao $model) : BoletoDao
    {
        return ($model->id == null) ? $this-> insert($model) : $this->update($model);
    }

    public function insert (BoletoDao $mode)
    {
        return new BoletoDao();
    }

    public function update (BoletoDao $model)
    {
        return new BoletoDao();
    }

    public function selectById (int $id) : 
    {

    }

        public function select ()
    {

    }

        public function delete (int $id)
    {

    }
}
