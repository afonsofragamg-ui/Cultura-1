<?php

namespace Cultura\APP\Model;
use Cultura\APP\DAO\ClienteDAO;
class Cliente{
    public $idclientes;
    public $nome;
    public $cpf;
    public $email;
    public $telefone;
    public $rg;
    public $datacadastro;
    public $id_endereco;
    public $id_redessociais;
    public $id_portifolio;
    public $id_situacao;
    public $id_nivelacesso;
    public $id_documentos;
    public $id_contratos;

    public function save() : Cliente
    {
        return new Cliente();
    }

    public function getByid (int $id) : ?Cliente
    {
        return new Cliente ();
    }

    public function getallrow () : array
    {
        return [];
    }

    public function delete (int $id) : bool
    {
        return false;
    }




}
