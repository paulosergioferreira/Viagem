<?php

//Criando a classe abstrata Model.
abstract class Model
{
    //Criando o atributo que servira como parametro para passar o nome das tabelas criadas no banco de dados.
    protected $table;

    //Função molde para selecionar todos da tabela desejada.
    public function findAll(){
       $stmt = DB::getCon()->prepare("SELECT * FROM {$this->table}");
       $stmt->execute();
       return $stmt->fetchAll();
    }

    //Função molde para selecionar apenas 1 elemento pelo ID da tabela especifica.
    public function find($id){
        $stmt = DB::getCon()->prepare("SELECT * FROM {$this->table} WHERE ID = ?");
        //Associa o valor passado $id ao parametro ? da sql.
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    //Função molde para excluir 1 elemento da tabela do banco através do seu ID.
    public function delete($id)
    {
        $stmt = DB::getCon()->prepare("DELETE FROM {$this->table} WHERE ID = ?");
        $stmt->bindValue(1, $id);
        $stmt->execute();
        $stmt->closeCursor();
    }

    //Função molde para buscar 1 elemento pelo nome na tabela desejada.
    public function findName($nome){
        $stmt = DB::getCon()->prepare("SELECT * FROM {$this->table} WHERE NOME LIKE ?");
        $stmt->bindValue(1, "%" . $nome . "%");
        $stmt->execute();
        return $stmt->fetchAll();
  }



}

?>