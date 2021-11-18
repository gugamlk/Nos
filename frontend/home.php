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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../img/logoteste.jpeg" alt="Logo" style="width:40px;" class="rounded-pill"> 
    </a>
  </div>
    </a>
  </div>
  <div>

      
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
          <a class="item" href="../frontend/sobre.php">Sobre</a><br>
          <a class="item" href="../app/index.php?sair">sair</a>
  </div>
</div>
<div class="container mt-3">
  <div class="card" style="width:400px">
    <div class="card-header"><h4>user<h4></div>
    <div class="card-body">
    <textarea rows="1" cols="40" readonly>O que passa em sua cabeça?</textarea>

    <label for="myfile">Anexar imagem:</label>
  <input type="file" id="myfile" name="myfile"><br><br>
  
</div>
    <div class="card-footer">
    <input type="submit" value="Publicar">
    </div>
  </div>
</div>

<!-- Meio -->

<div class="container" id="mainHome">

</div>

</body>
</html>