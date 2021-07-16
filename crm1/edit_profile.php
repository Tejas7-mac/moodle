<!DOCTYPE html>
<html lang="en">
<head>
 <?php include("metatags.php"); ?>
</head>
<body>
<?php include("menu.php"); ?>
<div class="container">
  <br><br>
  
  <h1>Edit Profile</h1>
<?php
require_once(__DIR__ . '/../../config.php');

global $DB;

?>
  <form class="" action="update_profile.php" method="post">
  
   
  <div class="mb-3">
    <label for="firstname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="firstname" name="firstname" required="" value="<?php echo $USER->firstname; ?>" />   
  </div>
   <div class="mb-3">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lastname" name="lastname" required=""  value="<?php echo $USER->lastname; ?>"/>   
  </div>
   <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="<?php echo $USER->email; ?>"/>   
  </div>
   
  <button type="submit" class="btn btn-primary">Update Profile</button>
</form>
</div>


</body>
</html>
