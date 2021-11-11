<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>
<title>Cadastro</title>
</head>
<div class="container container-fluid text-center">
    <form action="?cadastrado" method="post">
        <label for="nome_c">Digite seu nome completo</label>
        <br>
        <input type="text" id=" nome_c" name="nome_user">
        <br>
        <label for="nick_user">Digite seu apelido</label>
        <br>
        <input type="text" name="nick_user">
        <br>
        <label>Digite seu email:</Label>
        <br>
        <input type="email" name="email_user">
        <br>
        <label for="senha">Digite sua senha</label>
        <br>
        <input type="password" name="senha_user">
        <br>
        <input type="submit" name="cadastro" value="Criar cadastro">
        <br>
    </form>
</div>