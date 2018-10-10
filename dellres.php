<?php

include 'dbcs.php';
$mks=$_GET['roll'];
$name=$_GET['nm'];

$qry = mysql_query("select amount as total
from balancesheet where recid='$mks' "); 
$row = mysql_fetch_assoc($qry); 
 $amount=$row['total']; 
 
 
$qry = mysql_query("select folk as total
from balancesheet where recid='$mks' "); 
$row = mysql_fetch_assoc($qry); 
 $amounts=$row['total']; 
 

$mxc111y=$amount;
if(empty($mxc111y)){

 $stat=$amounts;
 }
elseif($mxc111y>'' ){
	
	
 $stat=$amount;
 }elseif($mxc111y>='0' && $mxc111y<='0'){
	
	
 $stat=$amounts;
 }


$qry = mysql_query("select fname as total
from balancesheet where recid='$mks' "); 
$row = mysql_fetch_assoc($qry); 
 $mat=$row['total']; 
 
 
$qry = mysql_query("select db1 as total
from balancesheet where recid='$mks' "); 
$row = mysql_fetch_assoc($qry); 
 $db1=$row['total']; 
 
 
 
 
$qry = mysql_query("select balance 	 as total
from historic where matricule='$mat'  and oldb='$db1'"); 
$row = mysql_fetch_assoc($qry); 
$exs=$row['total']; 
 
$qry = mysql_query("select expected_amount 	 as total
from historic where matricule='$mat'  and oldb='$db1'"); 
$row = mysql_fetch_assoc($qry); 
$ex=$row['total']; 
 
 
$qry = mysql_query("select amount_paid as total
from historic where matricule='$mat'  and oldb='$db1'"); 
$row = mysql_fetch_assoc($qry); 
 $gross=$row['total']; 
 
  $am=($gross-$stat);
 
$pm=($ex-$am);


$queryi="update historic set amount_paid='$am',
balance='$pm' where matricule='$mat'  and oldb='$db1'  ";
mysql_query ($queryi) or die ('could not updated:'.mysql_error());



 
$query7="DELETE FROM balancesheet WHERE  recid='$mks' and  db1='$db1'";


mysql_query ($query7) or die ('could not updated:'.mysql_error());



echo "<script>alert('Delete Successfully!'); </script>";
 
  

 echo  $statusf="<meta http-equiv='refresh' content='0; url=pintrs.php?usr_name=$user_name'>";
?>