<?php

include 'dbcs.php';

page_protect();


$roll=$_GET["roll"];$x=$_GET["x"];$subject=$_GET["subject"];$user_name=$_GET["user_name"];$class=$_GET["class"];



 echo $subject;
 
 
if(empty($subject))
{

$query1="delete from teach where 
user_name='$user_name' and subject='$subject' and 
class='$class' 


";

mysql_query ($query1) or die ('could not updated:'.mysql_error());
echo "<script>alert(' Subject remove Successful!'); window.location.href('d.php');</script>";
 echo  $statusf="<meta http-equiv='refresh' content='0; url=d.php'>";
 
}elseif($subject>''){

$query1="delete from teach where 
user_name='$user_name' and subject='$subject' and 
class='$class' 


";

mysql_query ($query1) or die ('could not updated:'.mysql_error());
echo "<script>alert(' Subject remove Successful!'); window.location.href('d.php');</script>";
 echo  $statusf="<meta http-equiv='refresh' content='0; url=d.php'>";}







?>