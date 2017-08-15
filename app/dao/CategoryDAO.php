<?php
/**
 * Created by PhpStorm.
 * User: LUCAS
 * Date: 06/08/2017
 * Time: 21:47
 */

namespace App\Dao;

use App\Models\Category;

class CategoryDAO extends Mockup
{
    protected $table = "categories";

    //SOBRESCRITA DO MÉTODO DE LISTAGEM PARA TRAZER APENAS CATEGORIAS ATIVAS
    public function findAll(){
        $sql = "SELECT * FROM $this->table WHERE status = 1";
        $execute = Database::prepare($sql);
        $execute->execute();
        return $execute->fetchAll();
    }

    //MÉTODO DE INSERÇÃO DE UMA NOVA CATEGORIA
    public function insert(Category $category){
        $sql = "INSERT INTO $this->table (category_name, color, status)
                                         VALUES 
                                         (:category_name, :color, :status)";
        $execute = Database::prepare($sql);
        $execute->bindValue(':category_name', $category->getName());
        $execute->bindValue(':color', $category->getColor());
        $execute->bindValue(':status', 1);

        return $execute->execute();
    }

    //MÉTODO DE ATUALIZAÇÃO DE UMA NOVA CATEGORIA
    public function update($id, Category $category){
        $sql = "UPDATE $this->table SET category_name = :category_name,
                                        color = :color
                                        WHERE 
                                        id = :id";
        $execute = Database::prepare($sql);
        $execute->bindParam(':id', $id, \PDO::PARAM_INT);
        $execute->bindValue(':category_name', $category->getName());
        $execute->bindValue(':color', $category->getColor());

        return $execute->execute();
    }

    //SOBRESCRITA DO MÉTODO REMOVER DE CATEGORIA, POIS CATEGORIAS NÃO PODEM SER EXCLUIDAS
    //DEVEM APENAS SEREM DESATIVADAS PARA EVITAR VIOLAÇÃO DE CHAVE ESTRANGEIRA COM POSTS
    public function delete($id){ //METODO DE REMOÇÃO
        $sql = "UPDATE $this->table SET status = :status
                                        WHERE 
                                        id = :id";;
        $execute = Database::prepare($sql);
        $execute->bindValue(':status', 0);
        $execute->bindParam(':id', $id, \PDO::PARAM_INT);
        return $execute->execute();
    }
}