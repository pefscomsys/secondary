
<?php include 'dbcs.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

        <link rel="shortcut icon" href="pef.png"> 
        <link rel="stylesheet" type="text/css" href="stss.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SCHOOL MANAGEMENT SYSTEM</title>

<style>
body{background:url(winter.jpg);}

</style>
<script type="text/javascript">
var popupwin = null;
function popupWin(url,name) {
popupwin = window.open(url,this.html,"width=700,height=550,align=center");
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

<body >


<div id="container" style="">


<div  style="width:800px; height:640px; border:2px solid #fff;-webkit-border-radius: 14px;
    -moz-border-radius: 14px;
    border-radius: 14px; background:rgba(150,150,150,0.3);">
<div id="bup" style="color:#fff; font-size:25px;  text-align;center; letter-spacing:2px;"
><div style="float:left; width:800px; height:100px; margin-top:40px;text-align;center; margin-left:20px;"><b>PEF-SCOM SCHOOL MANAGEMENT SYSTEM</b><br>
<div style="font-size:11px; font-weight:normal;">(Premium  Electronic Transformation Society geared to Completely Over ridding Manual System)</div>
</div>
<hr>
</div>
<div id="bleft" style="">

	<?php

$query="select * from fresh where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php   $enddates= $row[3];
echo $none="<DIV STYLE='COLOR:#FFF; TEXT-DECORATION:UNDERLINE;margin-left:10px;font-family:arial;font-size:13px;'>LAST VISIT WAS ON $enddates<br>
Please Call (+237) 93 32 7755 or 73 51 83 47 for licence key<br>
Payment Bank Bisec Cameroon account Number 3813 1143 001 - 55<br>
or send money by express union or e-recahrge cameroon</DIV>";?>
<?php } ?>
<div style="
float:left;height:150px;margin-left:150px; width:400px;margin-top:50px; ">



   <form action="licencep.php" method="post" name="logForm" id="logForm" >
  <table width="640" border="0" align="center" cellpadding="1" cellspacing="0">
    <tr>
    <td width="180"style="color:#fff;">Licence number:</font></td><td width="120">
	<input class="licence" name="licence"  type="text" value=""  size="38"/></td>
      <td>
                  <input name="doLogin" type="submit" class="submit" value="submit"></td>
  </tr>
 

</form>


</table>
</p>
</fieldset>



<p style="color:#fff;">Welcome to pefscom licence pro
version:2.1.4<ul style="color:#efefef;"><li>This licence manager backup your data base automatically!</li>

<li>It keeps system free from attack!</li>
<li>Also provide automatic refrence point!</li>
<li> it also allow you to enjoy this package without constant visit of manufacture!</li>

</ul>


</p>



</div>
	
  




</div>



</div>

</div>

</body>
