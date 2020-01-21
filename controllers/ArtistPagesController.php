<?php
require_once 'views/IView.php';
require_once 'models/ArtistPagesData.php';
require_once 'views/ArtistPagesView.php';


class ArtistPagesController
{
	private ArtistPagesData $artistPagesData;
	private iView $view;


	function __construct()
	{
		$this->artistPagesData = new ArtistPagesData();
		$this->view = new ArtistPagesView($this->artistPagesData);
	}

	public function doIndexAction() : void
	{
		$this->view->generate();
	}
}