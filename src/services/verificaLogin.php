<?php

session_start();

if(!isset($_SESSION['email'])){
  header('location: ../pages/user/index.php');
  exit;
}
