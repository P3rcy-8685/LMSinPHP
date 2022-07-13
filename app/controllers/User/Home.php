<?php
    namespace User;
    session_start();
    class Issued{
        public function post(){
            if($_Session["user"]){
            $user=$_SESSION["user"];
            echo \View\Loader::make()->render("templates/User/homeuser.twig", array(
                "posts"=> \Model\User::issued($user),
            ));
        }
        else{
            session_destroy();
            echo \View\Loader::make()->render("templates/Login/login.twig");
        }}}
    
