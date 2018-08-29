<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<?php
require_once'GerenteController.php';
require_once'autoload.php';
$gc = new GerenteController();
$g = $gc->find($_GET['e']);
?>


    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro de Gerentes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>


<div class="container">
    <form method="post" action="Save.php">
        <div class="row">
            <div class="col-md-12 mt-5">
            <input type="number" hidden name="id" value="<?= $g->id ?>">

                <div class="card">
                    <h5 class="card-header">Editar dados do Gerente</h5>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-4">



                                <label for="nome">Nome:</label>
                                <input type="text" id="nome" class="form-control" name="nome" value=<?php $g->nome ?>>
                            
                            </div>
                            
                            <div class="form-group col-2">
                            
                                <label for="rg">RG:</label>
                                <input type="text" id="rg" class="form-control" name="rg" value=<?php $g->rg ?>>
                            
                            </div>

                            <div class="form-group col-2">
                            
                                <label for="cpf">CPF:</label>
                                <input type="text" id="cpf" class="form-control" name="cpf" value=<?php $g->cpf ?>>
                            
                            </div>

                            <div class="form-group col-2">
                            
                            <label for="datanasc">Data Nascimento:</label>
                            <input type="date" id="datanasc" class="form-control" name="datanasc" value=<?php $g->dtnasc?>>
                        
                           </div>


                            <div class="form-group col-2">
                            
                                <label for="sexo">Sexo:</label>
                                <select name="sexo" id="sexo" class="form-control" value=<?php $g->sexo ?>>
                                    <option value="masculino">Masculino</option>
                                    <option value="feminino">Feminino</option>
                                </select>
                            
                            </div>
                         
                            </div>

                               
                        
                            <div class="form-row">
                                <div class="form-group col-2">
                            
                                <label for="telefone">Telefone:</label>
                                <input type="text" id="telefone" class="form-control" name="telefone" placeholder="DDD+99999-9999" value=<?php $g->telefone ?>>
                            
                            </div>
                            
                            <div class="form-group col-2">
                            
                                <label for="numero_casa">N° da casa:</label>
                                <input type="number" id="numero_casa" class="form-control" name="numero_casa" value=<?php $g->numero_casa ?>>
                            
                            </div>

                            
                            <div class="form-group col-5">
                            
                                <label for="rua">Rua:</label>
                                <input type="text" id="rua"  class="form-control" name="rua" placeholder="Digite sua rua" value=<?php $g->rua ?>>
                            
                            </div>
                        
                            <div class="form-group col-3">

                            <label for="bairro">Bairro:</label>
                            <input type="text" id="bairro" class="form-control" name="bairro" placeholder="Digite seu bairro" value=<?php $g->bairro ?>>
                        
                           </div>
                      
                           <div class="form-group col-4">
                            
                            <label for="cidade">Cidade:</label>
                            <input type="text" id="cidade" class="form-control" name="cidade" value=<?php $g->cidade ?>>
                        
                           </div>

                            <div class="form-group col-2">
                            
                            <label for="situacao">Cargo:</label>
                                <select name="cargo" id="cargo" class="form-control">
                                    <option value="Gerente">Gerente</option>
                                </select>
                            
                            </div>
                            <div class="form-group col-3">

                                <label for="nivel_func">Nivel</label>
                                <input type="text" id="nivel_func"  maxlength="11" class="form-control" name="nivel_func" value="Administrador">

                            </div>


                            <div class="form-group col-3">
                            
                            <label for="situacao">Situação:</label>
                                <select name="situacao" id="situacao" class="form-control" value=<?php $g->situacao ?>>
                                    <option value="1">Ativo</option>
                                    <option value="2">Desativado</option>
                                </select>
                            
                            </div>

                   
                            
                            <div class="form-group col-2">
                            
                            <label for="estado">Estado:</label>
                                <select name="estado" id="estado" class="form-control" value=<?php $g->estado ?>>
                                    <option value="1">PE</option>
                                    <option value="2">PB</option>
                                </select>
                            
                            </div>

                            <div class="form-group col-4">

                                <label for="cep">CEP:</label>
                                <input type="text" id="cep"  maxlength="11" class="form-control" name="cep" placeholder="00000-000" value=<?php $g->cep ?>>

                            </div>
                            <div class="form-group col-3">

                                <label for="login">Login:</label>
                                <input type="text" id="login" class="form-control" name="login" value=<?php $g->login ?>>

                            </div>

                            <div class="form-group col-3">

                                <label for="senha">Senha:</label>
                                <input type="text" id="senha" class="form-control" name="senha" value=<?php $g->senha ?>>

                            </div>



                            <input type="submit" class="btn btn-primary" name="editarGerente" id="editarGerente" value="Concluir Edição"/>
                 
                            
                    </div>
                </div>


                
    
</body>
</html>