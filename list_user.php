<?php
include 'dbc.php';
$result = mysql_query("SELECT * FROM marks order by first_name ASC");
?>
<html>
<head>
<title>Users List</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script language="javascript" src="usersss.js" type="text/javascript"></script>
</head>
<body>
<form name='frmUser' method='post' action=''>
<div style="width:500px;">
<table border="0" cellpadding="10" cellspacing="1" width="800" class="tblListForm">
<tr class="listheader">
<td></td>
<td>Matricule</td>
<td>Full Names</td>
<td>Department</td><td>Motive</td>

</tr>
<tr class="listheader">
<td></td>
<td>Enter Search Keyword</td><td><input type="text" name="search" size="39"placeholder="name #" /></td>
<td><input type="submit" value="Search" /></td>
<td>Motive</td>




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
$query="select * from marks where  first_name like '%$search%'  and first_name>''  AND form='$take' order by last_name ASC ";
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
<td><?php echo $row["matricule"]; ?></td>
<td><?php echo $row["first_name"]; ?></td>
<td><?php echo $row["last_name"]; ?></td>
<td>Change Department</td>
</tr>
<?php
$i++;
}
?>
<tr class="listheader">
<td colspan="7"><input type="button" name="update" value="Update" onClick="setUpdateAction();" /> <input type="button" name="delete" value="Delete"  onClick="setDeleteAction();" /></td>
</tr>
</table>
</form>
</div>
</body></html>