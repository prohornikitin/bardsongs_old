<?php
require 'Models/NewsData.php';
require 'Views/MainView.php';

class MainController
{
    private NewsData $news_data;
    private iView $view;

    public function __construct()
    {
        $this->news_data = new NewsData();
        $this->view = new MainView($this->news_data);
    }

    public function doIndexAction()
    {
        $this->view->generate();
    }
}