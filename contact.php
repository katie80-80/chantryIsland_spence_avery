<?php
require_once('admin/phpscripts/init.php');
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['msg'];

    $result = sendMessage($fname, $lname, $phone, $email, $message);
    $message = $result;
}
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chantry Island - Contact</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1_gGDd-jX-B6Uz-yxixAavUti1pa2g1A"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
  </head>

<body>
<h1 class="hide">Contact Page</h1>
<section class="container">
 <h2 class="hide">Welcome to Chantry Island & Marine Heritage Society's contact page.</h2>
<?php
    include("includes/header.html");
?>
<section class="row map">
    
    <h3>Map & Directions</h3>
    <div class="preloadCon small-12 medium-6 columns">
        <i class="fa fa-life-bouy fa-4x"></i>
    </div>
    <div class="mapCon small-12 medium-6 columns"></div>


        <div class="small-12 medium-6 columns">
            <h3>Address</h3>
            <p>86 Saugeen St.<br>
      Southampton, Ontario<br>
      Canada N0H 2L0</p>

    <p class="directions">Need Directions?<br>
    Tell us your address.</p>
    <textarea rows="2" cols="2" wrap="hard" type="textbox" class="address" placeholder="Address, city, province"></textarea><br>
    <button class="directionsBut sendBut">Get Directions</button>
        </div>
    </section>

<section>
    <h3>Contact Us</h3>
    <p>We'd love to hear from you!</p>

<form>
  <div class="row">
    <div class="small-12 medium-10 medium-push-1 columns">

        <input class="formStyle" type="text" name="fname" placeholder="First Name" required/>

    </div>
  
    <div class="small-12 medium-10 medium-push-1 columns">

        <input class="formStyle" type="text" name="lname" placeholder="Last Name" required/>

    </div>
    
    <div class="small-12 medium-10 medium-push-1 columns">

        <input class="formStyle" type="text" name="phone" placeholder="Phone Number" required/>

    </div>
    
     <div class="small-12 medium-10 medium-push-1 columns">

        <input class="formStyle" type="text" name="email" placeholder="E-mail" required/>
    </div>
    
    <div class="small-12 medium-10 medium-push-1 columns">
        <label>TO: The Marine Heritage Society</label>
        <textarea class="formStyle" name="msg" placeholder="Your message here!" required></textarea>

    </div>
  
  <input class="sendBut small-12 medium-6 medium-pull-3 columns" type="submit" name="submit" value="SEND ME">
  
    </div>
</form>

    <p>Mailing Address:
Marine Heritage Society |
Box 421 |
Southampton, Ontario |
Canada, N0H 2L0</p>

    </section>


 </section>
 <?php
    include("includes/footer.html");
?>
     <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/map.js"></script>
    <script src="js/TweenMax.min.js"></script>
</body>
</html>