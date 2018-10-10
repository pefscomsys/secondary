<?php

include 'dbcs.php';
$mks=$_GET['roll'];
$name=$_GET['nm'];
$db1=$_GET['db1'];
$query2="DELETE FROM admission WHERE matricule='$mks' and status='$db1'"



;
$query3="DELETE FROM boption WHERE ids='$name'  and db1='$db1'"



;







$query4s="DELETE FROM exm WHERE fname='$name'  and db1='$db1'"



;



$query4="DELETE FROM historic WHERE matricule='$mks'  and oldb='$db1'"



;

$query5="DELETE FROM courses WHERE matricule='$mks'  and db1='$db1'"



;$query6="DELETE FROM marks WHERE matricule='$mks'  and form='$db1'"



;$query7="DELETE FROM balancesheet WHERE fname='$mks'   and db1='$db1'"



;
mysql_query ($query2) or die ('could not updated:'.mysql_error());

mysql_query ($query4s) or die ('could not updated:'.mysql_error());
mysql_query ($query3) or die ('could not updated:'.mysql_error());
mysql_query ($query4) or die ('could not updated:'.mysql_error());
mysql_query ($query5) or die ('could not updated:'.mysql_error());
mysql_query ($query6) or die ('could not updated:'.mysql_error());
mysql_query ($query7) or die ('could not updated:'.mysql_error());
echo "<script>alert('Record deleted Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=updatebt.php?usr_name=$user_name'>";
 exit;


?>