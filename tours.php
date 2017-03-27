<?php

  ini_set('display_errors',1);
    error_reporting(E_ALL);

  require_once('admin/phpscripts/init.php');
    
  $tblC = "tbl_copy";
  $filter = $_GET['filter'];
  $getTourCopyA = getPlz($tblC, $filter);
  $getTourCopyB = getMorePlz($tblC, $filter);
  $getTourCopyC = getMorePlz($tblC, $filter);

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tour Chantry Island </title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/app.css" />
    <link href="https://fonts.googleapis.com/css?family=Pacifico%7CRoboto" rel="stylesheet">
  </head>
  <body>
	  <h1 class="hide">Tours Page</h1>
<section class="container">
	<h2 class="hide">Welcome to Chantry Island & Marine Heritage Society's tours page.</h2>

<?php 

include("includes/header.html");

?>

 <section class="tours row">

<?php 

if(!is_string($getTourCopyA)){
    while($row = mysqli_fetch_array($getTourCopyA)){

      echo "<h3>{$row['copy_heading']}</h3>";

      echo "<p class=\"small-12 medium-10 medium-push-1 columns\">{$row['copy_content']}</p>";

    }
  }
?>

    <section class="row beSure">

  <?php 

  if(!is_string($getTourCopyB)){
    while($row = mysqli_fetch_array($getTourCopyB)){

      echo "<h3 class=\"small-12 columns\">{$row['copy_heading']}</h3>";

    }
  }

 ?>

        <img class="small-6 medium-3 columns" src="img/waterbottle.png" alt="Water Bottle">
        <img class="boots small-6 medium-3 columns" src="img/boots.png" alt="Boots">
   

 
        <img class="camera small-6 medium-3 columns" src="img/camera.png" alt="Camera">
        <img class="jacket small-6 medium-3  columns" src="img/jacket.png" alt="Jacket">
    </section>

     <p class="small-12 columns noFlops">Footwear suitable for hiking is mandatory. No flip-flops please.</p>

  <?php 

  if(!is_string($getTourCopyC)){
    while($row = mysqli_fetch_array($getTourCopyC)){

      echo "<p class=\"small-12 medium-10 medium-pull-1 columns\">{$row['copy_content']}</p>";

    }
  }

 ?>

</section>

  <section class="schedule row">
    <div class="">
    <iframe class="small-12 columns gCalendar" src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=760&amp;wkst=1&amp;bgcolor=%23cccccc&amp;src=t4pac83t33k9bon8ni1dq12h9c%40group.calendar.google.com" style="border-width:0" width="80%" height="500" frameborder="0" scrolling="no"></iframe>
      
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
    <script src="js/TweenMax.min.js"></script>
  </body>
</html>
