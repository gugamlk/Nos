<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <title>Main</title>
</head>

<style>
    img {
        width: 200px;
        border: 2px solid black;
        margin-left: 22px;
    }

    h4 {
        text-align: center;
    }

    #main {
        border: 2px solid black;
        position: absolute;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>

<body>

    <?php

    include_once '../classes/conexao.php';


    #----------------------------------------------------------------------------------------
    #Selecionar o Banco de Dados

    $selecao = "SELECT * FROM postagens";

    $selecao_feita = mysqli_query($conn, $selecao);

    ?>

    <style>
        .col-sm-4 {
            position: relative;
            border: 1px solid black;
            padding: 12px;
        }

        img {
            width: 250px;
            margin-left: 70px;
        }

        p {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
        }
        button{
            border: none;
            position: absolute;
            background-image: none;
            background-color: white;
        }
    </style>
    <div class="conatiner container-fluid">
        <?php while ($conjunto = mysqli_fetch_array($selecao_feita)) {

            #----------------------------------------------------
            #Sistema de Salvamento (Pegando as Informações do user logado)

            $id_user = $_SESSION['info_logado'];

        ?>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-heard">
                        <h4><?php echo $conjunto[1]; ?></h4>
                    </div>
                    <div class="card-body">
                        <img src="<?php echo $conjunto[3]; ?>" alt="não foi">
                        <br><br>
                        <p><?php echo $conjunto[4]; ?></p>
                        <br><br>
                        <a href="../frontend/home.php?<?php echo $id_user[0]; ?>">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                                    class="bi bi-bookmark-heart-fill" viewBox="0 0 16 16">
                                    <path d="M2 15.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v13.5zM8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z" />
                                </svg>
                            </button>
                        </a>
                        <br><br>
                    </div>
                    <div class="card-footer text-center">
                        Publicado Por: <?php echo $conjunto[2]; ?>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <?php } ?>
    </div>
</body>

</html>