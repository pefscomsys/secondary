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

<td>Subjects Filled by: <b><?php echo $x=$notes;?></b><br>
Click on any subject below to Print</td>




</tr>
</table>
<table border="0" cellpadding="10" cellspacing="1" width="550">
<tr >
<td style='height:30px; background:#fff;color:#000;width:100px;'>Class</b></td>
<td style='height:30px; background:#fff;color:#000;width:100px;'>Term</td>
<td style='height:30px; background:#fff;color:#000;width:100px;'>Subject</td>

<td style='height:30px; background:#fff;color:#000;width:100px;'>Status</td>


</tr>

<?php

$qry = mysql_query("select year as total
from rush where roll='1'  "); 
$row = mysql_fetch_assoc($qry); 
$take=$row['total'];
$query="select * from filled where user_name='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?><tr >
<td style='height:30px; background:#fff;color:#000;width:100px;'><a onclick="window.open('unisst.php?levels=<?php echo $row["class"];?>&subject=<?php echo $row["subject"];?>&user_name=<?php echo $ids;?>&term=<?php echo $row["x"];?>', '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');">
<?php echo $fc=$row["class"];?></a></b></td>
<td style='height:30px; background:#fff;color:#000;width:100px;'><a onclick="window.open('unisst.php?levels=<?php echo $row["class"];?>&subject=<?php echo $row["subject"];?>&user_name=<?php echo $ids;?>&term=<?php echo $$row["x"];?>', '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');">

<?php echo $term=$row["x"];?></a>



</td>
<td style='height:30px; background:#fff;color:#000;width:100px;'><a onclick="window.open('unisst.php?levels=<?php echo $row["class"];?>&subject=<?php echo $row["subject"];?>&user_name=<?php echo $ids;?>&term=<?php echo $row["x"];?>', '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');">

<?php $c= $row["subject"];
$qry = mysql_query("select subject as total
from subject where roll='$c'  "); 
$row = mysql_fetch_assoc($qry); 
echo $saves=$row['total'];
		




?></a>



</td>


<td style='height:30px; background:#fff;color:#000;width:100px;'><a onclick="window.open('unisst.php?levels=<?php echo $row["class"];?>&subject=<?php echo $row["subject"];?>&user_name=<?php echo $ids;?>&term=<?php echo $row["x"];?>', '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');">

<?php 
$qryg = "select subject as total
from resit where c101>'0' and c102=''  and subject='$c' and c105='$term' and form='$take'";$qry=mysql_query($qryg); 
$row = mysql_fetch_assoc($qry); 
 echo $s1=$row['total'];
		
if(empty($s1)){
	?>
Entry Complete
	<?php
	
	
}elseif($s1>''   ){
	?>
	<a onclick="window.open('pstv.php?acc=<?php echo $take;?>&classs=<?php echo $fc;?>&subject=<?php echo $c;?>&user_name=<?php echo $ids;?>&term=<?php echo $term;?>', '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');">
	
	Incomplete Entry
	</a>
	<?php
		
	
	
	
}



?></a>



</td>

</tr>

<?php } ?>



</table>








</form>
</div>
</body></html>