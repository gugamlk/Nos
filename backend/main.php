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
    
        .col-sm-4{
            position: relative;
            border: 1px solid black;
            padding: 12px;
        }
        img{
            width: 250px;
            margin-left: 70px;
        }
        p{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
        }
     </style>
     <div class="conatiner container-fluid">
    <?php while($conjunto = mysqli_fetch_array($selecao_feita)){ ?>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-heard">
                        <h4><?php echo$conjunto[1];?></h4>
                    </div>
                    <div class="card-body">
                        <img src="<?php echo $conjunto[3]; ?>" alt="não foi">
                        <br><br>
                        <p><?php echo $conjunto[4]; ?></p>
                    </div>
                    <div class="card-footer text-center">
                        Publicado Por: <?php echo $conjunto[2]; ?>
                    </div>
                </div>
            </div> 
        </div>
        <br><br>
        <?php 
            if(isset($_SESSION['']))
        ?>
        <?php }?>
     </div>
</body>

</html>