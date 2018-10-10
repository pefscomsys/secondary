<BR><?PHP
INCLUDE 'dbcs.PHP';

ini_set('max_execution_time', 300000); //300 seconds = 5 minutes
$follows=$_POST['follows'];

$bookss=$_POST['bookss'];

$stetsub=$_POST['stetsub'];


?>
<html>
<head>


</head>
<body>
<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $take=$row[1];



?>
		 

<?php } ?>


<div style=" width:800px; height:400px; margin:auto;MARGIN-TOP:35PX;">

<div style="float:left; width:800px; height:100px; border-radius:5px 5px 5px 5px; border:1px solid #000;font-size:21px; text-align:center;">
<B>INTER COMPREHENSIVE HIGH SCHOOL BUEA</B>
<BR>Approval Ref. Ministerial Order No. JI/27/MINEDUC/DEP/SCAFES/BGS of 15th January 1991 Registration No: 6CC2WAD110875091

</div>

<div style="float:left; width:800px; height:80px; margin-top:20px;text-align:center;">

<h3> Summary of Accessories and detail Account for <?php echo $take;?> Academic Year </h3>

</div>

<table cellspacing="0" cellpadding="0" width="800px">
<tr><th style="width:40px; border-left:1px solid #000; border-top:1px solid #000;border-bottom:1px solid #000;padding:4px;"> SN</th> 
<th  style="width:260px; border-left:1px solid #000; border-top:1px solid #000;border-bottom:1px solid #000;padding:4px;"> Accessoriess</th>
<th style="width:200px; border-left:1px solid #000; border-top:1px solid #000;border-bottom:1px solid #000;padding:4px;">&nbsp;Total
Student</th>

<th style="width:100px; border-left:1px solid #000; border-top:1px solid #000;border-bottom:1px solid #000;padding:4px;">&nbsp;Total
Unit Cost</th>
<th  style="width:200px; border-left:1px solid #000; border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;padding:4px;">Total Collected</th></tr>
<?php
				
$query="select * from options  ";
$result=mysql_query($query);$ii=1;
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		 
		 
		 
		 
		 
		 
<tr><td style="width:40px; border-left:1px solid #000; border-bottom:1px solid #000;padding:4px;text-align:center;"><?php echo $ii++;?></td> 
<td  style="width:260px; border-left:1px solid #000; border-bottom:1px solid #000;padding:4px;"> <?php echo $tm=$row["price"];$price=$row["items"];?></td>
<td style="width:200px; border-left:1px solid #000; border-bottom:1px solid #000;padding:4px;"> <?php
$qry = mysql_query("select * FROM  boption where price='$tm' and  tick='1' and db1='$take'  group by ids"); 
$num_rows=mysql_num_rows($qry);
  echo $richooTTTyss=$num_rows; ?></td>
  
  <td style="width:100px; border-left:1px solid #000; border-bottom:1px solid #000;padding:4px;"> (<?php

  echo $price; ?>)</td>
<td  style="width:200px; border-left:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;padding:4px;text-align:center;">

	<?php 
$qry = mysql_query("select  SUM(items) as total
from boption where price='$tm' and  tick='1' and db1='$take'"); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total'];

?></td></tr>

		 

<?php } ?>

<tr><th style="width:40px; border-left:1px solid #000; border-bottom:1px solid #000;padding:4px;"> </th> 
<th  style="width:260px; border-bottom:1px solid #000;padding:4px;"></th>
<th style="width:200px; border-bottom:1px solid #000;padding:4px;">
</th>
<th  style="width:200px; 
border-bottom:1px solid #000;padding:4px;">Total Collected</th>

<th style="width:100px; border-right:1px solid #000; border-bottom:1px solid #000;padding:4px;">
<?php 
$qry = mysql_query("select  SUM(items) as total
from boption where tick='1' and db1='$take'"); 
$row = mysql_fetch_assoc($qry); 
 $richooTTT=$row['total'];

?>


<?php
	  

$number  =$richooTTT;

// english notation (default)
$english_format_number = number_format($number);
// 1,235

?><?PHP 








		  
echo number_format($number, 0, '.', ',');?>






</th></tr>
</th></tr>
</table>


<div style="float:left; width:800px; height:80px; margin-top:20px;text-align:center;">

<h3> Summary of Registration Fees for <?php echo $take;?> Academic Year </h3>

</div>



<table cellspacing="0" cellpadding="0" width="800px">
<tr><th style="width:40px; border-left:1px solid #000; border-top:1px solid #000;border-bottom:1px solid #000;padding:4px;"> SN</th> 
<th  style="width:260px; border-left:1px solid #000; border-top:1px solid #000;border-bottom:1px solid #000;padding:4px;"> Classes</th>
<th style="width:200px; border-left:1px solid #000; border-top:1px solid #000;border-bottom:1px solid #000;padding:4px;">&nbsp;Total
Student</th>

<th style="width:100px; border-left:1px solid #000; border-top:1px solid #000;border-bottom:1px solid #000;padding:4px;">&nbsp;
Unit Cost</th>
<th  style="width:200px; border-left:1px solid #000; border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;padding:4px;">Total Collected</th></tr>
<?php
				
$query="select * from classes ";
$result=mysql_query($query);$iii=1;
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>

		 
		 
		 
		 
	 
		 
<tr><td style="width:40px; border-left:1px solid #000; border-bottom:1px solid #000;padding:4px;text-align:center;"><?php echo $iii++;?></td> 
<td  style="width:260px; border-left:1px solid #000; border-bottom:1px solid #000;padding:4px;"> <?php echo $tms=$row["class"];
$classs=$row["classs"];

$classx=$row["class"];

?></td>
<td style="width:200px; border-left:1px solid #000; border-bottom:1px solid #000;padding:4px;"> <?php
$qry = mysql_query("select * FROM  historic where class='$tms' and oldb='$take' "); 
$num_rows=mysql_num_rows($qry);
  echo $x1=$num_rows; ?></td>
  
  <td style="width:100px; border-left:1px solid #000; border-bottom:1px solid #000;padding:4px;"> 
  
<?php


 $qryx = "select  regfee as total
from   fees where vc='$classx' "; $qry=mysql_query($qryx);
$row = mysql_fetch_assoc($qry); 
echo $fees=$row['total'];






?></td>
<td  style="width:200px; border-left:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;padding:4px;text-align:center;">

	<?php 
	
	$mst=($fees*$x1);

$query1="update  classes set  
totals='$mst' , acc='$take' where class='$tms' 


";



mysql_query ($query1) or die ('could not updated:'.mysql_error());


?>
<?php
	  

$numbers  =$mst;

// english notation (default)
$english_format_number = number_format($numbers);
// 1,235

?><?PHP 








		  
echo number_format($numbers, 0, '.', ',');?>
</td></tr>

		 

<?php } ?>
		 
		 
		 
<tr><th style="width:40px; border-left:1px solid #000; border-bottom:1px solid #000;padding:4px;"> </th> 
<th  style="width:260px; border-bottom:1px solid #000;padding:4px;"></th>
<th style="width:200px; border-bottom:1px solid #000;padding:4px;">
</th>
<th  style="width:200px; 
border-bottom:1px solid #000;padding:4px;">Total Collected</th>

<th style="width:100px; border-right:1px solid #000; border-bottom:1px solid #000;padding:4px;">
<?php 
$qry = mysql_query("select  SUM(totals) as total
from classes where acc='$take' "); 
$row = mysql_fetch_assoc($qry); 
 $t1=$row['total'];

?>


<?php
	  

$numbert  =$t1;

// english notation (default)
$english_format_number = number_format($numbert);
// 1,235

?><?PHP 








		  
echo number_format($numbert, 0, '.', ',');?>






</th></tr>
</th></tr>
</table>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 

<div style="float:left; width:800px; height:80px; margin-top:20px;text-align:center;">

<h3> Summary of Tution Fees for <?php echo $take;?> Academic Year </h3>

</div>



<table cellspacing="0" cellpadding="0" width="1000px">
<tr><th style="width:40px; border-left:1px solid #000; border-top:1px solid #000;border-bottom:1px solid #000;padding:4px;"> SN</th> 
<th  style="width:260px; border-left:1px solid #000; border-top:1px solid #000;border-bottom:1px solid #000;padding:4px;"> Classes</th>
<th style="width:200px; border-left:1px solid #000; border-top:1px solid #000;border-bottom:1px solid #000;padding:4px;">&nbsp;Total
Student</th>

<th style="width:100px; border-left:1px solid #000; border-top:1px solid #000;border-bottom:1px solid #000;padding:4px;">&nbsp;
Unit Cost</th>
<th  style="width:200px; border-left:1px solid #000; border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;padding:4px;">Total Expected</th>

<th  style="width:100px; border-left:1px solid #000; border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;padding:4px;">Total Paid</th>
<?php
				
$query="select * from classes ";
$result=mysql_query($query);$iii=1;
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>

		 
		 
		 
		 
	 
		 
<tr><td style="width:40px; border-left:1px solid #000; border-bottom:1px solid #000;padding:4px;text-align:center;"><?php echo $iii++;?></td> 
<td  style="width:260px; border-left:1px solid #000; border-bottom:1px solid #000;padding:4px;"> <?php echo $tms=$row["class"];$exp=$row["expected"];
$classs=$row["classs"];


$qry = mysql_query("select  (df) as total
from fees where   vc ='$tms'   "); 
$row = mysql_fetch_assoc($qry); 
  $exp=$row['total'];

?></td>
<td style="width:200px; border-left:1px solid #000; border-bottom:1px solid #000;padding:4px;"> <?php
$qry = mysql_query("select * FROM  historic where class='$tms' and oldb='$take' "); 
$num_rows=mysql_num_rows($qry);
  echo $x1=$num_rows; ?></td>
  
  <td style="width:100px; border-left:1px solid #000; border-bottom:1px solid #000;padding:4px;"> 
  
<?php


$qry = mysql_query("select  SUM(amount_paid ) as total
from historic where   class ='$tms' and oldb='$take'  and oldb='$take'"); 
$row = mysql_fetch_assoc($qry); 
 $paid=$row['total'];









$qry = mysql_query("select  SUM(items) as total
from boption where   last_name='$tms' and tick='1' and db1='$take'"); 
$row = mysql_fetch_assoc($qry); 
 $yy=$row['total'];


$qry = mysql_query("select  (regfee) 	 as total
from   fees where classs ='$classs' "); 
$row = mysql_fetch_assoc($qry); 
 $fees=$row['total'];
 
$qry = mysql_query("select  (df) 	 as total
from   fees where classs='$classs' "); 
$row = mysql_fetch_assoc($qry); 
 $feex=$row['total'];
  Echo   $hm=($exp);
 
 ?></td>
<td  style="width:200px; border-left:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;padding:4px;text-align:center;">

	<?php 
	


$qry = mysql_query("select  SUM(items) as total
from boption where   last_name='$tms' and tick='1' and db1='$take'"); 
$row = mysql_fetch_assoc($qry); 
 $yy=$row['total'];

$qry = mysql_query("select  SUM(amount_paid ) as total
from historic where   class ='$tms' and oldb='$take' "); 
$row = mysql_fetch_assoc($qry); 
 $paid=$row['total'];

 
$qry = mysql_query("select  (regfee) 	 as total
from   fees where classs='$classs' "); 
$row = mysql_fetch_assoc($qry); 
 $fees=$row['total'];
 
 
 $qry = mysql_query("select * FROM  courses where levels='$tms'  and db1='$take' "); 
$num_rows=mysql_num_rows($qry);
 $x1=$num_rows;
 $pm=( $fees*$x1);
 
 $tty=($yy+$pm);
 $mbs=($paid-$tty);
	
	
	
	
	$mstt=($hm*$x1);
$tmsmm=($mstt);
$query1="update  classes set  expected='$feex',
tutions='$pm' , acc='$take' where class='$tms'


";



mysql_query ($query1) or die ('could not updated:'.mysql_error());


?>
<?php
	  

$numbers  =$tmsmm;

// english notation (default)
$english_format_number = number_format($numbers);
// 1,235

?><?PHP 








		  
echo number_format($numbers, 0, '.', ',');?>
</td>


<td  style="width:200px; border-left:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;padding:4px;text-align:center;">

	<?php 
	

$qry = mysql_query("select  SUM(items) as total
from boption where   last_name='$tms' and tick='1' and db1='$take' "); 
$row = mysql_fetch_assoc($qry); 
 $yy=$row['total'];

$qry = mysql_query("select  SUM(amount_paid ) as total
from historic where   class ='$tms' and oldb='$take' "); 
$row = mysql_fetch_assoc($qry); 
 $paid=$row['total'];

 
$qry = mysql_query("select  (regfee) 	 as total
from   fees where classs='$classs' "); 
$row = mysql_fetch_assoc($qry); 
 $fees=$row['total'];
 
 
 $qry = mysql_query("select * FROM  courses where levels='$tms' and db1='$take' "); 
$num_rows=mysql_num_rows($qry);
 $x1=$num_rows;
 $pm=( $fees*$x1);
 
 $tty=($yy+$pm);
 $mbs=($paid-$tty);
$ui=($yy+$fees);
	$paids=($paid-$ui);
	$mstt=($hm*$x1);
		$mxc11=$paid;
if(empty($mxc11)){
echo  $statusfbio="0";
 
$query1="update  classes set  
tutions='$mstt' ,collected='0', acc='$take' where class='$tms'


";

mysql_query ($query1) or die ('could not updated:'.mysql_error());

 
 }
 
elseif($mxc11>'' ){
	
$ui=($yy+$fees);
	$paids=($paid-$ui);
	$mstt=($hm*$x1);
$tmsmm=($mstt);
$query1="update  classes set  
tutions='$tmsmm' ,collected='$mbs', acc='$take' where class='$tms'


";

mysql_query ($query1) or die ('could not updated:'.mysql_error());
}
	
	




?>
<?php
	  

$mxc1r1=$paid;
if(empty($mxc1r1)){
	
	
echo  $numbert ="0";
}elseif($mxc1r1>''){
$numbert  =$mbs;

}


// english notation (default)
$english_format_number = number_format($numbert);
// 1,235

?><?PHP 








		  
echo number_format($numbert, 0, '.', ',');?>





</td>












</tr>

		 

<?php } ?>
		 
		 
		 
<tr><th style="width:40px; border-left:1px solid #000; border-bottom:1px solid #000;padding:4px;"> </th> 
<th  style="width:260px; border-bottom:1px solid #000;padding:4px;"></th>
<th style="width:200px; border-bottom:1px solid #000;padding:4px;">
</th>
<th  style="width:200px; 
border-bottom:1px solid #000;padding:4px;">Total Collected</th>

<th style="width:100px; border-right:1px solid #000; border-bottom:1px solid #000;padding:4px;">
<?php 
$qry = mysql_query("select  SUM(tutions) as total
from classes where acc='$take' "); 
$row = mysql_fetch_assoc($qry); 
 $t1s=$row['total'];

?>


<?php
	  

$mxc1r1=$t1s;
if(empty($mxc1r1)){
	
	
echo  $numbert ="0";
}elseif($mxc1r1>''){
$numbert  =$t1s;

}


// english notation (default)
$english_format_number = number_format($numbert);
// 1,235

?><?PHP 








		  
echo number_format($numbert, 0, '.', ',');?>






</th>






<th style="width:100px; border-right:1px solid #000; border-bottom:1px solid #000;padding:4px;">
<?php 
$qry = mysql_query("select  SUM(collected) as total
from classes where acc='$take' "); 
$row = mysql_fetch_assoc($qry); 
 $t1t=$row['total'];

?>


<?php
	  
$mxc1r1t=$t1t;
if(empty($mxc1r1t)){
	
	
echo  $numbertt ="0";
}elseif($mxc1r1t>''){
$numbertt =$t1t;

}


$numbertt  =$t1t;

// english notation (default)
$english_format_number = number_format($numbertt);
// 1,235

?><?PHP 








		  
echo number_format($numbertt, 0, '.', ',');?>






</th>










</tr>
</th></tr>
</table>
		 
		 
		 <br>
		  <br>
		  <br>
		 