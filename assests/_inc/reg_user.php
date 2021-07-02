<?php 
require_once('myop.php');
	if(isset($_POST['usr'],$_POST['pass'])){

		$user = $_POST['usr'];
		$pass = $_POST['pass'];

		// echo $user;
		// echo $pass;

		 $ob=new myop();	
		 echo $r = $ob->insData($user,$pass);
	}
?>