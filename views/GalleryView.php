<?php
require_once 'models/ViewedSourceData.php';
require_once 'views/IView.php';

class GalleryView implements iView
{
    private ViewedSourceData $viewed_source;

    function __construct(ViewedSourceData $viewed_source)
    {
        $this->viewed_source = $viewed_source;
    }

    public function generate()
    {
        $file = $this->viewed_source->getCurrentFile();
        if(isset($file)) {
            $this->generateImageViewer();
        } else {
        	$this->generateDirectoryViewer();
        }
    }

    private function generateImageViewer()
    {
        $images = $this->viewed_source->getImages();
        $file = $this->viewed_source->getCurrentFile();
    	$special_css = 'GalleryViewer.css';
        $content_view = 'ImageViewer.php';
        $disabledNavButtonId = 'gallery';
        $scripts_include = '<script src="js/ImageViewer.js"></script>';
        require 'views/PageTemplate.php';
    }

    private function generateDirectoryViewer()
    {
        $subdirectories = $this->viewed_source->getSubdirectories();
        $images = $this->viewed_source->getImages();
    	$special_css = 'Gallery.css';
        $content_view = 'DirectoryViewer.php';
        $disabledNavButtonId = 'gallery';
        require 'views/PageTemplate.php';
    }
}