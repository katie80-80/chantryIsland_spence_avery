<?php
	function logIn($username, $password, $ip) {
        require_once("connect.php");
        $username = mysqli_real_escape_string($link, $username);
        $password = mysqli_real_escape_string($link, $password);
        $loginString = "SELECT * FROM tbl_user WHERE user_name= '{$username}'
        AND user_pass = '{$password}'";
        $userAttempts_and_lockout = "SELECT user_logAttempts, user_lockoutDate
        FROM tbl_user WHERE user_name = '{$username}'";
        //echo $loginString;
        $user_set = mysqli_query($link, $loginString);
        $user_attempts_query = mysqli_query($link, $userAttempts_and_lockout);
        $date =new dateTime();
        $realDate = $date -> format('Y-m-d H:i:s');

        if(mysqli_num_rows($user_set)){
          $found_user = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
          //echo $found_user['user_fname'];
          $id = $found_user["user_id"];
          $attempts = $found_user['user_logAttempts'];
          $lockout_date = $found_user['user_lockoutDate'];

          $_SESSION['users_creds'] = $id;
          $_SESSION['users_name'] = $found_user['user_name'];
          $_SESSION['users_fname'] = $found_user['user_fname'];
          $_SESSION['users_date'] = $found_user['user_logDate'];
          $_SESSION['user_attempts'] = $attempts;
          $_SESSION['users_lockout_date'] = $lockout_date; 
          //We're logged in, we're good

          if($attempts>2){
              if((strtotime($realDate) - strtotime($lockout_date))<1800){
                $message = "You're locked out of your account right now, you can try again in" . (30 - floor((strtotime ($realDate) - strtotime($lockout_date))/60)) ." minutes.";
                  return $message; 
              }

          }

          if(mysqli_query($link, $loginString)){
            $updateString = "UPDATE tbl_user SET user_ip = '{$id}' WHERE user_id = {$id}";
            $updateQuery = mysqli_query($link, $updateString);
            //updates the ip to always matches the id
          }

          if(mysqli_query($link, $loginString)){
            $currentDate = "UPDATE tbl_user SET user_logDate = '{$realDate}' WHERE user_name = '{$username}'";
              $updateQuery = mysqli_query($link, $currentDate);
          }

          if(mysqli_query($link, $loginString)){
            $updateAttempts = "UPDATE tbl_user SET user_logAttempts = '0' WHERE user_name = '{$username}'";
            $updateQuery = mysqli_query($link, $updateAttempts);
          }

          redirect_to("admin_index.php");


        }else {
          $found_user = mysqli_fetch_array($user_attempts_query, MYSQLI_ASSOC);
          $attempts = $found_user['user_logAttempts'];
          $lockout_date = $found_user['user_lockoutDate'];

            if($attempts>2){
              $message = "You're locked out right now. You can try again in " . (30-floor((strtotime($realDate) - strtotime($lockout_date))/60)) . "minutes.";
                return $message;
            }else if($attempts>1){
                $updateLockout = "UPDATE tbl_user SET user_lockoutDate = '$realDate' WHERE user_name = '{$username}'";
                $updateQuery = mysqli_query($link, $updateLockout);
                $updateAttempts = "UPDATE tbl_user SET user_logAttempts = user_logAttempts + 1 WHERE user_name = '{$username}'";
                $updateQuery = mysqli_query($link, $updateAttempts);
                $message = "You've been locked out. Try again in 30 minutes";
                return $message;
            }else{
                $updateAttempts = "UPDATE tbl_user SET user_logAttempts = user_logAttempts + 1 WHERE user_name = '{$username}'";
                $updateQuery = mysqli_query($link, $updateAttempts);
                $message = "That's not the correct username or password. You can try " . (2- $attempts). "more times.";
                return $message;
            }

          }

        mysqli_close($link);
      }


?>