<?php
/**
 * Created by PhpStorm.
 * User: LUCAS
 * Date: 05/08/2017
 * Time: 22:13
 */

namespace App\Controllers;


use App\Dao\CategoryDAO;
use App\Dao\PostDAO;
use App\Models\Post;

class PostController
{
    public function new(){
        $categoryDao = new CategoryDAO(); //INSTANCIA A CAMADA DE DADOS
        $categories = $categoryDao->findAll(); //TRAZ TODAS AS CATEGORIAS PARA SEREM UTILIZADAS AO CADASTRAR UM NOVO POST
        require __DIR__ . '/../../template/admin/post_new.php'; //CHAMA A VIEW DE INSERÇÃO DE POSTS
    }

    public function manage(){
        $postDao = new PostDAO(); //INSTANCIA A CAMADA DE DADOS
        $posts = $postDao->findAll(); //TRAZ A LISTA DE TODOS OS POSTS EXISTENTES
        require __DIR__ . '/../../template/admin/post_manage.php'; //CHAMA A VIEW DE LISTAGEM
    }

    public function add(){
        //VALIDA A URL INSERIDA PELO USUÁRIO
        $path = $this->validatePath($_POST['post_path']);

        //CRIA UM NOVO OBJETO POST COM OS DADOS RECEBIDOS VIA POST PARA UMA NOVA INSERÇÃO
        $post = new Post($_POST['post_title'], $_POST['post_category'], $_POST['post_content'], $path);

        $postDao = new PostDAO(); //INSTANCIA A CAMADA DE DADOS
        if($postDao->insert($post)) //INSERE UM NOVO POST
            header("Location: /admin/post/manage");
    }

    public function edit($id){
        $categoryDao = new CategoryDAO(); //INSTANCIA A CAMADA DE DADOS
        $categories = $categoryDao->findAll();

        $postDao = new PostDAO(); //INSTANCIA A CAMADA DE DADOS
        $post = $postDao->find($id); //TRAZ O POST A SER EDITADO PELO ID
        require __DIR__ . '/../../template/admin/post_edit.php'; //CHAMA A VIEW DE EDIÇÃO
    }

    public function update($id){
        //VALIDA A URL INSERIDA PELO USUÁRIO
        $path = $this->validatePath($_POST['post_path']);

        //CRIA UM NOVO OBJETO POST COM OS DADOS RECEBIDOS VIA POST PARA UMA ATUALIZAÇÃO
        $post = new Post($_POST['post_title'], $_POST['post_category'], $_POST['post_content'], $path);

        $postDao = new PostDAO(); //INSTANCIA A CAMADA DE DADOS
        if($postDao->update($id, $post)) //ATUALIZA UM POST EXISTENTE
            header("Location: /admin/post/manage");
    }

    public function delete($id){
        $postDao = new PostDAO(); //INSTANCIA A CAMADA DE DADOS
        if($postDao->delete($id)) //DELETA UM POST EXISTENTE
            header("Location: /admin/post/manage");
    }

    //MÉTODO RESPONSÁVEL POR VALIDAR A URL DIGITADA PELO USUÁRIO
    public function validatePath($path){
        $path = substr($path, 0, 1) == '/' ? $path : '/' . $path; //VERIFICA SE O USUÁRIO COLOCOU BARRA NO INICIO DA URL
        $path = str_replace(" ","-", $path); //VERIFICA SE O USUÁRIO DEIXOU ESPAÇOS NA URL E COLOCA HIFEN NO LUGAR
        return $path; //RETORNA A URL VALIDADA
    }
}