<?php
/**
 * Created by PhpStorm.
 * User: LUCAS
 * Date: 06/08/2017
 * Time: 23:24
 */

namespace App\Dao;


use App\Models\User;

class UserDAO extends Mockup
{
    protected $table = "users";

    //MÉTODO DE INSERÇÃO DE UM NOVO USUÁRIO
    public function insert(User $user){
        $sql = "INSERT INTO $this->table (username, password, email)
                                         VALUES 
                                         (:username, :password, :email)";
        $execute = Database::prepare($sql);
        $execute->bindValue(':username', $user->getUsername());
        $execute->bindValue(':password', $user->getPassword());
        $execute->bindValue(':email', $user->getEmail());

        return $execute->execute();
    }

    //MÉTODO DE ATUALIZAÇÃO DE UM NOVO USUÁRIO
    public function update($id, User $user){
        $sql = "UPDATE $this->table SET username = :username,
                                        password = :password,
                                        email = :email
                                        WHERE 
                                        id = :id";
        $execute = Database::prepare($sql);
        $execute->bindParam(':id', $id, \PDO::PARAM_INT);
        $execute->bindValue(':username', $user->getUsername());
        $execute->bindValue(':password', $user->getPassword());
        $execute->bindValue(':email', $user->getEmail());

        return $execute->execute();
    }

    //MÉTODO RESPONSÁVEL POR VALIDAR USUÁRIOS
    public function login($username, $password){
        //SELECIONA O USUÁRIO
        $sql = "SELECT * FROM $this->table WHERE username = :username";

        //CONECTA COM O BANCO
        $execute = Database::prepare($sql);

        //FILTRA PARAMETROS
        $execute->bindParam(":username", $username);
        $execute->execute();

        //VERIFICA SE HOUVE RETORNO E VALIDA A SENHA
        if($execute->rowCount() == 1) {
            $data = $execute->fetch(\PDO::FETCH_OBJ);
            if (crypt($password, $data->password) == $data->password)
                return $data; //CASO A SENHA SEJA VERDADEIRA RETORNA O USUÁRIO

            return false; //CASO A SENHA ESTEJA ERRADA RETORNA FALSE
        }
        return false; //CASO NÃO EXISTA UM USUÁRIO COM ESSE USERNAME RETORNA FALSE
    }
}