<?php 
include 'dbc.php';
page_protect();


 $notes=$_SESSION['user_name'];






?>
 
<br><br>
<html
>
<head>

<style type="text/css">
   .RolloverMenu { width:250px; font-size:11pt; font-weight:bold; color:#000000; background:rgb(180,235,230);}
   .RolloverMenu ul{ list-style-type:none; margin:0; padding:0;}
   .RolloverMenu li{  margin:2px; text-align:center; }
  .RolloverMenu a{ display:block; margin:0; padding:4px; border:1pt solid black; text-decoration:none;}
  .RolloverMenu a:hover{ background:#BFD9FF}
  .RolloverMenu a:link, .RolloverMenu a:active, .RolloverMenu a:visited{ color:#000000;}
    </style>
<title>Welcome </title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
<link href="cxcss.css" rel="stylesheet" type="text/css" />
</head>
</body><?php
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
<b>INTER COMPREHENSIVE HIGH SCHOOL BUEA <br>
Approval Ref. Ministerial Order No. JI/27/MINEDUC/DEP/SCAFES/BGS <br>of 15th January 1991 Registration No: 6CC2WAD110875091
</b>

</b>

<br>
Historic for the Accademic Year <?php
echo $db1;
?>
<?php } ?>

 
</div>
<div style="margin:auto; width:800px; height:auto;   ">

<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<?php $take=$row[1];

?>
<?php } ?>






<br>
<br>
<br><b style="color:#000;">
Expenditure Record for the <?php
echo $take;
?> Academic Year
</b>
 
<table width="800" cellspacing="0"style="background:#fff;">
		 <tr>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	<td style="text-align:left; width:70px;height:25px;background:#fff; color:#000;padding:3px;border-top:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;">

		Date
		 </td>
		 	
		
		
	<td style="text-align:left; width:70px;height:25px;background:#fff; color:#000;padding:3px;border-top:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;">

		Voucher #
		 </td>
		 <td style="text-align:left; width:70px;height:25px;background:#fff; color:#000;padding:3px;border-top:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;">

		Budget Head
		 </td>
		 
		 
		 
		 
		 
		 
		 
		 
		 
	<td  style="text-align:left; width:200px;height:25px;background:#fff; color:#000; padding:3px;border-top:1px solid #000;border-right:1px solid #000;">	 

Expenditure Head

		 
	</td>
		




		<td style="text-align:left; width:100px;height:25px;background:#fff; color:#000; padding:3px;border-top:1px solid #000;border-right:1px solid #000;">
		
		
	Beneficiary
		 
	</td>
		




<td style="text-align:left; width:100px;height:25px;background:#fff; color:#000; padding:3px;border-top:1px solid #000;border-right:1px solid #000;">
	Purpose
	</td >
	



<td style="text-align:left; width:100px;height:25px;background:#fff; color:#000; padding:3px;border-top:1px solid #000;border-right:1px solid #000;">
	
		Amount
	</td >	

<td style="text-align:left; width:100px;height:25px;background:#fff; color:#000; padding:3px;border-top:1px solid #000;border-right:1px solid #000;">
	
		Time
	</td >	
		</tr>	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		</tr>
<?php
$query="select * from balancesheet where db1='$take'  and id='5'   ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		 ?>
		
		 
		 
		 
		 
		  <tr>
		  <td style="text-align:left; width:82px;height:25px;background:#fff; color:#000;padding:3px;border-top:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;">

		<?php   $mb=$row["motive"]; $m=$row["status"];$date=$row["date"];$time=$row["time"];$qm=$row["quantity"];$head=$row["bhead"];
		
		
echo $date; ?> 
		 </td>  <td style="text-align:left; width:82px;height:25px;background:#fff; color:#000;padding:3px;border-top:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;">

		<?php  echo $mb=$row["idcard"];
		
		
?> 
		 </td>
		 <td style="text-align:left; width:50px;height:25px;background:#fff; color:#000;padding:3px;border-top:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;">

		<?php   echo $row["idcardno"]; ?> 
		 </td>
		 
		 
		 
		 
		 
		 
		 
		 <td style="text-align:left; width:70px;height:25px;background:#fff; color:#000;padding:3px;border-top:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;">

		<?php  
$qry = mysql_query("select fname as total
from exss where code='$mb'   "); 
$row = mysql_fetch_assoc($qry); 
echo $marks11=$row['total']; ?> 
		 </td>
		 
		 
	<td  style="text-align:left; width:350px;height:25px;background:#fff; color:#000; padding:3px;border-top:1px solid #000;border-right:1px solid #000;">	 




		<?php echo $m;?>
		 
	</td>
		




		<td style="text-align:left; width:100px;height:25px;background:#fff; color:#000; padding:3px;border-top:1px solid #000;border-right:1px solid #000;">
		
		<?php echo $qm;?>
		 
	</td>
		




<td style="text-align:left; width:100px;height:25px;background:#fff; color:#000; padding:3px;border-top:1px solid #000;border-right:1px solid #000;">
	<?php 

$qry = mysql_query("select expenditure as total
from balancesheet where motive='$mb' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
echo $marks11=$row['total']; 
 ?>
	</td >
	



<td style="text-align:left; width:100px;height:25px;background:#fff; color:#000; padding:3px;border-top:1px solid #000;border-right:1px solid #000;">
	
		<?php echo $time;?>
	</td >	
		</tr>
<?php } ?>
		  <tr><td style="text-align:left; width:70px;height:25px;background:#fff; 
		  padding:3px;border-top:1px solid #000;border-left:1px solid #000;color:#000;border-bottom:1px solid #000;">

		 </td>
	<td  style="text-align:left; width:350px;height:25px; background:#fff; color:#000;border-bottom:1px solid #000;padding:3px;
	border-top:1px solid #000;">	 



		 
	</td>
		
	<td  style="text-align:left; width:350px;height:25px;background:#fff; color:#000; border-bottom:1px solid #000;padding:3px;
	border-top:1px solid #000;">	 



		 
	</td>
		



		<td style="text-align:left; width:50px;height:25px;
		padding:3px;border-top:1px solid #000;background:#fff;color:#000; border-right:1px solid #000;border-bottom:1px solid #000;">
		Total
		 
	</td>
		




<td style="text-align:left; width:100px;height:25px;background:#fff;color:#000;  border-bottom:1px solid #000;padding:3px;border-top:1px solid #000;border-right:1px solid #000;">
	<?php 

$qry = mysql_query("select sum(expenditure) as total
from balancesheet where db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
echo $used=$row['total']; 
 ?>
	</td >
		 
		</tr>
</table>
<Br><br>





<br>
<br><b style="color:#000;">
Net Balance = <u><b><?php
 $rt=$used;
?><?php

		  
$number  =$rt;

// english notation (default)
$english_format_number = number_format($number);
// 1,235

?><?PHP 









		  
echo number_format($number, 0, '.', ',');?> </b></u>
<Br><br>





<br>
