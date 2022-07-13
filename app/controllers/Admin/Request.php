<?php
    namespace Admin;
    session_start();
    Class Request {
        public function get(){
            if($_SESSION["admin"]){
            echo \View\Loader::make()->render("templates/Admin/request.twig", array(
                "posts"=> \Model\Admin::req(),
            ));}
            else{
                session_destroy();
                echo \View\Loader::make()->render("templates/Login/login.twig");
            }
        }
        public function post(){
            $book=$_POST["name"];
            $by=$_POST["issuedby"];
            $approve=$_POST["aprove"];
            if($approve){
                \Model\Books::deletereq($book,$by);
                \Model\Books::insertissue($book,$by);
            }
            else{
                \Model\Books::reject($book,$by);
            }
            header("Location:/vrequest");

        }}