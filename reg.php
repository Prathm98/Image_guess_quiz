<?php
require_once 'assests/_inc/myop.php';
?>
<html>  
  <head>  
    <title>ADROIT - CRACKIN</title>  
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">        
    <link rel = "stylesheet" href = "assests/other/materialicon.css">  
    <link rel = "stylesheet" href = "assests/css/materialize1.min.css">  
    <script type = "text/javascript" src = "assests/js/jquery-2.1.1.min.js"></script>             
    <script src = "assests/js/materialize1.min.js"></script> 
    <style type="text/css">
      body, html {
          height: 100%;
      }
      .bg { 
          background-image: url(assests/img/1.jpg);
          height: 100%; 
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
      }
    </style>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#reg').click(function(){
          $('.err').empty();
          uname = $.trim($('#uname').val());
          upass = $.trim($('#upass').val());
          flag = 0;
          if(uname == null || uname == '') flag = 1;
          if(upass == null || upass == '') flag = 1;
          if(flag == 0){
            $.post('assests/_inc/reg_user.php',{usr:uname,pass:upass},function(data){
              if(data == 1){
                $('.err').html('<div style="color:green; font-size:12px">Registered Successfully!!!</div>');
                $('#uname').val("");
                $('#upass').val("");
              }else if(data == -1){
                $('.err').html('<div style="color:red; font-size:12px">Username already Exist!!!</div>');    
              }else{
                $('.err').html('<div style="color:red; font-size:12px">Unable to Register.</div>');    
              }
            });
          }else{
            $('.err').html('<div style="color:red; font-size:12px">* All fields are Required.</div>');
          }
        });
      });
    </script>
  </head>
  <body class="bg" style="background-color: #104f5e">
    <br><br><br>
    <div class="row">
      <div class="col s1 m3 l4"></div>
      <div class="col s10 m6 l4">
        <div class="card z-depth-3">
          <div class="card-content">
            <div class="col l12 m12 s12" style="border-bottom: 1px solid #ddd; text-align: center; margin-bottom: 10px;">
              <h4>REGISTER</h4>
            </div>
            <div class="row">
              <div class="input-field col s12 l12 m12" >
                <i class="material-icons prefix ">account_circle</i>
                <input id="uname" type="text" class="validate">
                <label for="uname" data-error="invalid username" data-success="Thank you!">Username</label>
                <p id="error_uname"></p>
              </div>
              <div class="input-field col s12 l12 m12">
                <i class="material-icons prefix">vpn_key</i>
                <input id="upass" type="password" class="validate" >
                <label for="upass" data-error="" data-success="Done!">Password</label>
              </div>
              <div class="input-field col s12 l12 m12 err"></div>
            </div>
            <div style="text-align: right;"><a class="waves-effect waves-light btn" id="reg">Register<i class="material-icons right">create</i></a></div>
            <div style="padding: 10px; text-align: center; padding-bottom: 20px">
        <div class="divider"></div>
        <h6 style="text-align: center; color: gray">OR</h6>
        <a class="waves-effect waves-light btn" href="index.php">Login<i class="material-icons right">chevron_right</i></a>
      </div>
          </div>
        </div>
      </div>
      <div class="col s1 m3 l4"></div>
    </div>
  </body>  
</html>  