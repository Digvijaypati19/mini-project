<?php
error_reporting(0);
include 'dbinfo.php';
$org_id=$_GET['org_id'];
$desc=$_POST['desc'];
$dname=$_POST['ename'];
?>
<?php

	 $pic=$_FILES['imageUp']['name'];
	
 	 if(move_uploaded_file($_FILES['imageUp']['tmp_name'], "events/".$pic))
	{
		echo 'successful';
	}

	$sql=mysql_query("insert into org_service(org_id,org_events_name,org_events_desc,org_events_img) VALUES ('$org_id','$dname','$desc','$pic')");
  if($sql==true)
{
  //echo"save sucessfully";
  header('Location:event.php');
}
else
{
  echo "not sucessfully";  
}

?>