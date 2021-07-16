<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("metatags.php"); ?>
</head>
<body>
<?php include("menu.php"); ?>
  
<div class="container">
  <h1>My Enrolled Courses</h1>
  <?php
require_once(__DIR__ . '/../../config.php');

global $DB;
$courses=$USER->enrol["enrolled"];

   ?>
    <ol>
<?php
   foreach($courses as $key=>$value)
   {
    $course=$DB->get_record('course',array('id'=>$key));
?>
      <li><?php echo $course->fullname; ?></li>
<?php
}
?>
    </ol>
    
  
</div>


</body>
</html>
