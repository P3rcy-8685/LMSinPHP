<?php

require __DIR__."/../vendor/autoload.php";

Toro::serve(array(
    "/"=>"\Controller\Check",
    "/login" => "\Controller\Login",
    "/register" => "\Controller\Register",
    "/issued" => "\User\Issued",
    "/issue" =>"\User\NewIssue",
    "/rejected"=>"\User\Reject",
    "/logout"=> "\Controller\Signout",
    "/pending"=>"\User\Pending",
    "/book"=>"\User\NewIssue",
    "/addbook"=>"\Admin\Add",
    "/vrequest"=>"\Admin\Request",
    "/aprove"=>"\Admin\Request",
    "/areq"=>"\Admin\Adminreq",
    "/adminaprove"=>"\Admin\Adminreq",
    "/adminissue"=>"\Admin\Issued",
    "/adminavail"=>"\Admin\Available",
));
