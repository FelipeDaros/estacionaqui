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
  <title>Login</title>
  <style>
    form{
      margin: 0 auto;
      padding: 25px;
      margin-top: 12%;
    }
    
    button{
      margin-left: 25%;
    }

    a{
      margin-left: 33%;
    }
  </style>
</head>
<body>
  <div class="container" >
    <form action="loginController.php" method="POST" class="w-50">
      <h4 class="text-center mb-4">Login</h4>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Email</span>
        <input type="text" class="form-control" name="email">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Senha</span>
        <input type="text" class="form-control" name="password">
      </div>
      <button type="submit" class="btn btn-success w-50 mt-4">Entrar</button>
      <div class="mt-4">
        <a href="cadastro.php" class="text-center">Deseja criar uma conta ?</a>
      </div>
    </form>
  </div>
</body>
</html>