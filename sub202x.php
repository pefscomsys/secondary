<?php include 'dbcs.php';
 $roll=$_GET['roll'];
 $mmj=$roll;
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
	body{ 
background:url(Tulips.jpg);
		font-family:Tahoma, Geneva, sans-serif;
		font-size:18px;
	}
	</style>
	
	</head>
	<body>
	<div style="float:left; width:700px; height:400px;">
	
	
	<div style="float:left; width:208px;text-align:center; height:37px; background:#efefef; font-family:impact;">
	<a href="changesub200.php?roll=<?php echo $mmj;?>">
	<div style="float:left; width:208px; margin-top:10px;">
Change 200 level
	
	</div></a>
	
	
	<div style="float:left; width:92px; margin-top:10px;"></div>
	
	
	
	<div style="float:left; width:208px;text-align:center; height:37px; background:#efefef; font-family:impact;">
	<a href="changesub201.php?roll=<?php echo $mmj;?>">
	<div style="float:left; width:208px; margin-top:10px;">
Change 300 level
	
	</div></a>
	
	
	<div style="float:left; width:92px; margin-top:10px;"></div>
	
	
	<div style="float:left; width:208px;text-align:center; height:37px; background:#efefef; font-family:impact;">
	<a href="changesub204.php?roll=<?php echo $mmj;?>">
	<div style="float:left; width:208px; margin-top:10px;">
Change 400 level
	
	</div></a>
	
	
	
	
		<div style="float:left; width:92px; margin-top:10px;"></div>
	
	
	<div style="float:left; width:208px;text-align:center; height:37px; background:#efefef; font-family:impact;">
	<a href="changesub205.php?roll=<?php echo $mmj;?>">
	<div style="float:left; width:208px; margin-top:10px;">
Change 500 level
	
	</div></a>
	
	
		<div style="float:left; width:92px; margin-top:10px;"></div>
	
	<div style="float:left; width:208px;text-align:center; height:37px; background:#efefef; font-family:impact;">
	<a href="changesub206.php?roll=<?php echo $mmj;?>">
	<div style="float:left; width:208px; margin-top:10px;">
Change 600 level
	
	</div></a>
	
	
	
	
		<div style="float:left; width:92px; margin-top:10px;"></div>
	
	
	<div style="float:left; width:208px;text-align:center; height:37px; background:#efefef; font-family:impact;">
	<a href="changesub207.php?roll=<?php echo $mmj;?>">
	<div style="float:left; width:208px; margin-top:10px;">
Change 700 level
	
	</div></a>
	
	
	
	
	
	
	
	
	
	
	<div style="float:left; width:92px; margin-top:10px;"></div>
		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</div>
	
	</div>
	
	
	
	
	</body>
	</html>