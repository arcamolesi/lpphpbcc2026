<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/DAL/usuario.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/MODEL/usuario.php";
$login = $_POST['login'];
$pwd = $_POST['pwd'];
$md5 = md5($pwd);

if ($login=="" || $pwd=="")
    header("location:index.php");

//echo $login . " - " . $pwd . " - " . $md5; 
$dalUsuario = new \DAL\Usuario();
$usuario = $dalUsuario->SelectByLogin($login);

if ($md5 == $usuario->getSenha()) {
    session_start();
    $_SESSION['login'] = $login;
    //$_SESSION['nivel'] = $linha['nivel']; 
    header("location:home.php");
} 
else header("location:index.php");

?>
