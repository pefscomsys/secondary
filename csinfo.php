<?php

include 'dbcs.php';
$nki=$_GET['roll'];


$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
?>
<?php   $take=$row[1];

?>
<?php } ?>
<?php 
$query2="update barcode  set  
db1='$take' where extra='2'


";






mysql_query ($query2) or die ('could not updated:'.mysql_error());

echo "<script>alert('update Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=idcards.php?usr_name=$user_name'>";
 exit;


?>