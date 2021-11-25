<?php 
    include_once '../classes/conexao.php';
    include_once '../classes/postagens.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #card3 {
        top: 60px;
        left: 298px;
    }
</style>

<body>
    <?php

         $codigo = "SELECT * FROM postagens"; 

         $resultado = mysqli_query($conn, $codigo); 

         if($resultado){
             while($posts = mysqli_fetch_array($resultado)){
                
    ?>
<style>
 img{
   width: 250px;
   text-align: center;
 }
</style>
    <div class="container-fluid">
        <div clss="row">
            <div class="col">
                <div class=card id="card3">
                    <div class="card-header">
                        <h1><?php print_r($posts[1])?></h1>
                    </div>
                    <div class="card-body">
                        <img src="<?php print_r($posts[3])?>" alt="imagem não foi">                        <br><br>
                        <?php print_r($posts[4])?>
                    </div>
                    <div class="card-footer">
                        <h4>Autor:<?php autor($conn, $posts);?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
             }
        }
    ?>
</body>

</html>