<?php
require_once("phpscripts/init.php");
//confirm_logged_in(); // uncomment for checking css
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
  <a class="adminPgBtn small-12 medium-3 medium-push-3 columns" href="#">HOME</a>
  <a class="adminPgBtn small-12 medium-3 medium-push-3 end columns" href="#">TOURS</a>
</div>

<div class="row">
  <a class="adminPgBtn small-12 medium-3 medium-push-3 columns" href="#">VOLUNTEERS</a>
  <a class="adminPgBtn small-12 medium-3 medium-push-3 end columns" href="#">CONTACT</a>
</div>

<div class="row">
  <a class="adminBut small-12 medium-2 medium-push-3 columns" href="admin_createUser.php">Create A User</a>
  <a class="adminBut small-12 medium-2 medium-push-3 columns" href="admin_editUser.php">Edit Account</a>
  <a class="adminBut small-12 medium-2 medium-push-3 end columns" href="phpscripts/caller.php?caller_id=logout">Sign Out</a>
</div>



   <footer class="footer row">

    <div class="socialMedia row">
  		<a href="https://www.facebook.com/MarineHeritageSociety/?fref=ts">
        <img class="small-2 small-offset-2 medium-1 medium-offset-4 columns" src="../img/facebook.jpg" alt="facebook">
      </a>

  		<a href="https://www.youtube.com/channel/UC5BwiLq9hSIl9BZRq7Q4UNA">
        <img class="small-2 medium-1 columns" src="../img/youtube.jpg" alt="youtube">
      </a>

  		<a href="https://twitter.com/chantry_island">
        <img class="small-2 medium-1 columns" src="../img/twitter.jpg" alt="twitter">
      </a>

      <a href="#">
        <img class="small-2 medium-1 columns" src="../img/instagram.jpg" alt="instagram">
      </a>
    </div>

    <nav class="footerNav small-12 medium-6 medium-push-3 columns">
    <h2 class="hide">Footer Navigation</h2>
      <ul>
        <li><a href="index.html">HOME</a></li>
		  <li>|</li>
        <li><a href="tours.html">TOURS</a></li>
		  <li>|</li>
        <li><a href="volunteers.html">VOLUNTEERS</a></li>
		  <li>|</li>
        <li><a href="contact.html">CONTACT</a></li>
		  <li>|</li>
        <li><a href="admin_login.php">ADMIN</a></li>
      </ul>
    </nav>


    <img class="footerLogo medium-2 medium-pull-5 columns hide-for-small-only" src="../img/logo.png" alt="Marine Heritage Society Logo">
  </footer>


	</section>
    <script src="../js/vendor/jquery.min.js"></script>
    <script src="../js/vendor/what-input.min.js"></script>
    <script src="../js/foundation.min.js"></script>
  </body>
</html>