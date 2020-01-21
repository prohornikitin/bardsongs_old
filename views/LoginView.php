<?php
include_once 'views/IView.php';

class LoginView implements iView
{
    public function generate()
    {
        $special_css = 'ControlPanel.css';
        $content_view = 'Login.php';
        $disabledNavButtonId = 'forum';
        require 'views/PageTemplate.php';
    }

    public function generateWithError($error_text)
    {
        $special_css = 'ControlPanel.css';
        $content_view = 'Login.php';
        $disabledNavButtonId = 'forum';
        require 'views/PageTemplate.php';
    }

}