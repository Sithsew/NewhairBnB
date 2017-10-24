<?php

namespace App\Controllers;

use App\Core\App;

class AccountController
{

    private $firstName;
    private $lastName;
    private $email;
    private $password;
//    private $confirmPass;
    private $bussNameSalon;
    private $bussNameStylist;
    private $salon;
    private $stylist;
    private $userRole;
//$Snorkeling= $_POST['Snorkeling'];



    function __construct() {
        $this->firstName = isset($_POST['firsName']) ? $_POST['firsName'] : null;
        $this->lastName = isset($_POST['lastName']) ? $_POST['lastName'] : null;
        $this->email = isset($_POST['email']) ? $_POST['email'] : null;
        $this->password = isset($_POST['password']) ? $_POST['password'] : null;
        $this->confirmPass = isset($_POST['confpassword']) ? $_POST['confpassword'] : null;
        $this->bussNameSalon = isset($_POST['bnameSalon']) ? $_POST['bnameSalon'] : null;
        $this->bussNameStylist = isset($_POST['bnameStylist']) ? $_POST['bnameStylist'] : null;
        $this->salon = isset($_POST['salon']) ? $_POST['salon'] : null;
        $this->stylist = isset($_POST['stylist']) ? $_POST['stylist'] : null;

    }



    function signUp() {


        if (empty($this->firstName) || empty($this->lastName) || empty($this->email) || empty($this->password)  ) {

            echo "Please, Fill the require fields";

        }

        else
        {

            if ($this->salon!== null && $this->stylist !== null){
                $this->userRole=3;
            }else if ($this->salon !== null){
                $this->userRole = 1;
            }else {
                $this->userRole =2;
            }

            if (($this->salon !== null && $this->bussNameSalon !== null) || ($this->stylist!== null && $this->bussNameStylist!== null)){



                echo " Registration Done";
                redirect('welcome');

            }else {

                echo "Please fill your Account Type or Bussiness Name Correctly";
            }



        }
    }


}
//$register = new RegisterUser();
//if(!empty($_POST))
//{
//    $register->start();
//}