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
$roll=$_GET["roll"];$x=$_GET["x"];$subject=$_GET["subject"];$user_name=$_GET["user_name"];
$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];
$ids=$row['user_name'];

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

<td>Subjects & class For: <b><?php echo $x=$notes;?></b></td>




</tr>
</table>
<table border="0" cellpadding="10" cellspacing="1" width="550">

<?php
 $term=$_GET["term"];
$query="select * from teach where user_name='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?><tr >
<td style='height:30px; background:#fff;color:#000;width:100px;'><a href="ms2hss.php?class=<?php echo $row["class"];?>&term=<?php echo $term;?>&user_name=<?php echo $ids;?>&subject=<?php echo $row["subject"];?>&term=<?php echo $term;?>" style='text-decoration:none;'><?php echo $row["class"];?></a></b></td>
<td style='height:30px; background:#fff;color:#000;width:100px;'><a href="ms2hss.php?class=<?php echo $row["class"];?>&term=<?php echo $term;?>&user_name=<?php echo $ids;?>&subject=<?php echo $row["subject"];?>&term=<?php echo $term;?>" style='text-decoration:none;'>
<?php echo $row["x"];?></a></td>




</tr>

<?php } ?>



</table>


</form>
</div>
</body></html>