<?php
require 'Models/ViewedSourceData.php';
require 'Views/GalleryView.php';

class GalleryController
{
    private iView $view;
    private ViewedSourceData $viewed_source;

    function __construct()
    {
        $this->viewed_source = new ViewedSourceData();
        $this->view = new GalleryView($this->viewed_source);
    }

    public function doIndexAction()
    {
    	$this->setViewedSourceData();
        $this->view->generate();
    }

    private function setViewedSourceData()
    {
    	$directory = $this->getDirectory();
    	$file = $this->getFile();
    	$this->viewed_source->set($directory, $file);
    }

    private function getDirectory()
    {
    	if(isset($_GET['dir'])) {
            return $_GET['dir'];
        } else {
            return "images/gallery/";
        }
    }


    private function getFile()
    {
    	if(isset($_GET['file'])) {
    		return $_GET['file'];
        } else {
            return null;
        }
    }

    function __destruct()
    {

    }
}