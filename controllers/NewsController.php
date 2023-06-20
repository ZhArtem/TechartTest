<?php

class NewsController extends Controller {
	private $pageNews = '/views/news.php';
	private $pageDetail = '/views/detail.php';

	public function __construct() {
		$this->model = new NewsModel();
		$this->view = new View();
	}

	public function news() {

		if (isset($_GET['id'])) {
			$oneNews = $this->model->getNewsById($_GET['id']);
			$this->pageData['oneNews'] = $oneNews;
			$this->view->render($this->pageDetail, $this->pageData);

		} else {
			$limit = 4;

			$page = $_GET['page'] ?? 1;
			$this->pageData['page'] = $page;
			
			$countAllNews = $this->model->getNewsCount();			
			$total_pages = ceil($countAllNews / $limit);
			$this->pageData['total_pages'] = $total_pages;

			$news = $this->model->getNews($page, $limit);
			$this->pageData['news'] = $news;

			$lastNews = $this->model->getLastNews();
			$this->pageData['last'] = $lastNews;		
			
			$this->view->render($this->pageNews, $this->pageData);
		}
	}
}
