<?php
function addPhoto($img,$thumb,$title, $decs) {
		include("connect.php");
		$img = mysqli_real_escape_string($link, $img);
		if ($_FILES['photo_img']['type'] == "image/jpg" || $_FILES['photo_img']['type'] == "image/jpeg" || $_FILES['photo_img']['type'] == "image/png") {
			$targetpath = "../img/{$img}";
			if(move_uploaded_file($_FILES['photo_img']['tmp_name'], $targetpath)){
				$orig = "../img/{$img}";
				$th_copy = "../img/{$thumb}";
				if(!copy($orig, $th_copy)){
					echo "failed to copy";
				}
			$qstring = "INSERT INTO tbl_photos VALUES(NULL, '{$title}', '{$thumb}', '{$img}', '{$decs}')";
			$result = mysqli_query($link, $qstring);
			if($result) {
				redirect_to("admin_index.php");
			}
		}
		}else{
			echo "Please upload only .jpg or .png files";
		}
	mysqli_close($link);
	}
?>