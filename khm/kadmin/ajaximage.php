<?php
error_reporting(0);
include('db.php');
session_start();
$session_id='1'; //$session id
$path = "uploads/";

	$valid_formats = array("jpg", "png", "gif", "bmp","JPG");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['photoimg']['name'];
			$size = $_FILES['photoimg']['size'];
			
			if(strlen($name))
				{
					list($txt, $ext) = explode(".", $name);
					if(in_array($ext,$valid_formats))
					{
					if($size<(1024*1024))
						{
							$actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
							$tmp = $_FILES['photoimg']['tmp_name'];
							if(move_uploaded_file($tmp, $path.$actual_image_name))
								{
								mysqli_query($db,"UPDATE users SET profile_image='$actual_image_name' WHERE uid='$session_id'");
									
									echo "<img src='uploads/".$actual_image_name."'  class='preview'>";
								}
							else
								echo "Image file size max 1 MB";
						}
						else
						echo "failed";					
						}
						else
						echo "Invalid file format..";	
				}
				
			else
				echo "Please select image..!";
				
			exit;
		}
?>