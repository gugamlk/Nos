<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>

</style>
<body>
<div class="container mt-3">
  <div class="card" style="position: absolute">
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


</body>
</html>