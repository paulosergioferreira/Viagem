<?php 

require_once 'ClienteController.php';
require_once 'Model.php';
$cc = new ClienteController();

if(isset($_GET['d'])){
    $cc->delete($_GET['d']);
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista de clientes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="container">
    <div class="row form-cadastro">
        <div class="col-md-12">
           <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>RG</th>
                    <th>CPF</th>
                    <th>Sexo</th>
                    <th>Dt.Nasc</th>
                    <th>Telefone</th>
                    <th>Login</th>
                    <th>Senha</th>
                    
                  
                    
                  </tr>
                </thead>

                <?php foreach($cc->findAll() as $key=>$value): ?>
                    <tbody>
                    <tr>
                    <td><?php echo $value->id; ?></td>
                    <td><?php echo $value->nome; ?></td>
                    <td><?php echo $value->rg; ?></td>
                    <td><?php echo $value->cpf; ?></td>
                    <td><?php echo $value->sexo; ?></td>
                    <td><?php echo $value->dtnasc; ?></td>
                    <td><?php echo $value->telefone; ?></td>
                    <td><?php echo $value->login; ?></td>
                    <td><?php echo $value->senha; ?></td>
                     
                       
                        <td>
                    
                            <a href="EditarCliente.php?e=<?= $value->id ?>">Editar </a>
                            <a href="?d=<?= $value->id ?>">Deletar</a>
                    
                        </td>
                    </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>
        </div>
        <div class="col-md-12">
            <a href="menu.php" class="btn btn-danger btn-block">Voltar</a>
        </div>
    </div>
</div>
</table>
</body>
</html>