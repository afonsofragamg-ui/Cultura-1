<?php

namespace Cultura\APP\DAO;

use Cultura\APP\Model\Contato;
class ContatoDAO extends DAO{

     public function __construct()
    {
        parent::__construct();
    }

    public function save (Contato $model) : Contato
    {
        return ($model->idcontato == null) ? $this-> insert($model) : $this->update($model);
    }

    public function insert (Contato $model) :Contato
    {

    $sql = "INSERT INTO contato (
                                nome,
                                email,
                                mensagem,
                                dataenvio,
                                horaenvio),                                 
                                values (?,?,?,?,?)";
                                
        $stmt = parent :: $conexao ->prepare($sql);
        $stmt->bindValue(1,$model->nome);
        $stmt->bindValue(3,$model->email);
        $stmt->bindValue(4,$model->mensagem);
        $stmt->bindValue(5,$model->dataenvio);
        $stmt->bindValue(6,$model->horaenvio);
        $stmt->execute();
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
