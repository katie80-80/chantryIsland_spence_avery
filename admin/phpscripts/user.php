<?php
function getUser($id){
		require_once("connect.php");
		//create query 
		$userstring = "SELECT * FROM tbl_user WHERE user_id = {$id}";
		//run query
		$userquery = mysqli_query($link, $userstring);
		//gather object, fetch array
		if($userquery){
			$found_user = mysqli_fetch_array($userquery, MYSQLI_ASSOC);
			return $found_user;
			//return
		}else{
			$message = "k";
			return $message;
		}
		mysqli_close($link);
	}


	function createUser($fname, $lname, $username, $email, $level){
	require_once("connect.php");
	date_default_timezone_set('America/toronto');
	$date = new dateTime();
	$realDate = $date -> format('Y-m-d H:i:s');
	// $acccountExDate =  date("Y-m-d H:i:s", strtotime("+30 minutes"));

	function generatePassword($passLength) {
		$characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
		$pw = substr(str_shuffle($characters), 0, $passLength);
		return $pw;
	}
	$randomPassword = generatePassword(8);
	$ip = 0;
	$userstring = "INSERT INTO tbl_user VALUES(NULL,'{$fname}', '{$lname}', '{$username}', '{$randomPassword}', '{$level}', '{$ip}', '1000-01-01 00:00:00', '0', '1000-01-01 00:00:00', '{$email}', 'no', '$realDate')";
	$emailBody = "You have been made a web adminiistrator of chantryisland.com! Your username is: {$username}\n\n your password is: {$randomPassword}\n\n. Please go to http://localhost:8888/chantryIsland_spence_avery/admin/admin_login.php. You must change your password within 48 hours or your account will be deleted." ;
	//echo $userstring;
	$userquery = mysqli_query($link, $userstring);
	if(isset($userquery)){
		mail('{$email}', "Your admin credentails for chantryisland.com", $emailBody);
		// echo $emailBody;
		// $message = "User was added";
		// return $message;
		redirect_to("admin_index.php");
	}else{
		$message = "no user created";
		return $message;
	}

	mysqli_close($link);
}

function editUser($id, $fname, $lname, $username, $password, $email){
	include('connect.php');
	$updatestring = "UPDATE tbl_user SET user_fname ='{$fname}', user_lname = '{$lname}',  user_name = '{$username}',  user_pass = '{$password}', user_email = '{$email}', user_edit = 'yes' WHERE user_id = {$id}";
	$updatequery = mysqli_query($link, $updatestring);
	if($updatequery){
		redirect_to("admin_index.php");
	}else{
		$message = "NO";
		return $message;
	}

	mysqli_close($link);
}?>