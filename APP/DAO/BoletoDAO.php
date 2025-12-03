<?php

namespace Cultura\APP\DAO;

use Cultura\APP\Model\Boleto;
class BoletoDao extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function save (Boleto $model) : Boleto
    {
        return ($model->id == null) ? $this-> insert($model) : $this->update($model);
    }

    public function insert (Boleto $model) :Boleto
    {
        $sql = "INSERT INTO boleto (
                                    numeroboleto,
                                    idcontrato,
                                    pagador,
                                    vencimento,
                                    datapagamento,
                                    valor,
                                    textovalor,
                                    recebedor,
                                    observacoes,
                                    qrcod,
                                    idsituacaoboleto,
                                    codigodebarra)
                                    values (?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = parent :: $conexao ->prepare($sql);
        $stmt->bindValue(1,$model->numeroboleto);
        $stmt->bindValue(2,$model->idcontrato);
        $stmt->bindValue(3,$model->pagador);
        $stmt->bindValue(4,$model->vendimento);
        $stmt->bindValue(5,$model->datapagamento);
        $stmt->bindValue(6,$model->valor);
        $stmt->bindValue(7,$model->textovalor);
        $stmt->bindValue(8,$model->recebedor);
        $stmt->bindValue(9,$model->observacoes);
        $stmt->bindValue(10,$model->qrcod);
        $stmt->bindValue(11,$model->idsituacaoboleto);
        $stmt->bindValue(12,$model->codigodebarra);
        $stmt->execute();

        $model->id = parent::$conexao->lastInsertId();
   
    return new Boleto;
    
    }

    public function update (Boleto $model) :Boleto
    {
         $sql = "UPDATE boleto SET
                                numeroboleto=?,
                                idcontrato=?,
                                pagador=?,
                                vencimento=?,
                                datapagamento=?,
                                valor=?,
                                textovalor=?,
                                recebedor=?,
                                observacoes=?,
                                qrcod=?,
                                idsituacaoboleto=?,
                                codigodebarra=? WHERE id=?";
        $stmt = parent :: $conexao ->prepare($sql);
        $stmt->bindValue(1,$model->numeroboleto);
        $stmt->bindValue(2,$model->idcontrato);
        $stmt->bindValue(3,$model->pagador);
        $stmt->bindValue(4,$model->vendimento);
        $stmt->bindValue(5,$model->datapagamento);
        $stmt->bindValue(6,$model->valor);
        $stmt->bindValue(7,$model->textovalor);
        $stmt->bindValue(8,$model->recebedor);
        $stmt->bindValue(8,$model->observacoes);
        $stmt->bindValue(10,$model->qrcod);
        $stmt->bindValue(11,$model->idsituacaoboleto);
        $stmt->bindValue(12,$model->codigodebarra);
        $stmt->execute();

        return new Boleto();
    }

    public function selectById (int $id) :?Boleto
    {
        $sql = "SELECT * FROM boleto WHERE id=?";
        $stmt = parent :: $conexao ->prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();

        return $stmt->fetchOject("Cultura\APP\Model\Boleto");
    }

        public function select () : array
    {
        $sql = "SELECT * FROM boleto";
        $stmt = parent :: $conexao ->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(DAO::FETCH_CLASS,"Cultura\APP\Model\Boleto");
    }

        public function delete (int $id) : bool
    {
        $sql = "DELETE FROM boleto WHERE id=?";
        $stmt = parent :: $conexao ->prepare($sql);
        $stmt->bindValue(1,$id);
        return $stmt->execute();
    }
}
