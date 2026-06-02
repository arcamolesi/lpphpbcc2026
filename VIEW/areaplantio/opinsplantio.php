<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/DAL/areaplantio.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/MODEL/areaplantio.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/DAL/insumo.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/MODEL/insumo.php";


    $plantio = new \MODEL\AreaPlantio(); 
    $plantio->setProdutor($_POST['produtor']); 
    $plantio->setInsumo($_POST['insumo']); 
    $plantio->setQuantidade($_POST['quantidade']);
    $plantio->setValor($_POST['valor']); 

    $dalPlantio = new \DAL\AreaPlantio(); 
    
    $dalInsumo = new \DAL\Insumo(); 
    $insumo = $dalInsumo->SelectById($plantio->getInsumo()); 


    if ($insumo->getQuantidade() >=  $plantio->getQuantidade()){
        //calculo novo valor do estoque do insumo
        $estoque = $insumo->getQuantidade() - $plantio->getQuantidade(); 

        //atualizar insumo
        $insumo->setQuantidade($estoque); 
        $dalInsumo->Update($insumo); 

        //inserir novo plantio na tabela areaplantio
        $dalPlantio->Insert($plantio); 

    }    
    
    header("location: /lpphpbcc2026/view/areaplantio/lstplantio.php");

?>

