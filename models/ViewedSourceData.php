<?php
require 'tools/WorkingWithFileNames.php';

class ViewedSourceData
{
	private String $directory;
	private $file;

	public function set(String $directory, $file)
	{
		$this->directory = $directory;
		$this->file = $file;
	}

	public function getSubdirectories()
	{
		$directories = array();
		$fileNames = scandir($this->directory);
        foreach ($fileNames as $fileName) {
            if(!isHidden($fileName )&& isDirectory($fileName)) {
                array_push($directories, $this->directory . $fileName);
            }
        }
        return $directories;
	}

	public function getImages()
	{
		$images = array();
		$fileNames = scandir($this->directory);
        foreach ($fileNames as $fileName) {
            if(!isHidden($fileName) && isImage($fileName)) {
                array_push($images, $this->directory . $fileName);
            }
        }
        return $images;
	}

	public function getCurrentFile()
	{
		return $this->file;
	}
}