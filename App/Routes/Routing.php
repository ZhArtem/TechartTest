<?php
namespace App\Routes;

use App\Controllers\NewsController;
use App\Views\View;

class Routing 
{
    public static function buildRoute()
    {
        $uri = $_SERVER['REQUEST_URI'];
        
        if ($uri == '/') {
            $controller = new NewsController;
            $controller->mainPage();
        } elseif ($uri == '/news/') {
            $page = 1;
            $controller = new NewsController;
            $controller->actionList($page);

        } elseif (preg_match('{news/page-(\d+)/$}', $uri, $matches)) {
            $page = $matches[1];
            $controller = new NewsController;
            $controller->actionList($page);
        } elseif (preg_match('{news/(\d+)/$}', $uri, $matches)) {
            $id = $matches[1];
            $controller = new NewsController;
            $controller->actionDetail($id);
        } else {
            echo '404 нет такой страницы';
        }
	}
}
