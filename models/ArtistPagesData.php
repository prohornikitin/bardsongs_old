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
			$this->load();
		}
		return $this->pages;
	}

	private function load() : void
	{
		$result = $this->mysqli->query('SELECT * FROM ARTISTS_PAGES');
		if($result) {
            for($i=0; $i<($result->num_rows); ++$i) {
                $result->data_seek($i);
                $page = $result->fetch_object();
                array_push($this->pages, $page);
            }
            $result->free();
        }
	}

	function __destruct()
	{
		$this->mysqli->close();
	}
}