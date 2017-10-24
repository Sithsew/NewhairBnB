<?php

class WelcomeService{

    public function welcome()
    {
        require 'app/data services/WelcomeDataService.php';
        $welcome = new \App\dataServices\WelcomeDataService();
        return $welcome -> welcome();

    }

}


