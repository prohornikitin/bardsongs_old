<?php

class ErrorView implements IView
{
    private string $message;

    function __construct(){}

    public function setError(string $message)
    {
        $this->message = $message;
    }

    public function generate()
    {
        $content_view = 'error.php';
        $message = $this->message;
        include 'views/PageTemplate.php';
    }
}