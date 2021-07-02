<?php
session_start();
if(isset($_SESSION['id'],$_SESSION['role'])){
	if($_SESSION['role'] != 2) header('Location:../index.php');
}else{
	header('Location:../index.php');
}
?>
<head>  
    <title>Home</title>  
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">        
    <link rel = "stylesheet" href = "../assests/other/materialicon.css">  
    <link rel = "stylesheet" href = "../assests/css/materialize1.min.css">  
    <script type = "text/javascript" src = "../assests/js/jquery-2.1.1.min.js"></script>             
    <script src = "../assests/js/materialize1.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
    	$('#mainbody').html('<div class="center"><br><br><div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></div>');
    	$('#mainbody').load('pages/home.php');
    });
    </script> 
</head>
<nav>
<div class="nav-wrapper">
  <a href="#" class="brand-logo left"> Crackin</a>
  <ul id="nav-mobile" class="right">
    <li><a href="logout.php">logout</a></li>
  </ul>
</div>
</nav>
<div id="mainbody"></div>