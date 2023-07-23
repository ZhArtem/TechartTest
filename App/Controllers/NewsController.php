<?php

namespace App\Controllers;

use App\Models\NewsModel;
use App\Views\View;
use App\App;

class NewsController extends Controller
{
    private $pageNews = '/templates/news.php';
    private $pageDetail = '/templates/detail.php';
    private $pageMain = '/templates/main.php';

    public function actionList($page)
    {
        $model = App::getModel('news');
        $this->pageData['page'] = $page;
        $this->pageData['title'] = 'Все новости';
        $limit = 4;
        
        $countAllNews = $model->getNewsCount();
        $total_pages = ceil($countAllNews / $limit);
        $this->pageData['total_pages'] = $total_pages;

        $news = $model->getNews($page, $limit); 	
        $this->pageData['news'] = $news;

        $lastNews = $model->getLastNews();
        $this->pageData['last'] = $lastNews;		
            
        $this->view->render($this->pageNews, $this->pageData);
    }

    public function actionDetail($id)
    {
        $model = App::getModel('news');
        $this->pageData['title'] = "Новость номер {$id}";

        $oneNews = $model->getNewsById($id);
        $this->pageData['oneNews'] = $oneNews;
        $this->view->render($this->pageDetail, $this->pageData);
    }

    public function mainPage() 
    {
        $this->pageData['title'] = "Главная страница";
        $this->view->render($this->pageMain, $this->pageData);
    }
}
