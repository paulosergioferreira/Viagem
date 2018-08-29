<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<form>
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    
      <form method="post" class="form-login" action="CadCliente">
      <div class="form-row">
          <div class="form-group col-12"></br></br></br></br></br>
          
            <label for="login">Login</label>
            <input type="text" class="form-control" id="login" name="login" placeholder="Entre com seu Login">
    
          </div>
      </div>
      
        <div class="form-row">
          <div class="form-group col-12">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Entre com sua senha">
          </div>
        </div>
    <input type="submit" name="acessar" class="btn btn-primary" value="Acessar">
    <a href="CadCliente.php" class="btn btn-danger">Cadastra-se</a>
 </div>
 <div class="col-md-3"></div>
 </div>  
 </div>
</form>
     
</body>
</html>