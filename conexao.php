<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'bd_sas');

// Create connection
$conexao = new mysqli(HOST, USUARIO, SENHA, DB);
// Check connection
if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}
