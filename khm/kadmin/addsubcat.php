<?php
include('lock.php');
$main=$_POST['cname'];
$dname=$_POST['vname'];

//INSERT INTO video (org_id, v_name, v_link) VALUES ('$org_id', '$dname', '$link');
	$sql=mysql_query("INSERT INTO categories (cat_name, cat_parent, cat_child, cat_flag, org_id) VALUES ('Computers', '1', '0', '1', '1')");
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