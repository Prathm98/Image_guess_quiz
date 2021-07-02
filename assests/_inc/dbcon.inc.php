<?php
	class DBConnect{
		function getConnect(){
			$con=@mysqli_connect('localhost','root','','crackin') or die('Something went wrong');
			return $con;
		}
	}
?>