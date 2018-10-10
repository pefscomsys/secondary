



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
$query="select * from marks where form='$take' and last_name='$classes' order by mxc20 ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		 <?php $teachercivic=$row['teachercivic'];
		 $teacherreligion=$row['teacherreligion'];
		  $teachersport=$row['teachersport'];
		 $middle_name=$row['sport3'];
		 $paperss=$row['amount_paid2'];
		 $position=$row['mxc20'];
		 
		 
		 ?> <div class="page">
		  <div style="margin:auto; width:670px; height:1200px;background:url(reportss.png); margin-top:-70px;margin-left:20px; ">
		 
		 <div style="float:left; width:670px; margin-top:10px; height:800px;">
		 <?php include 'top2f.php';?></div>

		
		
		 <div style="float:left; width:750px;font-weight:bold;font-weight:bold;text-transform:uppercase; height:30px;font-size:13px;background:#efefef;border:1px solid #000;margin-top:10px; margin-left:1px;">
		 
		 
		 <div style="float:left;font-family:arial;text-align:center; width:208px; height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
		DISCIPLINE
		 </div>
		  <div style="float:left;font-family:arial;text-align:center; width:50px; padding:3px; height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
3<sup>rd</sup>Sq
		 </div> <div style="float:left;font-family:arial;text-align:center; width:50px;padding:3px;  height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
4<sup>th</sup>Sq
		 </div>
		 <div style="float:left;font-family:arial;text-align:center; width:40px; padding:3px; height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
Coef.
		 </div>
		 <div style="float:left;font-family:arial;text-align:center; width:70px;padding:3px;  height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
Total
		 </div>
		 
		 <div style="float:left;font-family:arial;text-align:center; width:70px;padding:3px;  height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
mxc
		 </div>
	
		 <div style="float:left;font-family:arial;text-align:center; width:50px;padding:3px;  height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
Grade		 </div> 
<div style="float:left;font-family:arial;text-align:center; width:70px;padding:3px;  height:20px;background:#efefef;margin-top:3px; margin-left:0px;">
		 
Appreciations		 </div>
		 </div>
		 <?php 


$query = mysql_query("select  * from resit where form='$take' and first_name='$fname' and classes='$classes' and c105='2' order by subject ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 
		 
		 
		 
		 
		 <div style="float:left; width:750px;font-weight:normal; height:30px;border-bottom:1px solid #ccc;border-right:1px solid #ccc;border-left:1px solid #ccc;margin-top:0px; margin-left:1px;font-size:13px;">
		 
		 
		 <div style="float:left;font-family:calibri;text-align:left;font-size:18px; padding:4px;width:210px;text-transform:uppercase; height:35px;border-right:1px solid #ccc; margin-left:0px;">
		
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
	<br><i><b style='float:left;font-weight:normal;font-size:9px;margin-top:-3px;color:#282828;margin-left:5px;'>
	<?php echo $teacher;;?></b></i>
		 </div>
		  <div style="float:left;font-family:arial;text-align:center; font-size:18px;width:50px;padding:3px; height:35px;border-right:1px solid #ccc;color:<?php
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
		 </div> <div style="float:left;font-family:arial;font-size:18px;text-align:center;padding:3px;  width:50px;color:<?php
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
echo $colors;?>; height:35px;border-right:1px solid #ccc;font-size:18px; margin-left:0px;padding:3px; ">
		 
<?php echo $exam;?>
		 </div>
		 <div style="float:left;font-family:arial;text-align:center;font-size:18px;padding:3px; color:<?php
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
 $colors;?>;  width:40px; height:35px;border-right:1px solid #ccc;padding:3px;font-size:18px;  margin-left:0px;">
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
		 <div style="float:left;font-family:arial;padding:3px; font-size:18px;text-align:center;background:#ccc; opacity:0.5;width:70px; height:35px;border-right:1px solid #ccc;margin-left:0px;">
<?php echo $mns=(($ca+$exam)/2);?>
		 </div>
		 
		 <div style="float:left;padding:3px; font-family:arial;font-size:18px;color:<?php
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
echo $colorss;?>;text-align:center; width:70px; padding:3px;font-size:18px; height:35px;;border-right:1px solid #ccc; margin-left:0px;">
		 
<?php echo( $coef*$mns);?>
		 </div>

		 <div style="float:left;padding:3px; font-size:18px;font-family:arial;text-align:center;border-right:1px solid #ccc; width:50px; height:35px; margin-left:0px;">
		 
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
<div style="float:left;font-family:arial;text-align:center;padding:3px; font-size:14px; width:70px; height:35px; margin-left:0px;">
		<div style=" text-align:left;font-size:18px;width:150px;color:<?php echo $colorf1labour;?>;">
<?php

 $mxc10=$mns;
if(empty($mxc10)){
$mxc10="";
}elseif($mxc10>''){

  $qrys = "select app as total
from cm where (x1>='$mxc10' &&  x2<='$mxc10') or (x2>='$mxc10' &&  x1<='$mxc10') and id='2'"; $qry=mysql_query( $qrys); 
$row = mysql_fetch_assoc($qry); 
echo $saves=$row['total'];

}
?>	 

</div>



</div>















		 </div>
 
		 
<?php
 $qry = mysql_query("select SUM(coef) as total
from resit where first_name='$fname'  and form='$take'  and (c101>'' && c102>'')  and c105='2'"); 
$row = mysql_fetch_assoc($qry); 
$coefs=$row['total'];
?>
		 
		 
		 
 	 
<?php
$qry = mysql_query("select sum(((c101+c102)/2)*coef) as total
from resit where first_name='$fname' and classes='$classes' and form='$take' and c105='2'  "); 
$row = mysql_fetch_assoc($qry); 
$ctt=$row['total'];
?>
		 
		 
		 
		 <?php
		 
$qry = mysql_query("select * FROM resit where ((c101+c102)/2)>=10 and first_name='$fname' and classes='$classes' and form='$take' and c105='2'  "); 
$num_rows=mysql_num_rows($qry);
 $papers=$num_rows; 
 
 
 $qry = mysql_query("select SUM(teacherreligion) as total
from marks where last_name='$classes' and form='$take'"); 
$row = mysql_fetch_assoc($qry); 
$class11=$row['total'];
 ?>
	
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 <?php } 
		 ?>	 
		 	 
		 
		 
		 
		 
		 
		 

		 <div style="float:left; width:750px;font-size:13px; height:50px;opacity:0.8;background:#ccc;color:#000;border:1px solid #000;margin-top:1px; margin-left:1px;">


		 <div style="float:left; width:158px;text-align:center; height:50px;border-right:1px solid #fff;">
		 <b>Moy. 1<sup>er</sup> Trim :<?php printf("%01.2f",$teachersport);?><br>
		 
		 	 <b>Moy. 2<sup>eme</sup>Trim :<?php printf("%01.2f",$teacherreligion);?>
		 
		 
		 </div>
		 
		 
		 <div style="float:left; width:155px; height:50px;border-right:1px solid #fff;">
	
		<b>Moy. Gen </b>:<?php printf("%01.2f",($class11/$class1));?>
		 
		 
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
		<b>Rang</b>: <?php echo $position;?> out of <?php echo $class1;?>
		 
		 
		 </div>


		 </div>







<div style="float:left;width:770px;">

<div style="float:left;margin-top:2px;border-top:1px solid #ccc;border-left:1px solid #ccc; width:375px;height:176px;font-size:13px; text-align:center;">
<div style="float:left; width:375px;height:20px;font-size:13px; text-align:center; margin-top:0PX;"> <strong>GENERAL CONDUCT/ CONDUIT GENERALE</strong></div><div style="position:inherit;">
<div style="float:left;border:1px solid #ccc; width:150px;height:20px;font-size:13px; text-align:center;"> 
<strong>DISCIPLINE</strong>
  </div><div style="float:left;border:1px solid #ccc; width:20px;height:20px;font-size:13px; text-align:center;"> 

  </div>
  
  
  <div style="float:left;border:1px solid #ccc; width:120px;height:20px;font-size:11px; text-align:center;"> 
<strong>ACADEMIC WORK </strong>
  </div></div> 
  
  <div style="float:left;border:1px solid #ccc; width:75px;height:20px;font-size:13px; text-align:center;"> 
<strong>Grade</strong>
  </div>
  
  
  <div style="float:left;border:1px solid #ccc; width:150px;height:20px;font-size:13px; text-align:center;"> 
Lateness /Retard
  </div><div style="float:left;border:1px solid #ccc; width:20px;height:20px;font-size:13px; text-align:center;"> 

  </div><div style="float:left;border:1px solid #ccc; width:120px;height:20px;font-size:13px; text-align:center;"> 
 <div style="float:left;
   width:120px;height:22px;font-size:13px; text-align:center;color:
  <?php $warningffffff=$teacherreligion;
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
  background:<?php $warningffffff1=$teacherreligion;
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
  <?php $warningffff=$teacherreligion;
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
  background:<?php $warningffff1=$teacherreligion;
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
 Tr&egraves Bien
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
 <?php $warningfffx=$teacherreligion;
if(empty($warningfffx)){
$warningfffx="";
 $statussswarningfffx="";
}
elseif($warningfffx<14.0 ){
 $colorf1chem="#FF0000";
 $statussswarningfffx="";
}
elseif($warningfffx>=14.0 && $warningfffx<=15.9){
 $colorf1chem="#FF0000";
 $statussswarningfffx="white";
}
elseif($warningfffx>15.9){
 $colorf1chem="#FF0000";
 $statussswarningfffx="";
}
echo $statussswarningfffx;
  ;?>;
  background:<?php $warningfffx1=$teacherreligion;
if(empty($warningfffx1)){
$warningfffx1="";
 $statussswarningfffx1="";
}
elseif($warningfffx1<14){
 $colorf1chem="#FF0000";
 $statussswarningfffx1="";
}
elseif($warningfffx1>=14 && $warningfffx1<=15.9){
 $colorf1chem="#FF0000";
 $statussswarningfffx1="#282828";
}
elseif($warningfffx1>15.9){
 $colorf1chem="#FF0000";
 $statussswarningfffx1="";
}
echo $statussswarningfffx1
  ;?>">
  Bien
  </div>   
  </div>   
   <div style="float:left;border:1px solid #ccc; width:75px;height:20px;font-size:11px; text-align:center;"> 
B= 14-15.9
  </div>
 
 
    
  <div style="float:left;border:1px solid #ccc; width:150px;height:20px;font-size:13px; text-align:center;"> 
Echouer
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
  <?php $warningfff=$teacherreligion;
if(empty($warningfff)){
$warningfff="";
 $statussswarningfff="";
}
elseif($warningfff<12 ){
 $colorf1chem="#FF0000";
 $statussswarningfff="";
}
elseif($warningfff>=12.0 && $warningfff<=13.9){
 $colorf1chem="#FF0000";
 $statussswarningfff="white";
}
elseif($warningfff>13.9){
 $colorf1chem="#FF0000";
 $statussswarningfff="";
}
echo $statussswarningfff;
  ;?>;
  background:<?php $warningfff1=$teacherreligion;
if(empty($warningfff1)){
$warningfff1="";
 $statussswarningfff1="";
}
elseif($warningfff1<12){
 $colorf1chem="#FF0000";
 $statussswarningfff1="";
}
elseif($warningfff1>=12 && $warningfff1<=13.9){
 $colorf1chem="#FF0000";
 $statussswarningfff1="#282828";
}
elseif($warningfff1>13.9){
 $colorf1chem="#FF0000";
 $statussswarningfff1="";
}
echo $statussswarningfff1
  ;?>">
Assez Bien
  </div>
  </div>  
   <div style="float:left;border:1px solid #ccc; width:75px;height:20px;font-size:13px; text-align:center;"> 
C+=12-13.9
  </div>
  
   
  <div style="float:left;border:1px solid #ccc; width:150px;height:20px;font-size:13px; text-align:center;"> 
Serious Warning / Blame
  </div>
  
  
  <div style="float:left;border:1px solid #ccc; width:20px;height:20px;font-size:13px; text-align:center;"> 

  </div><div style="float:left;border:1px solid #ccc; width:120px;height:20px;font-size:13px; text-align:center;"> 
 <div style="float:left;
; width:120px;height:22px;font-size:13px; text-align:center;color:
  <?php $warningf=$teacherreligion;
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
  background:<?php $warningf1=$teacherreligion;
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
  Passable
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
  <?php $warningf=$teacherreligion;
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
  background:<?php $warning1=$teacherreligion;
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
  
  

<div style="float:left;border:1px solid #ccc; width:375px;height:174px;font-size:13px; text-align:center;margin-top:2px;">
<div style="float:left; width:140px;height:20px;font-size:13px; text-align:center; margin-top:40px; margin-left:50px;">



<div class="rotate"><div style="margin-left:-600px; margin-top:-100px; font-size:34px; font-weight:bold;color:#660000;"></div></div>
  </div> 
<div style="float:left; width:213px;height:167px;font-size:13px; text-align:center; margin-top:-50px; margin-left:0px;"> 
<br><br>
<div style="float:left; width:213px;height:167px;font-size:13px; text-align:center;margin-top:100px margin-top:0px; margin-left:0px;">

<div style="float:left; width:113px;height:167px;font-size:13px; text-align:center;margin-top:150px  margin-left:0px;">

 STATUS: </div>  
<div style="float:left; width:100px;height:267px;font-size:13px; text-align:center;margin-top:150px margin-left:0px;">


<?php 



$tmax=$teacherreligion;
if(empty($tmax)){
$tmax="";
}

if($tmax<10){$colorf1btmax="#ff0000";


}else if($tmax>=10){$colorf1btmax="blue";


}




$mxc10=$teacherreligion;

  $qrys = "select app as total
from cm where (x1>='$mxc10' &&  x2<='$mxc10') or (x2>='$mxc10' &&  x1<='$mxc10') and id='2'"; $qry=mysql_query( $qrys); 
$row = mysql_fetch_assoc($qry); 
 $statusf1btmax=$row['total'];






echo '<div style="font-size:22px; with:385px; color:'. $colorf1btmax.';">'.$statusf1btmax.'</div>'; ?>




		 </div>
		 
		 
		 
		 </div>
		 
		 </div>
		 
<div style="float:left;margin-top:2px;border-top:1px solid #ccc;border-left:1px solid #ccc;border-right:1px solid #ccc; border-bottom:1px solid #ccc;  width:375px;height:64px;font-size:13px; text-align:center;">
		 Principal/Proviseur
		  </div>
		 
		 </div>
		 
		 </div>
		 
<div style="float:left;margin-top:2px;border-top:1px solid #ccc;border-left:1px solid #ccc;border-right:1px solid #ccc; border-bottom:1px solid #ccc;  width:372px;height:65px;font-size:13px; text-align:center;">
		 
	<div style="float:left;border-bottom:1px solid #ccc;text-transform:uppercase;  width:372px;height:19px;font-size:13px; text-align:center;">
	class council decision
	</div>
	 
		 
		 
		 
		 
		 
		  </div>
		 
		 
		  </div>
		 
		 
		 
		 
		  </div>
		 
		 
		  </div>
		 
		 
		 
		 
		 
		 
		 </div>
		 
		 <?php 
		 
		 }
		 ?>