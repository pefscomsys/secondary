<?php
include 'dbc.php';
require'function.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Class Registrar</title>
<style>
</style>
<link href="styles.css" rel="stylesheet" type="text/css">

<style>
   body {size:A4 Landscape;
        margin: 0;
        padding: 0;
        font: 25pt;
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 1450px;
        min-height: 29.7cm;
        padding: 2cm;
        margin: 1cm auto;
        background: white;
    }
    .subpage {
        padding: 1cm;
        border: 5px black solid;
        height: 237mm;
        outline: 2cm #000 solid;
    }
    
    @page {
        size: A4 landscape;
        margin: 0;
    }
    @media print {
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }


input[type=submit]{
    cursor: pointer;
    font-size: 16px;
    height: 24px;
    padding: 3px;
}
input[type=text], input[type=password], input[type=submit] {
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    -o-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
	background-color: rgb(246, 254, 231);
}
.rotate {


-webkit-transform: rotate(-50deg);


-moz-transform: rotate(-50deg);


-ms-transform: rotate(-50deg);


-o-transform: rotate(-50deg);


filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);

color:#989898;}
  
</style>
</head>
<body >


		 <div class="page">
<?php
$roll=$_GET["roll"];
$query="select * from historic where roll='roll'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $nast=$row['student_name'];
$classy=$row['class'];

?>
<?php
}
?>
<?php
$roll=$_GET["roll"];
$qry = mysql_query("select  SUM(amount_paid) as total
from historic  where student_name='$nast' and class='$classy'"); 
$row = mysql_fetch_assoc($qry); 
$timm=$row['total']; 

?>
<div style="margin:auto; width:900px; height:auto;">


<div style="margin:auto; width:900px; height:100px; border-radius:5px 5px 5px 5px; border:1px solid #000;font-size:21px; text-align:center;">
<B>INTER COMPREHENSIVE HIGH SCHOOL BUEA</B>
<BR>Approval Ref. Ministerial Order No. JI/27/MINEDUC/DEP/SCAFES/BGS of 15th January 1991 Registration No: 6CC2WAD110875091

</div>
<div style=" float:left; width:700px;margin-top:17px;  height:34px; text-align:left;
font-size:18px; ">

<?php
$department=$_POST["department"];
$levels=$_POST["levels"];
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $take=$row[1];



?>
		 

<?php } ?>
</div>
<table cellspacing="0" cellpadding="0" width="450px" style="border:1px solid #000;font-size:17px;line-height:25px;">


<tr>
<td  style="border-right:1px solid #000;
border-bottom:1px solid #000;line-height:21px;">Class Register for </td><td
style="
border-bottom:1px solid #000;line-height:21px;"><?php 
echo $department;?><td></tr>
<tr>
<td  style="border-right:1px solid #000;
border-bottom:1px solid #000;line-height:21px;">Academic Year </td><td
style="
border-bottom:1px solid #000;line-height:21px;"><?php 
echo $take;?><td></tr>

<tr>
<td  style="border-right:1px solid #000;
border-bottom:1px solid #000;line-height:21px;">Week Beginning Date </td><td
style="
border-bottom:1px solid #000;line-height:21px;"><td></tr>
<tr>
<td  style="border-right:1px solid #000;
border-bottom:1px solid #000;line-height:21px;">End Date </td><td
style="
border-bottom:1px solid #000;line-height:21px;"><td></tr>


</table>
<br><br>
<table cellspacing="0" cellpadding="0" width="950px" style="margin-left:-20px;border-top:1px solid #000;border-right:1px solid #000;
border-left:1px solid #000;line-height:21px;">
<tr>
<td style="width:30px;height:30px; text-align:center;border-right:1px solid #000;border-bottom:1px solid #000;">
<b>SN</b>
</td>
<td style="width:350px;height:30px; border-right:1px solid #000;border-bottom:1px solid #000;
		text-transform: capitalize;">
&nbsp;<b>Student Full Name(s)</b>
</td>

<td style="width:650px;height:30px; border-bottom:1px solid #000;">
<table
cellspacing="0"cellpadding="3" width="625px">
<tr><td style="width:127px; padding:3px;border-right:1px solid #000;height:30px; ">Monday
</td>



<td style="width:126px; padding:3px;border-right:1px solid #000;height:30px; ">Tuesday
</td>


<td style="width:125px; padding:3px;border-right:1px solid #000;height:30px; ">Wednesday
</td>


<td  style="width:126px; padding:3px;border-right:1px solid #000;height:30px; ">Thursday
</td>


<td style="width:125px; padding:3px;border-right:1px solid #000;height:30px; ">Friday
</td>




</tr></table>




</td>






</tr>

<?php
$query="select * from marks where  form='$take' and last_name='$department' 




 order by first_name ASC ";
$result=mysql_query($query);
$i=1;
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		 ?>
<tr>
<td style="width:30px;height:30px; text-align:center;border-right:1px solid #000;border-bottom:1px solid #000;">
<?php echo $i++;?>
</td>
<td style="width:370px;height:30px; border-right:1px solid #000;border-bottom:1px solid #000;
		text-transform: capitalize;">
&nbsp;<?php echo $row["first_name"];?>
</td>

<td style="width:630px;height:30px; border-bottom:1px solid #000;">
<table
cellspacing="0"cellpadding="0" width="125px">
<tr><td style="background:#efefef;opacity:0.8;"><table
cellspacing="0"cellpadding="0" width="125px">
<tr><td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>

</tr>
</table>
</td>



<td><table
cellspacing="0"cellpadding="0" width="125px">
<tr><td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>

</tr>
</table>
</td>


<td style="background:#efefef;opacity:0.8;"><table
cellspacing="0"cellpadding="0" width="125px">
<tr><td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>

</tr>
</table>
</td>


<td><table
cellspacing="0"cellpadding="0" width="125px">
<tr><td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>

</tr>
</table>
</td>


<td style="background:#efefef;opacity:0.8;"><table
cellspacing="0"cellpadding="0" width="125px">
<tr><td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>

</tr>
</table>
</td>




</tr></table>




</td>






</tr>
<?php } ?>
<tr>
<td style="width:30px;height:30px; text-align:center;border-right:1px solid #000;border-bottom:1px solid #000;">
<?php echo $i++;?>
</td>
<td style="width:370px;height:30px; border-right:1px solid #000;border-bottom:1px solid #000;
		text-transform: capitalize;">
&nbsp;<?php echo $row["first_name"];?>
</td>

<td style="width:630px;height:30px; border-bottom:1px solid #000;">
<table
cellspacing="0"cellpadding="0" width="125px">
<tr><td style="background:#efefef;opacity:0.8;"><table
cellspacing="0"cellpadding="0" width="125px">
<tr><td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>

</tr>
</table>
</td>



<td><table
cellspacing="0"cellpadding="0" width="125px">
<tr><td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>

</tr>
</table>
</td>


<td style="background:#efefef;opacity:0.8;"><table
cellspacing="0"cellpadding="0" width="125px">
<tr><td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>

</tr>
</table>
</td>


<td><table
cellspacing="0"cellpadding="0" width="125px">
<tr><td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>

</tr>
</table>
</td>


<td style="background:#efefef;opacity:0.8;"><table
cellspacing="0"cellpadding="0" width="125px">
<tr><td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>

</tr>
</table>
</td>




</tr></table>




</td>






</tr>
<tr>
<td style="width:30px;height:30px; text-align:center;border-right:1px solid #000;border-bottom:1px solid #000;">
<?php echo $i++;?>
</td>
<td style="width:370px;height:30px; border-right:1px solid #000;border-bottom:1px solid #000;
		text-transform: capitalize;">
&nbsp;<?php echo $row["first_name"];?>
</td>

<td style="width:630px;height:30px; border-bottom:1px solid #000;">
<table
cellspacing="0"cellpadding="0" width="125px">
<tr><td style="background:#efefef;opacity:0.8;"><table
cellspacing="0"cellpadding="0" width="125px">
<tr><td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>

</tr>
</table>
</td>



<td><table
cellspacing="0"cellpadding="0" width="125px">
<tr><td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>

</tr>
</table>
</td>


<td style="background:#efefef;opacity:0.8;"><table
cellspacing="0"cellpadding="0" width="125px">
<tr><td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>

</tr>
</table>
</td>


<td><table
cellspacing="0"cellpadding="0" width="125px">
<tr><td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>

</tr>
</table>
</td>


<td style="background:#efefef;opacity:0.8;"><table
cellspacing="0"cellpadding="0" width="125px">
<tr><td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>

</tr>
</table>
</td>




</tr></table>




</td>






</tr>
<tr>
<td style="width:30px;height:30px; text-align:center;border-right:1px solid #000;border-bottom:1px solid #000;">
<?php echo $i++;?>
</td>
<td style="width:370px;height:30px; border-right:1px solid #000;border-bottom:1px solid #000;
		text-transform: capitalize;">
&nbsp;<?php echo $row["first_name"];?>
</td>

<td style="width:630px;height:30px; border-bottom:1px solid #000;">
<table
cellspacing="0"cellpadding="0" width="125px">
<tr><td style="background:#efefef;opacity:0.8;"><table
cellspacing="0"cellpadding="0" width="125px">
<tr><td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>

</tr>
</table>
</td>



<td><table
cellspacing="0"cellpadding="0" width="125px">
<tr><td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>

</tr>
</table>
</td>


<td style="background:#efefef;opacity:0.8;"><table
cellspacing="0"cellpadding="0" width="125px">
<tr><td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>

</tr>
</table>
</td>


<td><table
cellspacing="0"cellpadding="0" width="125px">
<tr><td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>

</tr>
</table>
</td>


<td style="background:#efefef;opacity:0.8;"><table
cellspacing="0"cellpadding="0" width="125px">
<tr><td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>

</tr>
</table>
</td>




</tr></table>




</td>






</tr>
<tr>
<td style="width:30px;height:30px; text-align:center;border-right:1px solid #000;border-bottom:1px solid #000;">
<?php echo $i++;?>
</td>
<td style="width:370px;height:30px; border-right:1px solid #000;border-bottom:1px solid #000;
		text-transform: capitalize;">
&nbsp;<?php echo $row["first_name"];?>
</td>

<td style="width:630px;height:30px; border-bottom:1px solid #000;">
<table
cellspacing="0"cellpadding="0" width="125px">
<tr><td style="background:#efefef;opacity:0.8;"><table
cellspacing="0"cellpadding="0" width="125px">
<tr><td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>

</tr>
</table>
</td>



<td><table
cellspacing="0"cellpadding="0" width="125px">
<tr><td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>

</tr>
</table>
</td>


<td style="background:#efefef;opacity:0.8;"><table
cellspacing="0"cellpadding="0" width="125px">
<tr><td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>

</tr>
</table>
</td>


<td><table
cellspacing="0"cellpadding="0" width="125px">
<tr><td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>

</tr>
</table>
</td>


<td style="background:#efefef;opacity:0.8;"><table
cellspacing="0"cellpadding="0" width="125px">
<tr><td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>
<td  style="width:24px; padding:3px;border-right:1px solid #000;height:30px; "></td>

</tr>
</table>
</td>




</tr></table>




</td>






</tr>
</table

