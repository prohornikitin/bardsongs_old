<?php
require_once 'views/IView.php';

class MainView implements iView
{
	private array $news;

	public function __construct(NewsData $news_data) {
		$this->news = $news_data->getArray();
	}

    public function generate()
    {
    	$news = $this->news;
        $special_css = 'Main.css';
        $content_view = 'Main.php';
        $disabledNavButtonId = 'main';
        include 'views/PageTemplate.php';
    }
}