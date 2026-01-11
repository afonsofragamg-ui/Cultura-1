<?php

namespace Cultura\APP\DAO;

use Cultura\APP\Model\Cliente;
class ClienteDao extends DAO {              

    public function save (Cliente $model) : Cliente
    {
        return ($model->idclientes == null) ? $this-> insert($model) : $this->update($model);
    }

    public function insert (Cliente $model) : Cliente {
        
        $sql = "INSERT INTO clientes (
                                        nome,
                                        cpf,
                                        email,
                                        telefone,
                                        rg,
                                        datacadastro,
                                        id_indereco,
                                        id_redessociais,
                                        id_portifolio,
                                        id_situacao,
                                        id_nivelacesso,
                                        id_documentos,
                                        id_contratos), 
                                        vvalues (?,?,?,?,?,?,?,?,?,?,?,?,?,)";
        $stmt = parent :: $conexao ->prepare($sql);
        $stmt->bindValue(1,$model->nome);
        $stmt->bindValue(2,$model->cpf);
        $stmt->bindValue(3,$model->email);
        $stmt->bindValue(4,$model->telefone);
        $stmt->bindValue(5,$model->rg);
        $stmt->bindValue(6,$model->datacadastro);
        $stmt->bindValue(7,$model->id_endereco);
        $stmt->bindValue(8,$model->id_redessociais);
        $stmt->bindValue(9,$model->id_portifolio);
        $stmt->bindValue(10,$model->id_situacao); 
        $stmt->bindValue(11,$model->id_nivelacesso);
        $stmt->bindValue(12,$model->id_documentos);
        $stmt->bindValue(13,$model->id_contratos);
        $stmt->execute();

        $model->idclientes = parent::$conexao->lastInsertId();
        return new Cliente();
    }

    public function update (Cliente $model) : Cliente {
        $sql = "UPDATE cliente SET(
                                nome=?,
                                cpf=?,
                                email=?,
                                telefone=?,
                                rg=?,
                                datacadastro=?,
                                id_endereco=?,
                                id_redessociais=?,
                                id_portifolio=?,
                                id_situacao=?,
                                id_nivelacesso=?,
                                id_documentos=?,
                                id_contratos=?,                    

                                WHERE id=?)";

        $stmt = parent :: $conexao ->prepare($sql);
        $stmt->bindValue(1,$model->nome);
        $stmt->bindValue(2,$model->cpf);
        $stmt->bindValue(3,$model->email);
        $stmt->bindValue(4,$model->telefone);
        $stmt->bindValue(5,$model->rg);
        $stmt->bindValue(6,$model->datacadastro);
        $stmt->bindValue(7,$model->id_endereco);
        $stmt->bindValue(8,$model->id_redessociais);
        $stmt->bindValue(8,$model->id_portifolio);
        $stmt->bindValue(10,$model->id_situacao);
        $stmt->bindValue(10,$model->id_nivelacesso);
        $stmt->bindValue(11,$model->id_documentos);
        $stmt->bindValue(11,$model->id_contratos);
        $stmt->execute();

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