<?php
session_start();

if (isset($_POST['login_user']) && !empty($_POST['login_user']) && !empty($_POST['pass_user'])) {
    include("conexao.php");

    $login = $_POST['login_user'];
    $senha = $_POST['pass_user'];
    $CSenha = password_hash($_POST['pass_user'], PASSWORD_DEFAULT);
    $Dsenhha = password_verify($senha, $CSenha);

    $sql_code = "SELECT * FROM data_user WHERE user_login = '$login' and user_pass = '$senha' LIMIT 1";
    $sql_exec = $conexao->query($sql_code);


    $usuario = $sql_exec->fetch_assoc();
    if ($Dsenhha) {
        $_SESSION['login_user'] = $login;
        header('Location: main.php');
        exit();
    } else {
        unset($_SESSION['login_user']);
        header('Location: index.php');
    }
} else {
    function function_alert($message)
    {
        unset($_SESSION['login_user']);
        // Display the alert box 
        echo "<script>alert('$message');</script>";
    }
    // Function call
    function_alert("Welcome to Geeks for Geeks");

    header('Location: index.php');
}
