<script type="text/javascript">
$(document).ready(function(){
	$('#about').click(function(){
		$('#mainbody').html('<div class="center"><br><br><div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></div>');
    	$('#mainbody').load('pages/about.php');
	});
	$('#event').click(function(){
		$('#mainbody').html('<div class="center"><br><br><div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></div>');
    	$('#mainbody').load('pages/event.php');
	});
	$('#profile').click(function(){
		$('#mainbody').html('<div class="center"><br><br><div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></div>');
    	$('#mainbody').load('pages/profile.php');
	});
	$('#feedback').click(function(){
		$('#mainbody').html('<div class="center"><br><br><div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></div>');
    	$('#mainbody').load('pages/feedback.php');
	});
});
</script>
<ul class="collection">
    <a href="#" style="color: #150"><li id="event" class="collection-item avatar">
      <i class="material-icons circle">event_available</i>
      <span class="title">Competitions</span>
      <p>Click to Select<br>
      	Event
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li></a>
    <a href="#" style="color: #150"><li id="profile" class="collection-item avatar">
      <i class="material-icons circle green ">account_box</i>
      <span class="title">Profile Details</span>
      <p>Click to View<br>
         or to Edit 
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li></a>
    <a href="#" style="color: #150"><li id="feedback" class="collection-item avatar">
      <i class="material-icons circle red">feedback</i>
      <span class="title">Feedback</span>
      <p>Click to submit <br>
         your response
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li></a>
    <a href="#" style="color: #150"><li id="about" class="collection-item avatar">
      <i class="material-icons circle blue">people_outline</i>
      <span class="title">About</span>
      <p>Click to know <br>
         about us.
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li></a>
  </ul>