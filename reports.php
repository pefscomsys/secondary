
<?php
include 'dbc.php';

ini_set('max_execution_time', 300000); //300 seconds = 5 minutes
?><?php
$roll=$_GET["1"];
$query="select * from closing where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $datss=$row['dtate'];

?>
<?php } ?><?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $take=$row[1];

?>
<?php } ?>
<?php
 $classes=$_POST["name1"];
 ?>


<?php
 $classes=$_POST["name1"];
$statusbsub=$_POST["statusbsub"];

$deptt=$_POST["deptt"];

$teacher=$_POST["teacher"];
$t1=$_POST["t1"];
$t2=$_POST["t2"];

$levels=$_POST["levels"];
$rolls=$_POST["rolls"];
$form=$_POST["form"];

$form=$_POST["form"];
$query="select * from marks where form='$take' and last_name='$classes'  and roll='$rolls' order by mxc19 ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		

		 <?php 
		 
		 $qry = mysql_query("select recs as total
from classes where class='$classes'  "); 
$row = mysql_fetch_assoc($qry); 
$ss=$row['total'];
		 if(empty($ss)){
			 
			 
			 
			 
		 }elseif($ss>="2" && $ss<="2"){
			
			require 'inds1f1.php';
			 
			 
		 }
			 
			 elseif($ss>="1" && $ss<="1"){
			
			require 'indf1.php';
			 
			 
		 }
			 
			 
			 
			 
			 
		 
		 
		 
		 
		 
		 
		 
		 
		 ?>
		 
		 
		 
		 
		 
		 <?php
		 } ?>
		 
		 
		 