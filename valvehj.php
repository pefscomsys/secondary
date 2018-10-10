<html>
<head>
<TITLE>MASTER SHEET</TITLE>
<style>
   body {
        margin: 0;
        padding: 0;
        font: 12pt;
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 1450px;
        min-height: 33.7cm;
        padding: 2cm;
        margin: 1cm auto;
        background: white;
    }
    .subpage {
        padding: 1cm;
        border: 5px black solid;
        height: 237mm;
        outline: 2cm #000 solid;
    }
    
    @page {
        size: A4 landscape;
        margin: 0;
    }
    @media print {
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }





table{line-height:21px;
font-family:Tahoma, sans-serif;
text-transform:uppercase;
font-size:14px; }
tr{border-bottom:1px solid #000;}
</style>
</head>
<body>

		 <div class="page" style='margin-left:-50px;'><br><br>

 <?php
ini_set('max_execution_time', 60000); //300 seconds = 5 minutes
 include 'dbcs.php';
 
$department=$_POST["classes"];

$sex=$_POST["sex"];

$levels=$_POST["levels"];
$table=courses;
$roll=$_GET["1"];?><?php
 $year2=$_POST["year2"];
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?><b style='font-size:23px;'>
<?php $take=$_POST["take"];



?>
<?php } ?>
<?php
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php echo $row[1];?>


<br>
Detail Terminal Result for 
<?php echo $take;?>
<?php } ?><Br><Br>
<br /><B>Subject
Statistic   for <?php  
 $year2=$_POST["year2"];
 echo $year2;?> Term</B>

<br />
<br />
</b >
<u><b style='font-size:16px;'>Key </b></u> 
<br /><?php



$querys = ("select  * from subject   group by subject order by roll ASC"); 


$results=mysql_query($querys);
		 while ($row = mysql_fetch_array($results)) {

		 


			$m1=$row['roll'];
?>

<?php echo $m1=$row['roll'];?>=
<?php echo $m1=$row['subject'];?>,&nbsp; &nbsp; 

<?php } ?>
<br />


<table cellspacing="0" cellpadding="2px" width="1450px"><tr>
			 <td style="background:#efefef;width:40px;height:30px;text-align:center;
			 
			 border-top:1px solid #000;border-bottom:1px solid #000;
			 border-left:1px solid #000;border-right:1px solid #000;">SN
			 
		    </td>
			
			 <td style="background:#efefef;width:360px;text-align:center;
			 border-top:1px solid #000;border-bottom:1px solid #000;border-right:1px solid #000;height:30px;">
			Classes
			 
		    </td>
			
			<?php


 $year2=$_POST["year2"];

		
		
		
		
		
		
		
		
		
		
$sex=$_POST["sex"];

$levels=$_POST["levels"];




$querys = mysql_query("select  * from subject   group by subject order by subject ASC"); 



		 while ($row = mysql_fetch_array($querys)) {
		 
		 











?>
			 <td style="width:30px;background:#efefef;border-bottom:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;padding:3px;">
			 <?php  echo $m1s=$row['roll'];
			 
			 
			$m1=$row['roll'];
			 
$qry = mysql_query("select subject as total From  subject where roll='$m1' "); 
$row = mysql_fetch_assoc($qry); 
 $x11=$row['total']; 
			 
			 
			 
			 
			 
			 ?>
			 </td>
			 
<?php } ?>
			 
			

			
			 
			
		   </tr>
		   
		   
		   
		   <tr>
			 <td style="width:40px;height:30px;text-align:center;
			 
			border-bottom:1px solid #000;
			 border-left:1px solid #000;border-right:1px solid #000;">
			 
		    </td>
			
			 <td style="width:360px;text-align:center;
			 border-bottom:1px solid #000;border-right:1px solid #000;height:30px;">
			
		
		    </td>
			
			<?php



$querys = ("select  * from subject   group by subject order by subject ASC"); 


$results=mysql_query($querys);
		 while ($row = mysql_fetch_array($results)) {

		 


			$m1=$row['roll'];









	



$querys = mysql_query("select  * from resit where subject='$m1' and c105='$year2'   and form='$take'  group by subject order by subject"); 



		 while ($row = mysql_fetch_array($querys)) {
		 
		 











?>
			 <td style="width30px;border-bottom:1px solid #000;text-align:center;border-right:1px solid #000;padding:2px;font-size:19px;">
			<b> <?php echo $x=$row['coef'];
			 
			 
			 
			 
			 
			 ?></b>
			 </td>

<?php } 

}

$mxc11s=$year2;
if(empty($mxc11s)){
 $statusfbio="";
 
 
 
 
 
 
 }
elseif($mxc11s>=1 && $mxc11s<=1){
	 $total="teachersport";
 $total=$row['teachersport'];
		
		$posi="mxc19";
 
		}
		
		
	elseif($mxc11s>=2 && $mxc11s<=2){
	 $total="teacherreligion";
		 $total=$row['teacherreligion'];
		 $posi="mxc20";
  $position="mxc20";
 
		}
		
		
			
		elseif($mxc11s>=3 && $mxc11s<=3){
  $posi="mxc21";
 
 	 $te="<td style='width:50px;border-bottom:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;padding:2px;'>
				An Av</td> </td> 
			 <td style='width:50px;border-bottom:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;padding:2px;'>
			An Pos </td>";
			
			}
			
			
			?>
			
			 	 
			
		   </tr>

		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		  
























<?php 

$query="select * from classes  order by  class ASC
";$rt=1;

$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 $class=($rt%2==0)?'white':'#efefef';$mxc11s=$year2;
if(empty($mxc11s)){
 $statusfbio="";
 
 
 
 
 
 
 }
elseif($mxc11s>=1 && $mxc11s<=1){
	
 $total=$row['teachersport'];
		
		 $position=$row['mxc19'];
 
		}
		
		
	elseif($mxc11s>=2 && $mxc11s<=2){
	
		 $total=$row['teacherreligion'];
		 $position=$row['mxc20'];
 
 
		}
		
		
			
		elseif($mxc11s>=3 && $mxc11s<=3){
 
 
 	 $te="<td style='width:50px;border-bottom:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;padding:2px;'>
				 Pos</td> </td> 
			 <td style='width:50px;border-bottom:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;padding:2px;'>
			Status </td>";
 
 
 $teacherecon=$row['teacherecon'];
 
 
	$total=$row['teachercivic'];
			 	 $position=$row['mxc21'];
				 
				 $t3term=$row['teachercivic'];$t1term=$row['teachersport'];$t2term=$row['teacherreligion'];

if(empty($t1term)){
$t1term="";
 $statusft1term="0";
}
elseif($t1term>=0.001 && $t1term<=20){
 $statusft1term="1";
}

if(empty($t2term)){
$t2term="";
 $statusft2term="0";
}
elseif($t2term>=0.001 && $t2term<=20){
 $statusft2term="1";
}
if(empty($t3term)){
$t3term="";
 $statusft3term="0";
}
elseif($t3term>=0.001 && $t3term<=20){
 $statusft3term="1";
}


$tannuals=$t3term+$t2term+$t1term;
$tdivide=$statusft3term+$statusft2term+$statusft1term;

$sstannual=round(($tannuals/$tdivide),2);
				 
				
			 
			
		
		}
		
		
		
		 ?>



  
		   <tr>
			 <td style="width:40px;height:30px;text-align:center;background:<?php echo $class;?>;
			 
			border-bottom:1px solid #000;
			 border-left:1px solid #000;border-right:1px solid #000;">
			 <?php echo $rt++;  ?> 
		    </td>
			
			 <td style="width:360px;text-align:left;font-size:16px;background:<?php echo $class;?>;
			 border-bottom:1px solid #000;border-right:1px solid #000;height:30px;">
			&nbsp;&nbsp;<?php echo $names=$row["class"];?>
			 
		    </td>
			
			<?php



$querys = ("select  * from subject   group by subject order by subject ASC"); 


$results=mysql_query($querys);
		 while ($row = mysql_fetch_array($results)) {

		 


			$m1=$row['roll'];









	



$querys = mysql_query("select  * from resit where subject='$m1' and c105='$year2'   and form='$take'  group by subject order by subject"); 



		 while ($row = mysql_fetch_array($querys)) {
		 
		 











?>
			 <td style="width30px;border-bottom:1px solid #000;text-align:center;border-right:1px solid #000;background:<?php echo $class;?>;padding:2px;font-size:16px;">
			<b> <?php  $x=$row['coef'];
			 
		 
$qry = mysql_query("select * From  resit where subject='$m1' and classes='$names' and c105='$year2' and form='$take' and (((c102+c101)/2) )>=10  "); 
$num_rows=mysql_num_rows($qry);
  $papers=$num_rows; 

			 
			 
$qry = mysql_query("select * From  resit where subject='$m1' and classes='$names' and c105='$year2' and form='$take' and (((c102+c101)/2) )>=0.0001  "); 
$num_rows=mysql_num_rows($qry);
  $pc=$num_rows; 
			 
			 
$mxc11r=$pc;
if(empty($mxc11r)){
 
 
 }
elseif($mxc11r>''){
		 $sstannual=round((($papers/$pc)*100),1);
		 
		 
$mxc11=$sstannual;
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="";}
elseif($mxc11<50){
		
		
 $colorf1bio="RED";	 
		}	 
	elseif($mxc11>=50){
		
		
 $colorf1bio="BLUE";	 
		}	 
		 
		 
		 echo " <b style='color: $colorf1bio;'>
			  $sstannual
			 </b>
			 ";
		 
		 
			} 
			 ?>
			 
			 
			 </b>
			 </td>

<?php } 

} ?>
			 
			 	 

		   </tr>

		   
		   
		  <?php } ?> 
		   		  
		






























		   <tr>
			 <td style="width:40px;height:30px;text-align:center;background:<?php echo $class;?>;
			 
			border-bottom:1px solid #000;
			 border-left:1px solid #000;border-right:1px solid #000;">
			
		    </td>
			
			 <td style="width:360px;text-align:left;background:<?php echo $class;?>;
			 border-bottom:1px solid #000;border-right:1px solid #000;height:30px;">
			
			 
		    </td>
			
			<?php



$querys = ("select  * from subject   group by subject order by subject ASC"); 


$results=mysql_query($querys);
		 while ($row = mysql_fetch_array($results)) {

		 


			$m1=$row['roll'];









	



$querys = mysql_query("select  * from resit where subject='$m1' and c105='$year2'   and form='$take'  group by subject order by subject"); 



		 while ($row = mysql_fetch_array($querys)) {
		 
		 











?>
			 <td style="width30px;border-bottom:1px solid #000;text-align:center;background:<?php echo $class;?>;border-right:1px solid #000;padding:2px;font-size:16px;">
			<b> <?php  $x=$row['coef'];
			 
		 
$qry = mysql_query("select * From  resit where subject='$m1'  and c105='$year2' and form='$take' and (((c102+c101)/2) )>=10  "); 
$num_rows=mysql_num_rows($qry);
  $papers=$num_rows; 

			 
			 
$qry = mysql_query("select * From  resit where subject='$m1'  and c105='$year2' and form='$take' and (((c102+c101)/2) )>=0.0001  "); 
$num_rows=mysql_num_rows($qry);
  $pc=$num_rows; 
			 
			 
$mxc11r=$pc;
if(empty($mxc11r)){
 
 
 }
elseif($mxc11r>''){
		 $sstannual=round((($papers/$pc)*100),1);
		 
		 
$mxc11=$sstannual;
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="";}
elseif($mxc11<50){
		
		
 $colorf1bio="RED";	 
		}	 
	elseif($mxc11>=50){
		
		
 $colorf1bio="BLUE";	 
		}	 
		 
		 
		 echo " <b style='color: $colorf1bio;'>
			  $sstannual
			 </b>
			 ";
		 
		 
			} 
			 ?>
			 
			 
			 </b>
			 </td>

<?php } 

} ?>
			 
			 	 

		   </tr>

		   		
		   
		   
		   
		   

</table>