<?php

include 'dbcs.php';

$nki=$_GET['roll'];


$query2="insert into allowance  set  
extra='$nki'


";






mysql_query ($query2) or die ('could not updated:'.mysql_error());

echo "<script>alert('New row Created Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=allow.php?usr_name=$user_name'>";
 exit;


?>