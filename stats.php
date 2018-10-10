<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();
require'function.php';

 $notes=$_SESSION['user_name'];

$user_name=$notes;



 $ip=@$_SERVER['REMOTE_ADDR'];
 
 ?>
 <HTML>
 <HEAD>
 <style>
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
        min-height: 29.7cm;
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
		
		
		 @pages {
        size: A4 portrait;
        margin: 0;
    }
    @media print {
        .pages {
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

</style>
</HEAD>
<body><?php
$month=date('m');
$mxc11e=$month;

if(empty($mxc11e)){

 
 $statusfbiose='';
 }
elseif($mxc11e>='1' &&  $mxc11e<='1'){
  $statusfbiose="13"; 
}
elseif($mxc11e>'1' ){
  $statusfbiose=($month); 
}
$months=($statusfbiose-1);
?> 
<?php
$query="select * from statment where month='$months' and tbasic>''
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		 
		 <div class="page">
		 
		  
		 
		 
		  <div style="float:left; width:1200px;MARGIN-TOP:70PX; height:50px;">
		 
		  <div style="float:left; width:200px;FONT-WEIGHT:BOLD; height:50px;font-size:29px;">
		 SUBJECT:
		 </div>
		   <div style="float:left; width:800px;FONT-WEIGHT:BOLD; height:50px;font-size:29px;">
		TAXES DUE PAYMENT TO THE TREASURY <BR>
		FOR THE MONTH OF <?PHP 

$mxc111e=$months;
if(empty($mxc111e)){

 
 $statusfbiose='';
 }
elseif($mxc111e>='1' &&  $mxc111e<='1'){
  $statusfbiosre="JANUARY"; 
}

elseif($mxc111e>='2' &&  $mxc111e<='2'){
  $statusfbiosre="FEBRUARY"; 
}

elseif($mxc111e>='3' &&  $mxc111e<='3'){
  $statusfbiosre="MARCH"; 
}

elseif($mxc111e>='4' &&  $mxc111e<='4'){
  $statusfbiosre="APRIL"; 
}
elseif($mxc111e>='5' &&  $mxc111e<='5'){
  $statusfbiosre="MAY"; 
}
elseif($mxc111e>='6' &&  $mxc111e<='6'){
  $statusfbiosre="JUNE"; 
}elseif($mxc111e>='7' &&  $mxc111e<='7'){
  $statusfbiosre="JULY"; 
}elseif($mxc111e>='8' &&  $mxc111e<='8'){
  $statusfbiosre="AUGUST"; 
}elseif($mxc111e>='9' &&  $mxc111e<='9'){
  $statusfbiosre="SEPTEMBER"; 
}elseif($mxc111e>='10' &&  $mxc111e<='10'){
  $statusfbiosre="OCTOBER"; 
}elseif($mxc111e>='11' &&  $mxc111e<='11'){
  $statusfbiosre="NOVEMBER"; 
}elseif($mxc111e>='12' &&  $mxc111e<='12'){
  $statusfbiosre="DECEMBER"; 
}
echo $statusfbiosre;
?>   <?php echo date("Y");?>
		 </div>
		 </div>

		  <div style="float:left; width:1200px;border:1px solid #000; margin-top:100px; height:244px;">
<div style="float:left; width:1200px;border-bottom:1px solid #000;  height:60px;">

<div style="float:left; width:400px;border-right:1px solid #000;  height:60px;">

		 </div>
		 
		 <div style="float:left; width:130px;border-right:1px solid #000;  height:60px;">
		 
		 <div style="float:left; margin-top:10px;MARGIN-LEFT:40PX; font-size:20px; font-weight:bold;">
<b>PIT </B>
		 </div>
		 </div> 
		 
			 <div style="float:left; width:130px;border-right:1px solid #000;  height:60px;">
		 
		 <div style="float:left; margin-top:10px;MARGIN-LEFT:40PX; font-size:20px; font-weight:bold;">
<b>ACT </B>
		 </div>
		 </div>  
		 <div style="float:left; width:130px;border-right:1px solid #000;  height:60px;">
		 
		 <div style="float:left; margin-top:10px;MARGIN-LEFT:40PX; font-size:20px; font-weight:bold;">
<b>LBR </B>
		 </div>
		 </div> 	 
		 <div style="float:left; width:130px;border-right:1px solid #000;  height:60px;">
		 
		 <div style="float:left; margin-top:10px;MARGIN-LEFT:20PX; font-size:20px; font-weight:bold;">
<b>CRTV </B>
		 </div>
		 </div> 	 
		 	 <div style="float:left; width:130px;border-right:1px solid #000;  height:60px;">
		 
		 <div style="float:left; margin-top:10px;MARGIN-LEFT:40PX; font-size:20px; font-weight:bold;">
<b>LDT</B>
		 </div>
		 </div> 
		 
		 	 <div style="float:left; width:130px;  height:60px;">
		 
		 <div style="float:left; margin-top:10px;MARGIN-LEFT:20PX; font-size:20px; font-weight:bold;">
<b>TOTALS</B>
		 </div>
		 </div> 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 

<div style="float:left; width:400px;border-right:1px solid #000;border-BOTTOM:1px solid #000; font-size:20px;TEXT-ALIGN:LEFT; height:60px;">

<div style="float:left; width:300px;margin-left:20px;">
AMOUNT DEDUCTED FROM<BR> PART TIME/CS
		 </div></div>
		 
		 <div style="float:left; width:130px;border-right:1px solid #000; border-BOTTOM:1px solid #000; height:60px;">
		 
		 <div style="float:left; margin-top:10px;MARGIN-LEFT:40PX; font-size:20px; font-weight:bold;">
<?PHP

$year=date("Y");

 $qry = mysql_query("select  SUM(pit)	 as total
from salaryy where month='$months' and year='$year' and cm='1'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];

 ?>
		 </div>
		 </div> 
		 
			 <div style="float:left; width:130px;border-right:1px solid #000;border-BOTTOM:1px solid #000;  height:60px;">
		 
		 <div style="float:left; margin-top:10px;MARGIN-LEFT:40PX; font-size:20px; font-weight:bold;">
<?PHP
$year=date("Y");
 $qry = mysql_query("select  SUM(act)	 as total
from salaryy where month='$months' and year='$year' and cm='1'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];

 ?>
		 </div>
		 </div>  
		 <div style="float:left; width:130px;border-right:1px solid #000;border-BOTTOM:1px solid #000;  height:60px;">
		 
		 <div style="float:left; margin-top:10px;MARGIN-LEFT:40PX; font-size:20px; font-weight:bold;">
<?PHP
$year=date("Y");
 $qry = mysql_query("select  SUM(lbr)	 as total
from salaryy where month='$months' and year='$year' and cm='1'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];

 ?>
		 </div>
		 </div> 	 
		 <div style="float:left; width:130px;border-right:1px solid #000; border-BOTTOM:1px solid #000; height:60px;">
		 
		 <div style="float:left; margin-top:10px;MARGIN-LEFT:20PX; font-size:20px; font-weight:bold;">
<?PHP
$year=date("Y");
 $qry = mysql_query("select  SUM(crtv)	 as total
from salaryy where month='$months' and year='$year' and cm='1'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];

 ?>
		 </div>
		 </div> 	 
		 	 <div style="float:left; width:130px;border-right:1px solid #000; border-BOTTOM:1px solid #000; height:60px;">
		 
		 <div style="float:left; margin-top:10px;MARGIN-LEFT:40PX; font-size:20px; font-weight:bold;">
<?PHP
$year=date("Y");
 $qry = mysql_query("select  SUM(ldt)	 as total
from salaryy where month='$months' and year='$year' and cm='1'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];

 ?>
		 </div>
		 </div> 
		 
		 	 <div style="float:left; width:150px;border-BOTTOM:1px solid #000;  height:60px;">
		 
		 <div style="float:left; margin-top:10px;MARGIN-LEFT:20PX; font-size:20px; font-weight:bold;">
<b><?php $year=date("Y");
 $qry = mysql_query("select  SUM(ldt+pit+act+lbr+crtv+ldt)	 as total
from salaryy where month='$months' and year='$year' and cm='1'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];

 ?></B>
		 </div>
		 </div> 
		 
		 		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 

		 
		 

<div style="float:left; width:400px;border-right:1px solid #000;border-BOTTOM:1px solid #000; font-size:20px;TEXT-ALIGN:LEFT; height:60px;">

<div style="float:left; width:300px;margin-left:20px;">
AMOUNT DEDUCTED FROM<BR> PERMENENT STAFF
		 </div></div>
		 
		 <div style="float:left; width:130px;border-right:1px solid #000; border-BOTTOM:1px solid #000; height:60px;">
		 
		 <div style="float:left; margin-top:10px;MARGIN-LEFT:40PX; font-size:20px; font-weight:bold;">
<?PHP
$year=date("Y");
 $qry = mysql_query("select  SUM(pit)	 as total
from salaryy where month='$months' and year='$year' and cm='2'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];

 ?>
		 </div>
		 </div> 
		 
			 <div style="float:left; width:130px;border-right:1px solid #000;border-BOTTOM:1px solid #000;  height:60px;">
		 
		 <div style="float:left; margin-top:10px;MARGIN-LEFT:40PX; font-size:20px; font-weight:bold;">
<?PHP
$year=date("Y");
 $qry = mysql_query("select  SUM(act)	 as total
from salaryy where month='$months' and year='$year' and cm='2'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];

 ?>
		 </div>
		 </div>  
		 <div style="float:left; width:130px;border-right:1px solid #000;border-BOTTOM:1px solid #000;  height:60px;">
		 
		 <div style="float:left; margin-top:10px;MARGIN-LEFT:40PX; font-size:20px; font-weight:bold;">
<?PHP
$year=date("Y");
 $qry = mysql_query("select  SUM(lbr)	 as total
from salaryy where month='$months' and year='$year' and cm='2'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];

 ?>
		 </div>
		 </div> 	 
		 <div style="float:left; width:130px;border-right:1px solid #000; border-BOTTOM:1px solid #000; height:60px;">
		 
		 <div style="float:left; margin-top:10px;MARGIN-LEFT:20PX; font-size:20px; font-weight:bold;">
<?PHP
$year=date("Y");
 $qry = mysql_query("select  SUM(crtv)	 as total
from salaryy where month='$months' and year='$year' and cm='2'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];

 ?>
		 </div>
		 </div> 	 
		 	 <div style="float:left; width:130px;border-right:1px solid #000; border-BOTTOM:1px solid #000; height:60px;">
		 
		 <div style="float:left; margin-top:10px;MARGIN-LEFT:40PX; font-size:20px; font-weight:bold;">
<?PHP
$year=date("Y");
 $qry = mysql_query("select  SUM(ldt)	 as total
from salaryy where month='$months' and year='$year' and cm='2'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];

 ?>
		 </div>
		 </div> 
		 
		 	 <div style="float:left; width:150px;border-BOTTOM:1px solid #000;  height:60px;">
		 
		 <div style="float:left; margin-top:10px;MARGIN-LEFT:20PX; font-size:20px; font-weight:bold;">
<b><?php $year=date("Y");
 $qry = mysql_query("select  SUM(ldt+pit+act+lbr+crtv+ldt)	 as total
from salaryy where month='$months' and year='$year' and cm='2'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];

 ?></B>
		 </div>
		 </div> 
		 
		 
		 
		 
		 

<div style="float:left; width:400px;border-right:1px solid #000; font-size:20px;TEXT-ALIGN:LEFT; height:60px;">

<div style="float:left; width:300px;margin-left:20px;">
<B>TOTAL</B>
		 </div></div>
		 
		 <div style="float:left; width:130px;border-right:1px solid #000;  height:60px;">
		 
		 <div style="float:left; margin-top:10px;MARGIN-LEFT:40PX; font-size:20px; font-weight:bold;">
<?PHP
$year=date("Y");
 $qry = mysql_query("select  SUM(pit)	 as total
from salaryy where month='$months' and year='$year'   "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];

 ?>
		 </div>
		 </div> 
		 
			 <div style="float:left; width:130px;border-right:1px solid #000;  height:60px;">
		 
		 <div style="float:left; margin-top:10px;MARGIN-LEFT:40PX; font-size:20px; font-weight:bold;">
<?PHP
$year=date("Y");
 $qry = mysql_query("select  SUM(act)	 as total
from salaryy where month='$months' and year='$year'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];

 ?>
		 </div>
		 </div>  
		 <div style="float:left; width:130px;border-right:1px solid #000;  height:60px;">
		 
		 <div style="float:left; margin-top:10px;MARGIN-LEFT:40PX; font-size:20px; font-weight:bold;">
<?PHP
$year=date("Y");
 $qry = mysql_query("select  SUM(lbr)	 as total
from salaryy where month='$months' and year='$year'   "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];

 ?>
		 </div>
		 </div> 	 
		 <div style="float:left; width:130px;border-right:1px solid #000;  height:60px;">
		 
		 <div style="float:left; margin-top:10px;MARGIN-LEFT:20PX; font-size:20px; font-weight:bold;">
<?PHP
$year=date("Y");
 $qry = mysql_query("select  SUM(crtv)	 as total
from salaryy where month='$months' and year='$year'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];

 ?>
		 </div>
		 </div> 	 
		 	 <div style="float:left; width:130px;border-right:1px solid #000;  height:60px;">
		 
		 <div style="float:left; margin-top:10px;MARGIN-LEFT:40PX; font-size:20px; font-weight:bold;">
<?PHP
$year=date("Y");
 $qry = mysql_query("select  SUM(ldt)	 as total
from salaryy where month='$months' and year='$year' "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];

 ?>
		 </div>
		 </div> 
		 
		 	 <div style="float:left; width:150px; height:60px;">
		 
		 <div style="float:left; margin-top:10px;MARGIN-LEFT:20PX; font-size:20px; font-weight:bold;">
<b><?php $year=date("Y");
 $qry = mysql_query("select  SUM(ldt+pit+act+lbr+crtv+ldt)	 as total
from salaryy where month='$months' and year='$year' "); 
$row = mysql_fetch_assoc($qry); 
 echo  $tol=$row['total'];

 ?></B>
		 </div>
		 </div> 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
</div>
		







	 
		 
		 </div>
		 
		 
		

		  <div style="float:left; width:1200px;font-size:28px;FONT-WEIGHT:BOLD; TEXT-TRANSFORM:UPPERCASE; margin-top:50px; height:34px;">
AMOUNT IN WORDS:
<?php




 echo convert_number_to_words($tol);


?> Francs		
	 
		
		 </div> 
		 
		 
		 
		 
		 
		 
		 
		  <div style="float:left; width:1200px;font-size:28px; TEXT-TRANSFORM:UPPERCASE; margin-top:50px; height:34px;">
		  
		  <div style="float:left; width:200px;HEIGHT:30PX;">
APPROVED BY
	 
		 </div> 	  <div style="float:left; width:800px;HEIGHT:30PX;">

	 
		 </div> 
			  
		  <div style="float:left; width:200px;HEIGHT:30PX;">
PREPARED BY
	 
		 </div> 
		 </div> 
		 
		 
		 
		 
		














	  <div style="float:left; width:1400px;font-size:22px; TEXT-TRANSFORM:UPPERCASE; margin-top:40px; height:34px;">
		  
		  <div style="float:left; width:400px;HEIGHT:30PX;">

	 
		 </div> 	  <div style="float:left; width:200px;HEIGHT:30PX;">

	 
		 </div> 
			  
		  <div style="float:left; width:800px;TEXT-ALIGN:CENTER;HEIGHT:30PX;">

		 </div> 
		 </div> 		
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 </div>
		 <?php } ?>


<BR><BR><BR><BR>
<?php
$month=date('m');
$mxc11e=$month;

if(empty($mxc11e)){

 
 $statusfbiose='';
 }
elseif($mxc11e>='1' &&  $mxc11e<='1'){
  $statusfbiose="13"; 
}
elseif($mxc11e>'1' ){
  $statusfbiose=($month); 
}
$months=($statusfbiose-1);
?> 
<?php
$query="select * from statment where month='$months' and tbasic>''
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		 
		 <div class="page">
		 
		 
		 
		  <div style="float:left; width:1200px;MARGIN-TOP:70PX; height:50px;">
		 
		  <div style="float:left; width:200px;FONT-WEIGHT:BOLD; height:50px;font-size:29px;">
		 SUBJECT:
		 </div>
		   <div style="float:left; width:800px;FONT-WEIGHT:BOLD; height:50px;font-size:29px;">
		PAYMENT TO NSIF 
		FOR THE MONTH OF <?PHP 

$mxc111e=$months;
if(empty($mxc111e)){

 
 $statusfbiose='';
 }
elseif($mxc111e>='1' &&  $mxc111e<='1'){
  $statusfbiosre="JANUARY"; 
}

elseif($mxc111e>='2' &&  $mxc111e<='2'){
  $statusfbiosre="FEBRUARY"; 
}

elseif($mxc111e>='3' &&  $mxc111e<='3'){
  $statusfbiosre="MARCH"; 
}

elseif($mxc111e>='4' &&  $mxc111e<='4'){
  $statusfbiosre="APRIL"; 
}
elseif($mxc111e>='5' &&  $mxc111e<='5'){
  $statusfbiosre="MAY"; 
}
elseif($mxc111e>='6' &&  $mxc111e<='6'){
  $statusfbiosre="JUNE"; 
}elseif($mxc111e>='7' &&  $mxc111e<='7'){
  $statusfbiosre="JULY"; 
}elseif($mxc111e>='8' &&  $mxc111e<='8'){
  $statusfbiosre="AUGUST"; 
}elseif($mxc111e>='9' &&  $mxc111e<='9'){
  $statusfbiosre="SEPTEMBER"; 
}elseif($mxc111e>='10' &&  $mxc111e<='10'){
  $statusfbiosre="OCTOBER"; 
}elseif($mxc111e>='11' &&  $mxc111e<='11'){
  $statusfbiosre="NOVEMBER"; 
}elseif($mxc111e>='12' &&  $mxc111e<='12'){
  $statusfbiosre="DECEMBER"; 
}
echo $statusfbiosre;
?>   <?php echo date("Y");?><BR>
NSIF N<SUP>O</SUP> 03-7430901-R
		 </div>
		 </div>

		  <div style="float:left; width:1200px;FONT-SIZE:28PX;margin-top:60px; height:244px;">
<div style="float:left; width:1200px;  height:30px;">
<div style="float:left; width:950px;  height:50px;">
<B>GROSS SALARY </B>(FOR   <?PHP 
$qry = mysql_query("select * FROM  employeR  "); 
$num_rows=mysql_num_rows($qry);
  echo $richooTTTyss=$num_rows; 

?> EMPLOYEES
)
		 </div> 
<div style="float:left; width:250px;  height:50px;">
= <B><?PHP
$year=date("Y");
 $qry = mysql_query("select  SUM(net)	 as total
from salaryy where month='$months' and year='$year' "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];

 ?></B>
		 </div> 


		 
		 
		 
		 <div style="float:left; width:950px; font-size:23px; height:50px;">
- CONTRIBUTION FOR FAMILY ALOWANCE (for both recruited and seconded staff)
		 </div> 
<div style="float:left; width:250px;  height:50px;">
 =<B><?PHP
$year=date("Y");




 $qry = mysql_query("select  formula	 as total
from formula where mpos='7'  "); 
$row = mysql_fetch_assoc($qry); 
 $fa=$row['total'];
 
 
 $qry = mysql_query("select  SUM(net)	 as total
from salaryy where month='$months' and year='$year' "); 
$row = mysql_fetch_assoc($qry); 
  $ts=$row['total'];
echo $mji=(($ts/100)*$fa);
 ?></B>
		 </div> 

		 
		 <div style="float:left; width:950px; font-size:23px; height:50px;">
- CONTRIBUTION FOR FAMILY ALOWANCE ( recruited  staff only)
		 </div> 
<div style="float:left; width:250px;  height:50px;">
 =<B><?PHP
 
 

 $qry = mysql_query("select  formula	 as total
from formula where mpos='8'  "); 
$row = mysql_fetch_assoc($qry); 
 $pa=$row['total'];
 
$year=date("Y");
 $qry = mysql_query("select  SUM(net)	 as total
from salaryy where month='$months' and year='$year' "); 
$row = mysql_fetch_assoc($qry); 
   $tss=$row['total'];

echo $mjii=(($tss/100)*$pa);
 ?></B>
		 </div> 
		  
		 <div style="float:left; width:950px; font-size:23px; height:50px;">
- CONTRIBUTION FOR INDUSTRIAL ACCIDENTS  (for both recruited   and seconded staff)
		 </div> 
<div style="float:left; width:250px;  height:50px;">
 =<B><?PHP
 
 
 
 $qry = mysql_query("select  formula	 as total
from formula where mpos='10'  "); 
$row = mysql_fetch_assoc($qry); 
 $ia=$row['total'];
$year=date("Y");
 $qry = mysql_query("select  SUM(net)	 as total
from salaryy where month='$months' and year='$year' "); 
$row = mysql_fetch_assoc($qry); 
  $tsss=$row['total'];

echo $mjiii=(($tsss/100)*$ia);
 ?></B>
		 </div> 
		 
		 
		 
		 
		 
		 
		 
		  
		 <div style="float:left; width:950px; font-size:23px; height:50px;">
<b>TOTAL</B>
		 </div> 
<div style="float:left; width:250px;  height:50px;">
 =<B><?PHP
 
 
 
echo $mjx=($mji+$mjii+$mjiii);
 ?></B>
		 </div> 
		 
		 
		 
		 
		 
		 
		 



		 </div> 
		 
		 
		 
		 
		 
		 
		 </div> 	 
		 
		 
		 
		 
		 
		 
		 
		 
		 





	 
		 
		

		  <div style="float:left; width:1200px;font-size:28px;FONT-WEIGHT:BOLD; TEXT-TRANSFORM:UPPERCASE; margin-top:50px; height:34px;">
AMOUNT IN WORDS:
<?php




 echo convert_number_to_words($mjx);


?> Francs		
	 
		
		 </div> 
		 
		 
		 
		 
		 
		 
		 
		  <div style="float:left; width:1200px;font-size:28px; TEXT-TRANSFORM:UPPERCASE; margin-top:50px; height:34px;">
		  
		  <div style="float:left; width:200px;HEIGHT:30PX;">
APPROVED BY
	 
		 </div> 	  <div style="float:left; width:800px;HEIGHT:30PX;">

	 
		 </div> 
			  
		  <div style="float:left; width:200px;HEIGHT:30PX;">
PREPARED BY
	 
		 </div> 
		 </div> 
		 
		 
		 
		 
		














	  <div style="float:left; width:1400px;font-size:22px; TEXT-TRANSFORM:UPPERCASE; margin-top:40px; height:34px;">
		  
		  <div style="float:left; width:400px;HEIGHT:30PX;">

	 
		 </div> 	  <div style="float:left; width:200px;HEIGHT:30PX;">

	 
		 </div> 
			  
		  <div style="float:left; width:800px;TEXT-ALIGN:CENTER;HEIGHT:30PX;">

	 
		 </div> 
		 </div> 		
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 </div>
		 <?php } ?>













<br>

<br>

<br>

<br>
