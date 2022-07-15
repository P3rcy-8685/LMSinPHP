<?php
    namespace Admin;
    Class Available{
        public function get(){
            session_start();
            if($_SESSION["admin"]){
            echo \View\Loader::make()->render("templates/Admin/available.twig", array(
                "posts"=> \Model\Books::available(),
                    )
                );
            }
            else{
                session_destroy();
                echo \View\Loader::make()->render("templates/Login/login.twig");
            }
        }
    }