
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
$query="select * from marks where form='$take' and last_name='$classes'  and roll='$rolls' order by mxc19 ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		 <?php $teachersport=$row['teachersport'];
		 $middle_name=$row['middle_name'];
		 $paperss=$row['amount_paid2'];
		 $position=$row['mxc19'];
		 
		 
		 ?>
		  <div style="margin:auto; width:670px; height:1200px;background:url(reportss.png); ">
		 
		 <div style="float:left; width:670px; margin-top:10px; height:800px;">
		 <?php include 'top.php';?></div>

		
		 <div style="float:left;margin-top:-20px;border:1px solid #000; width:650px;font-weight:normal;color:#000;text-align:center; height:25px;">
		 <b>First Term</b>
		 </div>
		 <div style="float:left; width:650px;font-weight:normal; height:25px;font-size:13px;background:#efefef;border:1px solid #000;margin-top:1px; margin-left:1px;">
		 
		 
		 <div style="float:left;font-family:arial;text-align:center; width:150px; height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
		 Subject
		 </div>
		  <div style="float:left;font-family:arial;text-align:center; width:50px; height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
1 <sup> st</sup>Sq
		 </div> <div style="float:left;font-family:arial;text-align:center; width:50px; height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
2 <sup> nd</sup>Sq
		 </div>
		 <div style="float:left;font-family:arial;text-align:center; width:40px; height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
Coef.
		 </div>
		 <div style="float:left;font-family:arial;text-align:center; width:70px; height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
Average
		 </div>
		 
		 <div style="float:left;font-family:arial;text-align:center; width:70px; height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
mxc
		 </div>
		 <div style="float:left;font-family:arial;text-align:center; width:70px; height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
Teacher
		 </div>
		 <div style="float:left;font-family:arial;text-align:center; width:50px; height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
Grade		 </div> 
<div style="float:left;font-family:arial;text-align:center; width:70px; height:20px;background:#efefef;margin-top:3px; margin-left:0px;">
		 
Status		 </div>
		 </div>
		 <?php 


$query = mysql_query("select  * from resit where form='$take' and first_name='$fname' and classes='$classes' and c105='1' order by subject ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 
		 
		 
		 
		 
		 <div style="float:left; width:650px;font-weight:normal; height:20px;border-bottom:1px solid #ccc;border-right:1px solid #ccc;border-left:1px solid #ccc;margin-top:0px; margin-left:1px;font-size:13px;">
		 
		 
		 <div style="float:left;font-family:arial;text-align:left;font-size:12px; width:150px;text-transform:uppercase; height:20px;border-right:1px solid #ccc; margin-left:0px;">
		
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
		  <div style="float:left;font-family:arial;text-align:center; width:50px; height:20px;border-right:1px solid #ccc;color:<?php
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
echo $color;?>; margin-left:0px;">
		 
<?php echo $ca;?>
		 </div> <div style="float:left;font-family:arial;text-align:center; width:50px;color:<?php
$mik10s=$exam;		  
if(empty($mik10s)){
 $colors="";
}
elseif($mik10s<10){
 $colors="red";
}
elseif($mik10s>=10){
 $colors="#1188aa";
}
echo $colors;?>; height:20px;border-right:1px solid #ccc; margin-left:0px;">
		 
<?php echo $exam;?>
		 </div>
		 <div style="float:left;font-family:arial;text-align:center;color:<?php
$mik10ss=($exam+$ca);		  
if(empty($mik10ss)){
 $colorss="";
}
elseif($mik10ss<10){
 $colorss="red";
}
elseif($mik10ss>=10){
 $colorss="#1188aa";
}
echo $colors;?>;  width:40px; height:20px;border-right:1px solid #ccc; margin-left:0px;">
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

		 </div>
		 <div style="float:left;font-family:arial;text-align:center;background:#ccc; opacity:0.5;width:70px; height:20px;border-right:1px solid #ccc;margin-left:0px;">
<?php echo $mns=(($ca+$exam)/2);?>
		 </div>
		 
		 <div style="float:left;font-family:arial;color:<?php
$mik10ss=(($exam+$ca)/2);		  
if(empty($mik10ss)){
 $colorss="";
}
elseif($mik10ss<10){
 $colorss="red";
}
elseif($mik10ss>=10){
 $colorss="#1188aa";
}
echo $colorss;?>;text-align:center; width:70px; height:20px;;border-right:1px solid #ccc; margin-left:0px;">
		 
<?php echo( $coef*$mns);?>
		 </div>
		 <div style="float:left;font-family:arial;color:<?php
$mik10ss=(($exam+$ca)/2);		  
if(empty($mik10ss)){
 $colorss="";
}
elseif($mik10ss<10){
 $colorss="red";
}
elseif($mik10ss>=10){
 $colorss="#1188aa";
}
echo $colorss;?>;text-align:center; width:70px; height:20px;border-right:1px solid #ccc; margin-left:0px;">
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
		 </div>
		 <div style="float:left;font-family:arial;text-align:center;border-right:1px solid #ccc; width:50px; height:20px; margin-left:0px;">
		 
<?php

 $mxc10=$mns;
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
?>	 </div>
<div style="float:left;font-family:arial;text-align:center; width:70px; height:20px; margin-left:0px;FONT-SIZE:10PX;">
		
<?php

 $mxc10=$mns;
if(empty($mxc10)){
$mxc10="";
}


if(empty($mxc10)){
 $colorf1labour="#FF0000";
 $statusflabour="";
 echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';}
elseif($mxc10<10){
 $colorf1labour="#FF0000";
 $statusflabour="FAILED";
 echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';
}else if(($mxc10 >=10) && ($mxc10<=11.9)){
 $colorf1labour="blue";
 $statusflabour="AVERAGE";
echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';}else if(($mxc10 >=12) && ($mxc10<=13.9)){
 $colorf1labour="blue";
 $statusflabour="FAIR";
 echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';}else if(($mxc10 >=14) && ($mxc10<15.9)){
 $colorf1labour="blue";
 $statusflabour="GOOD";
 echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';}else if(($mxc10 >=16) && ($mxc10<17.9)){
 $colorf1labour="blue";
 $statusflabour="V. GOOD";
 echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';}else if(($mxc10 >=18) && ($mxc10<18.5)){
 $colorf1labour="blue";
 $statusflabour="EXCELLENT";
echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';}else if(($mxc10 >=18.5) && ($mxc10<=20)){
 $colorf1labour="blue";
 $statusflabour="EXCELLENT";
echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';

}
?>	 </div>




















		 </div>
 
		 
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
	
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 <?php } 
		 ?>	 
		 	 
		 
		 
		 
		 
		 
		 

		 <div style="float:left; width:650px;font-size:13px; height:50px;opacity:0.8;background:#ccc;color:#000;border:1px solid #000;margin-top:1px; margin-left:1px;">


		 <div style="float:left; width:150px;text-align:center; height:50px;border-right:1px solid #fff;">
		 <b>1<sup>st</sup>Term Average :<?php printf("%01.2f",$teachersport);?>
		 
		 
		 </div>
		 
		 
		 <div style="float:left; width:100px; height:50px;border-right:1px solid #fff;">
		 Passed in  <?php echo $papers;?> sub.<br>
		<b>Class AV</b>:<?php printf("%01.2f",($class11/$class1));?>
		 
		 
		 </div>

		 <div style="float:left; width:40px; height:50px;border-right:1px solid #fff;text-align:center;">
		<b></b>
		 <?php echo $coefs;?>
		 
		 </div>

		 <div style="float:left; width:70px; height:50px;border-right:1px solid #fff;text-align:center;">
		<b>Total</b>:
		 
		 
		 </div>
 <div style="float:left; width:70px; height:50px;border-right:1px solid #fff;text-align:center;">
			 <?php echo $ctt;?>
		 
		 
		 </div>

 <div style="float:left; width:140px; height:50px;text-align:center;">
		<b>Position</b>: <?php echo $position;?> out of <?php echo $class1;?>
		 
		 
		 </div>


		 </div>







<div style="float:left;margin-top:2px;border-top:1px solid #ccc;border-left:1px solid #ccc; width:375px;height:176px;font-size:13px; text-align:center;"><div style="float:left; width:375px;height:20px;font-size:13px; text-align:center; margin-top:0PX;"> <strong>GENERAL CONDUCT/ CONDUIT GENERALE</strong></div><div style="position:inherit;">
<div style="float:left;border:1px solid #ccc; width:150px;height:20px;font-size:13px; text-align:center;"> 
<strong>DISCIPLINE</strong>
  </div><div style="float:left;border:1px solid #ccc; width:20px;height:20px;font-size:13px; text-align:center;"> 

  </div>
  
  
  <div style="float:left;border:1px solid #ccc; width:120px;height:20px;font-size:13px; text-align:center;"> 
<strong>ACADEMIC WORK </strong>
  </div></div> 
  
  <div style="float:left;border:1px solid #ccc; width:75px;height:20px;font-size:13px; text-align:center;"> 
<strong>Grades</strong>
  </div>
  
  
  <div style="float:left;border:1px solid #ccc; width:150px;height:20px;font-size:13px; text-align:center;"> 
Lateness /Retard
  </div><div style="float:left;border:1px solid #ccc; width:20px;height:20px;font-size:13px; text-align:center;"> 

  </div><div style="float:left;border:1px solid #ccc; width:120px;height:20px;font-size:13px; text-align:center;"> 
 <div style="float:left;
   width:120px;height:22px;font-size:13px; text-align:center;color:
  <?php $warningffffff=$teachersport;
if(empty($warningffffff)){
$warningffffff="";
 $statussswarningffffff="";
}
elseif($warningffffff<17 ){
 $colorf1chem="#FF0000";
 $statussswarningffffff="";
}

elseif($warningffffff>=17.0 && $warningffffff<=20){
 $colorf1chem="#FF0000";
 $statussswarningffffff="white";
}

echo $statussswarningffffff;
  ;?>;
  background:<?php $warningffffff1=$teachersport;
if(empty($warningffffff1)){
$warningfffff1="";
 $statussswarningffffff1="";
}

elseif($warningffffff1<17){
 $colorf1chem="#FF0000";
 $statussswarningffffff1="";
}

elseif($warningffffff1>=17 && $warningffffff1<=20){
 $colorf1chem="#FF0000";
 $statussswarningffffff1="#1188aa";
}
echo $statussswarningffffff1
  ;?>">
  Excellent
  </div>
  </div>
  <div style="float:left;border:1px solid #ccc; width:75px;height:20px;font-size:13px; text-align:center;"> 
A= 17-20
  </div>
  
   
  <div style="float:left;border:1px solid #ccc; width:150px;height:20px;font-size:13px; text-align:center;"> 
Absence /Absent
  </div><div style="float:left;border:1px solid #ccc; width:20px;height:20px;font-size:13px; text-align:center;"> 
<div style="float:left;border:1px solid #ccc; width:20px;height:20px; background:#1188aa; color:white;"><?php echo $middle_name;?></div>
  </div><div style="float:left;border:1px solid #ccc; width:120px;height:20px;font-size:13px; text-align:center;"> 
 <div style="float:left;
  width:120px;height:22px;font-size:13px; text-align:center;color:
  <?php $warningffff=$teachersport;
if(empty($warningffff)){
$warningffff="";
 $statussswarningffff="";
}
elseif($warningffff<14.0 ){
 $colorf1chem="#FF0000";
 $statussswarningffff="";
}
elseif($warningffff>=14.0 && $warningffff<=16.9){
 $colorf1chem="#FF0000";
 $statussswarningffff="";
}
elseif($warningffff>16.9){
 $colorf1chem="#FF0000";
 $statussswarningffff="";
}
echo $statussswarningffff;
  ;?>;
  background:<?php $warningffff1=$teachersport;
if(empty($warningffff1)){
$warningffff1="";
 $statussswarningffff1="";
}
elseif($warningffff1<14.0){
 $colorf1chem="#FF0000";
 $statussswarningffff1="";
}

elseif($warningffff1>=14.0 && $warningffff1<=16.9){
 $colorf1chem="#FF0000";
 $statussswarningffff1="#1188aa";
}
elseif($warningffff1>16.9
){
 $colorf1chem="#FF0000";
 $statussswarningffff1="";
}
echo $statussswarningffff1
  ;?>">
 Very Good
  </div>
  </div> 
   <div style="float:left;border:1px solid #ccc; width:75px;height:20px;font-size:11px; text-align:center;"> 
B+= 14-16.9
  </div>
   
  <div style="float:left;border:1px solid #ccc; width:150px;height:20px;font-size:13px; text-align:center;"> 
Punishment
  </div><div style="float:left;border:1px solid #ccc; width:20px;height:20px;font-size:13px; text-align:center;"> 
<?php $susf=$row["middle_name"];
if(empty($susf)){
$susf="";
 $statussusf="";
}
elseif($susf<8){
 $colorf1chem="#FF0000";
 $statussusf="";
}
elseif($susf>8){
 $colorf1chem="#FF0000";
 $statussusf="yes";
}

echo $statussusf;
?>
  </div><div style="float:left;border:1px solid #ccc; width:120px;height:20px;font-size:13px; text-align:center;"> 








 <div style="float:left;
    width:120px;height:22px;font-size:13px; text-align:center;color:
 <?php $warningfffx=$teachersport;
if(empty($warningfffx)){
$warningfffx="";
 $statussswarningfffx="";
}
elseif($warningfffx<12.0 ){
 $colorf1chem="#FF0000";
 $statussswarningfffx="";
}
elseif($warningfffx>=12.0 && $warningfffx<=13.9){
 $colorf1chem="#FF0000";
 $statussswarningfffx="white";
}
elseif($warningfffx>13.9){
 $colorf1chem="#FF0000";
 $statussswarningfffx="";
}
echo $statussswarningfffx;
  ;?>;
  background:<?php $warningfffx1=$teachersport;
if(empty($warningfffx1)){
$warningfffx1="";
 $statussswarningfffx1="";
}
elseif($warningfffx1<12){
 $colorf1chem="#FF0000";
 $statussswarningfffx1="";
}
elseif($warningfffx1>=12 && $warningfffx1<=13.9){
 $colorf1chem="#FF0000";
 $statussswarningfffx1="#282828";
}
elseif($warningfffx1>13.9){
 $colorf1chem="#FF0000";
 $statussswarningfffx1="";
}
echo $statussswarningfffx1
  ;?>">
  Good
  </div>   
  </div>   
   <div style="float:left;border:1px solid #ccc; width:75px;height:20px;font-size:11px; text-align:center;"> 
B= 12-13.9
  </div>
 
 
    
  <div style="float:left;border:1px solid #ccc; width:150px;height:20px;font-size:13px; text-align:center;"> 
Warning 
  </div><div style="float:left;border:1px solid #ccc; width:20px;height:20px;font-size:13px; text-align:center;"> 
<?php $sus=$row["middle_name"];
if(empty($sus)){
$sus="";
 $statussus="";
}
elseif($sus>=0 && $sus<4){
 $colorf1chem="#FF0000";
 $statussus="";
}
elseif($sus>=5 && $sus<8){
 $colorf1chem="#FF0000";
 $statussus="yes";
}
elseif($sus>8 ){
 $colorf1chem="#FF0000";
 $statussus="";
}
echo $statussus;
?>
  </div><div style="float:left;border:1px solid #ccc; width:120px;height:20px;font-size:13px; text-align:center;"> 
 <div style="float:left;
     width:120px;height:22px;font-size:13px; text-align:center;color:
  <?php $warningfff=$teachersport;
if(empty($warningfff)){
$warningfff="";
 $statussswarningfff="";
}
elseif($warningfff<9.9 ){
 $colorf1chem="#FF0000";
 $statussswarningfff="";
}
elseif($warningfff>=10.0 && $warningfff<=11.9){
 $colorf1chem="#FF0000";
 $statussswarningfff="white";
}
elseif($warningfff>11.9){
 $colorf1chem="#FF0000";
 $statussswarningfff="";
}
echo $statussswarningfff;
  ;?>;
  background:<?php $warningfff1=$teachersport;
if(empty($warningfff1)){
$warningfff1="";
 $statussswarningfff1="";
}
elseif($warningfff1<10){
 $colorf1chem="#FF0000";
 $statussswarningfff1="";
}
elseif($warningfff1>=10 && $warningfff1<=11.9){
 $colorf1chem="#FF0000";
 $statussswarningfff1="#282828";
}
elseif($warningfff1>11.9){
 $colorf1chem="#FF0000";
 $statussswarningfff1="";
}
echo $statussswarningfff1
  ;?>">
  Fair
  </div>
  </div>  
   <div style="float:left;border:1px solid #ccc; width:75px;height:20px;font-size:13px; text-align:center;"> 
C+=11-11.9
  </div>
  
   
  <div style="float:left;border:1px solid #ccc; width:150px;height:20px;font-size:13px; text-align:center;"> 
Serious Warning / Blame
  </div>
  
  
  <div style="float:left;border:1px solid #ccc; width:20px;height:20px;font-size:13px; text-align:center;"> 

  </div><div style="float:left;border:1px solid #ccc; width:120px;height:20px;font-size:13px; text-align:center;"> 
 <div style="float:left;
; width:120px;height:22px;font-size:13px; text-align:center;color:
  <?php $warningf=$teachersport;
if(empty($warningf)){
$warningf="";
 $statussswarningf="";
}
elseif($warningf<6.0 ){
 $colorf1chem="#FF0000";
 $statussswarningf="";
}
elseif($warningf>=6.0 && $warningf<=8.9){
 $colorf1chem="#FF0000";
 $statussswarningf="white";
}
elseif($warningf>8.9){
 $colorf1chem="#FF0000";
 $statussswarningf="";
}
echo $statussswarningf;
  ;?>;
  background:<?php $warningf1=$teachersport;
if(empty($warningf1)){
$warningf1="";
 $statussswarningf1="";
}
elseif($warningf1<6){
 $colorf1chem="#FF0000";
 $statussswarningf1="";
}
elseif($warningf1>=6 && $warningf1<=8.9){
 $colorf1chem="#FF0000";
 $statussswarningf1="#333366";
}
elseif($warningf1>9){
 $colorf1chem="#FF0000";
 $statussswarningf1="";
}
echo $statussswarningf1
  ;?>">
  Unsatisfactory
  </div>
  </div>   
  
   <div style="float:left;border:1px solid #ccc; width:75px;height:20px;font-size:13px; text-align:center;"> 
C= 10-10.9
  </div> 
  <div style="float:left;border:1px solid #ccc; width:118px;height:22px;font-size:13px; text-align:center;"> 
Suspension in days
  </div>  <div style="float:left;border:1px solid #ccc; width:30px;height:22px;font-size:13px; text-align:center;"> 

<?php $susd=$middle_name;
if(empty($susd)){
$susd="";
 $statussusd="";
}
elseif($susd>=0 && $susd<=7){
 $colorf1chem="#FF0000";
 $statussusd=" ";
}
elseif($susd>=9 && $susd<=15){
 $colorf1chem="#FF0000";
 $statussusd="2 ";
}
elseif($susd>=16 && $susd<=20){
 $colorf1chem="#FF0000";
 $statussusd="3 ";
}
elseif($susd>=21 && $susd<=28){
 $colorf1chem="#FF0000";
 $statussusd="5 ";
}
elseif($susd>=29 && $susd<=36){
 $colorf1chem="#FF0000";
 $statussusd="8";
}
elseif($susd>=40){
 $colorf1chem="#FF0000";
 $statussusd="8 ";
}
 echo $statussusd;
?>
  </div>
  <div style="float:left;border:1px solid #ccc; width:20px;height:22px;font-size:13px; text-align:center;"> 

  </div><div style="float:left;border:1px solid #ccc; width:120px;height:22px;font-size:13px; text-align:center;"> 

  <div style="float:left;
    -webkit-border-radius: 14px;
    -moz-border-radius: 14px;
    border-radius: 14px; width:120px;height:22px;font-size:13px; text-align:center;color:
  <?php $warningf=$teachersport;
if(empty($warningf)){
$warningf="";
 $statussswarningf="";
}

elseif($warningf>=0.1 && $warningf<=5.9){
 $colorf1chem="#FF0000";
 $statussswarningf="white";
}
elseif($warningf>5.9){
 $colorf1chem="#FF0000";
 $statussswarningf="";
}
echo $statussswarningf;
  ;?>;
  background:<?php $warning1=$teachersport;
if(empty($warning1)){
$warning1="";
 $statussswarning1="";
}

elseif($warning1>=0.1 && $warning1<=5.9){
 $colorf1chem="#FF0000";
 $statussswarning1="red";
}
elseif($warning1>6 ){
 $colorf1chem="#FF0000";
 $statussswarning1="";
}

echo $statussswarning1
  ;?>">
  Warning
  </div>
  </div>   
   <div style="float:left;border:1px solid #ccc; width:75px;height:22px;font-size:13px; text-align:center;"> 
F= 0-9
  </div>
  
  
  </div> 
  
  

<div style="float:left;border:1px solid #ccc; width:275px;height:174px;font-size:13px; text-align:center;margin-top:2px;">
<div style="float:left; width:140px;height:20px;font-size:13px; text-align:center; margin-top:40px; margin-left:50px;">



<div class="rotate"><div style="margin-left:-600px; margin-top:-100px; font-size:34px; font-weight:bold;color:#660000;"></div></div>
  </div> 
<div style="float:left; width:213px;height:167px;font-size:13px; text-align:center; margin-top:-50px; margin-left:0px;"> Principal's Remark  
<br><br>
<div style="float:left; width:213px;height:167px;font-size:13px; text-align:center;margin-top:100px margin-top:0px; margin-left:0px;">

<div style="float:left; width:113px;height:167px;font-size:13px; text-align:center;margin-top:150px  margin-left:0px;">

 STATUS: </div>  
<div style="float:left; width:100px;height:167px;font-size:13px; text-align:center;margin-top:150px margin-left:0px;">


<?php 



$tmax=$teachersport;
if(empty($tmax)){
$tmax="";
}

if($tmax<10){$colorf1btmax="#ff0000";
$statusf1btmax="FAILED";

}else if($tmax>=10){$colorf1btmax="blue";
$statusf1btmax="PASSED";

}










echo '<div style=" color:'. $colorf1btmax.';">'.$statusf1btmax.'</div>'; ?>




<?php $uusxsd=$teachersport;
if(empty($uusxsd)){
$uusxsd="";
 $statusssxsd="";
}

elseif($uusxsd>=0 && $uusxsd<=7.9){
 $colorf1chem="#FF0000";
 $statusssxsd="Serious Warning!";
}




elseif($uusxsd>=8.0 && $uusxsd<=9.9){
 $colorf1chem="#FF0000";
 $statusssxsd="Must work hard!";
}


elseif($uusxsd>=8.0 && $uusxsd<=9.9){
 $colorf1chem="#FF0000";
 $statusssxsd="Must work hard!";
}


elseif($uusxsd>=10 && $uusxsd<=12.9){
 $colorf1chem="#FF0000";
 $statusssxsd="Could Do better!";
}


elseif($uusxsd>=13 && $uusxsd<=14.9){
 $colorf1chem="#FF0000";
 $statusssxsd="Encourage!";
}

elseif($uusxsd>=15 && $uusxsd<=16.9){
 $colorf1chem="#FF0000";
 $statusssxsd="Satisfactory!";
}
elseif($uusxsd>=17 && $uusxsd<=18.){
 $colorf1chem="#FF0000";
 $statusssxsd="Excellent!";
}
elseif($uusxsd>=18.5 && $uusxsd<=20){
 $colorf1chem="#FF0000";
 $statusssxsd="Credit!";
}
echo '<div style=" color:#000;font-size:18PX;WIDTH:180PX; HEIGHT:20PX;MARGIN-LEFT:-40PX;MARGIN-TOP:30PX;FONT-WEIGHT:BOLD;'. $colorf1btmax.';"><I>'.$statusssxsd.'</I></div>';


?>
		 </div>
		 
		 
		 
		 </div>
		 
		 </div>
		 
		 </div>
		 
		 </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 </div><br><br><?php
		 } ?>
		 
		 
		 