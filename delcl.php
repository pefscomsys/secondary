<?php 
include 'dbc.php';
page_protect();


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
		background:#fff;}
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




<div style="width:1303px; float:left; height:25px; background:#336600;  color:#fff;">

<div style="width:332px; float:left; height:25px; margin-left:10PX">
Classes</div>

<div style="width:130px; float:left; height:25px; margin-left:10PX">
Delete</div>

<div style="width:100px; float:left; height:25px; margin-left:10PX">
</div>
</div>
<div style='float:left; width:532; height:auto;'>
<?php
$table = "subject2";
$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["id"] as $roll)
 {
  mysql_query("Update $table SET
               subject='".$_POST['subject'][$i]."',
			   department='".$_POST['department'][$i]."',
               year2='".$_POST['year2'][$i]."'
         
               where roll='$roll'");
  $i++;
  }
 }
$sql = "SELECT * FROM $table";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $subject_array[] = $row["subject"];
 $year2_array[] = $row["year2"];
  $department_array[] = $row["department"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $subject = $subject_array[$i];$department= $department_array[$i];
 $year2 = $year2_array[$i];
 
?>
         <div style='float:left; width:450; background:#f4f4f4; font-size:12px; color:#686868; font-family:arial; text-transform:UPPERCASE;  '>
  
      <input type='hidden' name='id[]' value='<?php echo  $roll;?>'>      <div style='float:left;width:10px; '></div>
     
        <div style='float:left;width:150px; '>
 <input type='hidden' name='subject[]' value='<?php echo $subject;?>'><?php
$qry = mysql_query("select subject as total
from subject where roll='$subject' "); 
$row = mysql_fetch_assoc($qry);
 echo $msk=$row['total']; 
 ?>
</div> 
        <div style='float:left;width:70px; '>
 <input type='text' name='department[]' value='<?php echo $department;?>'></div>     
 <div style='float:left;width:150px; '>
 <input type='text' name='year2[]' value='<?php echo $year2;?>'style='BACKGROUND:#CCC;'readonly='readonly' ></div>
  <a href="delmmss.php?roll=<?php echo $roll;?>">      <div style='float:left;width:70px; '>Delete</div></a>
		
		<div style='float:left; width:632; border-bottom:1px solid #ccc;'></div>
		</div>
		
 <?Php }
?><input type='submit' name='submit' value='Submit'></form>





  


</div>

</div>

</div>
</body>
</html>
