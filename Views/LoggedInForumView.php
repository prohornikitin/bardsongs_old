<?php
require_once 'Views/iView.php';

class LoggedInForumView implements iView
{
	private $login_data;
	
	function __construct($login_data)
	{
		$this->login_data = $login_data;
	}

	public function generate()
	{
		ob_clean();
		$special_css = 'forum.css';
		$disabledNavButtonId = 'forum';
		$content_view = 'loggedInForum.php';
		require "Views/page_template.php";
	}
}