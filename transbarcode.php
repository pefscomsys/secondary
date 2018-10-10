<?php 
include 'dbc.php';
?>

<?php

$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<?php echo  $take=$row[1];
?>
		 

<?php } ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<title><?php echo $school;?></title>
        <link rel="shortcut icon" href="pef.png"> 
	<style>
	table,td,tr{font-family:arial; font-size:12px;}
	</style>
	
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
	<body>
	<div style="float:left; width:700px; height:400px;">
	
	
<script type="text/javascript" language="javascript"> 
<!--
// By Adam Khoury @ www.developphp.com
function validateMyForm ( ) { 
    var isValid = true;
    if ( document.form1.comments.value == "" ) { 
	    alert ( "please Enter  Comment subject name" ); 
	    isValid = false;
    } else if ( document.form1.comments.value.length < 1 ) { 
            alert ( "please Enter  comment name  must be Enter " ); 
            isValid = false;
    } 
	
	 else if ( document.form1.from1.value.length < 1 ) { 
            alert ( "please Enter   start range Code  must be Enter " ); 
            isValid = false;
    } 
	
	 else if ( document.form1.from2.value.length < 0 ) { 
            alert ( "please  end point  must be Enter " ); 
            isValid = false;
    } 
	
		else if ( document.status.value == "" ) { 
            alert ( "Please status must be enter " ); 
            isValid = false;
    } 
	
	
	
//-->
</script>
<script type="text/javascript">
function doCalc(form) {
  form.balance.value = parseInt(form.expected_amount.value) - parseInt(form.amount_paid.value);
}
</script>

		 

<div style="width:903px; float:left; height:25px; background:#11AAAA;  color:#fff;">SECOND SEMESTER - MARKS REGISTRATION SECTION</div>
<div style="width:903px; float:left; height:25px; background:#336600;  color:#fff;">

<div style="width:372px; float:left; height:25px; margin-left:10PX">
STUDENT NAMES</div>

<div style="width:80px; float:left; height:25px; margin-left:10PX">
CA</div>

<div style="width:100px; float:left; height:25px; margin-left:10PX">
EXAM</div>
</div>

<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php $take=$row[1];



?>
		 
		 
<?php
$table = "courses";
$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["id"] as $roll)
 {

  mysql_query("insert into barcode SET
               extra='".$_POST['department'][$i]."',
			   

               db1='".$_POST['db1'][$i]."',
               matricule='".$_POST['matricule'][$i]."',
               barcode='".$_POST['barcode'][$i]."'
               ");
  $i++;

               

  }
 }
 

echo "<script>alert('Datae Base Updated Successful!'); window.location.href('marks.php');</script>";
?>
<?php } ?>			<?php
	  /******************** ERROR MESSAGES*************************************************
	  This code is to show error messages 
	  **************************************************************************/
	  if(!empty($err))  {
	   echo "<div class=\"msg\" style='text-decoration:blink;color:red;'>";
	  foreach ($err as $e) {
	    echo "$e <br>";
	    }
	  echo "</div>";	
	   }
	  /******************************* END ********************************/	  
	  
	  ?>	<?php
 $sql = "SELECT * FROM courses where db1='$take' and levels='200' order by matricule ASC";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $fname_array[] = $row["fname"];
 $matricule_array[] = $row["matricule"];
 $c121_array[] = $row["c121"];
 $c122_array[] = $row["c122"]; $barcode_array[] = $row["barcode"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $fname = $fname_array[$i];
 $matricule = $matricule_array[$i];
 $c121 = $c121_array[$i];
 $c122 = $c122_array[$i]; $barcode = $barcode_array[$i];

 echo "
        <div style='float:left; width:732; background:#f4f4f4; font-size:12px; color:#686868; font-family:arial; text-transform:UPPERCASE;  '>
        <div style='float:left;width:300px; '>
		
		<input type='hidden' name='id[]' value='$roll'></div>
        <div style='float:left;width:180px; '>
		$fname

 <input type='hidden' name='semester[]' value='2' readonly='readonly'>
 <input type='hidden' name='db1[]' value='$take' readonly='readonly'>
 <input type='hidden' name='level[]' value='$clasx' readonly='readonly'>
 <input type='hidden' name='department[]' value='1' readonly='readonly'>
		
 <input type='hidden' name='course[]' value='$course' readonly='readonly'></div>
        <div style='float:left;width:200px; '>
$matricule <input type='hidden' name='matricule[]' value='$matricule' readonly='readonly'>
  </div>      <div style='float:left;width:80px; '>
 <input type='text' name='c121[]' value='$c121' size='8' style='BACKGROUND:#CCC;' maxlength='4'></div>
        <div style='float:left;width:70px; '>
 <input type='text' name='barcode[]' value='$barcode' size='8' style='BACKGROUND:#CCC;' maxlength='4'></div></DIV>
 <div style='float:left; width:932; border-bottom:1px solid #ccc;'></div>";
 }
 
echo "<input type='submit' name='submit' value='Submit'></form>";
?>






  


</div>

	
	
	</body>
	</html>