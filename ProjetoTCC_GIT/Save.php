<?php

require_once'GerenteController.php';
require_once'ClienteController.php';

$c = new ClienteController();
$g = new GerenteController();
//Pegando os valores inseridos no layout, que serão usados no controller, através da função insert.
if(isset($_POST['salvandoCliente'])){
    $c->insert($_POST['nome'], $_POST['rg'], $_POST['cpf'], $_POST['sexo'], $_POST['datanasc'], $_POST['telefone'],$_POST['numero_casa'],
        $_POST['rua'], $_POST['bairro'], $_POST['cidade'], $_POST['estado'], $_POST['cep'], $_POST['login'], $_POST['senha'], $_POST['situacao'] );
        require_once'listaClientes.php';
}

if(isset($_POST['editarCliente'])){
    $c->update($_POST['id'], $_POST['nome'], $_POST['rg'], $_POST['cpf'], $_POST['sexo'], $_POST['datanasc'], $_POST['telefone'],$_POST['numero_casa'],
        $_POST['rua'], $_POST['bairro'], $_POST['cidade'], $_POST['estado'], $_POST['cep'], $_POST['login'], $_POST['senha'], $_POST['situacao'] );
        require_once'listaClientes.php';
}
    

if(isset($_POST['salvandoGerente'])){
    $g->insert($_POST['nome'], $_POST['rg'], $_POST['cpf'], $_POST['sexo'], $_POST['datanasc'], $_POST['telefone'],$_POST['numero_casa'],
        $_POST['rua'], $_POST['bairro'], $_POST['cidade'], $_POST['estado'], $_POST['cep'], $_POST['login'], $_POST['senha'], $_POST['nivel_func'], $_POST['cargo'] );
        require_once'listaGerentes.php';
}

if(isset($_POST['editarGerente'])){  
    $g->update($_POST['id'], $_POST['nome'], $_POST['rg'], $_POST['cpf'], $_POST['sexo'], $_POST['datanasc'], $_POST['telefone'],$_POST['numero_casa'],
        $_POST['rua'], $_POST['bairro'], $_POST['cidade'], $_POST['estado'], $_POST['cep'], $_POST['login'], $_POST['senha'],  $_POST['nivel_func'], $_POST['cargo'] );
        require_once'listaGerentes.php';
    
}

?>
