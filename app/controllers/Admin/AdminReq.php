<?php
    namespace Admin;
    Class Adminreq{
        public function get(){
            session_start();

            if($_SESSION["admin"]){
            echo \View\Loader::make()->render("templates/Admin/adminrequest.twig", array(
                "posts"=> \Model\Admin::areq(),
            ));}
            else{
                session_destroy();
                echo \View\Loader::make()->render("templates/Login/login.twig");
            }
        }
        public function post(){
            $name=$_POST["name"];
            $approve=$_POST["aprove"];
            if($approve){
                \Model\Admin::adminapprove($name);
            }
            else{
                \Model\Admin::adminreject($name);

            }
            header("Location:/areq");
        }}