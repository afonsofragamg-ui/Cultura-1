<?php

namespace Cultura\APP\Model;
class Cliente{
    public $id;
    public $nome;
    public $cfpf;
    public $email;
    public $telefone;
    public $cep;
    public $logradouro;
    public $numero;
    public $complemento;
    public $bairro;
    public $municipio;
    public $uf;
    public $idmodalidade;
    public $rg;
    public $facebook;
    public $instagran;
    public $twitter;
    public $datacadastro;
    public $idsituacao;
    public $idnivelacesso;


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
