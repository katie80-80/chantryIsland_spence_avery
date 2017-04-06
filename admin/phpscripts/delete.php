<?php
require_once('init.php');
if(isset($_GET['caller_id'])) {
		$dir = $_GET['caller_id'];

		if($dir == "delete"){
			$id = $_GET['id'];
			delete($id);
		
		}else if($dir == "deleteVol"){
			$id = $_GET['id'];
			deleteVol($id);

		}else{
			echo "Caller id was passed wrong.";
		}
	}else{
		echo "caller not set";
	}
?>