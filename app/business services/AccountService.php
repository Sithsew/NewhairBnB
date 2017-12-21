<?php

class AccountService
{

    private $response;

    function __construct()
    {
        require 'app/data services/AccountDataService.php';
        $this->response = new \App\dataServices\AccountDataService();
    }


    public function signUp($userData)
    {
        $this->response-> insertUser($userData);
    }


    public function checkPassHash($email,$uri)
    {
        return $this->response->checkPassHash($email,$uri);
    }


    public function getUser($email, $password)
    {
        return $this->response->getUserDetails($email, $password);
    }


    public function login($email, $password){
        return $this->response->checkUser($email, $password);
    }


    public function checkUserToActivate($email, $password){
        return $this->response->checkUserToActivate($email, $password);
    }


    public function checkUserEmail($email)
    {
        return $this->response-> checkEmail($email);
    }


    public function activate($email)
    {
        return $this->response->activate($email);
    }

}


