<?php 
include 'dbc.php';



?><?php
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $school=$row[1];
$school2=$row[2];
?>
<?php } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $school;?></title>
<script type="text/javascript">
var popupwin = null;
function popupWin(url,name) {
popupwin = window.open(url,name,'width=700,height=400');
}
if (!document.all) {
document.captureEvents (Event.CLICK);
}
document.onclick = function() {
if (popupwin != null && !popupwin.closed) {
popupwin.focus();
}
}
</script>
<style>

body{font-family:Trebuchet MS; font-size:11px;
background:url(Tulips.jpg);}
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
table{font-family:Verdana, Geneva, sans-serif;}
.textfield {
	font-size: 11px;
	color: #333333;
	background: #F7F7F7;
	border: 1px solid #CCCCCC;
	padding-left: 1px;
}a {
	color: #2D3954;
	font-size: 11px;
}
a:hover {
	color: #99CC00;
}

#container{margin:auto;

width:800px; height:900px;
background:#fff;
border-radius: 8px 8px 8px 8px;

-o-border-radius: 8px 8px 8px 8px;

-moz-border-radius: 8px 8px 8px 8px;

-khtml-border-radius: 8px 8px 8px 8px;

}.header{
margin:auto;

width:800px;
height:150px;
	
	
	}
.x{
margin:auto;

width:800px;
height:150px;
	
	
	}
#containers{margin:auto;
margin-top:-5px;
box-shadow:1px 1px 1px   #fff;
width:820px; height:1150px;
background-color:#660000; !important;-moz-linear-gradient(top, #E3E3E3 0%, #EDEDED 100%) );}

</style>
</head>

<body>


<DIV Style="font-family:verdana;color:#282828:margin-top:7px;margin-left:7px;line-height:28px; ">

<ul>





 
<form name="look" method="post" action="attendSssss.php">
<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px" align="center" border="0" width="450px">
<tr bgcolor="#660000" style="color:#FFFFFF;">
<td colspan="4" style=" color:#fff; font-size:20px">Print Attendance Record <?php echo date('M');?></td>
</tr>
<tr>
<td ></td>
<td>
</td></tr>













<tr>
<td >Select Department</td>
<td>
<select name="department">
<?php
$rs=mysql_query("Select * from classes order by  class",$link);
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[1]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[1]'>$row[1]</option>";
}
}
?></select>











</td></tr><tr>
<td>Select Level</td><td>
<select name="levels">
<?php
$rs=mysql_query("Select * from  levels order by   levels",$link);
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[1]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[1]'>$row[1]</option>";
}
}
?></select>
</td></tr>



<tr>
<td>Month</td><td><select name="months" class="required" id="select8"style="background:#ccc;">
               
                <option value="Jan">January</option>
                <option value="Feb">Feb</option>
				
				<option value="Mar">Mar</option>
				
				
				<option value="Apr">Apr</option>
				
				<option value="Jun">Jun</option>
				
				
				
				
				<option value="Jul">Jul</option>
              
			  
			  
				<option value="Aug">Aug</option>
              
			  
				<option value="Sep">Sep</option>
              
			  
				<option value="Oct">Oct</option>
              
			  
				<option value="Nov">Nov</option>
			  
			  
				<option value="Dec">Dec</option>
			  
			  
			  </select>
			  
			  
			  
			  
</td></tr>





<tr>
<td>Week Number</td><td><select name="week" class="required" id="select8"style="background:#ccc;">
               
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
				
                <option value="4">4</option>
                <option value="5">5</option>
				</select>
</td></tr>










<tr>
<td><input type="submit" value="Search" /></td>
</tr>


<tr bgcolor="#CCCCCC">
</tr>
</table>
</form>





</ul>
<br />
</DIV>

</div>

</body>
</html>
