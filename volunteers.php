<?php 
require_once('admin/phpscripts/init.php');

$tblC = "tbl_copy";
$filter = $_GET['filter'];


$tblV = "tbl_volunteers";
$getVolunteers = getVol($tblV);
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
   <link href="https://fonts.googleapis.com/css?family=Pacifico%7CRoboto" rel="stylesheet">
  </head>
  <body>
  <h1 class="hide">Volunteers Page</h1>
<section class="container">
	<h2 class="hide">Welcome to Chantry Island & Marine Heritage Society's volunteers page.</h2>
<?php 

include("includes/header.html");

 ?>

  <section class="aboutVolunteers row">
  <h3>Volunteers</h3>
  <div class="volCopy small-12 medium-6 medium-push-1 columns">
  
<p>In 1954  lighthouse lamp was converted from fuel to electricity. With no need for a lighthouse  island was left unoccupied and the structures fell into disrepair. In 1997 marine heritage society established goals for restoration of the Island’s structures and in 2001 chantry Island was restored to her former beauty thanks to he the help of 250 volunteers donating nearly 300,000 hours.</p>
<p>Our wonderful volunteers have since restored the staircase of the lighthouse, built a boathouse on the island, constructed a replica of the original boat (which sits in the boathouse) and reconstructed the privy.</p>
<p>Today the tour is operated with over <?php
$id = 5;
$pop = getCopy($filter, $id);
echo $pop['copy_content'];
?>  volunteers, whose jobs include island housekeepers, gardeners, tour boat captains, crew and tour guides, and gift shop sales and service personnel. Volunteers also install the portable walkways and docks every spring and remove them every fall. To date, there have been over <?php
$id = 6;
$pop = getCopy($filter, $id);
echo $pop['copy_content'];
?>  visitors to the island.</p>
  
  </div>

    <img class="small-12 medium-4 columns" src="img/volunteer_icon.png" id="volIcon" alt="Volunteers">
    
  </section>


	<section class="volunteerVids row">
	<h2 class="hide">Volunteer Videos</h2>
	<iframe class="small-12 medium-4 columns" width="560" height="315" src="https://www.youtube.com/embed/N27M4OmubxI?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
	<iframe class="small-12 medium-4 columns" width="560" height="315" src="https://www.youtube.com/embed/hbGffSYF5LU?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
	<iframe class="small-12 medium-4 columns" width="560" height="315" src="https://www.youtube.com/embed/BkZWHmX8HY0?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
	</section>
  


  <section class="volunteers row">
    <h3>Meet Our Volunteers</h3>
    <ul class="volunteerList row">

<?php 

if(!is_string($getVolunteers)){
    while($row = mysqli_fetch_array($getVolunteers)){
      echo "<li class=\"small-12 medium-6 columns\">{$row['volunteers_name']}</li>";
    }
  }


?>

    </ul>
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
