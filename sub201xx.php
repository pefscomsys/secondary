<?php 
include 'dbc.php';
page_protect();

 $notes=$_SESSION['user_name'];

if(@$_SESSION['userlevel']==3){header("location: login.php?msg=Unauthorized access");}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SCHOOL MANAGEMENT SYSTEM</title>
<style>
 .RolloverMenu { width:250px; font-size:11pt; font-weight:bold; color:#000000; background:rgb(180,235,230);}
   .RolloverMenu ul{ list-style-type:none; margin:0; padding:0;}
   .RolloverMenu li{  margin:2px; text-align:center; }
  .RolloverMenu a{ display:block; margin:0; padding:4px; border:1pt solid black; text-decoration:none;}
  .RolloverMenu a:hover{ background:#ffcc00}
  .RolloverMenu a:link, .RolloverMenu a:active, .RolloverMenu a:visited{ color:#000000;}
   
#headers {
		
                float:left;
		padding:0px 0;
		width:100%; border-bottom: 20px solid #660000; color: #CCC;
		z-index:9999px;
		background:#000;
		margin-top:-10px;
	}
table{font-family:Verdana, Geneva, sans-serif;
}
tr,td{border:1px ;}
.textfield {
	font-size: 11px;
	color: #333333;
	background: #F7F7F7;
	border: 1px solid #CCCCCC;
	padding-left: 1px;
}a {
	color: #2D3954;
	font-size: 11px;
	text-decoration:none;
}
a:visited {
	color:red;
}
a:active {
	color:blue;
}
a:link{text-decoration:none;}
a:hover {
	color: #99CC00;
}


body{
		background:wheat;}
#container{float:left;
margin-left:9px;

width:900px; height:auto;
background:#fff;
border-radius: 8px 8px 8px 8px;

-o-border-radius: 8px 8px 8px 8px;

-moz-border-radius: 8px 8px 8px 8px;

-khtml-border-radius: 8px 8px 8px 8px;

}.header{
margin:auto;

width:900px;
height:150px;
	
	
	}
.x{float:left;
width:900px;
height:150px;
	
	
	}
	
#cout{ margin:auto; width:900px;
}
#containers{float:left;
margin-top:10px;
box-shadow:1px 1px 1px   #fff;
width:920px; height:auto;
background-color:#660000; !important;-moz-linear-gradient(top, #E3E3E3 0%, #EDEDED 100%) );}

</style>
</head>

<body>

<div style="width:550px; float:left; height:7000px; margin-top:60px; margin-left:2WW0px;  border-LEFT: 2px solid #f4f4f4;">

<DIV Style="font-family:Stencil Std;color:rgba(230,164,64, 0.9);width:550px; height:30px;margin-top:7px;margin-left:3px; "><?PHP ECHO $notes;?></a>






<div style="width:1003px; float:left; height:25px; background:#336600;  color:#fff;">

<div style="width:50px; float:left; height:25px; margin-left:10PX">
code</div>

<div style="width:333px; float:left; height:25px; margin-left:10PX">
Provider</div>
<div style="width:80px; float:left; height:25px; margin-left:10PX">
subject</div>

<div style="width:60px; float:left; height:25px; margin-left:10PX">
</div>

<div style="width:100px; float:left; height:25px; margin-left:10PX">
Coefficient</div>
</div>

<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php  $take=$row[1];


?>
		 

<?php } ?>
<?php
$table = "subject";
$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["id"] as $roll)
 {
  mysql_query("Update $table SET
               db1='".$_POST['db1'][$i]."',
               subject='".$_POST['subject'][$i]."',
               year2='".$_POST['year2'][$i]."'
				  
               where roll='$roll'");
  $i++;

  }
 

 }
 
  
echo "<script>alert('Datae Base Updated Successful!'); window.location.href('marks.php');</script>";
 $sql = "SELECT * FROM subject  order by year2 ASC ";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $db1_array[] = $row["db1"];
 $subject_array[] = $row["subject"];
 $year2_array[] = $row["year2"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $db1 = $db1_array[$i];
 $subject = $subject_array[$i];
 $year2 = $year2_array[$i];
 

 echo "
        <div style='float:left; width:1232; background:#f4f4f4; font-size:12px; color:#686868; font-family:arial; text-transform:UPPERCASE;  '>
        <div style='float:left;width:900px; '>
		  <div style='float:left;width:50px; '>$roll
		<input type='hidden' name='id[]' value='$roll'></div>
        <div style='float:left;width:350px; '>
		
 <input type='text' name='db1[]' value='$db1' size='42'>
 <input type='hidden' name='teacher[]' value='$teacher' readonly='readonly'></div>
        <div style='float:left;width:200px; '>
 <input type='text' name='subject[]' value='$subject' >

  </div>      <div style='float:left;width:80px; '>
 <input type='text' name='year2[]' value='$year2' size='8' style='BACKGROUND:#CCC;' ></div>

 
      
 
 
 
 
 
 </DIV><div style='float:left; width:1032; border-bottom:1px solid #ccc;'></div>";
 }
echo "<input type='submit' name='submit' value='Submit'></form>";
?>






  


</div>

</div>

</div>
</body>
</html>
