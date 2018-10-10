<?php
include 'dbc.php';
require'function.php';
?>
<?php
$roll=$_GET["roll"];
echo $query="select  from balancesheet where recid='$roll' ";
$result=mysql_query($query);$i=1;
		 while ($row = mysql_fetch_array($result)) {
		 
		 $take=$row["db1"];
		 ?><?php } ?>
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
$roll=$_GET["roll"];
$query="select * from balancesheet where recid='$roll' and db1='$take'";
$result=mysql_query($query);$i=1;
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<div style="float:left; width:800px; height:25px; margin-top:20px;">

<div style="float:left; width:350px; height:25px; border-radius:5px 5px 5px 5px; border:1px solid #000;background:#ccc;">
RECEIPT NO: <?PHP echo $row["recid"];?>
</div>





</div>



<?php  $mats=$row['fname'];
$m5=$row['xclass'];
$dates=$row['date'];
$dates=$row['date'];
$a1=$row['amount'];$a2=$row['amount2'];$a1=$row['amount'];$a3=$row['folk'];$a4=$row['scholarship'];
$tols=($a1+$a2+$a3+$a4);
?>
<div style="float:left; width:800px;margin-top:20px; height:100px;">





<div style="float:left; width:110px; height:25px;">
NAME (S):
</div>



<div style="float:left; width:600px; height:25px;text-transform:uppercase; border-bottom:1px solid #000;">
<i><?php 
$qry = mysql_query("select fname as total
from courses where matricule='$mats' and  db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
 echo $savee4=$row['total'];  ?></i>
 
</div>


<div style="float:left; width:110px; height:25px;">
MATRICULE
</div>



<div style="float:left; width:150px; height:25px; border-bottom:1px solid #000;">
<?php echo $mats;?>
</div>




<div style="float:left; width:130px; height:25px;">
CLASS/SERIES
</div>



<div style="float:left; width:340px; height:25px; border-bottom:1px solid #000;">
<?php echo $m5;?>
</div>


<div style="float:left; width:800px; height:130px;margin-top:20px; border-radius:5px 5px 5px 5px; border:1px solid #000;font-size:21px; text-align:center;">

<div style="float:left; width:60px; height:30px;background:#ccc;border-right:1px solid #000;">
SN
</div><div style="float:left; width:340px; height:30px;background:#ccc;border-right:1px solid #000;">
Description
</div>

<div style="float:left; width:140px; height:30px;background:#ccc;border-right:1px solid #000;">
Expected Amt
</div>


<div style="float:left; width:130px; height:30px;background:#ccc;border-right:1px solid #000;">
Amount P.
</div>


<div style="float:left; width:125px; height:30px;background:#ccc;">
Balance
</div>



 <?php
 
 
 
$qry = mysql_query("select levels as total
from courses where matricule='$mats'  and levels='$m5'and  db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
 $levels=$row['total']; 




 
$qry = mysql_query("select expected_amount as total
from historic where matricule='$mats'  and amountpaid='$m5'and  oldb='$take'  "); 
$row = mysql_fetch_assoc($qry); 
 $exps=$row['total']; 




$qry = mysql_query("select SUM(price) as total
from boption where ids='$savee4'and tick='1'  and db1='$take' "); 
$row = mysql_fetch_assoc($qry); 
$pee=$row['total'];

$exp=($exps-$pee);

$tol=($tols-$pee);



 ?>

<div style="float:left; width:60px;font-size:14px; height:30px;border-right:1px solid #000;border-bottom:1px solid #000;">
<?PHP echo $i++;?>
</div><div style="float:left; width:340px;font-size:14px; height:30px;border-right:1px solid #000;border-bottom:1px solid #000;">
SCHOOL FEES & REGISTRATION
</div>

<div style="float:left; width:140px;font-size:14px; height:30px;border-right:1px solid #000;border-bottom:1px solid #000;">
<?PHP echo $exp;?>
</div>


<div style="float:left; width:130px; font-size:14px;height:30px;border-right:1px solid #000;border-bottom:1px solid #000;">
<?PHP echo $tol;?>
</div>


<div style="float:left; width:125px;font-size:14px; height:30px;border-bottom:1px solid #000;">
<?PHP echo ($exp-$tol);?>
</div>


 
 <?php } ?>

</div>

</div></div>
<div style="margin:auto; width:800px; height:25px; margin-top:-20px;text-transform:uppercase;">In Word: <b><i><?php




 echo convert_number_to_words($tol);


?> Francs C.F.A</i></b>
</div>
</div>
<div style="margin:auto; width:800px; height:25px; margin-top:5px;">
<div style="float:left; width:590px; height:25px;">

</div>
<div style="float:left; width:200px; height:25px; border-radius:5px 5px 5px 5px; border:1px solid #000;background:#ccc;">
<b><i><?PHP echo $tol;?></i></b>
</div>





</div>


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





















<?php
$date=date("j/m/Y");

$query="select * from boption where ids='$savee4' and db1='$take'  and tick='1' AND date='$date'";
$result=mysql_query($query);$i=1;
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<div style=" width:800px; height:400px; margin:auto;MARGIN-TOP:45PX;">

<div style="float:left; width:800px; height:100px; border-radius:5px 5px 5px 5px; border:1px solid #000;font-size:21px; text-align:center;">
<B>INTER COMPREHENSIVE HIGH SCHOOL BUEA</B>
<BR>Approval Ref. Ministerial Order No. JI/27/MINEDUC/DEP/SCAFES/BGS of 15th January 1991 Registration No: 6CC2WAD110875091

</div>
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
$roll=$_GET["roll"];
$query="select * from balancesheet where recid='$roll' and db1='$take'";
$result=mysql_query($query);$i=1;
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<div style="float:left; width:800px; height:25px; margin-top:20px;">

<div style="float:left; width:350px; height:25px; border-radius:5px 5px 5px 5px; border:1px solid #000;background:#ccc;">
RECEIPT NO: <?PHP echo $row["recid"];?>
</div>





</div>



<?php  $mats=$row['fname'];
$m5=$row['xclass'];
$dates=$row['date'];
$dates=$row['date'];
$a1=$row['amount'];$a2=$row['amount2'];$a1=$row['amount'];$a3=$row['folk'];$a4=$row['scholarship'];
$tol=($a1+$a2+$a3+$a4);
?>
<div style="float:left; width:800px;margin-top:20px; height:100px;">


<div style="float:left; width:110px; height:25px;">
NAME (S):
</div>



<div style="float:left; width:600px; height:25px;text-transform:uppercase; border-bottom:1px solid #000;">
<i><?php 
$qry = mysql_query("select fname as total
from courses where matricule='$mats' and  db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
 echo $savee4=$row['total'];  ?></i>
 
</div>


<div style="float:left; width:110px; height:25px;">
MATRICULE
</div>



<div style="float:left; width:150px; height:25px; border-bottom:1px solid #000;">
<?php echo $mats;?>
</div>




<div style="float:left; width:130px; height:25px;">
CLASS/SERIES
</div>



<div style="float:left; width:340px; height:25px; border-bottom:1px solid #000;">
<?php echo $m5;?>
</div>

<h4>OPTIONS PAID FOR </H4>

<?php } 

}

?>


<div style="margin:auto; width:800px;margin-top:10px; height:70PX; border-radius:5px 5px 5px 5px; border:1px solid #000;">
<?php
$date=date("j/m/Y");

$query="select * from boption where ids='$savee4' and db1='$take'  and tick='1'  AND date='$date'";
$result=mysql_query($query);$i=1;
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<div style="float:left; width:50px; height:25px;">
<input type="radio" value=""style="background:green;">
</div>

<div style="float:left; width:130px; height:25px;">
<?php echo $row["items"];?>
</div>
<div style="float:left; width:130px; height:25px;">
=<?php echo $row["price"];?>,
</div>
<?PHP } ?>
</div>


<div style="margin:auto; width:800px;margin-top:10px; height:30PX; ">
TOTAL:<b> <u><?php echo $pee;?> frs C.F.A</u></b>
</div>
<div style="margin:auto; width:800px; height:55px; margin-top:5px;">

<div style="float:left; width:200px; height:25px;">
<div style="float:left; width:200px; height:25px;">
_________________________________________
</div>
<div style="float:left; width:200px; height:10px;"><i>Signature of Receiver <?php 
 echo $take;  ?>


</div>
</div>


</div>
