<?php
require_once 'Models/ViewedSourceData.php';
require_once 'Views/iView.php';

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
    	$special_css = 'gallery_viewer.css';
        $content_view = 'imageViewer.php';
        $disabledNavButtonId = 'gallery';
        $scripts_include = '<script src="js/image_viewer.js"></script>';
        require 'Views/page_template.php';
    }

    private function generateDirectoryViewer()
    {
        $subdirectories = $this->viewed_source->getSubdirectories();
        $images = $this->viewed_source->getImages();
    	$special_css = 'gallery.css';
        $content_view = 'directoryViewer.php';
        $disabledNavButtonId = 'gallery';
        require 'Views/page_template.php';
    }

    function __destruct()
    {

    }
}