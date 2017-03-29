<?php

  ini_set('display_errors',1);
    error_reporting(E_ALL);

  require_once('admin/phpscripts/init.php');

    $tbl = "tbl_photos";
    $getPhotos = getAll($tbl);

if(isset($_GET['filter'])) {
    $tblC = "tbl_copy";
    $filter = $_GET['filter'];
    
}else{
    $tblC = "tbl_copy";
    $filter = "home";
}
?>


<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chantry Island Marine Heritage Site and Migratory Bird Sanctuary</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/app.css"/>
    <link href="https://fonts.googleapis.com/css?family=Pacifico%7CRoboto%7CPlayfair+Display" rel="stylesheet">
    <script src="https://use.fontawesome.com/d0bb73139e.js"></script>
  </head>
  <body>
	  <h1 class="hide">Home Page</h1>
<section class="container">
	<h2 class="hide">Welcome to Chantry Island & Marine Heritage Society's home page.</h2>

<?php 

include("includes/header.html");

 ?>

  <section class="MHS row">
    <h3>Marine Heritage Society</h3>


<?php 
  $position = 1;
  $getHomeCopy = getSome($tblC, $filter, $position);
  if(!is_string($getHomeCopy)){
    while($row = mysqli_fetch_array($getHomeCopy)){
      echo "<p class=\"small-12 medium-10 medium-pull-1 columns\">{$row['copy_content']}</p>";
    }
  }

 ?>

  
  </section>

  <section class="decoImg row">
    <h3 class="hide">Decorative Nautical Pictures</h3>
	  <div class="small-4 columns"><img class="icons" src="img/boaticon.svg" alt="Charming Boat"></div>
	  <div class="small-4 columns"><img class="icons" src="img/lighthouseicon.svg" alt="Historical LightHouse"></div>
	  <div class="small-4 columns"><img class="icons" src="img/birdicon.svg" alt="Charming Boat"></div>
  </section>

  <section class="row">
  <h3>Beautiful Chantry Island</h3>
  <div class="small-12 medium-10 medium-pull-1 columns">

<?php 
  $position = 2;
  $getHomeCopy = getSome($tblC, $filter, $position);
  if(!is_string($getHomeCopy)){
    while($row = mysqli_fetch_array($getHomeCopy)){

      echo "<p>{$row['copy_content']}</p>";

    }
  }

 ?>

  </div>

  </section>

  <section class="history row">
    <h3>Our History</h3>
	  <h3 class="hide">Video about our history.</h3>
	  <div class="videoPlaceholder"><p>This box is where our video will be located. We have some awesome things in the works for this and we are excited for you to see it!</p></div>
  </section>

  <section class="row">
    <h3>Photo Gallery</h3>


<?php
  if(!is_string($getPhotos)){
    echo "<div class=\"gallery\">";
      while($row = mysqli_fetch_array($getPhotos)){
        echo "<img id=\"{$row['photos_id']}\" class=\"thumbButton small-5 small-push-1 medium-3 medium-push-0 columns\" src=\"img/{$row['photos_th']}\" alt=\"{$row['photo_decs']}\">";
      }
    echo"</div>";
}
?>

    
      <div class="lbOverlay hide">
        <i class="lbClose fa fa-window-close fa-3x hide"></i>
        <i class="arrow arrowLeft fa fa-chevron-circle-left fa-4x hide"></i>
        <i class="arrow arrowRight fa fa-chevron-circle-right fa-4x hide"></i>
        <img src="#" alt="Gallery Image" class="fullImg fullGal small-7 small-pull-2 columns hide">
      </div>

  </section>
  
   


<?php
  include("includes/footer.html");
?>
</section>
    

    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/app.js"></script>
    <script src ="js/gallery.js"></script>
    <script src="js/TweenMax.min.js"></script>
  </body>
</html>
