<?php

// read
require_once("vender/eden/eden.php");

// sesstion start
session_start();

// Closure
// # Momo closure（無名関数）は必ず先に定義しておく必要がある
$pre = function($info) {
    echo "<pre>";
    print_r($info);
    echo "</pre>";
};

// api setting
// # Todo twitter Consumer or access token
$api_setting = array("twitter"  => array("key"  => "I6WKwQVBpCjoYmDnMrqcg",
                                         "pass" => "D6H8m1PfUPLGJsactMlQQUvGEGJWn7HMAUFB2fISJY"));

// set loader
eden()->setLoader();

// twitter auth test
$auth = eden("twitter")->auth($api_setting["twitter"]["key"], $api_setting["twitter"]["pass"]);

// get request token
$token = $auth->getRequestToken();
$_SESSION["request_secret"] = $token["oauth_token_secret"];
//var_dump($token);
// get login url
// authorize
// authenticate
$login = $auth->getLoginUrl($token["oauth_token"], "http://localhost/digup/test/twitter_callback.php", "authenticate", true);
//var_dump($login);

// location 
header("Location:" . $login);
exit();

