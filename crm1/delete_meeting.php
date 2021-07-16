<?php
require_once(__DIR__ . '/../../config.php');

global $DB;

$mid=$_REQUEST["mid"];
$table = "local_tejas_meeting";
$result= $DB->delete_records($table, array('id'=>$mid));
?>
<script type="text/javascript">
	alert("Meeting deleted successfully");
	document.location="meetings.php";
</script>