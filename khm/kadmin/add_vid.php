<?php
include('lock.php');
$org_id='1';
$link=$_POST['link'];
$dname=$_POST['vname'];

//INSERT INTO video (org_id, v_name, v_link) VALUES ('$org_id', '$dname', '$link');
	$sql=mysql_query("INSERT INTO video (org_id, v_name, v_link) VALUES ('$org_id', '$dname', '$link')");
  if($sql==true)
{
header('Location:teasers.php');
}
else
{
  echo "not sucessfully";  
}
//header('Location:event.php');
?>