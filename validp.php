<html>
<head>
<TITLE>mock result stat</TITLE>
<style>

table,td{line-height:21px;
font-family:Tahoma, sans-serif;
text-transform:uppercase;
font-size:14px; }
tr{border-bottom:1px solid #000;}
</style>
</head>
<body onload="window.print();">



<div  style="text-align:center; margin:auto; width:800px; height:150px;"><br><br>

 <?php
 include 'dbcs.php';
ini_set('max_execution_time', 300000); //300 seconds = 5 minutes
 
$department=$_POST["department"];

$sex=$_POST["sex"];

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
COURSE VALIDATION TABLE </B>

<br />
</b>
 
<div style="width:3750px;FLOAT:LEFT;COLOR:#000;MARGIN-TOP:50PX;height:800px;margin-left:-120px;">

<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php $take=$row[1];



?>
<?php } ?>


	
			 <div style="float:left; width:3600px; height:auto;color:#000;">
 
			 <div style="float:left; width:170px;BORDER:1PX SOLID #000; height:25px;color:#000; background:#ccc;font-size:13px;">
			Matricule
			 
		    </div>
			 <div style="float:left; width:210px;BORDER:1PX SOLID #000; height:25px;color:#000; background:#ccc;font-size:13px;">
			Student Names
			 
		    </div>
			 <div style="float:left; width:2410px; height:25px;">
			<?php


$department=$_POST["department"];

$sex=$_POST["sex"];

$levels=$_POST["levels"];

$mxc01=$sex;
  if(empty($mxc01)){
 $statusfb01="";
 }
  elseif($mxc01<=1 && $mxc01>=1  ){
   $statusfb01ss="1";
  $statusfb01s="1";
   $statusfb01="3";
}
  elseif($mxc01<=2 && $mxc01>=2  ){
  $statusfb01ss="2";
  $statusfb01s="2"; 
  $statusfb01="4";
}
 elseif($mxc01<=3 && $mxc01>=3  ){
  $statusfb01ss="1";
  $statusfb01s="2";
    $statusfb01="4";
}



$query = mysql_query("select  * from subject where department='$department' and year1='$levels' and year2>='$statusfb01ss' and year2<='$statusfb01s'order by subject asc"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 











?>
			 <div style="float:left; width:100px;BORDER:1PX SOLID #000; BACKGROUND:#CCC;height:25px;color:#000;font-size:11px;">
			 
			 <?php echo $m1=$row['subject'];
			 
			 
			 
			 
			 
			 
$qry = mysql_query("select * FROM  subject where department='$department' and year1='$levels' and year2='$sex'"); 
$num_rows=mysql_num_rows($qry);
 $x11p=$num_rows; ?>
			 </div>

<?php } ?>
			 
		    </div>
			
			
			</div>
<?php 
 $rollss=$_GET["roll"];
$department=$_POST["department"];

$sex=$_POST["sex"];

$levels=$_POST["levels"];
$query="select * from courses where db1='$take' and levels='$levels' and departmet='$department' 
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		 
			
			 <div style="float:left; width:3600px; height:auto;color:#000;">
 
			 <div style="float:left; width:170px;font-weight:normal;BORDER:1PX SOLID #000; height:25px;color:#000;font-size:13px;">
			<?php echo $mats=$row['matricule'];?>
			 
		    </div>
			 <div style="float:left;text-align:left; width:210px;BORDER:1PX SOLID #000;font-weight:normal; height:25px;color:#000;font-size:12px;">
		<?php $qry = mysql_query("select  fname as total
from courses where matricule='$mats' "); 
$row = mysql_fetch_assoc($qry); 
echo $names=$row['total'];
?> 
			 
		    </div>
			
			
					 <div style="float:left; width:2209px;font-weight:normal; height:25px;">
			<?php



$query = mysql_query("select  * from subject where department='$department' and year1='$levels' and year2>='$statusfb01ss' and year2<='$statusfb01s' order by subject asc"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 











?>
			 <div style="float:left; width:100px;width:100px;BORDER:1PX SOLID #000; height:25px;color:#000;font-size:13px;">
			 
			 <?php  $m1=$row['subject'];
			 
			 
			 

$qry = mysql_query("select  sum(c101+c102) as total
from resit where fname='$m1' and matricule='$mats' and departmet='$department'  and sex='$sex'"); 
$row = mysql_fetch_assoc($qry); 
 echo $x1=$row['total']; 

			 
			 
$qry = mysql_query("select * FROM  resit where fname='$m1' and departmet='$department'  and matricule='$mats'  and sex='$sex'"); 
$num_rows=mysql_num_rows($qry);
 $x11=$num_rows; 
			 
$qry = mysql_query("select  sum(c101+c102) as total
from resit where fname='$m1' and matricule='$mats' and departmet='$department' and sex='$statusfb01'"); 
$row = mysql_fetch_assoc($qry); 
 $x2=$row['total']; 

			 
			 
$qry = mysql_query("select * FROM  resit where fname='$m1' and matricule='$mats' and departmet='$department'  and sex='$statusfb01'"); 
$num_rows=mysql_num_rows($qry);
 $x22=$num_rows; 
  
 $mxc125=$x1;
  if(empty($mxc125)){
 $statusfb125="";
 }
  elseif($mxc125>'' ){
  $statusfb125=($mxc125)/($x11) ;
}

 $statusfb125;
$mxc126=$x2;
  if(empty($mxc126)){
 $statusfb126="";
 }
  elseif($mxc126>'' ){
 $statusfb126=($x2/$x22) ;
}
	
  
  
  
  
  
$mxc002=$statusfb125;
if(empty($mxc002)){
 $statusfbios="<DIV STYLE='color:#cc0000;'>OWE</div>";
  $statusfbiosy="0";
 }
elseif($mxc002>=50 ){
 $statusfbios="<DIV STYLE='color:#1188AA;'>VALIDATED</div>";
  $statusfbiosy="1";
}
			 
elseif($mxc002<50 && $statusfb126>=50 ){
 $statusfbios="<DIV STYLE='color:#1188AA;'>VALIDATED</div>"; 
 $statusfbiosy="1";
}

elseif($mxc002<50 && $statusfb126<50 ){
 $statusfbios="<DIV STYLE='color:#cc0000;'>OWE</div>"; 
 $statusfbiosy="0";
}



echo $statusfbios;
 
  
 
 
$queryf3="update resit set c105='$statusfbiosy'
 where matricule='$mats' and departmet='$department' and fname='$m1' and sex='$sex' and levels='$levels'";


mysql_query ($queryf3) or die ();
		
		
		
			 
$qry = mysql_query("select  sum(c105) as total
from resit where  matricule='$mats' and departmet='$department'  and sex='$sex' and levels='$levels'"); 
$row = mysql_fetch_assoc($qry); 
 echo $kadji=$row['total']; 

	
$qrye = mysql_query("select * FROM  subject where department='$department' and year1='$levels' and year2>='$statusfb01ss' and year2<='$statusfb01s'"); 
$num_rows=mysql_num_rows($qrye);
 $xoi=$num_rows; 	
		
 
$sexss=$sex;
 if(empty($sexss)){
 $statusmxbm="";
 }
  elseif($sexss<=1 && $sexss>=1  ){
  $statusmxbm="c132";
}
  elseif($sexss<=2 && $sexss>=2  ){
  $statusmxbm="c133";
}
  elseif($sexss<=3 && $sexss>=3  ){
  $statusmxbm="c134";
}


$queryf3t="update courses set $statusmxbm='$kadji'
 where matricule='$mats' and departmet='$department'  and levels='$levels' and db1='$take'";

 
mysql_query ($queryf3t) or die ();

$sexsss=$sex;
 if(empty($sexsss)){
 $statusmxbms="";
 }
  elseif($sexsss<=1 && $sexsss>=1  ){
  $statusmxbms="c130";
}
  elseif($sexsss<=2 && $sexsss>=2  ){
  $statusmxbms="c131";
}
 elseif($sexsss<=3 && $sexsss>=3  ){
  $statusmxbms="c135";
}

 
$queryf3tt="update courses set $statusmxbms='$xoi'
 where matricule='$mats' and departmet='$department'  and levels='$levels' and db1='$take'";

 
mysql_query ($queryf3tt) or die ();

	?>
			 </div>

<?php } ?>
			 
		    </div>
</div>



<?php } ?>


</div>