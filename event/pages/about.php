<script type="text/javascript">
$(document).ready(function(){
  $('.collapsible').collapsible();
  $('#refresh').click(function(){
    $('#mainbody').html('<div class="center"><br><br><div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></div>');
    $('#mainbody').load('pages/about.php');
  });
  $('#back').click(function(){
    $('#mainbody').html('<div class="center"><br><br><div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></div>');
    $('#mainbody').load('pages/home.php');
  });
});
</script>
<div class="row">
<p class="right" style="margin-right: 2%; cursor: pointer;" id="refresh">Refresh<i class="material-icons left">refresh</i></p>
<p class="left" style="margin-left: 2%; cursor: pointer;" id="back">Back<i class="material-icons left">arrow_back</i></p>
</div>
<div class="row">
  <div class="col l4 m6 s12 center">
  <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="pages/logo.gif">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">ADROIT<i class="material-icons right">more_vert</i></span>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">ADROIT<i class="material-icons right">close</i></span>
      <p>Adroit Forum is designed to bring about positive, permanent shifts in the quality of Students. Adroit means to be skillful in all aspects .These shifts are the direct cause for a new and unique kind of knowledge.The main motive of the forum is to enhance the skills of students in every aspects. The forum organizes technical, co-curricular and extra- curricular activities for the students in the department. Students forum is run by students for the students. Adroit forum is a newly emerging forum established by the students in the year 2017. The Forum is grounded in a model of transformative learning—a way of being creative that gives students an awareness of the basic structures in which they know, think, and act. It encourages students to be professional as well as to have better moral values to contribute towards the society..</p>
    </div>
  </div>
  </div>
  <div class="col l8 m6 s12 center">
    <ul class="collapsible" style="width: 94%; margin-right: 3%; margin-left: 3%;">
    <li>
      <div class="collapsible-header">
        <i class="material-icons">developer_mode</i>
        Devloped by Team Zenith
      </div>
      <div class="collapsible-body"><p>Zenith Team is the team formed by the students for the development of some creative and innovative projects.</p></div>
    </li>
    </ul>
  </div>
</div>