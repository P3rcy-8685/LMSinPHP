<?php

namespace Model;

class Post {
    public static function login($user,$pass) {
        $db = \DB::get_instance();
        $query = "Select salt from user where enrol='".$user."'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $rows=$stmt->fetch();
        print_r($rows[0][0]);
        if(count($rows)){
            print_r($rows);
            $pass=$pass.$rows['salt'];
            $pass=hash('sha256',$pass);
            $query = "Select admin from user where enrol='".$user."' and password='".$pass."'";
            $stmt = $db->prepare($query);
            $stmt->execute();
            $rows=$stmt->fetchAll();
            if(count($rows)){
                session_start();
                $_SESSION["user"]=$user;
                if($rows[0]["admin"]==1){
                    $_SESSION["admin"]=TRUE;
                }
                else{
                    $_SESSION["admin"]=FALSE;
                }
                header('Location: /');
            }
            else{
                echo "Please check username/password";
            }
        }
        else{
            echo $user;
            echo "Please check username/password";
        }
    }
    public static function register($name,$pass,$enr,$admin,$salt) {
        $db = \DB::get_instance();
        $query="Insert into user values('".$enr."','".$pass."','".$name."','".$salt."',".$admin.")";
        $stmt = $db->prepare($query);
        $stmt->execute();
    }
}
