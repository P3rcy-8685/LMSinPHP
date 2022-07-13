<?php
    namespace User;
    session_start();
    Class Reject{
        public function get(){
            if($_SESSION["user"]){
            $user=$_SESSION["user"];
            echo \View\Loader::make()->render("templates/User/userreject.twig", array(
                "posts"=> \Model\User::reject($user),
                "Dump"=> \Model\User::update($user),

            )); }
            else{
                session_destroy();
                echo \View\Loader::make()->render("templates/Login/login.twig");
            }}
    }