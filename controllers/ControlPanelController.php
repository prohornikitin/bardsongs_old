<?php
require_once 'models/LoginData.php';
require_once 'models/NewsData.php';
require_once 'models/ArtistPagesData.php';
require_once 'views/ControlPanelView.php';
require 'views/ErrorView.php';


class ControlPanelController
{
	private ArtistPagesData $pages_data;
	private NewsData $news_data;
	private IView $view;
	private LoginData $login_data;

	function __construct()
	{
		$this->pages_data = new ArtistPagesData();
		$this->news_data = new NewsData();
	}

	public function doIndexAction()
	{
		if($_SESSION['email'] == 'admin@admin') {
			$this->view = new ControlPanelView($this->pages_data->getPagesToEditBy($_SESSION['email']));
			if($_POST['action'] == 'addNews') {
				$this->addNews();
				$this->view->generateWithSuccess('Новость успешно добавлена');
			} else if($_POST['action'] == 'addPage') {
				if($this->createPage()) {
					$this->view->generateWithSuccess('Страница успешно создана');
				} else {
					$this->view->generateWithError('Что-то пошло не так.
						Пожалуйста свяжитесь с администратором сайта для устранения этой ошибки.');
				}
			} else {
				$this->view->generate();
			}
		} else {
			$this->view = new ErrorView();
			$this->view->setError('У вас нет доступа. Пожалуйста перезайдите');
			$this->view->generate();
		}
	}

	private function addNews() : bool
	{
		$title = $_POST['title'];
		$image_file = $_FILES['image'];
		$text = $_POST['text'];
		return $this->news_data->addNewsItem($title, $image_file, $text);
	}


	private function createPage()
	{

	}
}