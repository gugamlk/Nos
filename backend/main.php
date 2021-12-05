<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/main.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/91353c877b.js" crossorigin="anonymous"></script>
    <!-- Boostrap-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <title>Main</title>
</head>

<body>

    <?php

    include_once '../classes/conexao.php';


    #----------------------------------------------------------------------------------------
    #Selecionar o Banco de Dados

    $selecao = "SELECT * FROM postagens";

    $selecao_feita = mysqli_query($conn, $selecao);

    ?>


        <?php while ($conjunto = mysqli_fetch_array($selecao_feita)) {

            #----------------------------------------------------
            #Sistema de Salvamento (Pegando as Informações do user logado)

            $id_user = $_SESSION['info_logado'];

        ?>

                <div class="post card">
                    <div class="card-header">
                        Publicado Por: <?php echo $conjunto[2]; ?>
                    </div>
                    <div class="card-body">
                        <img src="<?php echo $conjunto[3]; ?>" alt="não foi">
                        <br><br>
                        <p><?php echo $conjunto[4]; ?></p>
                        <br><br>
                        <button>
                        <a href="../frontend/home.php?<?php echo $id_user[0]; ?>">
                        <i class="fa-solid fa-heart"></i>
                                Salvar
                    </a>
                        </button>
                        </a>
                        <br><br>
                    </div>
                    
                </div>
        <br><br>
        <?php } ?>
    
</body>

</html>