<?php

include 'dbcs.php';
$nki=$_GET['roll'];


$query2="insert into timing  set  
extra='$nki'


";






mysql_query ($query2) or die ('could not updated:'.mysql_error());

echo "<script>alert('New Time row Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=time.php?usr_name=$user_name'>";
 exit;


?>