<?php 
include 'dbc.php';
$ops=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];









?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Biodata Form</title>




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
	height: 135px;
}

.prev_thumb{
	margin: 10px;
	height: 100px;
}
</style>
<style>
div.fileinputs {
	position: relative;
}

.submit{width:140px;
	background-color: #50c1e9;
	border: 1px solid rgba(0,0,0,.1);
	color: rgb(255,255,255);
	font-family: 'Varela Round', sans-serif;
	font-size: .95em;
	padding: .55em .9em;
	transition: all 600ms ease;	
}

	.submit:hover {
		background-color: #1bc5b3;
		cursor: pointer;
	}

div.fakefile {
	position: absolute;
	top: 0px;
	left: 0px;
	z-index: 1;
}

table,td{border:1px solid #ccc; color:#000;
font-size:12px;
}

input {
	top: 0px;
	left: 0px;
	padding: 2px 2px 2px 5px  #CCC;
}


.prev_thumb{
	margin: 10px;
	height: 100px;
}
</style>


<meta charset=utf-8 />


</head>













 <body>


<div style="width:700px; height:400px;">

</script>






<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $take=$row[1];



?>
<?php } ?>






<?php
$rtt=$_POST["classes"];
$query="select * from marks where last_name='$rtt' and form='$take'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 

?><div style="margin:auto;width:900px; height:800px;">
<div style="float:left;width:900px; height:700px; border:1px solid #ccc;">

<div style="float:left;width:168px; height:122px; border:1px solid #ccc;">
<?php 
				  $mxxs=$row['matricule'];  $fname=$row['first_name'];$sex=$row['sex'];$deptt=$row['last_name'];$levels=$row['levels'];$cxx1=$row['cxx1'];$cxx2=$row['cxx2'];
				$qry = mysql_query("select id as total
from employees where empname='$mxxs'  "); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row['total']; ?>
			
				
	
					<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="168px" height="122px">

</div>
<div style="float:left;width:450px; height:122px;border-right:1px solid #ccc;">

<div style="float:left;width:450px;text-transform:uppercase; font-size:23px;margin-top:10px; height:30px;border-bottom:1px solid #ccc;">
&nbsp;<?php echo $fname;?>

</div>
<div style="float:left;width:450px;text-transform:uppercase; font-size:23px;margin-top:10px; height:30px;border-bottom:1px solid #ccc;">
&nbsp;Mat: <?php echo $mxxs;?>

</div>
<div style="float:left;width:450px;text-transform:uppercase; font-size:23px;margin-top:10px; height:30px;border-bottom:1px solid #ccc;">
&nbsp;class: <?php echo $deptt;?>

</div>
</div>

<div style="float:left;width:270px; height:122px;border-bottom:1px solid #ccc;">

<div style="float:left;width:270px;text-align:center;font-size:28px; height:30px;margin-top:40px;">
&nbsp; <?php echo $sex;?>
</div>



</div>
<div style="float:left;width:900px;text-align:center;font-size:28px;border-bottom:1px solid #ccc; height:45px;margin-top:10px;">
&nbsp; GUARDIAN DETAIL
</div>
<div style="float:left;width:250px;color:#ccc;text-align:center;font-size:20px;border-bottom:1px solid #ccc;border-right:1px solid #ccc; height:45px;margin-top:10px;">
&nbsp; FATHER NAME
</div>
<div style="float:left;width:350px;text-align:center;font-size:20px;border-bottom:1px solid #ccc;border-right:1px solid #ccc; height:45px;margin-top:10px;">
&nbsp; <?php

$qry = mysql_query("select father as total
from admission where fname='$fname'  and status='$take'  "); 
$row = mysql_fetch_assoc($qry); 
echo $save=$row['total']; 
 ?>
</div>
<div style="float:left;width:290px;text-align:center;font-size:20px;border-bottom:1px solid #ccc; height:45px;margin-top:10px;">
&nbsp; <?php

$qry = mysql_query("select contact1 as total
from admission where fname='$fname'  and status='$take'  "); 
$row = mysql_fetch_assoc($qry); 
echo $save=$row['total']; 
 ?>
</div>


<div style="float:left;width:250px;color:#ccc;text-align:center;font-size:20px;border-bottom:1px solid #ccc;border-right:1px solid #ccc; height:45px;margin-top:10px;">
&nbsp; MOTHER NAME
</div>
<div style="float:left;width:350px;text-align:center;font-size:20px;border-bottom:1px solid #ccc;border-right:1px solid #ccc; height:45px;margin-top:10px;">
&nbsp; <?php

$qry = mysql_query("select mother as total
from admission where fname='$fname'  and status='$take'  "); 
$row = mysql_fetch_assoc($qry); 
echo $save=$row['total']; 
 ?>
</div>
<div style="float:left;width:290px;text-align:center;font-size:20px;border-bottom:1px solid #ccc; height:45px;margin-top:10px;">
&nbsp; <?php

$qry = mysql_query("select contact2 as total
from admission where fname='$fname'  and status='$take'  "); 
$row = mysql_fetch_assoc($qry); 
echo $save=$row['total']; 
 ?>
</div>



<div style="float:left;width:200px;color:#ccc;text-align:center;font-size:20px;border-bottom:1px solid #ccc;border-right:1px solid #ccc; height:45px;margin-top:10px;">
&nbsp; ID CARD NO
</div>
<div style="float:left;width:250px;text-align:center;font-size:20px;border-bottom:1px solid #ccc;border-right:1px solid #ccc; height:45px;margin-top:10px;">
&nbsp; <?php

$qry = mysql_query("select idcard as total
from admission where fname='$fname'  and status='$take'  "); 
$row = mysql_fetch_assoc($qry); 
echo $save=$row['total']; 
 ?>
</div>
<div style="float:left;width:150px;color:#ccc;text-align:center;font-size:20px;border-bottom:1px solid #ccc;border-right:1px solid #ccc; height:45px;margin-top:10px;">
&nbsp; ADDRESS
</div>
<div style="float:left;width:290px;text-align:center;font-size:20px;border-bottom:1px solid #ccc; height:45px;margin-top:10px;">
&nbsp; <?php

$qry = mysql_query("select address as total
from admission where fname='$fname'  and status='$take'  "); 
$row = mysql_fetch_assoc($qry); 
echo $save=$row['total']; 
 ?>
</div>


<div style="float:left;width:900px;text-align:center;font-size:28px;border-bottom:1px solid #ccc; height:45px;margin-top:0px;">
&nbsp; STUDENT DETAIL
</div>

<div style="float:left;width:200px;color:#ccc;text-align:center;font-size:20px;border-bottom:1px solid #ccc;border-right:1px solid #ccc; height:45px;margin-top:10px;">
&nbsp; YEAR
</div>
<div style="float:left;width:250px;text-align:center;font-size:20px;border-bottom:1px solid #ccc;border-right:1px solid #ccc; height:45px;margin-top:10px;">
&nbsp; <?php

$qry = mysql_query("select status as total
from admission where fname='$fname'  and status='$take'  "); 
$row = mysql_fetch_assoc($qry); 
echo $save=$row['total']; 
 ?>
</div>
<div style="float:left;width:150px;color:#ccc;text-align:center;font-size:20px;border-bottom:1px solid #ccc;border-right:1px solid #ccc; height:45px;margin-top:10px;">
&nbsp; AGE
</div>
<div style="float:left;width:290px;text-align:center;font-size:20px;border-bottom:1px solid #ccc; height:45px;margin-top:10px;">
&nbsp; <?php
$rty=date("Y"); 
$qry = mysql_query("select year as total
from admission where fname='$fname'  and status='$take'  "); 
$row = mysql_fetch_assoc($qry); 
 $sa=$row['total']; 
echo $r=$rty-$sa;
 ?>
</div>

<div style="float:left;width:900px;text-align:center;font-size:28px;border-bottom:1px solid #ccc; height:45px;margin-top:0px;">
&nbsp; STUDENT OPTIONS
</div>


<?php
		 
		

$query = mysql_query("select * from boption where ids='$fname' and db1='$take' and tick='1'"); 

		 while ($row = mysql_fetch_array($query)) {
		  
 

?>



<div style="float:left;width:100px;font-size:20px; height:25px;margin-top:0px;">

<?php echo $row["items"];?>


</div>

<div style="float:left;width:180px;font-size:20px; height:25px;margin-top:0px;">

=<?php echo $row["price"];?>


</div>

<div style="float:left;width:130px;color:#ccc;font-size:20px; height:25px;margin-top:0px;">

<?php echo $row["date"];?>,


</div>





<?PHP } ?>



</div>



</div>



<?php } ?>

</body>
</html>