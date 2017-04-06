<?php
function getAll($tbl) {
		include('connect.php');
		$queryAll = "SELECT * FROM {$tbl}";
		$runAll = mysqli_query($link, $queryAll);
		
		if($runAll){
			return $runAll;	
		}else{
			$error =  "There was an error accessing this information.  Please contact your admin.";
			return $error;
		}
	}
function getCopy($filter, $id){
	include('connect.php');
	$query = "SELECT*FROM tbl_copy WHERE copy_page = '{$filter}' and copy_id = {$id}";
	$runquery = mysqli_query($link, $query);
		if($runquery){
			$found_info = mysqli_fetch_array($runquery, MYSQLI_ASSOC);
			return $found_info;
		}else{
			$message = "getCopy failed";
			return $message;
		}
}
function newVolunteer($name){
	include('connect.php');
	$query = "INSERT INTO tbl_volunteers VALUES (NULL, '{$name}')";
	$runquery = mysqli_query($link, $query);
	if(isset($runquery)){
		redirect_to('admin_index.php');
	}else{
		$message = "new volunteer not created";
		return $message;
	}
}
function deleteVol($id){
	include('connect.php');
	$delstring = "DELETE FROM tbl_volunteers WHERE volunteers_id={$id}";
	$delquery = mysqli_query($link, $delstring);
	if($delquery){
		redirect_to("../admin_index.php");
	}else{
		echo "delete not successful";
	}

	mysqli_close($link);
}
function getVol($tblV){
		include('connect.php');
		$queryCopy = "SELECT * FROM {$tblV} ORDER BY volunteers_id ASC";
		//echo $queryFilter;
		$runCopy = mysqli_query($link, $queryCopy);
		
		if($runCopy){
			return $runCopy;	
		}else{
			$error =  "There was an error accessing this information.  Please contact your admin.";
			return $error;
		}

	}
function editCopy($homePara, $acres, $price, $toursPara, $volunteers, $visitors){
	include('connect.php');
	$query1 = "UPDATE tbl_copy SET copy_content ='{$homePara}' WHERE copy_id = 7";
	$query2 = "UPDATE tbl_copy SET copy_content ='{$acres}' WHERE copy_id = 2";
	$query3 = "UPDATE tbl_copy SET copy_content ='{$price}' WHERE copy_id = 3";
	$query4 = "UPDATE tbl_copy SET copy_content ='{$toursPara}' WHERE copy_id = 4";
	$query5 = "UPDATE tbl_copy SET copy_content ='{$volunteers}' WHERE copy_id = 5";
	$query6 = "UPDATE tbl_copy SET copy_content ='{$visitors}' WHERE copy_id = 6";
	$runquery1 = mysqli_query($link, $query1);
	$runquery2 = mysqli_query($link, $query2);
	$runquery3 = mysqli_query($link, $query3);
	$runquery4 = mysqli_query($link, $query4);
	$runquery5 = mysqli_query($link, $query5);
	$runquery6 = mysqli_query($link, $query6);
	if($runquery6){
		$message = "Success!";
			redirect_to('admin_index.php');
		}
		else{
			$message = "No";
			return $message;
		}
}

function delete($id){
	include('connect.php');
	$delstring = "DELETE FROM tbl_photos WHERE photos_id={$id}";
	$delquery = mysqli_query($link, $delstring);
	if($delquery){
		redirect_to("../admin_index.php");
	}else{
		echo "delete not successful";
	}

	mysqli_close($link);
}
function sendMessage($fname, $lname, $phone, $email, $message) {
		$to = "katespence57@gmail.com";
		$subj = "A message throught your contact form on chantryisland.com";
		$extra = "Reply to:{$email}";
		$body = "Name: {$fname} {$lname}\n\n Email: {$email}\n\n Phone Number: {$phone}\n\n Message: {$message}\n\n {$extra}";
		echo $body;
		mail($to, $subj, $body, $extra);
		redirect_to('index.php');
	}
?>