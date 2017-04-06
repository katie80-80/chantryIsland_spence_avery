<?php
ini_set('display_errors', 1);
  error_reporting(E_ALL);
require_once('phpscripts/init.php');
$tbl = "tbl_photos";
if(isset($_POST['submit1'])){
  $img = $_FILES['photo_img']['name'];
  $thumb = "TH_{$img}";
  $title = $_POST['photos_title'];
  $decs = $_POST['description'];
  $addPhoto = addPhoto($img,$thumb,$title, $decs);
  $message = $addPhoto;
}
$photoList = getALL($tbl);
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
  <h1 class="hide">Edit Photos</h1>
  <form class="adminFiled" action="admin_editPhotos.php" method="post" enctype="multipart/form-data">
  <h2 class="adminHeading">Add Photos</h2>
    <input type="file" name="photo_img" value="" size="32"><br><br>
    <label>Name:</label><br>
    <input type="text" name="photos_title" value="" size="32" ><br><br>
    <label>Description:</label><br>
    <input type="text" name="description" value="" size="32" ><br><br>
    <input class="sendBut" type="submit" name="submit1" value="Add" >
  </form>
 

  <section>
    <h2 class="adminHeading">Delete Photo</h2>
      <?php
        echo "<div class=\"gallery\">";
      while($row = mysqli_fetch_array($photoList)){
        echo "<a class=\"deletePic\" href=\"phpscripts/delete.php?caller_id=delete&id={$row['photos_id']}\"><img id=\"{$row['photos_id']}\" class=\"thumbButton small-5 small-push-1 medium-3 medium-push-0 columns\" src=\"../img/{$row['photos_th']}\" alt=\"{$row['photo_decs']}\"></a>";
      }
        echo"</div>";
       ?>
  </section>
  


    
    <script src="../js/vendor/what-input.min.js"></script>
    <script src="../js/vendor/jquery.min.js"></script>
   <script src="../js/foundation.min.js"></script>
   <script src="../js/deleter.js"></script>
    
    <script src="../js/TweenMax.min.js"></script>
  </body>
</html>