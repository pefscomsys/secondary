<?php

ini_set('max_execution_time', 300000); //300 seconds = 5 minutes

include 'dbc.php';
page_protect();

 $notes=$_SESSION['user_name'];

if(@$_SESSION['userlevel']==3){header("location: login.php?msg=Unauthorized access");}
$classes=$_POST["classes"];
$_GET['classes']=$classes;
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

<div style="width:80px; float:left; height:25px; margin-left:50PX" >
	No
</div>

<div style="width:332px; float:left; height:25px; margin-left:80PX">
STUDENT NAMES</div>

<div style="width:80px; float:left; height:25px; margin-left:50PX">
Class</div>

<div style="width:60px; float:left; height:25px; margin-left:10PX">
SEX</div>

<div style="width:100px; float:left; height:25px; margin-left: -10PX">
DATE OF Birth</div>
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
$class=$_GET['classes'];
$table = "marks";
$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["id"] as $roll)
 {
  mysql_query("Update $table SET
               first_name='". filter($_POST['first_name'][$i]) ."',
               middle_name='".$_POST['middle_name'][$i]."',
               last_name='".$_POST['last_name'][$i]."',
			    mxc1='".$_POST['mxc1'][$i]."',
				  teacher='".$_POST['teacher'][$i]."',
               sex='".$_POST['sex'][$i]."'
               where roll='$roll'");

             $old_name = filter($_POST['fname'][$i]);
             $name = filter($_POST['first_name'][$i]);
             $class = filter($_POST['last_name'][$i]);

             if($old_name != $name)
             {
                 //update the resit table.
                 $query = "UPDATE `resit` SET `first_name` = '$name'
                 WHERE `first_name` = '$old_name' AND `classes` = '$class' ";
                 mysql_query($query);
             }
  $i++;

  }


 }


echo "<script>alert('Data Base Updated Successful!'); window.location.href('marks.php');</script>";
 $sql = "SELECT * FROM $table where   form='$take' AND first_name>'' and last_name='$class'order by last_name ASC ";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $first_name_array[] = $row["first_name"];
 $middle_name_array[] = $row["middle_name"];
 $last_name_array[] = $row["last_name"];
  $teacher_array[] = $row["teacher"];
 $mxc1_array[] = $row["mxc1"];
 $sex_array[] = $row["sex"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $first_name = $first_name_array[$i];
 $middle_name = $middle_name_array[$i];
 $last_name = $last_name_array[$i];

 $teacher = $teacher_array[$i];
 $mxc1 = $mxc1_array[$i];
 $sex = $sex_array[$i];


 $count = $i;
 ++$count;

 echo "
        <div style='float:left; width:1232; background:#f4f4f4; font-size:12px; color:#686868; font-family:arial; text-transform:UPPERCASE;  '>
        <div style='float:left;width:1000px; '>

		<input type='hidden' name='id[]' value='$roll'></div>
		<div style='width:30px; float:left; height:25px; margin-left:50PX' >
			". $count ."
		</div>
        <div style='float:left;width:350px; '>

 <input type='text' name='first_name[]' value=\"$first_name\" size='42'>

<input type='hidden' name='fname[]' value=\"$first_name\" size='42'>

 <input type='hidden' name='teacher[]' value='$teacher' readonly='readonly'></div>\
        <div style='float:left;width:100px; '>
$middle_name <input type='hidden' name='middle_name[]' value='$middle_name' readonly='readonly'>

  </div>      <div style='float:left;width:80px; '>
 <input type='text' name='last_name[]' value='$last_name' size='8' style='BACKGROUND:#CCC;' ></div>
 <input type='hidden' name='age' value='$teacher'>
        <div style='float:left;width:70px; '>
 <input type='text' name='sex[]' value='$sex' size='8' style='BACKGROUND:#CCC;' ></div>

    <div style='float:left;width:50px; '>
 <input type='text' name='mxc1[]' value='$mxc1' size='8' style='BACKGROUND:#CCC;' ></div>






 </DIV><div style='float:left; width:1032; border-bottom:1px solid #ccc;'></div>";
 }
echo "<input type='submit' name='submit' value='Submit'></form>";
?>









</div>

</div>

</div>
</body>
</html>
