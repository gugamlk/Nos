<?php
 require_once '../classes/conexao.php';
 require_once '../classes/user.php';
if (isset($_POST['cadastro'])) {

    $info =  array($_POST['nome_user'], $_POST['nick_user'], $_POST['email_user'], $_POST['senha_user'], $_POST['idade_user']);

    print_r($info[4]); 

    cadastro($conn, $info);

    header("Location:../app/index.php");

}
