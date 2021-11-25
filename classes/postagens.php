<?php 
 include_once 'conexao.php'; 
    #Selecionar o ultimo post inserido 
    function ultimo_post($conn){

        $codigo = "SELECT MAX(idPostagem) FROM postagens";

        $realizando = mysqli_query($conn, $codigo);

        $resultado_u = mysqli_fetch_array($realizando);
        
        return $resultado_u;

    }
    #selecionando o nome do autor da postagem 
    function autor($conn, $posts){
        if($posts[2] == $_SESSION['id']){

            $autor = "Você mesmo";
             
            echo $autor;
        }else{
            $realizando = "SELECT * FROM users WHERE id LIKE $posts[2]";
            
            $result = mysqli_query($conn, $realizando); 

            $aut = mysqli_fetch_array($result); 

            $autor = $aut[2]; 

            echo $autor;
        }
    }
?>