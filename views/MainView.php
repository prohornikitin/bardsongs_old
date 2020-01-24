<?php
require_once 'views/IView.php';
require_once 'models/NewsData.php';

class MainView implements IView
{
	private  $news_data;

	public function __construct(NewsData $news_data) {
		$this->news_data = $news_data;
	}

    public function generate()
    {
    	$news = $this->news_data->getArray();
        $special_css = 'Main.css';
        $content_view = 'Main.php';
        $disabledNavButtonId = 'main';
        include 'views/PageTemplate.php';
    }
}