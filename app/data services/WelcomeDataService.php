<?php

namespace App\dataServices;

use App\Core\App;

class WelcomeDataService
{
    public function welcome()
    {

        $topUsers = [];
        $topUsers["salons"] =  App::get('database')->BSP_SalonGetTopSalons( 10);
        $topUsers["stylists"] = App::get('database')->BSP_StylistGetTopStylists( 10);

        return $topUsers;

    }
}
