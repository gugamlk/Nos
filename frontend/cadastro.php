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
</head>
<title>Cadastro</title>
</head>
<body class="body">
    <div class="box">
        <form action="../backend/cadastro.php" method="post">
            <h4 class="titulo">Cadastro</h4>
            <fieldset>
                <div class="inputbox">
                    <label for="nome_completo">Insira seu nome completo
                    
                    <input type="text" name="nome_user" id="nome_completo" required>
                    </label>
                </div>
                <div class="inputbox">
                    <label for="nick_user">Insira seu apelido
                    
                    <input type="text" name="nick_user" id="nick_user" required>
                    </label>
                </div>
                <div class="inputbox">
                    <label for="email">Insira seu email:
                  
                    <input type="email" name="email_user" id="email" required>
                    </label>
                </div>
                <div class="inputbox">
                    <label for="senha">Insira sua senha:
                   
                    <input type="password" name="senha_user" id="senha" required>
                    </label>
                </div>
                <div class="inputbox">
                    <label for="idade">Insira sua data de nascimento:
                    
                    <input type="date" name="idade_user" id="idade" required>
                    </label>
                </div>
                </fieldset>
                <br>
                <button type="submit" class="button" name="cadastro">Criar cadastro</button>
                <br><br>
        </form>

        <a href="../app/index.php"><button class="button">Voltar</button></a>
            
    </div>
    <?php 
        if (isset($_GET['email_existe'])){
    ?>
    <h4>Esse email já esta vinculado a uma conta!</h4>
    <?php } ?>
</body>