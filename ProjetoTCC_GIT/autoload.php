<?php

#define('WWW_ROOT', dirname( __FILE__ )); // Constante pega o caminho do arquivo __FILE__
define('DS', DIRECTORY_SEPARATOR ); // Constante pega a " / " do caminho do arquivo

function __autoload( $class ){
    $class = WWW_ROOT . DS . str_replace('\\' , DS , $class) . '.php'; // Inverte as barras para contra barras " \Class " e pega o caminho da classe

    if(!file_exists( $class )){ // testa se o arquivo $class conseguiu localizar a classe no diretorio.
        throw new Exception("O Arquivo: {$class} não existe");
    }
    require_once $class; // chama o arquivo $class para uso!
}