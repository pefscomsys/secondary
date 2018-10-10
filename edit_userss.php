<?php

include 'dbcs.php';
 $ii = 0;
if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["userName"]);
for($i=0;$i<$usersCount;$i++) {
mysql_query("UPDATE marks set matricule='" . $_POST["userName"][$i] . "', last_name='" . $_POST["new"][$i] . "' ,first_name='" . $_POST["fnames"][$i] . "'
 WHERE roll='" . $_POST["userId"][$i] . "'");
 
 
 
 
 mysql_query("UPDATE historic set matricule='" . $_POST["userName"][$i] . "', amountpaid='" . $_POST["new"][$i] . "' , student_name='" . $_POST["fnames"][$i] . "' 
 WHERE roll='" . $_POST["rolf"][$i] . "'");
 
 
 
 mysql_query("UPDATE employees set empname='" . $_POST["userName"][$i] . "'
 WHERE id='" . $_POST["picf"][$i] . "'");
 
 

 
 
 
 
 
 
 
 
 


 foreach($_POST["id"] as $roll)
 {

  
  
  mysql_query("update resit SET
                 
					   first_name='".$_POST['fnames'][$i]."',
					   classes='".$_POST['new'][$i]."'
            
     
			   where roll='$roll'
               ");
  $ii++;

  
     
 
 
}





 $iii = 0;






}

echo "<script>alert('Change Updated Successful!'); </script>";

 echo $statusftydate="<meta http-equiv='refresh' content='0; url=list_user.php'>";
 }

?>

















<?php
$roll=$_GET["3"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $take=$row[1];
 
?>



<?php } ?>
<html>
<head>
<title>CHANGE OF DEPARTMENT</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:1000px;">
<table border="0" cellpadding="10" cellspacing="0" width="1000px" align="center">
<tr class="tableheader">
<td>CHANGE OF CLASS / DEPARTMENT</td>
</tr>
<?php
 $rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) {
$result = mysql_query("SELECT * FROM marks WHERE roll='" . $_POST["users"][$i] . "'");
$row[$i]= mysql_fetch_array($result);
?>
<tr>
<td>
<table border="0" cellpadding="10" cellspacing="0" width="800" align="center" class="tblSaveForm">
<tr>
<td><label>Matricule</label></td>
<td><input type="hidden" name="userId[]" class="txtField" value="<?php echo $row[$i]['roll']; ?>">
<input type="text" name="userName[]" class="txtField" value="<?php echo $row[$i]['matricule']; ?>"></td>

 
 
</tr>
<tr>
<td><label>Full Names(s)</label></td>
<td><input type="text" name="fnames[]" class="txtField" value="<?php echo $mats=$row[$i]['first_name']; ?>"></td>
</tr>
<td><label>Old class/Department</label></td>
<td><input type="text" name="dept[]" class="txtField" value="<?php echo $row[$i]['last_name']; ?>"></td>
</tr>
<td><label>New Department/ Class</label></td>
<td><input type="text" name="new[]" class="txtField" style="color:#787878;"value="<?php echo $row[$i]['last_name']; ?>"></td>
 <input type="hidden" name="rolf[]" class="txtField" value="<?php 
   
$qry = mysql_query("select roll as total
from historic where matricule='$mats'  and oldb='$take' "); 
$row = mysql_fetch_assoc($qry);
 echo $msk=$row['total']; 

 ?>" size='28'>
 
 
 
  
<?php
echo $mats;
 $sql = "SELECT * FROM  resit where first_name='$mats' order by c105 ASC";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $first_name_array[] = $row["first_name"];
 $matricule_array[] = $row["matricule"];
 $levels_array[] = $row["levels"];
 $classes_array[] = $row["classes"];
 $c105_array[] = $row["c105"];
 $form_array[] = $row["form"]; $c101_array[] = $row["c101"]; $c102_array[] = $row["c102"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $first_name = $first_name_array[$i];
  $matricule = $matricule_array[$i];
   $levels = $levels_array[$i];
   $classes = $classes_array[$i];
  $c105 = $c105_array[$i];
 $form = $form_array[$i]; $c101 = $c101_array[$i];$c102 = $c102_array[$i];
?>

 

<table cellspacing="0" cellpadding="0" class="tblSaveForm">



<input type="hidden" name="id[]" value="<?php echo $roll;?>" size="8">
<input type="hidden" name="db1[]" value="<?php echo $take;?>" size="8">

<input type="hidden" name="fname[]" value="<?php echo $rollsx;?>" size="8">


<input type="hidden" name="levels[]" value="<?php echo $levels;?>" size="8">

<input type="hidden" name="db1[]" value="<?php echo $form;?>" size="8">

<tr>
<td style="float:left; width:250px; 
">
<input type="text" name="first_name[]" value="<?php echo $first_name;?>" size="35" readonly='readonly'>
</td>
<td style="float:left; width:80px; 
">
<input type="text" name="classes[]" value="<?php echo $classes;?>" size="27" readonly='readonly'>
</td>

<input type="hidden" name="matricule[]" value="<?php echo $matricule;?>" size="20" readonly='readonly'>

<td style="float:left; width:10px; 
"></td>














<td style="float:left; width:100px; 
">
<input type="text" name="c101[]" value="<?php echo $c101;?>" size="13" readonly='readonly'>

</td>
<td style="float:left; width:100px; 
">
<input type="text" name="c102[]" value="<?php echo $c102;?>" size="13" readonly='readonly'>

</td>


<td style="float:left; width:100px; 
">
<input type="text" name="c105[]" value="<?php echo $c105;?>" placeholder='' size="8" readonly='readonly'>

</td>

<td style="float:left; width:350px; 
"><?php 
$qry = mysql_query("select fname as total
from courses where matricule='$rollsx' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
	echo $savesty=$row['total']; ?>

</td></tr></table></span>

<?php
}
 ?>

 
 
 
 
 
 	
<?php

 $sql = "SELECT * FROM  attendance where fname='$mats' order by db1 ASC";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $ids_array[] = $row["id"];
 $fnames_array[] = $row["first_name"];
 $departmets_array[] = $row["classes"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($ids_array);$i++)
{
 $rollss = $ids_array[$i];
 $fnames = $fnames_array[$i];
   $departmets = $departmets_array[$i];
?>
 
 
 

<table cellspacing="0" cellpadding="0"   >



<input type="hidden" name="ids[]" value="<?php echo $rollss;?>" size="8">
<tr>
<td style="float:left; width:200px; 
">
<input type="hidden" name="fnames[]" value="<?php echo $first_name;?>" size="13" readonly='readonly'>
</td>
<td style="float:left; width:180px; 
">
<input type="hidden" name="departmets[]" value="<?php echo $classes;?>" size="27" readonly='readonly'>
</td>














 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
</tr>
</table>
</td>
</tr>
<?php
}
?>
<?php
}
?>
<tr>
<td colspan="4"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></html>