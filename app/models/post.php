<?php

namespace Model;
session_start();
class Post {
    public static function salt($user){
        $db = \DB::get_instance();
        $query = "Select salt from user where enrol='".$user."'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $rows=$stmt->fetch();
        return $rows;
    }
    
    public static function login($user,$pass) {
        $db = \DB::get_instance();
        $query = "Select admin from user where enrol='".$user."' and password='".$pass."'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $rows=$stmt->fetch();
        return $rows;
    }

    public static function register($name,$pass,$enr,$admin,$salt) {
        $db = \DB::get_instance();
        $query="Insert into user values('".$enr."','".$pass."','".$name."','".$salt."',".$admin.")";
        $stmt = $db->prepare($query);
        $stmt->execute();
    }
}
