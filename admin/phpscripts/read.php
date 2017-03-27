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
	function getSome($tblC, $filter) {
		include('connect.php');
		$queryCopy = "SELECT * FROM {$tblC} WHERE copy_id<2 AND copy_page='{$filter}'";
		//echo $queryFilter;
		$runCopy = mysqli_query($link, $queryCopy);
		
		if($runCopy){
			return $runCopy;	
		}else{
			$error =  "There was an error accessing this information.  Please contact your admin.";
			return $error;
		}
		
	}
	function getSomeMore($tblC, $filter) {
		include('connect.php');
		$queryCopy = "SELECT * FROM {$tblC} WHERE copy_id>1 AND copy_page='{$filter}'";
		//echo $queryFilter;
		$runCopy = mysqli_query($link, $queryCopy);
		
		if($runCopy){
			return $runCopy;	
		}else{
			$error =  "There was an error accessing this information.  Please contact your admin.";
			return $error;
		}
		
	}

	function getPlz($tblC, $filter) {
		include('connect.php');
		$queryCopy = "SELECT * FROM {$tblC} WHERE copy_id<7 AND copy_page='{$filter}'";
		//echo $queryFilter;
		$runCopy = mysqli_query($link, $queryCopy);
		
		if($runCopy){
			return $runCopy;	
		}else{
			$error =  "There was an error accessing this information.  Please contact your admin.";
			return $error;
		}
		
	}

	function getMorePlz($tblC, $filter) {
		include('connect.php');
		$queryCopy = "SELECT * FROM {$tblC} WHERE copy_id>6 AND copy_page='{$filter}'";
		//echo $queryFilter;
		$runCopy = mysqli_query($link, $queryCopy);
		
		if($runCopy){
			return $runCopy;	
		}else{
			$error =  "There was an error accessing this information.  Please contact your admin.";
			return $error;
		}
		
	}
	function plzGet($tblC, $filter) {
		include('connect.php');
		$queryCopy = "SELECT * FROM {$tblC} WHERE copy_page='{$filter}'";
		//echo $queryFilter;
		$runCopy = mysqli_query($link, $queryCopy);
		
		if($runCopy){
			return $runCopy;	
		}else{
			$error =  "There was an error accessing this information.  Please contact your admin.";
			return $error;
		}
		
	}


?>