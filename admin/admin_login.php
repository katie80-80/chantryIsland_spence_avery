<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
  $ip = $_SERVER["REMOTE_ADDR"];
  //echo $ip;
  require_once("phpscripts/init.php");

  if(isset($_POST['submit'])) {
    //echo "Submit is working";
    //this trims out the white space the the good people can copy and paste
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if($username != "" && $password != ""){
      //echo "all good yo";
      $result = logIn($username, $password, $ip);
      $message = $result;
    }else{
      $message = "please fill in all fields.";
    }
  }
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chantry Island - Contact</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="../css/app.css">
   <link href="https://fonts.googleapis.com/css?family=Pacifico%7CRoboto" rel="stylesheet">
  </head>

<body>
  <h1 class="hide">Administrative Login</h1>
  <?php
  if(!empty($message)) {
    echo $message;
  }
  ?> 
  <section class="container">
  <h2 class="hide">Welcome to Chantry Island & Marine Heritage Society's admin page.</h2>
  
  <form action="admin_login.php" method="post" class="adminLogForm">
  <h2 class="adminHeading">Administrative Login</h2>

    <input class="formStyle adminFiled" type="text" name="username" value="" placeholder="User Name" required/>

    <input class="formStyle adminFiled" type="text" name="password" value="" placeholder="Password" required/> 
    
    <input class="sendBut small-8 small-pull-2 medium-6 medium-pull-3 columns" type="submit" name="submit" value="LOGIN">
    
  </form>


<footer class="footer row">

    <div class="socialMedia row">
    <a href="https://www.facebook.com/MarineHeritageSociety/?fref=ts"><img class="small-2 small-push-2 medium-1 medium-push-4 columns" src="../img/facebook.jpg" alt="facebook"></a>
    <a href="https://www.youtube.com/channel/UC5BwiLq9hSIl9BZRq7Q4UNA"><img class="small-2 small-push-2 medium-1 medium-push-4 columns" src="../img/youtube.jpg" alt="youtube"></a>
    <a href="https://twitter.com/chantry_island"><img class="small-2 small-push-2 medium-1 medium-push-4 columns" src="../img/twitter.jpg" alt="twitter"></a>
      <img class="small-2 small-pull-2 medium-1 medium-pull-4 columns" src="../img/instagram.jpg" alt="instagram">
     </div>

    <nav class="footerNav">
    <h2 class="hide">Footer Navigation</h2>
      <ul>
        <li><a href="index.html">HOME</a></li>
      <li>|</li>
        <li><a href="tours.html">TOURS</a></li>
      <li>|</li>
        <li><a href="volunteers.html">VOLUNTEERS</a></li>
      <li>|</li>
        <li><a href="contact.html">CONTACT</a></li>
      <li>|</li>
        <li><a href="admin/admin_login.php">ADMIN</a></li>
      </ul>
    </nav>
  

    <img class="footerLogo" src="../img/logo.png" alt="Marine Heritage Society Logo">

    <!-- <img class="footerImg" src="img/footer.png" alt="Chantry Island Migratory Bird Sanctuary Footer"> -->
  </footer>
</section>
     <script src="../js/vendor/jquery.min.js"></script>
    <script src="../js/vendor/what-input.min.js"></script>
    <script src="../js/foundation.min.js"></script>
</body>
</html>