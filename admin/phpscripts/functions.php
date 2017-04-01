<?php
function redirect_to($location) {
		if($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}
function addPhoto($img,$thumb,$title, $decs) {
		include("connect.php");
		$img = mysqli_real_escape_string($link, $img);

		if ($_FILES['photo_img']['type'] == "image/jpg" || $_FILES['photo_img']['type'] == "image/jpeg" ) {
			$targetpath = "../img/{$img}";
			if(move_uploaded_file($_FILES['photo_img']['tmp_name'], $targetpath)){
				$orig = "../img/{$img}";
				$th_copy = "../img/{$thumb}";
				if(!copy($orig, $th_copy)){
					echo "failed to copy";
				}
			//$size = getimagesize($orig);
			//echo $size[0]."x".$size[1];

			$qstring = "INSERT INTO tbl_photos VALUES(NULL, '{$title}', '{$thumb}', '{$img}', '{$decs}')";
			
			//echo $qstring;
			$result = mysqli_query($link, $qstring);
			if($result === 1) {
				$qstring2 = "SELECT * FROM tbl_movies ORDER BY movies_id DESC LIMIT 1";
				$result2 = mysqli_query($link, $qstring2);

				$row = mysqli_fetch_array($result2);
				$lastID = $row['photos_id'];


				redirect_to("admin_index.php");
			}

		}

		}else{
			echo "use a jpg plz";
		}



		mysqli_close($link);
	}
?>
