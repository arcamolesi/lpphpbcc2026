<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/DAL/areaplantio.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/MODEL/areaplantio.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/VIEW/menu.php";



use DAL\Areaplantio;

$dalAreaplantio = new DAL\Areaplantio();
$lstAreaplantio = $dalAreaplantio->Select();


?>



<!DOCTYPE html>
<html lang="pt-br">

<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Áreas de Plantio</title>
</head>

<body class="teal lighten-4">
    <div>
        <h1>Listar Áreas de Plantio</h1>
        <br />
        <table class="striped responsive-table hover: lime lighten-3">
            <tr>
                <th>ID</th>
                <th>PRODUTOR</th>
                <th>INSUMO</th>
                <th>QUANTIDADE</th>
                <th>VALOR</th>
                <th> <a class="btn-floating btn-small waves-effect waves-light green">
                        <i class="material-icons"
                            onclick="JavaScript:location.href='frminsplantio.php'">add</i>
                    </a></th>
            </tr>
            <?php
            foreach ($lstAreaplantio as $areaplantio) { ?>
                <tr>
                    <td><?php echo $areaplantio->getId(); ?></td>
                    <td><?php echo $areaplantio->getProdutor(); ?></td>
                    <td><?php echo $areaplantio->getInsumo(); ?></td>
                    <td><?php echo $areaplantio->getQuantidade(); ?></td>
                    <td>R$ <?php echo number_format($areaplantio->getValor(), 2, ',', '.'); ?></td>
                    <td>
                        <a class="btn-floating btn-small waves-effect orange">
                            <i class="material-icons"
                                onclick="JavaScript:location.href='frmedtareaplantio.php?id='+ '<?php echo $areaplantio->getID(); ?>'">edit</i>
                        </a>

                        <a class="btn-floating btn-small waves-effect blue">
                            <i class="material-icons"
                                onclick="JavaScript:location.href='frmdetareaplantio.php?id= ' + '<?php echo $areaplantio->getID(); ?>'">details</i>
                        </a>

                        <a class="btn-floating btn-small waves-effect red">
                            <i class="material-icons"
                                onclick="JavaScript: remover( <?php echo $areaplantio->getId(); ?> )">delete</i>
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
        if (confirm('Excluir Área de Plantio ' + id + '?')) {
            location.href = 'opremareaplantio.php?id=' + id;
        }
    }
</script>