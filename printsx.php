<?PHP
INCLUDE 'dbcs.PHP';




 $levels=$_POST["levels"];
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
<head><TITLE>Detail Transcript</TITLE>
 <link rel="stylesheet" href="test.css" 
type="text/css">
<style>
#container{float:left; width:1300px; height:150px; border:1px solid #000;

}
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
$query="select * from $table where db1='$take' and fname='$rollss'
";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
		 <BR><div style="margin:auto; width:1308px; height:1300px; MARGIN-TOP:0PX; background:url(report.png);">
		 
		 
		 
		 
		 
		 <div style="float:left; width:1306px; height:1098px; border:1px solid #000;">
		 
		 
		 
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
		
			 <div style="float:left; width:449px; height:32px;color:#000;">	
			
			&nbsp;&nbsp;&nbsp;STUDENT NAME
		    </div>
			 <div style="float:left; width:300px; height:32px;color:#000;font-size:13px;">	
			&nbsp;&nbsp;&nbsp;<?php echo $row['fname'];?><?php  $deptt=$row['departmet'];
		 
		 $level=$row['levels'];?>
		    </div>
			
			
		 	 <div style="float:left; width:178px; height:50px;TEXT-ALIGN:CENTER; MARGIN-LEFT:5PX;">
ACCADEMIC YEAR <BR><?PHP ECHO $take;?>
		 
		 
		    </div>
			
			
			
			
			
			
			
			
			
		    </div>
			
			
			 <div style="float:left; width:200px; height:32px;color:#000;">	
			
			
		    </div>
			
			
		 
		    </div>
			
			
		 
		    </div>
		 
		 
		 <div style="float:left;margin-left:2px;margin-top:2px; width:1300px; height:100px; color:#000; border:1px solid #000;">
		 
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
		FIELD OF STUDY :
		 
		 </DIV> <div style="float:left; width:380px;MARGIN-TOP:50PX; height:30px; TEXT-ALIGN:CENTER;">
		 
   BUSINESS
		  </DIV>
		 
		  
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
		DEPARTMENT<BR><BR><?php echo $row['departmet'];
		 ?>
		 
		 </DIV>
		 
		    </div>
			
		 <div style="float:left; width:309px; height:100px;">
			
		   <div style="float:left; MARGIN-TOP:10PX;width:300px;FONT-WEIGHT:BOLD; height:30px; TEXT-ALIGN:CENTER;">
			This transcript is not valid widthout the Seal, signature of the Director and that of the Dean of studies
		    </div>
		    </div>
			</div>
				
	
		 <div style="float:left; width:1300px; height:40px;background:#ccc; color:#000;font-size:11px; border:1px solid #000;MARGIN-TOP:10PX;">
		 
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
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;font-weight:bold;height:25px;">CA/30
		    </div>
		 
		    </div>
		 
		   <div style="float:left; width:60px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;font-weight:bold;height:25px;">
EXAM/70
		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:58px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;font-weight:bold;height:25px;">TOTAL
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
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;font-weight:bold;height:25px;">CA/30
		    </div>
		 
		    </div>
		 
		   <div style="float:left; width:60px; height:40px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;font-weight:bold;height:25px;">
EXAM/70
		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:58px; height:40px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;font-weight:bold;height:25px;">TOTAL
		    </div>
		 
		    </div>
		 
		 
		 

		 
		 
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		
		 <div style="float:left; width:1350px; heigh:auto;">
		
		
		
		
		
		 <div style="float:left; width:653px; height:15px; color:#000;font-weight:normal;">
				 
				 
				 
				 
				 
		 <div style="float:left; width:70px; height:15px; border-left:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:15px;">

		    </div>
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:15px;">				<?php 


$qry = mysql_query("select  db1 as total
from resit where matricule='$mats' and sex='1'"); 
$row = mysql_fetch_assoc($qry); 
 $db1=$row['total']; 
		 
		 ?>
		
<b>First Semester First Year:-<?php echo $db1;?>
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
		 
		 
		 
				 
	
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 <div style="float:left; width:658px; height:780px; color:#000;font-weight:normal;">
				 
				 
			
		 <div style="float:left; width:70px; height:780px;border-bottom:1px solid #000; border-left:1px solid #000; border-right:1px solid #000;">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:780px;border-bottom:1px solid #000; border-right:1px solid #000;">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:780px;border-bottom:1px solid #000; border-right:1px solid #000;">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:780px;border-bottom:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:60px; height:780px;border-bottom:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:auto;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:780px;border-bottom:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:58px; height:780px;border-bottom:1px solid #000; border-right:1px solid #000;">
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
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:15px;"><?php 


$qry = mysql_query("select  db1 as total
from resit where matricule='$mats' and sex='1'"); 
$row = mysql_fetch_assoc($qry); 
 $db1=$row['total']; 
		 ?>
<b>Second Semester First Year:-<?php echo $db1;?>
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
				 
				 
			
		 <div style="float:left; width:70px; height:780px;border-bottom:1px solid #000;  border-right:1px solid #000;">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:780px;border-bottom:1px solid #000; border-right:1px solid #000;">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
		  <div style="float:left; width:60px; height:780px;border-bottom:1px solid #000; border-right:1px solid #000;">
		  
		  
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
		 
		   <div style="float:left; width:55PX; height:780px;border-bottom:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:55px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
			
			
			
			
			
			
			
			
			
			
			
			
		   <div style="float:left; width:55px; height:780px;border-bottom:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:auto;">


		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:780px;border-bottom:1px solid #000; border-right:1px solid #000;">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; text-align:center;height:auto;">

		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:62px; height:780px;border-bottom:1px solid #000; border-right:1px solid #000;">
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
($cas); 


echo  $mxc11=$ns;
 
 



 ?>
		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;"><?PHP ECHO $mx=($exam);?>
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
		 <?PHP ECHO ($exam+$cas);?>  </div>
		 
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


EXAM/70 EARNED:<?php 



$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 


$qry = mysql_query("select sum(c105) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$savye=$row['total']; 

$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='1' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 



printf("%01.2f",($savye));?>

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



TOTAL CREDITS EARN: <?php 



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
SEMESTER AVERAGE <?php 



$qry = mysql_query("select c127 as total
from  courses where matricule='$mats' and departmet='$deptt'and levels='$level'  and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$savept=$row['total']; 
 

printf("%01.2f",$ui=($savept));






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
		  
		  
	<?php 


$qry = mysql_query("select  db1 as total
from resit where matricule='$mats' and sex='3'"); 
$row = mysql_fetch_assoc($qry); 
 $db1=$row['total']; 
		 
		 ?>
		
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">
<b>RESIT SESSION <?php echo $db1;?></b>  </div>
		 
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
($cas); 


echo  $mxc11=$ns;
 
 



 ?>
		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;"><?PHP ECHO $mx=($exam);?>
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
		 <?PHP ECHO ($exam+$cas);?>  </div>
		 
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
		 
		
		
		 
		 
		 <div style="float:left; width:70px; height:15px; border-left:1px solid #000; ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  		  	<?php 


$qry = mysql_query("select  db1 as total
from resit where matricule='$mats' and levels='300' and sex='1'"); 
$row = mysql_fetch_assoc($qry); 
 $db1=$row['total']; 
		 
		 ?>
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">
<b>First Semester Second Year</b> </div>
		 
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

$levels=$level+100;
$query = mysql_query("select  * from resit where db1='$take' and matricule='$mats' and departmet='$deptt' and sex='1' and levels='$levels'order by fname ASC"); 

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
($cas); 


echo  $mxc11=$ns;
 
 



 ?>
		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;"><?PHP ECHO $mx=($exam);?>
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
		 <?PHP ECHO ($exam+$cas);?>  </div>
		 
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
		 
		
		
		 <div style="float:left; width:70px; height:15px; border-left:1px solid #000; ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:5px;width:280px;font-size:11px; text-align:left;height:auto;">

TOTAL CREDITS ATTEMPTED:<?php 



$levels=$level+100;
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


EXAM/70 EARNED:<?php 



$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 
$qry = mysql_query("select sum(c105) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$savye=$row['total']; 


$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='1' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
  $richooTTTyss=$num_rows; 



printf("%01.2f",($savye));?>

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



TOTAL CREDITS EARN: <?php 


$levels=$level+100;

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
SEMESTER AVERAGE <?php 



$levels=$level+100;
$qry = mysql_query("select c127 as total
from  courses where matricule='$mats' and departmet='$deptt'and levels='$levels'  and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$savept2=$row['total']; 
 

printf("%01.2f",$ui=($savept2));



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
		 
		
		
		
		 <div style="float:left; width:70px; height:15px; border-left:1px solid #000; ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  	<?php 


$qry = mysql_query("select  db1 as total
from resit where matricule='$mats' and levels='300' and sex='3'"); 
$row = mysql_fetch_assoc($qry); 
 $db1=$row['total']; 
		 
		 ?>
		
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">
<b>RESIT SESSION <?php echo $db1;?></b>  </div>
		 
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
$levels=$level+100;

$query = mysql_query("select  * from resit where db1='$take' and matricule='$mats' and departmet='$deptt' and sex='3' and levels='$levels'order by fname ASC"); 

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
($cas); 


echo  $mxc11=$ns;
 
 



 ?>
		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;"><?PHP ECHO $mx=($exam);?>
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
		 <?PHP ECHO ($exam+$cas);?>  </div>
		 
		    </div>
		 
		
		
		 
		 
		 </div>
		 <?php } ?>
		 
		 
		 
		 
		 










	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
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
($cas); 


echo  $mxc11=$ns;
 
 



 ?>
		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;"><?PHP ECHO $mx=($exam);?>
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
		 <?PHP ECHO ($exam+$cas);?>  </div>
		 
		    </div>
		 
		
		
		 
		 
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
		 </B>
		 
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


EXAM/70 EARNED:<?php 


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



TOTAL CREDITS EARN: <?php 


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
SEMESTER AVERAGE <?php 



$levels=$level+100;
$qry = mysql_query("select c128 as total
from  courses where matricule='$mats' and departmet='$deptt'and levels='$level'  and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$savept3=$row['total']; 
 

printf("%01.2f",$ui=($savept3));


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
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 <div style="float:left; width:70px; height:15px; ">
		 
		 
		 
		 
		 <DIV STYLE="float:left;margin-left:5px; width:70px;font-size:11px; text-align:center;height:auto;">

		    </div>
		 
		 
		 
		 
		    </div>
		 
		 
		  <div style="float:left;width:280px; height:15px; ">
		  
		  
		  
		  
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">
<b></b> </div>
		 
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
		  
		  
		  
		  		  	<?php 


$qry = mysql_query("select  db1 as total
from resit where matricule='$mats' and levels='300' and sex='2'"); 
$row = mysql_fetch_assoc($qry); 
 $db1=$row['total']; 
		 
		 ?>
		 <DIV STYLE="float:left;margin-left:10px;width:280px;font-size:11px; text-align:left;height:auto;">
<b>Second Semester Second Year <?php echo $db1;?></b> </div>
		 
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
		 
		 
		 
		 
<?php 
$levels=$level+100;

$query = mysql_query("select  * from resit where db1='$take' and matricule='$mats' and departmet='$deptt' and sex='2' and levels='$levels'order by fname ASC"); 

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


 $mxc11=$ns;
 
 
if(empty($mxc11)){$colorf1bio=""; echo $statusfbio="F";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="";
 $statusfbio="F";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
}else if(($mxc11 >=$rangx3) && ($mxc11<=$rangx4)){
 $colorf1bio="blue";
 $statusfbio="D";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}else if(($mxc11 >=$rangx5) && ($mxc11<=$rangx6)){
 $colorf1bio="blue";
 $statusfbio="C";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
else if(($mxc11 >=$rangx7) && ($mxc11<=$rangx8)){
 $colorf1bio="blue";
 $statusfbio="B";
 echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';}
 
 
 else if(($mxc11 >=$rangx9) && ($mxc11<=$rangx10)){
 $colorf1bio="blue"; $statusfbio="A"; echo'<div style=" color:'. $colorf1bio.';">'.$statusfbio.'</div>';
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
if(empty($mxc11)){$colorf1bio=""; echo $statusfbio="F";}
elseif($mxc11>=$rangx1 && $mxc11<=$rangx2 ){
 $colorf1bio="";
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

 ?>
		

		    </div>
		 
		    </div>
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px; font-size:11px;text-align:center;height:auto;"><?PHP ECHO $mx=($exam+$cas);?>
		    </div>
		 
		    </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		   <div style="float:left; width:60px; height:15px; ">
		 <DIV STYLE="float:left;margin-left:0px; width:60px;font-size:11px; text-align:center;height:auto;">
		  <?PHP ECHO ($mx*$richooTTTy);?>  </div>
		 
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
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$take'  "); 
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


EXAM/70 EARNED:<?php 


$levels=$level+100;
$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$take'  "); 
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



TOTAL CREDITS EARN: <?php 


$levels=$level+100;

$qry = mysql_query("select sum(c104) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; 
 



$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$levels' and sex='2' and db1='$take'  "); 
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
SEMESTER AVERAGE <?php 



$levels=$level+100;
$qry = mysql_query("select c128 as total
from  courses where matricule='$mats' and departmet='$deptt'and levels='$levels'  and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$savept4=$row['total']; 
 

printf("%01.2f",$ui=($savept4));


 

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
		
		
		
		
		
		
		
		
		
		
		</b>
		
		
		
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
		
		
		</b>
		 </div> </div>
		 
		
		</b>
		 </div> </div>
		 </div></div></div></div>
		   <div style="margin:auto; width:1300px; height:40px; margin-top:-100px;font-size:14px; text-align:center;font-weight:normal;">
		    <div style="float:left; width:800px; height:40px; margin-top:-60px;"></div>
		   <div style="float:left; width:400px; height:40px; margin-top:-60px;"></div> </div> </div> </div> </div> </div>
		 <?php } ?>  </div> </div> </div>
		  