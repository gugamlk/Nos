<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/iHome.css" rel="stylesheet">
    <title>Card Inserir</title>
</head>

<body>

        <div class="inser card" id="inserir">
            <div class="card-header">
                Inserir Novo Conteudo:
            </div>
            <div class="card-body">
                <form action="../backend/inserir.php" method="post" enctype="multipart/form-data">


            Insira o titulo de sua publicação:
            <br>
            <input type="text" class="titulo" name="titulo">
            
            <br>
            <br>
            Adicione uma imagem para sua publicação:
            <br>
            <input type="file" class="imagem" name="imagem">
            <br>
            <br>
            Escreva o conteúdo de sua publicação:
            <br>
            <textarea rows="5" cols="200" maxlength="221" type="text" class="conteudo" name="conteudo"></textarea>
            
            <br>
            <input class="button" type="submit" name="inserir">
                
                
                </form>
            </div>
        </div>

</body>

</html>