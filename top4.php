
<div style="float:left;margin-left:1px; width:750px; height:270px; ">


<div style="float:left;margin-left:1px; width:750px; height:150px; border-radius:5px 5px 5px 5px; border:1px solid #000; ">

<div style="float:left; width:280px;text-align:center; height:150px;">
<table width='280px' cellspacing='0' cellpadding='0' style='text-align:center;line-height:18px;'>
<tr><td style='font-size:14px;'> REPUBLIQUE DU CAMEROUN</TD></TR>
<tr><td style='font-size:11px;'> PAIX - TRAVAIL - PATRIE</TD></TR>
<tr><td style='font-size:12px;'> MINISTERE DES ENSEIGNEMENT SECONDAIRE</TD></TR>
<tr><td style='font-size:12px;'> DELEGATION REGIONALE DU SUD OUEST</TD></TR>
<tr><td style='font-size:12px;'> DELEGATION DEPARTMENTALE DU FAKO</TD></TR>

<tr><td style='font-size:14px;font-weight:bold;'> LYCEE BILINGUE DE TIKO</TD></TR>


<tr><td style='font-size:12px;'> B.P:257 TIKO -TEL: 243 35 11 25</TD></TR>
<tr><td style='font-size:12px;'> ANNE SCOLAIRE <?PHP echo $take;?></TD></TR>
</table>



</div> 

<div style="float:left; width:130px;text-align:center; height:150px;">

<img src="dogo.png">



</div> 

<div style="float:left; width:310px;text-align:center; height:150px;">

<table width='340px' cellspacing='0' cellpadding='0' style='text-align:center;line-height:18px;'>
<tr><td style='font-size:14px;'> REPUBLIC OF CAMEROON</TD></TR>
<tr><td style='font-size:11px;'> PEACE - WORK - FATHERLAND</TD></TR>
<tr><td style='font-size:12px;'> MINISTRY OF SECONDARY EDUCATION </TD></TR>
<tr><td style='font-size:12px;'> REGIONAL DELEGATION OF SOUTH WEST</TD></TR>
<tr><td style='font-size:12px;'> DIVISIONAL DELEGATION OF FAKO</TD></TR>

<tr><td style='font-size:14px;font-weight:bold;'> GOVERNMENT BILINGUAL HIGH SCHOOL TIKO</TD></TR>


<tr><td style='font-size:12px;'> PO BOX:257 TIKO -TEL: 243 35 11 25</TD></TR>
<tr><td style='font-size:12px;'> ACADEMIC YEAR <?PHP echo $take;?></TD></TR>
</table>





</div> 

</div> 
<div style="float:left;margin-left:100px; width:500px;padding:3px;text-align:center;font-weight:bold;height:25px; margin-top:8px;border-radius:5px 5px 5px 5px; border:1px solid #000; ">
SECOND TERM REPORT CARD
</div> 

<?php $fname=$row['first_name'];
$class=$row['last_name'];
$sex=$row['sex'];$mxx=$row['matricule'];
$birth=$row['mxc1'];
$db1=$row['form'];
$photo=$row['photo'];
?>

<div style="float:left; width:748px;padding:3px;text-align:center;font-weight:bold;height:80px; margin-top:8px;border-radius:5px 5px 5px 5px; border:1px solid #000; ">


<div style="float:left; width:250px;text-align:center; height:80px;border-right:1px solid #000;">
<table width='258px' cellspacing='2' cellpadding='0' style='line-height:18px;margin-left:-5px;font-family:arial;'>
<tr><td style='font-size:14px;border-bottom:1px solid #000;'>&nbsp; &nbsp;&nbsp;FULL NAMES</TD></TR>
<tr><td style='font-size:14px;border-bottom:1px solid #000;'>&nbsp; &nbsp; MATRICULE NUMBER</TD></TR>
<tr><td style='font-size:14px;border-bottom:1px solid #000;'>&nbsp; &nbsp;&nbsp;DATE OF BIRTH </TD></TR>
<tr><td style='font-size:14px;border-bottom:1px solid #000;'>&nbsp; &nbsp; CLASS MASTER/MISTRESS</TD></TR>
</table>


</div> 
<div style="float:left; width:340px;text-align:center; height:80px;border-right:1px solid #000;">

<table width='348px' cellspacing='2' cellpadding='0' style='line-height:18px;margin-left:-5px;font-family:arial;'>
<tr><td style='font-size:14px;border-bottom:1px solid #000;'>&nbsp;&nbsp;<b><?php echo $fname;?></b></TD></TR>
<tr><td style='font-size:14px;border-bottom:1px solid #000;'>&nbsp; &nbsp; <?php echo $mxx;?></TD></TR>
<tr><td style='font-size:14px;border-bottom:1px solid #000;'>&nbsp; &nbsp;&nbsp;<?php echo $birth;?></TD></TR>
<tr><td style='font-size:14px;border-bottom:1px solid #000;'>&nbsp; &nbsp; </TD></TR>
</table>

</div> 

<div style="float:left; width:75px;text-align:center; height:80px;border-right:1px solid #000;">

<table width='80px' cellspacing='2' cellpadding='0' style='line-height:18px;margin-left:-5px;font-family:arial;'>
<tr><td style='font-size:14px;border-bottom:1px solid #000;'>&nbsp;&nbsp;CLASS</TD></TR>
<tr><td style='font-size:14px;border-bottom:1px solid #000;'>&nbsp; &nbsp;SEX</TD></TR>
<tr><td style='font-size:14px;border-bottom:1px solid #000;'>&nbsp;ENROL.</TD></TR>
<tr><td style='font-size:14px;border-bottom:1px solid #000;'>&nbsp;  POSITION</TD></TR>
</table>
</div> 

<div style="float:left; width:75px;text-align:center; height:80px;">

<table width='91px' cellspacing='2' cellpadding='0' style='line-height:18px;margin-left:-5px;font-family:arial;'>
<tr><td style='font-size:14px;border-bottom:1px solid #000;'>&nbsp;&nbsp;<?php echo $class;?></TD></TR>
<tr><td style='font-size:14px;border-bottom:1px solid #000;'>&nbsp; &nbsp;<?php echo $sex;?></TD></TR>
<tr><td style='font-size:14px;border-bottom:1px solid #000;'>&nbsp;<?php
$qry = mysql_query("select * FROM  marks where last_name='$classes' and form='$take' "); 
$num_rows=mysql_num_rows($qry);
echo $class1=$num_rows; ?></TD></TR>
<tr><td style='font-size:14px;'><?php
 $qry = mysql_query("select mxc19 as total
from marks where last_name='$classes' and form='$take'"); 
$row = mysql_fetch_assoc($qry); 
ECHO $clS1=$row['total']; ?>
</TD></TR>
</table>
</div> 


</div> 





