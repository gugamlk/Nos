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
    <!--
    <div class="logar">
        <div class="titulo">
            Login
        </div>
        <form class="form" action="../backend/login.php" method="post">

        <div class="form-floating">
  <input type="email" class="form-control" required>
  <label for="floatingEmail">Seu email</label>
</div>


<div class="form-floating">
  <input type="password" class="form-control" required>
  <label for="floatingPasswordt">Sua Senha</label>
</div>
            <button class= "button" type="submit" name="entrar">Entrar</button>
        </form>
        <br>
        <a href="../frontend/cadastro.php">
        <button class="button"> Clique aqui para se cadastrar </button></a>
    </div>-->
    <?php 
 if(isset($_GET['email_errado'])){
?>
    <h4>Seu email esta incorreto</h4>
    <br>
    <?php } if(isset($_GET['senha_Errada'])){ ?>
    <h4>Sua Senha esta Incorreta</h4>
    <br>
    <?php } ?>

    <form action="../backend/login.php" method="POST">
        Digite seu email:
        <br>
        <input type="email" name="email_user" required>
        <br>
        Insira Sua Senha:
        <br>
        <input type="password" name="senha_user" required>
        <br>
        <input type="submit" name="entrar">
    </form>
    <br>
    <a href="../frontend/cadastro.php">
        <button class="button"> Clique aqui para se cadastrar </button></a>
</body>

</html>