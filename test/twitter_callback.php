<?php

// read
require_once("vender/eden/eden.php");

// sesion start
session_start();

// colsure
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

// get access token
$token = $auth->getAccessToken($_GET['oauth_token'], $_SESSION['request_secret'], $_GET['oauth_verifier']);
$pre($token);

// access to users info 
$users = eden('twitter')->users($api_setting['twitter']['key'], $api_setting['twitter']['pass'], $token['oauth_token'], $token['oauth_token_secret']);
$pre($users);

// get users info
$user_profile = $users->includeEntities()->getDetail($token['user_id']);
$pre($user_profile);
