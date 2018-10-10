<?php

include 'dbcs.php';

page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;




 $ip=@$_SERVER['REMOTE_ADDR'];
 
?>
<?php
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $db1=$row[1];


?><?php } ?>
<div  style="text-align:center; margin:auto; width:900px; height:150px;">
 <?php
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<b>INTER COMPREHENSIVE HIGH SCHOOL BUEA <br>
Approval Ref. Ministerial Order No. JI/27/MINEDUC/DEP/SCAFES/BGS <br>of 15th January 1991 Registration No: 6CC2WAD110875091
</b>

</b>

<br>
Historic for the Accademic Year <?php
echo $db1;?>
<?php } ?>

 
<br>
<br>
<br>
<br>
<br>
<br>
<table width="800" cellspacing="0"style="background:#fff;">
<?php
$query="select * from exss    ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		 ?>
		
		 
		 
		 
		 
		  <tr><td style="text-align:left; width:70px;height:25px; padding:3px;border-top:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;">

		<?php echo $mb=$row["code"];?> 
		 </td>
	<td  style="text-align:left; width:350px;height:25px; padding:3px;border-top:1px solid #000;border-right:1px solid #000;">	 




		<?php echo $m=$row["fname"];?>
		 
	</td>
		




		<td style="text-align:left; width:50px;height:25px; padding:3px;border-top:1px solid #000;border-right:1px solid #000;">
		
		 
	</td>
		




<td style="text-align:left; width:100px;height:25px; padding:3px;border-top:1px solid #000;border-right:1px solid #000;">
	<?php 

$qry = mysql_query("select sum(expected_amount) as total
from exm where motive='$mb' and db1='$db1'  "); 
$row = mysql_fetch_assoc($qry); 
echo $marks11=$row['total']; 
 ?>
	</td >
		 
		</tr>
<?php } ?>
		  <tr><td style="text-align:left; width:70px;height:25px;
		  padding:3px;border-top:1px solid #000;border-left:1px solid #000;border-bottom:1px solid #000;">

		 </td>
	<td  style="text-align:left; width:350px;height:25px; border-bottom:1px solid #000;padding:3px;
	border-top:1px solid #000;">	 



		 
	</td>
		




		<td style="text-align:left; width:50px;height:25px;
		padding:3px;border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">
		Total
		 
	</td>
		




<td style="text-align:left; width:100px;height:25px; border-bottom:1px solid #000;padding:3px;border-top:1px solid #000;border-right:1px solid #000;">
	<?php 

$qry = mysql_query("select sum(expected_amount) as total
from exm where db1='$db1'  "); 
$row = mysql_fetch_assoc($qry); 
 $marks11=$row['total']; 
?>
<?php

$number  = $marks11;

// english notation (default)
echo $english_format_number = number_format($number);
// 1,235

?>
	</td >
		 
		</tr>
</table>
<Br><br>
