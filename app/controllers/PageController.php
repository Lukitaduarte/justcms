<?php
/**
 * Created by PhpStorm.
 * User: LUCAS
 * Date: 06/08/2017
 * Time: 01:45
 */

namespace App\Controllers;


use App\Dao\PageDAO;
use App\Models\Page;

class PageController
{
    public function new(){
        require __DIR__ . '/../../template/admin/page_new.php';
    }

    public function manage(){
        $pageDao = new PageDAO(); //INSTANCIA A CAMADA DE DADOS
        $pages = $pageDao->findAll(); //TRAZ TODAS AS PÁGINAS EXISTENTES
        require __DIR__ . '/../../template/admin/page_manage.php'; //CHAMA A VIEW DE LISTAGEM
    }

    public function add(){
        //VALIDA A URL INSERIDA PELO USUÁRIO
        $path = $this->validatePath($_POST['page_path']);

        //CRIA UM NOVO OBJETO PAGE COM OS DADOS DO POST PARA UMA NOVA INSERÇÃO
        $page = new Page($_POST['page_title'], $_POST['page_content'], $path);

        $pageDao = new PageDAO(); //INSTANCIA A CAMADA DE DADOS
        if($pageDao->insert($page)) //INSERE UMA NOVA PÁGINA
            header("Location: /admin/page/manage");
    }

    public function edit($id){
        $pageDao = new PageDAO(); //INSTANCIA A CAMADA DE DADOS
        $page = $pageDao->find($id); //BUSCA A PÁGINA A SER EDITADA PELO ID
        require __DIR__ . '/../../template/admin/page_edit.php'; //CHAMA A VIEW DE EDIÇÃO
    }

    public function update($id){
        //VALIDA A URL INSERIDA PELO USUÁRIO
        $path = $this->validatePath($_POST['page_path']);

        //CRIA UM NOVO OBJETO PAGE COM OS DADOS DO POST PARA UMA ATUALIZAÇÃO
        $page = new Page($_POST['page_title'], $_POST['page_content'], $path);

        $pageDao = new PageDAO(); //INSTANCIA A CAMADA DE DADOS
        if($pageDao->update($id, $page)) //ATUALIZA UMA PÁGINA EXISTENTE
            header("Location: /admin/page/manage");
    }

    public function delete($id){
        $pageDao = new PageDAO(); //INSTANCIA A CAMADA DE DADOS
        if($pageDao->delete($id)) //REMOVE UMA PÁGINA EXISTENTE
            header("Location: /admin/page/manage");
    }

    //MÉTODO RESPONSÁVEL POR VALIDAR A URL DIGITADA PELO USUÁRIO
    public function validatePath($path){
        $path = substr($path, 0, 1) == '/' ? $path : '/' . $path; //VERIFICA SE O USUÁRIO COLOCOU BARRA NO INICIO DA URL
        $path = str_replace(" ","-", $path); //VERIFICA SE O USUÁRIO DEIXOU ESPAÇOS NA URL E COLOCA HIFEN NO LUGAR
        return $path; //RETORNA A URL VALIDADA
    }
}