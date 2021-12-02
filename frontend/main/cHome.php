<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/cHome.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/91353c877b.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body class="body">
    <nav class="navbar navbar-expand-sm">

        <div class="container-fluid">
            <!-- Links -->
            <ul class="navbar-nav">
                <a href="../frontend/home.php" class="navbar-brand">
                    <img src="../img/logo_temp.png" alt="logotemp" id="logo">
                </a>
                <h2 class="myself"> Myself</h2>


                
                <li class="nav-item"  title="Perfil"  data-bs-toggle="popover" data-bs-placement="bottom" data-bs-trigger="hover">
                    <a class="nav-link"   href="../frontend/perfil.php">
                    <i class="svg1 fas fa-user-cog fa-2x"></i>
                    <script>
                    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
                    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                    return new bootstrap.Popover(popoverTriggerEl)
                    })
                    </script>
                    </a>
                </li>
                <li class="nav-item" title="Bulas"  data-bs-toggle="popover" data-bs-placement="bottom" data-bs-trigger="hover">
                    <a class="nav-link" href="../frontend/bulas.php">
                    <i class="svg fas fa-file-medical fa-2x"></i>
                    <script>
                    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
                    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                    return new bootstrap.Popover(popoverTriggerEl)
                    })
                    </script>
                    </a>
                </li>

                <li class="nav-item" title="Sair"  data-bs-toggle="popover" data-bs-placement="bottom" data-bs-trigger="hover">
                    <a href="../app/index.php?sair">
                    <i class="svg fa-solid fa-door-open fa-2x"></i>
                    <script>
                    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
                    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                    return new bootstrap.Popover(popoverTriggerEl)
                    })
                    </script>
                    </a>
                </li>
            </ul>
        </div>

    </nav>
</body>

</html>