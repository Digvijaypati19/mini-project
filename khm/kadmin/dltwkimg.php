<?php 
include('lock.php');
 $imid=$_POST['id'];
 $path=$_POST['path'];

 $sql=mysql_query("DELETE FROM work_title WHERE wk_tid =$imid ");
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