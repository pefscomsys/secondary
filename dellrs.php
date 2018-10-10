<?php

include 'dbcs.php';
$mks=$_GET['roll'];
$name=$_GET['nm'];

echo "<script>alert('Record deleted Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=updatebt.php?usr_name=$user_name'>";
 exit;


?>