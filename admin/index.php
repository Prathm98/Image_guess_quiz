<?php
session_start();
if(isset($_SESSION['id'],$_SESSION['role'])){
	if($_SESSION['role'] != 1) header('Location:../index.php');
}else{
	header('Location:../index.php');
}
?>
<head>  
    <title>Admin Home</title>  
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
    <li><a href="logout.php">logout</a></li>
  </ul>
</div>
</nav>
<br><br>
<center>
<a class="waves-effect waves-light btn-large" href="student.php"><i class="material-icons right">cloud</i>Show Students</a>
<a class="waves-effect waves-light btn-large" href="test.php"><i class="material-icons right">cloud</i>Show test</a>
<a class="waves-effect waves-light btn-large" href="result.php"><i class="material-icons right">cloud</i>Results</a>