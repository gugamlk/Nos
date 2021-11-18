<?php 
    require_once '../classes/user.php';
    require_once '../classes/conexao.php';

    if(isset($_POST['entrar'])){
        session_start();

        $nick = $_POST['nick_user'];
        $senha = $_POST['senha_user'];
        
        logar($conn, $nick, $senha); 
         
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <a href="../app/index.php"><button>Voltar</button></a>
        <?php
    }
        ?>
    </body>
</html>
