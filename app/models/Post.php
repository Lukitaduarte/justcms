<?php
/**
 * Created by PhpStorm.
 * User: LUCAS
 * Date: 05/08/2017
 * Time: 23:18
 */

namespace App\Models;


class Post
{
    private $title;
    private $category;
    private $content;
    private $path;

    public function __construct($title, $category, $content, $path){
        $this->title = $title;
        $this->category = $category;
        $this->content = $content;
        $this->path = $path;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getCategory(){
        return $this->category;
    }

    public function getContent(){
        return $this->content;
    }

    public function getPath(){
        return $this->path;
    }

}