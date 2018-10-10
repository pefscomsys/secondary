

<table width="800" cellspacing="0"style="background:#fff;">
<?php
$query="select * from exss    ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		 ?>
		
		 
		 
		 
		 
		  <tr><td style="text-align:left; width:70px;height:25px; padding:3px;border-top:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;">

		<?php echo $mb=$row["code"];?> 
		 </td>
	<td  style="text-align:left; width:350px;height:25px; padding:3px;border-top:1px solid #000;border-right:1px solid #000;">	 




		<?php echo $m=$row["fname"];?>
		 
	</td>
		




		<td style="text-align:left; width:50px;height:25px; padding:3px;border-top:1px solid #000;border-right:1px solid #000;">
		Total
		 
	</td>
		




<td style="text-align:left; width:100px;height:25px; padding:3px;border-top:1px solid #000;border-right:1px solid #000;">
	<?php 

$qry = mysql_query("select sum(expenditure) as total
from balancesheet where motive='$mb' and db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
echo $marks11=$row['total']; 
 ?>
	</td >
		 
		</tr>
<?php } ?>
		  <tr><td style="text-align:left; width:70px;height:25px;
		  padding:3px;border-top:1px solid #000;border-left:1px solid #000;border-bottom:1px solid #000;">

		 </td>
	<td  style="text-align:left; width:350px;height:25px; border-bottom:1px solid #000;padding:3px;
	border-top:1px solid #000;">	 



		 
	</td>
		




		<td style="text-align:left; width:50px;height:25px;
		padding:3px;border-top:1px solid #000;border-right:1px solid #000;border-bottom:1px solid #000;">
		Total
		 
	</td>
		




<td style="text-align:left; width:100px;height:25px; border-bottom:1px solid #000;padding:3px;border-top:1px solid #000;border-right:1px solid #000;">
	<?php 

$qry = mysql_query("select sum(expenditure) as total
from balancesheet where db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
echo $marks11=$row['total']; 
 ?>
	</td >
		 
		</tr>
</table>
<Br><br>
