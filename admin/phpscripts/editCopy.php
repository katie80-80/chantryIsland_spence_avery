<?php
	function getCopy($filter, $position){
		require_once('connect.php');
		$copystring = "SELECT * FROM tbl_copy WHERE copy_page = '{$filter}' and copy_position={$position}";
		$copyquery = mysqli_query($link, $copystring);
		if($copyquery){
			$found_copy = mysqli_fetch_array($copyquery, MYSQLI_ASSOC);
			return $found_copy;
			//return
		}else{
			$message = "k";
			return $message;
		}
		mysqli_close($link);
		
	}


	function editCopy($filter, $position, $copy){
		require_once('connect.php');
		$updatestring = "UPDATE tbl_copy SET copy_content = {$copy}, WHERE copy_position = {$postition}";
			if($updatequery){
				redirect_to("admin_index.php");
				}else{
					$message = "NO";
					return $message;
					}			

	mysqli_close($link);
	}

?>