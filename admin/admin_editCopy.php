<?php
require_once('phpscripts/init.php');
if(isset($_POST['submit'])){
  $homePara = trim($_POST['homePara']);
  $acres = trim($_POST['acres']);
  $price = trim($_POST['price']);
  $toursPara = trim($_POST['toursPara']);
  $volunteers = trim($_POST['volunteers']);
  $visitors = trim($_POST['visitors']);
  $result = editCopy($homePara, $acres, $price, $toursPara, $volunteers, $visitors);
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
  <h1 class="hide">Admin Edit Site Copy Page</h1>
<section class="container">
	<h2 class="hide">Admin Edit Site Copy Page</h2>
<form action="admin_editCopy.php" method="post">
  <section class="MHS row">
    <h3>Marine Heritage Society</h3>
    <textarea type="text" name="homePara" class="editArea">
    <?php
    $id = 7;
    $filter = 'home';
    $pop = getCopy($filter, $id);
    echo $pop['copy_content'];
    ?>
   </textarea>
</section>

<section class="decoImg row">
    <h3 class="hide">Decorative Nautical Pictures</h3>
    <div class="small-4 columns"><img class="icons" src="../img/boaticon.svg" alt="Charming Boat"></div>
    <div class="small-4 columns"><img class="icons" src="../img/lighthouseicon.svg" alt="Historical LightHouse"></div>
    <div class="small-4 columns"><img class="icons" src="../img/birdicon.svg" alt="Charming Boat"></div>
  </section>

  <section class="row">
  <h3>Beautiful Chantry Island</h3>
  <div class="small-12 medium-10 medium-pull-1 columns">
    <p>Chantry Island is located on Lake Huron, just over a mile southwest of the Saugeen River mouth in Southampton, Ontario. On the island is a majestic Imperial Lighthouse built in the mid 1800’s, the Keeper’s quarters, and a boat house.</p> 

    <p>The island varies in size depending on the level of Lake Huron. Today, with a low lake level Chantry Island is about <input class="adminInput" type="text" name="acres" value="
    <?php
    $id = 2;
    $pop = getCopy($filter, $id);
    echo $pop['copy_content'];
    ?>">
    . In 1986 when the water level was at the highest of the century, the island was only about 10 acres, causing trees on the west, north and south sides to drown.</p>

    <p>Chantry Island is a glacial moraine and consists of stone above the water and beneath extending a mile north and a mile south of the island. These underwater shoals of massive granite boulders have made this area one of the most treacherous in the Great Lakes from the 1800’s and early – mid 1900’s. There are over 50 known shipwrecks around the island.<br><a class="tourBut" href="tours.php">MORE TOUR INFORMATION HERE</a></p>
  </div>
</section>

<section class="tours row">
 <h3>Our Tours</h3>

<p class="bluText">$<input class="adminInput" type="text" name="price" value="
<?php
$id = 3;
$filter = 'tours';
$pop = getCopy($filter, $id);
echo $pop['copy_content'];
?> ">
per person<br>We recommend you call and book ahead to avoid disappointment.</p>
<textarea type="text" name="toursPara" class="editArea small-12 columns">
    <?php
    $id = 4;
    $filter = 'tours';
    $pop = getCopy($filter, $id);
    echo $pop['copy_content'];
    ?>
   </textarea>
</section>



  <section class="aboutVolunteers row">
  <h3>Volunteers</h3>
  <div class="volCopy small-12 medium-6 medium-push-1 columns">
<p>In 1954  lighthouse lamp was converted from fuel to electricity. With no need for a lighthouse  island was left unoccupied and the structures fell into disrepair. In 1997 marine heritage society established goals for restoration of the Island’s structures and in 2001 chantry Island was restored to her former beauty thanks to he the help of 250 volunteers donating nearly 300,000 hours.</p>
<p>Our wonderful volunteers have since restored the staircase of the lighthouse, built a boathouse on the island, constructed a replica of the original boat (which sits in the boathouse) and reconstructed the privy.</p>
<p>Today the tour is operated with over <input class="adminInput" type="text" name="volunteers" value="
<?php
$id = 5;
$filter = 'volunteers';
$pop = getCopy($filter, $id);
echo $pop['copy_content'];
?> "> volunteers, whose jobs include island housekeepers, gardeners, tour boat captains, crew and tour guides, and gift shop sales and service personnel. Volunteers also install the portable walkways and docks every spring and remove them every fall. To date, there have been over <input class="adminInput" type="text" name="visitors" value="
<?php
$id = 6;
$filter = 'volunteers';
$pop = getCopy($filter, $id);
echo $pop['copy_content'];
?> "> visitors to the island.</p>
</div>

    <img class="small-12 medium-4 columns" src="../img/volunteer_icon.png" id="volIcon" alt="Volunteers">
    
  </section>
   <input class="sendBut small-8 small-pull-2 columns" type="submit" name="submit" value="Save Changes">
         </form>

  


</section>  

<?php
include("../includes/adminFooter.html");
?>

    

    <script src="../js/vendor/jquery.min.js"></script>
    <script src="../js/vendor/what-input.min.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script src="../js/app.js"></script>
    <script src="../js/TweenMax.min.js"></script>
  </body>
</html>



