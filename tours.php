<?php

  ini_set('display_errors',1);
    error_reporting(E_ALL);

  require_once('admin/phpscripts/init.php');
  $filter = $_GET['filter'];
  

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
 <h3>Our Tours</h3>

<p class="small-8 small-push-2 columns price">$
<?php
$id = 3;
$pop = getCopy($filter, $id);
echo $pop['copy_content'];
?> 
per person<br>We recommend you call and book ahead to avoid disappointment.</p>
<p class="small-12 medium-10 medium-push-1 columns">
<?php
$id = 4;
$pop = getCopy($filter, $id);
echo $pop['copy_content'];
?> 
</p>

    <section class="row beSure">
    <h3 class="small-12 columns">Be Sure to Bring</h3>

  

        <img class="small-6 medium-3 columns" src="img/waterbottle.png" alt="Water Bottle">
        <img class="boots small-6 medium-3 columns" src="img/boots.png" alt="Boots">
   

 
        <img class="camera small-6 medium-3 columns" src="img/camera.png" alt="Camera">
        <img class="jacket small-6 medium-3  columns" src="img/jacket.png" alt="Jacket">
    </section>

     <p class="small-12 columns noFlops">Footwear suitable for hiking is mandatory. No flip-flops please.</p>

   <p class="small-12 medium-10 medium-pull-1 columns">Because the island is a migratory bird sanctuary, there are no pets allowed. For safety, children must be a minimum of 4 feet tall and must be accompanied by an Adult. Tours must be booked and prepaid through the Chantry Island Tour Base and Gift Shop located at the south side of the Saugeen River at the harbour in Southampton. Arrive at the Chantry Island Tour Base 15 minutes ahead of your scheduled tour to check in, receive your ticket, and then proceed to the dock to meet our craft, the Peerless II. There are 9 seats available on the boat so be sure to invite friends. On the 15 minute boat ride to the island, you will enjoy the outstanding views of the sandy beach shoreline and the deep blue waters of Lake Huron. Cancellations must be received 24 hours before the scheduled departure to receive a refund. Cancellation can be caused by weather conditions but light rain is fine.</p>

</section>

  <section class="schedule row">
  <h3>Calendar</h3>
    <div class="">
    <iframe class="small-12 columns gCalendar" src="https://calendar.google.com/calendar/embed?showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=t4pac83t33k9bon8ni1dq12h9c%40group.calendar.google.com&amp;color=%238D6F47&amp;ctz=America%2FToronto" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
      
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
