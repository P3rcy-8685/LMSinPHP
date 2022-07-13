<?php
    namespace Admin;
    session_start();

    class Add {
        public function post(){
            $bookcode=$_POST["code"];
            $book=$_POST["book"];
            \Model\Books::add($bookcode,$book);
        }}
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
            \Model\Books::approve($book,$by,$approve);
        }}
    Class Adminreq{
        public function get(){
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
            \Model\Admin::adminapprove($name,$approve);
        }}
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
    Class Available{
        public function get(){
            if($_SESSION["admin"]){
            echo \View\Loader::make()->render("templates/Admin/avail.twig", array(
                "posts"=> \Model\Admin::avail(),
            ));}
            else{
                session_destroy();
                echo \View\Loader::make()->render("templates/Login/login.twig");
            }}}