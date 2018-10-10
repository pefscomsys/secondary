<?php 
include 'dbc.php';
page_protect();

 $notes=$_SESSION['user_name'];

if(@$_SESSION['userlevel']==3){header("location: login.php?msg=Unauthorized access");}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="hidden/html; charset=utf-8" />
<title>SCHOOL MANAGEMENT SYSTEM</title>
<style>
 .RolloverMenu { width:250px; font-size:11pt; font-weight:bold; color:#000000; background:rgb(180,235,230);}
   .RolloverMenu ul{ list-style-type:none; margin:0; padding:0;}
   .RolloverMenu li{  margin:2px; hidden-align:center; }
  .RolloverMenu a{ display:block; margin:0; padding:4px; border:1pt solid black; hidden-decoration:none;}
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
.hiddenfield {
	font-size: 11px;
	color: #333333;
	background: #F7F7F7;
	border: 1px solid #CCCCCC;
	padding-left: 1px;
}a {
	color: #2D3954;
	font-size: 11px;
	hidden-decoration:none;
}
a:visited {
	color:red;
}
a:active {
	color:blue;
}
a:link{hidden-decoration:none;}
a:hover {
	color: #99CC00;
}


body{
		background:#efefef;}
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

<div style="width:550px; float:left; height:7000px; margin-top:-60px;   border-LEFT: 2px solid #f4f4f4;">

<DIV Style="font-family:Stencil Std;color:rgba(230,164,64, 0.9);width:550px; height:30px;margin-top:7px;margin-left:3px; ">REPORT CARD</a>


<div style="float:left; margin-left:460px;"><a href="first.php">GO BACK</a></div>

		 
<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php $take=$row[1];



?>
<?php } ?>




<?php
$roll=$_GET["roll"];
$query="select * from marks where roll='$roll'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<form name="update" method="post" action="reportpngss.php?roll=<?php echo $roll?>">
  <div style="margin-left:40px;">
<?php  

@$sql="select * from marks where roll='$roll' and status='0'";
@$query=mysql_query($sql);
while(@$row=mysql_fetch_array($query))
{
 @$image=$row ['photo'];
 ?>
<img src="image/<?php echo $image; ?>" width="130" height="120" border="3px">

<input type="hidden" value="marks" name="table" hidden="hidden">
<input type="hidden" value="$follow" name="t2" hidden="hidden">
<input type="hidden" value="one" name="form" hidden="hidden">
<input type="hidden" value="image" name="t1" hidden="hidden">

<table style=" border:1px solid silver ; background:#fff; color:#000; font-size:12px;" cellpadding="10px" bgcolor="#fff"cellspacing="0px" align="center" border="0">
    <tr>
      <td colspan="4" width="650px" style="  baackground:#ccc;color:#000; font-size:20px;">ADD STUDENT RECORD</td>
    </tr>
   
     <td></td>
      <td><input type="text" name="rolls" size="10" value="<?php echo $row[0];?>"   readonly="readonly"  ></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="hidden" name="first_name" size="20" value="<?php echo $row[4];?>"     readonly="readonly" ></td>
       
      <td><input type="hidden" name="middle_name" size="20" value="<?php echo $row[5];?>"     readonly="readonly"></tr><tr><td></td>
	    	     <td><input type="hidden" name="classes" size="20" value="<?php echo $classes=$row['last_name'];?>"    readonly="readonly"  >
		 
		 
		 
		 
		 
			<?php
 $sql = "SELECT * FROM marks where form='$take' and last_name='$classes' order by first_name  ASC";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $first_name_array[] = $row["first_name"];
 $matricule_array[] = $row["matricule"];
 $last_name_array[] = $row["last_name"];
 $form_array[] = $row["form"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $first_name = $first_name_array[$i];
 $matricule = $matricule_array[$i];
 $last_name = $last_name_array[$i];
 $form = $form_array[$i];

?>
        <div style='float:left; width:732; background:#f4f4f4; font-size:12px; color:#686868; font-family:arial; text-transform:UPPERCASE;  '>
        <div style='float:left;width:300px; '>
		
		<input type='hidden' name='id[]' value='$roll'>
       

</div>
        <div style='float:left;width:20px; '>

 <input type='hidden' name='first_name[]' value='<?php echo $first_name;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='classes[]' value='<?php echo $classes;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
  
    </div>    
  <div style='float:left;width:80px; '>
  
 <input type='hidden' name='subject[]' value='<?php echo $subject;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='coef[]' value='<?php echo $coef;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='teacher[]' value='<?php echo $fish;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='form[]' value='<?php echo $take;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='c101[]' value='<?php
 
$qry = mysql_query("select sum(((c101+c102)/2)*coef) as total
from resit where first_name='$first_name' and classes='$classes' and form='$take' and c105='3'  "); 
$row = mysql_fetch_assoc($qry); 
echo $save=$row['total']; 
 
 ?>' size='8' style='BACKGROUND:#CCC;' maxlength='2'></div>
        <div style='float:left;width:70px; '>
		
 <input type='hidden' name='c105[]' value='1' size='8' style='BACKGROUND:#CCC;' maxlength='2'>
 <input type='hidden' name='c102[]' value='<?php
 
$qry = mysql_query("select sum(coef) as total
from resit where first_name='$first_name' and classes='$classes' and form='$take' and c101>'' and c102>'' and c105='3'  "); 
$row = mysql_fetch_assoc($qry); 
echo $saves=$row['total']; 
 
 ?>' size='8' style='BACKGROUND:#CCC;' maxlength='2'></div>
 
  <div style='float:left;width:70px; '>
		<?php
 
$qry = mysql_query("select sum(coef) as total
from resit where first_name='$first_name' and classes='$classes' and form='$take' and c101>'' and c102>'' and c105='3'  "); 
$row = mysql_fetch_assoc($qry); 
 $saves=$row['total']; 
 
 ?>
 <input type='hidden' name='c103[]' value='<?php 
 
 $mxc11=$saves;
if(empty($mxc11)){$status="0";}
elseif($mxc11>'' ){
$status=$save/$saves;
 }
 elseif($mxc11="" ){
$status="0";
 }
 echo $status; 
 
 ?>' size='8' style='BACKGROUND:#CCC;' maxlength='2'></div>
 
 <input type='hidden' name='name1' value='<?php echo $classes;?>' size='8' style='BACKGROUND:#CCC;' maxlength='2'>
 
 </DIV>
 <div style='float:left; width:932; border-bottom:1px solid #ccc;'></div>


    </tr><tr>
        <td></td>
          <td><input type="hidden" name="sex" size="10" value="<?php echo $row[7];?>"      readonly="readonly" ></td>
    </tr>
<tr>
        <td></td>
          <td><input type="hidden" name="date2" size="10" value="<?php echo $row[8];?>"    readonly="readonly"></td>
    </tr>

</td></tr><tr>
      <td colspan="4" align="center"><input type="hidden" name="do" value="update" >
   
<?php
 }
 
echo "<input type='submit' name='submit' value='process all report cards'></form>";
?>
</td>
    </tr>

  </table>
 <?php } ?>

 <?php } ?>

  </table>
</form>
  


</div>

</div>

</div>
</body>
</html>


  
