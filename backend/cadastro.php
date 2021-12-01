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
    $tipo = 0;  
    $idade_novo = $_POST['idade_user']; 

    #------------------------------------------------------------------------
    #verificar se esse usuario existe

    $lista_usuarios = "SELECT * FROM users"; 
    
    $compact = mysqli_query($conn, $lista_usuarios); 

    $lista_u = mysqli_fetch_array($compact);  
    
    if($lista_u[3] == $email_novo){

        header("Location: ../frontend/cadastro.php?email_existe");
         
    }else{

        #------------------------------------------------------------------------
        #Inserir No Banco de Dados os novo usuario 

        $novo_comando = "INSERT INTO users 
        (id, nome, nick, email, senha, tipo, idade) VALUES 
        (NULL, '$nome_novo', '$nick_novo', '$email_novo', '$senha_novo', '$tipo', '$idade_novo')";

        $novo = mysqli_query($conn, $novo_comando); 
        
        if ($novo) {
            echo "cadastro realizado"; 

            header('Location: ../frontend/login.php'); 
        }else{
            echo "erro de cadastro"; 
        }
    }
    
    }
        /*
        nome_user
         nick_user
         email_usuario 
         senha_user
         idade_user
         */
 ?>