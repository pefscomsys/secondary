<?php
include 'dbcs.php';

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
<div style="margin:auto width:710px; height:1000px;">
<table cellspacing="0px" cellpading="0px" width="700px">

<tr>
<td style="height:60px;border:1px solid #000; width:700px;">


<table style="float:left;margin-top:-3px;line-height:22px;">
<tr>
<td style="height:60px;text-align:center;float:left; width:270px;text-align:center;   ">

Republic Of Cameroon<br>
Peace-Work-Fatherland<br><i>
MINISTRY OF SECONDARY EDUCATION</i>

</td>
<td style="height:60px;text-align:center;float:left; width:160px;  ">
<img src="logo.png" width="120" height="80"style="margin-top:3px;">
</td>

<td style="height:60px;text-align:center;float:left; width:260px;text-align:center;font-size:14px;  ">
MINISTRERE DES ENSEIGNEMENTS SECONDAIRES
<br>

<b style="font-size:12px;">
<?php $fname=$row['first_name'];
$sex=$row['sex'];$mxx=$row['matricule'];
$birth=$row['mxc1'];

$photo=$row['photo'];
$qry = mysql_query("select  school as total
from school where roll='1' "); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 
?>
</b>


</td>
</tr>
</table>



</td>
</tr>
<tr>
<td style="height:50px;background:#1188aa;border:1px solid #1188aa;text-transform:uppercase; color:#fff; text-align:center; width:710px;"><br><b>
academic report sheet</b><br><i>
BULLETIN DE NOTES</i>

</td>
</tr>



<tr>
<td style="height:70px;border:1px dashed #000;width:710px;">

<table style="float:left;margin-top:-3px;">
<tr>
<td style="height:12px;text-align:right;float:left; width:157px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;  ">
Name (s)

</td>
<td style="height:12px;text-align:left;float:left; width:553px;border-bottom:1px solid #ccc;  "><b>
<?php echo $fname;?>
</b>
</td>

</tr>


<tr>
<td style="height:12px;text-align:right;float:left; width:157px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;  ">
Sex

</td>
<td style="height:12px;text-align:left;float:left; width:553px;border-bottom:1px solid #ccc;  "><b>
<?php echo $sex;?>
</b>
</td>

</tr>





<tr>
<td style="height:12px;text-align:right;float:left; width:157px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;  ">
 Acc. Year:

</td>
<td style="height:12px;text-align:left;float:left; width:553px;border-bottom:1px solid #ccc;  "><b>
<?php echo $take;?>
</b>
</td>

</tr>





<tr>
<td style="height:12px;text-align:right;float:left; width:157px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;  ">
Class:

</td>
<td style="height:12px;text-align:left;float:left; width:553px;border-bottom:1px solid #ccc;  "><b>
<?php echo $classes;?>
</b>
</td>

</tr>




<tr>
<td style="height:12px;text-align:right;float:left; width:157px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;  ">
 Enrol:

</td>
<td style="height:12px;text-align:left;float:left; width:553px;border-bottom:1px solid #ccc;  "><b>
<?php


$qry = mysql_query("select * FROM  marks where last_name='$classes' and form='$take' "); 
$num_rows=mysql_num_rows($qry);
 echo $class1=$num_rows; 
 
 $qry = mysql_query("select SUM(teachersport) as total
from marks where last_name='$classes' and form='$take'"); 
$row = mysql_fetch_assoc($qry); 
$class11=$row['total'];
?>
</b>
</td>

</tr>





</table>








</td>
</tr>

<tr>
<td style="height:25px;text-align:center;border:1px SOLID #000;width:710px;border-left:1px solid #000; border-right:1px solid #000;"><B style="float:left; margin-top:5px;">
FIRST TERM</B>
</td></tr>



<tr>
<td style="height:15px;text-align:center;background:#ccc;border-left:1px SOLID #000;border-right:1px SOLID #000;



width:710px;">

<table style="float:left;margin-top:0px;">
<tr>
<td style="height:12px;text-align:center;float:left; width:20px;border-right:1px solid #000;border-bottom:1px solid #000;  ">
SN
</td>
<td style="height:12px;text-align:center;float:left; width:176px;border-right:1px solid #000;border-bottom:1px solid #000;  ">
Subject 
</td>
<td style="height:12px;text-align:center;right;float:left; width:40px;border-right:1px solid #000;border-bottom:1px solid #000;  ">
1 <sup>st</sup>Sq
</td>
<td style="height:12px;text-align:center;float:left; width:40px;border-right:1px solid #000;border-bottom:1px solid #000;  ">
2 <sup>nd</sup>Sq
</td>


<td style="height:12px;text-align:center;float:left; width:40px;border-right:1px solid #000;border-bottom:1px solid #000;  ">
Coef.
</td>

<td style="height:12px;text-align:center;float:left; width:80px;border-right:1px solid #000;border-bottom:1px solid #000;  ">
Average
</td>

<td style="height:12px;text-align:center;float:left; width:40px;border-right:1px solid #000;border-bottom:1px solid #000;  ">
mxc 
</td>


<td style="height:12px;text-align:center;float:left; width:120px;border-right:1px solid #000;border-bottom:1px solid #000;  ">
Teacher
</td>


<td style="height:12px;text-align:center;float:left; width:40px;border-right:1px solid #000;border-bottom:1px solid #000;  ">
Grade
</td>


<td style="height:12px;text-align:center;float:left; width:60px;border-bottom:1px solid #000;  ">
Remark
</td>












</tr>
</table>

</td></tr>

		 <?php 


$query = mysql_query("select  * from resit where form='$take' and first_name='$fname' and classes='$classes' and c105='1' order by subject ASC"); 
$i=1;
		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 
		 
		 
		 
<tr>
<td style="height:15px;text-align:center;border-left:1px SOLID #000;border-right:1px SOLID #000;



width:710px;">

<table style="float:left;margin-top:-4px;">
<tr>

<td style="height:12px;text-align:center;float:left; width:20px;border-bottom:1px solid #000;border-right:1px solid #000; "><?php echo $i++;?></td>
<td style="height:12px;text-align:center;float:left; width:177px;border-right:1px solid #000;border-bottom:1px solid #000;  ">

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
</td>
<td style="height:12px;text-align:center;right;float:left; width:40px;border-right:1px solid #000;border-bottom:1px solid #000;color:<?php
$mik10=$ca;		  
if(empty($mik10)){
 $color="";
}
elseif($mik10<10){
 $color="red";
}
elseif($mik10>=10){
 $color="#1188aa";
}
echo $color;?>;">
		 
<?php echo $ca;?>  
</td>
<td style="height:12px;text-align:center;float:left; width:40px;border-right:1px solid #000;border-bottom:1px solid #000; color:<?php
$mik10=$ca;		  
if(empty($mik10)){
 $color="";
}
elseif($mik10<10){
 $color="red";
}
elseif($mik10>=10){
 $color="#1188aa";
}
echo $color;?>;">
		 
<?php echo $exam;?>
</td>


<td style="height:12px;text-align:center;float:left; width:40px;border-right:1px solid #000;border-bottom:1px solid #000;  color:<?php
$mik10=$ca;		  
if(empty($mik10)){
 $color="";
}
elseif($mik10<10){
 $color="red";
}
elseif($mik10>=10){
 $color="#1188aa";
}
echo $color;?>;">
 <?php



$mik10ss=(($exam+$ca)/2);
$shows=$mik10ss;		  
if(empty($shows)){
echo $fmss="";
}
elseif($shows>''){
echo $fmss=$coef;
}

elseif($show>'0'){
echo $fms=$coef;
}

?>
</td>

<td style="height:12px;text-align:center;float:left; width:80px;border-right:1px solid #000;border-bottom:1px solid #000;  color:<?php
$mik10=$ca;		  
if(empty($mik10)){
 $color="";
}
elseif($mik10<10){
 $color="red";
}
elseif($mik10>=10){
 $color="#1188aa";
}
echo $color;?>;">
<?php echo $mns=(($ca+$exam)/2);?>
</td>

<td style="height:12px;text-align:center;float:left; width:40px;border-right:1px solid #000;border-bottom:1px solid #000; color:<?php
$mik10=$ca;		  
if(empty($mik10)){
 $color="";
}
elseif($mik10<10){
 $color="red";
}
elseif($mik10>=10){
 $color="#1188aa";
}
echo $color;?>;">
<?php echo( $coef*$mns);?>
</td>


<td style="height:12px;text-align:center;float:left; width:120px;border-right:1px solid #000;border-bottom:1px solid #000;   color:<?php
$mik10=$ca;		  
if(empty($mik10)){
 $color="";
}
elseif($mik10<10){
 $color="red";
}
elseif($mik10>=10){
 $color="#1188aa";
}
echo $color;?>;">
<?php



$mik10ss=(($exam+$ca)/2);
$show=$mik10ss;		  
if(empty($show)){
echo $fms="";
}
elseif($show>''){
echo $fms=$teacher;
}

elseif($show>'0'){
echo $fms=$teacher;
}

?>
</td>


<td style="height:12px;text-align:center;float:left; width:40px;border-right:1px solid #000;border-bottom:1px solid #000;  color:<?php
$mik10=$ca;		  
if(empty($mik10)){
 $color="";
}
elseif($mik10<10){
 $color="red";
}
elseif($mik10>=10){
 $color="#1188aa";
}
echo $color;?>;">

		 
<?php

 $mxc10=$mns;
if(empty($mxc10)){
$mxc10="";
}


if(empty($mxc10)){
 ECHO $statusflabour="";}
elseif($mxc10<10){
 ECHO $statusflabour="F";
}else if(($mxc10 >=10) && ($mxc10<=11.9)){

 ECHO $statusflabour="C";}else if(($mxc10 >=12) && ($mxc10<=13.9)){

 ECHO $statusflabour="C+";}else if(($mxc10 >=14) && ($mxc10<15.9)){

 ECHO $statusflabour="B";}else if(($mxc10 >=16) && ($mxc10<17.9)){

 ECHO$statusflabour="B+";}else if(($mxc10 >=18) && ($mxc10<18.5)){

 ECHO $statusflabour="A";}else if(($mxc10 >=18.5) && ($mxc10<=20)){
 $colorf1labour="blue";
 ECHO $statusflabour="A";

}
?>	
</td>


<td style="height:12px;text-align:center;float:left; width:60px;border-bottom:1px solid #000;  color:<?php
$mik10=$ca;		  
if(empty($mik10)){
 $color="";
}
elseif($mik10<10){
 $color="red";
}
elseif($mik10>=10){
 $color="#1188aa";
}
echo $color;?>;">

		
<?php

 $mxc10=$mns;
if(empty($mxc10)){
$mxc10="";
}


if(empty($mxc10)){
 echo $statusflabour="";
 }
elseif($mxc10<10){
 echo $statusflabour="FAILED";
}else if(($mxc10 >=10) && ($mxc10<=11.9)){

echo $statusflabour="AVERAGE";}else if(($mxc10 >=12) && ($mxc10<=13.9)){

echo  $statusflabour="FAIR";
 }else if(($mxc10 >=14) && ($mxc10<15.9)){

 echo $statusflabour="GOOD";}else if(($mxc10 >=16) && ($mxc10<17.9)){

 echo $statusflabour="V. GOOD";}else if(($mxc10 >=18) && ($mxc10<18.5)){

 echo $statusflabour="EXCELLENT";}else if(($mxc10 >=18.5) && ($mxc10<=20)){
 $colorf1labour="blue";
 echo $statusflabour="EXCELLENT";

}
?>
</td>












</tr>
</table>


</td></tr>
		 
		 
		 
		 <?php }?>

 
<?php
 $qry = mysql_query("select SUM(coef) as total
from resit where first_name='$fname'  and form='$take'  and (c101>'' && c102>'')  and c105='1'"); 
$row = mysql_fetch_assoc($qry); 
$coefs=$row['total'];
?>
		 
		 
		 
 	 
<?php
$qry = mysql_query("select sum(((c101+c102)/2)*coef) as total
from resit where first_name='$fname' and classes='$classes' and form='$take' and c105='1'  "); 
$row = mysql_fetch_assoc($qry); 
$ctt=$row['total'];
?>
		 
		 
		 
		 <?php
		 
$qry = mysql_query("select * FROM resit where ((c101+c102)/2)>=10 and first_name='$fname' and classes='$classes' and form='$take' and c105='1'  "); 
$num_rows=mysql_num_rows($qry);
 $papers=$num_rows; 
 
 ?>
<tr>
<td style="height:50px;text-align:center;background:#1188AA;color:#fff;border-left:1px SOLID #000;border-right:1px SOLID #000;border-bottom:1px solid #000;  



width:710px;">


<table style="float:left;margin-top:-4px;">
<tr>

<td style="height:50px;text-align:center;float:left; width:195px;border-bottom:1px solid #000;border-right:1px solid #000; ">

1<sup>st</sup>Term Average :<?php printf("%01.2f",$teachersport);?>


</td>


<td style="height:50px;text-align:center;float:left; width:99px;border-bottom:1px solid #000;border-right:1px solid #000; ">
		 Passed in  <?php echo $papers;?> sub.<br>
		<b>Class AV</b>:<?php printf("%01.2f",($class11/$class1));?>
		 

</td>









<td style="height:50px;text-align:center;float:left; width:41px;border-bottom:1px solid #000;border-right:1px solid #000; ">

		 <?php echo $coefs;?>

</td>






<td style="height:50px;text-align:center;float:left; width:79px;border-bottom:1px solid #000;border-right:1px solid #000; ">

		 Total

</td>




<td style="height:50px;text-align:center;float:left; width:39px;border-bottom:1px solid #000;border-right:1px solid #000; ">

		 	 <?php echo $ctt;?>

</td>


<td style="height:50px;text-align:center;float:left; width:230px;border-bottom:1px solid #000; ">

		<b>Position</b>: <?php echo $position;?> out of <?php echo $class1;?>

</td>








</tr>


</table>

</td></tr>

		
<tr>
<td style="height:100px;text-align:center;border:1px dashed #000; width:710px;">

<table style="float:left;margin-top:0px;">
<tr>
<td style="height:15px;text-align:center;float:left; width:345px;  ">

<table style="float:left;margin-top:-5px;">
<tr>
<td style="height:15px;text-align:center;float:left; width:352px;border-bottom:1px solid #000;  ">
GENERAL CONDUCT/ CONDUIT GENERALE 

</td></tr></table>

<table style="float:left;margin-top:-5px;">
<tr>
<td style="height:15px;text-align:center;float:left; width:161px;border-right:1px solid #000;border-bottom:1px solid #000;  ">
DISCIPLINE  

</td>
<td style="height:15px;text-align:center;float:left; width:189px;border-bottom:1px solid #000;  ">
ACADEMIC WORK 

</td>

</tr></table>



<table style="float:left;margin-top:-5px;">
<tr>
<td style="height:15px;text-align:center;float:left; width:135px;border-right:1px solid #000;border-bottom:1px solid #000;font-size:13px;  ">
Lateness /Retard 

</td><td style="height:15px;text-align:center;float:left; width:20px;border-right:1px solid #000;border-bottom:1px solid #000;font-size:13px;  ">


</td>

<td style="height:15px;text-align:center;float:left; width:100px;border-right:1px solid #000;border-bottom:1px solid #000;font-size:13px;  ">
Excellent 

</td><td style="height:15px;text-align:center;float:left; width:75px;border-bottom:1px solid #000;font-size:13px;  ">
A= 17-20 

</td>




</tr>


















<tr>
<td style="height:15px;text-align:center;float:left; width:135px;border-right:1px solid #000;border-bottom:1px solid #000;font-size:13px;  ">
Absence /Absent 

</td><td style="height:15px;text-align:center;float:left; width:20px;border-right:1px solid #000;border-bottom:1px solid #000;font-size:13px;  ">


</td>

<td style="height:15px;text-align:center;float:left; width:100px;border-right:1px solid #000;border-bottom:1px solid #000;font-size:13px;  ">
Very Good 

</td><td style="height:15px;text-align:center;float:left; width:75px;border-bottom:1px solid #000;font-size:13px;  ">
B+= 14-16.9

</td>




</tr>



















<tr>
<td style="height:15px;text-align:center;float:left; width:135px;border-right:1px solid #000;border-bottom:1px solid #000;font-size:13px;  ">
Punishment 

</td><td style="height:15px;text-align:center;float:left; width:20px;border-right:1px solid #000;border-bottom:1px solid #000;font-size:13px;  ">


</td>

<td style="height:15px;text-align:center;float:left; width:100px;border-right:1px solid #000;border-bottom:1px solid #000;font-size:13px;  ">
Good 

</td><td style="height:15px;text-align:center;float:left; width:75px;border-bottom:1px solid #000;font-size:13px;  ">

B= 12-13.9
</td>




</tr>


<tr>
<td style="height:15px;text-align:center;float:left; width:135px;border-right:1px solid #000;border-bottom:1px solid #000;font-size:13px;  ">
Warning 

</td><td style="height:15px;text-align:center;float:left; width:20px;border-right:1px solid #000;border-bottom:1px solid #000;font-size:13px;  ">


</td>

<td style="height:15px;text-align:center;float:left; width:100px;border-right:1px solid #000;border-bottom:1px solid #000;font-size:13px;  ">
Fair 

</td><td style="height:15px;text-align:center;float:left; width:75px;border-bottom:1px solid #000;font-size:13px;  ">
C+= 11-11.9
</td>




</tr>











<tr>
<td style="height:15px;text-align:center;float:left; width:135px;border-right:1px solid #000;border-bottom:1px solid #000;font-size:13px;  ">
Serious Warning 

</td><td style="height:15px;text-align:center;float:left; width:20px;border-right:1px solid #000;border-bottom:1px solid #000;font-size:13px;  ">


</td>

<td style="height:15px;text-align:center;float:left; width:100px;border-right:1px solid #000;border-bottom:1px solid #000;font-size:13px;  ">
Unsatisfactory 

</td><td style="height:15px;text-align:center;float:left; width:75px;border-bottom:1px solid #000;font-size:13px;  ">
C= 10-10.9 
</td>




</tr>



<tr>
<td style="height:15px;text-align:center;float:left; width:135px;border-right:1px solid #000;border-bottom:1px solid #000;font-size:13px;  ">
Suspension in days 

</td><td style="height:15px;text-align:center;float:left; width:20px;border-right:1px solid #000;border-bottom:1px solid #000;font-size:13px;  ">


</td>

<td style="height:15px;text-align:center;float:left; width:100px;border-right:1px solid #000;border-bottom:1px solid #000;font-size:13px;  ">
Warning/ Failed 
</td><td style="height:15px;text-align:center;float:left; width:75px;border-bottom:1px solid #000;font-size:13px;  ">
F= 0-9 
</td>




</tr>




















</table>
</td>

<td style="height:15px;text-align:center;float:left; width:355px;border:1px solid #000;  ">

<B>PRINCIPAL REMARK</B>



</td>

</tr>

</table>


		 
	
</td>
</tr>

</table>
		 </div>
		 
		 
		 <?php } 
		 ?>	 
		 	 
		 
		 	