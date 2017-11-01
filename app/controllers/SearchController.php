<?php

namespace App\Controllers;

use App\Core\App;


class SearchController
{
    private $response;

    function __construct()
    {
        require 'app/business services/SearchService.php';
        $this->response = new \SearchService();
    }

    public function search()
    {
        $search = [];
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $search['date'] = isset($_POST['date']) ? test_input($_POST['date']) : null;
        $search['location'] = isset($_POST['city']) ? test_input($_POST['city']) : null;
        $search['skill'] = isset($_POST['skills']) ? test_input($_POST['skills']) : 0;
        $search['businessName'] = isset($_POST['bname']) ? test_input($_POST['bname']) : null;
        $search['priceFrom'] = isset($_POST['priceFrom']) ? test_input($_POST['priceFrom']) : 0;
        $search['priceTo'] = isset($_POST['priceTo']) ? test_input($_POST['priceTo']) : null;
        $search['gender'] = isset($_POST['gender']) ? test_input($_POST['gender']) : null;
        $search['type'] = isset($_POST['type']) ? test_input($_POST['type']) : 0;

        $stylists=$this->response->search($search);

        return view('search',compact('stylists','search'));

    }

    function searchView(){

        return view('search');

    }

//    function searchView(){
//        view('search');
//    }
}

