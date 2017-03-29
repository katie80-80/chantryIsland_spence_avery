<?php
require_once("phpscripts/init.php");
$filter = $_GET['filter'];
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
	  <h1 class="hide">Home Page</h1>
<section class="container">
	<h2 class="hide">Welcome to Chantry Island & Marine Heritage Society's home page.</h2>

<?php 

  include("../includes/adminHeader.html");

 ?>

  <section class="MHS row">
    <h3>Marine Heritage Society</h3>

    <div class="small-12 medium-10 medium-pull-1 columns">

<?php
  $tbl = "tbl_copy";
  $col = "copy_content";
  $postition=1;
  single_edit($tbl, $col, $filter, $postition);
?>
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
  <div class="small-12 medium-10 medium-push-1 columns">
  <?php
  $tbl = "tbl_copy";
  $col = "copy_content";
  $postition=2;
  single_edit($tbl, $col, $filter, $postition);
?>
  </div>

  <?php 

  include("../includes/adminFooter.html");

 ?>



