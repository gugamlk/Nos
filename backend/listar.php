<?php 
    include_once '../classes/conexao.php'; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/listar.css" rel="stylesheet">
    <title>Listar</title>
</head>
<?php 

    //recerber as informações do usuairo logado 

    $indentifcao = $_SESSION['info_logado'];

    // receber o salvos do usuario

    $receber = "SELECT * FROM more WHERE cod LIKE '$indentifcao[0]'";

    $guardar = mysqli_query($conn, $receber);

    while($mostrar = mysqli_fetch_array($guardar)){ 

?>


<div class="aa">
        <div class="cima card-header">
            <?php echo $mostrar[1] ?>
        </div>

        <div class="meio card-body">

            <div class="row">

                <div class="salvimg col">
                    <img class="imgsalv" src="<?php echo $mostrar[3]; ?>" alt="não foi">
                </div>

                <div class="conteud col " maxlength="221">
                    <p class="cont"><?php echo $mostrar[4]; ?></p>
                </div>

            </div>

        </div>
            
        <div class="baixo card-footer">
            Publicado por: <?php echo $mostrar[2]; ?>
        </div>
    </div>

    


    <?php }?>
<body>
    
</body>
</html>