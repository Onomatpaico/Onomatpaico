<?php
session_start();
include("conexao.php");

if ((!isset($_SESSION['login_user']) == true) and (!isset($_SESSION['pass_user']) == true)) {
    unset($_SESSION['login_user']);
    unset($_SESSION['pass_user']);
    header('Location: index.php');
}

$logado = $_SESSION['login_user'];

include('protect.php');

$sql = "SELECT * FROM data_user ORDER BY user_id DESC";
$result = $conexao->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/StylePainel.css">
    <title>SAS Soluções :: Painel</title>
</head>

<body>
    <input type="checkbox" id="check">
    <!--header começo-->
    <header>
        <label for="check">
            <ion-icon name="menu-outline" id="sidebar_btn"></ion-icon>
        </label>
        <div class="left">
            <h3>SAS <span>Soluções</span></h3>
        </div>
        <div class="right">
            <a href="logout.php" class="sair_btn">Sair</a>
        </div>
    </header>
    <!--header final-->
    <!--sidebar começo-->
    <div class="sidebar">
        <center>
            <img src="img/jpg/img-1.jpg" class="image" alt="">
            <h2><?php echo $_SESSION['login_user']; ?></h2>
        </center>
        <a href="#">
            <ion-icon name="desktop-outline"></ion-icon><span>Painel</span>
        </a>
        <a href="#">
            <ion-icon name="calendar-clear-outline"></ion-icon><span>Formulario</span>
        </a>
        <a href="#">
            <ion-icon name="camera-outline"></ion-icon><span>Galeria</span>
        </a>
        <a href="#">
            <ion-icon name="settings-outline"></ion-icon><span>Configuração</span>
        </a>
        <a href="#">
            <ion-icon name="information-circle-outline"></ion-icon><span>Sobre</span>
        </a>
    </div>
    <!--sidebar final-->
    <div class="content">


    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>