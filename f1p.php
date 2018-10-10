<?php 
include 'dbc.php';
page_protect();


if(@$_SESSION['userlevel']==3){header("location: login.php?msg=Unauthorized access");}

$classes=$_POST["classes"];
$table=$_POST["table"];
$table=formonespecial;
$form=Three;

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SCHOOL MANAGEMENT SYSTEM</title>

</head>
<body>


<div style="float:left; width:1600px; height:150px; font-weight:bold; font-family:Georgia, 'Times New Roman', Times, serif; font-size:16px; text-align:center;  "> 
 <?php
$roll=$_GET["roll"];
$query="select * from school where roll='1' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?><?php echo $row[1];?>
<?php
}
?><br />

 <?php
$roll=$_GET["roll"];
$query="select * from school where roll='1' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?><?php echo $row[2];?>
<?php
}
?>
<br />MASTER EXAMINATION SHEET FOR STUDENT PERFORMANCE <?php $jik=date('Y');
echo $jik-1;
?>/<?php echo ($jik);?><br />
Class: 


<div style="margin:auto; width:1400px; height:600px;">

<div style='width:1400px;FLOAT:LEFT;height:800px;'>








<div style="float:left; width:1400px;height:30px;  ">


<div style="float:left; width:300px;border-top:1px solid #000; border-left:1px dashed #000; border-bottom:1px solid #000; background:#fff; height:30px; text-align:center; background:#e3e3e3;">STUDENT NAME</div>

<div style="float:left;border-top:1px solid #000; border-left:1px dashed #000; border-bottom:1px solid #000; width:100px;  height:30px;font-size:13px; text-align:center; background:#f4f4f4;">FIRST TERM AV</div>

<div style="float:left;border-top:1px solid #000; border-left:1px dashed #000; border-bottom:1px solid #000; width:100px;  height:30px;font-size:13px; text-align:center; background:#ccc;">SECOND TERM AV</div>



<div style="float:left;border-top:1px solid #000; border-left:1px dashed #000; border-bottom:1px solid #000; width:100px;  height:30px;font-size:13px; text-align:center; background:#FFF;">TERM TERM AV</div>






<div style="float:left;border-top:1px solid #000; border-left:1px dashed #000; border-bottom:1px solid #000; width:70px;  height:30px;font-size:13px; text-align:center; background:#ccc;">TOTAL </div>

<div style="float:left;border-top:1px solid #000; border-left:1px dashed #000; border-bottom:1px solid #000; width:70px;  height:30px;font-size:13px; text-align:center; background:#FFF;">ANNUAL AVERAGE </div>

<div style="float:left;border-top:1px solid #000; border-left:1px dashed #000; border-bottom:1px solid #000; width:170px;  height:30px;font-size:13px; text-align:center; background:#ccc;">ANNUAL POSITION</div>

<div style="float:left;border-top:1px solid #000; border-left:1px dashed #000; border-bottom:1px solid #000; width:170px;  height:30px;font-size:13px; text-align:center; background:#FFF;">CLASS COUNCIL DESCISON</div>
<div style="float:left;border-top:1px solid #000; border-left:1px dashed #000; border-bottom:1px solid #000; width:170px;  height:30px;font-size:13px; text-align:center; background:#ccc;">CLASS MASTER SIGNATURE </div>

</DIV><?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $take=$row[1];


?>
		 

<?php } ?>


<?php

$classes=$_POST["classes"];
$form=$_POST["form"];
$table=$_POST["table"];
$query="select * from marks where last_name='$classes' and form='$take' order by first_name ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {

?>




<div style="float:left; width:1400px;  height:30px;font-weight:normal;">




<div style="float:left; width:300px;border-top:1px solid #000; border-left:1px dashed #000; border-bottom:1px solid #000; background:#fff; height:30px; text-align:left; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[4];?>&nbsp;&nbsp;&nbsp;</div>


<div style="float:left;border-top:1px solid #000; border-left:1px dashed #000; border-bottom:1px solid #000; width:100px;  height:30px;font-size:13px; text-align:center; background:#f4f4f4;"><?php echo $t1term=$row['teachersport']; ?></div>

<div style="float:left;border-top:1px solid #000; border-left:1px dashed #000; border-bottom:1px solid #000; width:100px;  height:30px;font-size:13px; text-align:center; "><?php echo $t2term=$row['teacherreligion'];?></div>



<div style="float:left;border-top:1px solid #000; border-left:1px dashed #000; border-bottom:1px solid #000; width:100px;  height:30px;font-size:13px; text-align:center; "><?php echo $t3term=$row['teachercivic'];?></div>






<div style="float:left;border-top:1px solid #000; border-left:1px dashed #000; border-bottom:1px solid #000; width:70px;  height:30px;font-size:13px; text-align:center; "><?php echo $tx=($t3term+$t2term+$t1term);?> </div>

<div style="float:left;border-top:1px solid #000; border-left:1px dashed #000; border-bottom:1px solid #000; width:70px;  height:30px;font-size:13px; text-align:center; "><?php if(empty($t1term)){
$t1term="";
 $statusft1term="0";
}
elseif($t1term>=0.001 && $t1term<=20){
 $statusft1term="1";
}

if(empty($t2term)){
$t2term="";
 $statusft2term="0";
}
elseif($t2term>=0.001 && $t2term<=20){
 $statusft2term="1";
}
if(empty($t3term)){
$t3term="";
 $statusft3term="0";
}
elseif($t3term>=0.001 && $t3term<=20){
 $statusft3term="1";
}


$tannuals=$t3term+$t2term+$t1term;
$tdivide=$statusft3term+$statusft2term+$statusft1term;

if($tdivide == 0)
{
	$sstannual = 0;
}
else
{
	$sstannual=($tannuals/$tdivide);
}

printf("%01.2f" ,$sstannual);?></div>

<div style="float:left;border-top:1px solid #000; border-left:1px dashed #000; border-bottom:1px solid #000; width:170px;  height:30px;font-size:13px; text-align:center; ">












<?php
 $i=1;
$j=0;




$rowcount=($sql);
if($rowcount==1)
{
$i=$i+1;
}
if($rowcount>1)
{
$j=$j+1;
if($j==$rowcount)
{
$i=$i+$rowcount;
$j=0;
}
}



?>   














  </div>

<div style="float:left;border-top:1px solid #000; border-left:1px dashed #000; border-bottom:1px solid #000; width:170px;  height:30px;font-size:13px; text-align:center;"></div>
<div style="float:left;border-top:1px solid #000; border-left:1px dashed #000; border-bottom:1px solid #000; width:170px;  height:30px;font-size:13px; text-align:center; "></div>













</div>
  
<?php }?>
</div>


</div>
</div>

</div>
</div>


</div>
</div>

</div>
</div>


</div>
</div>

</div>
</div>

</div>
</div>

</div>
</div>

</div>
</body>
</html>
