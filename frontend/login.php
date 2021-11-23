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
    <link rel="stylesheet" href="../estily/loginS.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="body">
    <div class="logar mx-auto">
        <h1 class="titulo">Login</h1>
        <form class="form" action="../backend/login.php" method="post">

            <input type="email" name="email_user" placeholder="Seu email" required>
            <br>
            <br>
            <input type="password" name="senha_user" placeholder="Sua Senha" required>
            <br>
            <br>
            <button class= "button" type="submit" name="entrar">Entrar</button>
        </form>
        <br>
        <a href="../frontend/cadastro.php">
        <button class="button"> Clique aqui para se cadastrar </button></a>
    </div>
</body>

</html>