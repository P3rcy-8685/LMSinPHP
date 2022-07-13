<?php
namespace Controller;
Class Signout{
    public static function get(){
        session_destroy();
        header("Location:/login");}
    }