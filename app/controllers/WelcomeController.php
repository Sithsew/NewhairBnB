<?php

namespace App\Controllers;

use App\Core\App;

class WelcomeController
{


    public function welcome()
    {

        require 'app/business services/WelcomeService.php';
        $welcome = new \WelcomeService();
        $salons = $welcome->welcome();

        return view('welcome', compact('salons'));
    }



}
