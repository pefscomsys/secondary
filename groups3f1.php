
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
$query="select * from marks where form='$take' and last_name='$classes' order by mxc21 ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		 <?php $teachercivic=$row['teachercivic'];
		 $teacherreligion=$row['teacherreligion'];
		  $teachersport=$row['teachersport'];$teacherecon=$row['teacherecon']; $total3=$row['total3'];
		 $middle_name=$row['sport4'];
		 $paperss=$row['amount_paid2'];$teacherhecon=$row['teacherhecon'];
		 $position=$row['mxc19'];
		 	 $position2=$row['mxc20'];
			 	 $position3=$row['mxc21'];
		 
		 ?>
		 <div class="page">
		  <div style="margin:auto; width:670px; height:1000px;background:url(reportss.png);margin-left:0px;">
		 
		 <div style="float:left; width:670px; margin-top:10px; height:800px;">
		 <?php include 'top3.php';?></div>

		
		
		 <div style="float:left; width:750px;font-weight:bold;font-weight:bold;text-transform:uppercase; height:30px;font-size:13px;background:#efefef;border:1px solid #000;margin-top:28px; margin-left:1px;">
		 
		 
		 <div style="float:left;font-family:arial;text-align:center; width:170px; height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
		 Subject
		 </div>	  <div style="float:left;font-size:11px;font-family:arial;text-align:center; width:35px; padding:3px; height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
1<sup>st</sup>Sq
		 </div>  
		 	  <div style="float:left;font-size:11px;font-family:arial;text-align:center; width:35px; padding:3px; height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
2<sup>nd</sup>Sq
		 </div> 
		 	  <div style="float:left;font-family:arial;text-align:center; width:35px; font-size:11px;padding:3px; height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
3<sup>rd</sup>Sq
		 </div> 
		 
		 
		 
		 
		 <div style="float:left;font-family:arial;text-align:center;font-size:10px; width:35px; padding:3px; height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
4<sup>th</sup>Sq
		 </div> 
		  <div style="float:left;font-family:arial;text-align:center;font-size:10px; width:35px; padding:3px; height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
5<sup>th</sup>Sq
		 </div> 
		 
		 
		 
		 <div style="float:left;font-family:arial;text-align:center;font-size:9px; width:40px;padding:3px;  height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
6 <sup>th</sup>Sq
		 </div>
		 <div style="float:left;font-family:arial;text-align:center; width:40px; padding:3px; height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
Coef.
		 </div>
		 <div style="font-size:13px; float:left;font-family:arial;text-align:center; width:50px;padding:3px;  height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
3<sup>rd</sup> A.
		 </div>
		 
		 <div style="float:left;font-family:arial;text-align:center; width:40px;padding:3px;  height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
AV.
		 </div>
		 
		 <div style="float:left;font-family:arial;text-align:center; width:40px;padding:3px;  height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
Total
		 </div>

		 <div style="float:left;font-family:arial;text-align:center; width:50px;padding:3px;  height:20px;background:#efefef;border-right:1px solid #000;margin-top:3px; margin-left:0px;">
		 
Grade		 </div> 
<div style="float:left;font-family:arial;text-align:center; width:70px;padding:3px;  height:20px;background:#efefef;margin-top:3px; margin-left:0px;">
		 
Status		 </div>
		 </div>
		 <?php 

$total_papers = 0;
$query = mysql_query("select  * from resit where form='$take' and first_name='$fname' and classes='$classes' group by subject order by subject ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 
		 
		 
		 
		 
		 <div style="float:left; width:750px;font-weight:normal; height:30px;border-bottom:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;margin-top:0px; margin-left:1px;font-size:13px;">
		 
		 
		 <div style="float:left;font-family:arial;text-align:left;font-size:10px; padding:4px;width:170px;text-transform:uppercase; height:35px;border-right:1px solid #000; margin-left:0px;">
		
&nbsp; <?PHP $mss=$row['subject'];
		 
		$teacher=$row['teacher'];
$qry = mysql_query("select subject as total
from subject where roll='$mss'  "); 
$row = mysql_fetch_assoc($qry); 
echo $saves=$row['total'];





$qry = mysql_query("select c101,c102, coef
from resit where form='$take' and first_name='$fname' and classes='$classes' and subject='$mss' and c105='1' "); 
$row = mysql_fetch_assoc($qry); 
 $ca1=$row['c101'];$exam1=$row['c102']; $coef=$row['coef'];
 
 

$qry = mysql_query("select c101,c102,coef
from resit where form='$take' and first_name='$fname' and classes='$classes' and subject='$mss'  and c105='2'  "); 
$row = mysql_fetch_assoc($qry); 
 $ca2=$row['c101'];$exam2=$row['c102']; 
 
 

$qry = mysql_query("select c101,c102, coef
from resit where form='$take' and first_name='$fname' and classes='$classes' and subject='$mss'  and c105='3'  "); 
$row = mysql_fetch_assoc($qry);  $coef=$row['coef'];
 $ca= $row['c101'];
		$exam=$row['c102'];
$qry = mysql_query("select coef,c106
from resit where form='$take' and first_name='$fname' and classes='$classes' and subject='$mss' group by coef   "); 
$row = mysql_fetch_assoc($qry); 
		$c106=$row['c106'];
		
		
		if($c106 >= 10.00)
		{
			//add the number of papers passed
			
		}
		 ?><br><i><b style='float:left;font-weight:normal;font-size:9px;margin-top:-3px;color:#282828;margin-left:5px;'>
	<?php echo $teacher;;?></b></i>
		 </div>
		 
		   <div style="float:left;font-family:arial;text-align:center; font-size:16px;width:35px;padding:3px; height:35px;border-right:1px solid #000;color:<?php
$mik101=$ca1;		  
if(empty($mik101)){
 $color="";
}
elseif($mik101<10){
 $color="red";
}
elseif($mik101>=10){
 $color="#000";
}
echo $color;?>; margin-left:0px;">
		 
<?php echo $ca1;?>
		 </div>
		 
		 
		 
		   <div style="float:left;font-family:arial;text-align:center; font-size:16px;width:35px;padding:3px; height:35px;border-right:1px solid #000;color:<?php
$mik102=$exam1;		  
if(empty($mik102)){
 $color="";
}
elseif($mik102<10){
 $color="red";
}
elseif($mik102>=10){
 $color="#000";
}
echo $color;?>; margin-left:0px;">
		 
<?php echo $exam1;?>
		 </div>
		 
		 
		   <div style="float:left;font-family:arial;text-align:center; font-size:16px;width:35px;padding:3px; height:35px;border-right:1px solid #000;color:<?php
$mik104=$ca2;		  
if(empty($mik104)){
 $color="";
}
elseif($mik104<10){
 $color="red";
}
elseif($mik104>=10){
 $color="#000";
}
echo $color;?>; margin-left:0px;">
		 
<?php echo $ca2;?>
		 </div>
		 
		   <div style="float:left;font-family:arial;text-align:center; font-size:16px;width:35px;padding:3px; height:35px;border-right:1px solid #000;color:<?php
$mik105=$exam2;		  
if(empty($mik105)){
 $color="";
}
elseif($mik105<10){
 $color="red";
}
elseif($mik105>=10){
 $color="#000";
}
echo $color;?>; margin-left:0px;">
		 
<?php echo $exam2;?>
		 </div>
		  <div style="float:left;font-family:arial;font-size:16px;text-align:center;padding:3px;  width:35px;color:<?php
$mik10s=$ca;		  
if(empty($mik10s)){
 $colors="";
}
elseif($mik10s<10){
 $colors="red";
}
elseif($mik10s>=10){
 $colors="#000";
}
echo $colors;?>; height:35px;border-right:1px solid #000;font-size:16px; margin-left:0px;padding:3px; ">
		 
<?php echo $ca;?>
		 </div>
		 <div style="float:left;font-family:arial;text-align:center;font-size:15px;padding:3px; color:
		 
		 
		 <?php
$mik10s=$exam;		  
if(empty($mik10s)){
 $colors="";
}
elseif($mik10s<10){
 $colors="red";
}
elseif($mik10s>=10){
 $colors="#000";
}
echo $colors;?>;  width:40px; height:35px;border-right:1px solid #000;padding:3px;font-size:16px;  margin-left:0px;">
		 <?php
echo $exam;


?>

		 </div>
		 <div style="float:left;font-family:arial;padding:3px; font-size:16px;text-align:center;background:#ccc; opacity:1;width:40px; height:35px;border-right:1px solid #000;margin-left:0px;">

<?php 

if($ca == '' && $exam == ''){
	echo "";
	
	
}else{
	
echo $coef;
}


?>
		 </div>
		 
		 
		 <div style="float:left;padding:3px; font-family:arial;font-size:16px;color:<?php
 $av3 = ($ca + $exam) / 2; 
if(empty($ca) && empty($exam)){
 $colorss="";
}
elseif($av3<10){
 $colorss="red";
}
elseif($av3>=10){
 $colorss="#000";
}
echo $colorss;?>;text-align:center; padding:3px; width:50px;font-size:16px; height:35px;border-right:1px solid #000; margin-left:0px;">
		<?php

if($ca == '' && $exam == ''){
	echo "";
	
	
}else{
	
echo ($av3*$coef);
}


///update the average marks

$qry = mysql_query("select SUM(c101+c102) as total
from resit where form='$take' and first_name='$fname' and classes='$classes' and subject='$mss'    "); 
$row = mysql_fetch_assoc($qry); 
  $cas2=$row['total'];



$qry = mysql_query("select count(*) as total
from resit where form='$take' and first_name='$fname' and classes='$classes' and subject='$mss'  AND (c101 <> '' OR c102 <> '')   "); 
$row = mysql_fetch_assoc($qry); 
 $cax=$row['total'];
$tm=($cax*2);


if(empty($cas2)){
	$fbn="";
}elseif($cas2>''){
	$fbn=round(($cas2/$tm),1);
	$qx="update resit set c106='$fbn' where  form='$take' and first_name='$fname' and classes='$classes' and subject='$mss' ";
	mysql_query($qx);
	
}
		  
if(empty($c106)){
$qx="update resit set c106='$fbn' where  form='$take' and first_name='$fname' and classes='$classes' and subject='$mss' ";
mysql_query($qx);
}
elseif($c106){


}
?>
		 </div>
		 
		 
		 <div style="float:left;padding:3px; font-family:arial;font-size:16px;color:<?php
$mik10ss=(($exam+$ca)/2);		  
if(empty($fbn)){
 $colorss="";
}
elseif($fbn<10){
 $colorss="red";
}
elseif($fbn>=10){
 $colorss="#000";
 ++$total_papers; //add the number of papers passed
}
echo $colorss;?>;text-align:center; width:40px; padding:3px;font-size:16px; height:35px;;border-right:1px solid #000; margin-left:0px;">
		 
<?php
//showing the average mark
//if($ca1=='' && $exam1 == '' && $ca2 == '' && $exam2 == '' && $ca == '' && $exam == '')
if($ca1=='' && $exam1 == '' && $ca2 == '' && $exam2 == '' && $ca == '' && $exam == ''){
	  echo '0';
}elseif($fbn == ''){
	echo  '0'; 
	
}
else
{
	echo $fbn;
}

?>
		 </div>
		 <div style="float:left;padding:3px; font-family:arial;font-size:16px;color:<?php
$mik10ss=(($fbn));		  
if($ca1=='' && $exam1 == '' && $ca2 == '' && $exam2 == '' && $ca == '' && $exam == ''){
 $colorss="";
}
elseif($mik10ss<10){
 $colorss="red";
}
elseif($mik10ss>=10){
 $colorss="#000";
}
echo $colorss;?>;text-align:center; padding:3px; width:40px;font-size:16px; height:35px;border-right:1px solid #000; margin-left:0px;">
		<?php
//showing the mark times the coefficient.
if(($ca1=='' && $exam1 == '' && $ca2 == '' && $exam2 == '' && $ca == '' && $exam == ''))
{
	echo '';
}
else
{
	
echo ($fbn*$coef);
}
?>
		 </div>
		 <div style="float:left;padding:3px; font-size:16px;font-family:arial;text-align:center;border-right:1px solid #000; width:50px; height:35px; margin-left:0px;">
		 
<?php


//showing the grading.
 $mxc10=$fbn;
if($ca1=='' && $exam1 == '' && $ca2 == '' && $exam2 == '' && $ca == '' && $exam == ''){
$mxc10="";
}


if(($ca1=='' && $exam1 == '' && $ca2 == '' && $exam2 == '' && $ca == '' && $exam == '')){
 $colorf1labour="#FF0000";
 $statusflabour="";
 echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';}
elseif($mxc10<10){
 $colorf1labour="#FF0000";
 $statusflabour="F";
 echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';
}else if(($mxc10 >=10) && ($mxc10<=10.99)){
 $colorf1labour="#000";
 $statusflabour="C";
echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';}else if(($mxc10 >=11.00) && ($mxc10<=11.99)){
 $colorf1labour="#000";
 $statusflabour="C+";
 echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';}else if(($mxc10 >=12.00) && ($mxc10<13.99)){
 $colorf1labour="#000";
 $statusflabour="B";
 echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';}else if(($mxc10 >=14) && ($mxc10<16.99)){
 $colorf1labour="#000";
 $statusflabour="B+";
 echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';}else if(($mxc10 >=17) && ($mxc10<18.5)){
 $colorf1labour="#000";
 $statusflabour="A";
echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';}else if(($mxc10 >=18.5) && ($mxc10<=20.00)){
 $colorf1labour="#000";
 $statusflabour="A";
echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';

}
?>	


</div>
<div style="float:left;font-family:arial;text-align:center;padding:3px; font-size:14px; width:70px; height:35px; margin-left:0px;">
		
<?php

  $mxc10=$fbn;
if(($ca1=='' && $exam1 == '' && $ca2 == '' && $exam2 == '' && $ca == '' && $exam == '')){
$mxc10="";
}


if(($ca1=='' && $exam1 == '' && $ca2 == '' && $exam2 == '' && $ca == '' && $exam == '')){
 $colorf1labour="#FF0000";
 $statusflabour="";
 echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';}
elseif($mxc10<10){
 $colorf1labour="#FF0000";
 $statusflabour="FAILED";
 echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';
}else if(($mxc10 >=10) && ($mxc10<=11.9)){
 $colorf1labour="#000";
 $statusflabour="AVERAGE";
echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';}else if(($mxc10 >=12) && ($mxc10<=13.9)){
 $colorf1labour="#000";
 $statusflabour="FAIR";
 echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';}else if(($mxc10 >=14) && ($mxc10<15.9)){
 $colorf1labour="#000";
 $statusflabour="GOOD";
 echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';}else if(($mxc10 >=16) && ($mxc10<17.9)){
 $colorf1labour="#000";
 $statusflabour="V. GOOD";
 echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';}else if(($mxc10 >=18) && ($mxc10<18.5)){
 $colorf1labour="#000";
 $statusflabour="EXCELLENT";
echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';}else if(($mxc10 >=18.5) && ($mxc10<=20)){
 $colorf1labour="#000";
 $statusflabour="EXCELLENT";
echo'<div style=" color:'. $colorf1labour.';">'.$statusflabour.'</div>';

}
?>	 </div>




















		 </div>
 
		 
<?php
 $qry = mysql_query("select SUM(coef) as total
from resit where first_name='$fname'  and form='$take' and classes='$classes'  and (c101>'' || c102>'') AND `c105` = '3' "); 
$row = mysql_fetch_assoc($qry); 
$coefs=$row['total'];
?>
		 
		 
		 
 	 
<?php
/*
$qry = mysql_query("select sum((c106*coef)) as total
from resit where first_name='$fname'  and form='$take' and classes='$classes'  and (c101>'' && c102>'') AND `c105` = '3' "); 
$row = mysql_fetch_assoc($qry); 
$ctt=$row['total'];
*/

$qry = mysql_query("select c106,coef
from resit where first_name='$fname'  and form='$take' and classes='$classes'  and (c101>'' && c102>'')  GROUP BY `subject`"); 

$ctt = 0;
while($ro = mysql_fetch_array($qry))
{
	$tt = $ro['c106'] * $ro['coef'];
	
	$ctt += $tt;
}
?>
		 
		 
		 
		 <?php
		 //echo "select count(*)  as total FROM resit where (c106>=10)  and first_name='$fname'  and form='$take' and classes='$classes'     ";
$qryf = mysql_query("select count(*)  as total FROM resit where (c106>=10)  and first_name='$fname'  and form='$take' and classes='$classes'     "); 
$row = mysql_fetch_assoc($qryf); 

 $papers=$row['total'];
 
 
 $qry = mysql_query("select SUM(teachercivic) as total
from marks where last_name='$classes' and form='$take'"); 
$row = mysql_fetch_assoc($qry); 
$class11=$row['total'];
 ?>
	
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 <?php } 
		 ?>	 
		 	 
		 
		 
		 
		 
		 
		 

		 <div style="float:left; width:750px;font-size:13px; height:74px;opacity:1;background:#ccc;color:#000;border:1px solid #000;margin-top:1px; margin-left:1px;">


		 <div style="float:left; width:170px;text-align:center; height:75px;border-right:1px solid #fff;">
		 
		 <?php
		
		//check the student's first term marks.
		$query = "SELECT * FROM `resit` WHERE `c105` = '1' and `first_name` = '$fname' AND (`c101`<>'' OR `c102` <> '') ";
		$link = mysql_query($query);

		//if the result is zero then divide by 2
		if(mysql_num_rows($link) != 0)
		{
			?>
			<b>1<sup>st</sup>Term Average :<?php printf("%01.2f",$teachersport);?><br>
			<?php
		}
		
		//check the student's first term marks.
		$query = "SELECT * FROM `resit` WHERE `c105` = '2' and `first_name` = '$fname' AND (`c101`<>'' OR `c102` <> '') ";
		$link = mysql_query($query);

		//if the result is zero then divide by 2
		if(mysql_num_rows($link) != 0)
		{
			?>
			<b>2<sup>nd</sup>Term Average :<?php printf("%01.2f",$teacherreligion);?><br>
			<?php
		}
		?>
			
		 
		 	 
		 	 <b>3<sup>rd</sup>Term Average :<?php printf("%01.2f",$teachercivic);?>
		 
		 
		 </div>
		 
		 
		 <div style="float:left; width:215px; height:75px;border-right:1px solid #fff;">
		  Passed in  <?php echo $total_papers;?> sub.<br>
		<b>Class AV</b>:<?php printf("%01.2f",($class11/$class1));?><br>Annual Av:
		
		
		
		<?php printf("%01.2f",($teacherhecon/100));?>
		
		

		 
		 
		 </div>

		 <div style="float:left; width:40px; height:75px;border-right:1px solid #000;text-align:center;">
		<b></b>
		 <?php echo $coefs;?>
		 
		 </div>

		 <div style="float:left; width:50px; height:75px;border-right:1px solid #000;text-align:center;">
		<b></b>
		 <?php echo $total3;?>
		 
		 </div>
		 <div style="float:left; width:40px; height:75px;border-right:1px solid #000;text-align:center;">
		<b></b>
		 
		 
		 </div>
 <div style="float:left; width:40px; height:75px;border-right:1px solid #000;text-align:center;">
			 <?php echo $ctt;?>
		 
		 
		 </div>

 <div style="float:left; width:150px; height:75px;text-align:center;">
		<?php
		
		//check the student's first term marks.
		$query = "SELECT * FROM `resit` WHERE `c105` = '1' and `first_name` = '$fname' AND (`c101`<>'' OR `c102` <> '') ";
		$link = mysql_query($query);

		//if the result is zero then divide by 2
		if(mysql_num_rows($link) != 0)
		{
			?>
			<b>1<sup>st</sup> Term</b>: <?php echo $position;?> out of <?php echo $class1;?><br>
			<?php
		}
		
		//check the student's first term marks.
		$query = "SELECT * FROM `resit` WHERE `c105` = '2' and `first_name` = '$fname' AND (`c101`<>'' OR `c102` <> '') ";
		$link = mysql_query($query);

		//if the result is zero then divide by 2
		if(mysql_num_rows($link) != 0)
		{
			?>
			<b>2<sup>nd</sup> Term</b>: <?php echo $position2;?> out of <?php echo $class1;?><br>
			<?php
		}
		?>
		
		 
		 
		 <b>3<sup>rd</sup> Term</b>: <?php echo $position3;?> out of <?php echo $class1;?>
		 <br>
		 <b>Ann. Pos.</b>: <?php echo $teacherecon;?> out of <?php echo $class1;?>
		 </div>



		 </div>






<div style="float:left;width:770px;">

<div style="float:left;margin-top:2px;border-top:1px solid #555;border-left:1px solid #555; width:375px;height:176px;font-size:13px; text-align:center;">
<div style="float:left; width:375px;height:20px;font-size:13px; text-align:center; margin-top:0PX;"> <strong>GENERAL CONDUCT/ CONDUIT GENERALE</strong></div><div style="position:inherit;">
<div style="float:left;border:1px solid #555; width:150px;height:20px;font-size:13px; text-align:center;"> 
<strong>DISCIPLINE</strong>
  </div><div style="float:left;border:1px solid #555; width:20px;height:20px;font-size:13px; text-align:center;"> 

  </div>
  
  
  <div style="float:left;border:1px solid #555; width:120px;height:20px;font-size:11px; text-align:center;"> 
<strong>ACADEMIC WORK </strong>
  </div></div> 
  
  <div style="float:left;border:1px solid #555; width:75px;height:20px;font-size:13px; text-align:center;"> 
<strong>Grades</strong>
  </div>
  
  
  <div style="float:left;border:1px solid #555; width:150px;height:20px;font-size:13px; text-align:center;"> 
Lateness /Retard
  </div><div style="float:left;border:1px solid #555; width:20px;height:20px;font-size:13px; text-align:center;"> 

  </div><div style="float:left;border:1px solid #555; width:120px;height:20px;font-size:13px; text-align:center;"> 
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
 $statussswarningffffff1="#000";
}
echo $statussswarningffffff1
  ;?>">
  Excellent
  </div>
  </div>
  <div style="float:left;border:1px solid #555; width:75px;height:20px;font-size:13px; text-align:center;"> 
A= 17-20
  </div>
  
   
  <div style="float:left;border:1px solid #555; width:150px;height:20px;font-size:13px; text-align:center;"> 
Absence /Absent
  </div><div style="float:left;border:1px solid #555; width:20px;height:20px;font-size:13px; text-align:center;"> 
<div style="float:left;border:1px solid #555; width:20px;height:20px; background:#ccc; color:white;"><?php echo $middle_name;?></div>
  </div><div style="float:left;border:1px solid #555; width:120px;height:20px;font-size:13px; text-align:center;"> 
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
echo "#000";
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
 $statussswarningffff1="#000";
}
elseif($warningffff1>16.9
){
 $colorf1chem="#FF0000";
 $statussswarningffff1="";
}
echo "#fff";
  ;?>">
 Very Good
  </div>
  </div> 
   <div style="float:left;border:1px solid #555; width:75px;height:20px;font-size:11px; text-align:center;"> 
B+= 14-16.9
  </div>
   
  <div style="float:left;border:1px solid #555; width:150px;height:20px;font-size:13px; text-align:center;"> 
Punishment
  </div><div style="float:left;border:1px solid #555; width:20px;height:20px;font-size:13px; text-align:center;"> 
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
  </div><div style="float:left;border:1px solid #555; width:120px;height:20px;font-size:13px; text-align:center;"> 








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
   <div style="float:left;border:1px solid #555; width:75px;height:20px;font-size:11px; text-align:center;"> 
B= 12-13.9
  </div>
 
 
    
  <div style="float:left;border:1px solid #555; width:150px;height:20px;font-size:13px; text-align:center;"> 
Warning 
  </div><div style="float:left;border:1px solid #555; width:20px;height:20px;font-size:13px; text-align:center;"> 
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
  </div><div style="float:left;border:1px solid #555; width:120px;height:20px;font-size:13px; text-align:center;"> 
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
   <div style="float:left;border:1px solid #555; width:75px;height:20px;font-size:13px; text-align:center;"> 
C+=11-11.9
  </div>
  
   
  <div style="float:left;border:1px solid #555; width:150px;height:20px;font-size:13px; text-align:center;"> 
Serious Warning / Blame
  </div>
  
  
  <div style="float:left;border:1px solid #555; width:20px;height:20px;font-size:13px; text-align:center;"> 

  </div><div style="float:left;border:1px solid #555; width:120px;height:20px;font-size:13px; text-align:center;"> 
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
  
   <div style="float:left;border:1px solid #555; width:75px;height:20px;font-size:13px; text-align:center;"> 
C= 10-10.9
  </div> 
  <div style="float:left;border:1px solid #555; width:118px;height:22px;font-size:13px; text-align:center;"> 
Suspension in days
  </div>  <div style="float:left;border:1px solid #555; width:30px;height:22px;font-size:13px; text-align:center;"> 

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
  <div style="float:left;border:1px solid #555; width:20px;height:22px;font-size:13px; text-align:center;"> 

  </div><div style="float:left;border:1px solid #555; width:120px;height:22px;font-size:13px; text-align:center;"> 

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
   <div style="float:left;border:1px solid #555; width:75px;height:22px;font-size:13px; text-align:center;"> 
F= 0-9
  </div>
  
  
  </div> 
  
  

<div style="float:left;border:1px solid #555; width:375px;height:174px;font-size:13px; text-align:center;margin-top:2px;">
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



$tmax= ($teacherhecon/100);
if(empty($tmax)){
$tmax="";
}

if($tmax<10){$colorf1btmax="#ff0000";
$statusf1btmax="FAILED";

}else if($tmax>=10){$colorf1btmax="#000";
$statusf1btmax="PASSED";

}










echo '<div style=" color:'. $colorf1btmax.';">'.$statusf1btmax.'</div>'; ?>




		 </div>
		 
		 
		 
		 </div>
		 
		 </div>
		 
<div style="float:left;margin-top:2px;border-top:1px solid #555;border-left:1px solid #555;border-right:1px solid #555; border-bottom:1px solid #555;  width:375px;height:64px;font-size:13px; text-align:center;">
		 
		  </div>
		 
		 </div>
		 
		 </div>
		 
<div style="float:left;margin-top:2px;border-top:1px solid #555;border-left:1px solid #555;border-right:1px solid #555; border-bottom:1px solid #555;  width:372px;height:65px;font-size:13px; text-align:center;">
		 
	<div style="float:left;border-bottom:1px solid #555;text-transform:uppercase;  width:372px;height:19px;font-size:13px; text-align:center;">
	class council decision
	</div>
	 
		 
		 
		 
		 
		 
		  </div>
		 
		 
		  </div>
		 
		 
		 </div>
		 
		 
		 
		 
		 
		 </div><br><br><?php
		 } ?>
		 
		 
		 