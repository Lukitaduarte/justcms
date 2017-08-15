<?php
/**
 * Created by PhpStorm.
 * User: LUCAS
 * Date: 06/08/2017
 * Time: 23:05
 */

namespace App\Controllers;

use App\Dao\UserDAO;
use App\Models\User;

class UserController
{
    //MÉTODO RESPONSÁVEL POR FAZER A AUTENTICAÇÃO DE UM NOVO USUÁRIO
    public function login(){
        $userDao = new UserDAO(); //INSTANCIA A CAMADA DE DADOS

        //CHAMA O MÉTODO RESPONSÁVEL POR VERIFICAR SE EXISTE UM USUÁRIO VÁLIDO
        $user = $userDao->login($_POST['username'], $_POST['password']);

        //CASO O RETORNO SEJA UM USUÁRIO
        if(!empty($user)){
            $_SESSION['user'] = $user; //CRIA UMA NOVA SESSÃO COM OS DADOS DO USUÁRIO
            header("Location: /admin/dashboard"); //REDIRECIONA O USUÁRIO PARA A PÁGINA INICIAL DO PAINEL ADMINISTRATIVO
        }else{
            //SE O RETORNO FOR VAZIO
            //CHAMA A VIEW COM UM ERRO DE LOGIN
            $error = "<p class=\"text-danger\">Username or password is wrong.</p>";
            require __DIR__ . '/../../template/admin/login.php';
        }
    }

    //MÉTODO RESPONSÁVEL POR DESLOGAR UM USUÁRIO
    public function logout(){
        //DESTROI A SESSÃO EXISTENTE E REDIRECIONA PARA A TELA DE LOGIN
        session_unset();
        session_destroy();
        header("Location: /admin");
    }

    public function new(){
        //CHAMA A VIEW PARA CRIAR UM NOVO USUÁRIO
        require __DIR__ . '/../../template/admin/user_new.php';
    }

    public function manage(){
        $userDao = new UserDAO(); //INSTANCIA A CAMADA DE DADOS
        $users = $userDao->findAll(); //CHAMA O MÉTODO QUE SELECIONA TODOS USUÁRIOS EXISTENTES

        //CHAMA A VIEW PARA LISTAR OS USUÁRIOS EXISTENTES
        require __DIR__ . '/../../template/admin/user_manage.php';
    }

    public function add(){
        //INSTANCIA UM NOVO OBJETO USUÁRIO COM OS DADOS RECEBIDOS VIA POST DE UMA NOVA INSERÇÃO
        $user = new User($_POST['username'], $_POST['password'], $_POST['email']);

        $userDao = new UserDAO(); //INSTANCIA A CAMADA DE DADOS

        //CASO TENHA SIDO INSERIDO COM SUCESSO RETORNA PARA A LISTA DE USUÁRIOS
        if($userDao->insert($user))
            header("Location: /admin/user/manage");
    }

    public function edit($id){
        $userDao = new UserDAO(); //INSTANCIA A CAMADA DE DADOS

        //PESQUISA UM USUÁRIO POR ID E CHAMA A VIEW PARA EDIÇÃO DESSE USUÁRIO
        $user = $userDao->find($id);
        require __DIR__ . '/../../template/admin/user_edit.php';
    }

    public function update($id){
        //INSTANCIA UM NOVO OBJETO USUÁRIO COM OS DADOS RECEBIDOS VIA POST PARA EDITAR UM USUÁRIO
        $user = new User($_POST['username'], $_POST['password'], $_POST['email']);

        $userDao = new UserDAO(); //INSTANCIA A CAMADA DE DADOS

        //CASO TENHA SIDO ATUALIZADO COM SUCESSO RETORNA PARA A LISTA DE USUÁRIOS
        if($userDao->update($id, $user))
            header("Location: /admin/user/manage");
    }

    public function delete($id){
        $userDao = new UserDAO(); //INSTANCIA A CAMADA DE DADOS

        //CASO TENHA SIDO REMOVIDO COM SUCESSO RETORNA PARA A LISTA DE USUÁRIOS
        if($userDao->delete($id))
            header("Location: /admin/user/manage");
    }
}