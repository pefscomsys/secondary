
<?php
include 'dbc.php';

ini_set('max_execution_time', 300000); //300 seconds = 5 minutes
?>

<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $take=$row[1];

?>
<?php } ?>


<?php
 $classes=$_POST["name1"];

		 ?>
		 
		 
		 
		 <?php 
		 
		 $qry = mysql_query("select recs as total
from classes where class='$classes'  "); 
$row = mysql_fetch_assoc($qry); 
$ss=$row['total'];
		 if(empty($ss)){
			 
			 
			 
			 
		 }elseif($ss>="2" && $ss<="2"){
			
			require 'inds2f2.php';
			 
			 
		 }
			 
			 elseif($ss>="1" && $ss<="1"){
			
			require 'inds2f1.php';
			 
			 
		 }

		 ?>
		 
		 
		 














