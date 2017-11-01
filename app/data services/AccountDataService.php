<?php

namespace App\DataServices;

use App\Core\App;

class AccountDataService
{

    private $startedDate = 2017-10-03;

    public function checkEmail($email)
    {
        return App::get('database')-> BSP_UserCheckEmail($email);
    }

    public function getUserDetails($email, $password)
    {
        return App::get('database')->BSP_UserGetDetails($email, $password);
    }

    public function insertUser($userData)
    {
        $userRole = $userData['user_role'];
        $bussNameSalon = $userData['salon'];
        $bussNameStylist = $userData['stylist'];

        $uId = App::get('database')->CSP_UserInsert('trn_user', [
            "email" => $userData['email'],
            "password" => $userData['password'],
            "user_role" =>$userRole,
            "temp_password" => $userData['temp_password'],
            "email_preference" => $userData['email_preference'],
            "firstname" =>$userData['firstName'] ,
            "lastname" => $userData['lastName'],
        ]);

        if ($userRole===1){

            $salonId = App::get('database')->CSP_UserInsert('trn_salon', [
                "business_name" =>$bussNameSalon ,
                "started_date" => $this-> startedDate,
                "user_id" => $uId

            ]);

        }elseif ($userRole===2){
            $stylistId = App::get('database')->CSP_UserInsert('trn_stylist', [
                "business_name" => $bussNameStylist,
                "started_date" =>  $this-> startedDate,
                "user_id" => $uId
            ]);

        }else{

            $salonId = App::get('database')->CSP_UserInsert('trn_salon', [
                "business_name" =>$bussNameSalon ,
                "started_date" => $this-> startedDate,
                "user_id" => $uId

            ]);

            $stylistId = App::get('database')->CSP_UserInsert('trn_stylist', [
                "business_name" => $bussNameStylist,
                "started_date" => $this->startedDate,
                "user_id" => $uId
            ]);
        }

    }

    public function checkPassHash($email, $temp_password)
    {
        return App::get('database')->BSP_UserCheckPassHash($email, $temp_password);
    }


    public function checkUser($email, $password){

        return App::get('database')->BSP_UserCheckUser($email, $password);

    }

    public function checkUserToActivate($email, $password){

        return App::get('database')->BSP_UserCheckUserToActivate($email, $password);

    }



    public function activate( $email)
    {

        return App::get('database')->CSP_UserActivate( $email);
    }

}