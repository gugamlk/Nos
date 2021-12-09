<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/perfil.css" rel="stylesheet">
    <link rel="stylesheet" href="../estily/boots1.css">
    <link rel="stylesheet" href="../estily/boots2.java">
    <link rel="stylesheet" href="../estily/boots3.java">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="body">
    <?php 
    include_once '../classes/conexao.php';
    //Listando Todos Os Usuarios

        $listagem_users = "SELECT * FROM users";
        
        $listagem = mysqli_query($conn,$listagem_users);
    ?>
    <header>
        <?php include_once 'main/cHome.php'; ?>
    </header>
    <section>
        <h2>Lista de Usuários</h2>
        <div class="container container-fluid">
            <table class="table">
                <tr>
                    <th>#id</th>
                    <th>Nome</th>
                    <th>Nick</th>
                    <th>email</th>
                    <th>senha</th>
                    <th>tipo</th>
                </tr>
                <?php while($users = mysqli_fetch_array($listagem)){?>
                <tr>
                    <td><?php echo $users[0];?></td>
                    <td><?php echo $users[1]; ?></td>
                    <td><?php echo $users[2]; ?></td>
                    <td><?php echo $users[3]; ?></td>
                    <td><?php echo $users[4]; ?></td>
                    <td><?php echo $users[5]; ?> <a href="?alterar=<?php echo $users[0];?>"><button> alterar</button></a> </td>
                </tr>
                <?php } ?>
            </table>  
            <br><br> 
          <?php 
          if (isset($_GET['alterar'])) {
              $id = (int) $_GET['alterar'];
              
              $pegando_user = "SELECT * FROM users WHERE id LIKE '$id' ";

              $pegando = mysqli_query($conn, $pegando_user);

              $adm_user = mysqli_fetch_array($pegando); 
            
          
          //
?>
<div class="card">
    <div class="card-header">
        <h3>Edição de usuario</h3>
    </div>
    <div class="card-body">
        
        <img src="<?php echo $adm_user[7]; ?>" alt="não possue imagem">
        <br><br>
        <h4>Nome: </h4> <?php echo $adm_user[1]; ?>
        <br>
        <h4>Nick: </h4><?php echo $adm_user[2]; ?>
        <br>
        <h4>Email: </h4><?php echo  $adm_user[3]; ?>
        <br>
        <h4>tipo: </h4> <?php if($adm_user[5] == 1){echo "Administrador";} else{ echo 'usuário comum'; }?>
        <br>
        <h4>Ano de Nascimento:</h4> <?php echo $adm_user[6];?>

    </div>
</div>
 <?php 
          
}
?>         

        </table>
    </section>

</body>

</html>