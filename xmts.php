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
$roll=$_GET["1"];
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
<tr class="listheader">
<td></td>
<td>Matricule</td>
<td>Full Names</td>
<td>Contact</td>


<td>Loan</td><td>Tax</td>
<td>Amount</td><td>Paid</td>
<td>Period</td><td>Status</td>
</tr>
<tr class="listheader">
<td></td>
<td>Enter Search Keyword</td><td><input type="text" name="search" size="39"placeholder="name #"style="float:left; width:400px; height:28px;" /></td>
<td><input type="submit" value="Search"  style="float:left; width:190px; height:28px;"/></td>
<td></td><td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>



<?php
$roll=$_GET["3"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $take=$row[1];
 
?>



<?php } ?>


<?php
$search=$_POST["search"];
$flag=0;
$query="select * from employer where  fname like '%$search%'  and fname>''   AND status='' order by fname ASC ";
$result=mysql_query($query);
$i=0;
 while ($row = mysql_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><input type="checkbox" name="users[]" value="<?php echo $row["roll"]; ?>" ></td>
<td><?php echo $mxx=$row["matricule"]; ?></td>
<td><?php echo $row["fname"]; ?></td>
<td><?php echo $row["contact1"]; ?>/ <?php echo $row["contact2"]; ?></td>
<td>
<a href="loan.php?roll=<?php echo $row["matricule"]; ?>">Add Loan</a></td>


<td><?php  $qryf2 = mysql_query("select tax as total  FROM  tax  where
 matricule='$mxx'  ");
 
 
$row = mysql_fetch_assoc($qryf2); 
 echo $amp=$row['total']; 
 
 ?></td>





<td><?php  $qryf2 = mysql_query("select expected_amount as total  FROM  loan  where
 matricule='$mxx'   and ess='2' ");
 
 
$row = mysql_fetch_assoc($qryf2); 
 echo $am=$row['total']; 
 
 ?></td><td>
 
 <?php  $qryf2s = mysql_query("select SUM(paid) as total  FROM  loan  where
 matricule='$mxx' and  ess='2' ");
 
 
$row = mysql_fetch_assoc($qryf2s); 
 echo $ams=$row['total']; 
 
 ?>
 
 
 
 
 </td><td>
 <?php  $qryf2ss = mysql_query("select instalm as total  FROM  loan  where
 matricule='$mxx' and  ess='2' ");
 
 
$row = mysql_fetch_assoc($qryf2ss); 
 echo $amss=$row['total']; 
 
 ?>
 </td><td>
 
 <?php
 $qryf2ss = mysql_query("select instalm as total  FROM  loan  where
 matricule='$mxx' and  ess='2' ");
 
 
$row = mysql_fetch_assoc($qryf2ss); 
$amss=$row['total']; 
 
 $mxc11trr=$ams; 
 
if(empty($mxc11trr)){
 $statusfbioffa="Ok for Loan";
}

 
elseif(($mxc11trr>=$am &&  $mxc11trr<=$am  ))
{
$statusfbioffa="PAID";

}
 
elseif(($mxc11trr<$am  ))
{
 $statusfbioffa="PENDING";

}
 
 $statusfbioffa;
 ?>
 
 
 
 
 
 </td>
</tr></a>
<?php
$i++;
}
?>
<tr class="listheader">
<td colspan="10">
</td>
</tr>
</table>
</form>
</div>
</body></html>