<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Usado para adicionar ícones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="./js/init.js"></script>


    <title>Menu do Sistema Agro</title>
</head>

<body>
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

    <nav>
        <div class="nav-wrapper brown lighten-2">
            <a href="https://www.fema.edu.br" class="brand-logo right">
                <img src="../IMAGES//logoagro.jpeg" width="200" height="65" class="materialboxed"></a>

            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="/lpphpbcc2026/VIEW/home.php">HOME</a></li>
                <li><a href="/lpphpbcc2026/VIEW/agricultor/lstAgricultor.php">AGRICULTOR</a></li>

            </ul>

            <ul id="slide-out" class="sidenav light-blue darken-3 white-text">
                <li>
                    <div class="user-view deep-orange lighten-1 white-text">
                        <div class="background white-text ">
                            <img src="../images/fema.jpeg">
                        </div>
                        <a href="https:www.fema.edu.br"><img src="../images/fema.jpeg"></a>
                        <a href="#name"><span class="white-text name">Almir Camolesi</span></a>
                        <a href="#email"><span class="white-text email">camolesi@fema.edu.br</span></a>
                    </div>
                </li>
                <li><a href="/lpphpbcc2026/view/home.php" class="white-text">HOME</a></li>
                <li><a href="/lpphpbcc2026/VIEW/agricultor/lstAgricultor.php" class="white-text"><i class="material-icons white-text">people</i>Agricultor</a></li>

                <li>
                    <div class="divider"></div>
                </li>
                <li><a class="subheader">Subheader</a></li>
                <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
            </ul>
        </div>
    </nav>
</body>

</html>