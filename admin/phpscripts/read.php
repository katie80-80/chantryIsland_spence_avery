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
	function getSome($tblC, $filter, $position) {
		include('connect.php');
		$queryCopy = "SELECT * FROM {$tblC} WHERE copy_position = {$position} AND copy_page='{$filter}'";
		//echo $queryFilter;
		$runCopy = mysqli_query($link, $queryCopy);
		
		if($runCopy){
			return $runCopy;	
		}else{
			$error =  "There was an error accessing this information.  Please contact your admin.";
			return $error;
		}
		
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

	function getSingle($tbl, $col, $filter, $position) {
		include('connect.php');
		$querySingle = "SELECT {$col} FROM {$tbl} WHERE copy_page='{$filter}' AND copy_position = '{$position}'";
		$runSingle = mysqli_query($link, $querySingle);
		
		if($runSingle){
			return $runSingle;	
		}else{
			$error =  "There was an error accessing this information.  Please contact your admin.";
			return $error;
		}
	}
?>