<?php


class AccountService
{

    public function signUp($firstname, $lastname, $email, $password, $userRole, $salonName,$stylistBname, $emailPreference )
    {
        require 'app/data services/AccountDataService.php';
        $response = new \App\dataServices\AccountDataService();
        $response -> insertUser($firstname, $lastname, $email, $password, $userRole,$salonName,$stylistBname, $emailPreference);

    }

}


