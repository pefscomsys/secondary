<?PHP
ini_set('max_execution_time', 66000); //300 seconds = 5 minutes
INCLUDE 'dbcs.PHP';

$follows=$_POST['follows'];

$bookss=$_POST['bookss'];

$stetsub=$_POST['stetsub'];

$statusbsub=$_POST["statusbsub"];

 $deptt=$_POST["deptt"];

$teacher=$_POST["teacher"];
$t1=$_POST["t1"];
$t2=$_POST["t2"];

$levels=$_POST["levels"];
$roll=$_POST["roll"];
$form=$_POST["form"];

$fname=$_POST["fname"];
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
$query="select * from gradebb where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx1=$row['from1'];
$rangx2=$row['from2'];
$c1=$row['comments'];
$gpa1=$row['comments'];

?>
<?php } ?>




<?php
$roll=$_GET["1"];
$query="select * from gradebb where roll='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx3=$row['from1'];
$rangx4=$row['from2'];
$c2=$row['comments'];
$gpa2=$row['comments'];
?>
<?php } ?>









<?php
$roll=$_GET["1"];
$query="select * from gradebb where roll='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx5=$row['from1'];
$rangx6=$row['from2'];

$c3=$row['comments'];
$gpa3=$row['comments'];
?>
<?php } ?>







<?php
$roll=$_GET["1"];
$query="select * from gradebb where roll='4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $rangx7=$row['from1'];
$rangx8=$row['from2'];

$c4=$row['comments'];
$gpa4=$row['comments'];
?>
<?php } ?>








<?php
$roll=$_GET["1"];
$query="select * from gradebb where roll='5'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx9=$row['from1'];
 $rangx10=$row['from2'];
 
$c5=$row['comments'];
$gpa5=$row['comments'];
?>
<?php } ?>

<?php
$roll=$_GET["1"];
$query="select * from gradebb where roll='6'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx11=$row['from1'];
 $rangx12=$row['from2'];
 
$c6=$row['comments'];
$gpa6=$row['comments'];
?>
<?php } ?>

<?php
$roll=$_GET["1"];
$query="select * from gradebb where roll='7'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx13=$row['from1'];
 $rangx14=$row['from2'];
 
$c7=$row['comments'];
$gpa7=$row['comments'];
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from gradebb where roll='8'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx15=$row['from1'];
 $rangx16=$row['from2'];
 
$c8=$row['comments'];
$gpa8=$row['comments'];
?>
<?php } ?>
<?php
$roll=$_GET["1"];
$query="select * from gradebb where roll='9'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php     $rangx17=$row['from1'];
 $rangx18=$row['from2'];
 
$c9=$row['comments'];
$gpa9=$row['comments'];
?>
<?php } ?>
<head><TITLE>TRANSCRIPT </TITLE>
 <link rel="stylesheet" href="test.css" 
type="text/css">
<style>
#container{
width:670px;
height:650px;
margin:auto;}
.left{float:left;width:270px;; height:70px;line-height:22px;background:#1188aa;}

.left2{float:left;width:200px; height:70px;text-align:center;}


.left3{float:left;width:200px; height:70px;}
.top{float:left;width:220px; height:15px;FONT-SIZE:10PX; "}
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
$query="select * from $table where db1='$take' and levels='$levels' and departmet='$deptt'
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		 <div style="margin:auto; width:1308px; height:1200px; background:url(report.png);">
		 
		 
		 
		 
		 
		 <div style="float:left; width:1306px; height:906px; border:1px solid #000;">
		 
		 
		 
		 <div style="float:left;margin-left:2px;margin-top:2px; width:1300px; height:140px; color:#000; border:1px solid #000;">
		 

		 <div style="float:left; width:649px; height:140px;background:#ddd; color:#000; border-right:1px solid #000;">
		

		 <div style="float:left; width:323px; height:140px; color:#000; border-right:1px solid #000;">
		 
		 <div style="float:left; width:250px; MARGIN-TOP:10PX;height:130px;TEXT-ALIGN:CENTER; MARGIN-LEFT:5PX;">

		<?php echo $school6;?>  <?php echo $school6b;?> <BR><?php echo $school7;?> <?php echo $school7b;?> 
		 
		    </div>
		    </div>
			
			<div style="float:left; width:323px; height:140px; color:#000; ">
		 	 <div style="float:left; width:320px; MARGIN-TOP:50PX;height:50px;TEXT-ALIGN:CENTER; MARGIN-LEFT:5PX;">
STUDENT ACADEMIC RECORD
		 
		 
		    </div>
		 
		 
		    </div>
			
			
		    </div>
		 

		 <div style="float:left; width:649px; height:140px;color:#000;">
			
			
		 <div style="float:left; width:649px; height:69px;color:#000;BORDER-BOTTOM:1PX SOLID #000;">
			 <div style="float:left; width:549px; height:69px;color:#000;BORDER-right:1PX SOLID #000;">
			
			 <div style="float:left; width:549px; height:34px;color:#000;">
			 
			 <div style="float:left; width:249px; height:34px;color:#000;">
			 <B>&nbsp;&nbsp;&nbsp;&nbsp;STUDENT NO</B>
			 
		    </div>
			 
			  <div style="float:left; width:300px; height:34px;color:#000;">
			 <B>&nbsp;&nbsp;&nbsp;&nbsp;DATE PRINTED</B>
			 
		    </div>
			
		    </div>
			
			
			
			
			
			
			
			
			 <div style="float:left; width:549px; height:34px;color:#000;">
			 
			 <div style="float:left; width:249px; height:34px;color:#000;font-size:13px;">
			&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $mats=$row['matricule'];?>
			 
		    </div>
			 
			  <div style="float:left; width:300px; height:34px;color:#000;font-size:13px;">
			 &nbsp;&nbsp;&nbsp;&nbsp;<?php echo date('Y/m/j');?>
			 
		    </div>
			
		    </div>
			
			
			
			
			
			
			
			
			
		    </div>
		  <div style="float:left; width:100px; height:69px;color:#000;">
			
		    </div>
		    </div>
			
		 <div style="float:left; width:649px; height:69px;color:#000;">
		
			 <div style="float:left; width:649px; height:32px;color:#000;">	
			
			&nbsp;&nbsp;&nbsp;STUDENT NAME
		    </div>
			 <div style="float:left; width:649px; height:32px;color:#000;font-size:13px;">	
			 <div style="float:left; width:349px; height:32px;color:#000;font-size:13px;">	
			&nbsp;&nbsp;&nbsp;<?php echo $row['fname'];?><?php  $deptt=$row['departmet'];
		 
		 $level=$row['levels'];?>
		    </div>
			 <div style="float:left; width:300px; height:32px;color:#000;font-size:13px;">	ACADEMIC YEAR: <?PHP ECHO $take;?>
		    </div>
			</div>
			
			
			
			
			
		 
		    </div>
			
			
		 
		    </div>
		 
		 
		 <div style="float:left;margin-left:2px;margin-top:2px; width:1300px; height:297px; color:#000; border:1px solid #000;">
		 
		 <div style="float:left; width:1300px; height:100px; color:#000; border-bottom:1px solid #000;">

		 <div style="float:left; width:150px; height:100px;border-RIGHT:1px solid #000;">
		 
		 
		 <div style="float:left; width:150px; height:30px; TEXT-ALIGN:CENTER;">
		 DATE OF BIRTH
		 
		 </DIV>
		 <div style="float:left; width:49px; height:70px; TEXT-ALIGN:CENTER;border-RIGHT:1px solid #000;">
		
		 <div style="float:left; WIDTH:100PX;"> <?php echo $row['cxx2'];?></DIV>
		 
		 
		 </DIV> <div style="float:left; width:49px; height:70px; TEXT-ALIGN:CENTER;border-RIGHT:1px solid #000;">
		 
		 
		 
		 </DIV> <div style="float:left; width:49px; height:70px; TEXT-ALIGN:CENTER;">
		 
		 
		 
		 </DIV>
		 </DIV>
		 
		 
		 <div style="float:left; width:380px; height:100px;border-RIGHT:1px solid #000;">
		 <div style="float:left; width:380px; height:30px; TEXT-ALIGN:CENTER;">
		 PLACE OF BIRTH
		 
		 </DIV> <div style="float:left; width:380px;MARGIN-TOP:50PX; height:30px; TEXT-ALIGN:CENTER;">
			<?php echo $row['cxx1'];?>	  </DIV>
		 
		  
		    </div>
 
		 <div style="float:left; width:70px; height:100px;border-RIGHT:1px solid #000;">
		   <div style="float:left; width:70px; height:30px; TEXT-ALIGN:CENTER;">
		 SEX
		 
		 </DIV>
		  <div style="float:left; width:70px;MARGIN-TOP:50PX; height:30px; TEXT-ALIGN:CENTER;">
		  <?php echo $row['sex'];
		 ?>
		  </DIV>
		 
		  
		  
		    </div>
		 <div style="float:left; width:359px; height:100px;border-RIGHT:1px solid #000;">
		 
		   <div style="float:left; MARGIN-TOP:10PX;width:359px; height:30px; TEXT-ALIGN:CENTER;">
		 SCHOOL LAST ATTENDED
		 
		 </DIV>
		 
		    </div>
			
		 <div style="float:left; width:309px; height:100px;">
			
		   <div style="float:left; MARGIN-TOP:10PX;FONT-SIZE:12PX;width:300px;FONT-WEIGHT:NORMAL;TEXT-TRANSFORM:UPPERCASE; height:30px; TEXT-ALIGN:CENTER;">
		This transcript is not valid widthout the Seal, the signature of the Rector and that of the Dean of studies
		    </div>
		    </div>
			</div>
				 <div style="float:left; width:1300px; height:200px; color:#000; ">

		 <div style="float:left; width:430px; height:200px; color:#000; border-right:1px solid #000;">

		 
		 <div style="float:left; width:430px; height:70px; color:#000; border-bottom:1px solid #000;">
		  <div style="float:left; width:330px; height:70px; color:#000; border-right:1px solid #000;">
		 
		   <div style="float:left;MARGIN-LEFT:10PX;width:230px;height:20px; MARGIN-TOP:20PX;">
		 DATE OF ENROLMENT
		    </div>
			
		   <div style="float:left;MARGIN-LEFT:280PX;width:100px;height:20px;">
			<table WIDTH="120PX"CELLSPACING="0" CELLPADDING="2"><tr><td>MON</td><td>YEAR</TD></TR>
			<tr><td><?PHP ECHO $mm;?></td><td><?PHP ECHO $mm;?></TD></TR>
			
			
			
			</TABLE>
			</div>
			</div>
		  <div style="float:left; width:100px; height:70px; color:#000; ">
		 
		  <div style="float:left;MARGIN-LEFT:10PX;MARGIN-TOP:10PX;"> 
		 <table WIDTH="400PX"CELLSPACING="0" CELLPADDING="2" >
		 <tr><td WIDTH="200px" STYLE="FONT-SIZE:13PX;"><B>SPECIALTY :</B></td><td><?PHP ECHO $row['departmet'];?></td></tr>
		 
		 <tr><td STYLE="FONT-SIZE:13PX;"><B>DEGREE PROPOSED :</B></td><td STYLE="FONT-SIZE:11PX;">BACHELOR OF TECHNOLOGY</td></tr>
		 
		 <tr><td STYLE="FONT-SIZE:13PX;"><B>DIPLOMA CONFERED :</B></td><td STYLE="FONT-SIZE:11PX;"></td></tr>
		 
		 <tr><td STYLE="FONT-SIZE:13PX;"><B>DATE :</B></td><td STYLE="FONT-SIZE:11PX;"></td></tr>
		 </table>
		 
		    </div>
		    </div>
		 
		    </div>
		 
		 
		    </div>
				 
				 
				 
				 
				 
				 
		 <div style="float:left; width:530px; height:200px; color:#000; border-right:1px solid #000;">

		    </div>
				 
				 
		 <div style="float:left; width:330px; height:200px; color:#000; ">

		 
		 <div style="float:left; width:330px; height:30px; MARGIN-LEFT:10PX;"><B>GRADE SYSTEM</B></DIV>
		 
		 <div style="float:left; width:330px; height:160px; MARGIN-LEFT:10PX;">
		 <TABLE STYLE="FONT-SIZE:12PX;"><TR><TD>
		  <?php echo $c8;?> : </TD><TD><?php echo $rangx15;?> -</TD><TD> <?php echo $rangx16;?> %</TD><TD><?php echo $gpa8;?>GP</TD><TD>Excellent</TD></TR>
		  <TR><TD>
		  <?php echo $c7;?> : </TD><TD><?php echo $rangx14;?> -</TD><TD> <?php echo $rangx13;?> %</TD><TD><?php echo $gpa7;?>GP</TD><TD>V. Good</TD></TR>
		   <TR><TD>
		  <?php echo $c6;?> : </TD><TD><?php echo $rangx11;?> -</TD><TD> <?php echo $rangx12;?> %</TD><TD><?php echo $gpa6;?>GP</TD><TD>Good</TD></TR>
		   <TR><TD>
		  <?php echo $c5;?> : </TD><TD><?php echo $rangx10;?> -</TD><TD> <?php echo $rangx9;?> %</TD><TD><?php echo $gpa5;?>GP</TD><TD>FAIR</TD></TR>
		  
		    <TR><TD>
		  <?php echo $c4;?> : </TD><TD><?php echo $rangx8;?> -</TD><TD> <?php echo $rangx7;?> %</TD><TD><?php echo $gpa4;?>GP</TD><TD>PASS</TD></TR>
		    <TR><TD>
		  <?php echo $c3;?> : </TD><TD><?php echo $rangx6;?> -</TD><TD> <?php echo $rangx5;?> %</TD><TD><?php echo $gpa3;?>GP</TD><TD>FAIL</TD></TR>
		    <TR><TD>
		  <?php echo $c2;?> : </TD><TD><?php echo $rangx4;?> -</TD><TD> <?php echo $rangx3;?> %</TD><TD><?php echo $gpa2;?>GP</TD><TD>FAIL</TD></TR>
		  <TR><TD>
		  <?php echo $c1;?> : </TD><TD><?php echo $rangx2;?> -</TD><TD> <?php echo $rangx1;?> %</TD><TD><?php echo $gpa1;?>GP</TD><TD>FAIL</TD></TR>
		  
		  </TABLE>
		 
		    </div>
		 
		    </div>
			
			
			
			
		    </div>

			
		    </div>
		 
		 <div style="float:left;margin-left:2px; width:1300px; height:40px;background:#ccc; color:#000;font-size:11px; border:1px solid #000;MARGIN-TOP:1PX;">
		 
		 <div style="float:left; width:70px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;font-weight:bold;height:25px;">
COURSE CODE
		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px;width:280px; text-align:left;font-weight:bold;height:25px;">
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
		 
		 
		 
		   <div style="float:left; width:58px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;font-weight:bold;height:25px;">
GRADE POINT
		    </div>
		 
		    </div>
		 
		 
		 
	 <div style="float:left; width:72px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;font-weight:bold;height:25px;">
COURSE CODE
		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px;width:280px; text-align:left;font-weight:bold;height:25px;">
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
		 
		 
		 
		   <div style="float:left; width:58px; height:40px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;font-weight:bold;height:25px;">
GRADE POINT
		    </div>
		 
		    </div>
		 
		 
		 

		 
		 
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		 <div style="float:left;margin-left:2px; width:1350px; heigh:auto;">
		
		
		
		
		
		 <div style="float:left; width:653px; height:15px; color:#000;font-weight:normal;">
				 
				 
				 
				 
				 
		 <div style="float:left; width:70px; height:15px; border-left:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:15px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:15px;">
<b>First Semester First Year<?php echo $row['db1'];?>
		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:15px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:15px;">

		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:15px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:15px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:60px; height:15px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:15px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:15px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:58px; height:15px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:15px;">
		    </div>
		 
		    </div>
		 
		 
		 
				 
	
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 <div style="float:left; width:658px; heigh:350px; color:#000;font-weight:normal;">
				 
				 
			
		 <div style="float:left; width:70px; height:400px;border-bottom:1px solid #000; border-left:1px solid #000; border-right:1px solid #000;">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:400px;border-bottom:1px solid #000; border-right:1px solid #000;">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:400px;border-bottom:1px solid #000; border-right:1px solid #000;">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:400px;border-bottom:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:400px;border-bottom:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:auto;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:400px;border-bottom:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:58px; height:400px;border-bottom:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:auto;">
		    </div>
		 
		    </div>
		 
		
		
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		    </div>
		 
		 
		 
		 
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 	 <div style="float:left; width:653px; height:15px; color:#000;font-weight:normal;">
				 
				 
				 
				 
		 <div style="float:left; width:70px; height:15px;  border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:15px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:15px;">
<b>Second Semester First Year<?php echo $row['db1'];?>
		    </div>
		 
		    </div>
			
			
		  <div style="float:left; width:60px; height:15px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:15px;">

		    </div>
		 
		    </div>
			
			
		 
		   <div style="float:left; width:55PX; height:15px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:15px;">

		    </div>
		 
		    </div>
			
			
		   <div style="float:left; width:55px; height:15px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:15px;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:15px;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		   <div style="float:left; width:62px; height:15px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:15px;">
		    </div>
		 
		    </div>
		 
		 
		 
				 
				 
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		 
		 <div style="float:left; width:650px; heigh:700px; color:#000;font-weight:normal;">
				 
				 
			
		 <div style="float:left; width:70px; height:400px;border-bottom:1px solid #000;  border-right:1px solid #000;">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:400px;border-bottom:1px solid #000; border-right:1px solid #000;">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:400px;border-bottom:1px solid #000; border-right:1px solid #000;">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:400px;border-bottom:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:55px; height:400px;border-bottom:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:auto;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:400px;border-bottom:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:62px; height:400px;border-bottom:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:auto;">
		    </div>
		 
		    </div>
		 
		
		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		 
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 <div style="float:left; width:1350px; heigh:auto;">
		
		
		 <div style="float:left; width:653px; height:auto; color:#000;font-weight:normal;">
		
				<?php 


$query = mysql_query("select  * from resit where db1='$take' and matricule='$mats' and departmet='$deptt' and sex='1' and levels='$level'order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 
		
		 <div style="float:left; width:653px; height:15px; color:#000;font-weight:normal;">
		 
	 
				 
				 
			
		 <div style="float:left; width:70px; height:15px;  ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">
<?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">
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
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">
<?php echo $status;?>
		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">
<?php echo $richooTTTy;?>
		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

<?php




 $ns=
($exam+$cas); 
 
$qry = mysql_query("select sum(c102) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='3' and db1='$take'  and fname='$courseps'  and c102>''"); 
$row = mysql_fetch_assoc($qry); 
  $smsp=$row['total'];
  $smspp=($cas+$smsp);
 $mjs=$ns;
 
if(empty($mjs)){
 
  $statussms='';
 }
elseif($mjs<$smspp && $smspp>$mjs && $mjs<50){
  $statussmsp='';
  $statussms=(($smspp));
}
 elseif($mjs>$smspp && $smspp<$mjs && $mjs<50){

  $statussms=(($ns));
   $statussmsp='';
}
 elseif($mjs>$smspp && $smspp<$mjs && $mjs>=50){

  $statussms='';
   $statussmsp=(($ns));
}

 
    $mjss=$statussms;
if(empty($mjss)){
 $statussmss=$statussmsp;}
 
elseif( $mjss>$mjs && $mjs<50 && $smspp>=50){

  $statussmss=(($ns+$smspp)/2);
}

elseif( $mjss>$mjs && $mjs<50 && $smspp<50){

  $statussmss=$statussmsp;
}







 
 
 


 
  $mjssss=$statussmss;
if(empty($mjssss)){
 $statussmsjs='';}
elseif($mjssss<50){

  $statussmsjs=50;
  
}
 elseif($mjssss>=50){

  $statussmsjs=$mjssss;
  
}
 
 
 
 
 
 
  $mjsssvv=$statussmsjs;
if(empty($mjsssvv)){
 
  $statussmsssv="";
  
  }
 
elseif($mjsssvv<50){

  $statussmsssv=$statussmsjs;
}
  
elseif($mjsssvv>=50){

  $statussmsssv=$statussmss;
}


 
 
 $mxc11=$ns;
 
 
 
 
 
 
 
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio="F";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="#ff6666";
 $statusfbio="D";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="#ff6666";
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
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
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


 $mxc11=$mjsssvv;
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbiobios="";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbiobios=$gpa1; ;
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbiobios=$gpa2; ;}
 
 else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbiobios=$gpa3; }
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbiobios=$gpa4; }
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbiobios=$gpa5; 
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbiobios=$gpa6; 
} 
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbiobios=$gpa7; 
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbiobios=$gpa8; 
} 


 $cc=($statusfbio*$richooTTTy);





$query3="update resit set c104='$richooTTTy'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take' and fname='$courseps'";




 
$qry = mysql_query("select SUM(c101+c102) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$level' and sex='1' and db1='$take' and fname='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
 $savepsts=$row['total']; 

 
$qry = mysql_query("select SUM(c101+c102) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$level' and sex='3' and db1='$take' and fname='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
  $savepstss=$row['total']; 


 $mxcyy1= $savepsts;
 $mxcyy= $savepstss;
 
 if(empty($mxcyy)){

 $stmyyy=$savepsts;}
elseif($mxcyy<=""){

  $stmyyy=$savepsts; 
}
 
 elseif($mxcyy>""){

 $stmyyy=(($savepstss+$savepsts)/2); 
}


 $mxcyyy1=$savepstss;

 if(empty($mxcyyy1)){

 $stmyyyy1=$savepsts;}
elseif($mxcyyy1>="50" && $mxcyyy1<=""){

  $stmyyyy1=$savepstss; 
}
 
 elseif($mxcyyy1<$mxcyy1){

  $stmyyyy1=$mxcyy1; 
}




 elseif($mxcyyy1>$mxcyy1 &&  $stmyyy<50  ){

  $stmyyyy1=50; 
}

 elseif($mxcyyy1>$mxcyy1 &&  $stmyyy>=50  ){

  $stmyyyy1=$stmyyy; 
}

 elseif($mxcyyy1>=$mxcyy1 && $mxcyyy1<=$mxcyy1){

  $stmyyyy1=$mxcyyy1; 
}


 elseif($mxcyyy1>=$mxcyy1 && $mxcyyy1<=$mxcyy1){

  $stmyyyy1=$mxcyyy1; 
}




 elseif($mxcyyy1>'50' ){

  $stmyyyy1=$stmyyy; 
}
 elseif($mxcyyy1>'50' &&  $stmyyy>'50'){

  $stmyyyy1=$stmyyy; 
}
 elseif($mxcyyy1>'50' &&  $stmyyy<'50'){

  $stmyyyy1=$mxcyyy1; 
}
 
 
 $mxc11f=$stmyyyy1;
 
 if(empty($mxc11f)){

 $statusfbiogff="";}
elseif($mxc11f>=$rangx1 && $mxc11f<=$rangx2 ){

 $statusfbiogff=$gpa1; ;
}else if(($mxc11f >=$rangx3) && ($mxc11f<=$rangx4)){
 $colorf1bio="blue";
 $statusfbiogff=$gpa2; ;}
 
 else if(($mxc11f >=$rangx5) && ($mxc11f<=$rangx6)){
 $colorf1bio="blue";
 $statusfbiogff=$gpa3; }
 
 
else if(($mxc11f >=$rangx7) && ($mxc11f<=$rangx8)){
 $colorf1bio="blue";
 $statusfbiogff=$gpa4; }
 
 
 else if(($mxc11f >=$rangx9) && ($mxc11f<=$rangx10)){
 $colorf1bio="blue"; $statusfbiogff=$gpa5; 
} 
 
 
 
 else if(($mxc11f >=$rangx11) && ($mxc11f<=$rangx12)){
 $colorf1bio="blue"; $statusfbiogff=$gpa6; 
} 
 
  else if(($mxc11f >=$rangx10) && ($mxc11f<=$rangx14)){
 $colorf1bio="blue"; $statusfbiogff=$gpa7; 
} 
 
 
  else if(($mxc11f >=$rangx15) && ($mxc11f<=$rangx16)){
 $colorf1bio="blue"; $statusfbiogff=$gpa8; 
} 

 
 $statusfbiogff;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$query3eyy="update resit set c108='$statusfbiogff'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take' and fname='$courseps'";
 
 
 $xaf=($tm*$statusfbiogff);
$query3eyyy="update resit set c109='$xaf'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take' and fname='$courseps'";
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$query3ey="update resit set c107='$stmyyy'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take' and fname='$courseps'";
 
 
 
 
 
 
 
 
 
 
 
 
 

 $cc=($statusfbio*$richooTTTy);
 
 
 
$query13="update resit set c106='$cc'
 where matricule='$mats' and departmet='$deptt' and levels='$level' and sex='1' and db1='$take' and fname='$courseps' ";


mysql_query ($query13) or die ('could not updated:'.mysql_error());

mysql_query ($query3) or die ('could not updated:'.mysql_error());

mysql_query ($query3eyyy) or die ('could not updated:'.mysql_error());

mysql_query ($query3eyy) or die ('could not updated:'.mysql_error());

mysql_query ($query3ey) or die ('could not updated:'.mysql_error());

$query3="update resit set c103='$statusfbio'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take' and fname='$courseps'";


 
 
$query33="update resit set c104='$richooTTTy'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take' and fname='$courseps'";








 $cc=($statusfbio*$richooTTTy);
$query13="update resit set c106='$cc'
 where matricule='$mats' and departmet='$deptt' and levels='$level' and sex='1' and db1='$take' and fname='$courseps' ";



mysql_query ($query13) or die ('could not updated:'.mysql_error());
mysql_query ($query3) or die ('could not updated:'.mysql_error());
mysql_query ($query33) or die ('could not updated:'.mysql_error());






 ?>
		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">
<?php echo $richooTTTy;?>
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
		  <?php echo $statusfbio;
		  
		  
		  
		  
		  ?>  </div>
		 
		    </div>
		 
		
		
		 
		 
		 </div>
		 <?php } ?>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 <div style="float:left; width:653px; height:auto; color:#000;font-weight:normal;">
		 
		 
		 
		 
		 
		 
		 <div style="float:left; width:70px; height:15px; border-left:1px solid #000; ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
			 
		 <div style="float:left; width:70px; height:15px; border-left:1px solid #000; ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:5px;width:280px;font-size:11px; text-align:left;height:auto;">

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
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		
		
		 
		 
			 
		 <div style="float:left; width:70px; height:15px; border-left:1px solid #000; ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:5px;width:280px;font-size:11px; text-align:left;height:auto;">


TOTAL CREDITS EARNED:<?php 



$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 



printf("%01.2f",($save));?>

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		
		
		
		
		
		
		
		
		
		
		
		
		
			 
		 <div style="float:left; width:70px; height:15px; border-left:1px solid #000; ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:5px;width:280px;font-size:11px; text-align:left;height:auto;">



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
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
			 
		 <div style="float:left; width:70px; height:15px; border-left:1px solid #000; ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:5px;width:280px;font-size:11px; text-align:left;height:auto;">


GPA CREDITS EANRED: <?php 



$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
 $saves=$row['total']; 
 $gpacredit1=$saves;



$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$savetttty=$row['total'];
 $gpacredit11=$savetttty;

$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 
$gpacourses1=$richooTTTyss;


printf("%01.2f",($saves));?>
		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			 
		 
		 
		 
		 <div style="float:left; width:70px; height:15px; border-left:1px solid #000; ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			 
		 
		 
		 
		 <div style="float:left; width:70px; height:15px; border-left:1px solid #000; ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">
SEMESTER GPA <?php 

$qry = mysql_query("select SUM(c106) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$level' and sex='1' and db1='$take' "); 
$row = mysql_fetch_assoc($qry); 
 $savept=$row['total']; 

 



$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
 $richooTTTyss=$row['total'];




  
 $mxc111t=$savept; 
  
if(empty($mxc111t)){
 $statusfbioopt="";}
elseif($mxc111t>0 ){
 
 $statusfbioopt=$mxc111t;
}
   $mxc1112t=$richooTTTyss; 
  
if(empty($mxc1112t)){
 $statusfbioop2t="";}
elseif($mxc1112t>0 ){
 
 $statusfbioop2t=$richooTTTyss;
}
  
  
  
 $mxc111yt=$savept; 
  
if(empty($mxc111yt)){
 echo  $statusfbiooput="";
  }
  elseif($mxc111yt>'' ){
 printf("%01.2f",($statusfbioopt/$statusfbioop2t));
}?>
		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		
		
		
		
		
		 
		 <div style="float:left; width:70px; height:15px; border-left:1px solid #000; ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">
  </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		
		
		
		
		
		
		
		
		
		
	






			 
		 
		 
		 
		 <div style="float:left; width:70px; height:15px; border-left:1px solid #000; ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">
<b>RESIT SESSION </b>  </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		
		
		
		

		 <div style="float:left; width:653px; height:auto; color:#000;font-weight:normal;">
		
				<?php 


$query = mysql_query("select  * from resit where db1='$take' and matricule='$mats' and departmet='$deptt' and sex='3' and levels='$level'order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 
		
		 <div style="float:left; width:653px; height:15px; color:#000;font-weight:normal;">
		 
	 
				 
				 
			
		 <div style="float:left; width:70px; height:15px; border-left:1px solid #000; ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">
<?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">
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
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">
<?php echo $status;?>
		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">
<?php echo $richooTTTy;?>
		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

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
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="#ff6666";
 $statusfbio="D";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="#ff6666";
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
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
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
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='3' and db1='$take' and fname='$courseps'";








$query3="update resit set c103='$statusfbio'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='3' and db1='$take' and fname='$courseps'";




mysql_query ($query3) or die ('could not updated:'.mysql_error());
mysql_query ($query33) or die ('could not updated:'.mysql_error());














$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='3' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$savesui=$row['total']; 
 
$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='3' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$savetttui=$row['total'];
 
 $gpacredit3=$savetttui;



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='3' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
 $richooTTTyssui=$num_rows; 
$gpacourses3=$richooTTTyssui;
 ?>
		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">
<?php echo $richooTTTy;?>
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
		  <?php echo $statusfbio;?>  </div>
		 
		    </div>
		 
		
		
		 
		 
		 </div>
		 <?php } ?>
		 
		 
		 
		 


		 <div style="float:left; width:70px; height:15px; border-left:1px solid #000; ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">
   </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		
		
		 



















		 

		 










	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		 </div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		 </div>
		 
		 	 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 </div>
		 
		 
		 
		 
	


















	

		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 		 <div style="float:left; width:653px; height:auto; color:#000;font-weight:normal;">
<?php 


$query = mysql_query("select  * from resit where db1='$take' and matricule='$mats' and departmet='$deptt' and sex='2' and levels='$level'order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>
		 
		
		 <div style="float:left; width:653px; height:15px; color:#000;font-weight:normal;">
		 
	 
				 
				 
			
		 <div style="float:left; width:70px; height:15px;  ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">
<?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">
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
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">
<?php echo $status;?>
		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">
<?php echo $richooTTTy;?>
		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

<?php $ns=
($exam+$cas); 
$qry = mysql_query("select sum(c102) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='3' and db1='$take'  and fname='$courseps'  and c102>''"); 
$row = mysql_fetch_assoc($qry); 
  $smsp=$row['total'];
  $smspp=($cas+$smsp);
 $mjs=$ns;
 
if(empty($mjs)){
 
  $statussms='';
 }
elseif($mjs<$smspp && $smspp>$mjs && $mjs<50){
  $statussmsp='';
  $statussms=(($smspp));
}
 elseif($mjs>$smspp && $smspp<$mjs && $mjs<50){

  $statussms=(($ns));
   $statussmsp='';
}
 elseif($mjs>$smspp && $smspp<$mjs && $mjs>=50){

  $statussms='';
   $statussmsp=(($ns));
}

 
    $mjss=$statussms;
if(empty($mjss)){
 $statussmss=$statussmsp;}
 
elseif( $mjss>$mjs && $mjs<50 && $smspp>=50){

  $statussmss=(($ns+$smspp)/2);
}

elseif( $mjss>$mjs && $mjs<50 && $smspp<50){

  $statussmss=$statussmsp;
}







 
 
 


 
  $mjssss=$statussmss;
if(empty($mjssss)){
 $statussmsjs='';}
elseif($mjssss<50){

  $statussmsjs=50;
  
}
 elseif($mjssss>=50){

  $statussmsjs=$mjssss;
  
}
 
 
 
 
 
 
  $mjsssvv=$statussmsjs;
if(empty($mjsssvv)){
 
  $statussmsssv="";
  
  }
 
elseif($mjsssvv<50){

  $statussmsssv=$statussmsjs;
}
  
elseif($mjsssvv>=50){

  $statussmsssv=$statussmss;
}


 
 
 $mxc11=$ns;
 
 
 
 
 
 
 
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbio="";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbio="F";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="#ff6666";
 $statusfbio="D";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="#ff6666";
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
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
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

 $mxc11=$mjsssvv;
if(empty($mxc11)){
 $colorf1bio="yellow";
 $statusfbiobio="";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="#FF0000";
 $statusfbiobio=$gpa1; ;
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbiobio=$gpa2; ;}
 
 else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbiobio=$gpa3; }
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbiobio=$gpa4; }
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbiobio=$gpa5; 
} 
 
 
 
 else if(($mxc11 >=$rangx11) && ($mxc11<=$rangx12)){
 $colorf1bio="blue"; $statusfbiobio=$gpa6; 
} 
 
  else if(($mxc11 >=$rangx10) && ($mxc11<=$rangx14)){
 $colorf1bio="blue"; $statusfbiobio=$gpa7; 
} 
 
 
  else if(($mxc11 >=$rangx15) && ($mxc11<=$rangx16)){
 $colorf1bio="blue"; $statusfbiobio=$gpa8; 
} 

 $cc=($statusfbio*$richooTTTy);
$query33="update resit set c104='$richooTTTy'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take' and fname='$courseps'";








$query3="update resit set c103='$statusfbio'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take' and fname='$courseps'";




$query13="update resit set c106='$cc'
 where matricule='$mats' and departmet='$deptt' and levels='$level' and sex='2' and db1='$take' and fname='$courseps' ";

$query3="update resit set c104='$richooTTTy'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take' and fname='$courseps'";




 
$qry = mysql_query("select SUM(c101+c102) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$level' and sex='2' and db1='$take' and fname='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
 $savepsts=$row['total']; 

 
$qry = mysql_query("select SUM(c101+c102) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$level' and sex='3' and db1='$take' and fname='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
  $savepstss=$row['total']; 


 $mxcyy1= $savepsts;
 $mxcyy= $savepstss;
 
 if(empty($mxcyy)){

 $stmyyy=$savepsts;}
elseif($mxcyy<=""){

  $stmyyy=$savepsts; 
}
 
 elseif($mxcyy>""){

 $stmyyy=(($savepstss+$savepsts)/2); 
}


 $mxcyyy1=$savepstss;

 if(empty($mxcyyy1)){

 $stmyyyy1=$savepsts;}
elseif($mxcyyy1>="50" && $mxcyyy1<=""){

  $stmyyyy1=$savepstss; 
}
 
 elseif($mxcyyy1<$mxcyy1){

  $stmyyyy1=$mxcyy1; 
}




 elseif($mxcyyy1>$mxcyy1 &&  $stmyyy<50  ){

  $stmyyyy1=50; 
}

 elseif($mxcyyy1>$mxcyy1 &&  $stmyyy>=50  ){

  $stmyyyy1=$stmyyy; 
}

 elseif($mxcyyy1>=$mxcyy1 && $mxcyyy1<=$mxcyy1){

  $stmyyyy1=$mxcyyy1; 
}


 elseif($mxcyyy1>=$mxcyy1 && $mxcyyy1<=$mxcyy1){

  $stmyyyy1=$mxcyyy1; 
}




 elseif($mxcyyy1>'50' ){

  $stmyyyy1=$stmyyy; 
}
 elseif($mxcyyy1>'50' &&  $stmyyy>'50'){

  $stmyyyy1=$stmyyy; 
}
 elseif($mxcyyy1>'50' &&  $stmyyy<'50'){

  $stmyyyy1=$mxcyyy1; 
}
 
 
 $mxc11f=$stmyyyy1;
 
 if(empty($mxc11f)){

 $statusfbiogff="";}
elseif($mxc11f>=$rangx1 && $mxc11f<=$rangx2 ){

 $statusfbiogff=$gpa1; ;
}else if(($mxc11f >=$rangx3) && ($mxc11f<=$rangx4)){
 $colorf1bio="blue";
 $statusfbiogff=$gpa2; ;}
 
 else if(($mxc11f >=$rangx5) && ($mxc11f<=$rangx6)){
 $colorf1bio="blue";
 $statusfbiogff=$gpa3; }
 
 
else if(($mxc11f >=$rangx7) && ($mxc11f<=$rangx8)){
 $colorf1bio="blue";
 $statusfbiogff=$gpa4; }
 
 
 else if(($mxc11f >=$rangx9) && ($mxc11f<=$rangx10)){
 $colorf1bio="blue"; $statusfbiogff=$gpa5; 
} 
 
 
 
 else if(($mxc11f >=$rangx11) && ($mxc11f<=$rangx12)){
 $colorf1bio="blue"; $statusfbiogff=$gpa6; 
} 
 
  else if(($mxc11f >=$rangx10) && ($mxc11f<=$rangx14)){
 $colorf1bio="blue"; $statusfbiogff=$gpa7; 
} 
 
 
  else if(($mxc11f >=$rangx15) && ($mxc11f<=$rangx16)){
 $colorf1bio="blue"; $statusfbiogff=$gpa8; 
} 

 
  $statusfbiogff;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$query3eyy="update resit set c108='$statusfbiogff'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take' and fname='$courseps'";
 
 
 $xaf=($tm*$statusfbiogff);
$query3eyyy="update resit set c109='$xaf'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take' and fname='$courseps'";
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$query3ey="update resit set c107='$stmyyy'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take' and fname='$courseps'";
 
 
 
 
 
 
 
 
 
 
 
 
 

 $cc=($statusfbio*$richooTTTy);
 
 
 
$query13="update resit set c106='$cc'
 where matricule='$mats' and departmet='$deptt' and levels='$level' and sex='2' and db1='$take' and fname='$courseps' ";


mysql_query ($query13) or die ('could not updated:'.mysql_error());

mysql_query ($query3) or die ('could not updated:'.mysql_error());

mysql_query ($query3eyyy) or die ('could not updated:'.mysql_error());

mysql_query ($query3eyy) or die ('could not updated:'.mysql_error());

mysql_query ($query3ey) or die ('could not updated:'.mysql_error());


mysql_query ($query13) or die ('could not updated:'.mysql_error());

mysql_query ($query3) or die ('could not updated:'.mysql_error());
mysql_query ($query33) or die ('could not updated:'.mysql_error());



 ?>
		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">
<?php echo $richooTTTy;?>
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
		  <?php echo $statusfbio;?>  </div>
		 
		    </div>
		 
		
		
		 
		 
		 <?php } ?>
		 
	
		 <div style="float:left; width:70px; height:15px;  ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">
   </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		
		
		 <div style="float:left; width:70px; height:15px;  ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:5px;width:280px;font-size:11px; text-align:left;height:auto;">

TOTAL CREDITS ATTEMPTED:<?php 



$levels=$level+100;
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
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		
		
		 
		 
			 
		 <div style="float:left; width:70px; height:15px;  ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:5px;width:280px;font-size:11px; text-align:left;height:auto;">


TOTAL CREDITS EARNED:<?php 


$levels=$level+100;
$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 



printf("%01.2f",($save));?>

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		
		
		
		
		
		
		
		
		
		
		
		
		
			 
		 <div style="float:left; width:70px; height:15px;  ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:5px;width:280px;font-size:11px; text-align:left;height:auto;">



GPA CREDITS ATTEMPTED: <?php 


$levels=$level+100;

$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 


$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 


$gpacourses2=$richooTTTyss;
printf("%01.2f",($save));?>
		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
			 
		 <div style="float:left; width:70px; height:15px;  ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:5px;width:280px;font-size:11px; text-align:left;height:auto;">


GPA CREDITS EANRED: <?php 



$levels=$level+100;
$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$saves=$row['total']; 
 
$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$savettt=$row['total'];
 
$gpacredit2=$savettt;

$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$savetttt=$row['total'];
$gpacredit21=$savetttt;

$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);




  $richooTTTyssiuu=$num_rows; 
$gpacoursesy2= $richooTTTyssiuu;
   $mxcx=$gpacredit11+$gpacredit21;
 $mxcourses=$gpacourses1+$gpacoursesy2;
$gpacum=($mxcx/$mxcourses);
printf("%01.2f",($saves));
?>
		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			 
		 
		 
		 
		 <div style="float:left; width:70px; height:15px;  ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			 
		 
		 
		 
		 <div style="float:left; width:70px; height:15px;  ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">
SEMESTER GPA <?php 


$qry = mysql_query("select SUM(c106) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$level' and sex='2' and db1='$take' "); 
$row = mysql_fetch_assoc($qry); 
 $savept=$row['total']; 

 



$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
 $richooTTTyss=$row['total'];


  
 $mxc111t=$savept; 
  
if(empty($mxc111t)){
 $statusfbioopt="";}
elseif($mxc111t>0 ){
 
 $statusfbioopt=$mxc111t;
}
   $mxc1112t=$richooTTTyss; 
  
if(empty($mxc1112t)){
 $statusfbioop2t="";}
elseif($mxc1112t>0 ){
 
 $statusfbioop2t=$richooTTTyss;
}
  
  
  
 $mxc111yt=$savept; 
  
if(empty($mxc111yt)){
 echo  $statusfbiooput="";
  }
  elseif($mxc111yt>'' ){
 printf("%01.2f",($statusfbioopt/$statusfbioop2t));
}?>
		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
	  </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		  
		 <div style="float:left; width:70px; height:15px; ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">
 </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 <div style="float:left; width:70px; height:15px; ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">
 </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 <div style="float:left; width:70px; height:15px; ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">
 </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 <div style="float:left; width:70px; height:15px; ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">
 </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 <div style="float:left; width:70px; height:15px; ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">
		 
		 <?php 

$qry = mysql_query("select SUM(c108*c104) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$level' and sex='1' and db1='$take' "); 
$row = mysql_fetch_assoc($qry); 
 $savept19=$row['total']; 




$qry = mysql_query("select SUM(c108*c104) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$level' and sex='2' and db1='$take' "); 
$row = mysql_fetch_assoc($qry); 
  $savept20=$row['total']; 
  
  
  

$qry = mysql_query("select SUM(c104) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$level' and sex='1' and db1='$take' "); 
$row = mysql_fetch_assoc($qry); 
 $credit1s1t1=$row['total']; 


  

$qry = mysql_query("select SUM(c104) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$level' and sex='2' and db1='$take' "); 
$row = mysql_fetch_assoc($qry); 
 $credit1s2t2=$row['total']; 
  ?>
		
		 <DIV STYLE="float:left;width:280px; height:18PX;">
		 
		<b> CUMMULATIVE TOTAL GPA CREDIT EARNED :</b> <?php echo ($savept19+$savept20);?>
		 
		 
		 </DIV>
		 
		 <DIV STYLE="float:left;width:280px; height:18PX;">
		 
		<b> CUMMULATIVE TOTAL  CREDIT ATTEMPTED :</b> <?php echo 
 $mxt1sop=($credit1s1t1+$credit1s2t2);?>
		 
		 
		 </DIV>
<b>CUMMULATIVE GPA <?php



$qry = mysql_query("select SUM(c108*c104) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$level' and sex='1' and db1='$take' "); 
$row = mysql_fetch_assoc($qry); 
 $savept19=$row['total']; 




$qry = mysql_query("select SUM(c108*c104) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$level' and sex='2' and db1='$take' "); 
$row = mysql_fetch_assoc($qry); 
  $savept20=$row['total']; 
  
  

$qry = mysql_query("select SUM(c104) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$level' and sex='1' and db1='$take' "); 
$row = mysql_fetch_assoc($qry); 
 $credit1s1t1=$row['total']; 


  

$qry = mysql_query("select SUM(c104) as total
from resit  where matricule='$mats' and departmet='$deptt' and levels='$level' and sex='2' and db1='$take' "); 
$row = mysql_fetch_assoc($qry); 
 $credit1s2t2=$row['total']; 
  
  
  
  
  
  
 $mxop=($savept19+$savept20);

 $mxt1sop=($credit1s1t1+$credit1s2t2);




 
  
 $mxc111yt=$savept19; 
  
if(empty($mxc111yt)){
 $statusfbiooput="";
  }
  elseif($mxc111yt>'' ){
 printf("%01.2f",($mxop/$mxt1sop));
}













?></b> </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:15px; ">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; font-size:11px;width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:55px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">

		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		
		
		
		    </div>
		 
		    </div>
		 
		    </div>
		 
		    </div>
		 
		    </div>
		 
		    </div>
		 
		
		
		 
		    </div>
		 
		    </div>
		 
		    </div>
		 
		
		
		
		
		 
		    </div>
		 
		    </div>
		 
		    </div>
		 
		    </div>
		 
		    </div>
		 
		    </div>
		
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		    </div>
		 
		 
		 
			 
		 
		 <?php } ?>
		 
		    </div>
		 