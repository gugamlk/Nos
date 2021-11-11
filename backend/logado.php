<?php 
     session_start(); 

    if($logado){
        $_SESSION['log'] = true;
        header("Location:../app/index.php");
    }
?>