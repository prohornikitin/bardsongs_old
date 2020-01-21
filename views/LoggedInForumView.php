<?php
require_once 'views/IView.php';

class LoggedInForumView implements IView
{
	private $login_data;
	
	function __construct($login_data)
	{
		$this->login_data = $login_data;
	}

	public function generate()
	{
		ob_clean();
		$special_css = 'Forum.css';
		$disabledNavButtonId = 'forum';
		$content_view = 'LoggedInForum.php';
		require "views/PageTemplate.php";
	}
}