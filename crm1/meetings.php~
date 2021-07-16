<!DOCTYPE html>
<html lang="en">
<head>
 <?php include("metatags.php"); ?>
</head>
<body>
<?php include("menu.php"); ?>
<div class="container">
  <h1>Meetings</h1>
  <a href="new_meeting.php" class="btn btn-primary pull-right">New Meeting</a>
  <table class="table table-bordered table-stripped">
    <tr>
      <th>S.No</th>
      <th>Course</th>
      <th>Title</th>
      <th>Description</th>
      <th>Date</th>
      <th>Time</th>
      <th>Action</th>
    </tr>
    <?php
require_once(__DIR__ . '/../../config.php');

global $DB;
$meetings = $DB->get_records('local_tejas_meeting');

   ?>
    <ol>
<?php
$sn=1;
$cdate=date('Y-m-d');
   foreach($meetings as $meeting)
   {
    $date1=date_create($cdate);
$date2=date_create($meeting->meetingdate);
$diff=date_diff($date1,$date2);
    if($diff->invert==0)
    {

       $course=$DB->get_record('course', ['id' => $meeting->course_id]);
?>
<tr>
  <td><?php echo $sn++; ?></td>
  <td><?php echo $course->fullname; ?></td>
  <td><?php  echo $meeting->meetingtitle; ?></td>
  <td><?php  echo $meeting->meetingdescription; ?></td>
  <td><?php  echo $meeting->meetingdate; ?></td>
<td><?php  echo $meeting->meetingtime; ?></td>
<td><a href="delete_meeting.php?mid=<?php echo $meeting->id; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this meeting?')">Delete</a></td>
</tr>
<?php
  }
}
?>
  </table>
</div>


</body>
</html>
