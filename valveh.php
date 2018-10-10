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

		 <div class="page" style='margin-left:-20px;'><br><br>

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
</b>

<div style='float:left; width:900px; height:150px;
font-family:Tahoma, sans-serif;text-align:center;line-height:25px;'>

<br>
MINISTRY OF SECONDARY EDUCATION<br>
REGIONAL DELEGATION FOR THE S.W.R<br>

<?php
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php echo $row[1];?>


<?php } ?> 

<br>
For Academic Year : <?php echo $take;?>
<B>
Detail Sheet For <?php  
 $year2=$_POST["year2"];
 echo $year2;?> Term</B>

<br />
</b>
</div>



<table cellspacing="0" cellpadding="2px" width="1450px"><tr>
			 <td style="background:#efefef;width:350px;height:30px;text-align:center;
			 
			 border-top:1px solid #000;border-bottom:1px solid #000;
			 border-left:1px solid #000;border-right:1px solid #000;">
			 &nbsp;&nbsp;&nbsp;
		    </td>
			<?php

$query="select * from classes where roll>='1' and roll<='15' order by class ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {

?>
			 <td style="background:#efefef;width:360px;text-align:center;
			 border-top:1px solid #000;border-bottom:1px solid #000;border-right:1px solid #000;height:30px;">
			 <?php echo $xccc=$row['class'];?>
			 
		    </td><?php  }  ?></tr>

			
			
			
			
			<tr>
			 <td style="width:150px;height:30px;text-align:center;
			 
			border-bottom:1px solid #000;
			 border-left:1px solid #000;border-right:1px solid #000;">
			 Total Enroll
		    </td>
			<?php

$query="select * from classes where roll>='1' and roll<='15' order by class ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {

?>
			 <td style="width:360px;text-align:center;
			border-bottom:1px solid #000;border-right:1px solid #000;height:30px;font-size:19px;">
			 <?php  $xccc=$row['class'];
			 
			 
		 
$qry = mysql_query("select * FROM marks where  last_name='$xccc' and form='$take'  "); 
$num_rows=mysql_num_rows($qry);
 echo $papers=$num_rows; 
			 
			 
			 ?>
			 
		    </td><?php  }  ?></tr>
			
			
			
			
			
			<tr>
			 <td style="width:150px;height:30px;text-align:center;
			 
			border-bottom:1px solid #000;
			 border-left:1px solid #000;border-right:1px solid #000;">
			 N<sup> o</sup> of Boys
		    </td>
			<?php

$query="select * from classes where roll>='1' and roll<='15' order by class ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {

?>
			 <td style="width:360px;text-align:center;
			border-bottom:1px solid #000;border-right:1px solid #000;height:30px;font-size:19px;">
			 <?php  $xccc=$row['class'];
			 
			 
		 
$qry = mysql_query("select * FROM marks where  last_name='$xccc' and form='$take' and sex='M' "); 
$num_rows=mysql_num_rows($qry);
 echo $papers=$num_rows; 
			 
			 
			 ?>
			 
		    </td><?php  }  ?></tr>
					
			
				
			<tr>
			 <td style="width:150px;height:30px;text-align:center;
			 
			border-bottom:1px solid #000;
			 border-left:1px solid #000;border-right:1px solid #000;">
			 N<sup> o</sup> of Girls
		    </td>
			<?php

$query="select * from classes where roll>='1' and roll<='15' order by class ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {

?>
			 <td style="width:360px;text-align:center;
			border-bottom:1px solid #000;border-right:1px solid #000;height:30px;font-size:19px;">
			 <?php  $xccc=$row['class'];
			 
			 
		 
$qry = mysql_query("select * FROM marks where  last_name='$xccc' and form='$take' and sex='F' "); 
$num_rows=mysql_num_rows($qry);
 echo $papers=$num_rows; 
			 
			 
			 ?>
			 
		    </td><?php  }  ?></tr>
					
			
			<tr>
			 <td style="width:150px;height:30px;text-align:center;
			 
			border-bottom:1px solid #000;
			 border-left:1px solid #000;border-right:1px solid #000;">
			  N<sup> o</sup> Passed
		    </td>
			<?php

$query="select * from classes where roll>='1' and roll<='15' order by class ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {

?>
			 <td style="width:360px;text-align:center;
			border-bottom:1px solid #000;border-right:1px solid #000;height:30px;font-size:19px;">
			 <?php  $xccc=$row['class'];
			 $mxc11s=$year2;
if(empty($mxc11s)){
 $statusfbio="";
 
 
 
 
 
 
 }
elseif($mxc11s>=1 && $mxc11s<=1){
	
 $total="teachersport";
		
		 $position=$row['mxc19'];
 
		}
		
		
	elseif($mxc11s>=2 && $mxc11s<=2){
	
		 $total="teacherreligion";
		 $position=$row['mxc20'];
 
 
		}
		
		
			
		elseif($mxc11s>=3 && $mxc11s<=3){
 
	$total="teachercivic'";
			 	 $position=$row['mxc21'];
				 
				 $t3term=$row['teachercivic'];$t1term=$row['teachersport'];$t2term=$row['teacherreligion'];

			 	}
		 
$qry = mysql_query("select * FROM marks where  last_name='$xccc' and form='$take' and $total>='10' "); 
$num_rows=mysql_num_rows($qry);
 echo $px=$num_rows; 
			 
			 
			 ?>
			 
		    </td><?php  }  ?></tr>
			
			
			
					<tr>
			 <td style="width:150px;height:30px;text-align:center;
			 
			border-bottom:1px solid #000;
			 border-left:1px solid #000;border-right:1px solid #000;">
			  N<sup> o</sup> Failed
		    </td>
			<?php

$query="select * from classes where roll>='1' and roll<='15' order by class ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {

?>
			 <td style="width:360px;text-align:center;
			border-bottom:1px solid #000;border-right:1px solid #000;height:30px;font-size:19px;">
			 <?php  $xccc=$row['class'];
			 $mxc11s=$year2;
if(empty($mxc11s)){
 $statusfbio="";
 
 
 
 
 
 
 }
elseif($mxc11s>=1 && $mxc11s<=1){
	
 $total="teachersport";
		
		 $position=$row['mxc19'];
 
		}
		
		
	elseif($mxc11s>=2 && $mxc11s<=2){
	
		 $total="teacherreligion";
		 $position=$row['mxc20'];
 
 
		}
		
		
			
		elseif($mxc11s>=3 && $mxc11s<=3){
 
	$total="teachercivic'";
			 	 $position=$row['mxc21'];
				 
				 $t3term=$row['teachercivic'];$t1term=$row['teachersport'];$t2term=$row['teacherreligion'];

			 	}
		 
$qry = mysql_query("select * FROM marks where  last_name='$xccc' and form='$take'  and $total>='0.0001' and $total<'10'"); 
$num_rows=mysql_num_rows($qry);
 echo $px=$num_rows; 
			 
			 
			 ?>
			 
		    </td><?php  }  ?></tr>
			<tr>
			 <td style="width:150px;height:30px;text-align:center;
			 
			border-bottom:1px solid #000;
			 border-left:1px solid #000;border-right:1px solid #000;">
			  N<sup> o</sup> Absent
		    </td>
			<?php

$query="select * from classes where roll>='1' and roll<='15' order by class ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {

?>
			 <td style="width:360px;text-align:center;
			border-bottom:1px solid #000;border-right:1px solid #000;height:30px;font-size:19px;">
			 <?php  $xccc=$row['class'];
			 $mxc11s=$year2;
if(empty($mxc11s)){
 $statusfbio="";
 
 
 
 
 
 
 }
elseif($mxc11s>=1 && $mxc11s<=1){
	
 $total="teachersport";
		
		 $position=$row['mxc19'];
 
		}
		
		
	elseif($mxc11s>=2 && $mxc11s<=2){
	
		 $total="teacherreligion";
		 $position=$row['mxc20'];
 
 
		}
		
		
			
		elseif($mxc11s>=3 && $mxc11s<=3){
 
	$total="teachercivic'";
			 	 $position=$row['mxc21'];
				 
				 $t3term=$row['teachercivic'];$t1term=$row['teachersport'];$t2term=$row['teacherreligion'];

			 	}
		 
$qry = mysql_query("select * FROM marks where  last_name='$xccc' and form='$take' and $total='' "); 
$num_rows=mysql_num_rows($qry);
 echo $pxss=$num_rows; 
			 
			 
			 ?>
			 
		    </td><?php  }  ?></tr>
				
			<tr>
			 <td style="width:150px;height:30px;text-align:center;
			 
			border-bottom:1px solid #000;
			 border-left:1px solid #000;border-right:1px solid #000;">
			  % Passed
		    </td>
			<?php

$query="select * from classes where roll>='1' and roll<='15' order by class ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {

?>
			 <td style="width:360px;text-align:center;
			border-bottom:1px solid #000;border-right:1px solid #000;height:30px;font-size:19px;">
			 <?php  $xccc=$row['class'];
			 $mxc11s=$year2;
if(empty($mxc11s)){
 $statusfbio="";
 
 
 
 
 
 
 }
elseif($mxc11s>=1 && $mxc11s<=1){
	
 $total="teachersport";
		
		 $position=$row['mxc19'];
 
		}
		
		
	elseif($mxc11s>=2 && $mxc11s<=2){
	
		 $total="teacherreligion";
		 $position=$row['mxc20'];
 
 
		}
		
		
			
		elseif($mxc11s>=3 && $mxc11s<=3){
 
	$total="teachercivic'";
			 	 $position=$row['mxc21'];
				 
				 $t3term=$row['teachercivic'];$t1term=$row['teachersport'];$t2term=$row['teacherreligion'];

			 	}
		 
$qry = mysql_query("select * FROM marks where  last_name='$xccc' and form='$take' and $total>='10' "); 
$num_rows=mysql_num_rows($qry);
$ppx=$num_rows; 
			 
$qry = mysql_query("select * FROM marks where  last_name='$xccc' and form='$take'  "); 
$num_rows=mysql_num_rows($qry);
$ppy=$num_rows; 
		
$qry = mysql_query("select * FROM marks where  last_name='$xccc' and form='$take' and $total='' "); 
$num_rows=mysql_num_rows($qry);
  $pxss=$num_rows; 	 
	 $pp=($ppy-$pxss);
	 $mxc11ss=$pp;
if(empty($mxc11ss)){
 echo $statusfbio="0.00";
 
 
 
 
 
 
 }
elseif($mxc11ss>''){
	
 echo $sstannual=round((($ppx/$pp)*100),2);		 
			 
	
 }		 
			 ?>
			 
		    </td><?php  }  ?></tr>
			
				</table>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			

<br>
<table cellspacing="0" cellpadding="2px" width="1450px"><tr>
			 <td style="background:#efefef;width:350px;height:30px;text-align:center;
			 
			 border-top:1px solid #000;border-bottom:1px solid #000;
			 border-left:1px solid #000;border-right:1px solid #000;">
			 &nbsp;&nbsp;&nbsp;
		    </td>
			<?php

$query="select * from classes where roll>='16' and roll<='30' order by class ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {

?>
			 <td style="background:#efefef;width:360px;text-align:center;
			 border-top:1px solid #000;border-bottom:1px solid #000;border-right:1px solid #000;height:30px;">
			 <?php echo $xcccd=$row['class'];?>
			 
		    </td><?php  }  ?></tr>

			
			
			
			
			<tr>
			 <td style="width:150px;height:30px;text-align:center;
			 
			border-bottom:1px solid #000;
			 border-left:1px solid #000;border-right:1px solid #000;">
			 Total Enroll
		    </td>
			<?php

$query="select * from classes where roll>='16' and roll<='30'  order by class ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {

?>
			 <td style="width:360px;text-align:center;
			border-bottom:1px solid #000;border-right:1px solid #000;height:30px;font-size:19px;">
			 <?php  $xcccd=$row['class'];
			 
			 
		 
$qryss = mysql_query("select * FROM marks where  last_name='$xcccd' and form='$take'  "); 
$num_rows=mysql_num_rows($qryss);
 echo $p=$num_rows; 
			 
			 
			 ?>
			 
		    </td><?php  }  ?></tr>
			
			
			
			
			
			<tr>
			 <td style="width:150px;height:30px;text-align:center;
			 
			border-bottom:1px solid #000;
			 border-left:1px solid #000;border-right:1px solid #000;">
			 N<sup> o</sup> of Boys
		    </td>
			<?php

$query="select * from classes where roll>='16' and roll<='30'  order by class ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {

?>
			 <td style="width:360px;text-align:center;
			border-bottom:1px solid #000;border-right:1px solid #000;height:30px;font-size:19px;">
			 <?php  $xccc=$row['class'];
			 
			 
		 
$qry = mysql_query("select * FROM marks where  last_name='$xcccd' and form='$take' and sex='M' "); 
$num_rows=mysql_num_rows($qry);
 echo $paperfs=$num_rows; 
			 
			 
			 ?>
			 
		    </td><?php  }  ?></tr>
					
			
				
			<tr>
			 <td style="width:150px;height:30px;text-align:center;
			 
			border-bottom:1px solid #000;
			 border-left:1px solid #000;border-right:1px solid #000;">
			 N<sup> o</sup> of Girls
		    </td>
			<?php

$query="select * from classes where roll>='16' and roll<='30'  order by class ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {

?>
			 <td style="width:360px;text-align:center;
			border-bottom:1px solid #000;border-right:1px solid #000;height:30px;font-size:19px;">
			 <?php  $xccc=$row['class'];
			 
			 
		 
$qry = mysql_query("select * FROM marks where  last_name='$xcccd' and form='$take' and sex='F' "); 
$num_rows=mysql_num_rows($qry);
 echo $paperffs=$num_rows; 
			 
			 
			 ?>
			 
		    </td><?php  }  ?></tr>
					
			
			<tr>
			 <td style="width:150px;height:30px;text-align:center;
			 
			border-bottom:1px solid #000;
			 border-left:1px solid #000;border-right:1px solid #000;">
			  N<sup> o</sup> Passed
		    </td>
			<?php

$query="select * from classes where roll>='16' and roll<='30'  order by class ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {

?>
			 <td style="width:360px;text-align:center;
			border-bottom:1px solid #000;border-right:1px solid #000;height:30px;font-size:19px;">
			 <?php  $xccc=$row['class'];
			 $mxc11s=$year2;
if(empty($mxc11s)){
 $statusfbio="";
 
 
 
 
 
 
 }
elseif($mxc11s>=1 && $mxc11s<=1){
	
 $total="teachersport";
		
		 $position=$row['mxc19'];
 
		}
		
		
	elseif($mxc11s>=2 && $mxc11s<=2){
	
		 $total="teacherreligion";
		 $position=$row['mxc20'];
 
 
		}
		
		
			
		elseif($mxc11s>=3 && $mxc11s<=3){
 
	$total="teachercivic'";
			 	 $position=$row['mxc21'];
				 
				 $t3term=$row['teachercivic'];$t1term=$row['teachersport'];$t2term=$row['teacherreligion'];

			 	}
		 
$qry = mysql_query("select * FROM marks where  last_name='$xcccd' and form='$take' and $total>='10' "); 
$num_rows=mysql_num_rows($qry);
 echo $px=$num_rows; 
			 
			 
			 ?>
			 
		    </td><?php  }  ?></tr>
			
			
			
					<tr>
			 <td style="width:150px;height:30px;text-align:center;
			 
			border-bottom:1px solid #000;
			 border-left:1px solid #000;border-right:1px solid #000;">
			  N<sup> o</sup> Failed
		    </td>
			<?php

$query="select * from classes where roll>='16' and roll<='30'  order by class ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {

?>
			 <td style="width:360px;text-align:center;
			border-bottom:1px solid #000;border-right:1px solid #000;height:30px;font-size:19px;">
			 <?php  $xccc=$row['class'];
			 $mxc11s=$year2;
if(empty($mxc11s)){
 $statusfbio="";
 
 
 
 
 
 
 }
elseif($mxc11s>=1 && $mxc11s<=1){
	
 $total="teachersport";
		
		 $position=$row['mxc19'];
 
		}
		
		
	elseif($mxc11s>=2 && $mxc11s<=2){
	
		 $total="teacherreligion";
		 $position=$row['mxc20'];
 
 
		}
		
		
			
		elseif($mxc11s>=3 && $mxc11s<=3){
 
	$total="teachercivic'";
			 	 $position=$row['mxc21'];
				 
				 $t3term=$row['teachercivic'];$t1term=$row['teachersport'];$t2term=$row['teacherreligion'];

			 	}
		 
$qry = mysql_query("select * FROM marks where  last_name='$xcccd' and form='$take' and $total>='0.0001' and $total<'10' "); 
$num_rows=mysql_num_rows($qry);
 echo $pxfg=$num_rows; 
			 
			 
			 ?>
			 
		    </td><?php  }  ?></tr>
			<tr>
			 <td style="width:150px;height:30px;text-align:center;
			 
			border-bottom:1px solid #000;
			 border-left:1px solid #000;border-right:1px solid #000;">
			  N<sup> o</sup> Absent
		    </td>
			<?php

$query="select * from classes where roll>='16' and roll<='30'  order by class ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {

?>
			 <td style="width:360px;text-align:center;
			border-bottom:1px solid #000;border-right:1px solid #000;height:30px;font-size:19px;">
			 <?php  $xccc=$row['class'];
			 $mxc11s=$year2;
if(empty($mxc11s)){
 $statusfbio="";
 
 
 
 
 
 
 }
elseif($mxc11s>=1 && $mxc11s<=1){
	
 $total="teachersport";
		
		 $position=$row['mxc19'];
 
		}
		
		
	elseif($mxc11s>=2 && $mxc11s<=2){
	
		 $total="teacherreligion";
		 $position=$row['mxc20'];
 
 
		}
		
		
			
		elseif($mxc11s>=3 && $mxc11s<=3){
 
	$total="teachercivic'";
			 	 $position=$row['mxc21'];
				 
				 $t3term=$row['teachercivic'];$t1term=$row['teachersport'];$t2term=$row['teacherreligion'];

			 	}
		 
$qry = mysql_query("select * FROM marks where  last_name='$xcccd' and form='$take' and $total='' "); 
$num_rows=mysql_num_rows($qry);
 echo $pxssfg=$num_rows; 
			 
			 
			 ?>
			 
		    </td><?php  }  ?></tr>
				
			<tr>
			 <td style="width:150px;height:30px;text-align:center;
			 
			border-bottom:1px solid #000;
			 border-left:1px solid #000;border-right:1px solid #000;">
			  % Passed
		    </td>
			<?php

$query="select * from classes where roll>='16' and roll<='30'  order by class ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {

?>
			 <td style="width:360px;text-align:center;
			border-bottom:1px solid #000;border-right:1px solid #000;height:30px;font-size:19px;">
			 <?php  $xccc=$row['class'];
			 $mxc11s=$year2;
if(empty($mxc11s)){
 $statusfbio="";
 
 
 
 
 
 
 }
elseif($mxc11s>=1 && $mxc11s<=1){
	
 $total="teachersport";
		
		 $position=$row['mxc19'];
 
		}
		
		
	elseif($mxc11s>=2 && $mxc11s<=2){
	
		 $total="teacherreligion";
		 $position=$row['mxc20'];
 
 
		}
		
		
			
		elseif($mxc11s>=3 && $mxc11s<=3){
 
	$total="teachercivic'";
			 	 $position=$row['mxc21'];
				 
				 $t3term=$row['teachercivic'];$t1term=$row['teachersport'];$t2term=$row['teacherreligion'];

			 	}
		 
$qry = mysql_query("select * FROM marks where  last_name='$xcccd' and form='$take' and $total>='10' "); 
$num_rows=mysql_num_rows($qry);
$ppxgh=$num_rows; 
			 
$qry = mysql_query("select * FROM marks where  last_name='$xcccd' and form='$take'  "); 
$num_rows=mysql_num_rows($qry);
$ppygh=$num_rows; 
		
$qry = mysql_query("select * FROM marks where  last_name='$xcccd' and form='$take' and $total='' "); 
$num_rows=mysql_num_rows($qry);
  $pxssgh=$num_rows; 	 
	 $ppgh=($ppygh-$pxssgh);
	 $mxc11ssgh=$ppgh;
if(empty($mxc11ssgh)){
 echo $statusfbiogh="0.00";
 
 
 
 
 
 
 }
elseif($mxc11ssgh>''){
	
 echo $sstannualgh=round((($ppxgh/$ppgh)*100),2);		 
			 
	
 }		 
			 ?>
			 
		    </td><?php  }  ?></tr>
			
				</table>