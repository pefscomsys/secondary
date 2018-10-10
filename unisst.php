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
<body  onload="window.print();">
<form name="frmUser" method="post" action="">
<div style="width:900px;">
<table border="0" cellpadding="10" cellspacing="1" width="1330">
<tr >

<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $take=$row[1];


?><?php } ?>
<td>Subjects Filled by: <b><?php echo $x=$notes;?></b><br>


Subject Title: <?php $c=$_GET["subject"];
$qry = mysql_query("select subject as total
from subject where roll='$c'  "); 
$row = mysql_fetch_assoc($qry); 
echo $saves=$row['total'];
		




?><br>
Session: <?php echo $take;?>
</td>



</tr>
</table>
<table border="0" cellpadding="10" cellspacing="0" width="950">
<tr >
<td style='height:30px; background:#fff;color:#000;width:30px;border-top:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;
border-bottom:1px solid #000;text-transform:uppercase;'>S/N</b></td>
<td style='height:30px; background:#fff;color:#000;width:260px;border-top:1px solid #000;border-right:1px solid #000;
border-bottom:1px solid #000;text-transform:uppercase;'>Student Names</b></td>
<td style='height:30px; background:#fff;color:#000;width:50px;border-top:1px solid #000;border-right:1px solid #000;
border-bottom:1px solid #000;text-transform:uppercase;'>CA</b></td>
<td style='height:30px; background:#fff;color:#000;width:50px;border-top:1px solid #000;border-right:1px solid #000;
border-bottom:1px solid #000;text-transform:uppercase;'>Exam</b></td>

</tr>

<?php
$class=$_GET["levels"];
$term=$_GET["term"];$subject=$_GET["subject"];$eachs=$_GET["user_name"];
$query="select * from resit where classes='$class' and subject='$subject' and form='$take'and c105='$term' and teacher='$eachs'";$x=1;
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<tr >
<td style='height:30px; background:#fff;color:#000;width:30px;border-left:1px solid #000;text-aling:center;border-right:1px solid #000;
border-bottom:1px solid #000;'><?php echo $x++;?></td>
<td style='height:30px; background:#fff;color:#000;width:260px;border-right:1px solid #000;
border-bottom:1px solid #000;'><?php echo $row["first_name"];?></b></td>
<td style='height:30px; background:#fff;color:#000;width:100px;border-right:1px solid #000;
border-bottom:1px solid #000;'><?php echo $row["c101"];?></b></td>
<td style='height:30px; background:#fff;color:#000;width:100px;border-right:1px solid #000;
border-bottom:1px solid #000;'><?php echo $row["c102"];?></b></td>

</tr>





<?php } ?>



</table>








</form>
</div>
</body></html>