<?php 
include 'dbc.php';
page_protect();


 $notes=$_SESSION['user_name'];


if(@$_SESSION['userlevel']!=41){header("location: login.php?error=Unauthorized access");}







?><?php
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school=$row[1];
$school2=$row[2];
?><?php } ?>


<?php
$notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from fresh where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $starts=$row[1];?>

<?php $enddate= $row[2];?>

<?php   $todays_date= $row[3];

?>


<?php } ?>

<?php

 $today1=strtotime($todays_date);
 $today2=strtotime($enddate);
 $tydate=$today2-$today1;

?>
<?php
if(empty($tydate)){
 echo  $statusf="<meta http-equiv='refresh' content='0; url=timeout.php'>";
 }
 
 


elseif($tydate>=1){
 echo $statusftydate="<meta http-equiv='refresh' url=logins.php'>";
}

elseif($tydate<=0 ){
 echo  $statusftydate="<meta http-equiv='refresh' content='0; url=timeout.php'>";
}
 
?>

 
 
<?php
    $njangis=strtotime(date('Y/m/j'));
     
    $today1=strtotime($todays_date);
   $tydates=$today1-$njangis;
   
   
 ?>
 
 <?PHP
if(empty($tydates)){
  $statusfs="submit";
 
 $statusfsp="loginp.php";
 $statusfss="";
 
 }
 
 

elseif($tydates>="0" ){

 $statusfsp="logins.php";
 
 $statusfs="button";
 $statusfsss="the Bios Battery of this Computer is bad so date is not set";

 $statusfss="You are cheating your self!<br>You have backdated Your computer this software is malfunction untill date is correct! if this continue i will inform system administrator of PEFSCOM Company LTD";
}
elseif($tydates<="0" ){
 $statusfs="submit";
 $statusfsp="loginp.php";
 $statusfss="";
}
?>

<?php

 $today1=strtotime($todays_date);
 $today2=strtotime($enddate);
 $tydate=$today2-$today1;

?>
<html>



<head>
<style>
body{font-family:Trebuchet MS; font-size:11px;
background:url(Tulips.jpg);}

#container{width:1000px;background:url(ji.png); height:700px; margin:auto;margin-top:25px;box-shadow:1px 0px 4px 1px #000;}
#header{float:left;width:1000px; height:60px; }
#content{float:left;width:980px; height:630px;background:#fff;margin-left:10px; }
	
	.wrap{margin:auto;color:#000;
margin-top:00px;
	width:400px; height:500px;}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	a:link{textdecoration:none;
	color:none;}
	
	
	/*
*	RESET
*/
*{
	box-sizing: border-box;
	margin: 0;
	outline: none;
	padding: 0;
}

*:after,
*:before {
	box-sizing: border-box;
}

/*
*	GLOBAL
*/
html {
	font-size: 16px;
	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
	text-rendering: optimizeLegibility;
}


a.close {
	background-color: rgb(204,204,204);
	border-radius: 50%;
	color: rgb(255,255,255);
	display: block;
	font-family: 'Varela Round', sans-serif;
	font-size: .8em;
	padding: .2em .5em;
	position: absolute;
	top: 1.25rem;
	transition: all 400ms ease;
	right: 1.25rem;
}
	
	a.close:hover {
		background-color: #1bc5b3;
		cursor: pointer;
	}

/*
*	LOG-IN BOX
*/
div.overlay {
	background-color: rgba(0,0,0,.25);
	bottom: 0;
	display: flex;
	justify-content: center;
	left: 0;
	position: fixed;
	top: 0;
	width: 100%;
}

	div.overlay > div.login-wrapper {
		align-self: center;
		background-color: rgba(0,0,0,.25);
		border-radius: 2px;
		padding: 6px;
		width: 450px;
	}
	
		div.overlay > div.login-wrapper > div.login-content {
			background-color: rgb(255,255,255);
			border-radius: 2px;
			padding: 24px;	
			position: relative;
		}
		
			div.overlay > div.login-wrapper > div.login-content > h3 {
				color: rgb(0,0,0);
				font-family: 'Varela Round', sans-serif;
				font-size: 1.8em;
				margin: 0 0 1.25em;
				padding: 0;
			}
/*
*	FORM
*/
form label {
	color: rgb(0,0,0);
	display: block;
	font-family: 'Varela Round', sans-serif;
	font-size: 1.25em;
	margin: .75em 0;	
}

	form input[type='text'],
	form input[type='email'],
	form input[type='number'],
	form input[type='search'],
	form input[type='password'],
	form textarea {
		background-color: rgb(255,255,255);
		border: 1px solid rgb( 186, 186, 186 );
		border-radius: 1px;
		box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.08);
		display: block;
		font-size: .65em;
		margin: 6px 0 12px 0;
		padding: .8em .55em;	
		text-shadow: 0 1px 1px rgba(255, 255, 255, 1);
		transition: all 400ms ease;
		width: 90%;
	}
	
	form input[type='text']:focus,
	form input[type='email']:focus,
	form input[type='number']:focus,
	form input[type='search']:focus,
	form input[type='password']:focus,
	form textarea:focus,
	form select:focus { 
		border-color: #4195fc;
		box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 0 8px #4195fc;
	}
	
		form input[type='text']:invalid:focus,
		form input[type='email']:invalid:focus,
		form input[type='number']:invalid:focus,
		form input[type='search']:invalid:focus,
		form input[type='password']:invalid:focus,
		form textarea:invalid:focus,
		form select:invalid:focus { 
			border-color: rgb(248,66,66);
			box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 0 8px rgb(248,66,66);
		}
	
.submit{width:140px;
	background-color: #50c1e9;
	border: 1px solid rgba(0,0,0,.1);
	color: rgb(255,255,255);
	font-family: 'Varela Round', sans-serif;
	font-size: .95em;
	padding: .55em .9em;
	transition: all 600ms ease;	
}

	.submit:hover {
		background-color: #1bc5b3;
		cursor: pointer;
	}

.cliak:hover {
width:50px;
	color: rgb(255,255,255);
	font-family: 'Varela Round', sans-serif;
	font-size: .95em;

		cursor: pointer;
	}



</style>

</head>
<body>

<div id="container">


<div id="header">
<DIV STYLE="margin-left:10px; margin-top:10px;font-size:17px;float:left; width:600px; height:30px;">
PEFSCOM SCHOOL MANAGEMENT SYSTEM VERSION 5.5

</div>
<DIV STYLE=" margin-top:10px;font-size:17px;float:left; width:300px; height:30px;">
Welcome: <?php echo $notes;?> | <a href="logout.php">Log out</a>

</div>

</div>

<div id="content">

<div style='float:left; width:1000px; height:640px; '>

<div style='float:left; width:1000px; height:90px; '>
<a href='register.php'>
<div style='float:left; width:100px;margin-left:10px;margin-top:10px; height:70px;border:1px solid #ccc; '>
<div style="float:left; margin-top:5px; margin-left:25px;">
<img src="icon/curriculum.png" class="cliak">
</div>
</div></a>


<a href='getall.php'>
<div style='float:left; width:100px;margin-left:5px;margin-top:10px; height:70px;border:1px solid #ccc; '>
<div style="float:left; margin-top:5px; margin-left:20px;">
<img src="icon/social.png" class="cliak">
</div>
</div></a>

<a href='editb.php'>
<div style='float:left; width:100px;margin-left:5px;margin-top:10px; height:70px;border:1px solid #ccc; '>
<div style="float:left; margin-top:5px; margin-left:25px;">
<img src="icon/skill_gap.png" class="cliak">
</div>
</div>
</a>




<a href='return.php'>
<div style='float:left; width:100px;margin-left:5px;margin-top:10px; height:70px;border:1px solid #ccc; '>
<div style="float:left; margin-top:5px; margin-left:25px;">
<img src="icon/rules.png" class="cliak">
</div>
</div></a>



<a href='printall.php'>
<div style='float:left; width:100px;margin-left:5px;margin-top:10px; height:70px;border:1px solid #ccc; '>
<div style="float:left; margin-top:5px; margin-left:25px;">
<img src="icon/printer.png" class="cliak">
</div>
</div>

</a>


<a href='generate.php'>
<div style='float:left; width:100px;margin-left:5px;margin-top:10px; height:70px;border:1px solid #ccc; '>
<div style="float:left; margin-top:5px; margin-left:25px;">
<img src="icon/folders.png" class="cliak">
</div>
</div></a>





<a href='marks.php'>
<div style='float:left; width:100px;margin-left:5px;margin-top:10px; height:70px;border:1px solid #ccc; '>
<div style="float:left; margin-top:5px; margin-left:25px;">
<img src="icon/content.png" class="cliak">
</div>
</div></a>





<a href='delete.php'>
<div style='float:left; width:100px;margin-left:5px;margin-top:10px; height:70px;border:1px solid #ccc; '>
<div style="float:left; margin-top:5px; margin-left:25px;">
<img src="icon/close.png" class="cliak">
</div>
</div></a>




<a href='calender.php'>
<div style='float:left; width:100px;margin-left:5px;margin-top:10px; height:70px;border:1px solid #ccc; '>
<div style="float:left; margin-top:5px; margin-left:25px;">
<img src="icon/calendar.png" class="cliak">
</div>
</div>
</a>



</div>

<div style='float:left; width:980px; height:30px;background:url(bg.png);margin-top:-5px;'>
<div style='float:left; width:100px;margin-left:10px;text-align:center; height:20px;font-size:14px; '> New Book

</div>
<div style='float:left; width:100px;margin-left:5px;text-align:center; height:20px;font-size:14px; '>
View all

</div>
<div style='float:left; width:100px;margin-left:5px;text-align:center; height:20px;font-size:14px; '>
Edit Book

</div>
<div style='float:left; width:100px;margin-left:5px;text-align:center; height:20px;font-size:14px; '>
Borrow
</div>

<div style='float:left; width:100px;margin-left:5px;text-align:center; height:20px;font-size:14px; '>
Print Info</div>

<div style='float:left; width:100px;margin-left:5px;text-align:center; height:20px;font-size:14px; '>
Generate Excell
</div>

<div style='float:left; width:100px;margin-left:5px;text-align:center; height:20px;font-size:14px; '>
Marks
</div>
<div style='float:left; width:100px;margin-left:5px;text-align:center; height:20px;font-size:14px; '>
Delete 
</div>
<div style='float:left; width:100px;margin-left:5px;text-align:center; height:20px;font-size:14px; '>
Calender
</div>
</div>

<div style='float:left; width:980px; height:470px;margin-top:-5px;'>


<iframe title="registration" class="omega" type="text/html" 
width="980px" height="490px" src="librarys.php"
frameborder="0" allowFullScreen style="
 border: 0px solid #ffffff;"></iframe>

</div>




</div>
<div style='float:left; width:700px;border:1px solid #ccc; height:60px; margin-left:160px; margin-top:-65px;font-size:13px;'>

<div style='float:left; width:700px; height:10px; background:url(bg.png);font-size:13px;'>

</div>

<div style='float:left; width:700px; height:10px;font-size:13px;'>

</div>
<div style='float:left; width:670px;margin-left:20px; height:10px;font-size:13px;'>
<marquee direction="left" scrollamount="1">
<?php
$qry = mysql_query("select content as total
from announcement where  extra='1'  "); 
$row = mysql_fetch_assoc($qry); 
echo $save=$row['total']; 
?>
</marquee>
</div>
</div>

</style>





</body>

</htmL>