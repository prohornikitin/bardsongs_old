<?php
require_once 'Models/LoginData.php';
require_once 'Views/LoggedInForumView.php';
require_once 'Views/LoginView.php';

class LoginController
{
    private LoginData $login_data;
    private iView $view;

    public function __construct()
    {
        $this->login_data = new LoginData();
        $this->view = new LoginView();
    }

    public function doIndexAction()
    {
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->view->generate();
        } else {
            if(isset($_POST['sign_in'])) {
                $this->doSignInAttempt();
            } else if (isset($_POST['sign_up'])) {
                if($this->doSignUpAction() === true) {
                    $this->doSignInAttempt();
                }
            }
        }
    }

    public function doSignUpAction()
    {
        $this->setLoginData();
        if($this->login_data->isFree()) {
            $this->login_data->signUpNewUser();
        } else {
            $this->doBusyEmailAction();
        }
    }

    public function doSignInAttempt() : bool
    {
        $this->setLoginData();
        if($this->login_data->isValid()) {
            $this->login();
            return true;
        } else {
            $this->doIncorrectDataAction();
            return false;
        }
    }

    private function doBusyEmailAction()
    {
        $this->view->generateWithError("Этот email уже зарегистрирован");
    }

    private function doIncorrectDataAction() : void
    {
        $this->view->generateWithError("Неверный логин или пароль");
    }

    private function setLoginData() : void
    {
        session_start();
        if(isset($_POST['email']) and isset($_POST['password'])) {
            $this->fillSessionWithNewInfo();
            session_write_close();
        }

        if(isset($_SESSION['email']) and isset($_SESSION['password'])) {
            $this->login_data->setFrom($_SESSION);
        } else {
            
            $this->doIncorrectDataAction();
        }
    }

    private function fillSessionWithNewInfo() : void
    {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
    }

    private function login()
    {
        $this->view = new LoggedInForumView($this->login_data);
        $this->view->generate();
    }
}