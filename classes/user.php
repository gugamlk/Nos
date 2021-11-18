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
    function logar($conn, $nick, $senha){
        #Selecionar o banco 
        $realizando = "SELECT * users WHERE nick LIKE $nick and senha = $senha"; 

        #pesquisando 
        $resultado = mysqli_query($conn, $realizando);  
        if($resultado){
            echo "deu certo"; 
        }else{
            print_r($resultado); 
        }

    }
  


