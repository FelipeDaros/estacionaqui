<?php

$servername = "localhost";
$database = "estacionamento";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Conexão falhou!" . mysqli_connect_error());
}
echo "Conectado!";
mysqli_close($conn);