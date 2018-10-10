
<div style="float:left;margin-left:1px; width:650px; height:270px; ">

<div style="float:left;margin-left:1px; width:650px; height:80px;border:1px solid #000; ">

<div style="float:left; width:250px; height:100px;">

<div style="float:left; width:250px; font-size:13px;height:25px;margin-top:7px;text-align:center;text-transform:uppercase;">Republic Of Cameroon
</div>

<div style="float:left; width:250px; font-size:13px;height:25px;margin-top:7px;text-align:center;text-transform:uppercase;FONT-WEIGHT:NORMAL;">Peace-Work-Fatherland
</div>


<div style="float:left; width:250px; font-size:13px;height:30px;text-align:center;FONT-WEIGHT:NORMAL;"><I>MINISTRY OF SECONDARY EDUCATION</I>
</div>








</div>

<div style="float:left; width:100px; height:100px;"><img src="logo.png" width="90px" height="90px"></div>

<div style="float:left; width:250px; height:100px;">


<div style="float:left; width:270px; font-size:13px;height:30px;margin-top:7px;text-align:center;"><I>MINISTRERE DES ENSEIGNEMENTS SECONDAIRES</I>
</div>

<div style="float:left; width:270px; height:30px;margin-top:7px;text-align:center;">
<?php $fname=$row['first_name'];
$sex=$row['sex'];$mxx=$row['matricule'];
$birth=$row['mxc1'];
 $photo=$row['photo'];

$qry = mysql_query("select  school as total
from school where roll='1' "); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; 
?>
</div>
</div>
</div>

<div style="float:left; width:652px; text-align:center;height:50px;border:1px solid #000;margin-top:2px; background:#1188aa;color:#fff; ">










<div style="float:left; width:650px; text-align:center;text-transform:uppercase;">academic report sheet</div>

<div style="float:left; width:650px; text-align:center; "><i>BULLETIN DE NOTES</i></div>

</div>


<div style="float:left; width:650px;height:140px;border:1px dashed #000;">
<div style="float:left; width:350px; height:140px;font-weight:normal;">
<div style="float:left; width:150px; height:20px;text-align:left;border-bottom:1px solid #ccc;">
&nbsp;Re-opening date:


</div>


<div style="float:left; width:200px; height:20px;text-align:left;border-bottom:1px solid #ccc;">
&nbsp;<?php echo $datss;?>

</div>
<div style="float:left; width:70px; height:20px;text-align:left;border-bottom:1px solid #ccc;">
&nbsp;Names:


</div>


<div style="float:left; width:280px; height:20px;text-align:left;border-bottom:1px solid #ccc;">
&nbsp;<?php echo $fname;?>

</div>

<div style="float:left; width:70px; height:20px;text-align:left;border-bottom:1px solid #ccc;">
&nbsp;Sex:


</div>


<div style="float:left; width:280px; height:20px;text-align:left;border-bottom:1px solid #ccc;">
&nbsp;<?php echo $sex;?>

</div>

<div style="float:left; width:100px; height:20px;text-align:left;border-bottom:1px solid #ccc;">
&nbsp;Acc. Year:


</div>


<div style="float:left; width:250px; height:20px;text-align:left;border-bottom:1px solid #ccc;">
&nbsp;<?php echo $take;?>

</div>


<div style="float:left; width:70px; height:20px;text-align:left;border-bottom:1px solid #ccc;">
&nbsp;Class:


</div>


<div style="float:left; width:280px; height:20px;text-align:left;border-bottom:1px solid #ccc;">
&nbsp;<?php echo $classes;?>


</div>


<div style="float:left; width:70px; height:20px;text-align:left;border-bottom:1px solid #ccc;">
&nbsp;Enrol.


</div>


<div style="float:left; width:280px; height:20px;text-align:left;border-bottom:1px solid #ccc;font-weight:normal">
&nbsp;<?php


$qry = mysql_query("select * FROM  marks where last_name='$classes' and form='$take' "); 
$num_rows=mysql_num_rows($qry);
 echo $class1=$num_rows; 
 
 $qry = mysql_query("select SUM(teacherreligion) as total
from marks where last_name='$classes' and form='$take'"); 
$row = mysql_fetch_assoc($qry); 
$class11=$row['total'];
?>
</div>



</div>




<div style="float:left; width:100px;height:140px;font-weight:normal;">

<div style="float:left;margin-left:0px; width:2px;background:#1188aa; height:140px;font-weight:normal;"></div>
</div>

<div style="float:left; width:150px; height:100px;font-weight:normal;">

<div style="float:left; width:130px;margin-top:20px; margin-left:40px;height:100px;font-weight:normal;border:1px solid #000;">
<?php 
				
				$qry = mysql_query("select id as total
from employees where empname='$mxx'  "); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row['total']; 
				?>
										<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="129px" height="99px" style="border:1px solid #000;box-shadow:1px 1px 1px #fff;">
 
 
</div>

</div>

</div>
