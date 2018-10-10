<?php
include 'dbc.php';?>




<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php  $take=$row[1];


?><?php } ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<title><?php echo $school;?></title>
        <link rel="shortcut icon" href="pef.png"> 
	<style>
	table,td,tr{font-family:arial; font-size:12px;}
	</style>

	</head>
	<body>
	<div style="float:left; width:700px; height:400px;">
	


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
$table = "marks";
$i = 0;

 foreach($_POST["id"] as $roll)
 {

  
  mysql_query("update resit SET
               subject='".$_POST['subject'][$i]."',
			   

               classes='".$_POST['classes'][$i]."',
               first_name='".mysql_real_escape_string($_POST['first_name'][$i])."',
               form='".$_POST['form'][$i]."',
               coef='".$_POST['coef'][$i]."',
               teacher='".$_POST['teacher'][$i]."',
               c101='".$_POST['c101'][$i]."',
			      c102='".$_POST['c102'][$i]."',
               c105='".$_POST['c105'][$i]."',
               c104='".$_POST['c104'][$i]."',
                 c103='".$_POST['c103'][$i]."'
			   where roll='$roll'
               ");
  $i++;

               

 

 }
 
 
echo "<script>alert('Datae Base Updated Successful!'); window.location.href('marks.php');</script>";
 echo  $statusf="<meta http-equiv='refresh' content='0; url=resit2.php?usr_name=$mats'>";
 exit;
 }
?>
	
	
	</div>
	</body>
	</html>