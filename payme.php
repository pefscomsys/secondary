<?php include 'dbc.php';
require'functiony.php';
page_protect();
$mmm=$_GET['roll'];

 $notes=$_SESSION['user_name'];






?> <?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<?php $take=$row[1];
?>
<?php }?>
 
<br><br>
<html
>
<head>


<style>
   body {size:A4 portrait;
        margin: 0;
        padding: 0;
        font: 25pt;
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 900px;
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
        size: A4 portrait;
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

</style>

</head>
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
$search=$_POST["search"];
$flag=0;
$query="select * from salaryy where matricule>'' and month>='$months' && month<='$months' ";
$result=mysql_query($query);
$i=0;
 while ($row = mysql_fetch_array($result)) {

?>
<div class="page">


<div style="float:left;margin-left:1px; width:650px;font-size:29px;font-weight:bold;text-align:center;letter-spacing:2px; height:50px; ">
                    <b style="font-weight:normal;font-size:35px;">I</b>NTER     
                    <b style="font-weight:normal;font-size:35px;">C</b>OMPREHENSIVE     
                    <b style="font-weight:normal;font-size:35px;">H</b>IGH     
                    <b style="font-weight:normal;font-size:35px;">S</b>CHOOL
</div>

<div style="float:left;margin-left:1px; width:650px;font-size:21px; height:40px; TEXT-ALIGN:CENTER;">
GREAT SOPPO P.O.BOX 09 BUEA

</div>
<div style="float:left;margin-left:1px; width:650px;font-size:21px; height:120px; ">


<div style="float:left; width:250px;font-size:21px; height:120px; ">


</DIV>


<div style="float:left;margin-left:1px; width:150px;font-size:21px; height:120px; ">
<IMG src="logo.png" width="100px" height="80px">

</DIV>

<div style="float:left;margin-left:1px; width:250px;font-size:21px; height:120px; ">


</DIV>


</div>

<div style="float:left;margin-left:1px; width:650px;font-size:21px;TEXT-ALIGN:CENTER;FONT-WEIGHT:BOLD; height:30px; ">
STAFF PAYMENT VOUCHER

</div>







<div style="float:left;width:650px;font-size:21px;TEXT-ALIGN:CENTER; height:100px; ">
<table cellspacing="0" cellpadding="0"width="650px" style="float:left; margin-top:15px;">
<tr>
<td style="float:left; width:100px;">Matricule</td><td style="float:left; width:10px;">:</td><td><?php echo $mat=$row["matricule"];?></td></tr>

<tr>
<td style="float:left; width:180px;">Name of Teacher</td><td style="float:left; width:10px;">:</td><td style="float:left;text-transform:uppercase;"><?php  $qry = mysql_query("select  fname	 as total
from employer where matricule='$mat'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $s11=$row['total'];
  
  ?></td></tr>
  
  
<tr>
<td style="float:left; width:180px;">Qualification</td><td style="float:left; width:10px;">:</td><td style="float:left;text-transform:uppercase;"><?php  $qry = mysql_query("select  qualification	 as total
from employer where matricule='$mat'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $s11=$row['total'];
  
  ?></td></tr>
  
<tr>
<td style="float:left; width:180px;">Month</td><td style="float:left; width:10px;">:</td><td style="float:left;text-transform:uppercase;"><?php 
 echo  $months;
  
  ?></td></tr>
<tr>
<td style="float:left; width:180px;">Date</td><td style="float:left; width:10px;">:</td><td style="float:left;text-transform:uppercase;"><?php 
 echo  $date=date("j/m/Y");
  
  ?></td></tr>

</table>
</div>

<div style="float:left;width:700px;border:1px solid #000;TEXT-ALIGN:CENTER; height:250px;margin-top:20px; ">




<div style="float:left;border-right:1px solid #000; width:500px; height:250px; ">

<div style="float:left; width:100px; height:25px; ">
Basic Salary
</div>

<div style="float:left; width:398px;border-bottom:1px dashed #000; height:25px; ">
<b>          <?php  $qry = mysql_query("select  basic	 as total
from salaryy where matricule='$mat'  and month>='$months' and month<='$months' "); 
$row = mysql_fetch_assoc($qry); 
 echo  $sal1=$row['total'];
  
  ?>      </b>
</div>





<div style="float:left; width:180px; height:25px; ">
Allowance /Extra Time
</div>

<div style="float:left; width:309px;border-bottom:1px dashed #000; height:25px; ">
<b>      <?php  $qry = mysql_query("select  extra2	 as total
from salaryy where matricule='$mat'  and month>='$months' and month<='$months' "); 
$row = mysql_fetch_assoc($qry); 
 echo  $sal2=$row['total'];
  
  ?>      </b>
</div>



<div style="float:left; width:500px;height:25px;MARGIN-TOP:10PX; ">

<div style="float:left; width:150px;height:25px;margin-left:55px; ">
<b><u>DEDUCTIONS</u></b>
</div>

</div>



<div style="float:left; width:400px;height:200px;margin-left:55px; ">

<div style="float:left; width:50px;height:20px;text-align:left; ">
LBT
</div>

<div style="float:left; width:230px;height:20px;border-bottom:1px dashed #000; ">

</div>


<div style="float:left; width:100px;margin-left:20px;height:20px;border-bottom:1px dashed #000; ">
   <?php  $qry = mysql_query("select  lbr	 as total
from salaryy where matricule='$mat'  and month>='$months' and month<='$months' "); 
$row = mysql_fetch_assoc($qry); 
 echo  $lbt=$row['total'];
  
  ?>  
</div>





<div style="float:left; width:50px;height:20px;text-align:left; ">
CRTV
</div>

<div style="float:left; width:230px;height:20px;border-bottom:1px dashed #000; ">

</div>


<div style="float:left; width:100px;margin-left:20px;height:20px;border-bottom:1px dashed #000; ">

   <?php  $qry = mysql_query("select  crtv	 as total
from salaryy where matricule='$mat'  and month>='$months' and month<='$months' "); 
$row = mysql_fetch_assoc($qry); 
 echo  $crtv=$row['total'];
  ?>
</div>




<div style="float:left; width:50px;height:20px;text-align:left; ">
PIT
</div>

<div style="float:left; width:230px;height:20px;border-bottom:1px dashed #000; ">

</div>


<div style="float:left; width:100px;margin-left:20px;height:20px;border-bottom:1px dashed #000; ">

   <?php  $qry = mysql_query("select  pit	 as total
from salaryy where matricule='$mat'  and month>='$months' and month<='$months' "); 
$row = mysql_fetch_assoc($qry); 
 echo  $pit=$row['total'];
  ?>
</div>





<div style="float:left; width:50px;height:20px; text-align:left;">
LDT
</div>

<div style="float:left; width:230px;height:20px;border-bottom:1px dashed #000; ">

</div>


<div style="float:left; width:100px;margin-left:20px;height:20px;border-bottom:1px dashed #000; ">

   <?php  $qry = mysql_query("select ldt	 as total
from salaryy where matricule='$mat'  and month>='$months' and month<='$months' "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ldt=$row['total'];
  ?>
</div>


<div style="float:left; width:50px;height:20px;text-align:left; ">
ACT
</div>

<div style="float:left; width:230px;height:20px;border-bottom:1px dashed #000; ">

</div>


<div style="float:left; width:100px;margin-left:20px;height:20px;border-bottom:1px dashed #000; ">

   <?php  $qry = mysql_query("select  act	 as total
from salaryy where matricule='$mat'  and month>='$months' and month<='$months' "); 
$row = mysql_fetch_assoc($qry); 
 echo  $act=$row['total'];
  ?>
</div>


<div style="float:left; width:50px;height:20px;text-align:left; ">
PENALTIES
</div>

<div style="float:left; width:230px;height:20px;border-bottom:1px dashed #000; ">

</div>


<div style="float:left; width:100px;margin-left:20px;height:20px;border-bottom:1px dashed #000; ">

 <?php  $qry = mysql_query("select  extra4	 as total
from salaryy where matricule='$mat'  and month>='$months' and month<='$months' "); 
$row = mysql_fetch_assoc($qry); 
 echo  $net=$row['total'];
  ?>
</div>






<div style="float:left; width:50px;height:20px;text-align:left; ">
CNPS
</div>

<div style="float:left; width:230px;height:20px;border-bottom:1px dashed #000; ">

</div>


<div style="float:left; width:100px;margin-left:20px;height:20px;border-bottom:1px dashed #000; ">
 <?php  $qry = mysql_query("select  nsif	 as total
from salaryy where matricule='$mat'  and month>='$months' and month<='$months' "); 
$row = mysql_fetch_assoc($qry); 
 echo  $nsif=$row['total'];
  ?>
</div>




<div style="float:left; width:50px;height:20px;text-align:left; ">
TOTAL
</div>

<div style="float:left; width:230px;height:20px;border-bottom:1px dashed #000; ">

</div>


<div style="float:left; width:100px;margin-left:20px;height:20px;border-bottom:1px dashed #000; ">
 <?php  $qry = mysql_query("select  totald	 as total
from salaryy where matricule='$mat'  and month>='$months' and month<='$months' "); 
$row = mysql_fetch_assoc($qry); 
 echo  $nsif=$row['total'];
  ?>
</div>



</div>


</div>

<div style="float:left; width:100px;FONT-WEIGHT:BOLD;height:200px;margin-left:55px; ">

(FCFA)
</div>







</div>

<div style="float:left;width:700px;border-BOTTOM:1px solid #000;border-LEFT:1px solid #000;border-RIGHT:1px solid #000;TEXT-ALIGN:CENTER; height:100px;margin-top:0px; ">




<div style="float:left;width:180px;border-RIGHT:1px solid #000;TEXT-ALIGN:CENTER; height:100px;margin-top:0px; ">

<div style="float:left;width:180px;border-RIGHT:1px solid #000;TEXT-ALIGN:CENTER; height:20px;margin-top:0px; ">
NET PAYMENT
</DIV>



<b style="float:left; margin-top:10px;margin-left:50px;">

 <?php  $qry = mysql_query("select  net	 as total
from salaryy where matricule='$mat'  and month>='$months' and month<='$months' "); 
$row = mysql_fetch_assoc($qry); 
 echo  $net=$row['total'];
  ?>
</b>
</div>


<div style="float:left;width:320px;border-RIGHT:1px solid #000;TEXT-ALIGN:CENTER; height:100px;margin-top:0px; ">

<div style="float:left;width:320px;border-RIGHT:1px solid #000;TEXT-ALIGN:CENTER; height:20px;margin-top:0px; ">
(WORDS)
</DIV>
AMOUNT IN WORDS:
<?php




 echo convert_number_to_words($net);


?> Francs	







</div>
<div style="float:left;width:180px;TEXT-ALIGN:CENTER; height:100px;margin-top:0px; ">
<div style="float:left;width:180px;TEXT-ALIGN:CENTER; height:20px;margin-top:0px; ">
(FIGURES)
</DIV>

</DIV>


<div style="float:left;width:700px;TEXT-ALIGN:CENTER; height:30px;margin-top:0px; ">


<div style="float:left;width:250px;TEXT-ALIGN:CENTER;BORDER-bottom:1PX SOLID #000; height:1px;margin-top:30px; ">

</div>


<div style="float:left;width:200px;TEXT-ALIGN:CENTER; height:1px;margin-top:30px; ">

</div>

<div style="float:left;width:250px;TEXT-ALIGN:CENTER;BORDER-bottom:1PX SOLID #000; height:1px;margin-top:30px; ">

</div>







</div>










<div style="float:left;width:700px;TEXT-ALIGN:CENTER; height:30px;margin-top:0px; ">


<div style="float:left;width:250px;TEXT-ALIGN:CENTER; height:1px;margin-top:30px; ">
<i>Signature of Receiver</i>
</div>


<div style="float:left;width:200px;TEXT-ALIGN:CENTER; height:1px;margin-top:30px; ">

</div>

<div style="float:left;width:250px;TEXT-ALIGN:CENTER; height:1px;margin-top:30px; ">
<i>Signature of Principal</i>
</div>







</div>






















</div>





</DIV>
<?php } ?>
</DIV>