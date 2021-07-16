<!DOCTYPE html>
<html lang="en">
<head>
 <?php include("metatags.php"); ?>
</head>
<body>
<?php include("menu.php"); ?>
<div class="container">
  <br><br>
    <a href="meetings.php" class="btn btn-primary pull-right">View All Meetings</a>
  <h1>Create Meeting</h1>
<?php
require_once(__DIR__ . '/../../config.php');

global $DB;

?>
<script>
function selcourse() {
  var course_id=document.getElementById("course_id").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("stid").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "get_participants.php?course_id="+course_id, true);
  xhttp.send();
}
function selectAll(source) {
    checkboxes = document.getElementsByName('student_id[]');
    for(var i in checkboxes)
      checkboxes[i].checked = source.checked;
  }
</script>
  <form class="" action="save_meeting.php" method="post">
  
   
  <div class="mb-3">
    <label for="title" class="form-label">Meeting Title</label>
    <input type="text" class="form-control" id="title" name="title" required="" />   
  </div>
   <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" id="description" name="description" required=""></textarea>   
  </div>
   <div class="mb-3">
    <label for="mdate" class="form-label">Meeting Date</label>
    <input type="date" class="form-control" id="mdate" name="mdate"/>   
  </div>
   <div class="mb-3">
    <label for="mtime" class="form-label">Meeting Time</label>
    <input type="time" class="form-control" id="mtime" name="mtime" required="" />   
  </div>
  <div class="mb-3">
    <label for="course_id" class="form-label">Course</label>
    <select class="form-control" id="course_id" name="course_id" required onchange="selcourse()">
      <option value="">Select Course</option>
 <?php

$courses = $DB->get_records('course');

   
   foreach($courses as $course)
   {
?>
      <option value="<?php echo $course->id; ?>"><?php echo $course->fullname; ?></option>

<?php
}
?>
    </select>   
  </div>
  <div class="mb-3">
    <label for="student_id" class="form-label">Select Participants </label>
    <table class="table table-bordered table-stripped">
      <thead>
        <th><input type="checkbox" name="all" id="chkall" onclick="selectAll(this)"></th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
      </thead>
      <tbody id="stid">

      </tbody>
    </table>
  </div>
  <button type="submit" class="btn btn-primary">Save Meeting</button>
</form>
</div>


</body>
</html>
