<?php 
    include_once '../classes/conexao.php'; 
    session_start();

    #Receber as unformações do formulario

    if(isset($_POST['inserir'])){
        #-------------------------------------------------------------------------------
        #guardando imagem

        $imagem = $_FILES['imagem']; 

        move_uploaded_file($imagem['tmp_name'], '../img/'.$imagem['name']); 
        
        #-------------------------------------------------------------------------------
        #Declarando Informações 

        $titulo = $_POST['titulo'];
        $info_logado = $_SESSION['info_logado']; 
        $autor = $info_logado[2]; 
        $imagem_post = ('../img/'.$imagem['name']);
        $conteudo = $_POST['conteudo'];  
 
        #-------------------------------------------------------------------------------
        #Inserir no Banco de Dados o post 

        $comando_inserir = "INSERT INTO postagens 
        (idPostagem, titulo, autor, imagem_net, conteudo) VALUES (NULL, '$titulo', '$autor', '$imagem_post', '$conteudo')"; 

        $inserir = mysqli_query($conn, $comando_inserir); 

        if($inserir){
            header("Location: ../frontend/home.php"); 
        }else{
            header("Location: ../app/index.php?Erro_Post");
        }
    }
?>