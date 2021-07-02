<script type="text/javascript">
$(document).ready(function(){
  $('#refresh2').click(function(){
    $('#mainbody').html('<div class="center"><br><br><div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></div>');
    $('#mainbody').load('pages/profile.php');
  });
  $('#back2').click(function(){
    $('#mainbody').html('<div class="center"><br><br><div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></div>');
    $('#mainbody').load('pages/home.php');
  });
});
</script>
<div class="row">
<p class="right" style="margin-right: 2%; cursor: pointer;" id="refresh2">Refresh<i class="material-icons left">refresh</i></p>
<p class="left" style="margin-left: 2%; cursor: pointer;" id="back2">Back<i class="material-icons left">arrow_back</i></p>
</div>
<h5 class="row center">Profile Details</h5>
<div class="row" style="width: 94%; margin-left: 3%; margin-right: 3%">
    <div class="input-field col l12 s12 m12">
      <i class="material-icons prefix">account_circle</i>
      <input id="last_name" type="text" class="validate">
      <label for="last_name">User Name</label>
    </div>
    <div class="input-field col l6 s12 m12">
      <i class="material-icons prefix">person</i>
      <input id="last_name" type="text" class="validate">
      <label for="last_name">Name (Student 1)</label>
    </div>
    <div class="col l3 s6 m6">
	    <select class="browser-default">
	      <option value="" disabled selected>Branch</option>
	      <option value="1">Option 1</option>
	      <option value="2">Option 2</option>
	      <option value="3">Option 3</option>
	    </select>
	</div>
	<div class="col l3 s6 m6">
	    <select class="browser-default">
	      <option value="" disabled selected>Year</option>
	      <option value="1">Option 1</option>
	      <option value="2">Option 2</option>
	      <option value="3">Option 3</option>
	    </select>
	</div>
    <div class="input-field col l6 s12 m12">
      <i class="material-icons prefix">person</i>
      <input id="last_name" type="text" class="validate">
      <label for="last_name">Name (Student 2)</label>
    </div>
    <div class="col l3 s6 m6">
	    <select class="browser-default">
	      <option value="" disabled selected>Branch</option>
	      <option value="1">Option 1</option>
	      <option value="2">Option 2</option>
	      <option value="3">Option 3</option>
	    </select>
	</div>
	<div class="col l3 s6 m6">
	    <select class="browser-default">
	      <option value="" disabled selected>Year</option>
	      <option value="1">Option 1</option>
	      <option value="2">Option 2</option>
	      <option value="3">Option 3</option>
	    </select>
	</div>
</div>