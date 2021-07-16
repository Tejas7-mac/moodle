<?php
require_once(__DIR__ . '/../../config.php');
require_once($CFG->libdir.'/moodlelib.php');
$fromUser = get_admin();
require_login();
global $DB;
$course_id=$_POST["course_id"];
$title=$_POST["title"];
$description=$_POST["description"];
$mdate=$_POST["mdate"];
$mtime=$_POST["mtime"];
 $recordtoinsert = new stdClass();
    $recordtoinsert->course_id = $course_id;
    $recordtoinsert->meetingtitle = $title;
    $recordtoinsert->meetingdescription = $description;
    $recordtoinsert->meetingdate = $mdate;
    $recordtoinsert->meetingtime = $mtime;
    $DB->insert_record('local_tejas_meeting', $recordtoinsert);
 $subject=$title;
	$messageText="";
	$messageHtml=$description."<br><b>Meeting Date:</b>$mdate <b>Time:</b> $mtime";
	$completeFilePath="";
	$nameOfFile="";   
 $role = $DB->get_record('role', array('shortname' => 'student'));
$context = get_context_instance(CONTEXT_COURSE,$course_id);
$students = get_role_users($role->id, $context);
foreach($students as $student)
{
	$toUser=$student;
		
//$fromUser = $DB->get_record('user', array('id'=>2), '*', MUST_EXIST);
//print_r($fromUser);
//$toUser = $DB->get_record('user', array('id'=>3), '*', MUST_EXIST);
//print_r($toUser);
email_to_user($toUser, $fromUser, $subject, $messageText, $messageHtml, $completeFilePath, $nameOfFile, true);
}   
?>
<script type="text/javascript">
	alert("Meeting Added Successfully");
	document.location="meetings.php";
</script>