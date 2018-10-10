<?php
include 'dbc.php';
require'function.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="Php Code for View, Search, Edit and Delete Record" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Search Student  Record</title>
<style>
</style>
<link href="styles.css" rel="stylesheet" type="text/css">
<style>
input[type=submit]{
    cursor: pointer;
    font-size: 16px;
    height: 24px;
    padding: 3px;
}
input[type=text], input[type=password], input[type=submit] {
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    -o-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
	background-color: rgb(246, 254, 231);
}
.rotate {


-webkit-transform: rotate(-50deg);


-moz-transform: rotate(-50deg);


-ms-transform: rotate(-50deg);


-o-transform: rotate(-50deg);


filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);

color:#989898;}
  
</style>
</head>
<body onload="window.print();" >


<?php
$roll=$_GET["roll"];
$query="select * from historic where roll='roll'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $nast=$row['student_name'];
$classy=$row['class'];

?>
<?php
}
?>
<?php
$roll=$_GET["roll"];
$qry = mysql_query("select  SUM(amount_paid) as total
from historic  where student_name='$nast' and class='$classy'"); 
$row = mysql_fetch_assoc($qry); 
$timm=$row['total']; 

?>
<div style="margin:auto; width:900px; height:auto;">


<div style="margin:auto; width:900px; height:100px; border-radius:5px 5px 5px 5px; border:1px solid #000;font-size:21px; text-align:center;">
<B>INTER COMPREHENSIVE HIGH SCHOOL BUEA</B>
<BR>Approval Ref. Ministerial Order No. JI/27/MINEDUC/DEP/SCAFES/BGS of 15th January 1991 Registration No: 6CC2WAD110875091

</div>
<div style=" float:left; width:700px;margin-top:17px;  height:34px; text-align:left;
font-size:18px; ">

<?php
$department=$_POST["department"];
$levels=$_POST["levels"];
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $take=$row[1];



?>
		 

<?php } ?>
</div>

<div style=" float:left; width:900px;  height:24px; text-align:left;
font-size:18px;text-align:center; ">
<?php echo $department;?> FEE RECORDS

<div style=" float:left; width:900px;  height:14px; text-align:left;font-weight:normal;
font-size:18px;text-align:left; ">
Department: &nbsp;<?php echo $department;?><br>
Year: <?php echo $take;?>
</div>
</div>




<div style=" float:left; width:900px;  height:auto; margin-top:45px; font-weight:normal;font-family:arail;">

<div style=" float:left; width:900px; background:#989898;  height:24px; text-align:left;font-weight:normal;
font-size:18px;text-align:left;border:1px solid #ccc; ">

<div style=" float:left; width:300px;  height:24px; text-align:left;font-weight:normal;
font-size:15px;text-align:left; border-right:1px solid #000; ">

Student Names
</div>


<div style=" float:left; width:100px;  height:24px; text-align:left;font-weight:normal;
font-size:18px;text-align:left; border-right:1px solid #000; ">

&nbsp;Matricule
</div>

<div style=" float:left; width:100px;  height:24px; text-align:left;font-weight:normal;
font-size:18px;text-align:left; border-right:1px solid #000; ">

&nbsp;&nbsp;Exp. Amt
</div>

<div style=" float:left; width:100px;  height:24px; text-align:left;font-weight:normal;
font-size:18px;text-align:left; border-right:1px solid #000; ">

&nbsp;&nbsp;Amt Paid
</div>


<div style=" float:left; width:100px;  height:24px; text-align:left;font-weight:normal;
font-size:18px;text-align:left;  ">

&nbsp;&nbsp;Scholarship
</div>

<div style=" float:left; width:100px;  height:24px; text-align:left;font-weight:normal;
font-size:18px;text-align:left;  ">

&nbsp;&nbsp;Balance
</div>





</div>

<?php
$search=$_POST["search"];
$flag=0;
$query="select * from historic where   oldb='$take' and amountpaid='$department' 




 order by student_name ASC ";
$result=mysql_query($query);
$i=1;
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		 ?>

<div style=" float:left; width:900px;  height:24px; text-align:left;font-weight:normal;
font-size:18px;text-align:left;border:1px solid #ccc; ">

<div style=" float:left; width:20px;  height:24px; text-align:left;font-weight:normal;
font-size:15px;text-align:left; border-right:1px solid #000; "><?php echo $i++;?></div>
<div style=" float:left; width:280px;  height:24px; text-align:left;font-weight:normal;
font-size:15px;text-align:left; border-right:1px solid #000; ">

<?php echo $fs=$row['student_name'];?>
</div>


<div style=" float:left; width:100px;  height:24px; text-align:left;font-weight:normal;
font-size:18px;text-align:left; border-right:1px solid #000; ">

&nbsp;<?php echo $rtttp=$row['matricule'];$expp=$row['expected_amount']; $paid= $row['amount_paid']; $balance=$row['balance'];?>
</div>

<div style=" float:left; width:100px;  height:24px; text-align:left;font-weight:normal;
font-size:18px;text-align:left; border-right:1px solid #000; ">

&nbsp;&nbsp;<?php $row['expected_amount'];





$qry = mysql_query("select SUM(items) as total
from boption where ids='$fs'and tick='1'  and db1='$take' "); 
$row = mysql_fetch_assoc($qry); 
$pee=$row['total'];

$rtsd=($expp-$pee);
?>

<?php

	$rtss=$rtsd;	  
$numbers =$rtss;

// english notation (default)
$english_format_number = number_format($numbers);
// 1,235

?><?PHP 









		  
echo number_format($numbers, 0, '.', ',');?>


</div>

<div style=" float:left; width:100px;  height:24px; text-align:left;font-weight:normal;
font-size:18px;text-align:left; border-right:1px solid #000; ">

&nbsp;&nbsp;


<?php


$qry = mysql_query("select SUM(sms) as total
from balancesheet where fname='$rtttp'  and db1='$take' "); 
$row = mysql_fetch_assoc($qry); 
 $sms=$row['total'];





	$rts=(($paid-$pee)-$sms);	  
$number  =$rts;

// english notation (default)
$english_format_number = number_format($number);
// 1,235

?><?PHP 









		  
echo number_format($number, 0, '.', ',');?>




</div>

<div style=" float:left; width:100px;  height:24px; text-align:left;font-weight:normal;
font-size:18px;text-align:left; border-right:1px solid #000; ">

&nbsp;&nbsp;


<?php

	$rtdfs=($sms);	  
$number  =$rtdfs;

// english notation (default)
$english_format_number = number_format($number);
// 1,235

?><?PHP 









		  
echo number_format($number, 0, '.', ',');?>




</div>


<div style=" float:left; width:100px;  height:24px; text-align:left;font-weight:normal;
font-size:18px;text-align:left;  ">

&nbsp;&nbsp;
<?php

	$rts=$balance;	  
$number  =$rts;

// english notation (default)
$english_format_number = number_format($number);
// 1,235

?><?PHP 









		  
echo number_format($number, 0, '.', ',');?>



</div>





</div>

<?php } ?>






