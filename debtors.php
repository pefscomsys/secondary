<?php
include 'dbc.php';
require'function.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="Php Code for View, Search, Edit and Delete Record" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Receipts</title>
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
<body >
<div style=" width:800px; height:400px; margin:auto;MARGIN-TOP:35PX;">

<div style="float:left; width:800px; height:100px; border-radius:5px 5px 5px 5px; border:1px solid #000;font-size:21px; text-align:center;">
<B>INTER COMPREHENSIVE HIGH SCHOOL BUEA</B>
<BR>Approval Ref. Ministerial Order No. JI/27/MINEDUC/DEP/SCAFES/BGS of 15th January 1991 Registration No: 6CC2WAD110875091

</div>
<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $take=$row[1];



?>
							
 

<?php } ?><br><br><br><h2 style="float:left;width:800px; margin-top:20px; text-align:center; height:50px;">STATEMENT OF A/CS FOR <?php echo $take;



?> AS OF 							
<?php echo $date=date("j/m/Y");



?> FOR BOTH CYCLES		</h2>

<div style="float:left;width:800px; margin-top:20px;  height:150px;">

<div style="float:left;width:200px;  height:25px;">
Total No of Student
</div>
<div style="float:left;width:600px;  height:25px;">
<?php


$qry = mysql_query("select * FROM  marks where form='$take' "); 
$num_rows=mysql_num_rows($qry);
 echo  $s=$num_rows; 

  ?>
</div>


<div style="float:left;width:200px;  height:25px;">
1<sup>st </sup> Cycle
</div>
<div style="float:left;width:600px;  height:25px;">
<?php
$qry = mysql_query("select * FROM  marks where form='$take' and last_name>='FORM 1' AND last_name<='FORM 5' "); 
$num_rows=mysql_num_rows($qry);
 $s1=$num_rows; 
 
 $qry = mysql_query("select * FROM  marks where form='$take' and last_name>='COM1' AND last_name<='COM5' "); 
$num_rows=mysql_num_rows($qry);
 $s2=$num_rows;
 
 
 $qry = mysql_query("select * FROM  marks where form='$take' and last_name>='BC-1' AND last_name<='BC-5' "); 
$num_rows=mysql_num_rows($qry);
 $s3=$num_rows;
 
 $qry = mysql_query("select * FROM  marks where form='$take' and last_name>='CJ-1' AND last_name<='CJ-5' "); 
$num_rows=mysql_num_rows($qry);
 $s4=$num_rows;
 
 $qry = mysql_query("select * FROM  marks where form='$take' and last_name>='MM-1' AND last_name<='MM-5' "); 
$num_rows=mysql_num_rows($qry);
 $s5=$num_rows;
 
 $qry = mysql_query("select * FROM  marks where form='$take' and last_name>='WMF-1' AND last_name<='WMF-5' "); 
$num_rows=mysql_num_rows($qry);
 $s6=$num_rows;
 
 $qry = mysql_query("select * FROM  marks where form='$take' and last_name>='EE-1' AND last_name<='EE-5' "); 
$num_rows=mysql_num_rows($qry);
 $s7=$num_rows;
 
 
 $xt=($s1+$s2+$s3+$s4+$s5+$s6+$s7);
 
 echo ($xt);
 $nm=($s-$xt);
 ?>
</div>

<div style="float:left;width:200px;  height:25px;">
2<sup>nd</sup>  Cycle
</div>
<div style="float:left;width:600px;  height:25px;">
<?php echo $nm;?>
</div>



<div style="float:left;width:300px;  height:25px;">
Expected Tution Fee 1<sup>st</sup> Cycle
</div>
<div style="float:left;width:500px;  height:25px;">
<?php




$qry = mysql_query("select sum(expected_amount) as total
from historic where oldb='$take' and  class>='FORM 1' and  class<='FORM 5' "); 
$row = mysql_fetch_assoc($qry); 
echo $saves=$row['total']; 
 

 
 ?>
</div>

<div style="float:left;width:300px;  height:25px;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2<sup>nd</sup> Cycle
</div>
<div style="float:left;width:500px;  height:25px;">
<?php




$qry = mysql_query("select sum(expected_amount) as total
from historic where oldb='$take' "); 
$row = mysql_fetch_assoc($qry); 
 $ts=$row['total']; 
 

$qry = mysql_query("select sum(expected_amount) as total
from historic where oldb='$take' and  class>='BC-1' and  class<='BC-1' "); 
$row = mysql_fetch_assoc($qry); 
 $ts1=$row['total']; 
 
 

$qry = mysql_query("select sum(expected_amount) as total
from historic where oldb='$take' and  class>='CJ-1' and  class<='CJ-5' "); 
$row = mysql_fetch_assoc($qry); 
 $ts2=$row['total']; 
 
 

$qry = mysql_query("select sum(expected_amount) as total
from historic where oldb='$take' and  class>='MM-1' and  class<='MM-5' "); 
$row = mysql_fetch_assoc($qry); 
 $ts3=$row['total']; 
 
 
 
 

$qry = mysql_query("select sum(expected_amount) as total
from historic where oldb='$take' and  class>='EE-1' and  class<='EE-5' "); 
$row = mysql_fetch_assoc($qry); 
 $ts4=$row['total']; 
 
 
 

$qry = mysql_query("select sum(expected_amount) as total
from historic where oldb='$take' and  class>='WMF-1' and  class<='WMF-5' "); 
$row = mysql_fetch_assoc($qry); 
 $ts5=$row['total']; 
 
$qry = mysql_query("select sum(expected_amount) as total
from historic where oldb='$take' and  class>='COM1' and  class<='COM5' "); 
$row = mysql_fetch_assoc($qry); 
 $ts6=$row['total']; 
 
 
$qry = mysql_query("select sum(expected_amount) as total
from historic where oldb='$take' and  class>='FORM 1' and  class<='FORM 5' "); 
$row = mysql_fetch_assoc($qry); 
 $ts7=$row['total']; 
 
  $kk=($ts1+$ts2+$ts3+$ts4+$ts5+$ts6+$ts7);
 
 echo ($ts-$kk);
 
 
 
 
 
 
 
 ?>
</div>






</div>


<div style="float:left;width:800px; margin-top:20px;  height:150px;">

<div style="float:left;width:400px;  height:25px;">
Total Expected Tuition fee
</div>
<div style="float:left;width:400px;  height:25px;">
<?php


$qry = mysql_query("select sum(tutions) as total
from classes where acc='$take'  "); 
$row = mysql_fetch_assoc($qry); 
echo $saves=$row['total']; 
  ?>
</div>




<div style="float:left;width:400px;  height:25px;">
Less Fees Still owed by Students as of <?php echo $date;?>
</div>
<div style="float:left;width:400px;  height:25px;">
<?php

$qry = mysql_query("select sum(collected) as total
from classes where acc='$take'  "); 
$row = mysql_fetch_assoc($qry); 
 $sms=$row['total']; 

 echo $tss=($saves-$sms); 

  ?>
</div>



<div style="float:left;width:400px;  height:25px;">
Total Amount Collected under Tuition 
</div>
<div style="float:left;width:400px;  height:25px;">
<b><u><?php



 echo  $sms; 

  ?></u></b>
</div>












</div>

<div style="float:left;width:800px;  height:25px;font-weight:bold;text-transform:uppercase;">
<div style="float:left;width:200px;  height:25px;">
Bank Name
</div>
<div style="float:left;width:200px;  height:25px;">
Account Number
</div>
<div style="float:left;width:400px;  height:25px;">
</div></div>
<?php
$roll=$_GET["roll"];
$query="select * from accounts ";
$result=mysql_query($query);$i=1;
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<div style="float:left;width:550px;  height:25px;">
 Cash at <?php echo $row["bname"];?> excluding Bank interest for  <?php echo $take;?> 
</div>
<div style="float:left;width:100px;  height:25px;">
<?php echo $bm=$row["acnumber"];?>
</div>
<div style="float:left;width:150px;  height:25px;">
<b><u><?php



$qry = mysql_query("select sum(amount) as total
from trans where acnumber='$bm' "); 
$row = mysql_fetch_assoc($qry); 
 echo $tss=$row['total']; 
  ?></u></b>
</div>










<?php } ?>

<div style="float:left;width:550px;  height:25px;">
 Loans Refunded  by Staff  <?php echo $take;?> 
</div>
<div style="float:left;width:100px;  height:25px;">
<?php echo $bm=$row["acnumber"];?>
</div>
<div style="float:left;width:150px;  height:25px;">
<b><u><?php



$qry = mysql_query("select sum(amount) as total
from trans where acnumber='$bm' "); 
$row = mysql_fetch_assoc($qry); 
 echo $tss=$row['total']; 
  ?></u></b>
</div>

<div style="margin:auto; width:800px; height:55px; margin-top:5px;">

<div style="float:left; width:200px; height:25px;">
<div style="float:left; width:200px; height:25px;">
_________________________________________
</div>
<div style="float:left; width:200px; height:10px;"><i>Signature of Receiver</i>
</div>
</div>


</div>
