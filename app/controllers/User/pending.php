<?php
    namespace User;
    Class Pending{
        public function get(){
            session_start();
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