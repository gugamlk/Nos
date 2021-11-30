<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Inserir</title>
</head>
<style>
container-fluid{
    width: 500px;
}
#inserir{
    margin-top: 150px;
    left: 800px;
    position: absolute;
}
</style>
<body>
    <div class="container-fluid">
        <div class="card" id="inserir">
            <div class="card-header">
                Inserir Novo Conteudo:
            </div>
            <div class="card-body">
                <form action="../backend/inserir.php" method="post" enctype="multipart/form-data">
                    Insira um titulo para seu post:
                    <br>
                    <input type="text" name="titulo">
                    <br><br>
                    Adicione um imagem para seu post:
                    <br><br>
                    <input type="file" name="imagem">
                    <br><br>
                    Adicione o conteudo do seu post:
                    <br><br>
                    <input type="text" name="conteudo">
                    <br><br>
                    <input type="submit" name="inserir">
                </form>
            </div>
        </div>
    </div>
</body>

</html>