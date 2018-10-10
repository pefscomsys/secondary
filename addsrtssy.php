<?php

include 'dbcs.php';

page_protect();


$roll=$_GET["roll"];$x=$_GET["x"];$subject=$_GET["subject"];$user_name=$_GET["user_name"];$class=$_GET["class"];

 $qry = mysql_query("select roll as total from subject where 
subject='$subject' "); 
$row = mysql_fetch_assoc($qry); 
 $ma=$row['total'];


 
 $qry = mysql_query("select * from teach where 
subject='$ma'  and class='$class' and x='$subject'"); 
$row = mysql_fetch_assoc($qry); 
 echo $mas=$row['user_name'];
 
 
 
 
 
 
 
 
 
 
 
if(empty($mas))
{

$query1="insert into teach set  
user_name='$user_name',subject='$ma',
class='$class' ,
x='$subject'


";

mysql_query ($query1) or die ('could not updated:'.mysql_error());
echo "<script>alert(' Subject added Successful!'); window.location.href('d.php');</script>";
 echo  $statusf="<meta http-equiv='refresh' content='0; url=d.php'>";
 
}elseif($mas>''){
echo "<script>alert('Sorry Subject already alocated for this class $class!'); window.location.href('d.php');</script>"; echo  $statusf="<meta http-equiv='refresh' content='0; url=d.php'>";
}







?>