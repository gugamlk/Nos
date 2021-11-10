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

    #select 

    function select($conn){

        $procura = "SELECT * FROM users";

        $realizado = mysqli_query($conn, $procura);

        $resultado = mysqli_fetch_array($realizado); 
        
        if($resultado){
            for(cont)
        }
    }
?>
<html>
    <a href="?test"><button>test</button></a>
    <?php 
        if(isset($_GET['test'])){
            $info = array('Gustavo', 'GUGA', 'guga@gmail.com', '1234');

            cadastro($conn, $info);
        }
    ?> 
</html>