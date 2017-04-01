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
	  <h1 class="hide">Home Page</h1>
<section class="container">
	<h2 class="hide">Welcome to Chantry Island &amp; Marine Heritage Society's home page.</h2>

<section class="MHS row">
    <h3>Marine Heritage Society</h3>

    <div class="small-12 medium-10 medium-pull-1 columns">
      <form class="adminLogForm" action="admin_editindex.php" method="post">
        <?php
        require_once("phpscripts/init.php");
        $filter = "home";
        $position = 1;
        $popform = getCopy($filter, $position);
      if(isset($_POST['submit'])){
          $copy = $_POST['copy'];
          $result = editCopy($filter, $position, $copy);
          $message = $result;
        }
      if(!is_string($popform)){
        while ($row = mysqli_fetch_array($popform)) {
          echo "<textarea class=\"editArea small-12 medium-10 medium-push-1 columns\" name=\"copy\">".$row['copy_content']."</textarea>";
        }
        }
        ?>
        <input class="sendBut small-8 small-pull-2 medium-6 medium-pull-3 columns" type="submit" name="submit" value="EDIT">
      </form>
    </div>

</section>

  <section class="decoImg row">
    <h3 class="hide">Decorative Nautical Pictures</h3>
    <div class="small-4 columns"><img class="icons" src="../img/boaticon.svg" alt="Charming Boat"></div>
    <div class="small-4 columns"><img class="icons" src="../img/lighthouseicon.svg" alt="Historical LightHouse"></div>
    <div class="small-4 columns"><img class="icons" src="../img/birdicon.svg" alt="Charming Boat"></div>
  </section>

  <section class="row">
  <h3>Beautiful Chantry Island</h3>
  <div class="small-12 medium-10 medium-pull-1 columns">
<form class="adminLogForm" action="admin_editindex.php" method="post">
          <?php

        $filter = "home";
        $position = 2;
        $popform = getCopy($filter, $position);
      if(isset($_POST['submit'])){
          $copy = $_POST['copy'];
          $result = editCopy($filter, $position, $copy);
          $message = $result;
        }
      if(!is_string($popform)){
        while ($row = mysqli_fetch_array($popform)) {
          echo "<textarea class=\"editArea small-12 medium-10 medium-push-1 columns\" name=\"copy\">".$row['copy_content']."</textarea>";
        }
        }
        ?>
        <input class="sendBut small-8 small-pull-2 medium-6 medium-pull-3 columns" type="submit" name="submit" value="EDIT">
      </form>
  </div>
  </section>
    <section class="row">
    <h3>Photo Gallery</h3>


<?php
  if(!is_string($getPhotos)){
    echo "<div class=\"gallery\">";
      while($row = mysqli_fetch_array($getPhotos)){
        echo "<img id=\"{$row['photos_id']}\" class=\"thumbButton small-5 small-push-1 medium-3 medium-push-0 columns\" src=\"../img/{$row['photos_th']}\" alt=\"{$row['photo_decs']}\">";
      }
    echo"</div>";
}
?>
<div class="addPhotoBut small-10 small-pull-1 columns">Add</div>
  <section>
    <h4 class="small-12 columns">Add A Photo</h4>

  <?php if(!empty($message)){echo $message;} ?>
  <form class="adminFiled" action="admin_editindex.php" method="post" enctype="multipart/form-data">
  <input type="file" name="photo_img" value="" size="32"><br><br>
  <label>Name:</label><br>
  <input type="text" name="photos_title" value="" size="32" ><br><br>
  <label>Description:</label><br>
  <input type="text" name="description" value="" size="32" ><br><br>
  <input class="sendBut" type="submit" name="submit2" value="Add" >
  </form>



  </section>

</section>


  <?php 

  include("../includes/adminFooter.html");

 ?>



