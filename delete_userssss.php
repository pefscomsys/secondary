<?php 
include 'dbc.php';
$rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) {
mysql_query("DELETE FROM resit WHERE roll='" . $_POST["users"][$i] . "'");
}


echo "<script>alert('Delet Successful!');</script>";

 echo  $statusf="<meta http-equiv='refresh' content='0; url=resit2.php?usr_name=$mats'>";
 exit;
?>