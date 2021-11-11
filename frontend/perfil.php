<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<?php 
 session_start(); 
    if(isset($_SESSION['logado'])){
?>
  
 <?php }else{?>
    <h3> voce não se encontra logado<a href="../app/index.php">logar</a>; 
    <?php }?>
</body>

</html>