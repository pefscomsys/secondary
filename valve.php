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
</style><style>
body {size:A4 Landscape;
        margin: 0;
        padding: 0;
        font: 25pt;
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 1450px;
        min-height: 47.7cm;
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
        size: A4 Landscape ;
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



th.rotate {
  /* Something you can count on */
  height: 250px;
  white-space: nowrap;
  padding:1px;
}

th.rotate > div {
	font-weight:normal;
  transform: 
    /* Magic Numbers */
    translate(2px, 51px)
    /* 45 is really 360 - 45 */
    rotate(270deg);font-family:calibri;
  width: 24px;
}
th.rotate > div > span {
  border-bottom: 1px solid #ccc;
margin-left:-80px;
  margin-top:20px;font-family:calibri;
}
</style>
</head>
<body>

		 <div class="page" style='margin-left:-50px;margin-top:-20px;'>

 <?php
ini_set('max_execution_time', 60000); //300 seconds = 5 minutes
 include 'dbcs.php';
 
$department=$_POST["classes"];

 $year2=$_POST["year2"];
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

Class : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 


echo $department;?>

<Br>
<br /><br /><B>
Master Sheet  for <?php  
 $year2=$_POST["year2"];
 echo $year2;?> Term</B>

<br />
</b>
 


<table cellspacing="0" cellpadding="2px" width="1150px"><tr>
			 <td style="background:#efefef;width:40px;height:30px;text-align:center;
			 
			 border-top:1px solid #000;border-bottom:1px solid #000;
			 border-left:1px solid #000;border-right:1px solid #000;">SN
			 
		    </td>
			
			 <td style="background:#efefef;width:250px;text-align:center;
			 border-top:1px solid #000;border-bottom:1px solid #000;border-right:1px solid #000;height:30px;">
			 Student Names
			 
		    </td>
			
			<?php


 $year2=$_POST["year2"];

		
		
		
		
		
		
		
		
		
		
$sex=$_POST["sex"];

$levels=$_POST["levels"];




$querys = mysql_query("select  * from resit where classes='$department' and c105='$year2'   and form='$take'  group by subject order by subject"); 



		 while ($row = mysql_fetch_array($querys)) {
		 
		 











?>
			 
			 <th class="rotate" style="width:20px;background:#efefef;border-bottom:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;"><div style='margin-top:-50px;' ><span >
			 <?php  $m1=$row['subject'];
			 
			 
			 
			 
$qry = mysql_query("select subject as total From  subject where roll='$m1' "); 
$row = mysql_fetch_assoc($qry); 
 echo $x11=$row['total']; 
			 
			 
			 
			 
			 
			 ?>
			</span></div></th>
			 
			 
			

<?php } ?>
			
			 
			
		   </tr>
		   
		   
		   
		   <tr>
			 <td style="width:40px;height:30px;text-align:center;
			 
			border-bottom:1px solid #000;
			 border-left:1px solid #000;border-right:1px solid #000;">
			 
		    </td>
			
			 <td style="width:250px;text-align:center;
			 border-bottom:1px solid #000;border-right:1px solid #000;height:30px;">
			
			 Coefficients
		    </td>
			
			<?php





$querys = mysql_query("select  * from resit where classes='$department' and c105='$year2'   and form='$take'  group by subject order by subject"); 



		 while ($row = mysql_fetch_array($querys)) {
		 
		 











?>
			 <td style="width:20px;border-bottom:1px solid #000;text-align:center;border-right:1px solid #000;padding:2px;font-size:19px;">
			<b> <?php echo $x=$row['coef'];
			 
			 
			 
			 
			 
			 ?></b>
			 </td>

<?php } 

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
  $posi='teacherecon';
 
 	 $te="<td style='width:40px;border-bottom:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;padding:2px;'>
				An Av</td> </td> 
			 <td style='width:40px;border-bottom:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;padding:2px;'>
			An Pos </td>";
			
			}?>
			
			 <td style="width:50px;border-bottom:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;padding:2px;">
			Av 1<sup>st</sup>
			
			</td>
			 	 <td style="width:50px;border-bottom:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;padding:2px;">
			Av 2<sup>nd</sup>
			
			</td>	 
			 <td style="width:50px;border-bottom:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;padding:2px;">
			Av 3 <sup>rd</sup></td>
			 
			 <td style="width:50px;border-bottom:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;padding:2px;">
				 Pos</td> </td> 
			 <?php echo $te;?>
		 

		   	 <td style="width:50px;border-bottom:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;padding:2px;">
				 CLASS COUNCIL DESCISON</td>
				 </td> 
		
		   </tr>

		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		  
























<?php 

 $query="select * from marks where last_name='$department'  and form='$take' order by  $posi ASC
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
 
 
 	 $te="<td style='width:30px;border-bottom:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;padding:2px;'>
				 Pos</td> </td> 
			 <td style='width:30px;border-bottom:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;padding:2px;'>
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

$sstannual=round(($tannuals/3),2);
				 
				 $goall=" <td style='width:30px;height:30px;text-align:center;background:$class;border-bottom:1px solid #000;
			 border-left:1px solid #000;border-right:1px solid #000;'>
			 
			$sstannual
			 
			 
			 </td><td style='width:40px;height:30px;text-align:center;background: $class;border-bottom:1px solid #000;
			 border-left:1px solid #000;border-right:1px solid #000;'>
			 $teacherecon
			  
			 
			 
			 </td>";
			 
			
		
		}
		
		
		
		 ?>



  
		   <tr>
			 <td style="width:40px;height:30px;text-align:center;background:<?php echo $class;?>;
			 
			border-bottom:1px solid #000;
			 border-left:1px solid #000;border-right:1px solid #000;">
			 <?php echo $rt++;  ?> 
		    </td>
			
			 <td style="width:360px;text-align:left;background:<?php echo $class;?>;
			 border-bottom:1px solid #000;border-right:1px solid #000;height:30px;">
			&nbsp;&nbsp;
			
			<?php 
				echo $namess=$row["first_name"];
				$names=mysql_real_escape_string($row["first_name"]);
				?>
			 
		    </td>
			
			<?php





$querys = mysql_query("select  * from resit where classes='$department' and c105='$year2'   and form='$take'  group by subject "); 



		 while ($row = mysql_fetch_array($querys)) {
		 
		 











?>
			 <td style="width:20px;background:<?php echo $class;?>;border-bottom:1px solid #000;text-align:center;border-right:1px solid #000;padding:2px;font-size:17px;">
			 <?php  $x=$row['coef']; $m1=$row['subject'];
	$qry = mysql_query("select ((SUM(c102+c101)/2) ) as total From  resit where subject='$m1' and first_name='$names' and c105='$year2'and form='$take' "); 
$row = mysql_fetch_assoc($qry); 
 $x12=$row['total'];
		 
$qry = mysql_query("select ((SUM(c102+c101)/2) *coef) as total From  resit where subject='$m1' and first_name='$names' and c105='$year2'and form='$take' "); 
$row = mysql_fetch_assoc($qry); 
 $x12s=$row['total'];



$mxc11=$x12;
if(empty($mxc11)){
 $colorf1bio="red";
 $statusfbio="";}
elseif($mxc11<10){
		
		
 $colorf1bio="RED";	 
		}	 
	elseif($mxc11>=10){
		
		
 $colorf1bio="#000";	 
		}	 
					 
			 
			 ?>
			 <b STYLE='color:<?php echo $colorf1bio;?>;'>
			 <?PHP
			 if(empty($x12s)){
				 
				 
			 }elseif($x12s>''){
			 printf("%01.0f",($x12s));


			 }
		
			 
			 
			 
			 
			 ?><b>
			 </td>

<?php } ?><td style="width:50px;background:<?php echo $class;?>;border-bottom:1px solid #000;border-right:1px solid #000;padding:2px;font-size:15px;">


 <?php
 
$mxc11S=$total;
if(empty($mxc11S)){
 
 }
elseif($mxc11S<10){
		
		
 $colorf1bio="RED";	 
		}	 
	elseif($mxc11S>=10){
		
		
 $colorf1bio="#000";	 
		}	 
 
 
 
 ?> <b STYLE='color:<?php echo $colorf1bio;?>;'>  <?php 
			 
			 
			 printf("%01.2f",($t1term));
			 
			 
			 
			 ?>
</b>




</td>
<td style="width:50px;background:<?php echo $class;?>;border-bottom:1px solid #000;border-right:1px solid #000;padding:2px;font-size:15px;">
 <?php
 
$mxc11S=$total;
if(empty($mxc11S)){
 
 }
elseif($mxc11S<10){
		
		
 $colorf1bio="RED";	 
		}	 
	elseif($mxc11S>=10){
		
		
 $colorf1bio="#000";	 
		}	 
 
 
 
 ?> <b STYLE='color:<?php echo $colorf1bio;?>;'> <?php 
			 
			 
			 printf("%01.2f",($t2term));
			 
			 
			 
			 ?>
</b>


</td>
			  <td style="width:50px;background:<?php echo $class;?>;border-bottom:1px solid #000;border-right:1px solid #000;padding:2px;font-size:15px;">
			 <?php
 
$mxc11S=$total;
if(empty($mxc11S)){
 
 }
elseif($mxc11S<10){
		
		
 $colorf1bio="RED";	 
		}	 
	elseif($mxc11S>=10){
		
		
 $colorf1bio="#000";	 
		}	 
 
 
 
 ?> <b STYLE='color:<?php echo $colorf1bio;?>;'> <?php 
			 
			 
			 printf("%01.2f",($total));
			 
			 
			 
			 ?></td>
			 
			 	 
			 <td style="width:50px;background:<?php echo $class;?>;border-bottom:1px solid #000;border-right:1px solid #000;padding:2px;font-size:15px;">
		<b STYLE='color:<?php echo $colorf1bio;?>;'> <?php echo $position;
			 
			 
			 
			 
			 
			 ?> </td>
			 
			  <?php echo  $goall;?>
		   
		   
		    <td style="width:240px;background:<?php echo $class;?>;border-bottom:1px solid #000;border-right:1px solid #000;padding:2px;font-size:15px;">
		   
		   
		   </td> 
		   
		   
		   
		   </tr>

		   
		   
		  <?php } ?> 
		   		  
		   
		   
		   
		   
		   

</table>