<?php
/**
 * Created by PhpStorm.
 * User: LUCAS
 * Date: 06/08/2017
 * Time: 01:46
 */

namespace App\Dao;


use App\Models\Page;

class PageDAO extends Mockup
{
    protected $table = "pages";

    //MÉTODO DE INSERÇÃO DE UM NOVA PÁGINA
    public function insert(Page $page){
        $sql = "INSERT INTO $this->table (title, content, path)
                                         VALUES 
                                         (:title, :content, :path)";
        $execute = Database::prepare($sql);
        $execute->bindValue(':title', $page->getTitle());
        $execute->bindValue(':content', $page->getContent());
        $execute->bindValue(':path', $page->getPath());

        return $execute->execute();
    }

    //MÉTODO DE ATUALIZAÇÃO DE UM NOVA PÁGINA
    public function update($id, Page $page){
        $sql = "UPDATE $this->table SET title = :title,
                                        content = :content,
                                        path = :path
                                        WHERE 
                                        id = :id";
        $execute = Database::prepare($sql);
        $execute->bindParam(':id', $id, \PDO::PARAM_INT);
        $execute->bindValue(':title', $page->getTitle());
        $execute->bindValue(':content', $page->getContent());
        $execute->bindValue(':path', $page->getPath());

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