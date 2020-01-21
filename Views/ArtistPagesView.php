<?php
require_once 'Views/iView.php';
require_once 'Models/ArtistPagesData.php';

class ArtistPagesView implements iView
{
	private ArtistPagesData $artist_pages;

    function __construct(ArtistPagesData $artist_pages)
    {
        $this->artist_pages = $artist_pages;
    }

    public function generate()
    {
    	$pages = $this->artist_pages->get();
    	$special_css = 'artists.css';
        $content_view = 'artistPages.php';
        $disabledNavButtonId = 'artists';
        require 'Views/page_template.php';
    }

    function __destruct()
    {

    }
}
