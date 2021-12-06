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
                        <a href="../frontend/home.php?salvar=<?php echo $conjunto[0]?>">
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
        <?php 
        //salvamento

        if(isset($_GET['salvar'])){
            //decalrando o id do post salvo 
            $id_post = (int)$_GET['salvar'];

            //buscando as informações do post salvo
            $selecao_este = "SELECT * FROM postagens WHERE idPostagem LIKE $id_post"; 

            $post_salvo = mysqli_query($conn, $selecao_este); 

            $post_save = mysqli_fetch_array($post_salvo);
            
            if(isset($_SESSION['salvo'][$id_post])){
                echo "<script>alert('este post já foi salvo')</script>"; 
            
            
        ?>
<h3>Posts salvos</h3>
    
    <?php 
    }else{
        $_SESSION['salvo'][$id_post] = $post_save; 
        echo "<script>alert('post salvo com sucesso')</script>"; 
    }
} 
    ?>
</body>

</html>