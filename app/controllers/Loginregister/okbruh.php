<?php
namespace Controller;
session_start();
class Ok {
    public static function get(){
    if(isset($_SESSION['user'])){
        if($_SESSION["admin"]){
        echo \View\Loader::make()->render("templates/admin.twig");
    }
        else{
            echo \View\Loader::make()->render("templates/homeuser.twig",array(
                "posts"=>\Model\User::Issued($_SESSION["user"])
        
            ));
    }
}
else{
    header("Location:/login");}
}
}
Class Signout{
    public static function get(){
        session_destroy();
        header("Location:/login");}

    }
?>