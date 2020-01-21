<?php
require_once 'Views/iView.php';
require_once 'Models/ArtistPagesData.php';
require_once 'Views/ArtistPagesView.php';


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