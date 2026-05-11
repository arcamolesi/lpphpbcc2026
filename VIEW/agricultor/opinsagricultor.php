<?php
   include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpadst226/DAL/agricultor.php";
   include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpadst226/MODEL/agricultor.php";  

   $agricultor = new MODEL\Agricultor(); 

   $agricultor->setNome($_POST['nome']);
   $agricultor->setCidade($_POST['cidade']); 
   $agricultor->setBairro($_POST['bairro']);
   $agricultor->setIdade($_POST['idade']); 


  $dalAgricultor = new DAL\Agricultor(); 
  $dalAgricultor->Insert($agricultor); 

  header("location: lstagricultor.php");

 


?>