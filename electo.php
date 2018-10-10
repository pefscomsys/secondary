<?php 
include 'dbc.php';
page_protect();


 $notes=$_SESSION['user_name'];









?>
<html>



<head>
<style>



</style>

</head>
<body>

<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $take=$row[1];


?><?php } ?>

<div style="float:left; margin-top:40px; margin-left:20px;">
<form name="look" method="post" action="electo.php">
<table style=" border:1px solid silver;height:30px;" cellpadding="5px" cellspacing="0px" align="center" border="0" width="700px">
<tr>
<td colspan="4" style=" color:#000; font-size:20px; background:#ffcc00;">Search</td>
</tr>
<tr>
<td>Enter Search Keyword</td>
<td><input type="text" name="search" size="10"placeholder="use admission #" /></td>
<td style="float:left;height:30px;"><input type="submit"class="submit" value="Search" /></td>
</tr>
<tr bgcolor="#666666" style="color:#fff;">
<td style="color:#fff">Nam of student </td>
<td style="color:#fff">LEVEL</td>
<td style="color:#fff">Permission</td>








<?php
$search=$_POST["search"];
$flag=0;
$query="select * from courses where fname like '%$search%' and db1='$take'and fname>''  ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		 echo "<tr >
		 <td>",$row['matricule'],"&nbsp;",$row['fname'],",</td>
		 <td style='color:#000;'>",$row['levels'],"</td><td><a href='choose.php?roll=",$row['matricule'],"'> Choose Candidate(s)</a></td></tr>";

		 }
		 if($flag==0)
		 echo "<tr><td colspan='3' align='center' style='color:red'>No student left for Confirmation</td></tr>";
		 		 
?>
<tr>
<td colspan="3">&nbsp;</td></tr>
<tr bgcolor="#CCCCCC">
</tr>
</table>
</form>
</fieldset>
</div>
</body>

</htmL>