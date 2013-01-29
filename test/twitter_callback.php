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

//$pre($_REQUEST);
//$pre($_SESSION);

// twitter auth test
$auth = eden("twitter")->auth($api_setting["twitter"]["key"], $api_setting["twitter"]["pass"]);
//$pre($auth);

if (!empty($_SESSION['request_secret'])) {

    // get access token
    $token = $auth->getAccessToken($_GET['oauth_token'], $_SESSION['request_secret'], $_GET['oauth_verifier']);
    //$pre($token);

    // access to users info 
    $users = eden('twitter')->users($api_setting['twitter']['key'], $api_setting['twitter']['pass'], $token['oauth_token'], $token['oauth_token_secret']);
    //$pre($users);

    // get users info
    //$user_profile = $users->includeEntities()->skipStatus()->getContributees($token['user_id'], $token['screen_name']);
    // $token['user_id']がなぜかstringで渡されるので明示的に型をキャストする
    $user_profile = $users->getDetail((int) $token['user_id']);
    $pre($user_profile);

} else {
    echo 'request_secret is none';
}