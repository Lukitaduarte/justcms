<?php
/**
 * Created by PhpStorm.
 * User: LUCAS
 * Date: 05/08/2017
 * Time: 15:03
 */

namespace App\Controllers;


use App\Dao\CategoryDAO;
use App\Dao\PageDAO;
use App\Dao\PostDAO;

class IndexController
{
    public function index(){
        $postDao= new PostDAO();
        $posts = $postDao->findAll();

        $pageDao= new PageDAO();
        $pages = $pageDao->findAll();

        $categoryDao= new CategoryDAO();
        $categories = $categoryDao->findAll();

        require __DIR__ . '/../../template/index.php';
    }

    public function path($path){
        $categoryDao= new CategoryDAO();
        $categories = $categoryDao->findAll();

        $pageDao= new PageDAO();
        $pages = $pageDao->findAll();
        $page = $pageDao->findByPath('/' . $path);
        if(!empty($page))
            require __DIR__ . '/../../template/page.php';

        $postDao= new PostDAO();
        $post = $postDao->findByPath('/' . $path);
        if(!empty($post))
            require __DIR__ . '/../../template/article.php';
    }

    public function admin(){
        require __DIR__ . '/../../template/admin/login.php';
    }

    public function dashboard(){
        require __DIR__ . '/../../template/admin/index.php';
    }
}