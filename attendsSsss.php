<html>
<head>
<TITLE>ATTENDANCE SECTION</TITLE>
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
ini_set('max_execution_time', 60000); //300 seconds = 5 minutes
 include 'dbcs.php';
 

$months=$_POST["months"];
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
Accademic Year <?php
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


echo $levels;?><br /><br /><B style='text-transform:uppercase;'>
STUDENT ATTENDANCE PER COURSE FOR THE MONTH OF <?php echo $months=$_POST["months"];?> </B>

<br />







 
<div style="width:2450px;FLOAT:LEFT;COLOR:#000;MARGIN-TOP:50PX;height:800px;MARGIN-LEFT:-200PX;">

<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php $take=$row[1];


?>
<?php } ?>


	
			 <div style="float:left; width:2400px; height:auto;color:#000;">
 
			 <div style="float:left; width:170px;BORDER:1PX SOLID #000; height:65px;color:#000; font-size:13px;">
			Matricule
			 
		    </div>
			 <div style="float:left; width:280px;BORDER:1PX SOLID #000; height:65px;color:#000; font-size:13px;">
			Student Names
	
	
			
			
			
		    </div>
			
			 <div style="float:left; width:170px;BORDER:1PX SOLID #000; height:65px;color:#000; font-size:13px;">
			 
			 <div style="float:left; width:170px;BORDER:1PX SOLID #000; height:25px;color:#000; font-size:13px;text-align:CENTER;">NOV</div>
							 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			P
		
		    </div>
			
							 <div style="float:left; width:34px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			T.P
			
			
		    </div>
			
							 <div style="float:left; width:34px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				ABS
			
		    </div>
							 <div style="float:left; width:34px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				% 
			
		    </div>
			
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			<div style="float:left; width:170px;BORDER:1PX SOLID #000; height:65px;color:#000; font-size:13px;">
			 
			 <div style="float:left; width:170px;BORDER:1PX SOLID #000; height:25px;color:#000; font-size:13px;text-align:CENTER;">DEC</div>
							 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			P
		
		    </div>
			
							 <div style="float:left; width:34px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			T.P
			
			
		    </div>
			
							 <div style="float:left; width:34px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				ABS
			
		    </div>
							 <div style="float:left; width:34px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				% 
			
		    </div>
			
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<div style="float:left; width:170px;BORDER:1PX SOLID #000; height:65px;color:#000; font-size:13px;">
			 
			 <div style="float:left; width:170px;BORDER:1PX SOLID #000; height:25px;color:#000; font-size:13px;text-align:CENTER;">JAN</div>
							 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			P
		
		    </div>
			
							 <div style="float:left; width:34px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			T.P
			
			
		    </div>
			
							 <div style="float:left; width:34px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				ABS
			
		    </div>
							 <div style="float:left; width:34px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				% 
			
		    </div>
			
		    </div>
			
			
			
			
			<div style="float:left; width:170px;BORDER:1PX SOLID #000; height:65px;color:#000; font-size:13px;">
			 
			 <div style="float:left; width:170px;BORDER:1PX SOLID #000; height:25px;color:#000; font-size:13px;text-align:CENTER;">FEB</div>
							 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			P
		
		    </div>
			
							 <div style="float:left; width:34px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			T.P
			
			
		    </div>
			
							 <div style="float:left; width:34px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				ABS
			
		    </div>
							 <div style="float:left; width:34px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				% 
			
		    </div>
			
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			 <div style="float:left; width:1110px; height:25px;">
			<?php


$department=$_POST["department"];

$sex=$_POST["sex"];
 $courses=$_POST["coursses"];
$levels=$_POST["levels"];

$mxc01s=$levels;
  if(empty($mxc01s)){
 $statusfb01s="";
 }
  elseif($mxc01s<=200 && $mxc01s>=200  ){
  $statusfb01s="cxx7";
}
  elseif($mxc01s<=300 && $mxc01s>=300  ){
  $statusfb01s="cxx6";
}



 elseif($mxc01s<=400 && $mxc01s>=400  ){
  $statusfb01s="cxx5";
}

 elseif($mxc01s<=500 && $mxc01s>=500  ){
  $statusfb01s="cxx4";
}













$mxc01=$sex;
  if(empty($mxc01)){
 $statusfb01="";
 }
  elseif($mxc01>=1 && $levels<=200 && $mxc01<=1){
   $statusfb010="cxx5";
  $statusfb01="3";
}
  elseif($mxc01>=2 && $levels<=200  && $mxc01<=2){
    $statusfb010="cxx6";
  $statusfb01="4";
}
  elseif($mxc01>=1 && $levels<=300  && $mxc01<=1){
   $statusfb010="cxx7";
  $statusfb01="3";
}
  elseif($mxc01>=2 && $levels<=300 && $mxc01<=2 ){
    $statusfb010="cxx8";
  $statusfb01="4";
}

  elseif($mxc01>=1 && $levels<=400  && $mxc01<=1){
    $statusfb010="cxx9";
  $statusfb01="4";
}
  elseif($mxc01>=2 && $levels<=400 && $mxc01<=2 ){
    $statusfb010="cxx10";
  $statusfb01="4";
  
  
 }   elseif($mxc01>=3 && $levels<=200 && $mxc01<=3){
   $statusfb010="c137";
  $statusfb01="3";
}
  elseif($mxc01>=3 && $levels<=300  && $mxc01<=3){
    $statusfb010="c138";
  $statusfb01="4";
}
  
  
     elseif($mxc01>=4 && $levels<=300 && $mxc01<=4){
   $statusfb010="c137";
  $statusfb01="3";
}
  elseif($mxc01>=4 && $levels<=400  && $mxc01<=4){
    $statusfb010="c138";
  $statusfb01="4";
}
  
  
  
  
  
  
  
  
  
  

$mxc01=$sex;
  if(empty($mxc01)){
 $statusfb01s="";
 }
  elseif($mxc01>=1 && $levels<=200  && $mxc01<=1){
   $statusfb010s="cxx3";

}
  elseif($mxc01>=2 && $levels<=200  && $mxc01<=2){
    $statusfb010s="cxx4";

}
  elseif($mxc01>=1 && $levels<=300 && $mxc01<=1 ){
   $statusfb010s="cxx11";

}
  elseif($mxc01>=2 && $levels<=300  && $mxc01<=2){
    $statusfb010s="cxx12";
 
}

	
	
	  elseif($mxc01>=3 && $levels<=200 && $mxc01<=3 ){
    $statusfb010s="c143";
 
}
  elseif($mxc01>=4 && $levels<=200 && $mxc01<=4 ){
    $statusfb010s="c144";
 
}
 	
		  elseif($mxc01>=3 && $levels<=300 && $mxc01<=3 ){
    $statusfb010s="c143";
 
}
  elseif($mxc01>=4 && $levels<=300 && $mxc01<=4 ){
    $statusfb010s="c144";
 
}
	
  elseif($mxc01>=1 && $levels<=400  && $mxc01<=1){
    $statusfb010s="total1";
 
}
  elseif($mxc01>=2 && $levels<=400  && $mxc01<=3){
    $statusfb010s="total2";
 
}
 	
	
			  elseif($mxc01>=3 && $levels<=400 && $mxc01<=3 ){
    $statusfb010s="c143";
 
}
  elseif($mxc01>=4 && $levels<=400 && $mxc01<=4 ){
    $statusfb010s="c144";
 
}
	
	
	


$mxc01t=$sex;
  if(empty($mxc01t)){
 $statusfb01st="";
 }
  elseif($mxc01t>=3  && $mxc01t<=3){
   $statusfb010st="1";

}

  elseif($mxc01t>=4  && $mxc01t<=4){
   $statusfb010st="2";

}

  elseif($mxc01t>=1  && $mxc01t<=1){
   $statusfb010st="1";

}
  elseif($mxc01t>=2  && $mxc01t<=2){
   $statusfb010st="2";

}












$query = mysql_query("select  * from subject where department='$department' and year1='$levels' and year2='$statusfb010st' order by subject asc"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 











?>
			 <div style="float:left; width:100px;BORDER:1PX SOLID #000; BACKGROUND:#CCC;height:25px;color:#000;font-size:11px;">
			 
			 <?php echo $m1=$row['subject'];
			 
			 
			 
			 
			 
			 
$qry = mysql_query("select * FROM  subject where department='$department' and year1='$levels' and year2='$statusfb010st'"); 
$num_rows=mysql_num_rows($qry);
 $x11p=$num_rows;










 ?>
			 </div>

<?php } ?>
			 
		    </div>
			
			
			</div>
			
			
			
			
			
<?php 
 $rollss=$_GET["roll"];
$department=$_POST["department"];

$sex=$_POST["sex"];

$levels=$_POST["levels"];
$query="select * from courses where db1='$take' and levels='$levels' and departmet='$department'  order by matricule ASC
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		  <table cellspacing="0" cellpadding="0" width="1710px" style="">
			 
			 <tr>
			 
			 <td style="float:left; width:170px;font-weight:normal;BORDER:1PX SOLID #000;height:26px;">
			 <?php echo $mats=$row['matricule'];
			
			
			?></td>
			
 
			<td style="float:left; width:280px;font-weight:normal;BORDER:1PX SOLID #000;height:26px;">
			
				<?php $qry = mysql_query("select  fname as total
from courses where matricule='$mats' "); 
$row = mysql_fetch_assoc($qry); 
echo $names=$row['total'];
?> 
			 </td>
			 
			 
			 
			 
			 
			 
			 
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		<td style="float:left; width:170px;font-weight:normal;BORDER:1PX SOLID #000;height:26px;">
			 
			 <table><tr>
			 
			 
			 
			 
		 
			<td style="float:left; width:32px;text-align:center; border-right:1px solid #000;height:25px;;">
		
		
		 	 
<?php
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='Nov'  AND levels='$levels' AND levels='$levels'  "); 
$row = mysql_fetch_assoc($qry); 
 $x11gs=$row['total']; 
 
 
 $x=($x11gs+3);
  $mxc11=$x11gs;
if(empty($mxc11)){ $statusfbio="0";

 echo '<div style="color:'.colorf1bio.';">'.$statusfbio.'</div>';
 }
elseif($mxc11>'' ){

 $statusfbio=$x;
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}
 $x11g=$statusfbio;
 ?>
		
		
		
		
		
		</td> 



			


 
			<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;border-bottom:1px solid #000;">
		
		
			 			<?php 
$qry = mysql_query("select  sum(total) as total
from countat where   department='$department'  and months='Nov'  AND levels='$levels' "); 
$row = mysql_fetch_assoc($qry); 
 $x11gg1=$row['total']; 
 
 
  echo $x11gg=($x11gg1+$x11gg2+$x11gg3+$x11gg4+$x11gg5);
 ?>

		
		
		
		
		
		</td> 
		<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;border-bottom:1px solid #000;">
		
		
			 			<?php 
		
		
		echo (($x11gg-$x11g));
		
		
?>
		
		</td> 
		
		
		
			<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;border-bottom:1px solid #000;">
		
		
			 			<?php 
		
		
		printf("%01.2f",(($x11g/$x11gg)*100));
		
		
?>
		
		</td> 
		
			 
			 </tr></table>
			 
			 
			 
			 
			 </td>
			  			 	 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 

			 
		
			 
			 
			 
			 
			 			
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
	
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 






















































<td style="float:left; width:170px;font-weight:normal;BORDER:1PX SOLID #000;height:26px;">
			 
			 <table><tr>
			 
			 
			 
			 
		 
			<td style="float:left; width:32px;text-align:center; border-right:1px solid #000;height:25px;;">
		
		
		 	 
<?php
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='Dec'  AND levels='$levels' AND levels='$levels'  "); 
$row = mysql_fetch_assoc($qry); 
 $x11gs=$row['total']; 
 
 
 $x=($x11gs+3);
  $mxc11=$x11gs;
if(empty($mxc11)){ $statusfbio="0";

 echo '<div style="color:'.colorf1bio.';">'.$statusfbio.'</div>';
 }
elseif($mxc11>'' ){

 $statusfbio=$x;
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}
 $x11g=$statusfbio;
 ?>
		
		
		
		
		
		</td> 



			


 
			<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;border-bottom:1px solid #000;">
		
		
			 			<?php 
$qry = mysql_query("select  sum(total) as total
from countat where   department='$department'  and months='Dec'  AND levels='$levels' "); 
$row = mysql_fetch_assoc($qry); 
 $x11gg1=$row['total']; 
 
 
  echo $x11gg=($x11gg1+$x11gg2+$x11gg3+$x11gg4+$x11gg5);
 ?>

		
		
		
		
		
		</td> 
		<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;border-bottom:1px solid #000;">
		
		
			 			<?php 
		
		
		echo (($x11gg-$x11g));
		
		
?>
		
		</td> 
		
		
		
			<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;border-bottom:1px solid #000;">
		
		
			 			<?php 
		
		
		printf("%01.2f",(($x11g/$x11gg)*100));
		
		
?>
		
		</td> 
		
			 
			 </tr></table>
			 
			 
			 
			 
			 </td>
			  			 	 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 

			 
		
			 
			 
			 
			 
			 			
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
	
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 			 
			
			
			
			
			
			
			
			
			
			
			
			
			
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 


<td style="float:left; width:170px;font-weight:normal;BORDER:1PX SOLID #000;height:26px;">
			 
			 <table><tr>
			 
			 
			 
			 
		 
			<td style="float:left; width:32px;text-align:center; border-right:1px solid #000;height:25px;;">
		
		
		 	 
<?php
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='Jan'  AND levels='$levels' AND levels='$levels'  "); 
$row = mysql_fetch_assoc($qry); 
 $x11gs=$row['total']; 
 
 
 $x=($x11gs+3);
  $mxc11=$x11gs;
if(empty($mxc11)){ $statusfbio="0";

 echo '<div style="color:'.colorf1bio.';">'.$statusfbio.'</div>';
 }
elseif($mxc11>'' ){

 $statusfbio=$x;
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}
 $x11g=$statusfbio;
 ?>
		
		
		
		
		
		</td> 



			


 
			<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;border-bottom:1px solid #000;">
		
		
			 			<?php 
$qry = mysql_query("select  sum(total) as total
from countat where   department='$department'  and months='Jan'  AND levels='$levels' "); 
$row = mysql_fetch_assoc($qry); 
 $x11gg1=$row['total']; 
 
 
  echo $x11gg=($x11gg1+$x11gg2+$x11gg3+$x11gg4+$x11gg5);
 ?>

		
		
		
		
		
		</td> 
		<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;border-bottom:1px solid #000;">
		
		
			 			<?php 
		
		
		echo (($x11gg-$x11g));
		
		
?>
		
		</td> 
		
		
		
			<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;border-bottom:1px solid #000;">
		
		
			 			<?php 
		
		
		printf("%01.2f",(($x11g/$x11gg)*100));
		
		
?>
		
		</td> 
		
			 
			 </tr></table>
			 
			 
			 
			 
			 </td>
			  			 	 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 

<td style="float:left; width:170px;font-weight:normal;BORDER:1PX SOLID #000;height:26px;">
			 
			 <table><tr>
			 
			 
			 
			 
		 
			<td style="float:left; width:32px;text-align:center; border-right:1px solid #000;height:25px;;">
		
		
		 	 
<?php
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='Feb'  AND levels='$levels' AND levels='$levels'  "); 
$row = mysql_fetch_assoc($qry); 
 $x11gs=$row['total']; 
 
 
 $x=($x11gs+3);
  $mxc11=$x11gs;
if(empty($mxc11)){ $statusfbio="0";

 echo '<div style="color:'.colorf1bio.';">'.$statusfbio.'</div>';
 }
elseif($mxc11>'' ){

 $statusfbio=$x;
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}
 $x11g=$statusfbio;
 ?>
		
		
		
		
		
		</td> 



			


 
			<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;border-bottom:1px solid #000;">
		
		
			 			<?php 
$qry = mysql_query("select  sum(total) as total
from countat where   department='$department'  and months='Feb'  AND levels='$levels' "); 
$row = mysql_fetch_assoc($qry); 
 $x11gg1=$row['total']; 
 
 
  echo $x11gg=($x11gg1+$x11gg2+$x11gg3+$x11gg4+$x11gg5);
 ?>

		
		
		
		
		
		</td> 
		<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;border-bottom:1px solid #000;">
		
		
			 			<?php 
		
		
		echo (($x11gg-$x11g));
		
		
?>
		
		</td> 
		
		
		
			<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;border-bottom:1px solid #000;">
		
		
			 			<?php 
		
		
		printf("%01.2f",(($x11g/$x11gg)*100));
		
		
?>
		
		</td> 
		
			 
			 </tr></table>
			 
			 
			 
			 
			 </td>
			  			 	 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 

			 
		
			 
			 
			 
			 
			 			
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
	
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 			 
			
			
			
			
			
			
			
			
			
			
			
			
			
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			</tr>
			
			</table>
			
			
			
			
			
		



<?php } ?>


</div>