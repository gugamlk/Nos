<?php 
    #Usuario
    require_once 'conexao.php';
    function cadastro($conn, $info){
        $cadastro = "INSERT INTO users (id, nome, nick, email, senha, tipo, idade) VALUES (NULL, '$info[0]', '$info[1]', '$info[2]', '$info[3]', 0, '$info[4]')";
        
        $realizando = mysqli_query($conn, $cadastro);

        if($realizando){
            echo "cadastro realizado";
        }
    }
    #selecionar
    function inform($conn){
        $acao = "SELECT * FROM users";

        $pesq = mysqli_query($conn,$acao);

        $lista = mysqli_fetch_array($pesq);

        return $lista;     
    }
    #Logar
    function logar($conn, $email, $senha){
        #Selecionar o banco 
        $realizando = "SELECT * FROM users WHERE senha LIKE '$senha'"; 

        #pesquisando 
        $resultado = mysqli_query($conn, $realizando); 

        if($resultado){
        #array de verificação 
        $verificacao = mysqli_fetch_array($resultado); 
        
        #verificação de dados 
        if($email== $verificacao[3]){
            session_start(); 

            #afirmando o log 
            $_SESSION['logado'] = true;
            $_SESSION['id'] = $verificacao[0]; 

            header("Location: ../app/index.php?home"); 
        }else{
            header("Location: ../app/index.php?error");
        }
    }else{
        header("Location: ../app/index.php?Sem_User"); 
    }
    } 

    
  