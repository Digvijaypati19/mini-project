<?php 
include('lock.php');
 $imid=$_POST['id'];
 $path=$_POST['path'];

 $sql=mysql_query("DELETE FROM org_gallery WHERE gal_id =$imid ");
  if($sql==true)
{
   $file = "uploads/".$path;
if (!unlink($file))
  {
  echo ("Error deleting $file");
  }
else
  {
  echo ("Deleted $file");
  }
}
else
{
  echo "not sucessfully";  
}
 
 
?>