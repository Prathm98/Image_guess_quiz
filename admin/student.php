<?php
session_start();
error_reporting(0);
if(isset($_SESSION['id'],$_SESSION['role'])){
	if($_SESSION['role'] != 1) header('Location:../index.php');
}else{
	header('Location:../index.php');
}
require_once '../assests/_inc/myop.php';
?>
<head>  
    <title>Admin : Student</title>  
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">        
    <link rel = "stylesheet" href = "../assests/other/materialicon.css">  
    <link rel = "stylesheet" href = "../assests/css/materialize1.min.css">  
    <script type = "text/javascript" src = "../assests/js/jquery-2.1.1.min.js"></script>             
    <script src = "../assests/js/materialize1.min.js"></script> 
</head>
<nav>
<div class="nav-wrapper">
  <a href="#" class="brand-logo left"> Crackin</a>
  <ul id="nav-mobile" class="right">
    <li><a href="index.php">Home</a></li>
    <li><a href="logout.php">logout</a></li>
  </ul>
</div>
</nav>
<br>
<?php
if(isset($_POST['delete'])){
	if(@mysqli_query($con,"DELETE FROM logindetails WHERE role=2")){
		echo "<h4 class='center'>Data deleted successfully.</h4>";
	}else{
		echo "<h4 class='center'>Unable to delete data. Please try again after sometime</h4>";		
	}
}
if(isset($_POST['delstd'])){
	$did = $_POST['delstd'];
	if(@mysqli_query($con,"DELETE FROM logindetails WHERE id='$did' AND role=2")){
		echo "<h4 class='center'>Record deleted successfully.</h4>";
	}else{
		echo "<h4 class='center'>Unable to delete Record. Please try again after sometime</h4>";		
	}
}
$msg = '';
if(isset($_POST['reg123'])){
	$unm1 = $_POST['unm1'];
	$upw1 = $_POST['upw1'];
	$ob = new myop();
	$res1 = $ob->insData($unm1, $upw1);
	if($res1 == 1){
		echo "<h5 class='green-text'>Student Added successfully.</h4>";
	}else if($res1 == -1){
		echo "<h5 class='red-text'>Username already exists!!!</h4>";
	}else{
		echo "<h5 class='red-text'>Unable to register!!!</h4>";
	}
}
?>
<div class="row" style="width: 94%; margin-left: 3%; margin-right: 3%">
    <div class="col s12 m5 l3 card">
    	<form method="POST">
    	<h5 style="text-align: center;">Add Student</h5><hr>
    	<p class="red"><?php $msg; ?></p>
    	<label>Username</label>
    	<input type="text" name="unm1" placeholder="Enter Username" required><br>
    	<label>Password</label>
    	<input type="password" name="upw1" placeholder="Enter Password" required><br>
    	<button class="waves-effect waves-light btn" name="reg123">Register<i class="material-icons right">create</i></button><br>
    	</form>
    </div>
    <div class="col s12 m7 l9 ">
<?php
if($r = @mysqli_query($con, "SELECT * FROM logindetails WHERE role=2")){
	if(@mysqli_num_rows($r) > 0){
		echo "<table class='container'>
        <thead>
          <tr>
              <th>#</th>
              <th>Username</th>
              <th>Name</th>
              <th>Branch & Year</th>
              <th>Password</th>
              <th></th>
          </tr>
        </thead><tbody>";
        $i = 1;
		while($row = @mysqli_fetch_array($r)){
			$b1 = explode('||', $row['brchyr1']);
			$b2 = explode('||', $row['brchyr2']);
			echo "<tr>
	            <td>".$i++."</td>
	            <td>".$row['uname']."</td>
	            <td>".$row['name1']."<br>".$row['name2']."</td>
	            <td>".$b1[0]." (".$b1[1]." yr)<br>".$b1[0]." (".$b1[1]." yr)</td>
	            <td>".$row['upass']."</td>
	            <td><form method='POST'><button type='submit' class='waves-effect waves-light btn-large' name='delstd' value='".$row['id']."'>Delete</button></form></td>
	          </tr>";
		}
		echo "</tbody>
		      </table>";
	}else{
		echo "<h4 class='center'>No Record Found.</h4>";	
	}
}else{
	echo "<h4 class='center'>Unable to get data. Please try again after sometime</h4>";
}
?>
</div>
<br><br>
<center>
<form method="POST">
	<button type="submit" class="waves-effect waves-light btn-large" name="delete">Delete All</button>
</form>
</center>