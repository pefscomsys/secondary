<?php include 'dbc.php';

$date=date("y-m-j");
	
$time=date("H:I:s");	
	


    



$rs_duplicate = mysql_query("select count(*) as total from checkscan where time='$time' and date='$date' and status>''") or die(mysql_error());
list($total) = mysql_fetch_row($rs_duplicate);

if ($total > 0)
{
$err[] = "ERROR - The student already exists. Please try again with different student .";
//header("Location: finances.php?msg=$err");
//exit();
}$stats='1';

if(empty($err)) {
	$q="update  checkscan set time='$time',date='$date', status='$stats' where roll='1'";


	mysql_query($q);
	
 
}


 echo $statusftydate="<meta http-equiv='refresh' content='0; url=studentp.php'>";
 

?>