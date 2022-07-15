<?php
    namespace Admin;
    Class Request {
        public function get(){
            session_start();

            if($_SESSION["admin"]){
            echo \View\Loader::make()->render("templates/Admin/request.twig", array(
                "posts"=> \Model\Admin::req(),
                    )
                );
            }
            else{
                session_destroy();
                echo \View\Loader::make()->render("templates/Login/login.twig");
            }
        }

        public function post(){
            $book=$_POST["name"];
            $user=$_POST["issueduser"];
            $approve=$_POST["aprove"];
            if($approve){
                \Model\Books::deletereq($book,$user);
                \Model\Books::insertissue($book,$user);
            }
            else{
                \Model\Books::reject($book,$user);
            }
            header("Location:/vrequest");

        }
    }