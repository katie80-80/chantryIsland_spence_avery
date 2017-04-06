<?php
require_once('phpscripts/init.php');
$tblV = "tbl_volunteers";
$getVolunteers = getVol($tblV);
if(isset($_POST['submit'])){
  $name = trim($_POST['name']);
  $result = newVolunteer($name);
  $message = $result;
}
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
   <link href="https://fonts.googleapis.com/css?family=Pacifico%7CRoboto" rel="stylesheet">
   <script src="https://use.fontawesome.com/d0bb73139e.js"></script>
  </head>
  <body>
  <h1 class="hide">EDIT VOLUNTEERS</h1>
  <section>
    <h2 class="adminHeading">ADD A VOLUNTEER</h2>
    <form class="adminLogForm" action="admin_editVolunteers.php" method="post">
  
      <input class="formStyle adminFiled" type="text" placeholder="Full Name" name="name">

  <input class="sendBut small-8 small-pull-2 medium-6 medium-pull-3 columns" type="submit" name="submit" value="ADD">
 </form>
  </section>


<section class="volunteers row">
    <h2 class="adminHeading">Delete Volunteers</h2>
    <ul class="volunteerList row">
    <?php
  if(!is_string($getVolunteers)){
    while($row = mysqli_fetch_array($getVolunteers)){
      echo "<li class=\"small-12 medium-6 columns\">
              {$row['volunteers_name']}<a class=\"deletePic\" href=\"phpscripts/delete.php?caller_id=deleteVol&id={$row['volunteers_id']}\">
                  <i class=\"fa fa-trash-o\"></i></a>
          </li>";
    }
  }
?>
    </ul>

   
</section>
 <script src="../js/vendor/jquery.min.js"></script>
    <script src="../js/vendor/what-input.min.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script src="../js/deleter.js"></script>
    <script src="../js/TweenMax.min.js"></script>
  </body>
</html>