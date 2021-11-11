<?php 
    #Usuario
    require_once 'conexao.php';
    function cadastro($conn, $info){
        $cadastro = "INSERT INTO users (id, nome, nick, email, senha) VALUE (NULL, '$info[0]', '$info[1]', '$info[2]', '$info[3]')";
        
        $realizando = mysqli_query($conn, $cadastro);

        if($realizando){
            echo "cadastro realizado";
        }
    }
    function inform($conn){
        $acao = "SELECT * FROM users";

        $pesq = mysqli_query($conn,$acao);

        $lista = mysqli_fetch_array($pesq);

        return $lista;     
    }
  

