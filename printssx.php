<?PHP
INCLUDE 'dbcs.PHP';



 $rollyu=$_GET["rollsps"];
$form=$_POST["form"];
?>
<html>
<?php
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school=$row[1];
$school2=$row[2];
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from school where roll='6'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school6=$row[1];
$school6b=$row[2];
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from school where roll='7'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school7=$row[1];
$school7b=$row[2];
?>
<?php } ?><?php
$roll=$_GET["1"];
$query="select * from school where roll='8'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school8=$row[1];
$school8b=$row[2];
?>
<?php } ?>


<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx1=$row['from1'];
$rangx2=$row['from2'];
$c1=$row['comments'];
$gpa1=$row['gpa'];

?>
<?php } ?>




<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx3=$row['from1'];
$rangx4=$row['from2'];
$c2=$row['comments'];
$gpa2=$row['gpa'];
?>
<?php } ?>









<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx5=$row['from1'];
$rangx6=$row['from2'];

$c3=$row['comments'];
$gpa3=$row['gpa'];
?>
<?php } ?>







<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx7=$row['from1'];
$rangx8=$row['from2'];

$c4=$row['comments'];
$gpa4=$row['gpa'];
?>
<?php } ?>








<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='5'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx9=$row['from1'];
 $rangx10=$row['from2'];
 
$c5=$row['comments'];
$gpa5=$row['gpa'];
?>
<?php } ?>

<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='6'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx11=$row['from1'];
 $rangx12=$row['from2'];
 
$c6=$row['comments'];
$gpa6=$row['gpa'];
?>
<?php } ?>

<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='7'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx13=$row['from1'];
 $rangx14=$row['from2'];
 
$c7=$row['comments'];
$gpa7=$row['gpa'];
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='8'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx15=$row['from1'];
 $rangx16=$row['from2'];
 
$c8=$row['comments'];
$gpa8=$row['gpa'];
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from gradeb where roll='9'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx17=$row['from1'];
 $rangx18=$row['from2'];
 
$c9=$row['comments'];
$gpa9=$row['gpa'];
?>
<?php } ?>
<head><TITLE>Transcript</TITLE>
 <link rel="stylesheet" href="test.css" 
type="text/css">
<style>

   body {
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 12pt;
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 950px;
        min-height: 29.7cm;
        padding: 2cm;
        margin: 1cm auto;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 1cm;
        border: 5px black solid;
        height: 237mm;
        outline: 2cm #000 solid;
    }
    
    @page {
        size: A4;
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
<body>
		 <div class="page">
<br>








<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		$take= $row['year'];
 
?>
<?php 
$table="courses";
?>
<?php } ?>


<?php

 $query="select * from marks where roll='$rollyu'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $take=$row['db1'];
 $levels=$row['levels'];
 $rollss=$row['fname'];
 $mss=$row['matricule'];
?>
<?php } ?>








<?php

$form=$_POST["form"];
$statusbsub=$_POST["statusbsub"];

$deptt=$_POST["deptt"];
$cxx5=$_POST["cxx5"];
$teacher=$_POST["teacher"];
$t1=$_POST["t1"];
$t2=$_POST["t2"];

$roll=$_POST["roll"];
$form=$_POST["form"];

$form=$_POST["form"];
$query="select * from marks where  matricule='$mss' 
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		 <BR><div style="margin:auto; width:750px; margin-top:-50px; height:1300px;">
		 
<div style="float:left;margin-left:1px; width:750px; height:270px; ">

<div style="float:left;width:300px;text-align:center; height:80px;font-size:15px; ">
     REPUBLIQUE DU CAMEROUN<BR>
Paix-Travail -Patrie	 


</div><div style="float:left;width:150px; height:80px; ">

<img src="logo.png" style='height:110px;width:150px;'>

</div>

<div style="float:left;width:250px; height:80px; text-align:center;">
REPUBLIC OF CAMEROON <br>Peace-Work-Fatherland 


</div>

<div style="float:left;margin-left:1px; width:650px;font-weight:bold;text-align:center;letter-spacing:2px;
 height:30px;margin-top:25px; ">
                    <b style="font-weight:normal;font-size:27px;">B</B>ILINGUAL      
                    <b style="font-weight:normal;font-size:27px;">G</b>RAMMAR    
                    <b style="font-weight:normal;font-size:27px;">S</b>CHOOL  
                    <b style="font-weight:normal;font-size:27px;"></b> (BGS) MOLYKO
</div>
<div style="float:left;font-size:16px;margin-left:1px; width:650px;text-align:center;letter-spacing:2px; height:30px;margin-top:5px; ">
                 
Registration No:  6CCIGSBD111860071


</div>
<div style="float:left;font-size:16px;margin-left:1px; border-bottom:1px double #000;width:690px;height:80px;margin-top:25px; ">
 
<div style="float:left;font-size:14px; width:240px;height:80px; ">
Tel: (237) 233322551<br>
E-Mail: bgsmolyko10@yahoo.fr
Your Ref:___________________

</div>


<div style="float:left;font-size:14px; width:200px;height:80px; ">

</div>
<div style="float:left;font-size:14px; width:240px;height:80px; ">
<br>
P.O.BOX 10018 - BUEA<BR>
SOUTH WEST-REGIO-CAMEROON

</div>


</div>










<?php $fname=$row['first_name'];
$class=$row['last_name'];
$sex=$row['sex'];$mxx=$row['matricule'];
$birth=$row['mxc1'];
$db1=$row['form'];
$photo=$row['photo'];
?>




<div style="float:left;margin-top:0px;border:5px 5px 5px  #000; width:650px;font-weight:bold; height:30px; ">

<div style="float:left;width:150px; height:30px; ">

</div>
<div style="float:left;background:#000;color:#fff; width:300px; height:30px; ">

<div style="float:left;MARGIN-TOP:4PX;TEXT-ALIGN:CENTER;LETTER-SPACING:2PX; width:300px; height:30px; ">
SCHOOL TRANSCRIPT
</div>
</div>

</div>



<div style="float:left;margin-top:10px;TEXT-ALIGN:CENTER;MARGIN-LEFT:-20PX; width:650px; height:30px; ">
RELEVER DES NOTES

</div>















<div style="float:left;margin-top:10px;border:5px 5px 5px  #000; width:650px;font-weight:bold; height:30px; ">
<table width="780px" cellspacing="0" cellpadding="2">
<tr><td style="float:left; width:150px;"><b>STUDENT'S NAME</B><td>
<td style="float:left; width:10px;"> :</td>
<td  style="float:left; width:300px;"> <?php echo $fname;?></td>

<td style="float:left; width:140px;"><b>ADMISSION NO:</B></TD>


<td style="float:left; width:80px;"><?php if(empty($mss)){
	
}elseif($mss>"0" && $mss<="9"){
	echo "000$mss";
		 }elseif($mss>"10" && $mss<="99"){
	echo "00$mss";
		 }
		 
		 elseif($mss>"100" && $mss<="999"){
	echo "0$mss";
		 }
		 	 
		 elseif($mss>"1000" && $mss<="9999"){
	echo "$mss";
		 }
	
	;?></TD>




</tr>








<tr><td style="float:left; width:150px;"><b>DATE OF BIRTH</B><td>
<td style="float:left; width:10px;"> :</td>
<td  style="float:left; width:300px;"> <?php echo $sex;?></td>

<td style="float:left; width:180px;"><b>PLACE OF BIRTH:</B></TD>


<td style="float:left; width:120px;"><?php echo $place;?></TD>




</tr>



<tr><td style="float:left; width:150px;"><b>SECTION</B><td>
<td style="float:left; width:10px;">:<?php
$classes=$class;
 $qry = mysql_query("select recs as total
from classes where class='$classes'"); 
$row = mysql_fetch_assoc($qry); 
$year1=$row['total'];
 
 $qry = mysql_query("select SUM(teachersport) as total
from marks where last_name='$classes' and form='$take'"); 
$row = mysql_fetch_assoc($qry); 
$class11=$row['total'];

if(empty($year1)){
	
}elseif($year1>='1'&& $year1<='1'){
	
	$vb= "English";
	
	
}
elseif($year1>='1'&& $year1<='1'){
	
	$vb= "French";
	
	
}
echo $vb;
?>

</td>
<td  style="float:left; width:300px;"> <?php echo $last_name;?></td>

<td style="float:left; width:140px;"><b>SPECIALTY:</B></TD>


<td style="float:left; width:80px;"><?php echo $spec;?></TD>
<?php
$classes=$class;
 $qry = mysql_query("select recs as total
from classes where class='$classes'"); 
$row = mysql_fetch_assoc($qry); 
$year1=$row['total'];
 
 $qry = mysql_query("select SUM(teachersport) as total
from marks where last_name='$classes' and form='$take'"); 
$row = mysql_fetch_assoc($qry); 
$class11=$row['total'];

if(empty($year1)){
	
}elseif($year1>='1'&& $year1<='1'){
	
	$v= "English";
	
	
}
elseif($year1>='1'&& $year1<='1'){
	
	$v= "French";
	
	
}
?>



</tr>

</table>








</div>

<div style="float:left;width:785px;height:33px;MARGIN-TOP:40PX; ">

<div style="float:left;width:182px;height:35px;BACKGROUND:#fff; COLOR:#FFF;margin-top:10px; ">

<div style="float:left;width:180px;height:30px;BACKGROUND:#000; COLOR:#FFF; ">

<div style="float:left;width:170px;height:30px;margin-top:4px; ">
&nbsp;CLASSES
</DIV>
</DIV>
</DIV>
 <?php 


$query = mysql_query("select  * from marks where first_name='$fname' order by first_name ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 <div style="float:left;width:122px;height:33px;BACKGROUND:#fff; COLOR:#FFF;margin-top:10px; ">

<div style="float:left;width:120px;height:30px;BACKGROUND:#000; COLOR:#FFF; ">

<div style="float:left;width:120px;height:30px;margin-top:4px; ">
&nbsp;<?php echo $class=$row["last_name"];?>
</DIV>
</DIV>
</DIV>
		 <?PHP  } ?>


</div>



<div style="float:left;width:900px;height:33px; ">

<div style="float:left;width:182px;height:35px;BACKGROUND:#fff; COLOR:#FFF;margin-top:10px; ">

<div style="float:left;width:180px;height:30px;BACKGROUND:#000; COLOR:#FFF; ">

<div style="float:left;width:170px;height:30px;margin-top:4px; ">
&nbsp;ACADEMIC YEAR
</DIV>
</DIV>
</DIV>

 <?php 


$query = mysql_query("select  * from marks where first_name='$fname' order by first_name ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 <div style="float:left;width:122px;height:33px;BACKGROUND:#fff; COLOR:#FFF;margin-top:10px; ">

<div style="float:left;width:120px;height:30px;BACKGROUND:#000; COLOR:#FFF; ">

<div style="float:left;width:120px;height:30px;margin-top:4px; ">
&nbsp;<?php echo $db1=$row["form"];?>
</DIV>
</DIV>
</DIV>
		 <?PHP  } ?>


</div>


<div style="float:left;width:900px;height:33px; ">

<div style="float:left;width:182px;height:35px;BACKGROUND:#fff; COLOR:#FFF;margin-top:10px; ">

<div style="float:left;width:180px;height:30px;BACKGROUND:#000; COLOR:#FFF; ">

<div style="float:left;width:170px;height:30px;margin-top:4px; ">
&nbsp;TERM
</DIV>
</DIV>
</DIV>


 <?php 


$query = mysql_query("select  * from marks where first_name='$fname' order by form ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 <div style="float:left;width:40px;height:33px;BACKGROUND:#fff; COLOR:#FFF;margin-top:10px; ">

<div style="float:left;width:38px;height:30px;BACKGROUND:#000; COLOR:#FFF; ">

<div style="float:left;width:38px;height:30px;margin-top:4px; ">
&nbsp;1<sup>st</sup>
</DIV>
</DIV>
</DIV>


 <div style="float:left;width:40px;height:33px;BACKGROUND:#fff; COLOR:#FFF;margin-top:10px; ">

<div style="float:left;width:38px;height:30px;BACKGROUND:#000; COLOR:#FFF; ">

<div style="float:left;width:38px;height:30px;margin-top:4px; ">
&nbsp;2<sup>nd</sup>
</DIV>
</DIV>
</DIV>



 <div style="float:left;width:42px;height:33px;BACKGROUND:#fff; COLOR:#FFF;margin-top:10px; ">

<div style="float:left;width:40px;height:30px;BACKGROUND:#000; COLOR:#FFF; ">

<div style="float:left;width:40px;height:30px;margin-top:4px; ">
&nbsp;3<sup>rd</sup>
</DIV>
</DIV>
</DIV>




		 <?PHP  } ?>


</div>


<div style="float:left;width:900px;height:auto;margin-top:11px; ">

		 
<div style="float:left;width:178px;height:auto;">
<?php
 $qry = mysql_query("select recs as total
from classes where class='$classes'"); 
$row = mysql_fetch_assoc($qry); 
$year1=$row['total'];
$query="select  * from subject where subject>''  and year1='$year1'  ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
		 
		 
		 
		 
	
<div style="float:left;width:178px;height:24px;">
<div style="float:left;width:178px;height:23px;border-left:1px solid #000;border-right:1px solid #000;
border-bottom:1px solid #000; font-size:14px; ">	 
&nbsp; <?PHP echo $s1=$row['subject'];
		  $subid=$row['roll'];
		
		 ?>
	


</div>

</div>






<?php } ?>

</div>





<div style="float:left;width:620px;height:auto;margin-left:5px;">

		



		

		
		
		
 <?php 

$query="select  * from marks where first_name='$fname' order by form ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
		 
		 ?>	
		
		<?php     $class=$row['last_name'];  $fname=$row['first_name']; 
		$db1=$row['form'];
		
		?>
		

<div style="float:left;width:121px;height:23px;background:#ccc; ">		
		
		
 <?php 

$query = mysql_query("select  * from subject where subject>'' and year1='$year1'"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 ?>
		 
		 
		 
		 		
 <div style="float:left;width:40px;height:24px;BACKGROUND:#fff; COLOR:#FFF; ">
 
<div style="float:left;width:38px;height:23px;BACKGROUND:#000; COLOR:#FFF; ">

<div style="float:left;width:38px;height:23px;TEXT-ALIGN:CENTER; ">
	<?php $subid=$row['roll']; 
		  $qry = mysql_query("select (c101+c102) as total
From resit where form='$db1' and first_name='$fname'and subject='$subid' and  classes='$class' and c105='1'"); 
$row = mysql_fetch_assoc($qry); 
 $ca=$row['total'];
 
  $qry = mysql_query("select coef as total
From resit where form='$db1' and first_name='$fname'and subject='$subid' and  classes='$class' and c105='1'"); 
$row = mysql_fetch_assoc($qry); 
 $coef=$row['total'];
 
 
 
 
 
 
 
 
$mxc10=$ca;
if(empty($mxc10)){
 $statusflabour="";
 }
elseif($mxc10>''){
 echo round(($ca/2*$coef));
 
 }
?></div></DIV>
</DIV>
		
		
		

		
		
	 
		 		
 <div style="float:left;width:40px;height:24px;BACKGROUND:#fff; COLOR:#FFF; ">
 
<div style="float:left;width:38px;height:23px;BACKGROUND:#000; COLOR:#FFF; ">

<div style="float:left;width:38px;height:23px;TEXT-ALIGN:CENTER; ">
	
		 
<?php 

$qry = mysql_query("select (((c101+c102)/2)*coef) as total
From resit where form='$db1' and first_name='$fname'and subject='$subid' and  classes='$class' and c105='2'   
"); 
$row = mysql_fetch_assoc($qry); 
  $ca=$row['total'];
$mxc10=$ca;
if(empty($mxc10)){
 $statusflabour="";
 }
elseif($mxc10>''){
 echo round(($ca));
 
 }
?>
		 
		 
		 
		 
	</div></DIV>
</DIV>
		
	











 
		 		
 <div style="float:left;width:40px;height:24px;BACKGROUND:#fff; COLOR:#FFF; ">
 
<div style="float:left;width:39px;height:23px;BACKGROUND:#000; COLOR:#FFF; ">

<div style="float:left;width:39px;TEXT-ALIGN:CENTER;height:23px; ">

		 
<?php $qry = mysql_query("select (((c101+c102)/2)*coef) as total
From resit where form='$db1' and first_name='$fname'and subject='$subid' and  classes='$class' and c105='3'   
"); 
$row = mysql_fetch_assoc($qry); 
 $ca=$row['total'];
$mxc10=$ca;
if(empty($mxc10)){
 $statusflabour="";
 }
elseif($mxc10>''){
 echo round(($ca));
 
 }
?>
		 
		 
		 
		 
	</div></DIV>
</DIV>
		
			
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<?php } ?>






</div>




<?php }
}
 ?>
 
 
 
 
 </DIV>
 
 
 
 

<div style="float:left;width:905px;height:100px; ">

<div style="float:left;width:182px;height:100px; ">



<div style="float:left;width:182px;height:30px;BACKGROUND:#fff; COLOR:#FFF;margin-top:1px; ">

<div style="float:left;width:180px;height:30px;BACKGROUND:#000; COLOR:#FFF; ">

<div style="float:left;width:170px;height:30px;margin-top:4px; ">
&nbsp;TERMINAL MARK
</DIV>
</DIV>
</DIV>
<div style="float:left;width:182px;height:30px;BACKGROUND:#fff; COLOR:#FFF;margin-top:1px; ">

<div style="float:left;width:180px;height:30px;BACKGROUND:#000; COLOR:#FFF; ">

<div style="float:left;width:170px;height:30px;margin-top:4px; ">
&nbsp;TERMINAL AVERAGE
</DIV>
</DIV>
</DIV>


<div style="float:left;width:182px;height:30px;BACKGROUND:#fff; COLOR:#FFF;margin-top:1px;">

<div style="float:left;width:180px;height:30px;BACKGROUND:#000; COLOR:#FFF; ">

<div style="float:left;width:170px;height:30px;margin-top:4px; ">
&nbsp;ANNUAL AVERAGE
</DIV>
</DIV>
</DIV>








</div>
 
 
 <div style="float:left;width:620px;height:100px;margin-left:1px;">
 
 <div style="float:left;width:620px;height:33px;">

		
		
 <?php 

$query="select  * from marks where first_name='$fname' order by form ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
		 
		 ?>	
		
		<?php     $class=$row['last_name']; 
		$db1=$row['form'];
		
		?>
		
 <div style="float:left;width:121px;height:31px; ">
 <div style="float:left;width:40px;height:31px;BACKGROUND:#fff; COLOR:#FFF; ">
 
<div style="float:left;width:38px;height:31px;BACKGROUND:#000; COLOR:#FFF; ">

<div style="float:left;width:38px;height:31px;TEXT-ALIGN:CENTER; ">
	<?php $subid=$row['roll']; 
		  $qry = mysql_query("select SUM(((c101+c102)/2)*coef) as total
From resit where form='$db1' and first_name='$fname' and  classes='$class' and c105='1'"); 
$row = mysql_fetch_assoc($qry); 
 $examt=$row['total'];
 
  $qry = mysql_query("select SUM(coef) as total
From resit where form='$db1' and first_name='$fname' and  classes='$class' and c105='1'"); 
$row = mysql_fetch_assoc($qry); 
 $coefs=$row['total'];
 
 
 
 
 
 
 
 
$mxc10=$examt;
if(empty($mxc10)){
 $statusflabour="";
 }
elseif($mxc10>''){


printf("%01.1f",$ui=($examt));

 
 }
?></div></DIV>
</DIV>
		
 <div style="float:left;width:40px;height:31px;BACKGROUND:#fff; COLOR:#FFF; ">
 
<div style="float:left;width:38px;height:31px;BACKGROUND:#000; COLOR:#FFF; ">

<div style="float:left;width:38px;height:31px;TEXT-ALIGN:CENTER; ">
		
	<?php $subid=$row['roll']; 
		  $qry = mysql_query("select SUM(((c101+c102)/2)*coef) as total
From resit where form='$db1' and first_name='$fname' and  classes='$class' and c105='2'"); 
$row = mysql_fetch_assoc($qry); 
 $examtt=$row['total'];
 
  $qry = mysql_query("select SUM(coef) as total
From resit where form='$db1' and first_name='$fname' and  classes='$class' and c105='2'"); 
$row = mysql_fetch_assoc($qry); 
 $coefss=$row['total'];
 
 
 
 
 
 
 
 
$mxc10=$examtt;
if(empty($mxc10)){
 $statusflabour="";
 }
elseif($mxc10>''){


printf("%01.1f",$ui=($examtt));

 
 }
?></div></DIV>
</DIV>
		
		
		
 <div style="float:left;width:40px;height:31px;BACKGROUND:#fff; COLOR:#FFF; ">
 
<div style="float:left;width:38px;height:31px;BACKGROUND:#000; COLOR:#FFF; ">

<div style="float:left;width:38px;height:31px;TEXT-ALIGN:CENTER; ">
	<?php $subid=$row['roll']; 
		  $qry = mysql_query("select SUM(((c101+c102)/2)*coef) as total
From resit where form='$db1' and first_name='$fname' and  classes='$class' and c105='3'"); 
$row = mysql_fetch_assoc($qry); 
 $examttt=$row['total'];
 
  $qry = mysql_query("select SUM(coef) as total
From resit where form='$db1' and first_name='$fname' and  classes='$class' and c105='3'"); 
$row = mysql_fetch_assoc($qry); 
 $coefsss=$row['total'];
 
 
 
 
 
 
 
 
$mxc10=$examttt;
if(empty($mxc10)){
 $statusflabour="";
 }
elseif($mxc10>''){


printf("%01.1f",$ui=($examttt));

 
 }
?></div></DIV>
</DIV>
	</DIV>
			
		
		<?php } ?>
		
</div>
		
	
 <div style="float:left;width:620px;height:33px;">

		
		
 <?php 

$query="select  * from marks where first_name='$fname' order by form ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
		 
		 ?>	
		
		<?php     $class=$row['last_name']; 
		$db1=$row['form'];
		
		?>
		
 <div style="float:left;width:121px;height:31px; ">
		
 <div style="float:left;width:40px;height:29px;BACKGROUND:#fff; COLOR:#FFF; ">
 
<div style="float:left;width:38px;height:29px;BACKGROUND:#000; COLOR:#FFF; ">

<div style="float:left;width:38px;height:29px;TEXT-ALIGN:CENTER; ">
	<?php $subid=$row['roll']; 
		  $qry = mysql_query("select SUM(((c101+c102)/2)*coef) as total
From resit where form='$db1' and first_name='$fname' and  classes='$class' and c105='1'"); 
$row = mysql_fetch_assoc($qry); 
 $examt=$row['total'];
 
  $qry = mysql_query("select SUM(coef) as total
From resit where form='$db1' and first_name='$fname' and  classes='$class' and c105='1'"); 
$row = mysql_fetch_assoc($qry); 
 $coefs=$row['total'];
 
 
 
 
 
 
 
 
$mxc10=$examt;
if(empty($mxc10)){
 $statusflabour="";
 }
elseif($mxc10>''){


printf("%01.2f",$ui1=($examt/$coefs));

 
 }
?></div></DIV>
</DIV>
		
		
		
 <div style="float:left;width:40px;height:29px;BACKGROUND:#fff; COLOR:#FFF; ">
 
<div style="float:left;width:38px;height:29px;BACKGROUND:#000; COLOR:#FFF; ">

<div style="float:left;width:38px;height:29px;TEXT-ALIGN:CENTER; ">
	<?php $subid=$row['roll']; 
		  $qry = mysql_query("select SUM(((c101+c102)/2)*coef) as total
From resit where form='$db1' and first_name='$fname' and  classes='$class' and c105='2'"); 
$row = mysql_fetch_assoc($qry); 
 $examtt=$row['total'];
 
  $qry = mysql_query("select SUM(coef) as total
From resit where form='$db1' and first_name='$fname' and  classes='$class' and c105='2'"); 
$row = mysql_fetch_assoc($qry); 
 $coefss=$row['total'];
 
 
 
 
 
 
 
 
$mxc10=$examtt;
if(empty($mxc10)){
 $statusflabour="";
 }
elseif($mxc10>''){


printf("%01.2f",$ui2=($examtt/$coefss));

 
 }
?></div></DIV>
</DIV>
		
		
		
		
 <div style="float:left;width:40px;height:29px;BACKGROUND:#fff; COLOR:#FFF; ">
 
<div style="float:left;width:38px;height:29px;BACKGROUND:#000; COLOR:#FFF; ">

<div style="float:left;width:38px;height:29px;TEXT-ALIGN:CENTER; ">
	<?php $subid=$row['roll']; 
		  $qry = mysql_query("select SUM(((c101+c102)/2)*coef) as total
From resit where form='$db1' and first_name='$fname' and  classes='$class' and c105='3'"); 
$row = mysql_fetch_assoc($qry); 
 $examttt=$row['total'];
 
  $qry = mysql_query("select SUM(coef) as total
From resit where form='$db1' and first_name='$fname' and  classes='$class' and c105='3'"); 
$row = mysql_fetch_assoc($qry); 
 $coefsss=$row['total'];
 
 
 
 
 
 
 
 
$mxc10=$examttt;
if(empty($mxc10)){
 $statusflabour="";
 }
elseif($mxc10>''){


printf("%01.2f",$ui3=($examttt/$coefsss));

 
 }
?></div></DIV>
</DIV>
	</DIV>
			
		
		<?php } ?>
		
	</div>
		
	
 <div style="float:left;width:620px;height:33px;">

		
		
 <?php 

$query="select  * from marks where first_name='$fname' order by form ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
		 
		 ?>	
		
		<?php     $class=$row['last_name']; 
		$db1=$row['form'];
		
		?>
		
 <div style="float:left;width:121px;height:33px;margin-top:-3px; ">
		
 <div style="float:left;width:119px;height:30px;BACKGROUND:#fff; COLOR:#FFF; ">
 
<div style="float:left;width:119px;height:30px;BACKGROUND:#000; COLOR:#FFF; ">

<div style="float:left;width:119px;height:30px;TEXT-ALIGN:CENTER; ">
	<?php
   $qry = mysql_query("select SUM(((c101+c102)/2)*coef) as total
From resit where form='$db1' and first_name='$fname' and  classes='$class' and c105='1'"); 
$row = mysql_fetch_assoc($qry); 
 $examt=$row['total'];
 
  $qry = mysql_query("select SUM(coef) as total
From resit where form='$db1' and first_name='$fname' and  classes='$class' and c105='1'"); 
$row = mysql_fetch_assoc($qry); 
 $coefs=$row['total'];
 
 
 
 
 
 
 
 
$mxc10=$examt;
if(empty($mxc10)){
 $statusflabour="";
 }
elseif($mxc10>''){


$ui11=($examt/$coefs);


}






   $qry = mysql_query("select SUM(((c101+c102)/2)*coef) as total
From resit where form='$db1' and first_name='$fname' and  classes='$class' and c105='2'"); 
$row = mysql_fetch_assoc($qry); 
 $examtr=$row['total'];
 
  $qry = mysql_query("select SUM(coef) as total
From resit where form='$db1' and first_name='$fname' and  classes='$class' and c105='2'"); 
$row = mysql_fetch_assoc($qry); 
 $coefsr=$row['total'];
 
 
 
 
 
 
 
 
$mxc10=$examtr;
if(empty($mxc10)){
 $statusflabour="";
 }
elseif($mxc10>''){


$ui22=($examtr/$coefsr);


}





   $qry = mysql_query("select SUM(((c101+c102)/2)*coef) as total
From resit where form='$db1' and first_name='$fname' and  classes='$class' and c105='3'"); 
$row = mysql_fetch_assoc($qry); 
 $examtrr=$row['total'];
 
  $qry = mysql_query("select SUM(coef) as total
From resit where form='$db1' and first_name='$fname' and  classes='$class' and c105='3'"); 
$row = mysql_fetch_assoc($qry); 
 $coefsrr=$row['total'];
 
 
 

   $qry = mysql_query("select SUM(((c101+c102)/2)*coef) as total
From resit where form='$db1' and first_name='$fname' and  classes='$class' and c105>='1' and  c105<='3'"); 
$row = mysql_fetch_assoc($qry); 
 $examtry=$row['total'];
 
 
 
 

$qry = mysql_query("select * From resit where form='$db1' and first_name='$fname' and  classes='$class' and c105>='1' and  c105<='3' group by c105  ASC"); 
$num_rows=mysql_num_rows($qry);
  $x=$num_rows; 
 
 
 





   $qry = mysql_query("select (SUM(((c101+c102)/2)*coef)/(SUM(coef)))as total
From resit where form='$db1' and first_name='$fname' and  classes='$class' and c105='1'"); 
$row = mysql_fetch_assoc($qry); 
 $s1=$row['total'];

   $qry = mysql_query("select (SUM(((c101+c102)/2)*coef)/(SUM(coef)))as total
From resit where form='$db1' and first_name='$fname' and  classes='$class' and c105='2'"); 
$row = mysql_fetch_assoc($qry); 
 $s2=$row['total'];
 
 
   $qry = mysql_query("select (SUM(((c101+c102)/2)*coef)/(SUM(coef)))as total
From resit where form='$db1' and first_name='$fname' and  classes='$class' and c105='3'"); 
$row = mysql_fetch_assoc($qry); 
 $s3=$row['total'];
 
 
 
 
$mxc1y=$examtry;
if(empty($mxc1y)){
 
 echo "0.0";
 }elseif($mxc1y>''){
 
$mxc10=$examtrr;
if(empty($mxc10)){
 $statusflabour="";
 }
elseif($mxc10>''){


$ui33=($examtrr/$coefsrr);


}













 
 
 
 
$mxc1x=$ui1;
if(empty($mxc1x)){
$m1="0";
 }
elseif($mxc1x>''){

$m1="1";

 
 }
 
 
 $mxc2x=$ui2;
if(empty($mxc2x)){
$m2="0";
 }
elseif($mxc2x>''){

$m2="1";

 
 }
 
 
 
 
 
 
 
 
 
 
 
 
 $mxc3x=$ui3;
if(empty($mxc3x)){
$m3="0";
 }
elseif($mxc3x>''){

$m3="1";

 
 }
 
 



 }
 
 
printf("%01.2f",$rt=(( $s1+ $s2+ $s3)/$x));

 

 
 
 
?></div></DIV>
</DIV>
		
		
		

	</DIV>
			
		
		<?php } ?>
		
	
		
			
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
</div>
 


		
		
		
		
	
</div>
 	

<div style="float:left;margin-left:1px; width:750px; height:30px;margin-top:10px; ">		
		
		
		
		
		
VICE PRINCIPAL'S REMARKS: [   ]EXCELLENT  [   ]VERY GOOD [   ]GOOD   [   ]FAIR  [   ] AVERAGE [   ]POOR
	
</div>		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
 
 
 
 
 
 
 
 
 
 
 
 