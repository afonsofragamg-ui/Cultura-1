<?php

namespace Cultura\APP\DAO;

use Cultura\APP\Model\FormaPagamento;
class FormaPagamentoDAO{

    public function save (FormaPagamento $model) : FormaPagamento
    {
        return ($model->id == null) ? $this-> insert($model) : $this->update($model);
    }

    public function insert (FormaPagamento $model) :FormaPagamento 
    {
        return new FormaPagamento ();
    }

    public function update (FormaPagamento $model) :FormaPagamento 
    {
        return new FormaPagamento ();
    }

    public function selectById (int $id) :?FormaPagamento 
    {
         return new FormaPagamento ();
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
