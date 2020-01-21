<?php
require_once 'views/IView.php';
require_once 'models/ArtistPagesData.php';

class ArtistPagesView implements IView
{
	private ArtistPagesData $artist_pages;

    function __construct(ArtistPagesData $artist_pages)
    {
        $this->artist_pages = $artist_pages;
    }

    public function generate()
    {
    	$pages = $this->artist_pages->get();
    	$special_css = 'Artists.css';
        $content_view = 'ArtistPages.php';
        $disabledNavButtonId = 'artists';
        require 'views/PageTemplate.php';
    }

    function __destruct()
    {

    }
}
