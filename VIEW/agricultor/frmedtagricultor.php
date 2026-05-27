<?php
$id = $_GET['id'];
//    echo $id; 
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/VIEW/menu.php";  
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/DAL/agricultor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/MODEL/agricultor.php";

use DAL\Agricultor;

$dalAgricultor = new DAL\Agricultor();
$agricultor = $dalAgricultor->SelectById($id);

echo $agricultor->getNome();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Usado para adicionar ícones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Agricultor</title>
</head>

<body class="teal lighten-4">
    <div class="container deep-orange lighten-1 col s12 ">
        <div class="center light-blue darken-3 white-text col s12">
            <h3>Editar Agricultor</h3>
        </div>


        <div class="row grey lighten-2 black-text">
            <form action="opedtagricultor.php" method="post" class="row">
                <div class="input-field col s8">
                    <label for="id" class="black-text bold">ID: <?php echo $agricultor->getID() ?>
                    </label>
                    </br></br>
                    <input type="hidden" name="id" value=<?php echo $id; ?>>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informar o nome do agricultor" id="nome"
                        name="nome" type="text" class="validate"
                        value="<?php echo $agricultor->getNome(); ?>">
                    <label for="nomelabel">Nome: </label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informar a cidade" id="cidade"
                        name="cidade" type="text" class="validate"
                        value="<?php echo $agricultor->getCidade(); ?>">
                    <label for="cidadelabel">Cidade: </label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informar o bairro" id="bairro"
                        name="bairro" type="text" class="validate"
                        value="<?php echo $agricultor->getBairro(); ?>">
                    <label for="bairrolabel">Bairro: </label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informar a idade" id="idade"
                        name="idade" type="text"
                        value="<?php echo $agricultor->getIdade(); ?>">
                    <label for="idaddelabel">Idade: </label>
                </div>

                <div class="row center col s8">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Salvar
                        <i class="material-icons right">send</i>
                    </button>

                    <a class="waves-effect waves-light blue btn"
                        onclick="JavaScript:location.href='lstagricultor.php'">
                        <i class="material-icons right">arrow_back</i>Voltar
                    </a>
                </div>
            </form>


        </div>
        <br />

    </div>
</body>

</html>