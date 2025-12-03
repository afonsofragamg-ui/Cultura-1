<?php

namespace Cultura\APP\DAO;

use Cultura\APP\Model\Mensalidade;
class MensalidadeDao{

    public function save (Mensalidade $model) : Mensalidade
    {
        return ($model->id == null) ? $this-> insert($model) : $this->update($model);
    }

    public function insert (Mensalidade $model) :Mensalidade
    {
        return new Mensalidade();
    }

    public function update (Mensalidade $model) :Mensalidade
    {
        return new Mensalidade();
    }

    public function selectById (int $id) :?Mensalidade
    {
         return new Mensalidade();
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
