<?php

include 'dbcs.php';
$nki=$_GET['roll'];



$query2="update  courses   set  
c110='16'


";






mysql_query ($query2) or die ('could not updated:'.mysql_error());

echo "<script>alert('New row Created Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=shed.php?usr_name=$user_name'>";
 exit;


?>