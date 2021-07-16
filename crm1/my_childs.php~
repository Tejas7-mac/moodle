<!DOCTYPE html>
<html lang="en">
<head>
 <?php include("metatags.php"); ?>
</head>
<body>
<?php include("menu.php"); ?>
<div class="container">
  <h1>My Childs</h1>
  
  <table class="table table-bordered table-stripped">
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      
    
    </tr>
    <?php
require_once(__DIR__ . '/../../config.php');
$course=$DB->get_records('user',array('id'=>$key));

        

        // get all the mentees, i.e. users you have a direct assignment to
        $allusernames = get_all_user_name_fields(true, 'u');
        if ($usercontexts = $DB->get_records_sql("SELECT c.instanceid, c.instanceid, $allusernames
                                                    FROM {role_assignments} ra, {context} c, {user} u
                                                   WHERE ra.userid = ?
                                                         AND ra.contextid = c.id
                                                         AND c.instanceid = u.id
                                                         AND c.contextlevel = ".CONTEXT_USER, array($USER->id))) {

            foreach ($usercontexts as $usercontext) {
         

   ?>
  
<tr>

  <td><?php echo $usercontext->firstname; ?></td>
  <td><?php  echo $usercontext->lastname; ?></td>
  

</tr>
<?php
}
}
?>
  </table>
</div>


</body>
</html>
