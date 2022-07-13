<?php
namespace Controller;
session_start();
Class Signout{
    public static function get(){
        session_destroy();
        header("Location:/login");}
    }