<?php
require_once(__DIR__ . '/../../config.php');
require_once($CFG->libdir.'/moodlelib.php');
global $DB;
require_login();


$luser=$USER->firstname." ".$USER->lastname;
$lemail=$USER->email;
$luname=$USER->username;
$queryrole  = $DB->get_records('role_assignments',array('userid'=>$USER->id));
foreach($queryrole as $qrole){ }
$role_id=$qrole->roleid;
$context_id=$qrole->contextid;
$context = get_context_instance(CONTEXT_USER,$USER->id);
//print_r($context);
$srole = $DB->get_record('role', array('shortname' => 'student'));
$students = get_role_users($srole->id, $context);
//print_r($students);
$role  = $DB->get_records('role',array('id'=>$role_id));
$role=$role[$role_id];
$urole=$role->shortname;

?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">MOODLE CRM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
<style type="text/css">
  .navbar-nav .topbar-menu {
    position: relative;
    z-index: 1;
}
.float-end {
    float: right!important;
}
.nav-user {
    padding: calc(31px / 2) 20px calc(31px / 2) 57px!important;
    text-align: left!important;
    position: relative;
    background-color: aliceblue;
    border: 1px solid #f1f3fa;
    border-width: 0 1px;
    min-height: 70px;
}
.navbar-custom .topbar-menu .nav-link {
    padding: 0;
    min-width: 32px;
    display: block;
    text-align: center;
    margin: 0 10px;
    position: relative;
}
.nav-user .account-user-avatar {
    position: absolute;
    top: calc(38px / 2);
    left: 15px;
}
.nav-user .account-user-name {
    display: block;
    font-weight: 600;
}
.nav-user .account-position {
    display: block;
    font-size: 12px;
    margin-top: -3px;
}
*, ::after, ::before {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
.dropdown-menu-animated.dropdown-menu-end[style] {
    left: auto!important;
    right: 0!important;
}

.dropdown-menu-animated.show {
    top: 100%!important;
}
.dropdown-menu.show {
    display: block;
}
.dropdown-menu-animated {
    -webkit-animation-name: DropDownSlide;
    animation-name: DropDownSlide;
    -webkit-animation-duration: .3s;
    animation-duration: .3s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
    position: absolute;
    margin: 0;
    z-index: 1000;
}
.dropdown-menu {
    -webkit-box-shadow: 0 0 35px 0 rgb(154 161 171 / 15%);
    box-shadow: 0 0 35px 0 rgb(154 161 171 / 15%);
}
.profile-dropdown {
    min-width: 170px;
}
.dropdown-menu-end {
    --bs-position: end;
}
.dropdown-menu {
    position: absolute;
    z-index: 1000;
    display: none;
    min-width: 10rem;
    padding: .25rem 0;
    margin: 0;
    font-size: .9rem;
    color: #6c757d;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #e7ebf0;
    border-radius: .25rem;
}
    background-color: transparent;
    padding: 15px 20px;
}
.dropdown-header {
    display: block;
    padding: .5rem 1.5rem;
    margin-bottom: 0;
    font-size: .875rem;
    color: inherit;
    white-space: nowrap;
}
.notification-list .topbar-dropdown-menu .notify-item {
    padding: 7px 20px;
}
.notification-list .notify-item {
    padding: 10px 20px;
}
.dropdown-item {
    display: block;
    width: 100%;
    padding: .375rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #6c757d;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
}

</style>
<ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
<?php
if(is_siteadmin())
{

?>      
      <li class="nav-item">
        <a class="nav-link" href="courses.php">Courses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="meetings.php">Meetings</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="course_opted.php">Course Opted</a>
      </li>  
<?php
}
else if($urole=="student")
{
?>
<li class="nav-item">
        <a class="nav-link" href="my_courses.php">My Courses</a>
      </li>

      
<?php
}
else if($urole=="parent")
{
?>
<li class="nav-item">
        <a class="nav-link" href="my_childs.php">My Childs</a>
      </li>
<?php
}
 
?>      

    </ul>
</div>  
  <ul class="list-unstyled topbar-menu float-end mb-0">
      <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    
                                    <span>
                                        <span class="account-user-name"><?php echo $luser; ?></span>
                                        <?php
                                        if(is_siteadmin())
                                        $urole="Admin";
                                        ?>
                                        <span class="account-position"><?php echo $urole; ?></span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="my_profile.php" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle me-1"></i>
                                        <span>My Profile</span>
                                    </a>


                                    <!-- item-->
                                    <a href="../../login/logout.php?sesskey=<?php echo $USER->sesskey; ?>" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout me-1"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </li>
                          </ul>
</nav>
