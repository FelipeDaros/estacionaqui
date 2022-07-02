<?php
include_once "../../connection/connection.php";

$name = $_POST['name'];
$password = MD5($_POST['password']);
$email = $_POST['email'];


$sql = "INSERT INTO user (name, password, email, activated, permision) VALUES ('$name', '$password', '$email', '0', '0')";

if(mysqli_query($conn, $sql)){
  echo "Cadastrado com sucesso!";
  mysqli_close($conn);
}else{
  echo "Erro:" . mysqli_error($conn);
}


