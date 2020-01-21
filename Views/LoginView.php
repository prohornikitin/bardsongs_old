<?php
include_once 'Views/iView.php';

class LoginView implements iView
{
    public function generate()
    {
        ob_clean();
        $special_css = 'control_panel.css';
        $content_view = 'login.php';
        include 'Views/page_template.php';
    }

    public function generateWithError($error_text)
    {
        $special_css = 'control_panel.css';
        $content_view = 'login.php';
        include 'Views/page_template.php';
    }

}