<?php
    
    class NewsData
    {
    	private mysqli $mysqli;
    	private array $news;

    	public function __construct()
    	{
    		$this->mysqli = new mysqli('localhost', 'website', '1', 'bardsongs');
    	}

    	public function getMaxNewsId() : int
	    {
	        $maxId = 0;
	        $result = $this->mysqli->query('SELECT MAX(ID) FROM NEWS');
	        if ($result) {
	            $maxId = $result->fetch_row()[0];
	        }
	        return $maxId;
	    }

        private function loadData() : void
        {
            $this->news = array();
            $maxId = $this->getMaxNewsId();
            for($i=0; $i<6 && $i<$maxId; ++$i) {
                $result = $this->mysqli->query('SELECT * FROM NEWS WHERE ID=' . ($maxId-$i));
                if($result) {
                    $news_item = $result->fetch_object();
                    array_push($this->news, $news_item);
                }
                $result->free();
            }
        }

        public function getArray() : array
        {
            if(!isset($this->news)) {
                $this->loadData();
            }
            return $this->news;   
        }



        public function __destruct()
        {
        	$this->mysqli->close();
        }
    }