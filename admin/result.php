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
    <title>Admin : Result</title>  
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
if($r = @mysqli_query($con, "SELECT * FROM tests")){
	if(@mysqli_num_rows($r) > 0){
		echo "<table class='container'>
        <thead>
          <tr>
              <th>#</th>
              <th>Name</th>
              <th>time</th>
          </tr>
        </thead><tbody>";
		while($row = @mysqli_fetch_array($r)){
			$i = 1;
			echo "<tr>
	            <td>".$i++."</td>
	            <td>".$row['name']."</td>
	            <td>".$row['time']."</td>
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