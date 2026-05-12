<?php

namespace DAL;

include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/DAL/conexao.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/MODEL/agricultor.php";

use DAL\Conexao;

class Agricultor
{

    public function Select()
    {
        $sql = "Select * from agricultor;";
        $con = Conexao::conectar();
        $registros = $con->query($sql);
        $con = Conexao::desconectar();

        foreach ($registros as $linha) {
            $agricultor = new \MODEL\Agricultor();
            $agricultor->setId($linha['id']);
            $agricultor->setNome($linha['nome']);
            $agricultor->setCidade($linha['cidade']);
            $agricultor->setBairro($linha['bairro']);
            $agricultor->setIdade($linha['idade']);

            $lstAgricultor[] = $agricultor;
        }

        return $lstAgricultor;
    }

    public function SelectById(int $id)
    {
        $sql = "Select * from agricultor where id=?" .$id;//;";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
       // $query->execute(array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        $con = Conexao::desconectar();

        $agricultor = new \MODEL\Agricultor();
        $agricultor->setId($linha['id']);
        $agricultor->setNome($linha['nome']);
        $agricultor->setCidade($linha['cidade']);
        $agricultor->setBairro($linha['bairro']);
        $agricultor->setIdade($linha['idade']);

        return $agricultor;
    }
}
