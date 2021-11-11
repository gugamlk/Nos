<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../css/home.css" rel="stylesheet">
    <link rel="stylesheet" href="../estily/boots1.css">
    <link rel="stylesheet" href="../estily/boots2.java">
    <link rel="stylesheet" href="../estily/boots3.java">
  </head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    </a>
  </div>
  <div class="container-fluid" style="right">
  <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
    Myself
  </button>
</div>
</nav>
<div class="offcanvas offcanvas-end" id="demo">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Myself</h1>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
          <a class="item" href="../frontend/perfil.php">Perfil</a><br>
          <a class="item" href="../frontend/mensagens.php">Mensagens</a><br>
          <a class="item" href="../frontend/bulas.php">Bulas</a><br>
          <a class="item" href="../frontend/salvos.php">Salvos</a><br>
          <a class="item" href="../frontend/contato.php">Contato</a><br>
          <a class="item" href="../frontend/sobre.php">Sobre</a>
  </div>
</div>
<div class="container p-5 my-3 border">
Faça sua postagem
</div>
<div class="container p-5 my-3 border">
  <h5>User</h5>
  <p>postagem</p>
  <img src="#" alt="imagem da postagem (opcional)" style="width:40px;" class="rounded-pill">
</div>

</body>
</html>