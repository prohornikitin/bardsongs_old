<?php
    
    class NewsData
    {
    	private mysqli $mysqli;
    	private array $news;

    	function __construct()
    	{
    		$this->mysqli = new mysqli('localhost', 'website', '1', 'bardsongs');
    	}

    	private function getMaxNewsId() : int
	    {
	        $maxId = 0;
	        $result = $this->mysqli->query('SELECT MAX(ID) FROM NEWS');
	        if ($result) {
	            $maxId = $result->fetch_row()[0];
	        }

            if($maxId !== null) {
	           return $maxId;
            } else {
                return 0;
            }
	    }

        public function addNewsItem($title, $image, $text) : bool
        {   
            
            $image_url = $this->saveIfExist($image);
            if($image_url !== null) {
                $variables = '(title, text, img_url)';
                $values = "('{$title}', '{$text}', '{$image_url}')";
                $this->mysqli->query("INSERT INTO NEWS {$variables} VALUES {$values}");
            } else {
                $variables = '(title, text)';
                $values = "('{$title}', '{$text}')";
                $this->mysqli->query("INSERT INTO NEWS {$variables} VALUES {$values}");
            }
            return true;
        }

        private function saveIfExist($image)
        {
            $url = null;
            echo '<h1>', $image['name'], '</h1>';
            if($image['error'] == UPLOAD_ERR_OK) {
                $url = "images/for_news/{$image['name']}";
                if(!move_uploaded_file($image['tmp_name'], $url)) {
                    unlink($url);
                    move_uploaded_file($image['tmp_name'], $url);
                }
            }
            return $url;
        }


        private function loadData() : void
        {
            $this->news = array();
            $maxId = $this->getMaxNewsId();
            echo $maxId;
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



        function __destruct()
        {
        	$this->mysqli->close();
        }
    }