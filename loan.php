<?php

include 'dbcs.php';

page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
$mmp=$_GET['roll'];



 $ip=@$_SERVER['REMOTE_ADDR'];
 

$result = mysql_query("SELECT * FROM courses where fname>'' order by fname ASC");
?>	<?php  $datess=date('j/m/y');?>
	<?php   $dayss=date('D');
	 $yt=date('Y');	 $ytt=date('M');
	$days7=date('j');
	
	?>
<?php     $mmx1=$dayss;
if(empty($mmx1)){
$mmx1="";
}
else if(($mmx1 >='Sat' && $mmx1 <='Sat')){
$statusf1bengssmm1="SATURDAY";

}
else if(($mmx1 >='Mon'&& $mmx1 <='Mon')){
$statusf1bengssmm1="MONDAY";

}else if(($mmx1 >='Tue' && $mmx1 <='Tue')){
$statusf1bengssmm1="TUESDAY";

}else if(($mmx1 >='Wed' && $mmx1 <='Wed')){
$statusf1bengssmm1="WEDNESDAY";

}else if(($mmx1 >='Thu'&& $mmx1 <='Thu')){
$statusf1bengssmm1="THURSDAY";

}
else if(($mmx1 >='Fri'&& $mmx1 <='Fri')){
$statusf1bengssmm1="FRIDAY";

} 
  $mmx11=$days7;
if(empty($mmx11)){
$mmx11="";
}
else if(($mmx11 >='1' && $mmx11 <='7')){
$statusf1bengssmm11="1";

}
else if(($mmx11 >='8'&& $mmx11 <='14')){
$statusf1bengssmm11="2";

}else if(($mmx11 >='15' && $mmx11 <='21')){
$statusf1bengssmm11="3";

}else if(($mmx11 >='22' && $mmx11 <='28')){
$statusf1bengssmm11="3";

}else if(($mmx11 >='29'&& $mmx11 <='31')){
$statusf1bengssmm11="4";

}
$week=$statusf1bengssmm11;
?><?php

$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $db1=$row[1];


?>
<?php } ?><?php

$query="select * from matts where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $mst=$row[1];
 $NJI= $mst+1;

?>
<?php } ?>
<?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?>
<?php } ?>

<?php
$roll=$_GET["3"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $take=$row[1];
 
?>



<?php } ?>



<html>
<head>
<title>Users List</title>

    <link rel="stylesheet" type="text/css" href="w2ui-1.4.2.min.css" />
    <script src="jquery.min.js"></script>
    <script type="text/javascript" src="w2ui-1.4.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body><?php
$matricule=$_POST['matricule'];
$fname=$_POST['fname'];

$instalm=$_POST['instalm'];
$ploan=$_POST['ploan'];
$expected_amount=$_POST['expected_amount'];
$balance=$_POST['balance'];
$monthly=$_POST['monthly'];

$ids=$_POST['ids'];
$date=$_POST['date'];


if($matricule!=''){


$statusfbioff="insert into loan set  monthly='$monthly',ess='$ids', db1='$db1', expected_amount='$expected_amount', 
balance='$balance' ,instalm='$instalm',date='$date' , ploan='$ploan',matricule='$matricule'";



mysql_query ($statusfbioff) or die ('Sorry Please You have record this Hours');


echo "<script>alert('Updated Created Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=xmt.php?usr_name=$mats'>";

}












?>
<?php
$search=$_POST["search"];
$flag=0;
$query="select * from employer where matricule='$mmp' ";
$result=mysql_query($query);
$i=0;
 while ($row = mysql_fetch_array($result)) {

?>
<form name="frmUser" method="post" action="loan.php">
<fieldset>
<legend>Enter Validate Loan</legend>
    <div class="w2ui-page page-0" style="float:left;width:560px;">
<?php
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
				
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Full Names of Tutor:</label>
 




 <div> <input type="text" name="fname" value="<?php echo $row['fname'];?>" size="35">



</div>


</div>


		
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Matricule:</label>
 




 <div> <input type="text" name="matricule" value="<?php  echo $mxx=$row['matricule'];
 
 
 
 ?>" size="35">



</div>

</div>


                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Amount Requested </label>
 
<?php
 $qryf2 = mysql_query("select instalm as total  FROM  loan  where
 matricule='$mxx'  and  ess='2'");
$row = mysql_fetch_assoc($qryf2); 
 $sendss=$row['total']; 
 $qryf2 = mysql_query("select expected_amount as total  FROM  loan  where
 matricule='$mxx' and  ess='2'  ");
 
 
$row = mysql_fetch_assoc($qryf2); 
 $am=$row['total']; 
 $mxc11trr=$sendss; 

if(empty($mxc11trr)){
 
$statusfbioffa="";
 $button="submit";
}
elseif(($mxc11trr>""  ))
{
$statusfbioffa="readonly='readonly'";
$amount="$am";
$button="button";
}
  ?>



 <div> <input type="text" name="expected_amount" value="" size="50" placeholder="Total Loan Amount" <?php echo $statusfbioffa;?>>



</div>

</div>






                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Amount Payable Monthly</label>
 




 <div> <input type="hidden" name="ids" value="1" size="50"><input type="text" name="monthly" value=""placeholder="Monthly Shedule" size="50" <?php echo $statusfbioffa;?>>



</div>

</div>


                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Previous Loan</label>
 




 <div> <input type="text" name="ploan" value="<?php echo $amount;?>"placeholder="Standing Loan" size="50" <?php echo $statusfbioffa;?>>


</div>
</div>
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Total Instalment</label>
 




 <div> <input type="hidden" name="ids" value="2" size="50"><input type="text" name="instalm" value=""placeholder="How Many instalment" size="50" <?php echo $statusfbioffa;?>>


</div>

</div>
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Date</label>
 




 <div> <input type="text" name="remark" value="" size="35" <?php echo $statusfbioffa;?>>



</div>

</div>

    <div class="w2ui-buttons">
        <input class="w2ui-btn"  type="<?php echo $button;?>" value="save" name="save" size="250px" style="flot:left; width:200px; height:30px;">
    </div>
</div>
</fieldset>






















</table>
</form>
</div>
    <div class="w2ui-page page-0" style="float:left;width:200px; margin-left:650px;margin-top:-350px;">
 <?php 
				
				$qry = mysql_query("select id as total
from emplopic where empname='$mxx'  "); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row['total']; 
				?>
										<img src="load_images.php?pic_id=<?php echo $savep4;?>" width="200px" height="125p" style="border:1px solid #000;box-shadow:1px 1px 1px #fff;">
</div>

        <div style="clear: both; padding-top: 15px;">
           
                </div> 
<?php } ?>

       
</form>
<script type="text/javascript">
$(function () {
    $('#form').w2form({ 
        name   : 'form',
       
        url    : 'server/post',
        fields : [
            { field: 'first_name', type: 'text', required: true },
            { field: 'last_name',  type: 'text', required: true },
            { field: 'comments',   type: 'text'},
            { field: 'address1', type: 'text', required: true },
            { field: 'address2', type: 'text' },
            { field: 'city', type: 'text', required: true },
            { field: 'state', type: 'text', required: true },
            { field: 'zip', type: 'int', required: true },
            { field: 'short_bio', type: 'text' },
            { field: 'talk_name', type: 'text', required: true },
            { field: 'description', type: 'text' }
        ],
        actions: {
            reset: function () {
                this.clear();
            },
            save: function () {
                this.save();
            }
        }
    });
});
</script>
</div>
</body></html>