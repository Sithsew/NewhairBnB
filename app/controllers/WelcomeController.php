<?php

namespace App\Controllers;

use App\Core\App;

class WelcomeController
{

    public function welcome()
    {
        require 'app/business services/WelcomeService.php';
        $response = new \WelcomeService();
        $topUsers = $response->welcome();
        $salons= $topUsers["salons"];
        $stylists =$topUsers["stylists"] ;

        return view('welcome', compact('salons', 'stylists'));
    }

    public function calendar()
    {
        view('calendar');
    }

}
