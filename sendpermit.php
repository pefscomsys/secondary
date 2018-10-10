<?php 
include 'dbc.php';
page_protect();


 $notes=$_SESSION['user_name'];


if(@$_SESSION['userlevel']!=111){header("location: login.php?error=Unauthorized access");}







?>



<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $take=$row[1];



?>
<?php } ?>

<?php


$first_name = $_POST ['first_name'];


$matricule = $_POST ['matricule'];
$fname= $_POST ['fname'];
$department = $_POST ['department'];

$levels= $_POST ['levels'];
$total= $_POST ['total'];
$overall= $_POST ['overall'];
$permit = $_POST ['permit'];
$reason= $_POST ['reason'];
$date= $_POST ['date'];

$issue= $_POST ['issue'];
if($reason!="")
{
$dates=("m");
$query1="insert into permission set  
db1='$take',fname='$fname',

levels='$levels'

,
 months='$dates',
total='$total',

extra='$permit',

department='$department',
overall='$overall',

issue='$issue',

reason='$reason',

date='$date',
matricule='$matricule'

";
$query11="update courses set  
total1='$permit' where matricule='$matricule' and levels='$levels' ";

mysql_query ($query1) or die ('could not updated:'.mysql_error());

 
mysql_query ($query11) or die ('could not updated:'.mysql_error());
 
 

echo "<script>alert('Admission Successful!'); window.location.href('confirmx.php');</script>";


 echo "<meta http-equiv='refresh' content='0; url=permit.php'>";
}
?>








