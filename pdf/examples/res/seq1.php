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
		 $position=$row['mxc16'];
		 
		 
		 ?>
<div style="float:left; width:750px; height:1000px;">
<table cellspacing="0px" cellpading="0px" width="850px">

<tr>
<td style="height:50px;background:#ccc;text-align:center;">
<b style="font-size:13px;margin-top:5px;">
MINISTRY OF SECONDARY EDUCATION<br>
<I>MINISTRERE DES ENSEIGNEMENTS SECONDAIRES</I></b>

</td>
</tr>






<tr>
<td style="height:50px;text-align:center;">


<table>
<tr>
<td style="height:50px;text-align:center;float:left; width:70px;">
<img src="logo.png" height="50px" width="70px">
</td>
<td style="height:50px;text-align:center;float:left; width:250px;">
<?php $fname=$row['first_name'];
$sex=$row['sex'];$mxx=$row['matricule'];
$birth=$row['mxc1'];
 $photo=$row['photo'];

$qry = mysql_query("select  school as total
from school where roll='1' "); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 
?>


</td></tr></table>











</td>


</tr>


<tr>
<td style="height:30px;background:#ccc;text-align:center;">
<b style="font-size:18px;"> 1 <sup> st </sup> Sequence Report</b>

</td>
</tr>

<tr>
<td style="height:100px;text-align:center;font-size:35px;border:1px dashed #000;">





<table>
<tr>
<td style="height:15px;text-align:center;float:left; width:100px;text-align:right;font-size:12px;border-bottom:1px solid #000;">Student Name(s)
</td>
<td style="height:15px;text-align:center;float:left; width:250px;font-size:12px;border-bottom:1px solid #000;">
<?php echo $fname;
?>


</td></tr>
<tr>
<td style="height:15px;text-align:center;float:left; width:100px;text-align:right;border-bottom:1px solid #000;font-size:12px;">Matricule
</td>
<td style="height:15px;text-align:center;float:left; width:250px;font-size:12px;border-bottom:1px solid #000;">
<?php echo $mxx;
?>


</td></tr>



<tr>
<td style="height:15px;text-align:center;float:left; width:100px;text-align:right;font-size:12px;border-bottom:1px solid #000;">Enrolment
</td>
<td style="height:15px;text-align:center;float:left; width:250px;font-size:12px;border-bottom:1px solid #000;">
<?php 


$qry = mysql_query("select * FROM  marks where last_name='$classes' and form='$take' "); 
$num_rows=mysql_num_rows($qry);
 echo $class1=$num_rows; 
 
 $qry = mysql_query("select SUM(teacherreligion) as total
from marks where last_name='$classes' and form='$take'"); 
$row = mysql_fetch_assoc($qry); 
$class11=$row['total'];
?>



</td></tr>



<tr>
<td style="height:15px;text-align:center;float:left; width:100px;text-align:right;font-size:12px;border-bottom:1px solid #000;">Class
</td>
<td style="height:15px;text-align:center;float:left; width:250px;font-size:12px;border-bottom:1px solid #000;">
<?php 
echo
$classes;
?>



</td></tr>
<tr>
<td style="height:15px;text-align:center;float:left; width:100px;text-align:right;font-size:12px;border-bottom:1px solid #000;">Acc. Year
</td>
<td style="height:15px;text-align:center;float:left; width:250px;font-size:12px;border-bottom:1px solid #000;">
<?php 
echo
$take;
?>



</td></tr>
</table>




















</td>
</tr>


<tr>
<td style="height:20px;background:#ccc;text-align:center;">





<table>
<tr>
<td style="height:15px;text-align:center;float:left; width:121px; background:#ccc;border-right:1px solid #000;">Subject(s)
</td>
<td style="height:15px;text-align:center;float:left; width:50px;background:#ccc;font-size:12px;border-right:1px solid #000;">
1 <sup>st</sup> SQ


</td><td style="height:15px;text-align:center;float:left; width:50px;background:#ccc;font-size:12px;border-right:1px solid #000;">
Coef 


</td>

<td style="height:15px;text-align:center;float:left; width:50px;background:#ccc;font-size:12px;border-right:1px solid #000;">
MXC 


</td>
<td style="height:15px;text-align:center;float:left; width:50px;background:#ccc;font-size:12px;">
Grade


</td>
</tr>
</table>

</td>
</tr>

		 
		 
		 <tr>
<td style="height:15px;text-align:center;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000;">


 <?php 


$query = mysql_query("select  * from resit where form='$take' and first_name='$fname' and classes='$classes' and c105='1' order by subject ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>



<table style="float:left;margin-top:-5px;">
<tr>
<td style="height:14px;text-align:center;float:left; width:120px;border-right:1px solid #000;border-bottom:1px solid #000;  "><?PHP $mss=$row['subject'];
		 
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
<td style="height:14px;text-align:center;float:left; width:50px;font-size:12px;border-right:1px solid #000;border-bottom:1px solid #000;">

<?php echo $ca;?>

</td><td style="height:14px;text-align:center;float:left; width:50px;font-size:12px;background:#efefef;border-right:1px solid #000;border-bottom:1px solid #000;">

<?php echo $coef;?>

</td>

<td style="height:14px;text-align:center;float:left; width:50px;font-size:12px;border-right:1px solid #000;border-bottom:1px solid #000;">

<?php echo $tm1=($ca*$coef);?>


</td>
<td style="height:14px;text-align:center;float:left; width:54px;font-size:12px;border-bottom:1px solid #000;">

<?php

 $mxc10=$ca;
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
</tr>
</table>

		 <?php } ?>
</td>
</tr>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 <tr>
<td style="height:15px;text-align:center;border-left:1px solid #000;border-right:1px solid #000;">


 

<table style="float:left;margin-top:-5px;">
<tr>
<td style="height:15px;text-align:center;float:left; width:179px;border-right:1px solid #000;border-bottom:1px solid #000;  "><b>Total</b>
</td>
<td style="height:15px;text-align:center;float:left; width:50px;font-size:12px;background:#efefef;border-right:1px solid #000;border-bottom:1px solid #000;">
<?php
 $qry = mysql_query("select SUM(coef) as total
from resit where first_name='$fname'  and form='$take'  and (c101>'')  and c105='1'"); 
$row = mysql_fetch_assoc($qry); 
echo $coefs=$row['total'];
?>

</td>
<td style="height:15px;text-align:center;float:left; width:49px;font-size:12px;border-right:1px solid #000;border-bottom:1px solid #000;">
		 
<?php
 $qrys = mysql_query("select SUM(coef*c101) as total
from resit where first_name='$fname'  and form='$take'  and (c101>'')  and c105='1'"); 
$row = mysql_fetch_assoc($qrys); 
echo $coefss=$row['total'];

?>

</td>
<td style="height:15px;text-align:center;float:left; width:59px;font-size:12px;border-bottom:1px solid #000;">
</td>
</tr>
</table>
</td>
</tr>
		 
		 
		 
		 
	
		 
		 
		 <tr>
<td style="height:18px;text-align:center;border-left:1px solid #000;border-right:1px solid #000;background:#000; color:#000;">


 

<table style="float:left;margin-top:-5px;">
<tr>
<td style="height:18px;text-align:center;float:left; width:177px;border-right:1px solid #000;border-bottom:1px solid #000;color:#fff;  "><b>SQ1. AV</b>
</td>
<td style="height:18px;text-align:center;float:left; width:54px;font-size:12px;background:#efefef;border-right:1px solid #000;border-bottom:1px solid #000;color:#000;">
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

</td>
<td style="height:18px;text-align:center;float:left; width:110px;font-size:12px;border-bottom:1px solid #000;">

<?php
?>	

</td>
</tr>
</table>
</td>
</tr>
		





	 
		 <tr>
<td style="height:18px;text-align:center;border-left:1px solid #000;border-right:1px solid #000;background:#efefef; color:#000;">


 

<table style="float:left;margin-top:-3px;">
<tr>
<td style="height:18px;text-align:center;float:left; width:157px;border-right:1px solid #000;border-bottom:1px solid #000;  "><b>
1 <sup>ST</sup>Seq. Position:
</b>
</td>
<td style="height:18px;text-align:center;float:left; width:110px;font-size:12px;background:#efefef;color:#000;border-right:1px solid #000;border-bottom:1px solid #000;">
<?php


	
	 $qry = mysql_query("select SUM(mxc16) as total
from marks where first_name='$fname'  and form='$take'  "); 
$row = mysql_fetch_assoc($qry); 
echo $comks=$row['total'];
?>out of <?php echo  $class1;?>
</td>
<td style="height:18px;text-align:center;float:left; width:70px;font-size:12px;border-bottom:1px solid #000;">

<?php
?>	

</td>
</tr>
</table>
</td>
</tr>


		
<tr>
<td style="height:100px;text-align:center;border:1px dashed #000;">


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
</tr>
	 
<tr>
<td style="height:20px;text-align:left;">Principal's Remark 
	</td></tr>	 


</table>












	

	
		 </div>
		 
		 
		 <?php } 
		 ?>	 
		 	 
		 
		 	