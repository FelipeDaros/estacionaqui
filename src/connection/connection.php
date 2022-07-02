<?php

$servername = "sql206.unaux.com";
$database = "unaux_32073220_estacionamento";
$username = "unaux_32073220";
$password = "aizhe85q7s";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Conexão falhou!" . mysqli_connect_error());
}
echo "Conectado!";
