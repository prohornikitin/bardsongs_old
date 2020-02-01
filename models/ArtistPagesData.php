<?php

class ArtistPagesData
{
	private mysqli $mysqli;
	private array $pages;

	function __construct()
	{
		$this->mysqli = new mysqli('localhost', 'website', '1', 'bardsongs');
		$this->pages = array();
	}

	public function get() : array
	{
		if(count($this->pages) == 0) {
			$this->loadTo($this->pages);
		}
		return $this->pages;
	}

	public function getPagesToEditBy(string $email) : array
	{
		if($email != 'admin@admin') {
			$pages_to_edit = array();
			$result = $this->mysqli->query("SELECT * FROM ARTISTS_PAGES WHERE editor_email='{$email}'");
			if($result) {
	            for($i=0; $i<($result->num_rows); ++$i) {
	                $result->data_seek($i);
	                $page = $result->fetch_object();
	                array_push($pages_to_edit, $page);
	            }
	            $result->free();
	        }
	        return $pages_to_edit;
	    } else {
	    	return $this->get();
	    }
	}

	private function loadTo(array &$target) : void
	{
		$result = $this->mysqli->query('SELECT * FROM ARTISTS_PAGES');
		if($result) {
            for($i=0; $i<($result->num_rows); ++$i) {
                $result->data_seek($i);
                $page = $result->fetch_object();
                array_push($target, $page);
            }
            $result->free();
        }
	}

	function __destruct()
	{
		$this->mysqli->close();
	}
}