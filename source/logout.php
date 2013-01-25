<?php

$app_id		= "394076157350325";
$app_secret	= "dc19bd5b065be30ebb40f03fa7b55181";
$site_url	= "http://localhost:8889";

try{
	include_once "src/facebook.php";
}catch(Exception $e){
	error_log($e);
}
// Create our application instance
$facebook = new Facebook(array(
	'appId'		=> $app_id,
	'secret'	=> $app_secret,
	));

$logoutUrl = $facebook->getLogoutUrl();
echo $logoutUrl;

$user = $facebook->getUser();
echo $user;


if ($user)
{		
    try
    {
        $me = $facebook->api('/me');
				$facebook->destroySession();
				session_destroy();
    }
    catch(FacebookApiException $e){
        $facebook->destroySession();
    }
		
		header("Location: /") ;
		exit();
		
}

?>