<?php
    namespace User;
    session_start();
    Class Pend{
        public function get(){
            if($_SESSION["user"]){
            $user=$_SESSION["user"];
            echo \View\Loader::make()->render("templates/User/userpending.twig", array(
                "posts"=> \Model\User::pend($user),
            )); }
            else{
                session_destroy();
                echo \View\Loader::make()->render("templates/Login/login.twig");
            }}
    }