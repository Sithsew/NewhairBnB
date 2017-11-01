<?php
namespace App\DataServices;

use App\Core\App;

class SearchDataService
{
     public function search($search)
     {
         $date = $search['date'];
         $location= $search['location'];
         $skill =$search['skill'];
         $business_name = $search['businessName'];
         $priceFrom = $search['priceFrom'];
         $priceTo = $search['priceTo'];
         $gender = $search['gender'];
         $type = $search['type'];

         return App::get('database')->BSP_StylistSearchStylist($date,$location, $skill, $business_name,$priceFrom, $priceTo,$type, $gender );

     }
}