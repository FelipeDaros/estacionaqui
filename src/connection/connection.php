<?php

$servername = "sql10.freemysqlhosting.net";
$database = "sql10504073";
$username = "sql10504073";
$password = "6bIWf1Ui7I";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Conexão falhou!" . mysqli_connect_error());
}
echo "Conectado!";
