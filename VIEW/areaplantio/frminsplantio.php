<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/VIEW/menu.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/DAL/agricultor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpbcc2026/MODEL/agricultor.php";

$dalAgricultor = new \DAL\Agricultor(); 
$lstAgricultor = $dalAgricultor->Select(); 

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>


    <!-- Compiled and minified JavaScript -->
     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <script src="/lpphpbcc2026/view/js/init.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Área de Plantio</title>
</head>

<body class="teal lighten-4">
    <div class="container deep-orange lighten-1 col s12">
        <div class="center light-blue darken-3 white-text col s12">
            <h3>Inserir Área de Plantio</h3>
        </div>


        <div class="row grey lighten-2 black-text">
            <form action="opinsplantio.php" method="post" class="row col s10">
                <div class="input-field col s8">
                    <select id="produtor" name="produtor" text-black>   
                        <option value="" disabled selected>Escolha</option>

                        <?php 
                            foreach ($lstAgricultor as $agricultor){?>
                                <option value= "<?php echo $agricultor->getId()?>">
                                    <?php echo $agricultor->getNome();?></option>
                            <?php }
                        ?>

                    </select>
                    <label>Agricultor/Produtor</label>
                </div>

                <br>
                <div class="input-field col s8">
                    <input placeholder="Informar o ID do insumo" id="insumo"
                        name="insumo" type="number" class="validate">
                    <label for="insumolabel">Insumo (ID): </label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informar a quantidade" id="quantidade"
                        name="quantidade" type="number" step="0.01" class="validate">
                    <label for="quantidadelabel">Quantidade: </label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informar o valor" id="valor"
                        name="valor" type="number" step="0.01" class="validate">
                    <label for="valorlabel">Valor (R$): </label>
                </div>

                <div class="row center col s8">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>


        </div>
        <br />

    </div>
</body>

</html>