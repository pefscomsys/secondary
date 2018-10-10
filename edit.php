<?php 



include 'dbc.php';
page_protect();


 $notes=$_SESSION['user_name'];

 ?>
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
	<script type="text/javascript">
var popupwin = null;
function popupWin(url,name) {
popupwin = window.open(url,this.html,'width=1400,height=550,align=center');
}
if (!document.all) {
document.captureEvents (Event.CLICK);
}
document.onclick = function() {
if (popupwin != null && !popupwin.closed) {
popupwin.focus();
}
}
</script>
	</head>
	<body>
	<div style="float:left; width:208px; height:400px;">
	
	

	<div style="float:left; width:208px; height:57px;">
	
		<div style="float:left; width:208px;text-align:center; height:47px; background:#efefef; font-family:impact;">
	<a href="pic1.php">
	<div style="float:left; width:208px; margin-top:10px;">
CHANGE PIC
	</div></a>
	
	</div>
	
	
	</div>
	<div style="float:left; width:208px; height:57px;">
	<div style="float:left; width:208px;text-align:center; height:47px; background:#efefef; font-family:impact;">
	<a href="jim.php">
	<div style="float:left; width:208px; margin-top:10px;">
CORRECTION OF NAMES
	</div></a>
	
	</div>	</div>
	<div style="float:left; width:208px; height:57px;">
	<div style="float:left; width:208px;text-align:center; height:47px; background:#efefef; font-family:impact;">
	<a href="sub201xX.php">
	<div style="float:left; width:208px; margin-top:10px;">
VIEW SUBJECT CODE
	</div></a>
	
	</div>
	</div>
	</body>
	</html>