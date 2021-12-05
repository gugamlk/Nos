<?php 
    //UPDATE `users` SET `nick` = 'Lucas' WHERE `users`.`id` = 5
    session_start(); 
    include_once '../classes/conexao.php'; 

    if(isset($_POST['alterar'])){
        
        #recebendo a imagem de perfil

        
        $imagem_alt = $_FILES['imagem_alt'];


        #recebendo as informações do formulario alterar

        $nick_alt = $_POST['nick_alt']; 
        $email_alt = $_POST['email_alt']; 
        $senha_alt = $_POST['senha_alt']; 
        $nome_alt = $_POST['nome_alt'];

        
        #buscando o id do usuario 

        $id_user = $_SESSION['info_logado']; 

        #verificando procedência do arquivo 

        $novo_imagem = explode('/',$imagem_alt['type']); 

        if(isset($imagem_alt)){

        if($novo_imagem[0] == 'image'){
            
            #guardadando imagem 
            $endereco_novo = ('../img/'. $imagem_alt['name']); 
            
            move_uploaded_file($imagem_alt['tmp_name'], $endereco_novo); 

            $inserir_img = "UPDATE users SET foto = '$endereco_novo' WHERE users. id = '$id_user[0]' ";

            $alterando_img = mysqli_query($conn, $inserir_img);

        }else{
            header("Location: ../frontend/perfil.php?erro_img"); 
        }
    }
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
?>        
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../css/perfil.css" rel="stylesheet">
  <link rel="stylesheet" href="../estily/boots1.css">
  <link rel="stylesheet" href="../estily/boots2.java">
  <link rel="stylesheet" href="../estily/boots3.java">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="body">
    Tudo Certo, Click aqui para <a href="../frontend/login.php"><button>Atualizar</button></a>
</body>
</html>

<?php 
    }else{
        echo 'não esta funcionando'; 
    }
?>