<?php

$id = $_GET['id'];
//    echo $id; 

include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/DAL/agricultor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/MODEL/agricultor.php";

use DAL\Agricultor;

$dalAgricultor = new DAL\Agricultor();
$agricultor = $dalAgricultor->SelectById($id);

//echo $agricultor->getNome();

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
    <title>Detalhes de Agricultor</title>
</head>

<body class="teal lighten-4">
    <div class="container deep-orange lighten-1 col s12 ">
        <div class="center light-blue darken-3 white-text col s12">
            <h3>Informações de Agricultor</h3>
        </div>


        <div class="row grey lighten-2 black-text">
            <form action="opedtagricultor.php" method="post" class="row">
                <div class="input-field col s8">
                    <label for="id" class="black-text bold">ID: <?php echo $agricultor->getID() ?>
                    </label>
                    <input type="hidden" name="id" value=<?php echo $id; ?>>
                </div>

                <div class="input-field col s8">
                    <label for="nomelabel" class="black-text bold">Nome: <?php echo $agricultor->getNome() ?> </label>
                </div>

                <div class="input-field col s8">
                    <label for="cidadelabel" class="black-text bold">Cidade: <?php echo $agricultor->getCidade() ?></label>
                </div>

                <div class="input-field col s8">

                    <label for="bairrolabel" class="black-text bold">Bairro: <?php echo $agricultor->getBairro() ?></label>
                </div>

                <div class="input-field col s8">
                    <label for="idaddelabel" class="black-text bold">Idade: <?php echo $agricultor->getIdade() ?></label>
                </div>

                <div class="row center col s8">
                    <a class="waves-effect waves-light blue btn"
                        onclick="JavaScript:location.href='lstagricultor.php'">
                        <i class="material-icons right">arrow_back</i>Voltar
                    </a>

                    <a class="waves-effect waves-light orange btn"
                        onclick="JavaScript:location.href='frmedtagricultor.php?id='+ '<?php echo $agricultor->getID(); ?>'">
                        <i class="material-icons right">edit</i>Editar
                    </a>

                    <a class="waves-effect waves-light red btn"
                        onclick="JavaScript: remover( <?php echo $agricultor->getId(); ?> )">
                        <i class="material-icons right">delete</i>Remover
                    </a>
                </div>
            </form>


        </div>
        <br />

    </div>
</body>

</html>

<script>
    function remover(id) {
        if (confirm('Excluir Agricultor ' + id + '?')) {
            location.href = 'opremagricultor.php?id=' + id;
        }
    }
</script>