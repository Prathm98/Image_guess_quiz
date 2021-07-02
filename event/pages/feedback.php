<script type="text/javascript">
$(document).ready(function(){
  $('#refresh4').click(function(){
    $('#mainbody').html('<div class="center"><br><br><div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></div>');
    $('#mainbody').load('pages/feedback.php');
  });
  $('#back4').click(function(){
    $('#mainbody').html('<div class="center"><br><br><div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></div>');
    $('#mainbody').load('pages/home.php');
  });
});
</script>
<div class="row">
<p class="right" style="margin-right: 2%; cursor: pointer;" id="refresh4">Refresh<i class="material-icons left">refresh</i></p>
<p class="left" style="margin-left: 2%; cursor: pointer;" id="back4">Back<i class="material-icons left">arrow_back</i></p>
</div>
<h1>Feedback</h1>