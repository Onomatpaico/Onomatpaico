<?php
session_start();

if (isset($_POST['login_user']) && !empty($_POST['login_user']) && !empty($_POST['pass_user'])) {
    // acessa
    include_once("conexao.php");
    $login = $_POST['login_user'];
    $senha = $_POST['pass_user'];
    $CSenha = password_hash($_POST['pass_user'], PASSWORD_DEFAULT);
    $Dsenhha = password_verify($senha, $CSenha);

    $sql = "SELECT * FROM data_user WHERE user_login = '$login' and user_pass = '$senha' LIMIT 1";

    $result = $conexao->query($sql);

    $row = mysqli_num_rows($result);

    $row = mysqli_num_rows($result);

    if ($row == 1) {
        $_SESSION['login_user'] = $login;
        $_SESSION['pass_user'] = $senha;
        header('Location: painel.php');
        exit();
    } else {
        unset($_SESSION['login_user']);
        unset($_SESSION['pass_user']);
        header('Location: index.php');
    }
} else {
    //Não acessa
    header('Location: index.php');
}
