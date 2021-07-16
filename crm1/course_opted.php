<!DOCTYPE html>
<html lang="en">
<head>
<?php include("metatags.php"); ?>
</head>
<body>
<?php include("menu.php"); ?>
<div class="container">
 
  <?php
require_once(__DIR__ . '/../../config.php');

global $DB;
$courses = $DB->get_records('course');
$course_names=array();
$num_students=array();
   
$i=0;
$x=10;
$dataPoints = array();
   foreach($courses as $course)
   {
       $course_names[$i]=$course->fullname;
       $role = $DB->get_record('role', array('shortname' => 'student'));
       $context = get_context_instance(CONTEXT_COURSE,$course->id);
       $students = get_role_users($role->id, $context);
       $num_students[$i]=count($students);
       $dataPoint = array("x"=> $x, "y"=> count($students), "indexLabel"=>$course->fullname);
       array_push($dataPoints, $dataPoint);
       $i++;
       $x=$x+10;
    }
?>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  exportEnabled: true,
  theme: "light1", // "light1", "light2", "dark1", "dark2"
  title:{
    text: "Course Enrollment"
  },
  axisY:{
    includeZero: true
  },
  data: [{
    type: "column", //change type to bar, line, area, pie, etc
    //indexLabel: "{y}", //Shows y value on all Data Points
    indexLabelFontColor: "#5A5757",
    indexLabelPlacement: "outside",   
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    
  
</div>



</body>
</html>
