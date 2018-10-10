 <input name='hours[]' type="text" maxlength="100" readonly='readonly'value="<?php 
						
						
				
$qry = mysql_query("select sum((timeoff- specificity)/100) as total
from attendance where fname='$matricule' and ids='2'   "); 
$row = mysql_fetch_assoc($qry); 
echo $op=$row['total']; 
				
				
				
						
						
						
						
						
						
						?>"style="width:5%"placeholder="Hours Earned">
				 <input name='salary[]' type="text" maxlength="100"readonly='readonly' value="<?php
						
						$qrys = mysql_query("select rates as total
from hourss where matricule='$matricule' and heads='930'    "); 
$row = mysql_fetch_assoc($qrys); 
 echo $mxc11ffg=$row['total'];
						
	?>"style="width:5%"placeholder="Fix salary">			
				
				
				
				
				
				
				
				
				
				
                        <input name='salarys[]' type="text" maxlength="100" readonly='readonly' value="<?php
						
						$qrys = mysql_query("select rates as total
from hourss where matricule='$matricule' and heads='100'    "); 
$row = mysql_fetch_assoc($qrys); 
 $mxc11f=$row['total'];
						
						
$qrys = mysql_query("select heads as total
from hourss where matricule='$matricule' and rates='1'  and heads='901'  "); 
$row = mysql_fetch_assoc($qrys); 
 $mxc11=$row['total'];







if(empty($mxc11)){

 
 $statusfbiou=$mxc11f;
 }
elseif($mxc11>'' ){
  $statusfbios="4000";
 $statusfbioa=( $op* $statusfbios);
  $statusfbiou=$statusfbioa; 
}
$statusfbio=($statusfbiou+$mxc11ffg);

  echo $statusfbio;









?>"style="width:3%"placeholder="Rates">
				





    <input name='801[]'readonly='readonly' type="text" maxlength="100" value="<?php
						
						$qrys = mysql_query("select monthly as total
from loan where matricule='$matricule' and ess='2'   "); 
$row = mysql_fetch_assoc($qrys); 
echo $mss=$row['total'];
						
						











?>"style="width:3%"placeholder="Loan Shedule">





    <input name='720[]' type="text"readonly='readonly' maxlength="100" value="<?php
						
						$qrys = mysql_query("select rates as total
from hourss where matricule='$matricule' and heads='720'   "); 
$row = mysql_fetch_assoc($qrys); 
echo $a=$row['total'];
						
						











?>"style="width:3%"placeholder="Council Tax">



    <input name='730[]' type="text" readonly='readonly'maxlength="100" value="<?php
						
						$qrys = mysql_query("select rates as total
from hourss where matricule='$matricule' and heads='730'   "); 
$row = mysql_fetch_assoc($qrys); 
   $land=$row['total'];
						
						



 echo $b=($statusfbio/100)*($land);







?>"style="width:3%"placeholder="Land Tax">





    <input name='740[]' type="text" readonly='readonly' maxlength="100" value="<?php
						
						$qrys = mysql_query("select rates as total
from hourss where matricule='$matricule' and heads='740'   "); 
$row = mysql_fetch_assoc($qrys); 
   $lands=$row['total'];
						
						


 echo  $c=($statusfbio/100)*($lands);








?>"style="width:3%"placeholder="CRTV ">




    <input name='750[]' type="text"readonly='readonly' maxlength="100" value="<?php
						
						$qrys = mysql_query("select rates as total
from hourss where matricule='$matricule' and heads='750'   "); 
$row = mysql_fetch_assoc($qrys); 
   $landss=$row['total'];
						
						



 echo  $d=($statusfbio/100)*($landss);







?>"style="width:5%"placeholder="CNPS">






    <input name='763[]' type="text"readonly='readonly' maxlength="100" value="<?php
						
						$qrys = mysql_query("select rates as total
from hourss where matricule='$matricule' and heads='763'   "); 
$row = mysql_fetch_assoc($qrys); 
   $landsss=$row['total'];
						
						



 echo  $e=($statusfbio/100)*($landsss);







?>"style="width:5%"placeholder="Personal Income tax">




    <input name='767[]' readonly='readonly' type="text" maxlength="100" value="<?php
						
						$qrys = mysql_query("select rates as total
from hourss where matricule='$matricule' and heads='767'   "); 
$row = mysql_fetch_assoc($qrys); 
   $landssss=$row['total'];
						
						



 echo  $f=($statusfbio/100)*($landssss);







?>"style="width:5%"placeholder="Additional Council tax">





    <input name='837[]' readonly='readonly' type="text" maxlength="100" value="<?php
						
						$qrys = mysql_query("select rates as total
from hourss where matricule='$matricule' and heads='837'   "); 
$row = mysql_fetch_assoc($qrys); 
   $landssss=$row['total'];
						
						



 echo  $g=($statusfbio/100)*($landssss);







?>"style="width:5%"placeholder="Additional Council tax">




    <input name='25[]' readonly='readonly' type="text" maxlength="100" value="<?php
						
						$qrys = mysql_query("select SUM(amount) as total
from canteen where matricule='$matricule' and heads='25' and month=''  "); 
$row = mysql_fetch_assoc($qrys); 
   $landssssgt=$row['total'];
						
						



 echo  $h=($landssssgt);







?>"style="width:5%"placeholder="Canteen">




    <input name='26[]' readonly='readonly' type="text" maxlength="100" value="<?php
						
						$qrys = mysql_query("select rates as total
from canteen where matricule='$matricule' and heads='26'   "); 
$row = mysql_fetch_assoc($qrys); 
   $landssssgtt=$row['total'];
						
						



 echo  $i=($landssssgtt);







?>"style="width:5%"placeholder="Debt">



    <input name='203[]' readonly='readonly' type="text" maxlength="100" value="<?php
						
						$qrys = mysql_query("select rates as total
from hourss where matricule='$matricule' and heads='203'   "); 
$row = mysql_fetch_assoc($qrys); 
   $landsssssps=$row['total'];
						
						



$k=$landsssssps;







?>"style="width:5%"placeholder="Additional Council tax">





    <input name='totals[]' readonly='readonly' type="hidden" maxlength="100" value="<?php echo ($statusfbio- ($mss+$a+$b+$c+$d+$e+$f+$g+$h+$i+$k));?>">

    <input name='months[]' readonly='readonly' type="hidden" maxlength="100" value="<?php echo $months;?>">



				
                    </div>
					
                    </div><?php
 }
 
echo "<input type='submit' name='submit' value='Submit'></form>";
?>

