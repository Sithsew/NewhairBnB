<?php

namespace App\DataServices;

use App\Core\App;

class AccountDataService
{

    private $bussNameSalon;
    private $bussNameStylist;
    private $userRole;
    private $uId;

    private $startedDate = 2017-10-03;


    public function insertUser($firstname, $lastname, $email, $password, $userRole, $salonName, $stylistBname, $emailPreference){


        $this->userRole = $userRole;
        $this->bussNameSalon = $salonName;
        $this->bussNameStylist = $stylistBname;

        $this->uId = App::get('database')->CSP_UserInsert('trn_user', [
            "email" => $email,
            "password" => $password,
            "user_role" => $this->userRole,
            "email_preference" => $emailPreference,
            "firstname" =>$firstname ,
            "lastname" => $lastname,
        ]);

        if ($this->userRole===1){

            $salonId = App::get('database')->CSP_UserInsert('trn_salon', [
                "business_name" => $this->bussNameSalon,
                "started_date" => $this-> startedDate,
                "user_id" => $this-> uId

            ]);

        }elseif ($this-> userRole===2){
            $stylistId = App::get('database')->CSP_UserInsert('trn_stylist', [
                "business_name" => $this->bussNameStylist,
                "started_date" => $this->startedDate,
                "user_id" => $this->uId
            ]);

        }else{

            $salonId = App::get('database')->CSP_UserInsert('trn_salon', [
                "business_name" => $this->bussNameSalon,
                "started_date" => $this-> startedDate,
                "user_id" => $this-> uId

            ]);

            $stylistId = App::get('database')->CSP_UserInsert('trn_stylist', [
                "business_name" => $this->bussNameStylist,
                "started_date" => $this->startedDate,
                "user_id" => $this->uId
            ]);
        }

    }

//    public function insertSalon($businessName, $startedDate, $uId){
//
//        $salonId = App::get('database')->CSP_UserInsert('trn_salon', [
//            "business_name" => $businessName,
//            "started_date" => $startedDate,
//            "user_id" => $uId
//
//        ]);
//
//    }
//
//
//    public function insertStylist($businessName, $startedDate, $uId){
//        $stylistId = App::get('database')->CSP_UserInsert('trn_stylist', [
//            "business_name" => $businessName,
//            "started_date" => $startedDate,
//            "user_id" => $uId
//        ]);
//
//    }

//    function BSP_UserCheckEmail($email);
//
//    function BSP_UserCheckPassHash($email, $tempPassword);
//
//    function BSP_UserCheckUser($email, $password);
//
//    public function CSP_UserActivate($email);

}