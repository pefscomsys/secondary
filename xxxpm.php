<?php 
include 'dbc.php';
ini_set('max_execution_time', 60000); //300 seconds = 5 minutes
page_protect();

 $notes=$_SESSION['user_name'];

if(@$_SESSION['userlevel']==3){header("location: login.php?msg=Unauthorized access");}

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SCHOOL MANAGEMENT SYSTEM</title>
<style>
 .RolloverMenu { width:250px; font-size:11pt; font-weight:bold; color:#000000; background:rgb(180,235,230);}
   .RolloverMenu ul{ list-style-type:none; margin:0; padding:0;}
   .RolloverMenu li{  margin:2px; text-align:center; }
  .RolloverMenu a{ display:block; margin:0; padding:4px; border:1pt solid black; text-decoration:none;}
  .RolloverMenu a:hover{ background:#ffcc00}
  .RolloverMenu a:link, .RolloverMenu a:active, .RolloverMenu a:visited{ color:#000000;}
   
#headers {
		
                float:left;
		padding:0px 0;
		width:100%; border-bottom: 20px solid #660000; color: #CCC;
		z-index:9999px;
		background:#000;
		margin-top:-10px;
	}
table{font-family:Verdana, Geneva, sans-serif;
}
tr,td{border:1px ;}
.textfield {
	font-size: 11px;
	color: #333333;
	background: #F7F7F7;
	border: 1px solid #CCCCCC;
	padding-left: 1px;
}a {
	color: #2D3954;
	font-size: 11px;
	text-decoration:none;
}
a:visited {
	color:red;
}
a:active {
	color:blue;
}
a:link{text-decoration:none;}
a:hover {
	color: #99CC00;
}


body{
		background:#fff;}
#container{float:left;
margin-left:9px;

width:900px; height:auto;
background:#fff;
border-radius: 8px 8px 8px 8px;

-o-border-radius: 8px 8px 8px 8px;

-moz-border-radius: 8px 8px 8px 8px;

-khtml-border-radius: 8px 8px 8px 8px;

}.header{
margin:auto;

width:900px;
height:150px;
	
	
	}
.x{float:left;
width:900px;
height:150px;
	
	
	}
	
#cout{ margin:auto; width:900px;
}
#containers{float:left;
margin-top:10px;
box-shadow:1px 1px 1px   #fff;
width:920px; height:auto;
background-color:#660000; !important;-moz-linear-gradient(top, #E3E3E3 0%, #EDEDED 100%) );}

</style>
</head>

<body>


<div  style="text-align:center; margin:auto; width:1200px; height:150px;"><br><br>

 <?php

 
$department=$_POST["classes"];

$sex=$_POST["sex"];

$levels=$_POST["levels"];
$table=courses;
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php echo $row[1];?>
</b>

<br>
Class List for the Accademic Year <?php
$tiko=date('Y '); 
echo $tiko-1;
?>/  <?php
$tiko=date('Y '); 
echo $tiko;
?>
<?php } ?><Br><B style="font-size:17px; text-transform:uppercase;">
Subject Analysis table  </B>

<br /><br /><br /><br />
</b>

	<div style="margin:auto; width:2200px; height:auto;">
	
	<div style="float:left;  width:150px;  height:auto; ">
	<div style="float:left; width:150px; height:24px;background:#efefef;border-bottom:#000">
	<b>SUBJECT</b></div>
	
	</div>
	
	<div style="float:left; width:2000px; height:auto;">
	
	<div style="float:left;width:2000px;  height:24px;background:#ccc;border-bottom:1px solid #fff; ">

			<?php

$query = mysql_query("select * from classes "); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 











?>
	<div style="float:left; width:100px;border-right:1px solid #fff; text-align:center;  height:25px;">
	
	<b><?php echo $mki= $row['class'];?>
	
	</b>
	
	</div>
	
	<?php  } ?>
	</div>
	
	</div>
	
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<div style="margin:auto; width:2200px; height:auto;">
	
	<div style="float:left;  width:150px;  height:auto; ">
	<div style="float:left; width:150px; height:24px;background:#efefef;border-bottom:#000">
	<b><I> Analysis</I></b></div>
	
	</div>
	
	<div style="float:left; width:2000px; height:auto;">
	
	<div style="float:left;width:2000px;  height:24px;background:#ccc;border-bottom:1px solid #fff; ">

			<?php

$query = mysql_query("select * from classes "); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 











?>
	<div style="float:left; width:34px;border-right:1px solid #fff; text-align:center;  height:25px;">
	
	<b><10
	
	</b>
	
	</div><div style="float:left; width:35px;border-right:1px solid #fff; text-align:center;  height:25px;">
	
	<b>>=10
	
	</b>
	
	</div><div style="float:left; width:29px;border-right:1px solid #fff; text-align:center;  height:25px;">
	
	<b>%
	
	</b>
	
	</div>
	
	<?php  } ?>
	</div>
	
	</div>
	
	</div>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $take=$row[1];
$table="marks";
?>
<?php } ?>
 


<?php
$classes=$_POST["classes"];
$term=$_POST["term"];
$flag=0;
$query="select * from subject2 where  year2='$term' and  department='$classes'  ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
	?>
	<div style="margin:auto; width:2200px; height:auto;">
	
	<div style="float:left;  width:150px;  height:auto; ">
	<div style="float:left; width:150px; text-align:left; height:24px;background:#efefef;border-bottom:#000">
	&nbsp;&nbsp;&nbsp;&nbsp;<?php  $mkiss= $row['subject'];

 $mxc10a=$mkiss;
if(empty($mxc10a)){
$mkis="x";
} elseif($mxc10a>''){
$mkis=$mkiss;
}

$qry = mysql_query("select subject as total
from subject where roll='$mkis' "); 
$row = mysql_fetch_assoc($qry);
 echo $msk=$row['total']; 

	
	
	
	?></div>
	
	</div>
	
	<div style="float:left; width:2000px; height:auto;">
	
	<div style="float:left;width:2000px;  height:24px;background:#ccc;border-bottom:1px solid #fff; ">

			<?php

$query = mysql_query("select * from classes "); 

		 while ($row = mysql_fetch_array($query)) {
		 
		 











?>
	<div style="float:left; width:34px; text-align:center; border-right:1px solid #fff;  height:25px;">
	
	<?php $mki= $row['class'];
	
	
	
	
$qry = mysql_query("select * FROM  resit where subject='$mkis' and classes='$mki' and c105='$term' and form='$take' and (c101+c102)<10   and (c101+c102)>'0.0001'"); 
$num_rows=mysql_num_rows($qry);
 echo $x22=$num_rows; 
	
	
	
	
	
	
	
	
	
	?>
	
	
	</div>
<div style="float:left; width:35px; border-right:1px solid #fff;text-align:center;  height:25px;">
	
	<?php $mki= $row['class'];
	
	
	
	
$qry = mysql_query("select * FROM  resit where subject='$mkis' and classes='$mki' and c105='$term' and form='$take' and (c101+c102)>=10"); 
$num_rows=mysql_num_rows($qry);
 echo $x222=$num_rows; 
	
	
	
	
	
	
	
	
	
	?>
	
	
	</div>

	
	
	
	
<div style="float:left; width:29px; border-right:1px solid #fff;text-align:center;font-size:13px;  height:25px;">
	
	<?php 
	
	
$qry = mysql_query("select * FROM  marks where last_name='$mki'  and form='$take'"); 
$num_rows=mysql_num_rows($qry);
$main=$num_rows; 
	
	
 $mxc10=$x222;
if(empty($mxc10)){
ECHO $stas="0";
}elseif($mxc10>''){

 printf("%01.2f", $ash=($x222/$main)*100);
	}
	
	
	
	?>
	
	
	</div>

	
	
	
	
	
	
	
	
	
	
	<?php } ?>
<div style="float:left; width:45px; border-right:1px solid #fff;text-align:center;  height:25px;">
	
	</div>
	</div>
	</div>
	
	
	
	
	
	
	
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<?php } ?>
	
	
	
	

</div>
</body>
</html>
