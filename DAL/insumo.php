<?php

namespace DAL;

include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/DAL/conexao.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/MODEL/insumo.php";

class Insumo
{

    public function Select()
    {

        $sql = "Select * from insumo;";
        $con = Conexao::conectar();
        $registros = $con->query($sql);
        $con = Conexao::desconectar();

        foreach ($registros as $linha) {
            $insumo = new \MODEL\Insumo();
            $insumo->setId($linha['id']);
            $insumo->setDescricao($linha['descricao']);
            $insumo->setTipoinsumo($linha['tipoinsumo']);
            $insumo->setQuantidade($linha['quantidade']);
            $insumo->setValor($linha['valor']);

            $lstInsumo[] = $insumo;
        }

        return $lstInsumo;
    }


    public function SelectById(int $id)
    {

        $sql = "Select * from insumo where id=?;";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute(array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        $con = Conexao::desconectar();

        $insumo = new \MODEL\Insumo();
        $insumo->setId($linha['id']);
        $insumo->setDescricao($linha['descricao']);
        $insumo->setTipoinsumo($linha['tipoinsumo']);
        $insumo->setQuantidade($linha['quantidade']);
        $insumo->setValor($linha['valor']);


        return  $insumo;
    }


    public function Insert(\MODEL\Insumo $insumo)
    {
        $sql = "INSERT INTO insumo (descricao, tipoinsumo, quantidade, valor)
           VALUES ('{$insumo->getDescricao()}', '{$insumo->getTipoinsumo()}', '{$insumo->getQuantidade()}', '{$insumo->getValor()}');";

        $con = Conexao::conectar();
        $result = $con->query($sql);
        $con = Conexao::desconectar();

        echo $result->errorCode();

        return $result;
    }


    public function Update(\MODEL\Insumo $insumo)
    {
        $sql = "UPDATE insumo SET descricao = ?, tipoinsumo = ?, quantidade = ?, valor = ? WHERE id = ?;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($insumo->getDescricao(), $insumo->getTipoinsumo(), $insumo->getQuantidade(), $insumo->getValor(), $insumo->getId()));
        $con = Conexao::desconectar();

        // echo $result->errorCode();

        return $result;
    }

    public function Delete(int $id)
    {
        $sql = "Delete from insumo WHERE id = ?;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($id));
        $con = Conexao::desconectar();

        // echo $result->errorCode();

        return $result;
    }
}
