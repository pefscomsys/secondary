<html>
<head>
<TITLE>Resit MARKS CA & EXAM</TITLE>
<style>

table,td{line-height:21px;
font-family:Tahoma, sans-serif;
text-transform:uppercase;
font-size:14px; }
tr{border-bottom:1px solid #000;}
</style>
</head>
<body onload="window.print();">



<div  style="text-align:center; margin:auto; width:1200px; height:150px;"><br><br>

 <?php
ini_set('max_execution_time', 60000); //300 seconds = 5 minutes
 include 'dbcs.php';
 
$department=$_POST["department"];

$sex=$_POST["sex"];

$classes=$_POST["classes"];
$levels=$_POST["levels"];
$table=courses;
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php echo $row[1];?>
</b>

<br>
Class List for the Accademic Year <?php
$tiko=date('Y '); 
echo $tiko-1;
?>/  <?php
$tiko=date('Y '); 
echo $tiko;
?>
<?php } ?><Br><Br>

Department : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 


echo $department;?>

<Br>

Level : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 


echo $levels;?><br /><br /><B>
Resit Ca and Exam Mark List </B>

<br /><?php 
$sex=$_POST["sex"];


$mxc01x=$sex;
  if(empty($mxc01x)){
 $statusfb01x="";
 }
  elseif($mxc01x<=3 && $mxc01x>=3  ){
 echo  $statusfb01x="First Semester Courses ";
}

  elseif($mxc01x<=4 && $mxc01x>=4  ){
 echo  $statusfb01x="Second Semester Courses ";
}
?>
</b>
 
<div style="width:1450px;FLOAT:LEFT;COLOR:#000;MARGIN-TOP:50PX;height:800px;margin-left:00px;">

<?php
$department=$_POST["department"];


$levels=$_POST["levels"];
$sex=$_POST["sex"];
$mxc01ttyd=$_POST["sex"];
  if(empty($mxc01ttyd)){
   $sexfd="INSULT";
 }

elseif($mxc01ttyd>=3 && $mxc01ttyd<=3  ){
 $nn="1";
 $sexfdd="3";
  $sexfd="1";
}

elseif($mxc01ttyd>=4 && $mxc01ttyd<=4  ){
 $nn="1";
 $sexfdd="3";
   $sexfd="2";
}

$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php $take=$row[1];



?>
<?php } ?>


	
			 <div style="float:left; width:1600px;margin-left:-150px; height:auto;color:#000;">
 
			 <div style="float:left; width:140px;BORDER:1PX SOLID #000; height:25px;color:#000; background:#ccc;font-size:13px;">
			Matricule
			 
		    </div>
			 <div style="float:left; width:270px;BORDER:1PX SOLID #000; height:25px;color:#000; background:#ccc;font-size:13px;">
			Student Names
			 
		    </div>
			 <div style="float:left; width:1110px; height:25px;">
			<?php


$department=$_POST["department"];

$sex=$_POST["sex"];

$levels=$_POST["levels"];

$mxc01=$sex;
  if(empty($mxc01)){
 $statusfb01="";
 }
  elseif($mxc01<=1 && $mxc01>=1  ){
  $statusfb01="3";
}
  elseif($mxc01<=2 && $mxc01>=2  ){
  $statusfb01="4";
}



$query = mysql_query("select  * from subject where department='$classes' and year2='$year2'  order by subject asc"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 











?>
			 <div style="float:left; width:100px;BORDER:1PX SOLID #000; BACKGROUND:#CCC;height:25px;color:#000;font-size:11px;">
			 
			 <?php echo $m1=$row['subject'];?>
			 </div>

<?php } ?>
			 
		    </div>
			
			
			</div>
<?php 
 $rollss=$_GET["roll"];

$query="select * from marks where form='$take' and last_name='$classes'  order by fname ASC
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		 
			
			 <div style="float:left; width:1600px;margin-left:-150px; height:auto;color:#000;">
 
			 <div style="float:left; width:140px;font-weight:normal;BORDER:1PX SOLID #000; height:25px;color:#000;font-size:13px;">
			<?php echo $mats=$row['matricule'];?>
			 
		    </div>
			 <div style="float:left;text-align:left; width:270px;BORDER:1PX SOLID #000;font-weight:normal; height:25px;color:#000;font-size:12px;">
		<?php $qry = mysql_query("select  fname as total
from courses where matricule='$mats' "); 
$row = mysql_fetch_assoc($qry); 
echo $names=$row['total'];
?> 
			 
		    </div>
			
			
					 <div style="float:left; width:1109px;font-weight:normal; height:25px;">
			<?php



$query = mysql_query("select  * from subject where department='$classes' and year2='$year2'  order by subject asc"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 











?>
	
<div style="float:left; width:100px;BORDER:1PX SOLID #000;height50px;color:#000;font-size:11px;">
			

			 <div style="float:left; width:100px; height:25px;color:#000;font-size:11px;">
			 
			 <div style="float:left; width:32px;BORDER-RIGHT:1PX SOLID #000; height:25px;color:#000;font-size:10px;">
			<?PHP $m1=$row['subject'];
			 
$qry = mysql_query("select c101 as total From  resit where fname='$m1' and matricule='$mats' and sex='$sexfdd' and departmet='$department' and levels='$levels'"); 
$row = mysql_fetch_assoc($qry); 
$x11=$row['total']; 

$mxc01p=$x11;
  if(empty($mxc01p)){
 $statusfb01p="x";
 }
  elseif($mxc01p>''  ){
  $statusfb01p=$mxc01p;
}
echo($statusfb01p);

?></div> 
			 <div style="float:left; width:32px;BORDER-RIGHT:1PX SOLID #000;height:25px;color:#000;font-size:10px;">
		<?PHP 
			 
$qry = mysql_query("select c102 as total From  resit where fname='$m1' and matricule='$mats' and sex='$sexfdd' and departmet='$department' and levels='$levels'"); 
$row = mysql_fetch_assoc($qry); 
 $x12=$row['total'];


$mxc01pp=$x12;
  if(empty($mxc01pp)){
 $statusfb01pp="x";
 }
  elseif($mxc01pp>''  ){
  $statusfb01pp=$mxc01pp;
}
echo($statusfb01pp);



 ?></div> 
			  
			  <div style="float:left; width:30px;background:<?php
			  $x13=$x11+$x12;
			  $mxc125=$x13;
			  if(empty($mxc125)){

 $color="#000";
 }
  elseif($mxc125>='50' ){
  
   $color="#000";
}
  elseif($mxc125<'50' ){

   $color="#000";
}
echo $statusfb125;
?>;		  height:25px;color:<?php echo $color;?>;font-size:10px;">
				<?PHP 
				$x13=$x11+$x12;
		
			
$mxc01ppp=$x13;
  if(empty($mxc01ppp)){
 $statusfb01ppp="x";
 }
  elseif($mxc01ppp>''  ){
  $statusfb01ppp=$mxc01ppp;
}
echo($statusfb01ppp);

			 
			 ?></div> 
			  
			 
			  </div> 
			  </div> 

<?php } ?>
			 
		    </div>
</div>



<?php } ?>


</div>