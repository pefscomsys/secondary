<?php
include 'dbc.php';

page_protect();

 $notes=$_SESSION['user_name'];

if(@$_SESSION['userlevel']==3){header("location: login.php?msg=Unauthorized access");}

?>
<?php
$roll=$_GET["1"];
$query="select * from users where  full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?><?php } ?><html>
<head>
<style>
	body{ 
background:#efefef;
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
<div style="float:left; margin-left:10px;">
<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px" align="center" border="0" width="1150px">
<tr>
<td colspan="4" style=" color:#000; font-size:20px; background:#ffcc00;">TRANSCRIPT GENERATOR</td>
</tr>
<tr>
</tr>
<tr bgcolor="#666666" style="color:#fff;">
<td style="color:#fff">level </td>
<td style="color:#fff">Department</td>
<td style="color:#fff">View transcript</td>

</tr>

</table>
</div>

<div style="float:left; margin-left:20px;">
<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $take=$row[1];

?>
<?php } ?>
<?php

$search=$_POST["search"];
$flag=0;
$query="select * from marks where first_name like '%$search%'order by last_name ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		?><div style="float:left; width:1250px; height:auto;">
		  <div style="float:left; width:350px; height:25px;"><?php echo $row["first_name"];?></div>
		<div style="float:left; width:200px; height:25px;"><?php echo $ls=$row["last_name"];?></div>
		 
		 
		<div style="float:left; width:680px; height:auto;"><a href='<?php

 
echo "printssx.php?rollsps=",$row[0],"'onclick='popupWin(this.href,'win1'); return false;'> Print Student Transcript</a></td></tr>";



?>
</div></div>
<?php
		 }
		 if($flag==0)
		 echo "<tr><td colspan='3' align='center' style='color:red'>Record not found</td></tr>";
		 		 
?>