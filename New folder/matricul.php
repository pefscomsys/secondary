<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=5){header("location: login.php?error=Unauthorized access");}




 $ip=@$_SERVER['REMOTE_ADDR'];
 
 ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from users where user_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?>
<?php } ?>
 
 
 <?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu5 where extra='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $col1=$row['pagename'];


?>
<?php  $link1=$row['links'];


?>
<?php } ?>

<?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu5 where extra='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $col2=$row['pagename'];


?>
<?php  $link2=$row['links'];


?>
<?php } ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu5 where extra='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $col3=$row['pagename'];


?>
<?php  $link3=$row['links'];


?>
<?php } ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu5 where extra='4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $col4=$row['pagename'];


?>
<?php  $link4=$row['links'];


?>
<?php } ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu5 where extra='5'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $col5=$row['pagename'];


?>
<?php  $link5=$row['links'];


?>
<?php } ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu5 where extra='6'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $col6=$row['pagename'];


?>
<?php  $link6=$row['links'];


?>
<?php } ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu5 where extra='7'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $col7=$row['pagename'];


?>
<?php  $link7=$row['links'];


?>
<?php } ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu5 where extra='8'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $col8=$row['pagename'];


?>
<?php  $link8=$row['links'];


?>
<?php } ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu5 where extra='9'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $col9=$row['pagename'];


?>
<?php  $link9=$row['links'];


?>
<?php } ?>

<?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu5 where extra='10'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $col10=$row['pagename'];


?>
<?php  $link10=$row['links'];


?>
<?php } ?>
<?php
	$info="SELECT * from info where roll='1'";
	$run=mysql_query($info) or die(mysql_error());
	while($row=mysql_fetch_assoc($run)){
		$school=$row['school'];
		$moto=$row['motto'];
		$contact=$row['tel'];
		$sitew=$row['website'];
	}

?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>PEFSCOM SYSTEM</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="font-awesome/css/font-awesome.css" type="text/css" media="screen">
    
    
    
  </head>
<script language="JavaScript" src="js/pop-up.js"></script>
  <body>

    <div class="titles" ><h1 style="float:left;margin-top:20px; margin-left:10px;text-shadow:1px 0px 1px #fff;color:#50a3a2;"><?php echo $school; ?></h1><br>
	<div style="float:left;color:#000; margin-top:35px; margin-left:-370px;font-size:13px;">Address: <?php echo $moto; ?><br>Website: <?php echo $sitew; ?></div>		<div style="float:left;color:#000; margin-top:15px;  HEIGHT:25PX; BACKGROUND:#efefef; margin-left:320px;font-size:13px;">
		<div style="float:left; WIDTH:500PX;"><div style="float:left;margin-top:5px; margin-left:5px;  WIDTH:120PX; HEIGHT:25PX;color:#009966; font-size:13px;">	
				
<div style="float:left; WIDTH:15PX; HEIGHT:25PX;">	<i class="fa  fa-key fa-1x" style="float:left; color:#009966; ;">

</i></div>

		<div style="float:left; WIDTH:50PX; HEIGHT:25PX;">  <?php echo $notes;?>
		</div>

		
		</div>
		
		
  <a href="setting.php" style="color:#009966;">
		<div style="float:left;margin-top:5px; margin-left:5px;  WIDTH:100PX; HEIGHT:25PX;color:#009966; font-size:13px;">	
		
		<div style="float:left; WIDTH:15PX; HEIGHT:25PX;">	<i class="fa  fa-cog fa-1x" style="float:left; color:#009966; ;">

</i></div>

		<div style="float:left; WIDTH:50PX; HEIGHT:25PX;"> Setting
		</div>
		
		</div>
		</a>
  <a href="accounts.php" style="color:#009966;">
			<div style="float:left;margin-top:5px; margin-left:5px;  WIDTH:100PX; HEIGHT:25PX;color:#009966; font-size:13px;">	
		
<div style="float:left; WIDTH:15PX; HEIGHT:25PX;">	<i class="fa  fa-user fa-1x" style="float:left; color:#009966; ;">

</i></div>

		<div style="float:left; WIDTH:50PX; HEIGHT:25PX;"> Account
		</div>
		
		</div>
		</a>
		
		
  <a href="logout.php" style="color:#009966;">
			<div style="float:left;margin-top:5px; margin-left:5px;  WIDTH:120PX; HEIGHT:25PX;color:#009966; font-size:13px;">	
		
		&#9658; Logout
		
		</div>
		</a>
		
		
		</DIV>
		
		</DIV>
		
		
		
		
		
		
		
		
		
		
		</div>
    
	<div style="float:left;
  background: #50a3a2;
  background: -webkit-linear-gradient(top left, #50a3a2 0%, #53e3a6 100%);
  background: linear-gradient(to bottom right, #50a3a2 0%, #53e3a6 100%);
margin-top:100px;
 color:#fff;
  width: 110%;
  height: 70px;">
 
  <div style="float:left; WIDTH:1400PX; height:60px; margin-top:5px; margin-left:15px;">
  
  <a href="<?php echo $link1;?>?roll=<?php echo $col1;?>" style="color:#fff;">
  <div style="float:left; WIDTH:130PX; height25px; margin-top:10px; ">
  
  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-users fa-2x" style="float:left; color:#fff; ;">

</i></div>
  
  
  
    
  <div style="float:left; WIDTH:85PX; HEIGHT:25PX;font-size:13px;font-weight:bold;">  <?php echo $col1;?></div>
  
  
  
  
  
  
  
  </div>
  </a>
  
  
  
  <a href="<?php echo $link2;?>?roll=<?php echo $col2;?>" style="color:#fff;">
  <div style="float:left; WIDTH:130PX; height25px; margin-top:10px; ">
  
  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-edit fa-2x" style="float:left; color:#fff; ;">

</i></div>
  
  
  
    
  <div style="float:left; WIDTH:85PX; HEIGHT:25PX;font-size:13px;font-weight:bold;"> <?php echo $col2;?></div>
  
  
  
  
  
  
  
  </div></a>
  
  
  
  
  
  
  
  
  <a href="<?php echo $link3;?>?roll=<?php echo $col3;?>" style="color:#fff;">
  
  <div style="float:left; WIDTH:130PX; height25px; margin-top:10px; ">
  
  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-print fa-2x" style="float:left; color:#fff; ;">

</i></div>
  
  
  
    
  <div style="float:left; WIDTH:80PX; HEIGHT:25PX;font-size:13px;font-weight:bold;"><?php echo $col3;?></div>
  
  
  
  
  
  
  
  </div>
  </a>
  
  
  
  
  
  
  
  
  
  
  
  
  
  <a href="<?php echo $link4;?>?roll=<?php echo $col4;?>" style="color:#fff;">
  <div style="float:left; WIDTH:130PX; height25px; margin-top:10px; ">
  
  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-clock-o fa-2x" style="float:left; color:#fff; ;">

</i></div>
  
  
  
    
  <div style="float:left; WIDTH:80PX; HEIGHT:25PX;font-size:13px;font-weight:bold; text-align:left;"><?php echo $col4;?></div>
  
  
  
  
  
  
  
  </div>
  </a>
  
  
  
  
  
  <a href="<?php echo $link5;?>?roll=<?php echo $col5;?>" style="color:#fff;">
  
  <div style="float:left; WIDTH:130PX; height25px; margin-top:10px; ">
  
  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-money fa-2x" style="float:left; color:#fff; ;">

</i></div>
  
  
  
    
  <div style="float:left; WIDTH:80PX; HEIGHT:25PX;font-size:13px;font-weight:bold;"><?php echo $col5;?></div>
  
  
  
  
  
  
  
  </div>
  
  </a>
  
  
  
  
  
  <a href="<?php echo $link6;?>?roll=<?php echo $col6;?>" style="color:#fff;">
  
  
  <div style="float:left; WIDTH:130PX; height25px; margin-top:10px; ">
  
  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-book fa-2x" style="float:left; color:#fff; ;">

</i></div>
  
  
  
    
  <div style="float:left; WIDTH:80PX; HEIGHT:25PX;font-size:13px;font-weight:bold;"><?php echo $col6;?></div>
  
  
  
  
  
  
  
  </div>
  
  </a>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <a href="<?php echo $link7;?>?roll=<?php echo $col7;?>" style="color:#fff;">
  <div style="float:left; WIDTH:140PX; height25px; margin-top:10px; ">
  
  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-qrcode fa-2x" style="float:left; color:#fff; ;">

</i></div>
  
  
  
    
  <div style="float:left; WIDTH:80PX; HEIGHT:25PX;font-size:13px;font-weight:bold;"><?php echo $col7;?> </div>
  
  
  
  
  
  
  
  </div>
  </a>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <a href="<?php echo $link8;?>?roll=<?php echo $col8;?>" style="color:#fff;">
  <div style="float:left; WIDTH:130PX; height25px; margin-top:10px; ">
  
  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-hand-o-right fa-2x" style="float:left; color:#fff; ;">

</i></div>
  
  
  
    
  <div style="float:left; WIDTH:80PX; HEIGHT:25PX;font-size:13px;font-weight:bold;"><?php echo $col8;?> </div>
  
  
  
  
  
  
  
  </div>
  
  
  </a>
  
  
  
  
  
  
  <a href="<?php echo $link9;?>?roll=<?php echo $col9;?>" style="color:#fff;">
  <div style="float:left; WIDTH:130PX; height25px; margin-top:10px; ">
  
  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-hand-o-right fa-2x" style="float:left; color:#fff; ;">

</i></div>
  
  
  
    
  <div style="float:left; WIDTH:80PX; HEIGHT:25PX;font-size:13px;font-weight:bold;"><?php echo $col9;?> </div>
  
  
  
  
  
  
  
  </div>
  
  
  </a>
  
  
  
   
  <a href="<?php echo $link10;?>?roll=<?php echo $col10;?>" style="color:#fff;">
  <div style="float:left; WIDTH:130PX; height25px; margin-top:10px; ">
  
  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-subway fa-2x" style="float:left; color:#fff; ;">

</i></div>
  
  
  
    
  <div style="float:left; WIDTH:80PX; HEIGHT:25PX;font-size:13px;font-weight:bold;"><?php echo $col10;?> </div>
  
  
  
  
  
  
  
  </div>
  
  
  </a>
  
  
  
  
  
  
  
  
     
  <div style="float:left; WIDTH:80PX; HEIGHT:25PX;font-size:13px;font-weight:bold;"><a href=javascript:popcontact('pricelist.php') style="color:#fff; font-size:14px; text-decoration:none; font-weight:bold">See Matricule</a></div>
  
  
  
  
  
  
  
  </div>
  
  
 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  </div>
  
  </div>
	
	
	<div style="float:left;
  background: #efefef;
 color:#009966;
  width: 100%;
  height: 25px;margin-top:5px;">
	
  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-chevron-right fa-2x" style="float:left; color:#fff; ;">

</i></div>
	- <?php echo $ms;?>
	
  </div>
	
	
	
<div style="color:#000"	>

<?php
$current="SELECT * from rushss where roll='1'";
$ok=mysql_query($current) or die(mysql_error());
while($row=mysql_fetch_assoc($ok)){
	 $cur=$row['year'];
}
?>


<?php
$matric="SELECT * from courses where db1='$cur' order by roll DESC";
$okk=mysql_query($matric) or die(mysql_error());
$i=1;
?>
<table style="width:800px; background:#1188aa; color:#fff; background:#fff transparent; line-height:1.9">
<tr style="background:#1188aa; color:#fff; padding:50px 0px">
<td>S/N</td><td>Students Names</td><td>Matricle</td><td>Academic Year</td><td>Department</td>
</tr>

<?php while($rows=mysql_fetch_assoc($okk)){
	 

 ?>
<tr>

 <?php if($i%2==0)//if $num/2 is even
					 {
						 echo '<tr bgcolor="#ccc">';
					 }
					 else
					 {
						 echo '<tr bgcolor="#fff">';
					 }
          ?>
<td><?php echo $i++; ?></td><td><?php echo $rows['fname']; ?></td><td><?php echo $rows['matricule']; ?></td><td><?php echo $rows['db1']; ?></td><td><?php echo $rows['departmet']; ?></td>
</tr>
<?php } ?>
</table>
  
  </div>
	</div>
    <script src='jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
