<?php

use App\Core\App;

App::bind('config', require 'config.php');


App::bind('database', new StoredProcedures(

    Connection::make($config = App::get('config')['database'])

));


function view($name, $data = [])
{
    extract($data);

    return require  "app/views/{$name}.view.php";
}


function redirect($path)
{
    header("Location:/{$path}");
}


function response($type, $message_field, $message_text, $data)
{
    return [
        'type' => $type,
        'field' => $message_field,
        'text' => $message_text,
        'data' => $data
        ];
}


function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
    echo  '</pre>';
}