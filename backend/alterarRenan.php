<?php
session_start();
ob_start();

try {
    $conexao = new PDO("mysql:host=localhost;charset=utf8;dbname=tcc", "root", "");
} catch (PDOException $err) {
    echo "Erro: Conexão com o db não realizada! Erro gerado: " . $err->getMessage();
}

// Recebendo os dados do form
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (isset($dados['alterar'])) {
    $imagem = null;

    if (!empty($_FILES['imagem_alt']['name'])) {
        $img = $_FILES['imagem_alt']['name'];

        $extensao = strtolower(pathinfo($img, PATHINFO_EXTENSION));

        $imagem = md5(time()) . "." . $extensao;

        $directory = "../img/";

        move_uploaded_file($_FILES['imagem_alt']['tmp_name'], $directory . $imagem);

        $_SESSION["info_logado"]["foto"] = $imagem;
    }

    $_SESSION["info_logado"]["nome"] = $dados['nome_alt'];
    $_SESSION["info_logado"]["nick"] = $dados['nick_alt'];
    $_SESSION["info_logado"]["email"] = $dados['email_alt'];
    $_SESSION["info_logado"]["senha"] = $dados['senha_alt'];

    // echo "<pre>";
    // print_r($_SESSION["info_logado"]);
    // print_r($dados);
    // echo "</pre>";
    // exit;

    if ($imagem === null) {
        $sql = 'UPDATE users SET nome = "'. $_SESSION["info_logado"]["nome"] .'", nick = "'. $_SESSION["info_logado"]["nick"] .'", email = "'. $_SESSION["info_logado"]["email"] .'", senha = "'. $_SESSION["info_logado"]["senha"] .'" WHERE id = '. $_SESSION["info_logado"]["id"] .'';
    } else {
        $sql = 'UPDATE users SET nome = "'. $_SESSION["info_logado"]["nome"] .'", nick = "'. $_SESSION["info_logado"]["nick"] .'", email = "'. $_SESSION["info_logado"]["email"] .'", senha = "'. $_SESSION["info_logado"]["senha"] .'", foto = "'. $_SESSION["info_logado"]["foto"] .'" WHERE id = '. $_SESSION["info_logado"]["id"] .'';
    }

    // echo $sql;
    // exit;

    $updateUser = $conexao->prepare($sql);
    $updateUser->execute();

    $_SESSION['msg'] = "<p>Usuário editado com sucesso</p>";
    unset($dados);
    header("Location: ../frontend/perfil.php");
    exit;
}
