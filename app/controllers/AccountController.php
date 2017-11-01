<?php

namespace App\Controllers;

use App\Core\App;

class AccountController
{
    private $response;
//    array for errors
    public $error = [];


    public function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function __construct()
    {
        require 'app/business services/AccountService.php';
        $this->response = new \AccountService();
    }

    function signUpView(){
        view('signUpPage' );
    }

    function signUp() {

        $userData=[];
        if (isset($_POST['btn-signUp'])){

            if (empty($_POST['firsName'])) {
                $this->error['firstnameErr'] = 'First Name is required ';
            } else if (!preg_match("/^[a-zA-Z ]*$/",$_POST['firsName'])) {
                    $this->error['firstnameErr']  = "Only letters and white space allowed";
            } else if ( strlen($_POST['firsName'])> 64 ){
                    $this->error['firstnameErr']  = "Your First Name is too long";
            } else {
                $userData['firstName']=$this->test_input($_POST['firsName']);
            }

//
            if (empty($_POST['lastName'])) {
                $this->error['lastnameErr'] = "Last Name is required ";
            } else if (!preg_match("/^[a-zA-Z ]*$/",$_POST['lastName'])) {
                    $this->error['lastnameErr']  = "Only letters and white space allowed";
            } else if (strlen($_POST['lastName'])>64){
                $this->error['lastnameErr']  = "Your Last Name is too long";
            } else {
                $userData['lastName']=$this->test_input($_POST['lastName']);
            }


            if (empty($_POST['email'])) {
                $this->error['emailErr'] = "Email is required ";
            } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    $this->error['emailErr'] = "Invalid email format";
            } else {
                $userData['email']=$this->test_input($_POST['email']);
            }


            if (empty($_POST['password'])) {
                $this->error['passwrdErr'] = "Password is required ";
            } else if (strlen($_POST['password']) <4 ){
                $this->error['passwrdErr']  = "Password must have atleast 4 characters ";
            } else if (strlen($_POST['password'])>64){
                $this->error['passwrdErr']  = "Password must be Not longer than 64 characters ";
            } else {
                $userData['password'] = md5($_POST['password']);
            }


            if (empty($_POST['salon']) && empty($_POST['stylist'])){
                $this->error['acc_typeErr'] = "    *  Account Type Required";
            } else if ( (!empty($_POST['salon']) && !empty($_POST['bnameSalon'])) && (!empty($_POST['stylist']) && !empty($_POST['bnameStylist'])) ) {

                if (strlen($_POST['bnameSalon']) > 64) {
                    $this->error['salonErr'] = "Your salon Business Name is too long";
                } else {
                    $userData['salon'] = $this->test_input($_POST['bnameSalon']);
                }

                if (strlen($_POST['bnameStylist']) > 64) {
                    $this->error['stylistErr'] = "Your Business Name is too long";
                } else {
                    $userData['stylist'] = $this->test_input($_POST['bnameStylist']);
                }

                if (!empty($userData['salon']) && !empty($userData['stylist'])) {
                    $userData['user_role'] = 3;
                }

            } else if ( !empty($_POST['salon']) && !empty($_POST['bnameSalon'])){
                if (strlen($_POST['bnameSalon']) > 64) {
                    $this->error['salonErr'] = "Your salon Business Name is too long";
                } else {
                    $userData['salon'] = $this->test_input($_POST['bnameSalon']);
                }
                if (!empty($userData['salon'])) {
                    $userData['user_role'] = 1;
                    $userData['salon']=$_POST['bnameSalon'];
                }
            } else if (!empty($_POST['stylist']) && !empty($_POST['bnameStylist'])) {
                if (strlen($_POST['bnameStylist']) > 64) {
                    $this->error['stylistErr'] = "Your Business Name is too long";
                } else {
                    $userData['user_role']=2;
                    $userData['stylist']=$_POST['bnameStylist'];
                }
            } else {
                $this->error['acc_typeErr'] = "    *  Fill Your Business Name or Account Type Correctly";
            }

            $userData['email_preference']=isset($_POST['preference'])?$this->test_input($_POST['preference']):0;

            if (!empty($this->error)){
                $errors =$this->error;
                view('signUpPage', compact('errors'));
            }else if (empty($this->error)) {

                $emailExists = $this->response->checkUserEmail($userData['email']);
                if (empty($emailExists)){
                    $date = date('Y-m-d H:i:s');
                    $userData['temp_password'] =  md5($userData['email']." ".$date);
                    $this->response->signUp($userData);
                    $this->sendEmail($userData);

                    redirect('welcome');
                } else {
                    dd("Email already exists");
                }

            }

        }

    }

    function sendEmail($userData)
    {
        $url=$userData['temp_password'];
        $to = $userData['email'];
        $subject = "Activate Your Hair BnB Account";

        $message = "
            <html>
                <head>
                    <title>Hair BnB</title>
                </head>
                
                <body >
                        <div class='col-md-10' align='center' >
                       <div  style='padding:2%; background-color: plum; width: 300px' >
                         <h3 align='center' style='padding: 20px'> Welcome to Hair BnB</h3>
                        <div  style='margin-bottom: 40px'>
                            <p>Thanks for signing up with Hair BnB! </p>
                            <p>You must follow this link to activate your account:</p>
                            <a href='http://localhost:7777/activatingLogin?id=$url'>Click me, Please!</a>
                        </div>
                        
                        <div >
                            The Hair BnB Team<br>
                           <a href='hairBnB.com'>hairBnB.com</a>
                        </div>
                    </div>
                        </div>
                    
                    
                </body>
            </html>
        ";
// Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        mail($to,$subject,$message,$headers);
        redirect('welcome');
    }

    function activateUser()
    {
        $url = $_GET['id'];
        $loginEmail = isset($_POST['email'])?$this->test_input($_POST['email']):null;
        $loginPassword=isset($_POST['password'])?$this->test_input($_POST['password']):null;

        if (!empty($loginEmail)&& !empty($loginPassword)){
            $password =  md5($loginPassword);
        }

        $existUser = $this->response->checkPassHash($loginEmail , $url);

        if (!empty($existUser)){
            $user = $this->response->checkUserToActivate($loginEmail,$password);
            if (!empty($user)) {
                $active = $this->response->activate($loginEmail);
                if ($active){
                    $details = $this->response->getUser($loginEmail,$password);
                    if ($details){
                        $role = $details[0]->user_role;
                        session_start();
                        $_SESSION['id']=$details[0]->id;
                        $_SESSION['firstname']=$details[0]->firstname;
                        $_SESSION['lastname']= $details[0]->lastname;
                        if ($role==='3'){
                            view('bothUsers');
                        }elseif ($role==='1'){
                            view('salon');
                        }elseif ($role==='2'){
                            view('stylist');
                        }
                    }
                }
            }else {
                $errors="Incorrect Email or Password";
                view('activatedLogin',compact('errors') );

            }
        } else {
            $errors="Sorry, we cant activate your account. Something went wrong!!!";
            view('activatedLogin',compact('errors') );
        }

    }

    function activatingLogin()
    {
        view('activatedLogin');
    }

    function login()
    {

        $loginEmail = isset($_POST['email'])?$this->test_input($_POST['email']):null;
        $loginPassword=isset($_POST['password'])?$this->test_input($_POST['password']):null;
        if (!empty($loginEmail)&& !empty($loginPassword)){
            $password =  md5($loginPassword);
        }
        $userData =  $this->response->login($loginEmail,$password);

        if ($userData){
            $role = $userData[0]->user_role;
            session_start();
            $_SESSION['id']=$userData[0]->id;
            $_SESSION['firstname']=$userData[0]->firstname;
            $_SESSION['lastname']= $userData[0]->lastname;


           if ($role==='3'){
               view('bothUsers');
           }elseif ($role==='1'){
               view('salon');
           }elseif ($role==='2'){
               view('stylist');
           }
            $_SESSION['user_role'] = $role;
        }else{
            $errors="Incorrect Email or Password";
            view('activatedLogin',compact('errors') );
        }


    }

    function stylist()
    {
        view('stylist');
    }

    function salon(){
        view('salon');
    }

    function both(){
        view('bothUsers');
    }

    function logout(){
        // Initialize the session.
        // If you are using session_name("something"), don't forget it now!
        session_start();

        // Unset all of the session variables.
        $_SESSION = array();

    // If it's desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

// Finally, destroy the session.
        session_destroy();
        redirect('welcome');
    }

}
