<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['login_user'])) {
    die("Você não pode acessar esta página.<p><a href=\"index.php\">Entrar</a></p>");
}
