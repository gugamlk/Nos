<?php session_start(); ?>
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
<div class="card-body">
  <?php include_once 'main/cHome.php'?>
</div>
  <?php


  require_once '../classes/conexao.php';
  #-----------------------------------------------------------------------
  #Mostrar as informações
  if ($_SESSION['log'] == 'logado') {

    $info_user = $_SESSION['info_logado'];

  ?>
  <div class="perf row">
    <div class="foto col">
    <img class="imp" src="<?php echo $info_user[7]; ?>">
    </div>
    <div class="info col">
      <div class="card-body">
      <h4 class="nomeu"><?php echo $info_user[1]; ?></p>
        <p class="nicku"><?php echo $info_user[2]; ?></p>
        <p class="emailu"><?php echo $info_user[3]; ?></p>
        <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#myModal">
          Editar
        </button>
      </div>
    </div>
  </div>


       




<!-- The Modal -->
<div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="perfe modal-title">Editar Perfil</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">

                <img src="<?php echo $info_user[7];  ?>" class="img-fluid" alt="Imagem do Usuário">

                <div class="form-floating">
                  <form action="../backend/alterar.php" name="alter" method="POST" enctype="multipart/form-data">
                    <label for="myfile">Alterar foto de perfil:</label>
                    <br><br>
                    <input type="file" id="myfile" name="imagem_alt">
                </div>

                <div class="form-floating">
                  <input type="text" name="nome_alt" value="<?php echo $info_user[1]; ?>" class="form-control">
                  <label for="floatingText">Nome</label>
                </div>

                <div class="form-floating">
                  <input type="text" name="nick_alt" value="<?php echo $info_user[2]; ?>" class="form-control">
                  <label for="floatingText">Nickname</label>
                </div>

                <div class="form-floating">
                  <input type="email" class="form-control" name="email_alt" value="<?php echo $info_user[3]; ?>">
                  <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                  <input type="text" class="form-control" name="senha_alt" value="<?php echo $info_user[4]; ?>">
                  <label for="floatingPassword">Password</label>
                </div>

              </div>


              <!-- Modal footer -->
              <div class="modal-footer">
                <input type="submit" class="buttona" name="alterar" data-bs-dismiss="modal" value="Salvar Alterações">
                <button type="reset" class="buttonb" data-bs-dismiss="modal">Cancelar Alterações</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <h4>
          <?php if (isset($_GET['erro_img'])) {
            die('Esse Tipo de Arquivo não é suportado');
          }
          ?>
        </h4>



        <!-- Itens Salvos -->

        <?php
        if (isset($_SESSION['salvo'])) {
          //---------------------------------------------------------------------------------------------------------  
          //verificando se o ousuário adiconou novas postagens ao seu salvos
          //---------------------------------------------------------------------------------------------------------  


          foreach ($_SESSION['salvo'] as $key => $value) {

            $id = $value['id'];
            $titulo = $value['titulo'];
            $autor = $value['autor'];
            $imagem = $value['imagem'];
            $conteudo = $value['conteudo'];
            $cod = $value['cod'];

            //verificando
            
            $verificar_existente = "SELECT * FROM more WHERE idPostagem LIKE '$id' ";
            
            $existente =mysqli_query($conn, $verificar_existente); 

            $verificar = mysqli_fetch_array($existente); 

            if(isset($verificar[0])){

              

            }else{

             $salvando_banco = "INSERT INTO more (idPostagem, titulo, autor, imagem_net, conteudo, cod, salvo) 
              VALUES ('$id', '$titulo', '$autor', '$imagem', '$conteudo', '$cod', NULL)";

              $salvando = mysqli_query($conn, $salvando_banco);             
              
          }
        }
      }
?>
        
  <?php } else { ?>
    <h3> voce não se encontra logado<a href="../app/index.php">logar</a>;
    <?php } ?>

</body>

</html>