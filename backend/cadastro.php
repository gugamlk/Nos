<?php
 require_once '../classes/conexao.php';
    #------------------------------------------------------------------------
    #verificando o envio do formulário 
    if(isset($_POST['cadastro'])){

    #------------------------------------------------------------------------    
    #Recebendo as informações do formulario 
    
    $nome_novo = $_POST['nome_user']; 
    $nick_novo = $_POST['nick_user'];
    $email_novo = $_POST['email_user']; 
    $senha_novo = $_POST['senha_user']; 
    $idade_novo = $_POST['idade_user']; 

    #------------------------------------------------------------------------
    #verificar se esse usuario existe
    
    }
        /*
        nome_user
         nick_user
         email_usuario 
         senha_user
         idade_user
         */
 ?>