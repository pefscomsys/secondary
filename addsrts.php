<?php

include 'dbcs.php';

page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;




 $ip=@$_SERVER['REMOTE_ADDR'];
 

$result = mysql_query("SELECT * FROM courses where fname>'' order by fname ASC");
?>
<?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["roll"];$x=$_GET["x"];
$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?>
<?php } ?>
<html>
<head>
<title>Users List</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:900px;">
<table border="0" cellpadding="10" cellspacing="1" width="1330">
<tr >

<td>Teacher: <b><?php echo $x;?></b></td>




</tr>
</table>
<table border="0" cellpadding="10" cellspacing="1" width="1330">

<?php
$query="select * from subject";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?><tr >
<td style='height:30px; background:#fff;color:#000;'><a href="addsrtss.php?subject=<?php  echo $subject=$row['subject'];


?>&user_name=<?php  echo $roll;


?>&x=<?php  echo $x;


?>" style='text-decoration:none;'><?php  echo $subject=$row['subject'];


?></a></b></td></tr>

<?php } ?>



</table>








</form>
</div>
</body></html>