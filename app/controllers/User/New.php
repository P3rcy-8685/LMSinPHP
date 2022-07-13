<?php
    namespace User;
    class NewIssue{
        public function get(){            
            session_start();
            if($_SESSION["user"]){
            echo \View\Loader::make()->render("templates/User/issueuser.twig", array(
                "posts"=> \Model\Books::available(),
            )); }
            else{
                session_destroy();
                echo \View\Loader::make()->render("templates/Login/login.twig");
            }
        }
        public function post(){
            session_start();
            $name=$_POST["name"];
            $user=$_SESSION["user"];
            \Model\Books::quantitydec($name);
            \Model\Books::issue($name,$user);
            header("Location:/");

        }
    }