<?php

include 'dbcs.php';
$nki=$_GET['roll'];



$query2="update resit  set  
form='2015/2016'


";






mysql_query ($query2) or die ('could not updated:'.mysql_error());

echo "<script>alert('New row Created Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=timeo.php?usr_name=$user_name'>";
 exit;


?>