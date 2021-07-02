<?php
session_start();
require_once('dbcon.inc.php');

$op = new DBConnect();
$con=$op->getConnect();

class myop{
	function checkLogin($user,$pass){
		global $con;
		if($res=@mysqli_query($con,"SELECT * from logindetails WHERE uname = '$user' AND upass = '$pass'")){
			if(@mysqli_num_rows($res) == 1){
				while($row = @mysqli_fetch_array($res)){
					$_SESSION['id'] = $row['id'];
					$_SESSION['uname'] = $row['uname'];
					$_SESSION['role'] = $row['role'];
					return $row['role'];
				}
			}else{
				return -1;
			}
		}else
			return -2;
	}
	function insData($user,$pass){
		global $con;
		if($r1 = @mysqli_query($con, "SELECT id from logindetails WHERE uname = '$user'")){
			if(@mysqli_num_rows($r1)>0){
				return -1;
			}else{
				if(@mysqli_query($con, "INSERT INTO logindetails(uname, upass) VALUES ('$user','$pass')")){
					if(@mysqli_query($con, "INSERT INTO results(lid) VALUES ('$user')"))
						return 1;
					else
						return -2;
				}else{
					return -2;
				}
			}
		}else{
			return -2;
		}
	}
}
?>
