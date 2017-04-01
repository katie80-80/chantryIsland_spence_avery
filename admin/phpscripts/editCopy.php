<?php
function getCopy($filter, $position){
		include('connect.php');
		$copystring = "SELECT * FROM tbl_copy WHERE copy_page = '{$filter}' AND copy_position={$position}";
		$copyquery = mysqli_query($link, $copystring);
		if($copyquery){
			return $copyquery;
			//return
		}else{
			$message = "k";
			return $message;
		}
		mysqli_close($link);
		
	}


	function editCopy($filter, $position, $copy){
		include('connect.php');
		$updatestring = "UPDATE tbl_copy SET copy_content = '{$copy}' WHERE copy_page = '{$filter}' AND copy_position = {$position}";
		$updatequery = mysqli_query($link, $updatestring);
		//echo $updatestring;
			if($updatequery){
				redirect_to("admin_index.php");
				}else{
					$message = "Did not update";
					return $message;
					}			

	mysqli_close($link);
	}
?>