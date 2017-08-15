<?php

namespace App\Dao;

//ESSA CLASSE HERDA A CLASSE DE CONEXÃO COM O BANCO DE DADOS
//E DEFINE MÉTODOS EM COMUM DE CRUD COMO UMA ESPÉCIE DE MOLDE
abstract class Mockup extends Database
{
    protected $table; //NOME DA TABELA
    
    public function find($id){ //METODO DE LISTAGEM POR ID
        $sql = "SELECT * FROM $this->table WHERE id = :id";
        $execute = Database::prepare($sql);
        $execute->bindParam(':id', $id, \PDO::PARAM_INT);
        $execute->execute();
        return $execute->fetch();
    }
    
    public function findAll(){ //METODO DE LISTAGEM COMPLETA
        $sql = "SELECT * FROM $this->table";
        $execute = Database::prepare($sql);
        $execute->execute();
        return $execute->fetchAll();
    }
    
    public function delete($id){ //METODO DE REMOÇÃO
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $execute = Database::prepare($sql);
        $execute->bindParam(':id', $id, \PDO::PARAM_INT);
        return $execute->execute();
    }
    
}
