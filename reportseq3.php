
<?php
include 'dbc.php';

ini_set('max_execution_time', 300000); //300 seconds = 5 minutes
?><?php
$roll=$_GET["1"];
$query="select * from closing where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $datss=$row['dtate'];

?>
<?php } ?><?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $take=$row[1];

?>
<?php } ?>
<?php
 $classes=$_POST["name1"];
 ?>


<?php
 $classes=$_POST["name1"];
$statusbsub=$_POST["statusbsub"];

$deptt=$_POST["deptt"];

$teacher=$_POST["teacher"];
$t1=$_POST["t1"];
$t2=$_POST["t2"];

$levels=$_POST["levels"];
$rolls=$_POST["rolls"];
$form=$_POST["form"];

$form=$_POST["form"];
$query="select * from marks where form='$take' and last_name='$classes'  ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		 <?php $teachersport=$row['teachersport'];
		 $middle_name=$row['middle_name'];$fname=$row['first_name'];
		 $paperss=$row['amount_paid2'];
		 $position=$row['mxc19'];
		 
		 
		 ?>
		 
		  <div style="margin:auto; width:740px; height:1000px; ">
		 <div style="float:left; width:370px; margin-top:10px; height:800px;">
		 <div style="float:left; width:370px;  height:800px;">
		 
		 <div style="float:left; width:350px;  height:800px;">
		 <?php include 'tophalf3.php';?>

		
		 
		 <div style="float:left; width:353px; margin-top:-26px;height:22px;background:#efefef;">
		 <div style="float:left;font-family:arial;text-align:center; width:150px; height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
		 Subject
		 </div>
		  <div style="float:left;font-family:arial;text-align:center; width:50px; height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
1 <sup> st</sup>Sq
		 </div> <div style="float:left;font-family:arial;text-align:center; width:50px; height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
Coef
		 </div>
		  <div style="float:left;font-family:arial;text-align:center; width:50px; height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
MXC
		 </div>
		  <div style="float:left;font-family:arial;text-align:center; width:48px; height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
Grade
		 </div>
		 
		  </div>
		 
		 	 <?php 


$query = mysql_query("select  * from resit where form='$take' and first_name='$fname' and classes='$classes' and c105='3' order by subject ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 
		  <div style="float:left; width:352px; height:20px; margin-top:-2px; font-size:13px;border:1px solid #000;">
		 <div style="float:left;font-family:arial;text-align:center; width:148px; height:20px;border-right:1px solid #000; margin-left:0px;">
		 <div style="float:left;margin-left:10px; width:130px;	text-align:left;">	
&nbsp; <?PHP $mss=$row['subject'];
		 
		$ca= $row['c101'];
		$exam=$row['c102'];
		$coef=$row['coef'];
		$teacher=$row['teacher'];
$qry = mysql_query("select subject as total
from subject where roll='$mss'  "); 
$row = mysql_fetch_assoc($qry); 
echo $saves=$row['total'];
		 ?>
		 </div>
		 </div>
		  <div style="float:left;font-family:arial;text-align:center; width:50px; height:20px;border-right:1px solid #000;; margin-left:0px;">

<?php echo $ca;?>
		 </div> <div style="float:left;font-family:arial;text-align:center;background:#efefef; width:50px; height:20px;border-right:1px solid #000;margin-top:0px; margin-left:0px;">
		 

<?php echo $coef;?>
		 </div>
		  <div style="float:left;font-family:arial;text-align:center; width:50px; height:20px;border-right:1px solid #000;margin-top:0px; margin-left:0px;">
		 

<?php echo $tm1=($ca*$coef);?>
		 </div>
		  <div style="float:left;font-family:arial;text-align:center; width:48px; height:20px;margin-top:0px; margin-left:0px;">
		 
	 
<?php

 $mxc10=$ca;
if(empty($mxc10)){
$mxc10="";
}


if(empty($mxc10)){
 $colorf1labour="#FF0000";
 $statusflabour="";
 echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';}
elseif($mxc10<10){
 $colorf1labour="#FF0000";
 $statusflabour="F";
 echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';
}else if(($mxc10 >=10) && ($mxc10<=11.9)){
 $colorf1labour="blue";
 $statusflabour="C";
echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';}else if(($mxc10 >=12) && ($mxc10<=13.9)){
 $colorf1labour="blue";
 $statusflabour="C+";
 echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';}else if(($mxc10 >=14) && ($mxc10<15.9)){
 $colorf1labour="blue";
 $statusflabour="B";
 echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';}else if(($mxc10 >=16) && ($mxc10<17.9)){
 $colorf1labour="blue";
 $statusflabour="B+";
 echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';}else if(($mxc10 >=18) && ($mxc10<18.5)){
 $colorf1labour="blue";
 $statusflabour="A";
echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';}else if(($mxc10 >=18.5) && ($mxc10<=20)){
 $colorf1labour="blue";
 $statusflabour="A";
echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';

}
?>	
		 </div>
		 
		  </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 <?php } 
		 ?>	  
		 
		 
		 
		 
		 
		 
		 <div style="float:left; width:352px;height:30px;border:1px solid #000;">
		 <div style="float:left;font-family:arial;text-align:center; width:150px; height:20px;margin-top:0px; margin-left:0px;">
		 
		<b>Total:</b>
		 </div>
		  <div style="float:left;font-family:arial;text-align:center; width:50px; height:20px;margin-top:0px; margin-left:0px;">

	
		 </div> <div style="float:left;font-family:arial;text-align:center;background:#efefef; width:49px;border-left:1px solid #000;border-right:1px solid #000;  height:30px;margin-top:0px; margin-left:0px;">
		 		 
<?php
 $qry = mysql_query("select SUM(coef) as total
from resit where first_name='$fname'  and form='$take'  and (c101>'')  and c105='3'"); 
$row = mysql_fetch_assoc($qry); 
echo $coefs=$row['total'];
?>

		 </div>
		  <div style="float:left;font-family:arial;text-align:center; width:50px; ;border-right:1px solid #000;  height:30px;margin-top:0px; margin-left:0px;">
		 
<?php
 $qrys = mysql_query("select SUM(coef*c101) as total
from resit where first_name='$fname'  and form='$take'  and (c101>'')  and c105='3'"); 
$row = mysql_fetch_assoc($qrys); 
echo $coefss=$row['total'];


$query3="update marks set music3='$coefs',humandev6='$coefss' where first_name='$fname'  and form='$take'";







mysql_query ($query3) or die ('could not updated:'.mysql_error());

?>	 </div>
		  <div style="float:left;font-family:arial;text-align:center; width:48px; height:30px;margin-top:0px; margin-left:0px;">
		 

		 </div>
		 
		  </div>
		 
		 
		 <div style="float:left; width:352px;height:30px;border:1px solid #000; background:#000;color:#fff;">
		 <div style="float:left;font-family:arial;text-align:center; width:100px; height:20px;margin-top:0px; margin-left:0px;">
		 
		<b>Seq. AV:</b>
		 </div>
		  <div style="float:left;font-family:arial;text-align:center; width:50px; height:20px;margin-top:0px; margin-left:0px;">

	
		 </div> <div style="float:left;font-family:arial;text-align:center;background:#efefef;color:#000; width:129px;border-left:1px solid #000;border-right:1px solid #000;  height:30px;margin-top:0px; margin-left:0px;">
 		 
<?php
$mxc100=$coefss;
if(empty($mxc100)){
$mxc100="";
}
		 elseif($mxc100>''){

$mmav= ($coefss/$coefs);
printf("%01.2f", $ash=($coefss/$coefs));
}
 
 
?>


<?Php
  
   $uuuu=($mmav*10000);

  
  
  
  
?>

		 </div>
		  <div style="float:left;font-family:arial;text-align:center; width:18px; height:30px;margin-top:0px; margin-left:0px;">
		 

		 </div>
		 
		  </div>
		 
		 
		 
		 
		 
		 
		 
	 <div style="float:left; width:352px;height:30px;border:1px solid #000; background:#efefef;">
		 <div style="float:left;font-family:arial;text-align:center; width:120px; height:20px;margin-top:0px; margin-left:0px;font-size:13px;">
		 
		<b>3 <sup>RD</sup>Seq. Position:</b>
		 </div>
		  <div style="float:left;font-family:arial;text-align:center; width:50px; height:20px;margin-top:0px; margin-left:0px;">




<?php

	
	
	
	
	
	
	
	?>
		 </div> <div style="float:left;font-family:arial;text-align:center;background:#efefef;color:#000; width:129px;border-left:1px solid #000;border-right:1px solid #000;  height:30px;margin-top:0px; margin-left:0px;">
		 
<?php


	
	 $qry = mysql_query("select SUM(mxc18) as total
from marks where first_name='$fname'  and form='$take'  "); 
$row = mysql_fetch_assoc($qry); 
echo $comks=$row['total'];
?>out of <?php echo  $class1;?>
		 </div>
		  <div style="float:left;font-family:arial;text-align:center; width:18px; height:30px;margin-top:0px; margin-left:0px;">
		 

		 </div>
		 
		  </div>
		 
	
		 
		 
	 <div style="float:left; width:352px;height:164px;border-top:1px dashed #000; border-left:1px dashed #000; border-right:1px dashed #000; ">
	 
	 <div style="float:left; width:352px;height:20px;border-bottom:1px dashed #000; text-align:center;">
	 
		GENERAL CONDUCT/ CONDUIT GENERALE
		  </div>
		  <div style="float:left; width:176px;border-right:1px solid #000;font-size:13px;height:20px;border-bottom:1px dashed #000; text-align:center;">
	 
		DISCIPLINE
		  </div>
		 
		 
		 
		 	  <div style="float:left; width:166px;height:20px;border-bottom:1px dashed #000;font-size:13px; text-align:center;">
	 
		ACADEMIC WORK
		  </div>
		 
		 	  <div style="float:left; width:150px;border-right:1px solid #000;font-size:13px;height:20px;border-bottom:1px dashed #000; text-align:center;">
	 
		Lateness /Retard
		  </div>
		  <div style="float:left; width:25px;border-right:1px solid #000;font-size:13px;height:20px;border-bottom:1px dashed #000; text-align:center;">
	 
	
		  </div>
		 
		 
		 	  <div style="float:left; width:100px;height:20px;border-right:1px solid #000;border-bottom:1px dashed #000;font-size:13px; text-align:center;">
	 
		Excellent
		  </div>
		 
		 
		  <div style="float:left; width:66px;height:20px;border-bottom:1px dashed #000;font-size:13px; text-align:center;">
	 
	A= 17-20
		  </div>
		 	  <div style="float:left; width:150px;border-right:1px solid #000;font-size:13px;height:20px;border-bottom:1px dashed #000; text-align:center;">
	 
		Absence /Absent
		  </div>
		  <div style="float:left; width:25px;border-right:1px solid #000;font-size:13px;height:20px;border-bottom:1px dashed #000; text-align:center;">
	 
	
		  </div>
		 
		 
		 	  <div style="float:left; width:100px;height:20px;border-right:1px solid #000;border-bottom:1px dashed #000;font-size:13px; text-align:center;">
Very Good
		  </div>
		 
		 
		  <div style="float:left; width:66px;height:20px;border-bottom:1px dashed #000;font-size:13px; text-align:center;">
	 
B+= 14-16.9
		  </div>
		 
		 
		 
		  <div style="float:left; width:150px;border-right:1px solid #000;font-size:13px;height:20px;border-bottom:1px dashed #000; text-align:center;">
	 
	Punishment
		  </div>
		  <div style="float:left; width:25px;border-right:1px solid #000;font-size:13px;height:20px;border-bottom:1px dashed #000; text-align:center;">
	 
	
		  </div>
		 
		 
		 	  <div style="float:left; width:100px;height:20px;border-right:1px solid #000;border-bottom:1px dashed #000;font-size:13px; text-align:center;"> Good
		  </div>
		 
		 
		  <div style="float:left; width:66px;height:20px;border-bottom:1px dashed #000;font-size:13px; text-align:center;">
	 B= 12-13.9
		  </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		  <div style="float:left; width:150px;border-right:1px solid #000;font-size:13px;height:20px;border-bottom:1px dashed #000; text-align:center;">
	 
Warning
		  </div>
		  <div style="float:left; width:25px;border-right:1px solid #000;font-size:13px;height:20px;border-bottom:1px dashed #000; text-align:center;">
	 
	
		  </div>
		 
		 
		 	  <div style="float:left; width:100px;height:20px;border-right:1px solid #000;border-bottom:1px dashed #000;font-size:13px; text-align:center;"> Fair
		  </div>
		 
		 
		  <div style="float:left; width:66px;height:20px;border-bottom:1px dashed #000;font-size:13px; text-align:center;">
	C+= 11-11.9
		  </div>
		 
		 
		 
		 
		 
		 
		  <div style="float:left; width:150px;border-right:1px solid #000;font-size:13px;height:20px;border-bottom:1px dashed #000; text-align:center;">
	 
Serious Warning / Blame
		  </div>
		  <div style="float:left; width:25px;border-right:1px solid #000;font-size:13px;height:20px;border-bottom:1px dashed #000; text-align:center;">
	 
	
		  </div>
		 
		 
		 	  <div style="float:left; width:100px;height:20px;border-right:1px solid #000;border-bottom:1px dashed #000;font-size:13px; text-align:center;"> Unsatisfactory
		  </div>
		 
		 
		  <div style="float:left; width:66px;height:20px;border-bottom:1px dashed #000;font-size:13px; text-align:center;">
	C= 10-10.9
		  </div>
		 
		 
		 
		 
		  <div style="float:left; width:150px;border-right:1px solid #000;font-size:13px;height:20px;border-bottom:1px dashed #000; text-align:center;">
	 
Suspension in days
		  </div>
		  <div style="float:left; width:25px;border-right:1px solid #000;font-size:13px;height:20px;border-bottom:1px dashed #000; text-align:center;">
	 
	
		  </div>
		 
		 
		 	  <div style="float:left; width:100px;height:20px;border-right:1px solid #000;border-bottom:1px dashed #000;font-size:13px; text-align:center;">Warning/ Failed
		  </div>
		 
		 
		  <div style="float:left; width:66px;height:20px;border-bottom:1px dashed #000;font-size:13px; text-align:center;">
	F= 0-9
		  </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		
		  </div>
		 
		 
	 <div style="float:left; width:352px;height:25px; margin-top:20px; ">
	 Principal's Remark
		 
		  </div>
		 
		 
		 		  </div>
		 
		 
		 
		 		  </div>
		 
		 
		 		  </div>
		 
		 
		 
		 		  </div>
		 
		 
		 
		 <?php } 
		 ?>	 
		 	 
		 
		 		  </div>
		 
		 
		 
		 	 
		 	 
		 
		 		  </div>
		 	 
		 
		 		  </div>
		 	 
		 
		 		  </div>
		<br>
		 	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>