<?php

namespace Controller;

class Login {
    public function get() {
        echo \View\Loader::make()->render("templates/Login/login.twig");
    }
    public function post() {
        $user = $_POST["uname"];
        $pass=$_POST["pass"];
        $row=\Model\Post::salt($user);
        if(count($row)){
        $pass=$pass.$row['salt'];
        $pass=hash('sha256',$pass);
        $row=\Model\Post::login($user,$pass);
        if(count($row)){
            session_start();
            $_SESSION["user"]=$user;
            $admin=$row["admin"];
            if($admin==1){
                $_SESSION["admin"]=TRUE;
            }
            else{
                $_SESSION["admin"]=FALSE;
            }
        }
        else{
            echo "Incorrect Password";
        }
        }
        else{
            echo "Incorrect UserName";
        }
        header('Location: /');

    }

}
?>