<?php
include 'dbcs.php';
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php  $db1=$row[1];
echo $take=$row[1];

?><?php } ?>


<?php


$mats=$_POST["mats"];
$sendme=$_POST["sendme"];
if($sendme!=''){


$file = $_FILES ['pic'];

$name1 = $file ['name'];
$type = $file ['type'];
 $size = $file ['size'];
$tmppath = $file ['tmp_name']; 
				






	$content=file_get_contents($_FILES['pic']['tmp_name']);
	$content=mysql_escape_string($content);
	
	$imtype=$size;

	if ($imtype == 3){
		$ext="png"; 
	}elseif ($imtype == 2){
		$ext="jpeg";
	}elseif ($imtype == 1){
		$ext="gif";
	}
	
		


 $statusfbio="update   emplopic set profile_pic='".$content."' where empname='$mats'";




	
	$q="$statusfbio";

	mysql_query($q);







echo "<script>alert('Update Successful!'); </script>";

 echo "<meta http-equiv='refresh' content='0; url=poop.php'>";

}
?>