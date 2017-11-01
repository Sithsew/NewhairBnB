<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <title>Hair BnB</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


        <!-- Slick - the carousel slider -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

        <script src="{{url('vendor/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{url('vendor/js/bootstrap.js')}}"></script>
        <script src="{{url('vendor/js/angular.js')}}"></script>

        <script src="{{url('app/angular.module.js')}}"></script>
<!--        <script src="{{url('app/controller/main.controller.js')}}"></script>-->

        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../../../scripts/angular.min.js"></script>


        <link rel="stylesheet" href="../../../public/css/style.css">
    </head>

    <body>
        <!--    header-->
        <nav class="navbar fixed-top navbar-inverse bg-inverse">
            <a class="navbar-brand" href="welcome">Hair BnB</a>
            <div class="navbar-nav mr-auto mt-2 mt-lg-0 navbar-toggler-right">
                <?php

                    if (isset($_SESSION['id'])){
                ?>
                    <div class="form-inline my-2 my-lg-0">
                        <a class="nav-link mr-sm-2" href="#"><?php
                            $firstname = ucwords($_SESSION['firstname']);
                            $lastname =ucwords($_SESSION['lastname']);
                            echo $firstname." ".$lastname;
                            ?></a>
                        <a class=" nav-link my-2 my-sm-0"  href="/logout">Log Out</a>
                    </div>

                <?php } else {
                        session_start();
                        if (isset($_SESSION['id'])){

                            $role = $_SESSION['user_role'];
                            if ($role===3){
                                $a='/both  ';
                            }elseif ($role===2){
                                $a=' /stylist ';
                            }else{
                                $a=' /salon';
                            }
                ?>

                            <div class="form-inline my-2 my-lg-0">
                                <a class="nav-link mr-sm-2" href=<?= "$a"?>><?php
                                    $firstname = ucwords($_SESSION['firstname']);
                                    $lastname =ucwords($_SESSION['lastname']);
                                    echo $firstname." ".$lastname;
                                    ?></a>
                                <a class=" nav-link my-2 my-sm-0"  href="/logout">Log Out</a>
                            </div>

                        <?php } else { ?>

<!--                        <p class="nav-item " >-->
<!--                            <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">Login </a>-->
<!--                            --><?php //include 'login.view.php'?>
<!--                        </p>-->
                        <p >
                            <a class="nav-link" href="/signUp"  >Sign Up </a>
                        </p>
                    <?php } } ?>
<!--                <a href="/search">-->
<!--                    <img src="../../../public/images/settings.png" style="width: 28px">-->
<!--                </a>-->
            </div>
        </nav>
