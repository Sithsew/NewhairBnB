<?php

 class SearchService
 {
     private $response;
     function __construct()
     {
         require 'app/data services/SearchDataService.php';
         $this->response =  new \App\DataServices\SearchDataService();
     }


     function search($search)
    {

        return $this->response-> search($search);

    }
 }