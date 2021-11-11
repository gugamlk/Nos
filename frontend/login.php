<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/login.css" rel="stylesheet">
        <link rel="stylesheet" href="../estily/boots1.css">
    <link rel="stylesheet" href="../estily/boots2.java">
    <link rel="stylesheet" href="../estily/boots3.java">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
    <div class="container container-fluid text-center">
        <form action="../frontend/aaa.php" method="post">
            <label for="nick">Digite seu apelido</label>
            <br>
            <input type="text" name="nick_user">
            <br>
            <label for="senha">Digite sua senha</label>
            <br>
            <input type="password" name="senha_user">
            <br>
            <input type="submit" name="entrar" value="Entrar">
        </form>
    </div>
    Não é cadastrado ainda?
    <br>
    <a href="../frontend/cadastro.php">Clique aqui para se cadastrar</a>
    </body>
</html>