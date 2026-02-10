<?php

namespace Cultura\DAO;

use Cultura\Model\Cultura\APP\Model\PreCadastro;
class precadastroDao extends DAO
{
    public function select () : array
    {
        $sql = "SELECT * FROM modalidade";
        $stmt = parent :: $conexao ->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(DAO::FETCH_CLASS,"Cultura\APP\Model\Precadastro");
    }
}

