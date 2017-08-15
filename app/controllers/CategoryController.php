<?php
/**
 * Created by PhpStorm.
 * User: LUCAS
 * Date: 06/08/2017
 * Time: 21:45
 */

namespace App\Controllers;


use App\Dao\CategoryDAO;
use App\Models\Category;

class CategoryController
{
    public function new(){
        require __DIR__ . '/../../template/admin/category_new.php';
    }

    public function manage(){
        $categoryDao = new CategoryDAO(); //INSTANCIA A CAMADA DE DADOS
        $categories = $categoryDao->findAll(); //TRAZ TODAS AS CATEGORIAS DO BANCO
        require __DIR__ . '/../../template/admin/category_manage.php'; //CHAMA A VIEW DE LISTAGEM
    }

    public function add(){
        //CRIA UM NOVO OBJETO CATEGORIA COM OS DADOS DO POST PARA UMA NOVA INSERÇÃO
        $category = new Category($_POST['category_name'], $_POST['category_color']);

        $categoryDao = new CategoryDAO(); //INSTANCIA A CAMADA DE DADOS
        if($categoryDao->insert($category)) //INSERE UMA NOVA CATEGORIA
            header("Location: /admin/category/manage");
    }

    public function edit($id){
        $categoryDao = new CategoryDAO(); //INSTANCIA A CAMADA DE DADOS
        $category = $categoryDao->find($id); //BUSCA A CATEGORIA A SER EDITADA PELO ID
        require __DIR__ . '/../../template/admin/category_edit.php'; //CHAMA A VIEW DE EDIÇÃO
    }

    public function update($id){
        //CRIA UM NOVO OBJETO CATEGORIA COM OS DADOS DO POST PARA UMA EDIÇÃO
        $category = new Category($_POST['category_name'], $_POST['category_color']);

        $categoryDao = new CategoryDAO(); //INSTANCIA A CAMADA DE DADOS
        if($categoryDao->update($id, $category)) //EDITA UMA CATEGORIA EXISTENTE
            header("Location: /admin/category/manage");
    }

    public function delete($id){
        $categoryDao = new CategoryDAO(); //INSTANCIA A CAMADA DE DADOS
        if($categoryDao->delete($id)) //DELETA UMA CATEGORIA EXISTENTE
            header("Location: /admin/category/manage");
    }
}