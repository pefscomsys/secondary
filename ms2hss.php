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
<table border="0" cellpadding="10" cellspacing="1" width="550">
<tr >

<td>Subjects & class For: <b><?php echo $x=$notes;?></b></td>




</tr><tr >

<td style='height:30px; background:green;color:#fff;'>Select Coefficient</td>




</tr>
</table>
<table border="0" cellpadding="10" cellspacing="1" width="550">

<?php

 $classes=$_GET["class"];$subject=$_GET["subject"];$fish=$_GET["user_name"];$fish=$_GET["user_name"];
  $term=$_GET["term"];
$query="select * from coef ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?><tr >
<td style='height:30px; background:#fff;color:#000;width:100px;'><a href="ms2hs.php?class=<?php echo $classes;?>&term=<?php echo $term;?>&user_name=<?php echo $user_name;?>&subject=<?php echo $subject;?>&coef=<?php echo $row["coeff"];?>" style='text-decoration:none;'><?php echo $row["coeff"];?></a></b></td>





</tr>

<?php } ?>



</table>








</form>
</div>
</body></html>