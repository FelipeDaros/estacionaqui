<?php
include_once "../../connection/connection.php";

$password = MD5($_POST['password']);
$email = $_POST['email'];

if(!empty($email)){
  $select = "SELECT password, email FROM user WHERE password = '$password' AND email = '$email'";
}

$result = mysqli_query($conn, $select);

$row = mysqli_num_rows($result);

if($row == 1){
  session_start();
  $_SESSION['email'] = $email;
  header('Location: ../../../index.php');
  exit();
}else{
  header('Location: index.php');
  exit();
}



