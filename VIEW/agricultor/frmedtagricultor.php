<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/DAL/agricultor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/MODEL/agricultor.php";

$id = $_GET['id'];

$dalAgricultor = new DAL\Agricultor();
$agricultor = $dalAgricultor->SelectById($id);

echo $agricultor->getNome();
?>



<!DOCTYPE html>
<html lang="en">

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

<body class=" teal lighten-4">
    <div class="container orange col s12">
        <div class="center  blue white-text">
            <h3>Editar Agricultor</h3>
            <br />
        </div>

        <div class="row lime lighten-3 black-text col s10">
            <form action="opedtagricultor.php" method="post">
                <div class="row">
                    <div class="input-field col s8">
                        <label for="id" class="black-text bold">ID: <?php echo $agricultor->getID() ?></label>
                        </br> </br>
                        <input type="hidden" name="id" value=<?php echo $id; ?>>
                    </div>
                    <div class="input-field col s8">
                        <input placeholder="nome" id="nome" name="nome" type="text"
                            value="<?php echo $agricultor->getNome(); ?>>
                        <label for=" nomelabel">Nome: </label>
                    </div>
                    <div class="input-field col s8">
                        <input placeholder="cidade" id="cidade" name="cidade" type="text"
                            value="<?php echo $agricultor->getCidade(); ?>>
                        <label for=" cidadelabel">Cidade: </label>
                    </div>
                    <div class="input-field col s8">
                        <input placeholder="bairro" id="bairro" name="bairro" type="text"
                            value="<?php echo $agricultor->getBairro(); ?>>
                        <label for=" bairrolabel">Bairro</label>
                    </div>
                    <div class="input-field col s8">
                        <input placeholder="idade" id="idade" name="idade" type="text"
                            value="<?php echo $agricultor->getIdade(); ?>>
                        <label for=" idadelabel">Idade</label>
                    </div>
                </div>

            </form>

        </div>

    </div>

</body>

</html>