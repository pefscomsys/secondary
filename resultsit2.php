<?php include 'dbc.php';
?>



<?php
$roll=$_GET["1"];
$query="select * from matsub where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off1=$row['mgg'];


?><?php } ?>

<?php
$roll=$_GET["2"];
$query="select * from matsub where roll='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off2=$row['mgg'];


?><?php } ?>


<?php
$roll=$_GET["3"];
$query="select * from matsub where roll='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off3=$row['mgg'];


?><?php } ?>





<?php
$roll=$_GET["4"];
$query="select * from matsub where roll='4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off4=$row['mgg'];


?><?php } ?>



<?php
$roll=$_GET["5"];
$query="select * from matsub where roll='5'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off5=$row['mgg'];


?><?php } ?>





<?php
$roll=$_GET["6"];
$query="select * from matsub where roll='6'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off6=$row['mgg'];


?><?php } ?>



<?php
$roll=$_GET["7"];
$query="select * from matsub where roll='7'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off7=$row['mgg'];


?><?php } ?>


<?php
$roll=$_GET["8"];
$query="select * from matsub where roll='8'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off8=$row['mgg'];


?><?php } ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<title><?php echo $school;?></title>
        <link rel="shortcut icon" href="pef.png"> 
	<style>
	</style>
	
	</head>
	<body>
	<div style="float:left; width:700px; height:400px;">
	
	
	<div style="float:left; width:100px; height:400px;">
	
	</div>
	
	
	<div style="float:left; width:300px; height:400px;">
	
	<div style="float:left; width:208px;text-align:center; height:57px; background:url(age.png); font-family:impact;">
	<a href="sit1.php">
	<div style="float:left; width:208px; margin-top:10px;">
<?php echo $off1;?>
	
	</div></a>
	
	</div>
	
	<div style="float:left; width:92px; margin-top:10px;"></div>
	
	
		<div style="float:left; width:208px;text-align:center; height:57px; background:url(age.png); font-family:impact;">
	<a href="sit2.php">
	<div style="float:left; width:208px; margin-top:10px;">
<?php echo $off2;?>
	
	</div></a>
	
	</div>
	
	<div style="float:left; width:92px; margin-top:10px;"></div>
	
		<div style="float:left; width:208px;text-align:center; height:57px; background:url(age.png); font-family:impact;">
	<a href="sit3.php">
	<div style="float:left; width:208px; margin-top:10px;">
<?php echo $off3;?>
	
	</div></a>
	
	</div>
	
	<div style="float:left; width:92px; margin-top:10px;"></div>
		<div style="float:left; width:208px;text-align:center; height:57px; background:url(age.png); font-family:impact;">
	<a href="sit4.php">
	<div style="float:left; width:208px; margin-top:10px;">
<?php echo $off4;?>
	
	</div></a>
	
	</div>
	
	<div style="float:left; width:92px; margin-top:10px;"></div>
	
		<div style="float:left; width:208px;text-align:center; height:57px; background:url(age.png); font-family:impact;">
	<a href="sit5.php">
	<div style="float:left; width:208px; margin-top:10px;">
<?php echo $off5;?>
	
	</div></a>
	
	</div>
	
	<div style="float:left; width:92px; margin-top:10px;"></div>
	
		<div style="float:left; width:208px;text-align:center; height:57px; background:url(age.png); font-family:impact;">
	<a href="sit6.php">
	<div style="float:left; width:208px; margin-top:10px;">
<?php echo $off6;?>
	
	</div></a>
	
	</div>
	
	<div style="float:left; width:92px; margin-top:10px;"></div>
	
		<div style="float:left; width:208px;text-align:center; height:57px; background:url(age.png); font-family:impact;">
	<a href="sit7.php">
	<div style="float:left; width:208px; margin-top:10px;">
<?php echo $off7;?>
	
	</div></a>
	
	</div>
	
	<div style="float:left; width:92px; margin-top:10px;"></div>
	
		<div style="float:left; width:208px;text-align:center; height:57px; background:url(age.png); font-family:impact;">
	<a href="sit8.php">
	<div style="float:left; width:208px; margin-top:10px;">
<?php echo $off8;?>
	
	</div></a>
	
	</div>
	
	<div style="float:left; width:92px; margin-top:10px;"></div>
	
	
		<div style="float:left; width:208px;text-align:center; height:57px; background:url(age.png); font-family:impact;">
	<a href="sit9.php">
	<div style="float:left; width:208px; margin-top:10px;">
<?php echo $off9;?>
	
	</div></a>
	
	</div>
	
	<div style="float:left; width:92px; margin-top:10px;"></div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</div>
	
	</div>
	
	
	
	
	</body>
	</html>