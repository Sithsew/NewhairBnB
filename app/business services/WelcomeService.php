<?php

class WelcomeService{

    public function welcome()
    {
        require 'app/data services/WelcomeDataService.php';
        $response = new \App\dataServices\WelcomeDataService();
        return $response -> welcome();

    }

}


