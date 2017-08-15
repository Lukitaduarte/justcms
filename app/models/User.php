<?php
/**
 * Created by PhpStorm.
 * User: LUCAS
 * Date: 06/08/2017
 * Time: 23:20
 */

namespace App\Models;


class User
{
    private $username;
    private $password;
    private $email;

    public function __construct($username, $password, $email){
        $this->username = $username;
        $this->password = crypt($password);
        $this->email = $email;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getEmail(){
        return $this->email;
    }
}