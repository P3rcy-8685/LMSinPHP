<?php
function generateRandomString($length = 5) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function loger($message)
{
    $message = date("H:i:s") . " - $message - ".PHP_EOL;
    print($message);
    flush();
    ob_flush();
}

namespace Controller;
class Register {
    public static function get() {
        echo \View\Loader::make()->render('templates/Login/register.twig');
    }
    public function post(){
        $name=$_POST["name"];
        $pass=$_POST["pass"];
        $enr=$_POST["enr"];
        $admin=$_POST["admin"];
        if($admin){
            $admin=-1;
        }
        else{
            $admin=0;
        }
        $rand=generateRandomString();
        $pass=$pass.$rand;
        $hash=hash('sha256',$pass);
        \Model\Login::register($name,$hash,$enr,$admin,$rand);

        echo \View\Loader::make()->render("templates/Login/login.twig", array(
            "registered"=>TRUE,
            )
        );

    }
}
