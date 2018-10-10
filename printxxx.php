<BR><BR><?PHP
INCLUDE 'dbcs.PHP';

$follows=$_POST['follows'];

$bookss=$_POST['bookss'];

$stetsub=$_POST['stetsub'];


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
<head><TITLE>result slip</TITLE>
 <link rel="stylesheet" href="test.css" 
type="text/css">
<style>
#container{
width:670px;
height:650px;
margin:auto;}
.left{float:left;width:230px; height:70px;line-height:22px;background:#1188aa;}

.left2{float:left;width:200px; height:70px;text-align:center;}


.left3{float:left;width:200px; height:70px;}
.top{float:left;width:220px; height:20px;FONT-SIZE:10PX; "}
.bottom{float:left;width:200px; height:40px;FONT-SIZE:16PX;COLOR:#FFF; "}
.main{float:left;width:700px; margin-top:20px;;text-transform:uppercase;text-align:center;FONT-SIZE:18PX; height:70px;line-height:22px;}
.main2{float:left;width:700px;background:#000;  height:70px;line-height:22px;border:1px solid #000;}
</style>
</head>
<body>
<br>
<?php

$levels=$_POST["levels"];

?>
<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject1=$row['subject'];
$subject1n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject1' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit=$row['credit'];

?>
<?php } ?>










<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject2=$row['subject'];
$subject2n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject2' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit2=$row['credit'];

?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject3=$row['subject'];
$subject3n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject3' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit3=$row['credit'];

?>
<?php } ?>



<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $subject4=$row['subject'];
$subject4n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject4' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit4=$row['credit'];

?>
<?php } ?>



<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='5'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject5=$row['subject'];
$subject5n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject5' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit5=$row['credit'];

?>
<?php } ?>



<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='6'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject6=$row['subject'];
$subject6n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject6' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit6=$row['credit'];

?>
<?php } ?>



<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='7'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject7=$row['subject'];
$subject7n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject7' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit7=$row['credit'];

?>
<?php } ?>




<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='8'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject8=$row['subject'];
$subject8n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject8' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit8=$row['credit'];

?>
<?php } ?>

<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='9'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject9=$row['subject'];
$subject9n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject9' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit9=$row['credit'];

?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from subject where department='$deptt' and year1='$levels' AND extra='10'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $subject10=$row['subject'];
$subject10n=$row['db1'];
?>
<?php } ?>


<?php

$deptt=$_POST["deptt"];
$roll=$_GET["1"];
$query="select * from credits where subject='$subject10' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $credit10=$row['credit'];

?>
<?php } ?>








<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $take=$row[1];
$table="courses";
?>
<?php } ?>
<?php
 $rollss=$_GET["roll"];
$form=$_POST["form"];
$statusbsub=$_POST["statusbsub"];

$deptt=$_POST["deptt"];

$teacher=$_POST["teacher"];
$t1=$_POST["t1"];
$t2=$_POST["t2"];

$levels=$_POST["levels"];
$roll=$_POST["roll"];
$form=$_POST["form"];

$form=$_POST["form"];
$query="select * from $table where db1='$take' and fname='$rollss' 
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		 
		 <div style="margin:auto; width:1200px; height:650px; background:url(report.png);">
		 
		 
		 
		 
		 
		 
		 
		 <div style="float:left; width:1200px; height:100px; color:#000; border:1px solid #000;">
		 

		 <div style="float:left; width:599px; border-right:1px solid #000;height:100px; color:#000; ">
		 
		 
		 
<div style="float:left; margin-left:20px;">
		 <div style="float:left;FONT-SIZE:14PX; width:390px; HEIGHT:21PX;">
		  <b>ST. FRANCIS SCHOOL OF HEALTH SCIENCES </b>
		 
		 </div>
		 <div style="float:left;FONT-SIZE:14PX; width:390px; HEIGHT:21PX;">
P.O BOX 77 BUEA SWR CAMEROON
		 
		 </div> 
		 <div style="float:left;FONT-SIZE:14PX; width:390px; HEIGHT:21PX;">

TEL: +237 33 32 25 58 E-MAIL: sfshs@biakahc.org

		 
		 </div> 
		 
		 
	 <div style="float:left;FONT-SIZE:14PX; width:390px; HEIGHT:21PX;">

WEBSITE: www.biakahc.org

		 
		 </div> 
		 
		 </div> 
		 
		 </div> 
		 
		 
		 
		 <div style="float:left; width:590px; height:100px;color:#000; MARGIN-LEFT:750PX;MARGIN-TOP:-100PX;">
		 		 <div style="float:left;FONT-SIZE:14PX; width:390px; HEIGHT:21PX;">
		  <b>STUDENT ACCADEMIC RECORD</b>
		 
		 </div>
		 
		 </div> 
		 
		 
		 
		 <div style="float:left; width:1200px; height:150px; color:#000; MARGIN-TOP:20PX;">
		 
		 
		 <div style="float:left; width:300px; height:150px; color:#000;BORDER:1PX SOLID #000;">
		 
		  <div style="float:left; width:165px;height:25px;">
		  <div style="float:left; width:25px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c8;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:5px;
		  ">
		  <?php echo $rangx15;?> -
		  <?php echo $rangx16;?> %
		  <?php echo $gpa8;?>GP
		  
		 </div> 
		  
		  
		  
		  		  	  <div style="float:left; width:25px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c6;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:5px;
		  ">
		  <?php echo $rangx11;?> -
		  <?php echo $rangx12;?> %
		  <?php echo $gpa6;?>GP
		  
		 </div> 
		  
		  		  		  	  <div style="float:left; width:28px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c5;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:2px;
		  ">
		  <?php echo $rangx9;?> -
		  <?php echo $rangx10;?> %
		  <?php echo $gpa5;?>GP
		  
		 </div> 
		  
		  
		  <div style="float:left; width:165px;height:25px;">
		  
		    	  <div style="float:left; width:28px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c4;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:2px;
		  ">
		  <?php echo $rangx7;?> -
		  <?php echo $rangx8;?> %
		  <?php echo $gpa4;?>GP
		  
		 </div> 
		  
		  
		    	  <div style="float:left; width:28px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c3;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:2px;
		  ">
		  <?php echo $rangx5;?> -
		  <?php echo $rangx6;?> %
		  <?php echo $gpa3;?>GP
		  
		 </div> 
		  
		  
		  
		  
		  
		      	  <div style="float:left; width:28px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c2;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:2px;
		  ">
		  <?php echo $rangx3;?> -
		  <?php echo $rangx4;?> %
		  <?php echo $gpa2;?>GP
		  
		 </div> 
		  
		  
		  
		  
		      	  <div style="float:left; width:28px;font-family:arial;font-size:14px; height:20;margin-left:10px;
		  ">
		  <?php echo $c1;?> : 
		  
		 </div> 
		  
 <div style="float:left; width:125;font-family:arial;font-size:14px; height:20px;margin-left:2px;
		  ">
		  <?php echo $rangx1;?> -
		  <?php echo $rangx2;?> %
		  <?php echo $gpa1;?>GP
		  
		 </div> 
		  
		 </div> 
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		 
		    </div>
		 
		    </div>
		 
		 
		 <div style="float:left; width:1200px; height:70px; color:#000; border:1px solid #000;MARGIN-TOP:10PX;">
		 

		 <div style="float:left; width:599px; border-right:1px solid #000;height:70px; color:#000; ">
		 <DIV STYLE="float:left;margin-left:10px; width:100px; font-weight:bold;height:25px;">NAME :</DIV>

		 <DIV STYLE="float:left;margin-left:10px; width:450px; height:25px;"><?php echo $row['fname'];?></DIV>

 <DIV STYLE="float:left;margin-left:10px; width:100px; font-weight:bold;height:25px;">MAT.NO.:</DIV>

		 <DIV STYLE="float:left;margin-left:10px; width:150px; height:25px;"><?php echo $mats=$row['matricule'];?></DIV>

 <DIV STYLE="float:left;margin-left:10px; width:100px; font-weight:bold;height:25px;">SEX.:</DIV>

		 <DIV STYLE="float:left;margin-left:10px; width:150px; height:25px;"><?php echo $row['sex'];
		 ?></DIV>
 
 <DIV STYLE="float:left;margin-left:10px; width:170px; font-weight:bold;height:25px;">DATE OF BIRTH.:</DIV>
 
		 <DIV STYLE="float:left;margin-left:10px; width:100px; height:25px;"><?php echo $row['cxx2'];?></DIV>
		 
 <DIV STYLE="float:left;margin-left:10px; width:150px; font-weight:bold;height:25px;">PLACE OF BIRTH.:</DIV>
		    </div>
			
		 <div style="float:left; width:599px;height:70px; color:#000; ">
		 

		 <DIV STYLE="float:left;margin-left:10px; width:110px; font-weight:bold;height:25px;">DEPARTMENT </DIV>

		 <DIV STYLE="float:left;margin-left:10px; width:450px; height:25px;">NURSING</DIV>



		 <DIV STYLE="float:left;margin-left:10px; width:110px; font-weight:bold;height:25px;">PROGRAMME</DIV>

		 <DIV STYLE="float:left;margin-left:10px; width:450px; height:25px;"><?php echo $deptt=$row['departmet'];
		 
		 $level=$row['levels'];?></DIV>
		 
		 
		 


		 <DIV STYLE="float:left;margin-left:10px; width:110px; font-weight:bold;height:25px;">DURATION</DIV>

		 <DIV STYLE="float:left;margin-left:10px; width:450px; height:25px;"><?php echo $take;?></DIV>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		    </div>
		    </div>
		 

		 
		 <div style="float:left; width:1200px; height:40px;background:#ccc; color:#000;font-size:14px; border:1px solid #000;MARGIN-TOP:10PX;">
		 
		 <div style="float:left; width:70px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;font-weight:bold;height:25px;">
COURSE CODE
		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;font-weight:bold;height:25px;">
COURSE TITLE
		    </div>
		 
		    </div>
		  <div style="float:left; width:60px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;font-weight:bold;height:25px;">
STATUS
		    </div>
		 
		    </div>
		 
		   <div style="float:left; width:55PX; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;font-weight:bold;height:25px;">
CREDIT VALUE
		    </div>
		 
		    </div>
		   <div style="float:left; width:60px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;font-weight:bold;height:25px;">
GRADE
		    </div>
		 
		    </div>
		 
		   <div style="float:left; width:60px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;font-weight:bold;height:25px;">
CREDIT EARN
		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;font-weight:bold;height:25px;">
GRADE POINT
		    </div>
		 
		    </div>
		 
		 
		 
	 <div style="float:left; width:70px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;font-weight:bold;height:25px;">
COURSE CODE
		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;font-weight:bold;height:25px;">
COURSE TITLE
		    </div>
		 
		    </div>
		  <div style="float:left; width:60px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;font-weight:bold;height:25px;">
STATUS
		    </div>
		 
		    </div>
		 
		   <div style="float:left; width:55PX; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;font-weight:bold;height:25px;">
CREDIT VALUE
		    </div>
		 
		    </div>
		   <div style="float:left; width:55px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;font-weight:bold;height:25px;">
GRADE
		    </div>
		 
		    </div>
		 
		   <div style="float:left; width:60px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;font-weight:bold;height:25px;">
CREDIT EARN
		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:40px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;font-weight:bold;height:25px;">
GRADE POINT
		    </div>
		 
		    </div>
		 
		 
		 

		 
		 
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 <?php } ?>
		 
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		 <div style="float:left; width:650px; heigh:20px; color:#000;font-weight:normal;">
				 
				 
				 
		 <div style="float:left; width:70px; height:20px; border-left:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">
<b>First Semester First Year<?php echo $row['db1'];?>
		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		    </div>
		 
		    </div>
		 
		    </div>
		 
		 
		

		 <div style="float:left; width:1250px; heigh:auto;">

		 
		 <div style="float:left; width:600px; height:auto;">
		<?php 


$query = mysql_query("select  * from resit where db1='$take' and matricule='$mats' and departmet='$deptt' and sex='1' and levels='$level'order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 
		 <div style="float:left; width:602px; heigh:auto;color:#000;font-size:13px;font-weight:normal;">
		 		 
		
		
		 <div style="float:left; width:650px; heigh:20px; color:#000;font-weight:normal;">
				 
		 <div style="float:left; width:70px; height:20px; border-left:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">
<?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">
<?php 
$qry = mysql_query("select  db1 as total
from subject where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 

$qry = mysql_query("select  credit as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

$richooTTTy=$row['total']; 



$qry = mysql_query("select  status as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

$status=$row['total']; 
?>
		    </div>
		 
		    </div>
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
<?php echo $status;?>
		    </div>
		 
		    </div>
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">
<?php echo $richooTTTy;?>
		    </div>
		 
		    </div>
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

<?php $ns=
($exam+$cas); 


 $mxc11=$ns;
 
 
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio="F";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$range3) && ($mxc11<=$range4)){
 $colorf1bio="blue";
 $statusfbio="D";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio="D+";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="C";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="C+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio="B"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio="B+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
  $mxc11=$ns;
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$gpa1; ;
}else if(($mxc11 >=$range3) && ($mxc11<=$range4)){
 $colorf1bio="blue";
 $statusfbio=$gpa2; ;}
 
 else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio=$gpa3; }
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio=$gpa4; }
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio=$gpa5; 
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio=$gpa6; 
} 
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio=$gpa7; 
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio=$gpa8; 
} 

$query33="update resit set c104='$richooTTTy'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take' and fname='$courseps'";








$query3="update resit set c103='$statusfbio'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take' and fname='$courseps'";




mysql_query ($query3) or die ('could not updated:'.mysql_error());
mysql_query ($query33) or die ('could not updated:'.mysql_error());



 ?>
		    </div>
		 
		    </div>
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
<?php echo $richooTTTy;?>
		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
<?php echo $statusfbio;?>
		    </div>
		 
		    </div>
		 
		    </div>
		 
		    </div>
		 <?php } ?>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 				 
		 <div style="float:left; width:604px; heigh:auto;color:#000;font-size:13px;font-weight:normal;">
				 
		 <div style="float:left; width:70px; height:20px;border-left:1px solid #000;border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">

		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		    </div>
		 
		    </div>
		 
		 
		 <div style="float:left; width:70px; height:20px;border-left:1px solid #000;border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">

		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 <div style="float:left; width:70px; height:20px;border-left:1px solid #000;border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">
TOTAL CREDITS ATTEMPTED:<?php 



$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 



printf("%01.2f",($save));?>

		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		    </div>
		 
		    </div>
		 
		 
		 		 
		 <div style="float:left; width:70px; height:20px;border-left:1px solid #000;border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">
TOTAL CREDITS EARNED:<?php 



$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 



printf("%01.2f",($save));?>
		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 		 
		 <div style="float:left; width:70px; height:20px;border-left:1px solid #000;border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">
GPA CREDITS ATTEMPTED: <?php 



$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 



printf("%01.2f",($save));?>
		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 		 
		 <div style="float:left; width:70px; height:20px;border-left:1px solid #000;border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">
GPA CREDITS EANRED: <?php 



$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$saves=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 



printf("%01.2f",($saves));?>
		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 		 
		 <div style="float:left; width:70px; height:20px;border-left:1px solid #000;border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">
SEMESTER GPA: <?php 



$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$savep=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 



printf("%01.2f",($savep/$richooTTTyss));?>
		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 		 
		 <div style="float:left; width:70px; height:20px;border-left:1px solid #000;border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">

		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		    </div>
		 
		    </div>
		 
		 
		 
		  
		 		 
		 <div style="float:left; width:70px; height:20px;border-left:1px solid #000;border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">
<b>RESIT SESSION</b>
		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
	




























		<?php 


$query = mysql_query("select  * from resit where db1='$take' and matricule='$mats' and departmet='$deptt' and sex='3' and levels='$level'order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 
		 		 
		




	 		 
		 <div style="float:left; width:70px; height:20px;border-left:1px solid #000;border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">
<?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">

<?php 
$qry = mysql_query("select  db1 as total
from subject where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 

$qry = mysql_query("select  credit as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

$richooTTTy=$row['total']; 



$qry = mysql_query("select  status as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

$status=$row['total']; 
?>
		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
<?php echo $status;?>
		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">
<?php echo $richooTTTy;?>
		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

<?php $ns=
($exam+$cas); 


 $mxc11=$ns;
 
 
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio="F";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$range3) && ($mxc11<=$range4)){
 $colorf1bio="blue";
 $statusfbio="D";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio="D+";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="C";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="C+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio="B"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio="B+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
  $mxc11=$ns;
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$gpa1; ;
}else if(($mxc11 >=$range3) && ($mxc11<=$range4)){
 $colorf1bio="blue";
 $statusfbio=$gpa2; ;}
 
 else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio=$gpa3; }
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio=$gpa4; }
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio=$gpa5; 
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio=$gpa6; 
} 
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio=$gpa7; 
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio=$gpa8; 
} 


$query3="update resit set c103='$statusfbio'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take' and fname='$courseps'";







mysql_query ($query3) or die ('could not updated:'.mysql_error());

 ?>

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
<?php echo $richooTTTy;?>
		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		 <?php echo $statusfbio;?>   </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 <?php } ?>
		 	
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 






		 		 
		 <div style="float:left; width:70px; height:20px;border-left:1px solid #000;border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">
<b>First Semester Second Year </b>
		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		    </div>
		 
		    </div>
		 
		 
		 



		<?php 
$levels=$level+100;

$query = mysql_query("select  * from resit where db1='$take' and matricule='$mats' and departmet='$deptt' and sex='1' and levels='$levels'order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 
		 		 
		




	 		 
		 <div style="float:left; width:70px; height:20px;border-left:1px solid #000;border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">
<?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">

<?php 
$qry = mysql_query("select  db1 as total
from subject where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 

$qry = mysql_query("select  credit as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

$richooTTTy=$row['total']; 



$qry = mysql_query("select  status as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

$status=$row['total']; 
?>
		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
<?php echo $status;?>
		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">
<?php echo $richooTTTy;?>
		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

<?php $ns=
($exam+$cas); 


 $mxc11=$ns;
 
 
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio="F";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$range3) && ($mxc11<=$range4)){
 $colorf1bio="blue";
 $statusfbio="D";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio="D+";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="C";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="C+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio="B"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio="B+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
  $mxc11=$ns;
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$gpa1; ;
}else if(($mxc11 >=$range3) && ($mxc11<=$range4)){
 $colorf1bio="blue";
 $statusfbio=$gpa2; ;}
 
 else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio=$gpa3; }
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio=$gpa4; }
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio=$gpa5; 
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio=$gpa6; 
} 
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio=$gpa7; 
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio=$gpa8; 
} 


$query3="update resit set c103='$statusfbio'
 where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$take' and fname='$courseps'";







mysql_query ($query3) or die ('could not updated:'.mysql_error());

 ?>

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
<?php echo $richooTTTy;?>
		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		 <?php echo $statusfbio;?>   </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 <?php } ?>
		 	
		 
		 
		 
		 
		 
		 
		  <div style="float:left; width:70px; height:20px;border-left:1px solid #000;border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">

		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		    </div>
		 
		    </div>
		 
		 
		 <div style="float:left; width:70px; height:20px;border-left:1px solid #000;border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">

		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 <div style="float:left; width:70px; height:20px;border-left:1px solid #000;border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">
TOTAL CREDITS ATTEMPTED:<?php 



$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 



printf("%01.2f",($save));?>

		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		    </div>
		 
		    </div>
		 
		 
		 		 
		 <div style="float:left; width:70px; height:20px;border-left:1px solid #000;border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">
TOTAL CREDITS EARNED:<?php 



$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 



printf("%01.2f",($save));?>
		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 		 
		 <div style="float:left; width:70px; height:20px;border-left:1px solid #000;border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">
GPA CREDITS ATTEMPTED: <?php 



$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$saveu=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 



printf("%01.2f",($saveu));?>
		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 		 
		 <div style="float:left; width:70px; height:20px;border-left:1px solid #000;border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">
GPA CREDITS EANRED: <?php 



$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$saves=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 



printf("%01.2f",($saves));?>
		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 		 
		 <div style="float:left; width:70px; height:20px;border-left:1px solid #000;border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">
SEMESTER GPA: <?php 



$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$savep=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 



printf("%01.2f",($savep/$richooTTTyss));?>
		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
	
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 <div style="float:left; width:602px;margin-top:-20px; heigh:auto;color:#000;font-size:13px;font-weight:normal;">
		 
				 
		 <div style="float:left; width:73px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:73px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">
<b>Second Semester First Year<?php echo $row['db1'];?></b>
		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:55px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:62px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		    </div>
		 
		    </div>
		 
		    </div>
		 
		 

		<?php 


$query = mysql_query("select  * from resit where db1='$take' and matricule='$mats' and departmet='$deptt' and sex='2' and levels='$level'order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 
		 <div style="float:left; width:602px; heigh:auto;color:#000;font-size:13px;font-weight:normal;">
		 		 
		
		
		 <div style="float:left; width:650px; heigh:20px; color:#000;font-weight:normal;">
				 
		 <div style="float:left; width:73px; height:20px;  border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:75px; text-align:center;height:20px;">
<?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">
<?php 
$qry = mysql_query("select  db1 as total
from subject where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 

$qry = mysql_query("select  credit as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

$richooTTTy=$row['total']; 



$qry = mysql_query("select  status as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

$status=$row['total']; 
?>
		    </div>
		 
		    </div>
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
<?php echo $status;?>
		    </div>
		 
		    </div>
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">
<?php echo $richooTTTy;?>
		    </div>
		 
		    </div>
		   <div style="float:left; width:55px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

<?php $ns=
($exam+$cas); 


 $mxc11=$ns;
 
 
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio="F";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$range3) && ($mxc11<=$range4)){
 $colorf1bio="blue";
 $statusfbio="D";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio="D+";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="C";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="C+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio="B"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio="B+"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
} 
 
 
 
  $mxc11=$ns;
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio=$gpa1; ;
}else if(($mxc11 >=$range3) && ($mxc11<=$range4)){
 $colorf1bio="blue";
 $statusfbio=$gpa2; ;}
 
 else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio=$gpa3; }
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio=$gpa4; }
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio=$gpa5; 
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbio=$gpa6; 
} 
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbio=$gpa7; 
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbio=$gpa8; 
} 


$query3="update resit set c103='$statusfbio'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take' and fname='$courseps'";







mysql_query ($query3) or die ('could not updated:'.mysql_error());

 ?>
		    </div>
		 
		    </div>
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
<?php echo $richooTTTy;?>
		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:62px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
<?php echo $statusfbio;?>
		    </div>
		 
		    </div>
		 
		    </div>
		 
		 <?php } ?>
		 
		 
		 
		 
		 
		 
		 
		 
		 				 
		 <div style="float:left; width:604px;margin-left:3px; heigh:auto;color:#000;font-size:13px;font-weight:normal;">
				 
		 <div style="float:left; width:70px; height:20px;border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">

		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:55px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:62px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		    </div>
		 
		    </div>
		 
		 
		 <div style="float:left; width:70px; height:20px;border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">

		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
		
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:55px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:62px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		    </div>
		 
		    </div>
		 
		 
		 <div style="float:left; width:70px; height:20px;border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">
TOTAL CREDITS ATTEMPTED:<?php 



$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 



printf("%01.2f",($save));?>

		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:55px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:62px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		    </div>
		 
		    </div>
		 
		 		 
		 <div style="float:left; width:70px; height:20px;border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">
TOTAL CREDITS EARNED:<?php 



$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 



printf("%01.2f",($save));?>
		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:55px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:62px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 		 
		 <div style="float:left; width:70px; height:20px;border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">
GPA CREDITS ATTEMPTED: <?php 



$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 



printf("%01.2f",($save));?>
		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		 

		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:55px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:62px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 		 
		 <div style="float:left; width:70px; height:20px;border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">
GPA CREDITS EANRED: <?php 



$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$saves=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 



printf("%01.2f",($saves));?>
		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
		
		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:55px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:62px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 		 
		 <div style="float:left; width:70px; height:20px;border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left; width:230px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px; width:230px; text-align:left;height:20px;">
SEMESTER GPA: <?php 



$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$savep=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 



printf("%01.2f",($savep/$richooTTTyss));?>
		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			

		 
		   <div style="float:left; width:55PX; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:55px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:62px; height:20px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:20px;">
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 