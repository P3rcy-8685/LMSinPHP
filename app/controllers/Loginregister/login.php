<?php

namespace Controller;

class Login {
    public function get() {
        echo \View\Loader::make()->render("templates/login.twig");
    }

    public function post() {
        $user = $_POST["uname"];
        $pass=$_POST["pass"];
        \Model\Post::login($user,$pass);
    }
}
?>