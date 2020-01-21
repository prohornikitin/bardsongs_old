<?php
require_once 'views/IView.php';
require_once 'models/ArtistPagesData.php';
require_once 'views/ArtistPagesView.php';


class ArtistPagesController
{
	private ArtistPagesData $pages;
	private IView $view;
	
	function __construct()
	{
		$this->pages = new ArtistPagesData();
		$this->view = new ArtistPagesView($this->pages);
	}

	public function doIndexAction() : void
	{
		$this->view->generate();
	}
}