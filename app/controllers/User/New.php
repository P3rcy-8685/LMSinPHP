<?php
    namespace User;
    session_start();
    class NewIssue{
        public function get(){
            if($_SESSION["user"]){
            echo \View\Loader::make()->render("templates/User/issueuser.twig", array(
                "posts"=> \Model\Books::book(),
            )); }
            else{
                session_destroy();
                echo \View\Loader::make()->render("templates/Login/login.twig");
            }
        }
        public function post(){
            $name=$_POST["name"];
            $user=$_SESSION["user"];
            \Model\Books::quantitydec($name);
            \Model\Books::issue($name,$user);
            header("Location:/");

        }
    }