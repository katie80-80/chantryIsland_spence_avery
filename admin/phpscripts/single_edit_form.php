
<?php

function single_edit($tbl, $col, $filter, $position){
	$result = getSingle($tbl, $col, $filter, $position);
	$getResult = mysqli_fetch_array($result);


	echo "<form action=\"phpscripts/edit.php\" method=\"post\">";
	// echo "<input class=\"hide\" type=\"text\" name=\"tbl\" value=\"{$tbl}\">";
	// echo "<input class=\"hide\" type=\"text\" name=\"col\" value=\"{$col}\">";
	// echo "<input class=\"hide\" type=\"text\" name=\"filter\" value=\"{$filter}\">";
	// echo "<input class=\"hide\" type=\"text\" name=\"position\"value=\"{$position}\"";
	

	for($i=0; $i<mysqli_num_fields($result); $i++){

		$dataType = mysqli_fetch_field($result);
		$fieldName = $dataType->name;
		$fieldType = $dataType->type;
		echo $fieldName ."<br>";
		echo $fieldType."<br>";

		echo "<textarea class=\"editArea small-12 medium-10 medium-push-1 columns\" name=\"$fieldName\">{$getResult[$i]}</textarea>";

	 }
	mysqli_num_fields($result);


	echo "<input class=\"sendBut small-8 small-pull-2 medium-6 medium-pull-3 columns\" type=\"submit\" value=\"Edit Content\"> 
	</form>";
}



?>