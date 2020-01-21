<?php
require 'tools/WorkingWithFileNames.php';

class ViewedSourceData
{
	private String $directory;
	private $file;
	private array $subdirectories;
	private array $images;

	public function set(String $directory, $file)
	{
		$this->directory = $directory;
		$this->file = $file;
		$this->subdirectories = array();
		$this->images = array();
	}

	public function getSubdirectories()
	{
		if(count($this->subdirectories) == 0) {
			$this->loadSubDirectories();
	    }
        return $this->subdirectories;
	}

	public function getImages()
	{
		if(count($this->images) == 0) {
			$this->loadImages();
        }
        return $this->images;
	}


	private function loadSubDirectories()
	{
		$files = scandir($this->directory);
        foreach ($files as $file) {
            if(!isHidden($file ) && isDirectory($file)) {
                array_push($this->subdirectories, $this->directory . $file);
            }
        }
	}

	private function loadImages()
	{
		$files = scandir($this->directory);
        foreach ($files as $file) {
            if(!isHidden($file) && isImage($file)) {
                array_push($images, $this->directory . $fileName);
            }
        }
        return $images;
	}

	public function getCurrentFile()
	{
		return $this->directory . $this->file;
	}
}