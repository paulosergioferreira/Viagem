<?php

//use PDO,PDOException;

class DB
{
    public static function getCon(){
        try{
            $conn = new PDO("mysql:host=localhost;dbname=turismotcc", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }catch (PDOException $e){
            echo "ERRO NA CONEXÃO COM O BANCO DE DADOS - CLASSE DB: {$e->getMessage()}";
        }

        return $conn;
    }
}
