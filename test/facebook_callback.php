<?php

//read 
require_once('vender/eden/eden.php');

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
$api_setting = array("facebook" => array("key"  => "313820652072237",
                                         "pass" => "a9ec7cfea7a5b37ea93f0e3229fb5902"));

// set loader
eden()->setLoader();

$auth = eden('facebook')->auth($api_setting['facebook']['key'], $api_setting['facebook']['pass'], 'http://localhost/digup/test/facebook_callback.php');

$access = $auth->getAccess($_GET['code']);
$pre($access);

$user = eden('facebook')->graph($access['access_token'])->getUser();
$pre($user);

