<?php 
include 'dbc.php';
page_protect();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />




<script src="jquery.min.js"></script>
<script src="jquery.preimage.js"></script>
<title>SCHOOL MANAGEMENT SYSTEM</title>
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

#container{margin:auto;

width:800px; height:20800px;
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
width:820px; height:21000px;
background-color:#660000; !important;-moz-linear-gradient(top, #E3E3E3 0%, #EDEDED 100%) );}

</style>
<link rel="stylesheet" href="global.css" type="text/css" media="all" />
<script src="mootools.js" type="text/javascript"></script>
<link rel="stylesheet" href="sexyalertbox.css" type="text/css" media="all" />
<script src="sexyalertbox.packed.js" type="text/javascript"></script>
</head>

<body>



<DIV Style="font-family:verdana;color:#282828:margin-top:7px;margin-left:-57px;line-height:28px;font-size:13px; ">





<?php
if($_POST["do"]=="update")
{

$roll=$_POST["roll"];
$fname=$_POST["fname"];

$fname=$_POST["fname"];

$teacher=$_POST["teacher"];

$levels=$_POST["levels"];


$file = $_FILES ['file'];
$name1 = $file ['name'];
$type = $file ['type'];
$size = $file ['size'];
$tmppath = $file ['tmp_name']; 

if($name1!="")
{
if(move_uploaded_file ($tmppath, 'note/'.$name1))//image is a folder in which you will save image
{


    

$query1="update exporttable set photo='$name1' where roll='2'";


mysql_query ($query1) or die ('could not updated:'.mysql_error());
echo "<script>alert('Update Successful!');</script>";


 echo  $statusf="<meta http-equiv='refresh' content='0; url=note/frank2.php?usr_name=$user_name'>";
}
}
}
?>



<form name="form" action="lp18.php" method="POST" enctype="multipart/form-data">
<DIV style="float:left;WIDTH:550PX; height:50px; background:#ffffcc; border:1px solid #000; margin-left:50px;">

	<DIV style="float:left;WIDTH:150PX; height:50px;text-align:center;">File-import student names </div>   
	<DIV style="float:left;WIDTH:250PX; height:50px;margin-top:10px;"><input class="file" id="file1" name="file" type='file' multiple title="test #1" style="background:#ccc;"/>  </div>  
    <DIV style="float:left;WIDTH:150PX; height:50px;">  </div>
	<DIV style="float:left;WIDTH:150PX; height:50px;text-align:center;"><input type="hidden" name="do" value="update"></div>   
	<DIV style="float:left;WIDTH:250PX; height:50px;"><input type="submit" value="UPLOAD EXCELL FILE">  </div>  
    <DIV style="float:left;WIDTH:150PX; height:50px;">  </div>
	
	</div>
	
	










</div>

</DIV>


</div>

</body>
</html>
