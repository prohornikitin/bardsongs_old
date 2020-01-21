<?php
require_once 'Views/iView.php';

class MainView implements iView
{
	private array $news;

	public function __construct(NewsData $news_data) {
		$this->news = $news_data->getArray();
	}

    public function generate()
    {
    	$news = $this->news;
        $special_css = 'main.css';
        $content_view = 'main.php';
        $disabledNavButtonId = 'main';
        include 'Views/page_template.php';
    }
}