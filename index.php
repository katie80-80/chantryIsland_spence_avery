<?php

  ini_set('display_errors',1);
    error_reporting(E_ALL);

  require_once('admin/phpscripts/init.php');
  if(isset($_GET['filter'])){
    $filter = $_GET['filter'];
  }else{
    $filter = 'home';
  }
  $tbl = "tbl_photos";
  $getPhotos = getAll($tbl);
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
    <?php 

include("includes/header.html");

 ?>
<section class="container">
	<h2 class="hide">Welcome to Chantry Island &amp; Marine Heritage Society's home page.</h2>



  <section class="MHS row">
    <h3>Marine Heritage Society</h3>
    <p class="small-12 medium-10 medium-pull-1 columns">
    <?php
    $id = 7;
    $pop = getCopy($filter, $id);
    echo $pop['copy_content'];
    ?>
    </p>

  
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
    <p>Chantry Island is located on Lake Huron, just over a mile southwest of the Saugeen River mouth in Southampton, Ontario. On the island is a majestic Imperial Lighthouse built in the mid 1800’s, the Keeper’s quarters, and a boat house.</p> 

    <p>The island varies in size depending on the level of Lake Huron. Today, with a low lake level Chantry Island is about
    <?php
    $id = 2;
    $pop = getCopy($filter, $id);
    echo $pop['copy_content'];
    ?> 
    . In 1986 when the water level was at the highest of the century, the island was only about 10 acres, causing trees on the west, north and south sides to drown.</p>

    <p>Chantry Island is a glacial moraine and consists of stone above the water and beneath extending a mile north and a mile south of the island. These underwater shoals of massive granite boulders have made this area one of the most treacherous in the Great Lakes from the 1800’s and early – mid 1900’s. There are over 50 known shipwrecks around the island.<br><a class="tourBut" href="tours.php">MORE TOUR INFORMATION HERE</a></p>


  </div>

  </section>

  <section class="history row">
    <h3>Our History</h3>
    <video controls class="histVid small-12 medium-10 medium-pull-1 columns">
      <source src="video/ChantryVid_final.mp4" type="video/mp4">
    </video>
	  <!-- <div class="videoPlaceholder"></div> -->
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
        <div class="galMobile">
        <i class="arrow small-2 medium-push-1 columns arrowLeft fa fa-chevron-circle-left fa-3x hide"></i>
        
      
        <img src="#" alt="Gallery Image" class="fullImg fullGal small-8 columns hide">
        <i class="arrow small-2 columns arrowRight fa fa-chevron-circle-right fa-3x hide"></i>
        </div>
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
