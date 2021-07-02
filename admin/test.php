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
    <title>Admin : Test</title>  
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
if (isset($_POST['name'],$_POST['time'])) {
	$nm = $_POST['name'];
	$tm = $_POST['time'];
	$nmtm = $_POST['name']."_tm";
	if(@mysqli_query($con, "INSERT INTO tests(name, duration)VALUES('$nm', '$tm')")){
		if((@mysqli_query($con, "ALTER TABLE `results`  ADD `$nm` INT NOT NULL DEFAULT '0'")) && (@mysqli_query($con, "ALTER TABLE `results`  ADD `$nmtm` INT NOT NULL DEFAULT '0'"))){
			echo "<h4>Test added successfully.</h4>";
		}else{
			@mysqli_query($con,"DELETE FROM `tests` WHERE name='$nm'");
			echo "<h4>Unable to add test. Please try again after sometime</h4>";	
		}
	}else{
		echo "<h4>Unable to add test. Please try again after sometime</h4>";
	}
}
if(isset($_POST['deltest'])){
	$did = explode("||",$_POST['deltest']);
	$did1 = $did[0];
	$did2 = $did[1];
	$did3 = $did[1]."_tm";
	if(@mysqli_query($con, "DELETE FROM tests WHERE id='$did1'")){
		@mysqli_query($con, "ALTER TABLE `results` DROP `$did2`");
		@mysqli_query($con, "ALTER TABLE `results` DROP `$did3`");
		echo "<h4>Test Deleted successfully.</h4>";
	}else{
		echo "<h4>Unable to delete test. Please try again after sometime</h4>";
	}	
}
?>
<div class="row" style="width: 94%; margin-left: 3%; margin-right: 3%">
    <div class="col s12 m5 l4 card">
	<form method="POST">
		<h4 style="text-align: center;">Add Test</h4>
		<input type="text" name="name" required placeholder="Test name (Should not contain any spaces)"><br>
		<input type="number" name="time" required placeholder="Test Duration (In Minutes)" min="0"><br>
		<button type="submit" class="waves-effect waves-light btn" name="submit">Submit<i class="material-icons right">send</i></button>
	</form>
	</div>
	<div class="col s12 m7 l8">
<?php
if($r = @mysqli_query($con, "SELECT * FROM tests")){
	if(@mysqli_num_rows($r) > 0){
		echo "<table class='container'>
        <thead>
          <tr>
              <th>#</th>
              <th>Name</th>
              <th>Time</th>
              <th><a class='waves-effect waves-light btn' href='upload.php'>Manage Test Questions<i class='material-icons right'>library_books</i></a></th>
          </tr>
        </thead><tbody>";
		while($row = @mysqli_fetch_array($r)){
			$i = 1;
			echo "<tr>
	            <td>".$i++."</td>
	            <td>".$row['name']."</td>
	            <td>".$row['duration']."</td>
	            <td>";
	            echo "<form method='POST'><button class='waves-effect waves-light btn' type='submit' name='deltest' value='".$row['id']."||".$row['name']."'>Delete<i class='material-icons right'>delete</i></button></form>";	            
	            echo "</td>
	          </tr>";
		}
		echo "</tbody>
		      </table>";
	}else{
		echo "<h4>No Record Found.</h4>";	
	}
}else{
	echo "<h4>Unable to get data. Please try again after sometime</h4>";
}
?>
	</div>
</div>