<?php include 'dbcs.php';


page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
$nki=$_GET['roll'];

?><?php


$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?>
<?php } ?><?php

$query="select * from matts where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $mst=$row[1];
$NJI= $mst+1;
?>
<?php } ?><?php
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php  $db1=$row[1];


?><?php } ?>
<?php
$first_name=mysql_real_escape_string($_POST['first_name']);
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];

$fname="$first_name $middle_name $last_name";

$month=$_POST['month'];

$day=$_POST['day'];

$year=$_POST['year'];

$dbirth="$day/$month/$year";

$place=$_POST['place'];

$nation=$_POST['nation'];
$sex=$_POST['sex'];
$departmentpp=$_POST['departmentpp'];
$religion=$_POST['religion'];
$qualification=$_POST['qualification'];

$expected_amount=$_POST['expected_amount'];

$expected_amounts=($expected_amount+$pee);
$amount_paid=$_POST['amount_paid'];
$address=$_POST['address'];
$city=$_POST['city'];

$farm=$_POST['farm'];
$cateory=$_POST['category'];

$levels=$_POST['levels'];


$contact1=$_POST['contact1'];
$contact2=$_POST['contact2'];


$guardian1=$_POST['gaurdain1'];
$guardian2=$_POST['guardian2'];

$hschool=$_POST['hschool'];
$hgrade=$_POST['hgrade'];

$oschool=$_POST['oschool'];
$ograde=$_POST['ograde'];

$motive=$_POST['motive'];


$father=$_POST['father'];
$mother=$_POST['mother'];

$matriculex=$_POST['matriculex'];

$matricule=$_POST['matricule'];
$cc=$_POST['department'];
$mxc11=$cc;
if(empty($mxc11)){

 $statusfbiomxc11="X";}
elseif($mxc11>='01' && $mxc11<='01'  ){

$statusfbiomxc11="ACCOUNTANCY"; 
}
elseif($mxc11>='02' && $mxc11<='02'  ){

$statusfbiomxc11="BANKING AND FINANCE"; 
}
elseif($mxc11>='03' && $mxc11<='03'  ){

$statusfbiomxc11="INSURANCE"; 
}

elseif($mxc11>='04' && $mxc11<='04'  ){

$statusfbiomxc11="MANAGEMENT"; 
}
elseif($mxc11>='05' && $mxc11<='05'  ){

$statusfbiomxc11="MARKETING"; 
}


$mxc111=$statusfbiomxc11;


if(empty($mxc111)){

 $statusfbiomxc111x="X";}
elseif(($mxc111>='ACCOUNTANCY' && $mxc111<='ACCOUNTANCY')  && $levels>='200' && $levels<='200' ){

$statusfbiomxc111x="352500"; 
}
elseif($mxc111>='BANKING AND FINANCE' && $mxc111<='BANKING AND FINANCE'  && $levels>='200' && $levels<='200' ){

$statusfbiomxc111x="352500"; 
}

elseif($mxc111>='INSURANCE' && $mxc111<='INSURANCE'  && $levels>='200' && $levels<='200' ){

$statusfbiomxc111x="367500"; 
}

elseif($mxc111>='MANAGEMENT' && $mxc111<='MANAGEMENT'  && $levels>='200' && $levels<='200' ){

$statusfbiomxc111x="342500"; 
}


elseif($mxc111>='MARKETING' && $mxc111<='MARKETING'  && $levels>='200' && $levels<='200' ){

$statusfbiomxc111x="342500"; 
}








elseif(($mxc111>='ACCOUNTANCY' && $mxc111<='ACCOUNTANCY')  && $levels>='400' && $levels<='400' ){

$statusfbiomxc111x="430000"; 
}
elseif($mxc111>='BANKING AND FINANCE' && $mxc111<='BANKING AND FINANCE'  && $levels>='400' && $levels<='400' ){

$statusfbiomxc111x="430000"; 
}

elseif($mxc111>='INSURANCE' && $mxc111<='INSURANCE'  && $levels>='400' && $levels<='400' ){

$statusfbiomxc111x="430000"; 
}

elseif($mxc111>='MANAGEMENT' && $mxc111<='MANAGEMENT'  && $levels>='400' && $levels<='400' ){

$statusfbiomxc111x="430000"; 
}


elseif($mxc111>='MARKETING' && $mxc111<='MARKETING'  && $levels>='400' && $levels<='400' ){

$statusfbiomxc111x="430000"; 
}



















$codes=$statusfbiomxc11;
$country=$_POST['country'];
$barcode=$_POST['barcode'];
$y=date('y');
$month=date('m');
$day=date('j');
$Y=date('Y');
$levels=$_POST['levels'];
$mxc11UI=$levels;
if(empty($mxc11UI)){

 $statusfbiomxc11UI="X";}
elseif($mxc11UI>='200' && $mxc11UI<='200'  ){

$statusfbiomxc11UI="HIMS/"; 
}

elseif($mxc11UI>='300' && $mxc11UI<='300'  ){

$statusfbiomxc11UI="HIMS/"; 
}
elseif($mxc11UI>='400' && $mxc11UI<='400'  ){

$statusfbiomxc11UI="UBa/HIMS/"; 
}






$constant="M1";
$constants="$y";
$mats="ICHS$constants$NJI";
$barcodes="$cc$constants$NJI";

$time=date("H:i:s");







$mxc111y=$motive;
if(empty($mxc111y)){

 $statusfbiomxc111y="X";
 }
elseif(($mxc111y>='5000' && $mxc111y<='5000')  && $levels>='200' && $levels<='200' ){

$statusfbiomxc111y="1"; 
$trans="FORMS"; 
$transp=""; 
$mots2="0"; 
$mots1="5000";




$myy1=""; 

$myyy1="";

$mark=""; 
}

elseif(($mxc111y>='27500' && $mxc111y<='27500')  && $levels>='200' && $levels<='200' ){

$statusfbiomxc111y="2"; 
$trans="REGISTRATION FEE"; 
$transp="historic";$transpp="courses";
$mots2="22500"; 
$mots1="5000"; 

$myy1="$statusfbiomxc11UI$cc/$constants/$NJI"; 

$myyy1="$cc$constants$NJI";

$okp="barcode";

$mark="query6";
}
elseif(($mxc111y>='5000' && $mxc111y<='5000')  && $levels>='400' && $levels<='400' ){

$statusfbiomxc111y="1"; 
$transp="";
$trans="FORMS"; 

$mots2="5000"; 
$mots1="0"; 


$myy1=""; 

$myyy1="";

$okp="";

$mark="";

}

elseif(($mxc111y>='30000' && $mxc111y<='300000')  && $levels>='400' && $levels<='400' ){

$statusfbiomxc111y="2";
 $transp="historic";$transpp="courses";
$trans="REGISTRATION FEE"; 

$mots2="25000"; 
$mots1="5000"; 


$myy1="$statusfbiomxc11UI$cc/$constants/$NJI"; 

$myyy1="$cc$constants$NJI";
 
$okp="barcode";

$mark="query6";
}

elseif(($mxc111y>='5000' && $mxc111y<='5000')  && $levels>='300' && $levels<='300' ){

$statusfbiomxc111y="1";
$transp="";
$trans="FORMS"; 

$mots2="0"; 
$mots1="5000"; 


$myy1=""; 

$myyy1="";
  
$okp="";

$mark="";
}

elseif(($mxc111y>='27500' && $mxc111y<='27500')  && $levels>='300' && $levels<='300' ){

$statusfbiomxc111y="2"; 
$transp="historic";$transpp="courses";
$trans="REGISTRATION FEE"; 

$mots2="22500"; 
$mots1="5000"; 

$myy1="$statusfbiomxc11UI$cc/$constants/$NJI"; 

$myyy1="$cc$constants$NJI";

$okp="";

$mark="query6";
}



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
 


$qry = mysql_query("select SUM(price) as total
from boption where ids='$fname'and tick='1'  and db1='$db1' "); 
$row = mysql_fetch_assoc($qry); 
 $pee=$row['total'];


if($fname!=''){


$query2="insert into admission  set  
first_name='$first_name',
middle_name='$middle_name',
last_name='$last_name',

fname='$fname',

month='$month',

day='$day',

year='$year',

dbirth='$dbirth',
place='$place',
nation='$departmentpp',
sex='$sex',

religion='$religion',
qualification='$qualification',

address='$address',
city='$city',
codes='$codes',
farm='$farm',
category='$category',


department='$cc',

contact1='$contact1',
contact2='$contact2',


extra='$levels',
idcard='$city',

father='$father',
mother='$mother',

oschool='$oschool',
ograde='$ograde',

hschool='$hschool',
hgrade='$hgrade',

guardian1='$guardian1',
guardian2='$guardian2',

hnd='$hndschool',
hndqualification='$hndqualification',

status='$db1',

country='$country',
matricule='$myy1',
barcode='$myyy1'";


$query4="insert into barcode set  
barcode='$mats',db1='$db1',
matricule='$mats',extra='1'";
$dates=date('Y-m-j');
$bbm=($statusfbiomxc111x-$motive);


$expected_amounts=($expected_amount+$pee);

$balancess=$expected_amounts-$amount_paid;
$query55="insert into historic  set  
matricule='$mats',student_name='$fname',
class='$departmentpp',amountpaid='$departmentpp',amount_paid='$amount_paid',expected_amount='$expected_amounts',balance='$balancess',date='$dates' ,oldb='$db1'  ";

$mark="update matts  set  matt='$NJI' where roll='1'";

$query5="insert into balancesheet  set  
id='3',name='Fees (registration)',amount='$amount_paid',amount2='$mots2',
date='$dates',fname='$mats',month='$month',day='$day',xclass='$departmentpp',db1='$db1',status='$fname',time='$time'
,year='$Y'";

$query555="insert into courses  set  
matricule='$mats',fname='$fname',
levels='$departmentpp',departmet='$departmentpp',sex='$sex',db1='$db1',c110='$ids'  ";

$query22="insert into marks set  
first_name='$fname',
matricule='$mats',
form='$db1',sex='$sex',
last_name='$departmentpp'



";


mysql_query ($query2) or die ('could not updated:'.mysql_error());


mysql_query ($query5) or die ('could not updated:'.mysql_error());
mysql_query ($query55) or die ('');
mysql_query ($query4) or die ('could not updated:'.mysql_error());

mysql_query ($query22) or die ('could not updated:'.mysql_error());

mysql_query ($mark) or die ('');

mysql_query ($query555) or die ('');

echo "<script>alert('Record Created Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=camera.php?usr_name=$mats'>";
 


 exit;
}

?>


	
	
	
	</div>
	
	</div>
	
	
	
	
	</body>
	</html>