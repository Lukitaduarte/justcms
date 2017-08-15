<?php
/**
 * Created by PhpStorm.
 * User: LUCAS
 * Date: 06/08/2017
 * Time: 21:50
 */

namespace App\Models;

class Category
{
    private $name;
    private $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    public function getName(){
        return $this->name;
    }

    public function getColor(){
        return $this->color;
    }

}