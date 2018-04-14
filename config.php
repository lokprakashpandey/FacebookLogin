<?php

session_start();

require_once "Facebook/autoload.php";

$FB = new \Facebook\Facebook([
	'app_id' => '172393383465172',
	'app_secret' => '303d0e281209901ad0192e5809fc5b26',
	'default_graph_version' => 'v2.10',
	]);

$helper = $FB->getRedirectLoginHelper();


?>