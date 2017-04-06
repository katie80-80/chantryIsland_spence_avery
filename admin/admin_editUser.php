<?php
	require_once("phpscripts/init.php");

	$id = $_SESSION['users_creds'];
	$popForm = getUser($id);

	if(isset($_POST['submit'])){
	//echo "works";
	$fname = trim($_POST['fname']);
	$lname = trim($_POST['lname']);
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$email = trim($_POST['email']);

	$result = editUser($id, $fname, $lname, $username, $password, $email);
	$message = $result;
	}
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chantry Island Marine Heritage Site and Migratory Bird Sanctuary</title>
    <link rel="stylesheet" href="../css/foundation.css" />
    <link rel="stylesheet" href="../css/app.css"/>
    <link href="https://fonts.googleapis.com/css?family=Pacifico%7CRoboto%7CPlayfair+Display" rel="stylesheet">
    <script src="https://use.fontawesome.com/d0bb73139e.js"></script>
  </head>
  <body>
  <h1 class="hide">Admin Home Page</h1>
	<section class="container">

	<form class="adminLogForm" action="admin_editUser.php" method="post">

	 	<input class="formStyle adminFiled" type="text" placeholder="First Name" name="fname" value="<?php echo $popForm['user_fname']?>">

	 	<input class="formStyle adminFiled" type="text" placeholder="Last Name" name="lname" value="<?php echo $popForm['user_lname']?>">

	 	
	 	<input class="formStyle adminFiled" type="text" placeholder="Username" name="username" value="<?php echo $popForm['user_name']?>">

	 	
	 	<input class="formStyle adminFiled" type="text" placeholder="Password" name="password" value="<?php echo $popForm['user_pass']?>">

	 	<input class="formStyle adminFiled" type="text" placeholder="Email" name="email" value="<?php echo $popForm['user_email']?>">

	 	<input class="sendBut small-8 small-pull-2 medium-6 medium-pull-3 columns" type="submit" name="submit" value="Edit User">
	 </form>






<?php
include("../includes/adminFooter.html");
?>


	</section>
    <script src="../js/vendor/jquery.min.js"></script>
    <script src="../js/vendor/what-input.min.js"></script>
    <script src="../js/foundation.min.js"></script>
  </body>
</html>