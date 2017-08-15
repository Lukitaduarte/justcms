<?php
/**
 * Created by PhpStorm.
 * User: LUCAS
 * Date: 05/08/2017
 * Time: 23:33
 */

namespace App\Dao;

use App\Models\Post;

class PostDAO extends Mockup
{
    protected $table = "posts";

    //SOBRESCRITA DO MÉTODO DE LISTAGEM DO MOCKUP PARA INCLUIR O JOIN DE CATEGORIAS
    public function findAll(){
        $sql = "SELECT p.id, p.title, p.content, p.path, c.color, c.category_name FROM $this->table p INNER JOIN categories c ON p.id_category = c.id ORDER BY p.id DESC";
        $execute = Database::prepare($sql);
        $execute->execute();
        return $execute->fetchAll();
    }

    //MÉTODO DE INSERÇÃO DE UM NOVO POST
    public function insert(Post $post){
        $sql = "INSERT INTO $this->table (title, id_category, content, path)
                                         VALUES 
                                         (:title, :category, :content, :path)";
        $execute = Database::prepare($sql);
        $execute->bindValue(':title', $post->getTitle());
        $execute->bindValue(':category', $post->getCategory());
        $execute->bindValue(':content', $post->getContent());
        $execute->bindValue(':path', $post->getPath());

        return $execute->execute();
    }

    //MÉTODO DE ATUALIZAÇÃO DE UM NOVO POST
    public function update($id, Post $post){
        $sql = "UPDATE $this->table SET title = :title,
                                        id_category = :category,
                                        content = :content,
                                        path = :path
                                        WHERE 
                                        id = :id";
        $execute = Database::prepare($sql);
        $execute->bindParam(':id', $id, \PDO::PARAM_INT);
        $execute->bindValue(':title', $post->getTitle());
        $execute->bindValue(':category', $post->getCategory());
        $execute->bindValue(':content', $post->getContent());
        $execute->bindValue(':path', $post->getPath());

        return $execute->execute();
    }

    //METODO DE LISTAGEM PELO CAMINHO
    public function findByPath($path){
        $sql = "SELECT * FROM $this->table WHERE path LIKE :path";
        $execute = Database::prepare($sql);
        $execute->bindParam(':path', $path);
        $execute->execute();
        return $execute->fetch();
    }
}