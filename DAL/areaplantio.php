<?php

namespace DAL;

include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/DAL/conexao.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/MODEL/areaplantio.php";

class Areaplantio
{

    public function Select()
    {

        $sql = "Select * from areaplantio;";
        $con = Conexao::conectar();
        $registros = $con->query($sql);
        $con = Conexao::desconectar();

        foreach ($registros as $linha) {
            $areaplantio = new \MODEL\Areaplantio();
            $areaplantio->setId($linha['id']);
            $areaplantio->setProdutor($linha['produtor']);
            $areaplantio->setInsumo($linha['insumo']);
            $areaplantio->setQuantidade($linha['quantidade']);
            $areaplantio->setValor($linha['valor']);

            $lstAreaplantio[] = $areaplantio;
        }

        return $lstAreaplantio;
    }


    public function SelectById(int $id)
    {

        $sql = "Select * from areaplantio where id=?;";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute(array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        $con = Conexao::desconectar();

        $areaplantio = new \MODEL\Areaplantio();
            $areaplantio->setId($linha['id']);
            $areaplantio->setProdutor($linha['produtor']);
            $areaplantio->setInsumo($linha['insumo']);
            $areaplantio->setQuantidade($linha['quantidade']);
            $areaplantio->setValor($linha['valor']);

        return  $areaplantio;
    }


    public function Insert(\MODEL\Areaplantio $areaplantio)
    {
        $sql = "INSERT INTO areaplantio (produtor, insumo, quantidade, valor)
           VALUES ('{$areaplantio->getProdutor()}', '{$areaplantio->getInsumo()}', '{$areaplantio->getQuantidade()}', '{$areaplantio->getValor()}');";

        $con = Conexao::conectar();
        $result = $con->query($sql);
        $con = Conexao::desconectar();

        echo $result->errorCode();

        return $result;
    }


    public function Update(\MODEL\Areaplantio $areaplantio)
    {
        $sql = "UPDATE areaplantio SET produtor = ?, insumo = ?, quantidade = ?, valor = ? WHERE id = ?;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($areaplantio->getProdutor(), $areaplantio->getInsumo(), $areaplantio->getQuantidade(), $areaplantio->getValor(), $areaplantio->getId()));
        $con = Conexao::desconectar();

        // echo $result->errorCode();

        return $result;
    }

    public function Delete(int $id)
    {
        $sql = "Delete from areaplantio WHERE id = ?;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($id));
        $con = Conexao::desconectar();

        // echo $result->errorCode();

        return $result;
    }
}
