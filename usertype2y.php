<?php 
include 'dbcs.php';
page_protect();


 $notes=$_SESSION['user_name'];







?><?php
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
$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $t1=$row['tel'];
$t2=$row['fax'];
?>

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
$query="select * from gradebb where roll='4'";
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
$query="select * from gradebb where roll='5'";
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
$query="select * from gradebb where roll='6'";
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
$query="select * from gradebb where roll='7'";
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
$query="select * from gradebb where roll='8'";
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
$query="select * from gradebb where roll='9'";
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
body{background:#fff;}
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
$query="select * from subject where department='$t1' and year1='$t2' AND extra='1'";
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
$query="select * from subject where department='$t1' and year1='$t2' AND extra='2'";
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
$query="select * from subject where department='$t1' and year1='$t2' AND extra='3'";
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
$query="select * from subject where department='$t1' and year1='$t2' AND extra='4'";
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
$query="select * from subject where department='$t1' and year1='$t2' AND extra='5'";
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
$query="select * from subject where department='$t1' and year1='$t2' AND extra='6'";
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
$query="select * from subject where department='$t1' and year1='$t2' AND extra='7'";
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
$query="select * from subject where department='$t1' and year1='$t2' AND extra='8'";
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
$query="select * from subject where department='$t1' and year1='$t2' AND extra='9'";
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
$query="select * from subject where department='$t1' and year1='$t2' AND extra='10'";
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
<?php } ?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd"> 
<html>
	<head>
		<title>HIGHER INSTITUTE OF MANAGEMENT STUDIES BUEA </title>
		<link rel="stylesheet" type="text/css" media="all" href="style.css" />
		<script type="text/javascript" src="tabview.js"></script>
		
		<!-- -----------Links Tab View scripts-------------- -->
		<link rel="stylesheet" type="text/css" href="tabview.css" />
		<style>
	body{background:#fff;}
	.submit:hover {
		background-color: #1bc5b3;
		cursor: pointer;
	}
		
		</style>
	</head>
	
	<body>		
	
				<div class="home">
					
					<div style="float:left; width:630px; height:700px;">
					
				
<?php
$query="select * from courses where db1='$take'  and fname='$notes' and departmet='$t1' and levels='$t2'order by levels ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>	
					
					
					
					
		  <div style="margin:auto; width:800px; height:680px; background:url(reports.png);">
		 
		 <div style="float:left; width:800px; margin-top:20px; height:600px;">
		 <div style="float:left; width:140px;  height:100px; ">
		  <div style="float:left; margin-top:2px; margin-left:10px;">
		 <img src="logo.png" width="100px" height="100px" >

		 </div>
		 
		 </div>
		 
		 
		  <div style="float:left; width:360px;COLOR:#1188aa;  height:100px; ">
		 
		 
		  <div style="float:left;FONT-SIZE:22PX; width:300px;margin-top:0px;font-family: �Times New Roman�, Times, serif;  height:100px; ">

		  <div style="float:left;FONT-SIZE:20PX; width:250px; HEIGHT:30PX;">
		  
		  <b>HIGHER INSTITUTE </b>
		 
		 </div> 
		 
		  <div style="float:left;FONT-SIZE:39PX;font-family:script;margin-TOP:-20px;margin-left:-40px; width:30px; HEIGHT:30PX;">
		 of
		 
		 </div>
		 
		 <div style="float:left;FONT-SIZE:19PX; width:390px; HEIGHT:30PX;">
		  
		  <b>MANAGEMENT STUDIES (HIMS) BUEA </b>
		 
		 </div> 
		 
		 <div style="float:left;FONT-SIZE:14PX; width:390px; HEIGHT:30PX;">
		  P.O. BOX 462 molyko - Buea<br>
		 Contact: +237 7982 1672/ 9636 8834
		 </div> 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 </div>
		 
		 </div>
		 
		  <div style="float:left; width:300px;  height:100px;FONT-FAMILY;ARIAL; ">
		  
		  <div style="float:left; width:300px;FONT-SIZE:13PX;FONT-FAMILY:ARIAL;TEXT-ALIGN:CENTER;  height:40px; BACKGROUND:#ccc; BORDER:1PX SOLID #000;">
		  
		  
		  <div style="float:left; MARGIN-TOP:10PX;TEXT-ALIGN:CENTER;width:300px;COLOR:#000;"><B>
		  INDIVIDUAL - RESULT- SLIP</B>
		 
		 </div>
		 </div>
		 
		 </div>
		 
		  <div style="float:left; width:500px;margin-top:20px;  height:30px;"></div>
		 
		  <div style="float:left; width:300px;margin-top:30px;  height:30px; 
		  ">
		  <div style="float:left; MARGIN-LEFT:10PX; width:289px; HEIGHT:50PX;margin-top:-23px;  border:1px solid #ccc;">
		  
		  
		  <div style="float:left; width:188px; HEIGHT:25PX;border-BOTTOM:1px solid #ccc;border-RIGHT:1px solid #ccc;
		  
		  TEXT-ALIGN:CENTER; FONT-FAMILY:VERDANA;FONT-SIZE:13PX;">
		 
		  <div style="float:left; MARGIN-TOP:5PX;  TEXT-ALIGN:CENTER;width:188px;"> <B>ACADEMIC YEAR</B></DIV>
		  
		  
		  </DIV>
		  
		  
		  <div style="float:left; width:100px; height:25px; font-weight:normal;border-BOTTOM:1px solid #ccc;">
		  
		  
		  
		  <div style="float:left; MARGIN-TOP:5PX;  TEXT-ALIGN:CENTER;width:100px;"> <B><?PHP  $innn=date('Y');
		  
		  
		echo ($innn-1);  ?>/<?PHP ECHO ($innn);?></B></DIV>
		  
		  
		  </DIV>
		  
		  
		    
		  <div style="float:left; width:188px; HEIGHT:25PX;border-RIGHT:1px solid #ccc;
		  
		  TEXT-ALIGN:CENTER; FONT-FAMILY:VERDANA;FONT-SIZE:13PX;">
		 
		  <div style="float:left; MARGIN-TOP:5PX;  TEXT-ALIGN:CENTER;width:158px;"> <B>SEX</B></DIV>
		  
		  
		  </DIV>
		  
		  
		  <div style="float:left; width:100px; height:25px; font-weight:normal;">
		  
		  
		  
		  <div style="float:left; MARGIN-TOP:5PX;  TEXT-ALIGN:CENTER;width:100px;"> <B><?PHP ECHO $row['sex'];?></B></DIV>
		  
		  
		  </DIV>
		  
		  
		  </div>
		  
		  
		  </div>
		  <div style="float:left; width:800px;font-family:arial;font-size:14px;  height:70px;border-top:1px solid #ccc; 
		  ">
		  
		  
		  <div style="float:left; width:178px; border-left:1px solid #ccc;  height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		 
		 &nbsp;<b>STUDENT NAME </b>:
		 </div>
		 
		  <div style="float:left; width:250px;   height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		  <b><?php $deptt=$row['departmet'];
		  $level=$row['levels'];echo $fname=$row['fname'];?></b>
		 </div>
		 
		  <div style="float:left; width:367px;   height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		 <div style="float:left; width:367px;margin-left:265px;">

		 </div>
		  </div>
		 	  
		  <div style="float:left; width:178px; border-left:1px solid #ccc;  height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		 
		 &nbsp;<b>MATRICULE </b>:
		 </div>
		 
		  <div style="float:left; width:250px;   height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		 
		<?php echo $mats=$row['matricule'];?>
		 </div>
		 
		  <div style="float:left; width:100px;   height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		 
Date of Birth
		 </div>
		  <div style="float:left; width:80px;   height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		 
<?php echo $row['cxx2'];?>
		 </div>
		 
		 
		 
		 <div style="float:left; width:100px;   height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		 CODE
		 </div>
		  <div style="float:left; width:84px;   height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		 <?php echo $row['cxx1'];?>
		 </div>
		 
		<div style="float:left; width:178px; border-left:1px solid #ccc;   height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		 
		 &nbsp;<b>FIELD OF STUDY </b>:
		 </div>
		 
		  <div style="float:left; width:150px;   height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		 
		BUSINESS
		 </div>
		 
		  <div style="float:left; width:97px;   height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		DEPARTMENT </div>
		    <div style="float:left; width:164px;   height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		
<?php echo $row['departmet'];?>
</div>
		 <div style="float:left; width:100px;   height:25px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;">
		 LEVEL<?php echo $row['levels'];?>


		 </div> 
		   <div style="float:left; width:103px; border-right:1px solid #ccc;  height:25px;border-bottom:1px solid #ccc;">
		
		 </div> 
		 
		 	  <div style="float:left; width:800px;font-family:arial;font-size:18px;  height:20px;
		 text-align:center; margin-top:0px;color:#000; font-weight:bold;">
		 
		  <div style="float:left;margin-top:4px;width:800px;text-align:center;"> SECOND SEMESTER </div>
		  </div>
		 
		 
		 
		  
		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; margin-top:20px;background:#000;color:#fff; height:40px;border:1px solid #ccc; 
		  ">
		  <div style="float:left; width:130px;height:25px;text-align:center;margin-top:5px;border-right:1px solid #fff;">COURSE CODE</div>
		   <div style="float:left; width:300px;height:25px;text-align:LEFT;margin-top:5px;border-right:1px solid #fff;">&nbsp;COURSE TITLE</div>
		 
		  <div style="float:left; width:100px;height:25px;text-align:CENTER;margin-top:0px;border-right:1px solid #fff;">&nbsp;CREDIT VALUE</div>
		   <div style="float:left; width:60px;height:25px;text-align:CENTER;margin-top:0px;border-right:1px solid #fff;">&nbsp;CA/30</div>
		 
		   <div style="float:left; width:65px;height:25px;text-align:CENTER;margin-top:0px;border-right:1px solid #fff;">&nbsp;EXAM/70</div>

		   <div style="float:left; width:65px;height:25px;text-align:CENTER;margin-top:0px;border-right:1px solid #fff;">&nbsp;TOTAL</div>
		   
		   <div style="float:left; width:65px;height:25px;text-align:CENTER;margin-top:0px;">&nbsp;GRADE</div>
		 </div> <?php 


$query = mysql_query("select  * from resit where db1='$take' and matricule='$mats' and departmet='$deptt' and sex='2' and levels='$level'order by fname ASC"); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 
		 
		 
		 
		 ?>

		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; height:auto; ">
		
		  <div style="float:left;font-weight:normal; width:130px;font-family:arial;height:25px;border-bottom:1px dashed #ccc; border-left:1px solid #ccc; 
		border-right:1px solid #ccc;; ">
		
		  <div style="float:left;margin-top:5px;margin-left:2px;">
		
		<?php echo $courseps=$row['fname'];
		
		
		$exam=$row['c102'];
		
		$cas=$row['c101'];?>
		
		</div>
		</div>
			  <div style="float:left;font-weight:normal;border-bottom:1px dashed #ccc; width:300px;font-family:arial;height:25px;border-left:1px solid #ccc; 
		border-right:1px solid #ccc; #ccc; ">
		  <div style="float:left;margin-top:5px;margin-left:2px;">
		<?php 
$qry = mysql_query("select  db1 as total
from subject where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 

$qry = mysql_query("select  credit as total
from credits where subject='$courseps' "); 
$row = mysql_fetch_assoc($qry); 

$richooTTTy=$row['total']; 
?>
		</div>
		
		</div>

		
		

			  <div style="float:left;font-weight:normal;border-bottom:1px dashed #ccc; text-align:center;width:100px;font-family:arial;height:25px;border-left:1px solid #ccc; 
		border-right:1px solid #ccc;; ">
		  <div style="float:left;margin-top:5px;margin-left:28px;">
		
<?php echo 
$tm=$richooTTTy;?>
		

		</div>
		
		</div>
		

			  <div style="float:left;font-weight:normal; border-bottom:1px dashed #ccc;text-align:center;width:60px;font-family:arial;height:25px;border-left:1px solid #ccc; 
		border-right:1px solid #ccc; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		
<?php echo 
$cas;?>
		

		</div>
		
		</div>
		

			  <div style="float:left;font-weight:normal;text-align:center;border-bottom:1px dashed #ccc; width:62px;font-family:arial;height:25px;border-left:1px solid #ccc; 
		border-right:1px solid #ccc; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		
<?php echo 
$exam;?>
		

		</div>
		
		</div>
		
		
			  <div style="float:left;font-weight:normal;text-align:center;border-bottom:1px dashed #ccc; width:62px;font-family:arial;height:25px;border-left:1px solid #ccc; 
		border-right:1px solid #ccc;; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		
<?php $ns=
($exam+$cas); echo $ns;?>
		

		</div>
		
		</div>
		
		
			  <div style="float:left;font-weight:normal;text-align:center;border-bottom:1px dashed #ccc; width:71px;font-family:arial;height:25px;border-left:1px solid #ccc; ">
			  <div style="float:left;font-weight:normal;text-align:center;border-bottom:1px dashed #ccc; width:71px;font-family:arial;height:25px;border-left:1px solid #ccc; 
		border-right:1px solid #ccc; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		
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
  else if(($mxc11 >=$rangx13) && ($mxc11<=$rangx14)){
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

$manS=($exam+$cas);
$man=($exam+$cas)/5;
$ftsS=($manS*$tm);

$fts=($man*$tm);
$query3="update resit set c103='$statusfbio'
 where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take' and fname='$courseps'";







mysql_query ($query3) or die ('could not updated:'.mysql_error());

 ?>

		</div>

				
		</div>

		</div>





		
		
		
		 
		 <?php } ?>
		 
		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; height:auto; ">
		
		  <div style="float:left;font-weight:normal; width:130px;font-family:arial;height:30px;
		border-bottom:1px solid #ccc; ">
		
		  <div style="float:left;margin-top:5px;margin-left:2px;">
		
<------------------------
		
		</div>
		</div>
			  <div style="float:left;font-weight:normal; width:300px;font-family:arial;height:30px;
border-bottom:1px solid #ccc; ">
		  <div style="float:left;margin-top:5px;margin-left:2px;">
	
<b>SEMESTER GPA: </b><?php 



$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
    $save=$row['total']; 
 


$qry = mysql_query("select sum(c103) as total
from resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$saves=$row['total']; 
 


$qry = mysql_query("select * FROM  resit where matricule='$mats' and departmet='$deptt'and levels='$level' and sex='2' and db1='$take'  "); 
$num_rows=mysql_num_rows($qry);
 $richooTTTyss=$num_rows; 





$mxc002=$save;
if(empty($mxc002)){
 $statusfbio="";
 }
elseif($mxc002>'' ){
 $colorf1bio="#FF0000";
 $statusfbio=($save/$richooTTTyss);
}
printf("%01.2f",($statusfbio));
$queryf3="update courses set c104='$statusfbio'
 where matricule='$mats' and departmet='$deptt'";







mysql_query ($queryf3) or die ();?>----



		printed on ---

		</div>
		
		</div>

		
		

			  <div style="float:left;font-weight:normal; text-align:center;width:100px;font-family:arial;height:30px;border-bottom:1px solid #ccc; ">
		  <div style="float:left;margin-top:5px;margin-left:28px;">


		</div>
		
		</div>
		

			  <div style="float:left;font-weight:normal; text-align:center;width:60px;font-family:arial;height:30px;border-bottom:1px solid #ccc; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
<?php echo date('j/m/Y');





$rs_duplicate = mysql_query("select count(*) as total from average where departmet='$deptt'and levels='$level' and sex='2' and dbid='$take' and fname='$mats'") or die(mysql_error());
list($total) = mysql_fetch_row($rs_duplicate);

if ($total > 0)
{
$err[] = "ERROR - This Course has been filled see the dean of studies! .";
//header("Location: finances.php?msg=$err");
//exit();
}


if(empty($err)) {
  

$query4="insert into average  set av='$ui',departmet='$deptt',levels='$level',dbid='$take' ,total='$ftsS',fname='$mats',sex='2' ";







mysql_query ($query4) or die ('could not updated:'.mysql_error());






}




?>

		</div>
		
		</div>
		

			  <div style="float:left;font-weight:normal;text-align:center; width:62px;font-family:arial;height:30px;border-bottom:1px solid #ccc; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">
		


		</div>
		
		</div>
		
		
			  <div style="float:left;font-weight:normal;text-align:center; width:62px;font-family:arial;height:30px;border-bottom:1px solid #ccc; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">


		</div>
		
		</div>
		
		
			  <div style="float:left;font-weight:normal;text-align:center; width:71px;font-family:arial;height:30px;border-bottom:1px solid #ccc; ">
		  <div style="float:left;margin-top:5px;margin-left:22px;">

		

		</div>
		
		</div>
		  </div>
		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; height:125px; ">
		
			  <div style="float:left;font-weight:normal;text-align:right; margin-top:40px; width:71px;font-family:arial;height:60px;">
		  </div>
			  <div style="float:left;font-weight:normal;text-align:right; margin-top:40px; width:529px;font-family:arial;height:60px;">
		  </div>
		  
		  
		    <div style="float:left;font-weight:normal;text-align:right; margin-top:40px; width:171px;font-family:arial;height:60px;"><b>
SIGNATURE OF DEAN</b>
		  </div>
		  
		  
		  
		  
		  
		  <div style="float:left;font-weight:normal; width:800px;font-family:arial;font-size:14px; height:45px; ">
		  
		  
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
		 
		 
		 <?php } ?>
		    </div>
		 
		    </div>
		 
		    </div>
		 
		    </div>
		 
		 
		    </div>
		 
		    </div>