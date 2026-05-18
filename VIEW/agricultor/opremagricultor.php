<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/DAL/agricultor.php";

$id = $_GET['id'];

$dalAgricultor = new DAL\Agricultor(); 
$dalAgricultor->Delete($id);

header("location: lstAgricultor.php");
?>
