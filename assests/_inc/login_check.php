<?php 
require_once('myop.php');

if(function_exists('date_default_timezone_set')){
 	date_default_timezone_set("Asia/Kolkata");
}
$dt=date("Y-m-d").'|'.date("h:i:sa");
require_once('myop.php');

	if(isset($_POST['usr'],$_POST['pass'])){

		$user = $_POST['usr'];
		$pass = $_POST['pass'];

		// echo $user;
		// echo $pass;

		 $ob=new myop();	
		 echo $r = $ob->checkLogin($user,$pass);
	}
 ?>