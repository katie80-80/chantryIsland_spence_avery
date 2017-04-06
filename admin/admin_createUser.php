<?php
	require_once("phpscripts/init.php");
	if(isset($_POST['submit'])){
	//echo "works";
	$fname = trim($_POST['fname']);
	$lname = trim($_POST['lname']);
	$username = trim($_POST['username']);
	$email = trim($_POST['email']);
	$level = trim($_POST['lvllist']);

		if(empty($level)) {
		$message = "set the level";
		}else{
		//echo "it's good hommie";
			$result = createUser($fname, $lname, $username, $email, $level);
			$message = $result;
		}

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
  <h1>Create A User</h1>
  <?php
 	if(!empty($message)){
 		echo $message;
 	}
 ?>
	<section class="container">
	<h2 class="hide">Create User</h2>

	<form class="adminLogForm" action="admin_createUser.php" method="post">
 	
 	<input class="formStyle adminFiled" type="text" placeholder="First Name" name="fname" value="<?php if(!empty($fname)){echo $fname;}?>">

 	<input class="formStyle adminFiled" type="text" placeholder="Last Name" name="lname" value="<?php if(!empty($lname)){echo $lname;}?>">

 	<input class="formStyle adminFiled" type="text" placeholder="Username" name="username" value="<?php if(!empty($username)){echo $username;}?>">

 	<input class="formStyle adminFiled" type="text" placeholder="Email" name="email" value="<?php if(!empty($email)){echo $email;}?>">


 	<select class="formStyle adminFiled levelList" name="lvllist">
 		<option value="">Pleas Select a user level</option>
 		<option value="2">Web Admin</option>
 		<option value="1">Employee</option>
 	</select>
 	<input class="sendBut small-8 small-pull-2 medium-6 medium-pull-3 columns" type="submit" name="submit" value="Create User">
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