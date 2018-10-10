<?php
include 'dbcs.php';?>

<?php
$roll=$_GET["3"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $take=$row[1];
 
?>



<?php } ?>



<?php
$roll=$_POST['roll'];
$matricule=$_POST['matricule'];
$scholarship=$_POST['scholarship'];

$amount_paid=$_POST['amount_paid'];
$paids=$_POST['paid'];$sex=$_POST['sex'];
$fname=$_POST['fname'];
$regfee=$_POST['regfee'];
$department=$_POST['department'];$expected_amount=$_POST['expected_amount'];
$barcode=$_POST['barcode'];$levels=$_POST['levels'];
$fmms="3";
$trans="Fees";

$mxc11=$scholarship;
if(empty($mxc11)){
$paid=$paids;


 $tm="0";
$balances=($expected_amount-$tm);
 }
elseif($mxc11>"" ){
	$paid="";$tttts=$paids;
 $tm=($amount_paid+$paids);
$balances=($expected_amount-$tm);
}




















$poll=$paids;
if(empty($poll)){


 $tmss=$tm;
$balancess=	$balances;
 }
elseif($poll>""){
	
	
 $tmss=($amount_paid+$paids);
$balancess=($expected_amount-$tmss);
}

elseif($poll>""  &&  $scholarship>""){
$paid="";$tttt=$paids;
 $tmss=($amount_paid+$paids);
$balancess=($expected_amount-$tmss);
}

elseif($poll>""  &&  $scholarship=""){
$paid=$paids;
 $tmss=($amount_paid+$paids);
$balancess=($expected_amount-$tmss);
}


echo $balancess;
$month=date("m");

$day=date("j");
$y=date("Y");

$dates=date("Y-m-j");
$time=date("H:i:s");




$query5="insert into balancesheet  set  
id='3',name='FEES',amount='0',amount2='0',folk='$paid',
date='$dates',fname='$matricule',month='$month',day='$day',xclass='$department',db1='$take',scholarship='$scholarship',status='$fname',time='$time',sms='$tttts',page='graph/html/printrestt.php'
,year='$y'";



$query55="update historic set  amount_paid='$tmss',balance='$balancess' where roll='$roll' and  class='$department' and oldb='$take'  ";
mysql_query ($query55) or die ('could not updated:'.mysql_error());

mysql_query ($query5) or die ('could not updated:'.mysql_error());
echo "<script>alert('Update Recorded Successfully!'); </script>";
 
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=updateb.php?usr_name=$mats'>";
?>

