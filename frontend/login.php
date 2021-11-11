<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <div class="container container-fluid text-center">
        <form action="../backend/login.php" method="post">
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