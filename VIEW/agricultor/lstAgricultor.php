<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/DAL/agricultor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/MODEL/agricultor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/VIEW/menu.php";

use DAL\Agricultor;

 $dalAgricultor = new DAL\Agricultor();
 $lstAgricultor = $dalAgricultor->Select();

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
    <title>Listar Agricultores</title>
</head>

<body class="teal lighten-4">
    <div>
        <h1>Listar Agricultores</h1>

        <br />
        <table class="striped responsive-table hover: lime lighten-3">
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>CIDADE</th>
                <th>BAIRRO</th>
                <th>IDADE</th>
                <th>        <a class="btn-floating btn-small waves-effect waves-light green">
            <i class="material-icons"
                onclick="JavaScript:location.href='frmisnagricultor.php'">add</i>
        </a></th>
            </tr>
            <?php
            foreach ($lstAgricultor as $agricultor) { ?>
                <tr>
                    <td><?php echo $agricultor->getId(); ?></td>
                    <td><?php echo $agricultor->getNome(); ?></td>
                    <td><?php echo $agricultor->getCidade(); ?></td>
                    <td><?php echo $agricultor->getBairro(); ?></td>
                    <td><?php echo $agricultor->getIdade(); ?></td>
                    <td>
                        <a class="btn-floating btn-small waves-effect orange">
                            <i class="material-icons"
                                onclick="JavaScript:location.href='frmedtagricultor.php?id='+ '<?php echo $agricultor->getID(); ?>'">edit</i>
                        </a>

                        <a class="btn-floating btn-small waves-effect blue">
                            <i class="material-icons"
                                onclick="JavaScript:location.href='frmdetagricultor.php?id= ' + '<?php echo $agricultor->getID(); ?>'">details</i>
                        </a>

                        <a class="btn-floating btn-small waves-effect red">
                            <i class="material-icons"
                                onclick="JavaScript: remover( <?php echo $agricultor->getId(); ?> )">delete</i>
                        </a>

                    </td>
                </tr>

            <?php  } ?>
        </table>

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