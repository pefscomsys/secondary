<?php include 'dbcs.php';
$rollsx=$_GET['roll'];


page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=11){header("location: login.php?error=Unauthorized access");}




 $ip=@$_SERVER['REMOTE_ADDR'];
 
 ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<title><?php echo $school;?></title>
        <link rel="shortcut icon" href="pef.png"> 
	<style>
	table,td,tr{font-family:arial; font-size:12px;}
	</style>
	

<link rel="stylesheet" href="global.css" type="text/css" media="all" />
<script src="mootools.js" type="text/javascript"></script>
<link rel="stylesheet" href="sexyalertbox.css" type="text/css" media="all" />
<script src="sexyalertbox.packed.js" type="text/javascript"></script>
<script src="jquery.min.js"></script>
<script src="jquery.preimage.js"></script>

<script>

$(document).ready(function()
{
	$('.file').preimage();
});

</script>

<style>
.prev_container{
	overflow: auto;
	width: 300px;
	height: 200px;
}

.prev_thumb{
	margin: 10px;
	height: 200px;
}
</style>
	</head>
	
	<div style="float:left; width:700px; height:auto;
">

Edit Result Slip for <?php echo $rollsx;?>
</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
<div style="float:left; width:900px; height:auto;
">

<div style="float:left; width:100px; height:25px;background:#336666;color:#fff;
">

Course Code

</div>
<div style="float:left; width:250px; height:25px;background:#336666;color:#fff;">


Full Names ()

</div>

<div style="float:left; width:100px; height:25px;background:#336666;color:#fff;">


Course Ca

</div><div style="float:left; width:100px; height:25px;background:#336666;color:#fff;">


Course Exam

</div>
<div style="float:left; width:100px; height:25px;background:#336666;color:#fff;">


Semester!

</div>
</div>
<?PHP
$table = "marks";
$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["id"] as $roll)
 {

  
  
  mysql_query("update resit SET
              
               fname='".$_POST['fname'][$i]."',
                 levels='".$_POST['levels'][$i]."',
				    db1='".$_POST['db1'][$i]."',
					   matricule='".$_POST['matricule'][$i]."',
					   departmet='".$_POST['departmet'][$i]."',
               sex='".$_POST['sex'][$i]."',
               c101='".$_POST['c101'][$i]."',
			   
               c102='".$_POST['c102'][$i]."'
			   where roll='$roll'
               ");
  $i++;

     

}
 

echo "<script>alert('Data Base Updated Successful!'); window.location.href('marks.php');</script>";

 echo $statusftydate="<meta http-equiv='refresh' content='0; url=st3buildop.php'>";
 }
?>		
<?php

 $sql = "SELECT * FROM  resit where matricule='$rollsx' order by sex ASC";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $fname_array[] = $row["fname"];
 $matricule_array[] = $row["matricule"];
 $levels_array[] = $row["levels"];
 $departmet_array[] = $row["departmet"];
 $sex_array[] = $row["sex"];
 $db1_array[] = $row["db1"]; $c101_array[] = $row["c101"]; $c102_array[] = $row["c102"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $fname = $fname_array[$i];
  $matricule = $matricule_array[$i];
   $levels = $levels_array[$i];
   $departmet = $departmet_array[$i];
  $sex = $sex_array[$i];
 $db1 = $db1_array[$i]; $c101 = $c101_array[$i];$c102 = $c102_array[$i];
?>



<div style="float:left; width:1000px; height:28px;margin-top:2px;
">



<span id=" MyTable">


<table cellspacing="0" cellpadding="0">



<input type="hidden" name="id[]" value="<?php echo $roll;?>" size="8">
<input type="hidden" name="form[]" value="<?php echo $take;?>" size="8">

<input type="hidden" name="first_name[]" value="<?php echo $rollsx;?>" size="8">


<input type="hidden" name="levels[]" value="<?php echo $levels;?>" size="8">

<input type="hidden" name="db1[]" value="<?php echo $db1;?>" size="8">

<tr>
<td style="float:left; width:70px; height:25px;
">
<input type="text" name="fname[]" value="<?php echo $fname;?>" size="8">
</td>
<td style="float:left; width:150px; height:25px;
">
<input type="text" name="departmet[]" value="<?php echo $departmet;?>" size="17">
</td>

<td style="float:left; width:130px; height:25px;
">
<input type="text" name="matricule[]" value="<?php echo $matricule;?>" size="15">
</td>














<td style="float:left; width:100px; height:25px;
">
<input type="text" name="c101[]" value="<?php echo $c101;?>" size="8">

</td>
<td style="float:left; width:100px; height:25px;
">
<input type="text" name="c102[]" value="<?php echo $c102;?>" size="8">

</td>


<td style="float:left; width:100px; height:25px;
">
<input type="text" name="sex[]" value="<?php echo $sex;?>" placeholder='' size="8">

</td>

<td style="float:left; width:350px; height:25px;
"><?php 
$qry = mysql_query("select fname as total
from courses where matricule='$rollsx' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
	echo $savesty=$row['total']; ?>

</td></tr></table></span>

<?php
}
}
echo "<input type='submit' name='submit' value='Submit'></form>";
?>

</form>

</div>

</DIV>


</div>



<script type="text/javascript">
$(function () {
    $('#form').w2form({ 
        name   : 'form',
       
        url    : 'server/post',
        fields : [
            { field: 'first_name', type: 'text', required: true },
            { field: 'last_name',  type: 'text', required: true },
            { field: 'comments',   type: 'text'},
            { field: 'address1', type: 'text', required: true },
            { field: 'address2', type: 'text' },
            { field: 'city', type: 'text', required: true },
            { field: 'state', type: 'text', required: true },
            { field: 'zip', type: 'int', required: true },
            { field: 'short_bio', type: 'text' },
            { field: 'talk_name', type: 'text', required: true },
            { field: 'description', type: 'text' }
        ],
        actions: {
            reset: function () {
                this.clear();
            },
            save: function () {
                this.save();
            }
        }
    });
});
</script>

</body>
</html>