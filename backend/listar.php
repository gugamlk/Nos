<?php 
    session_start();
    include_once '../classes/conexao.php'; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<div class="row">
    <div class="col">
        <?php echo "Titulo:".$mostrar[1]."<br><br> Imagem:".$mostrar[3]."<br><br> conteudo:".$mostrar[4].
        "<br><br> Autor:". $mostrar[2]."<br><br><br>"; ?>
    </div>
</div>



<?php }?>
<body>
    
</body>
</html>