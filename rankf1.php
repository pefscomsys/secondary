<?php 
include 'dbc.php';
page_protect();

$classs=$_GET["roll"];
$take=$_GET["year"];
$term=$_GET["term"];
?>
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

table{border:1px solid #000;
line-height:25px;}
tr{border:none;}
td{border-bottom:1px solid #000;}
ul{list-style:none;

}
li{border-bottoM:1px  dotted #000;
}

</style>
</head>

<body>
<div style="width:950px; float:left; height:auto; margin-top:20px;   border-LEFT: 2px solid #f4f4f4;">

<br /><br />


<div  style=" margin:auto; width:900px; height:auto;line-height:25px; font-size:14px;">
 

<div  style="float:left; width:900px;height:100px;text-align:center;line-height:25px; font-size:14px;"><?php
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>  
<b>
<?php echo $row[1];?><br>

<?php echo $row[2];?>
</b>
<br>
Accademic statistic for the Accademic Year <?php $qry = mysql_query("select  year as total
from rush  where roll='1'"); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 

?>
<?php } ?>
</b>
</div>

<div style="float:left; width:400px;text-transform:uppercase;border-top:1px solid #ccc; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><b>Class :</b></div>

<div style="float:left; width:400px;text-transform:uppercase;border-top:1px solid #ccc; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><?php echo $classs;?></div>

<div style="float:left; width:600px;text-transform:uppercase;"></div>



<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><b>Enrollment:</b></div>

<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><?php 
$result = mysql_query( "SELECT  * FROM marks where last_name='$classs' and form='$take'" )
or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);

$preach=$num_rows;
print " $num_rows.";

?></div>

<div style="float:left; width:600px;text-transform:uppercase;"></div>




<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><b>Number Sat:</b></div>

<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><?php 
$result = mysql_query( "SELECT  * FROM marks  where last_name='$classs' and form='$take' AND teachersport>0.1" )
or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);
$sat1=$num_rows;

print " $num_rows.";

?></div>


<div style="float:left; width:800px;text-transform:uppercase;"></div>





<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><b>Number absent:</b></div>

<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><?php 
echo($preach-$sat1);


?></div>


<div style="float:left; width:800px;text-transform:uppercase;"></div>





<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><b>Number of boys:</b></div>

<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><?php 
$result = mysql_query( "SELECT  * FROM marks where last_name='$classs' and form='$take'  AND sex='M'" )
or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);

echo $richoWs=$num_rows;



?></div>


<div style="float:left; width:800px;text-transform:uppercase;"></div>




<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><b>Number of Girls:</b></div>

<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><?php 
$result = mysql_query( "SELECT  * FROM marks where last_name='$classs' and form='$take'  AND sex='F'" )
or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);

echo $richoWss=$num_rows;



?></div>


<div style="float:left; width:800px;text-transform:uppercase;"></div>



<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><b>Number Pass:</b></div>

<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><?php 
$result = mysql_query( "SELECT * FROM marks where last_name='$classs' and form='$take' AND teachersport>=10" )
or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);


print " $num_rows.";

?></div>


<div style="float:left; width:800px;text-transform:uppercase;"></div>






<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><b>Number failed:</b></div>

<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><?php 
$result = mysql_query( "SELECT * FROM marks where last_name='$classs' and form='$take' AND teachersport<10" )
or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);


print " $num_rows.";

?></div>


<div style="float:left; width:800px;text-transform:uppercase;"></div>


<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><b>percentage  pass:</b></div>

<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><?php 
$result = mysql_query( "SELECT  * FROM marks where last_name='$classs' and form='$take' AND teachersport>=10" )
or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);

$richo1=$num_rows;
$mano=($richo1/$preach)*100;
echo $mano;
?></div>


<div style="float:left; width:800px;text-transform:uppercase;"></div>














<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><b>percentage of boys pass:</b></div>

<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><?php 
$result = mysql_query( "SELECT  * FROM marks where last_name='$classs' and form='$take' AND teachersport>=10 AND sex='M'" )
or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);

$richoW=$num_rows;


$result1 = mysql_query( "SELECT  * FROM marks where last_name='$classs' and form='$take' AND sex='M'" )
or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result1);

$richoW1=$num_rows;
echo($richoW/$richoW1)*100;

?></div>


<div style="float:left; width:800px;text-transform:uppercase;"></div>









<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><b>percentage of boys failed:</b></div>

<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><?php 
$result = mysql_query( "SELECT  * FROM marks where last_name='$classs' and form='$take' AND teachersport<10 AND sex='M'" )
or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);

$richoS1=$num_rows;
echo ($richoS1/$richoW1)*100;

?></div>


<div style="float:left; width:800px;text-transform:uppercase;"></div>


<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><b>percentage of Girls pass:</b></div>

<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><?php 
$result = mysql_query( "SELECT  * FROM marks where last_name='$classs' and form='$take' AND teachersport>=10 AND sex='F'" )
or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);

$richoS2=$num_rows;


$result2 = mysql_query( "SELECT  * FROM marks where last_name='$classs'   AND sex='F'" )
or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result2);

$richoS22=$num_rows;
echo ($richoS2/$richoS22)*100;

?></div>


<div style="float:left; width:800px;text-transform:uppercase;"></div>
<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><b>percentage of Girls failed:</b></div>

<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><?php 
$result = mysql_query( "SELECT * FROM marks where last_name='$classs' and form='$take' AND teachersport<10 AND sex='F'" )
or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);

$richoS3=$num_rows;
echo ($richoS3/$richoS22)*100;

?></div>


<div style="float:left; width:800px;text-transform:uppercase;"></div>









<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><b>number of boys with average < 5:</b></div>


<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><?php 
$result = mysql_query( "SELECT  * FROM marks where last_name='$classs'  and form='$take'AND teachersport<=5  AND sex='M'" )
or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);

$richou1=$num_rows;
echo $richou1;
?></div>


<div style="float:left; width:800px;text-transform:uppercase;"></div>



<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><b>number of Girls with average < 5:</b></div>


<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><?php 
$result = mysql_query( "SELECT * FROM marks where last_name='$classs' and form='$take' AND teachersport<=5  AND sex='F'" )
or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);

$richou5R=$num_rows;
echo $richou5R;
?></div>


<div style="float:left; width:800px;text-transform:uppercase;"></div>
<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><b>class av:</b></div>

<div style="float:left; width:400px;text-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;"><?php 
$qry = mysql_query("select  SUM(teachersport) as total
from marks  where last_name='$classs' and form='$take'"); 
$row = mysql_fetch_assoc($qry); 
$richooTTT=$row['total']; 
$manking=($richooTTT/$preach);
echo $manking;
?></div>









<div style="float:left; width:600px;text-transform:uppercase;"></div>

<div style="float:left; width:802px; height:250px;ext-transform:uppercase; border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;">


<div style="float:left; width:758px; height:30px;margin-left:20px;"><u>
OBSERVATION</u>

</div>




<br /><br /><br /><br />
<br /><br /><br /><br />

<br /><br /><br /><br />
<br /><br /><br /><br />
<br /><br /><br /><br />
<p style="float:left;margin-left:150px; font-size:21px; ">1st Term Ranking</p>
<?php
 $i=1;
$j=0;


$sql=mysql_query("select * from marks where last_name='$classs' and form='$take' order by english1 DESC") ;

while($row=mysql_fetch_assoc($sql))
{
$roll=$row['roll'];
$english1=$row['english1'];
$table=marks;
$sql3="select * from $table    where english1='$english1' AND  last_name='$classs' and form='$take'";
$rowcount=mysql_num_rows(mysql_query($sql3));
if($rowcount==1)
{
$sql2=mysql_query("update $table     set mxc19='$i' where roll='$roll' and last_name='$classs' and form='$take' ");
mysql_query($sql2);
$i=$i+1;
}
if($rowcount>1)
{
$j=$j+1;
if($j==$rowcount)
{
$sql2=mysql_query("update $table     set mxc19='$i' where roll='$roll'  and last_name='$classs' and form='$take'");
mysql_query($sql2);
$i=$i+$rowcount;
$j=0;
}
else
{
$sql2=mysql_query("update $table      set mxc19='$i' where roll='$roll' and last_name='$classs' and form='$take'");
mysql_query($sql2);
}
}

}

   
$result = mysql_query( "SELECT matricule, first_name,last_name,teachersport,total1,mxc31,mxc19 FROM $table   where last_name='$classs'  and form='$take' order by english1 DESC" )
or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);

print "<P>";
print "<table width=650   cellspacing=0  cellpadding='5px'><tr><td width=80  bgcolor='#efefef' ><FONT SIZE='2PX'> <font color='#000'>Matricule</FONT></td>
<td bgcolor='#efefef' ><FONT SIZE='2PX'> <font color='#000'stye='text-align:left;'>Student name</FONT></td><td  bgcolor='#efefef' ><FONT SIZE='2PX'> <font color='#000'>Class</td><td bgcolor='#efefef'><FONT SIZE='2PX'><font color='#000'>Averages</td><FONT SIZE='2PX'><td bgcolor='#efefef' ><FONT SIZE='2PX'> <font color='#000'>Credit</td>
<td bgcolor='#efefef' ><FONT SIZE='2PX'> <font color='#000'>Status</td><td align='center' bgcolor='#efefef' ><FONT SIZE='2PX'> <font color='#000'>Position</font></td></tr>\n";
while ($get_info = mysql_fetch_row($result)){
print "<tr>\n";
foreach ($get_info as $field)
print "\t<td align='center'><font face=arial size=1/>$field</font></td>\n";
print "</tr>\n";
}
print "</table>\n";
?>   

   

<br /><br /><br /><br />
<br /><br /><br /><br />
<br /><br /><br /><br />


<br /><br />





</div>

</div>

</div>
</body>
</html>
