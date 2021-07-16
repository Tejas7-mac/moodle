<?php
require_once(__DIR__ . '/../../config.php');
require_once($CFG->libdir.'/moodlelib.php');
$fromUser = get_admin();
print_r($fromUser);
require_login();
global $DB;
$course_id=2;
$role = $DB->get_record('role', array('shortname' => 'student'));
$context = get_context_instance(CONTEXT_COURSE,$course_id);
$students = get_role_users($role->id, $context);
foreach($students as $student)
{
	$toUser=$student;
	print_r($toUser);
	$subject="Test Mail1";
	$messageText="Mail body1";
	$messageHtml="";
	$completeFilePath="";
	$nameOfFile="";
//$fromUser = $DB->get_record('user', array('id'=>2), '*', MUST_EXIST);
//print_r($fromUser);
//$toUser = $DB->get_record('user', array('id'=>3), '*', MUST_EXIST);
//print_r($toUser);
email_to_user($toUser, $fromUser, $subject, $messageText, $messageHtml, $completeFilePath, $nameOfFile, true);
}

 
?>