<?php
include_once '../classes/conexao.php';
if (isset($_POST['entrar'])) {
    session_start();

    $login_user = array($_POST['email_user'], $_POST['senha_user']);

    #------------------------------------------------------------------------------
    #Receber as informações dos usuarios existentes

    $pegar_users = "SELECT * FROM users WHERE email LIKE '$login_user[0]' ";

    $lista_users = mysqli_query($conn, $pegar_users);

    $info_users = mysqli_fetch_array($lista_users);

    #------------------------------------------------------------------------------
    #comparar as informações
    if($login_user[0] == $info_users[3]){

        if($login_user[1] == $info_users[4]){

            $_SESSION['log'] = "logado";
            $_SESSION['info_logado'] = $info_users; 
            
            header("Location: ../backend/main.php");
            
            
        }else{
            header("Location:../frontend/login.php?senha_Errada");
        } 
    }else{
        
        header("Location:../frontend/login.php?email_errado");
        
      }  
}

?>
