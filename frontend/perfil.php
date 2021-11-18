<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/home.css" rel="stylesheet">
    <link rel="stylesheet" href="../estily/boots1.css">
    <link rel="stylesheet" href="../estily/boots2.java">
    <link rel="stylesheet" href="../estily/boots3.java">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<?php 
 session_start(); 
    if(isset($_SESSION['logado'])){
?>
  
 <?php }else{?>
    <h3> voce não se encontra logado<a href="../app/index.php">logar</a>; 
    <?php }?>

    <div class="card mx-auto" style="width:300px">
  <img class="card-img-top" src="../img/perfil.png" alt="Imagem do usuario">
  <div class="card-body">
    <h4 class="card-title">nome do usuario</h4>
    <h6 class="card-subtitle text-muted">nickname</h6>
    <h6 class="card-item">email do usuario</h6>
    

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
Editar
</button>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Editar Perfil</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      
      <img src="#" class="rounded" alt="Imagem do Usuário">
      <div class="form-floating mb-3">
<br><br>
      <label for="myfile">Anexar imagem:</label>
      <input type="file" id="myfile" name="myfile">
    </div>
      <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingText">
  <label for="floatingPassword">Nickname</label>
</div>
      <div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword">
  <label for="floatingPassword">Password</label>
</div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Salvar Alterações</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar Alterações</button>
      </div>
    </div>
  </div>
</div>

<!-- Itens Salvos -->



</body>

</html>