<?php
include('lock.php');
 $org_id='1';
 $desc=$_POST['desc'];
 $dname=$_POST['nhead'];
 $flag='1';
	$sql=mysql_query("insert into org_news(org_id,org_news_head,org_news_desc,org_news_flag) VALUES ('$org_id','$dname','$desc','$flag')");
  if($sql==true)
{
   header('Location:news.php');
}
else
{
  echo "not sucessfully";  
}
?>