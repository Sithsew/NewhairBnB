<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{

    public function index()
    {
        $users = App::get('database')->getTopUsers('trn_user', 'id', 2);
//        return view('users', compact('users'));
        dd($users);

    }

    public function store()
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