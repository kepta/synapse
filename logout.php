<?php
session_start();
if(isset($_SESSION['user_id'])) {
	
	$_SESSION = array();
	
	if (isset($_COOKIE['user_id'])) {
		setcookie('user_id','',time() -3600);	
	}
	if (isset($_COOKIE['teamname'])) {
		setcookie('teamname','',time()-3600);
	}
	if (isset( $_COOKIE [session_name()])) {
	setcookie(session_name(), '', time() - 3600); 
	}
	

}
session_destroy();
//forward them
$home_url = 'http://'. $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
header('Location:'.$home_url);

?>