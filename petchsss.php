<?php
include 'dbc.php';

page_protect();
	
 $notes=$_SESSION['user_name'];

			 	 

?><html>
<head>
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
$query="select * from marks where first_name like '%$search%'order by form ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		?><table cellspacing='1' cellpadding='1' border='0' width='800px'><tr >
		  <td><?php echo $row[2];?></td><td><?php echo $ls=$row[4];?></td>
		 
		 
		 <td><?php echo $row[3];?></td><td><a href='<?php
	
 
echo "seeall.php?rollsps=",$row[0],"'onclick='popupWin(this.href,'win1'); return false;'> Print Slip</a></td></tr>";



?>
<?php
		 }
		 if($flag==0)
		 echo "<tr><td colspan='3' align='center' style='color:red'>Record not found</td></tr>";
		 		 
?>