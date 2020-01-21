<?php
	class View
	{
		private $template = 'page_template.php';

		public function setTemplateView($template) {
			$this->template = $template;
		}

		public function generate($model)
		{	
			$content = $model->content;
			$special_css = $model->special_css;
			$scripts_include = $model->scripts_include;
			include 'application/views/'.$template;
		}
	}
?>