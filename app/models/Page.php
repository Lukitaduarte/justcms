<?php
/**
 * Created by PhpStorm.
 * User: LUCAS
 * Date: 06/08/2017
 * Time: 01:47
 */

namespace App\Models;


class Page
{
    private $title;
    private $content;
    private $path;

    public function __construct($title, $content, $path){
        $this->title = $title;
        $this->content = $content;
        $this->path = $path;
    }

    public function getTitle(){
        return $this->title;
    }
    
    public function getContent(){
        return $this->content;
    }

    public function getPath(){
        return $this->path;
    }
}