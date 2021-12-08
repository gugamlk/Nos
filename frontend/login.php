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
    <?php 
 if(isset($_GET['email_errado'])){
?>
    <h4>Seu email está incorreto.</h4>
    <br>
    <?php } if(isset($_GET['senha_Errada'])){ ?>
    <h4>Sua Senha está incorreta.</h4>
    <br>
    <?php } ?>
    <div class="logar">
        <h4 class="titulo">Login</h4>
    <form action="../backend/login.php" method="POST">

        <label> Insira seu email:
            <br>
        <input type="email" class="iemail" name="email_user" required>
        </label>
        <br>
        <label>Insira Sua Senha:
            <br>
        <input type="password" class="ipassword" name="senha_user" required>
        </label>
        <br>
        <input type="submit" class="button" name="entrar" value="Login">
    </form>
    <a href="../frontend/cadastro.php">
        <button class="button"> Clique aqui para se cadastrar </button></a>
    </div>
</body>

</html>