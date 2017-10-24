<?php

namespace App\DataServices;

use App\Core\App;

class AccountDataService
{
    public function getUser()
    {
        $users = App::get('database')->selectAll('trn_user');
        dd($users);

    }


    public function insertUser()
    {

        App::get('database')->insert('trn_user', [
            'email' => $_POST['email'],
            'pasword' => $_POST['pass'],
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname']

        ]);

        redirect('users');

//        header('Location: /users');

    }
}