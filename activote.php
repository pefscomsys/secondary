
<?php 
include 'dbcs.php';
$year=$_POST["year"];
if($year!=""){

$query1g="update offs set  
year='$year' where roll='1'
";

mysql_query ($query1g) or die ('could not updated:'.mysql_error());
}
?>
<fieldset style="float:left; width:350px;">
<legend style="background:wheat;">Set Vote Condition</legend>
<?php
$query="select * from offs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?><?php $year=$row["year"];?>
<form method="POST" action="activote.php">
<table cellspacing="5" cellpadding="0">


<tr><td>Set Window for Vote 1= ON,blank=off</td><td><input type="text" name="year"value="<?php echo $year;?>"></td>
<tr><td></td><td><input type="submit" name="button"value="Submit"></td></tr>
</table>

</fieldset>

</form>
 

<?php } ?>
