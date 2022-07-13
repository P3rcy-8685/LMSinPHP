<?php
    namespace User;
    session_start();
    class Issued{
        public function post(){
            $user=$_SESSION["user"];
            echo \View\Loader::make()->render("templates/User/homeuser.twig", array(
                "posts"=> \Model\User::issued($user),
            ));
        }}
    class NewIssue{
        public function get(){
            echo \View\Loader::make()->render("templates/User/issueuser.twig", array(
                "posts"=> \Model\Books::book(),
            )); 
        }
        public function post(){
            $name=$_POST["name"];
            $user=$_SESSION["user"];
            \Model\Books::issue($name,$user);
        }
    }
    Class Pend{
        public function get(){
            $user=$_SESSION["user"];
            echo \View\Loader::make()->render("templates/User/userpending.twig", array(
                "posts"=> \Model\User::pend($user),
            )); 
        }
    }
    Class Reject{
        public function get(){
            $user=$_SESSION["user"];
            echo \View\Loader::make()->render("templates/User/userreject.twig", array(
                "posts"=> \Model\User::reject($user),
            )); 
        }
    }