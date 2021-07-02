<?php
session_start();
error_reporting(0);
if(isset($_SESSION['id'],$_SESSION['role'])){
  if($_SESSION['role'] != 1) header('Location:../index.php');
}else{
  header('Location:../index.php');
}
require_once '../assests/_inc/myop.php';
$errmsg = '';
$msg = ""; $msg1 = ""; $msg2 = ""; $msg3 = "";
$uploadOk = 1;
$target='';
if (isset($_POST['upload'])) {
    $image = $_FILES['image']['name'];
     $target = "../event/data/".basename($image);
     $ans = $_POST['ans'];
     $eventnm = $_POST['eventnm'];

    //echo file_exists($target);
    if (file_exists($target)) {
        $msg3 = "Sorry, file already exists. Please rename file.";
        $uploadOk = 0;
    }
    
    if ($_FILES["image"]["size"] == 0 && $_FILES["image"]["size"] == 0) {
        $msg2 = "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        $msg = "Sorry, your file was not uploaded.";
    } else{
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {   
          if(@mysqli_query($con, "INSERT INTO data (img, ans, tid) VALUES ('$target','$ans','$eventnm')")){
            $msg = "File successfully uploaded.";
          }else{
            unlink($target);
          }
       }
       else{ 
          $msg = "Failed to upload image";
       }
    }
  }

if(isset($_POST['delpic'])){
  $delarr = explode('||||', $_POST['delpic']);
  $delid = $delarr[1];
  if(@mysqli_query($con, "DELETE FROM data WHERE id='$delid'")){
    unlink($delarr[0]);
    $errmsg = '<h4 class="center">Deleted successfully.</h4>';
  }else{
    $errmsg = '<h4 class="center">Unable to delete. Please try again later.</h4>';
  }
}
?>
<head>  
  <title>Admin : Upload</title>  
  <meta name = "viewport" content = "width = device-width, initial-scale = 1">        
  <link rel = "stylesheet" href = "../assests/other/materialicon.css">  
  <link rel = "stylesheet" href = "../assests/css/materialize1.min.css">  
  <script type = "text/javascript" src = "../assests/js/jquery-2.1.1.min.js"></script>             
  <script src = "../assests/js/materialize1.min.js"></script> 
  <style type="text/css">
    .sh{ display: block; }
    .hd{ display: none; }
  </style>
  <script type="text/javascript">
    $(document).ready(function(){
      tmp = $('#drpdwn').val();
      $('.'+tmp).addClass('sh').removeClass('hd');
      $('#drpdwn').change(function(){
        $('.abc').addClass('hd').removeClass('sh');
        tmp1 = $('#drpdwn').val();
        $('.'+tmp1).addClass('sh').removeClass('hd');
      });
    });
  </script>
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
  if(@mysqli_num_rows($r) > 0){?>
  <div class="row" style="width: 94%; margin-left: 3%; margin-right: 3%">
    <div class="col s12 m5 l4 card">
      <form method="POST" enctype="multipart/form-data">
        <h4 style="text-align: center;">Add Question</h4><hr>
        <label>Select Test</label>
        <select class="browser-default" name="eventnm">
<?php
        while($row = @mysqli_fetch_array($r)){
          echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
        }
?>          
        </select><br>
        <input type="file" name="image" required accept="image/*" /><br>
        <input type="text" name="ans" required placeholder="Enter Answer"><br>
        <button type="submit" class="waves-effect waves-light btn"  name="upload">Submit<i class="material-icons right">send</i></button>
      </form>
<?php
  echo $msg;
  echo $msg1."<br>";
  echo $msg2."<br>";
  echo $msg3."<br>";
?>      
    </div>
    <div class="col s12 m7 l8">
<?php
echo $errmsg;
if(($r1 = @mysqli_query($con, "SELECT d.id, d.img, d.ans, t.name, d.tid FROM data d, tests t WHERE d.tid=t.id")) && ($r2 = @mysqli_query($con, "SELECT id, name FROM tests"))){
  if(@mysqli_num_rows($r1) > 0){
    echo '<label>View Questions from:</label><select class="browser-default" id="drpdwn"><option value="abc">All Questions</option>';
    while($row2 = @mysqli_fetch_array($r2)){
      echo '<option value="abcd'.$row2['id'].'">'.$row2['name'].'</option>';
    }
    echo '</select>';
    echo '<div class="row">';
    while($row1 = @mysqli_fetch_array($r1)){
      echo '<div class="col l3 m2 s12 hd abc abcd'.$row1[4].'">
          <div class="card">
            <div class="card-image">
              <img src="'.$row1[1].'" style="height:200px">
              <span class="card-title">'.$row1[3].'</span>
              <form method="POST"><button type="submit" value="'.$row1[1]."||||".$row1[0].'" class="btn-floating halfway-fab waves-effect waves-light red" name="delpic"><i class="material-icons">delete</i></button></form>
            </div>
            <div class="card-content">
              <p>'.$row1[2].'</p>
            </div>
          </div>
        </div>';
    }
    echo '</div>';
  }else{
    echo "<h4 class='center'>No Record Found.</h4>"; 
  }
}else{
  echo "<h4 class='center'>Unable to get data. Please try again after sometime.</h4>";
}
?>      
    </div>
  </div>
<?php  
  }else{
    echo "<h4>No Record Found.</h4>"; 
  }
}else{
  echo "<h4>Unable to get data. Please try again after sometime.</h4>";
}
?>