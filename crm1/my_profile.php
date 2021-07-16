<!DOCTYPE html>
<html lang="en">
<head>
 <?php include("metatags.php"); ?>
</head>
<body>
<?php include("menu.php"); ?>
<div class="container">
  <h1>My Profile</h1>
  
  <table class="table table-bordered table-stripped">
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Action</th>
    </tr>
    <?php
require_once(__DIR__ . '/../../config.php');


   ?>
  
<tr>

  <td><?php echo $USER->firstname; ?></td>
  <td><?php  echo $USER->lastname; ?></td>
  <td><?php  echo $USER->email; ?></td>
  
<td><a href="edit_profile.php" class="btn btn-primary" onclick="return confirm('Are you sure you want to edit profile?')">Edit</a></td>
</tr>

  </table>
</div>


</body>
</html>
