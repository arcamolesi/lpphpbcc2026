<?php

namespace DAL;

include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/DAL/conexao.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/MODEL/agricultor.php";

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
         $agricultor->setBairro($linha['bairro']);
         $agricultor->setCidade($linha['cidade']);
         $agricultor->setIdade($linha['idade']);

         $lstAgricultor[] = $agricultor;
      }

      return $lstAgricultor;
   }


   public function SelectById(int $id)
   {

      $sql = "Select * from agricultor where id=?;";
      $con = Conexao::conectar();
      $query = $con->prepare($sql);
      $query->execute(array($id));
      $linha = $query->fetch(\PDO::FETCH_ASSOC);
      $con = Conexao::desconectar();

      $agricultor = new \MODEL\Agricultor();
      $agricultor->setId($linha['id']);
      $agricultor->setNome($linha['nome']);
      $agricultor->setBairro($linha['bairro']);
      $agricultor->setCidade($linha['cidade']);
      $agricultor->setIdade($linha['idade']);

      return  $agricultor;
   }

      public function SelectByNome(string $nome)
   {
      $sql = "Select * from agricultor where nome like ?;";
      $con = Conexao::conectar();
      $query = $con->prepare($sql);
      $query->execute(['%' . $nome . '%']);
      $registros = $query->fetchAll(\PDO::FETCH_ASSOC);
      $con = Conexao::desconectar();

      $lstAgricultor = [];
      foreach ($registros as $linha) {
         $agricultor = new \MODEL\Agricultor();
         $agricultor->setId($linha['id']);
         $agricultor->setNome($linha['nome']);
         $agricultor->setBairro($linha['bairro']);
         $agricultor->setCidade($linha['cidade']);
         $agricultor->setIdade($linha['idade']);

         $lstAgricultor[] = $agricultor;
      }

      return $lstAgricultor;
   }



   public function Insert(\MODEL\Agricultor $agricultor)
   {
      $sql = "INSERT INTO agricultor (nome, cidade, bairro, idade)
           VALUES ('{$agricultor->getNome()}', '{$agricultor->getCidade()}', '{$agricultor->getBairro()}', '{$agricultor->getIdade()}');";

      $con = Conexao::conectar();
      $result = $con->query($sql);
      $con = Conexao::desconectar();

      echo $result->errorCode();

      return $result;
   }


   public function Update(\MODEL\Agricultor $agricultor)
   {
      $sql = "UPDATE agricultor SET nome = ?, cidade = ?, bairro = ?, idade = ? WHERE id = ?;";

      $con = Conexao::conectar();
      $query = $con->prepare($sql);
      $result = $query->execute(array($agricultor->getNome(), $agricultor->getCidade(), $agricultor->getBairro(), $agricultor->getIdade(), $agricultor->getId()));
      $con = Conexao::desconectar();

      // echo $result->errorCode();

      return $result;
   }

   public function Delete(int $id)
   {
      $sql = "Delete from agricultor WHERE id = ?;";

      $con = Conexao::conectar();
      $query = $con->prepare($sql);
      $result = $query->execute(array($id));
      $con = Conexao::desconectar();

      // echo $result->errorCode();

      return $result;
   }
}
