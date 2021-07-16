<?php
require_once(__DIR__ . '/../../config.php');
?>
<?php
global $DB;
$course_id=$_REQUEST["course_id"];
$role = $DB->get_record('role', array('shortname' => 'student'));
$context = get_context_instance(CONTEXT_COURSE,$course_id);
$students = get_role_users($role->id, $context);
foreach($students as $student)
{
	?>
	<tr>

	<td><input type="checkbox" name="student_id[]" id="student_id" value="<?php echo $student->id; ?>"/></td>
	<td><?php echo $student->firstname; ?></td>
	<td><?php echo $student->lastname; ?></td>
	<td><?php echo $student->email; ?></td>
</tr>
	<?php
}
?>