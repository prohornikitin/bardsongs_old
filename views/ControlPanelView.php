<?php
	require_once 'views/IView.php';

	class ControlPanelView implements IView
	{
		private array $pages_to_edit;

		function __construct(array $pages_to_edit)
		{
			$this->pages_to_edit = $pages_to_edit;
		}

		public function generate()
		{
			$pages_to_edit = $this->pages_to_edit;
			$content_view = 'ControlPanel.php';
			$special_css = 'ControlPanel.css';
			include 'views/PageTemplate.php';
		}

		public function generateWithSuccess($message) {
			$successMessage = $message;
			$pages_to_edit = $this->pages_to_edit;
			$content_view = 'ControlPanel.php';
			$special_css = 'ControlPanel.css';
			include 'views/PageTemplate.php';
		}

		public function generateWithError($message) {
			$errorMessage = $message;
			$pages_to_edit = $this->pages_to_edit;
			$content_view = 'ControlPanel.php';
			$special_css = 'ControlPanel.css';
			include 'views/PageTemplate.php';
		}
	}
?>