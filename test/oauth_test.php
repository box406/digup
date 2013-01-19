<?php

// read
require_once("vender/eden/eden.php");

// api setting
$api_setting = array("twitter"  => array("key"  => "5383792-8WAERYfbu4mUCimJL0mwaekM8MNk2JiiaSx6ltItVE",
                                         "pass" => "Ow3kYfvRg6vd6iVerdQCrNrBRdctOhbQrJcpEcyHw",),
                     "facebook" => array("key"  => "313820652072237",
                                         "pass" => "a9ec7cfea7a5b37ea93f0e3229fb5902",));
// twitter auth test
$auth = eden("twitter")->auth($api_setting["twitter"]["key"], $api_setting["twitter"]["pass"]);

// get request token
//$token = $auth->getRequestToken();
//$pre($token);

$pre = function() {
    echo "<pre>";
    print_r($token);
    echo "</pre>";
};

