<?php
include_once 'views/IView.php';

class LoginView implements IView
{
    public function generate()
    {
        ob_clean();
        $special_css = 'ControlPanel.css';
        $content_view = 'Login.php';
        $disabledNavButtonId = 'forum';
        require 'views/PageTemplate.php';
    }

    public function generateWithError($error_text)
    {
        ob_clean();
        $special_css = 'ControlPanel.css';
        $content_view = 'Login.php';
        $disabledNavButtonId = 'forum';
        require 'views/PageTemplate.php';
    }

}