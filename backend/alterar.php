<?php 
    //UPDATE `users` SET `nick` = 'Lucas' WHERE `users`.`id` = 5
    session_start(); 
    include_once '../classes/conexao.php'; 

    if(isset($_POST['alterar'])){
        
        #recebendo a imagem de perfil

        $img_perfil = $_FILES['myfile']; 


        #recebendo as informações do formulario alterar

        $nick_alt = $_POST['nick_alt']; 
        $email_alt = $_POST['email_alt']; 
        $senha_alt = $_POST['senha_alt']; 
        $nome_alt = $_POST['nome_alt'];

        #buscando o id do usuario 

        $id_user = $_SESSION['info_logado']; 

        #inserindo as alterações no banco de Dados 

        $inserir_nick = "UPDATE users SET nick = '$nick_alt' WHERE users. id = '$id_user[0]' ";
        $inserir_email = "UPDATE users SET email = '$email_alt' WHERE users. id = '$id_user[0]' ";
        $inserir_senha = "UPDATE users SET senha = '$senha_alt' WHERE users. id = '$id_user[0]' ";
        $inserir_nome = "UPDATE users SET nome = '$nome_alt' WHERE users. id = '$id_user[0]' "; 

        #alterando

        $alterando_nick = mysqli_query($conn, $inserir_nick);
        $alterando_email = mysqli_query($conn, $inserir_email);
        $alterando_senha = mysqli_query($conn, $inserir_senha);   
        $alterando_nome = mysqli_query($conn, $inserir_nome);   
    }else{
        echo 'não esta funcionando'; 
    }
?>