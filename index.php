<?php
  include_once "src/components/menuSuperior.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <title>Home</title>
  <style>
    div.row img{
      width: 50%; margin: 0 auto;
    }

    div.row a{
      margin: 0 auto;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row mt-4">
      <div class="col">
        <h4 class="text-center">Sistema integrado de controle de vagas para estacionamento</h4>
      </div>
      <div class="row mt-4">
        <img src="https://autopark.com.br/wp-content/uploads/2019/12/imagem-destaque.png" alt="estacionamento">
      </div>
      <div class="row mt-4">
        <p class="text-center">Cadastre-se para começar a utilizar o sistema!</p>
        <a class="btn btn-success w-25" href="src/pages/user/index.php">Cadastra-se</a>
      </div>
    </div>
  </div>
</body>
</html>