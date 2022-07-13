<?php

require __DIR__."/../vendor/autoload.php";

Toro::serve(array(
    "/"=>"\Controller\Ok",
    "/login" => "\Controller\Login",
    "/register" => "\Controller\Register",
    "/issued" => "\User\Issued",
    "/issue" =>"\User\NewIssue",
    "/rejected"=>"\User\Reject",
    "/logout"=> "\Controller\Signout",
    "/pending"=>"\User\Pend",
    "/book"=>"\User\NewIssue"
));
