<?php
/**
 * Created by PhpStorm.
 * User: LUCAS
 * Date: 04/08/2017
 * Time: 15:02
 */

session_start();

require __DIR__ . '/vendor/autoload.php';

$router = new \Bramus\Router\Router();

require __DIR__ . '/app/routes.php';

$router->run();