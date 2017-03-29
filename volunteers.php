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
  
<?php  
$position=1;
$getVolCopy = getSome($tblC, $filter,$position);

if(!is_string($getVolCopy)){
    while($row = mysqli_fetch_array($getVolCopy)){
      echo "<p>{$row['copy_content']}</p>";
    }
  }

?>
  
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
