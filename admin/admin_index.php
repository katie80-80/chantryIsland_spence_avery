<?php
require_once("phpscripts/init.php");
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

<h2 class="adminHeading">Welcome to your Admin Panel, <?php echo $_SESSION['users_fname']; ?>. </h2> 
<p class="adminP">The last time you logged on was: <?php echo $_SESSION['users_date'];?></p>

<div class="row">
<h3>Edit Pages</h3>
  <a class="adminPgBtn small-12 medium-3 medium-push-3 columns" href="admin_editCopy.php">SITE COPY</a>
  <a class="adminPgBtn small-12 medium-3 medium-push-3 end columns" href="admin_editVolunteers.php">VOLUNTEERS</a>
</div>

<div class="row">
  <a class="adminPgBtn small-12 medium-3 medium-push-3 columns" href="admin_editPhotos.php">PHOTOS</a>
  <a class="adminPgBtn small-12 medium-3 medium-push-3 end columns" href="https://calendar.google.com/calendar/render?tab=oc&pli=1#main_7" target="_blank">CALENDAR</a>
</div>

<div class="row">
  <a class="adminBut small-12 medium-2 medium-push-3 columns" href="admin_createUser.php">Create A User</a>
  <a class="adminBut small-12 medium-2 medium-push-3 columns" href="admin_editUser.php">Edit Account</a>
  <a class="adminBut small-12 medium-2 medium-push-3 end columns" href="phpscripts/caller.php?caller_id=logout">Sign Out</a>
</div>

<?php
include("../includes/adminFooter.html");
?>


	</section>
    <script src="../js/vendor/jquery.min.js"></script>
    <script src="../js/vendor/what-input.min.js"></script>
    <script src="../js/foundation.min.js"></script>
  </body>
</html>