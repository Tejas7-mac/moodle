<!DOCTYPE html>
<html lang="en">
<head>
 <?php include("metatags.php"); ?>
</head>
<body>
<?php include("menu.php"); ?>
<div class="container">
  <h1>Courses</h1>
  <?php
require_once(__DIR__ . '/../../config.php');

global $DB;
$courses = $DB->get_records('course');

   ?>
    <ol>
<?php
   foreach($courses as $course)
   {
?>
      <li><?php echo $course->fullname; ?></li>
<?php
}
?>
    </ol>
    
  
</div>


</body>
</html>
