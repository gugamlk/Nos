<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/cadastro.css" rel="stylesheet">
    <link rel="stylesheet" href="../estily/boots1.css">
    <link rel="stylesheet" href="../estily/boots2.java">
    <link rel="stylesheet" href="../estily/boots3.java">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../estily/cadastroS.css">
</head>
<title>Cadastro</title>
</head>
<body>
    <div class="box">
        <form action="../backend/cadastro.php" method="post">
            <h1>Cadastro</h1>
            <fieldset>
                <div class="inputbox">
                    <label for="nome_completo">Digite seu nome completo</label>
                    <br>
                    <input type="text" name="nome_user" id="nome_completo" required>
                </div>
                <br>
                <div class="inputbox">
                    <label for="nick_user">Digite seu apelido</label>
                    <br>
                    <input type="text" name="nick_user" id="nick_user" required>
                </div>
                <br>
                <div class="inputbox">
                    <label for="email">Digite seu email:</Label>
                    <br>
                    <input type="email" name="email_user" id="email" required>
                </div>
                <br>
                <div class="inputbox">
                    <label for="senha">Digite sua senha</label>
                    <br>
                    <input type="password" name="senha_user" id="senha" required>
                </div>
                </fieldset>
                <br>
                <button type="submit" name="cadastro"> Criar cadastro </button>
                <br><br>
        </form>
     
        <a href="../app/index.php"><button>Voltar</button></a>
            
    </div>
</body>