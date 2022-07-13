<?php
    namespace Admin;
    session_start();
    Class Issued{
        public function get(){
            if($_SESSION["admin"]){
            echo \View\Loader::make()->render("templates/Admin/issued.twig", array(
                "posts"=> \Model\Admin::issued(),
            ));}
            else{
                session_destroy();
                echo \View\Loader::make()->render("templates/Login/login.twig");
            }}}