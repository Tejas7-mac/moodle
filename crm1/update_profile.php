<?php
require_once(__DIR__ . '/../../config.php');
require_once($CFG->libdir.'/moodlelib.php');
$fromUser = get_admin();
require_login();
global $DB;
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$USER->firstname=$firstname;
$USER->lastname=$lastname;
$USER->email=$email;
$DB->update_record('user',$USER,false);
?>
<script type="text/javascript">
	alert("Profile Updated Successfully");
	document.location="my_profile.php";
</script>