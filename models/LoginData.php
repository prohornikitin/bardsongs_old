<?php

class LoginData
{
    private mysqli $mysqli;
    private string $email;
    private string $password;


    public function __construct()
    {
        $this->email = '';
        $this->password = '';
        $this->mysqli = new mysqli('localhost', 'website', '1', 'bardsongs');
    }

    public function isValid() : bool
    {
        $user = $this->findUserByEmail();
        if(($user === null ) || ($user->password != $this->password)) {
            return false;
        }
        return true;
    }

    public function isFree() : bool
    {
        $user = $this->findUserByEmail();
        return ($user == null);
    }

    private function getDefaultName()
    {
        return substr($this->email, 0, strrpos($this->email, '@'));
    }

    public function signUpNewUser() : bool
    {
        $variables = '(email, password, display_name)';
        $values = "('{$this->email}', '{$this->password}', '{$this->getDefaultName()}')";
        return $this->mysqli->query("INSERT INTO USERS {$variables} VALUES {$values};");
    }

    private function findUserByEmail()
    {
        $result = $this->mysqli->query("SELECT * FROM USERS where email='{$this->email}'");
        if($result) {
            $user = $result->fetch_object();
            $result->free();
            return $user;
        }
        return NULL;
    }

    public function setFrom(array $info) : void
    {
        $this->email = $info['email'];
        $this->password = $info['password'];
    }

    public function __destruct()
    {
        $this->mysqli->close();
    }

}