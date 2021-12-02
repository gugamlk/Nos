<?php

require_once '../classes/conexao.php';

#------------------------------------------------------------------------
#verificando o envio do formulário 
if (isset($_POST['cadastro'])) {

    #------------------------------------------------------------------------    
    #Recebendo as informações do formulario 

    $nome_novo = $_POST['nome_user'];
    $nick_novo = $_POST['nick_user'];
    $email_novo = $_POST['email_user'];
    $senha_novo = $_POST['senha_user'];
    $tipo = 0;
    $idade_novo = $_POST['idade_user'];

    $imagem_user = $_FILES['imagem_user'];
    #------------------------------------------------------------------------
    #verificar se esse usuario existe

    $verficar_clone = "SELECT * FROM users WHERE email LIKE '$email_novo' ";

    $sera = mysqli_query($conn, $verficar_clone);

    $array_sera = mysqli_fetch_array($sera);

    if (isset($array_sera)) {
    
        header("Location: ../frontend/cadastro.php?email_existe");
         
    } else{
        
        #------------------------------------------------------------------------
        #salvando a imagem do usuario
        $verificar_doc = explode('/', $imagem_user['type']); 

        print_r($verificar_doc); 

        if ($verificar_doc[0] == 'image') {

            $endereco = ('../img/'.$imagem_user['name']);

             move_uploaded_file($imagem_user['tmp_name'], $endereco); 

        }else{
            header('Location: ../frontend/cadastro.php?erro_img'); 
        }
        

        #------------------------------------------------------------------------
        #Inserir No Banco de Dados os novo usuario 


        $novo_comando = "INSERT INTO users 
        (id, nome, nick, email, senha, tipo, idade, foto) VALUES 
        (NULL, '$nome_novo', '$nick_novo', '$email_novo', '$senha_novo', '$tipo', '$idade_novo', '$endereco')";

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
