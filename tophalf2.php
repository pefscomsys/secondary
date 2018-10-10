
<div style="float:left;margin-left:1px; width:350px; height:270px; ">


<div style="float:left;margin-left:1px; width:350px; height:50px; background:#efefef;  text-align:center;">
MINISTRY OF SECONDARY EDUCATION<br><b style="font-weight:normal;font-size:14px;">
<I>MINISTRERE DES ENSEIGNEMENTS SECONDAIRES</I></b>
</div>


<div style="float:left; width:348px; height:40px; border:1px solid #000;  text-align:center;">

<div style="float:left;margin-top:8px; font-size:14px;text-align:center; width:350px;">


<div style="float:left;margin-top:-5px; font-size:14px;text-align:center; width:50px;">
<img src="logo.png" width="50">
</div>



<div style="float:left;margin-top:-5px; font-size:14px;text-align:center; width:300px;">
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
<div style="float:left; width:350px; height:40px;  color:#000;background:#efefef;  text-align:center; Font-size:23px;">

3 <sup> RD</sup> SEQUENCE REPORT

</div>

<div style="float:left; width:350px; height:110px;  color:#000;border:1px dashed #000;  text-align:center; Font-size:13px;">

<div style="float:left; width:100px; height:21px;border-bottom:1px solid #000;text-align:right;color:#787878; ">
Student Name:

</div> 



<div style="float:left; width:250px; height:21px;border-bottom:1px solid #000;text-align:left; ">
&nbsp;<?php echo $fname;?>

</div> 





<div style="float:left; width:100px; height:21px;border-bottom:1px solid #000;text-align:right;color:#787878; ">
Matricule:

</div> 



<div style="float:left; width:250px; height:21px;border-bottom:1px solid #000;text-align:left; ">
&nbsp;<?php echo $mxx;?>

</div> 



<div style="float:left; width:100px; height:21px;border-bottom:1px solid #000;text-align:right;color:#787878; ">
Class:

</div> 



<div style="float:left; width:250px; height:21px;border-bottom:1px solid #000;text-align:left; ">
&nbsp;<?php echo $classes;?>

</div> 




<div style="float:left; width:100px; height:21px;border-bottom:1px solid #000;text-align:right;color:#787878; ">
Enrolment :

</div> 



<div style="float:left; width:250px; height:21px;border-bottom:1px solid #000;text-align:left; ">
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






<div style="float:left; width:100px; height:21px;text-align:right;color:#787878; ">
Accademic Year:

</div> 



<div style="float:left; width:250px; height:21px;text-align:left; ">
&nbsp;<?php echo $take;?>

</div> 






</div>




</div>
