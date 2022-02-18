<?php

if (isset($_POST['submit'])) {
    include_once('conexao.php');

    $login = $_POST['login'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $senha = $_POST['pass'];
    $CSenha = password_hash($senha, PASSWORD_DEFAULT);

    $result = mysqli_query($conexao, "INSERT INTO data_user (user_login, email, user_pass, name_user) VALUES ('$login', '$email', '$CSenha', '$name')");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuários </title>
</head>

<body>

    <h1>Cadastro</h1>
    <form action="cadastro_usuario.php" method="POST">
        <input type="text" id="login" name="login" placeholder="Login"><br>
        <input type="text" id="name" name="name" placeholder="Nome"><br>
        <input type="text" id="email" name="email" placeholder="e-mail"><br>
        <input type="text" id="pass" name="pass" placeholder="Senha"><br>
        <input type="checkbox" placeholder="função"><br>
        <input type="checkbox" placeholder="função"><br>
        <input type="checkbox" placeholder="função"><br>
        <input type="submit" name="submit" id="submit">
    </form>

</body>

</html>