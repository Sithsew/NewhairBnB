<?php

namespace App\dataServices;

use App\Core\App;

class WelcomeDataService
{
    public function welcome()
    {

        return App::get('database')->BSP_SalonGetTopSalons( 10);

//        $stylists = App::get('database')->getTopUsers('trn_stylist', 'id', 10);
//        dd($salons);

    }
}
