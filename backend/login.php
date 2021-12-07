<?php
include_once '../classes/conexao.php';
session_start();
if (isset($_POST['entrar'])) {
    
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
            
            $criar_salvos = "INSERT INTO more (id_salvos, usuario, salvos, imagem) VALUES (NULL, '0', '$info_users[0]', '0')";

            $salvos = mysqli_query($conn, $criar_salvos);
            
            header("Location: ../frontend/home.php");
            
            
        }else{
            header("Location:../frontend/login.php?senha_Errada");
        } 
    }else{
        
        header("Location:../frontend/login.php?email_errado");
        
      }  
}

?>
