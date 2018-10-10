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


echo $levels;?><br /><br /><B>
STUDENT ATTENDANCE TABLE </B>

<br />
</b>
 
<div style="width:2450px;FLOAT:LEFT;COLOR:#000;MARGIN-TOP:50PX;height:800px;margin-left:-220px;">

<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<?php $take=$row[1];


?>
<?php } ?>


	
			 <div style="float:left; width:2400px; margin-left:-200px;height:auto;color:#000;">
 
			 <div style="float:left; width:170px;BORDER:1PX SOLID #000; height:65px;color:#000; font-size:13px;">
			Matricule
			 
		    </div>
			 <div style="float:left; width:280px;BORDER:1PX SOLID #000; height:65px;color:#000; font-size:13px;">
			Student Names
			 
		    </div>
			
			
			
			 <div style="float:left; width:1250px; BORDER:1PX SOLID #000;  height:65px;color:#000;">
			 
			 
			 <div style="float:left; width:250px;  height:20px;color:#000;">
			 
			 <div style="float:left; width:249px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
			 
			<?php echo $months;?>
			
			
		    </div>
			
				 <div style="float:left; width:249px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				Week 1
			
			
			
		    </div>
			
						 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			1
			
		    </div>
			
							 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			2
			
		    </div>
							 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			3
			
		    </div>
			
			
							 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			4
			
		    </div>
			
			
			
			
							 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			5
			
		    </div>
			
							 <div style="float:left; width:34px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			6
			
		    </div>
			
							 <div style="float:left; width:34px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			7
			
		    </div>
			
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			 
			 <div style="float:left; width:250px;  height:20px;color:#000;">
			 
			 <div style="float:left; width:249px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
			 
			<?php echo $months;?>
			
			
		    </div>
			
				 <div style="float:left; width:249px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				Week 2
			
			
			
		    </div>
			
						 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			8
			
		    </div>
			
							 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			9
			
		    </div>
							 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			10
			
		    </div>
			
			
							 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			11
		    </div>
			
			
			
			
							 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			12
			
		    </div>
			
							 <div style="float:left; width:34px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
		13
			
		    </div>
			
							 <div style="float:left; width:34px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			14
			
		    </div>
			
		    </div>
			
			
			
			
			
			 
			 <div style="float:left; width:250px;  height:20px;color:#000;">
			 
			 <div style="float:left; width:249px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
			 
			<?php echo $months;?>
			
			
		    </div>
			
				 <div style="float:left; width:249px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				Week 3
			
			
			
		    </div>
			
						 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			15
			
		    </div>
			
							 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			16
			
		    </div>
							 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			17
			
		    </div>
			
			
							 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			18
			
		    </div>
			
			
			
			
							 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			19
			
		    </div>
			
							 <div style="float:left; width:34px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			20
		    </div>
			
							 <div style="float:left; width:34px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			21
			
		    </div>
			
		    </div>
			
			
			 
			 <div style="float:left; width:250px;  height:20px;color:#000;">
			 
			 <div style="float:left; width:249px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
			 
			<?php echo $months;?>
			
			
		    </div>
			
				 <div style="float:left; width:249px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				Week 4
			
			
			
		    </div>
			
						 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			22
			
		    </div>
			
							 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			23
			
		    </div>
							 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			24
			
		    </div>
			
			
							 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			25
		    </div>
			
			
			
			
							 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			26
			
		    </div>
			
							 <div style="float:left; width:34px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			27
			
		    </div>
			
							 <div style="float:left; width:34px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
		28
			
		    </div>
			
		    </div>
			
			
			 
			 <div style="float:left; width:250px;  height:20px;color:#000;">
			 
			 <div style="float:left; width:249px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
			 
			<?php echo $months;?>
			
			
		    </div>
			
				 <div style="float:left; width:249px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				Week 5
			
			
			
		    </div>
			
						 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			29
			
		    </div>
			
							 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			30
			
		    </div>
							 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			31
			
		    </div>
			
			
							 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			
			
			
		    </div>
			
			
			
			
							 <div style="float:left; width:35px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			P
		
		    </div>
			
							 <div style="float:left; width:34px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				
			T.P
			
			
		    </div>
			
							 <div style="float:left; width:34px; BORDER-right:1PX SOLID #000; BORDER-bottom:1PX SOLID #000; height:20px;color:#000;">
				ABS
			
		    </div>
			
		    </div>
			
			
			
			 <div style="float:left; width:1110px; height:25px;">
			<?php


$department=$_POST["department"];

$sex=$_POST["sex"];

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
			
			
			</div><?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<?php $take=$row[1];


?>
<?php } ?>
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
			
				<?php echo $names=$row['fname'];
?> 
			 </td>
			 
			 
			 
			 
			 
			<td style="float:left; width:249px;font-weight:normal;BORDER:1PX SOLID #000;height:26px;">
			
			<table>
			<tr><td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
			 
			 	 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='1'"); 
$row = mysql_fetch_assoc($qry); 
  $mxcday1=$row['total']; 

 
  if(empty($mxcday1)){
   
 $statusfbioday1="X";
 }

elseif($mxcday1>'' ){
 
 $statusfbioday1=$mxcday1;
 
 
 }
 
 
 
		

echo $statusfbioday1;
	?>
			 </td>
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
		<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
			 
			 		 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='2'"); 
$row = mysql_fetch_assoc($qry); 
  $mxcday2=$row['total']; 

 
  if(empty($mxcday2)){
   
 $statusfbioday2="X";
 }

elseif($mxcday2>'' ){
 
 $statusfbioday2=$mxcday2;
 
 
 }
 
 
 
		

echo $statusfbioday2;
	?>
			 </td>	 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
		<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
		
		
		
		
		
		
		
			 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='3'"); 
$row = mysql_fetch_assoc($qry); 
  $mxcday3=$row['total']; 

 
  if(empty($mxcday3)){
   
 $statusfbioday3="X";
 }

elseif($mxcday3>'' ){
 
 $statusfbioday3=$mxcday3;
 
 
 }
 
 
 
		

echo $statusfbioday3;
	?>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		</td>
			 
			 
			 
			 
			<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
		
		
		
		
		
			 
			 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='4'"); 
$row = mysql_fetch_assoc($qry); 
  $mxcday4=$row['total']; 

 
  if(empty($mxcday4)){
   
 $statusfbioday4="X";
 }

elseif($mxcday4>'' ){
 
 $statusfbioday4=$mxcday4;
 
 
 }
 
 
 
		

echo $statusfbioday4;
	?>
		
		
		
		
		
		
		
		
		
		</td> 
			 
			 
			 
			 
			 
			 
		 
			<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
		
		
		
		
		
			 
			 
			 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='5'"); 
$row = mysql_fetch_assoc($qry); 
  $mxcday5=$row['total']; 

 
  if(empty($mxcday5)){
   
 $statusfbioday5="X";
 }

elseif($mxcday5>'' ){
 
 $statusfbioday5=$mxcday5;
 
 
 }
 
 
 
		

echo $statusfbioday5;
	?>
		
		
		
		
		
		
		
		
		
		</td> 



















 
			<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
		
		
		
		<?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='6'"); 
$row = mysql_fetch_assoc($qry); 
  $mxcday6=$row['total']; 

 
  if(empty($mxcday6)){
   
 $statusfbioday6="X";
 }

elseif($mxcday6>'' ){
 
 $statusfbioday6=$mxcday6;
 
 
 }
 
 
 
		

echo $statusfbioday6;
	?>
		
		
		
		
		
		
		
		
		</td> 


















 
			<td style="float:left; width:32px;text-align:center; height:25px;">
		
		
		
		
			 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='7'"); 
$row = mysql_fetch_assoc($qry); 
  $mxcday7=$row['total']; 

 
  if(empty($mxcday7)){
   
 $statusfbioday7="X";
 }

elseif($mxcday7>'' ){
 
 $statusfbioday7=$mxcday7;
 
 
 }
 
 
 
		

echo $statusfbioday7;
	?>
		
		
		
		
		
		
		
		
		
		</td> 		
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 </tr></table>
			 
			 
			 
			 
			 </td>
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			























			
			 
	
			 
			<td style="float:left; width:249px;font-weight:normal;BORDER:1PX SOLID #000;height:26px;">
			
			<table>
			<tr><td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
			 
			 	 
			 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='8'"); 
$row = mysql_fetch_assoc($qry); 
  $mxcday8=$row['total']; 

 
  if(empty($mxcday8)){
   
 $statusfbioday8="X";
 }

elseif($mxcday8>'' ){
 
 $statusfbioday8=$mxcday8;
 
 
 }
 
 
 
		

echo $statusfbioday8;
	?>
			 </td>
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
		<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
			 
			 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='9'"); 
$row = mysql_fetch_assoc($qry); 
  $mxcday9=$row['total']; 

 
  if(empty($mxcday9)){
   
 $statusfbioday9="X";
 }

elseif($mxcday9>'' ){
 
 $statusfbioday9=$mxcday9;
 
 
 }
 
 
 
		

echo $statusfbioday9;
	?>
			 </td>	 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
		<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
		
		
		
		
		
		 
			 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='10'"); 
$row = mysql_fetch_assoc($qry); 
  $mxcday10=$row['total']; 

 
  if(empty($mxcday10)){
   
 $statusfbioday10="X";
 }

elseif($mxcday10>'' ){
 
 $statusfbioday10=$mxcday10;
 
 
 }
 
 
 
		

echo $statusfbioday10;
	?>
		
		
		
		
		
		
		
		
		
		
		
		
		</td>
			 
			 
			 
			 
			<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
		
		
		
		
		
			 
			 
			 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='11'"); 
$row = mysql_fetch_assoc($qry); 
 $mxcday11=$row['total']; 

 
  if(empty($mxcday11)){
   
 $statusfbioday11="X";
 }

elseif($mxcday11>'' ){
 
 $statusfbioday11=$mxcday11;
 
 
 }
 
 
 
		

echo $statusfbioday11;
	?>
		
		
		
		
		
		
		
		
		</td> 
			 
			 
			 
			 
			 
			 
		 
			<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
		
		
		
		
		
			 	 
			 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='12'"); 
$row = mysql_fetch_assoc($qry); 
$mxcday12=$row['total']; 

 
  if(empty($mxcday12)){
   
 $statusfbioday12="X";
 }

elseif($mxcday12>'' ){
 
 $statusfbioday12=$mxcday12;
 
 
 }
 
 
 
		

echo $statusfbioday12;
	?>
		
		
		
		
		
		
		
		</td> 



















 
			<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
		
		 
			 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='13'"); 
$row = mysql_fetch_assoc($qry); 
$mxcday13=$row['total']; 

 
  if(empty($mxcday13)){
   
 $statusfbioday13="X";
 }

elseif($mxcday13>'' ){
 
 $statusfbioday13=$mxcday13;
 
 
 }
 
 
 
		

echo $statusfbioday13;
	?>
		
		
		
		
		
		
		
		
		</td> 


















 
			<td style="float:left; width:32px;text-align:center; height:25px;">
		
		
		
		
			 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='14'"); 
$row = mysql_fetch_assoc($qry); 
 $mxcday14=$row['total']; 

 
  if(empty($mxcday14)){
   
 $statusfbioday14="X";
 }

elseif($mxcday14>'' ){
 
 $statusfbioday14=$mxcday14;
 
 
 }
 
 
 
		

echo $statusfbioday14;
	?>
		
		
		
		
		
		
		
		
		</td> 		
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 </tr></table>
			 
			 
			 
			 
			 </td>		 
			 
			


































































	 
			<td style="float:left; width:249px;font-weight:normal;BORDER:1PX SOLID #000;height:26px;">
			
			<table>
			<tr><td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
			 
			 	 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='15'"); 
$row = mysql_fetch_assoc($qry); 
 $mxcday15=$row['total']; 

 
  if(empty($mxcday15)){
   
 $statusfbioday15="X";
 }

elseif($mxcday15>'' ){
 
 $statusfbioday15=$mxcday15;
 
 
 }
 
 
 
		

echo $statusfbioday15;
	?>
			 </td>
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
		<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
			 
			 		 
			 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='16'"); 
$row = mysql_fetch_assoc($qry); 
$mxcday16=$row['total']; 

 
  if(empty($mxcday16)){
   
 $statusfbioday16="X";
 }

elseif($mxcday16>'' ){
 
 $statusfbioday16=$mxcday16;
 
 
 }
 
 
 
		

echo $statusfbioday16;
	?>
			 </td>	 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
		<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
		
		
		
		
		
		 
			 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='17'"); 
$row = mysql_fetch_assoc($qry); 
$mxcday17=$row['total']; 

 
  if(empty($mxcday17)){
   
 $statusfbioday17="X";
 }

elseif($mxcday17>'' ){
 
 $statusfbioday17=$mxcday17;
 
 
 }
 
 
 
		

echo $statusfbioday17;
	?>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		</td>
			 
			 
			 
			 
			<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
		
		
		
		 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='18'"); 
$row = mysql_fetch_assoc($qry); 
 $mxcday18=$row['total']; 

 
  if(empty($mxcday18)){
   
 $statusfbioday18="X";
 }

elseif($mxcday18>'' ){
 
 $statusfbioday18=$mxcday18;
 
 
 }
 
 
 
		

echo $statusfbioday18;
	?>
		
		
		
		
		
		
		
		</td> 
			 
			 
			 
			 
			 
			 
		 
			<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
		
		
		
		
		 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='19'"); 
$row = mysql_fetch_assoc($qry); 
 $mxcday19=$row['total']; 

 
  if(empty($mxcday19)){
   
 $statusfbioday19="X";
 }

elseif($mxcday19>'' ){
 
 $statusfbioday19=$mxcday19;
 
 
 }
 
 
 
		

echo $statusfbioday19;
	?>
		
		
		
		
		
		
		</td> 



















 
			<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
		
		
			 
			 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='20'"); 
$row = mysql_fetch_assoc($qry); 
 $mxcday20=$row['total']; 

 
  if(empty($mxcday20)){
   
 $statusfbioday20="X";
 }

elseif($mxcday20>'' ){
 
 $statusfbioday20=$mxcday20;
 
 
 }
 
 
 
		

echo $statusfbioday20;
	?>
		
		
		
		
		
		
		</td> 


















 
			<td style="float:left; width:32px;text-align:center; height:25px;">
		
		
		
			 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='21'"); 
$row = mysql_fetch_assoc($qry); 
  $mxcday21=$row['total']; 

 
  if(empty($mxcday21)){
   
 $statusfbioday21="X";
 }

elseif($mxcday21>'' ){
 
 $statusfbioday21=$mxcday21;
 
 
 }
 
 
 
		

echo $statusfbioday21;
	?>
		
		
		
		
		
		
		
		</td> 		
			 
			
			 
			 </tr></table>
			 
			 
			 
			 
			 </td>
			  
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
































































	 
			<td style="float:left; width:249px;font-weight:normal;BORDER:1PX SOLID #000;height:26px;">
			
			<table>
			<tr><td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
			 
			  <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='22'"); 
$row = mysql_fetch_assoc($qry); 
 $mxcday22=$row['total']; 

 
  if(empty($mxcday22)){
   
 $statusfbioday22="X";
 }

elseif($mxcday22>'' ){
 
 $statusfbioday22=$mxcday22;
 
 
 }
 
 
 
		

echo $statusfbioday22;
	?>
			 </td>
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
		<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
			 
			 		 
			<?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='23'"); 
$row = mysql_fetch_assoc($qry); 
  $mxcday23=$row['total']; 

 
  if(empty($mxcday23)){
   
 $statusfbioday23="X";
 }

elseif($mxcday23>'' ){
 
 $statusfbioday23=$mxcday23;
 
 
 }
 
 
 
		

echo $statusfbioday23;
	?>
			 </td>	 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
		<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
		
		
		
		
			 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='24'"); 
$row = mysql_fetch_assoc($qry); 
 $mxcday24=$row['total']; 

 
  if(empty($mxcday24)){
   
 $statusfbioday24="X";
 }

elseif($mxcday24>'' ){
 
 $statusfbioday24=$mxcday24;
 
 
 }
 
 
 
		

echo $statusfbioday24;
	?>
		
		
		
		
		
		
		
		
		
		
		
		
		</td>
			 
			 
			 
			 
			<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
		
		
		
			 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='25'"); 
$row = mysql_fetch_assoc($qry); 
 $mxcday25=$row['total']; 

 
  if(empty($mxcday25)){
   
 $statusfbioday25="X";
 }

elseif($mxcday25>'' ){
 
 $statusfbioday25=$mxcday25;
 
 
 }
 
 
 
		

echo $statusfbioday25;
	?>
		
		
		
		
		
		
		
		</td> 
			 
			 
			 
			 
			 
			 
		 
			<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
		
		
		 
			 
			 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='26'"); 
$row = mysql_fetch_assoc($qry); 
  $mxcday26=$row['total']; 

 
  if(empty($mxcday26)){
   
 $statusfbioday26="X";
 }

elseif($mxcday26>'' ){
 
 $statusfbioday26=$mxcday26;
 
 
 }
 
 
 
		

echo $statusfbioday26;
	?>
		
		
		
		
		
		</td> 



















 
			<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
		
		
			 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='27'"); 
$row = mysql_fetch_assoc($qry); 
 $mxcday27=$row['total']; 

 
  if(empty($mxcday27)){
   
 $statusfbioday27="X";
 }

elseif($mxcday27>'' ){
 
 $statusfbioday27=$mxcday27;
 
 
 }
 
 
 
		

echo $statusfbioday27;
	?>
		
		
		
		
		
		</td> 


















 
			<td style="float:left; width:32px;text-align:center; height:25px;">
		
		
		
			 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='28'"); 
$row = mysql_fetch_assoc($qry); 
  $mxcday28=$row['total']; 

 
  if(empty($mxcday28)){
   
 $statusfbioday28="X";
 }

elseif($mxcday28>'' ){
 
 $statusfbioday28=$mxcday28;
 
 
 }
 
 
 
		

echo $statusfbioday28;
	?>
		
		
		
		
		
		
		</td> 		
			 
			
			 
			 </tr></table>
			 
			 
			 
			 
			 </td>
			  			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
		

	 
			<td style="float:left; width:249px;font-weight:normal;BORDER:1PX SOLID #000;height:26px;">
			
			<table>
			<tr><td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
			 
			 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='29'"); 
$row = mysql_fetch_assoc($qry); 
  $mxcday29=$row['total']; 

 
  if(empty($mxcday29)){
   
 $statusfbioday29="X";
 }

elseif($mxcday29>'' ){
 
 $statusfbioday29=$mxcday29;
 
 
 }
 
 
 
		

echo $statusfbioday29;
	?>
			 </td>
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
		<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
			 
	 
			 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='30'"); 
$row = mysql_fetch_assoc($qry); 
  $mxcday30=$row['total']; 

 
  if(empty($mxcday30)){
   
 $statusfbioday30="X";
 }

elseif($mxcday30>'' ){
 
 $statusfbioday30=$mxcday30;
 
 
 }
 
 
 
		

echo $statusfbioday30;
	?>
			 </td>	 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
		<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
		
		
		 
			 <?php  
			 
			 
			 
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' and timein='31'  AND levels='$levels'"); 
$row = mysql_fetch_assoc($qry); 
  $mxcday31=$row['total']; 

 
  if(empty($mxcday31)){
   
 $statusfbioday31="X";
 }

elseif($mxcday31>'' ){
 
 $statusfbioday31=$mxcday31;
 
 
 }
 
 
 
		

echo $statusfbioday31;
	?>
		
		
		
		
		
		
		
		</td>
			 
			 
			 
			 
			<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
		
		
		
		
		
		</td> 
			 
			 
			 
			 
			 
			 
		 
			<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
		
		
		 	 
<?php
$qry = mysql_query("select  sum(present) as total
from attendance where   fname='$mats' and department='$department'  and month='$months'  AND levels='$levels' AND levels='$levels' "); 
$row = mysql_fetch_assoc($qry); 
 echo $x11g=$row['total']; 
 ?>
		
		
		
		
		
		</td> 



















 
			<td style="float:left; width:32px;text-align:center; height:25px;border-right:1px solid #000;">
		
		
			 			<?php 
$qry = mysql_query("select  sum(total) as total
from countat where   department='$department'  and months='$months'  AND levels='$levels' and total>'' "); 
$row = mysql_fetch_assoc($qry); 
 echo $x11gg=$row['total']; 
 ?>

		
		
		
		
		
		</td> 


















 
			<td style="float:left; width:32px;text-align:center; height:25px;">
		
		
			<?php  echo $gim=($x11gg-$x11g);
			$m1=date("m");
$qry = mysql_query("select  sum(extra) as total
from permission where   department='$department'    AND levels='$levels'  and matricule='$mats' and months='$m1'"); 
$row = mysql_fetch_assoc($qry); 
$sss=$row['total']; 
			 $mn=($sss*3);
			
			
		$tms=($x11g+$mn);
$trs_duplicate = mysql_query("select count(*) as total from mrshey where  

 fname='$names'
and matricule='$mats'and department='$department' and levels='$levels' and  months='$months' and  present='$tms' and  total='$x11gg' and absences='$gim' 



") or die(mysql_error());
list($total) = mysql_fetch_row($trs_duplicate);

if ($total > 0)
{
$terr[] = "";
//header("Location: finances.php?msg=$err");
//exit();
}


if(empty($terr)) {
			
			
$query3r="insert into mrshey set fname='$names'
, matricule='$mats',department='$department',levels='$levels' , months='$months' , present='$tms', total='$x11gg', absences='$gim' and year='$take'";







mysql_query ($query3r) or die ('could not updated:'.mysql_error());

}
			
			
			
			
			?>
		
		
		
		
		</td> 		
			 
			
			 
			 </tr></table>
			 
			 
			 
			 
			 </td>
			  			 	 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 

			 
		
			 
			 
			 
			 
			 			
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
	
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			</tr>
			
			</tr></table>
			
			
			
			
			
		



<?php } ?>


</div>