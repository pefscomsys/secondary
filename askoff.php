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
$matricule=$_POST['matricule'];
$scholarship=$_POST['scholarship'];
$amount_paid=$_POST['amount_paid'];
$paid=$_POST['amount_paid'];
$sex=$_POST['sex'];
$fname=$_POST['fname'];
$famount=$_POST['famount'];
$regfee=$_POST['regfee'];
$c110=$_POST['c110'];
 $sex=$_POST['sex'];
 $levels=$_POST['levels'];
$departmentpp=$_POST['departmentpp'];


$expected_amount=$_POST['expected_amount'];

$amount_paid=$_POST['amount_paid'];
$barcode=$_POST['barcode'];
$levels=$_POST['levels'];
$fmms="3";
$trans="Fees";

$month=date("m");

$day=date("j");
$y=date("Y");
$mmi=($expected_amount+$famount);
$dates=date("Y-m-j");
$time=date("H:i:s");
$tm=($paid);
$balances=(($mmi)-$tm);
$i = 0;
 foreach($_POST["item"] as $roll)
 {

  
  mysql_query("insert into boption SET
               items='".$_POST['item'][$i]."',
			   
               db1='".$_POST['db1'][$i]."',

               price='".$_POST['price'][$i]."',
               ids='".$fname."',
               tick='".$_POST['tick'][$i]."',
			   
               last_name='".$departmentpp."',
               date='".$_POST['date'][$i]."'
               
               ");
  $i++;

               


 }
 
$query5="insert into balancesheet  set  
id='3',name='FEES',amount='0',amount2='0',folk='$paid',
date='$dates',fname='$matricule',month='$month',day='$day',db1='$take',scholarship='$scholarship',status='$fname',time='$time'
,year='$y',xclass='$departmentpp' ";



$query55="insert into courses  set  

fname='$fname',matricule='$matricule',departmet='$departmentpp',levels='$levels',c110='$c110',db1='$take'
,barcode='$barcode'";


$query22="insert into marks set  
first_name='$fname',
matricule='$matricule',
form='$take',sex='$sex',
last_name='$departmentpp'



";
$query555="insert into historic set  student_name='$fname',class='$departmentpp',bfms='$famount',amountpaid='$departmentpp',expected_amount='$mmi',amount_paid='$tm',balance='$balances',year='$Y',month='$month',xxx='$day' ,date='$dates',matricule='$matricule' ,oldb='$take' ";

mysql_query ($query22) or die ('could not updated:'.mysql_error());
mysql_query ($query555) or die ('could not updated:'.mysql_error());
mysql_query ($query55) or die ('could not updated:'.mysql_error());
mysql_query ($query5) or die ('could not updated:'.mysql_error());

echo "<script>alert('Update Recorded Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=updatebu.php?usr_name=$mats'>";
?>

