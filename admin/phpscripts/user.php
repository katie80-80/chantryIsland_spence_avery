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
?>