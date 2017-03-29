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
    <title>Tour Chantry Island </title>
    <link rel="stylesheet" href="../css/foundation.css" />
    <link rel="stylesheet" href="../css/app.css" />
    <link href="https://fonts.googleapis.com/css?family=Pacifico%7CRoboto" rel="stylesheet">
  </head>
  <body>
	  <h1 class="hide">Tours Page</h1>
<section class="container">
	<h2 class="hide">Welcome to Chantry Island & Marine Heritage Society's tours page.</h2>

<?php 

include("../includes/adminHeader.html");

?>

<section class="tours row">
 <h3>Our Tours</h3>

 <?php
  $tbl = "tbl_copy";
  $col = "copy_content";
  $postition=1;
  single_edit($tbl, $col, $filter, $postition);
?>
<section class="row beSure">
    <h3 class="small-12 columns">Be Sure to Bring</h3>

  

        <img class="small-6 medium-3 columns" src="../img/waterbottle.png" alt="Water Bottle">
        <img class="boots small-6 medium-3 columns" src="../img/boots.png" alt="Boots">
   

 
        <img class="camera small-6 medium-3 columns" src="../img/camera.png" alt="Camera">
        <img class="jacket small-6 medium-3  columns" src="../img/jacket.png" alt="Jacket">
    </section>

     <p class="small-12 columns noFlops">Footwear suitable for hiking is mandatory. No flip-flops please.</p>

<?php
  $tbl = "tbl_copy";
  $col = "copy_content";
  $postition=2;
  single_edit($tbl, $col, $filter, $postition);
?>

</section>

  <section class="schedule row">
    <div class="">
    <iframe class="small-12 columns gCalendar" src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=760&amp;wkst=1&amp;bgcolor=%23cccccc&amp;src=t4pac83t33k9bon8ni1dq12h9c%40group.calendar.google.com" style="border-width:0" width="80%" height="500" frameborder="0" scrolling="no"></iframe>
      
    </div>


  </section>

  
<?php
  include("../includes/adminFooter.html");
?>
</section>
    

    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/TweenMax.min.js"></script>
  </body>
</html>








