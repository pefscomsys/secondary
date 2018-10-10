<?php

include 'dbcs.php';

page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
$mmp=$_GET['roll'];



 $ip=@$_SERVER['REMOTE_ADDR'];
 

$result = mysql_query("SELECT * FROM courses where fname>'' order by fname ASC");
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
$amount_paid=$_POST['amount_paid'];
$paid=$_POST['paid'];$sex=$_POST['sex'];
$fname=$_POST['fname'];
$regfee=$_POST['regfee'];
$department=$_POST['department'];$expected_amount=$_POST['expected_amount'];
$barcode=$_POST['barcode'];$levels=$_POST['levels'];
$fmms="3";
$trans="Fees";

$month=date("m");

$day=date("j");
$y=date("Y");
$time=date("H:i:s");
$dates=date("Y-m-j");
if($fname!=""){
$tm=($amount_paid+$paid+$regfee);
$bbs=($tm-22500);


$mxc11i=$bbs;
if(empty($mxc11i)){
 $statusfbioRT="REGISTRATION FEE";
}

elseif($mxc11i>='0' && $mxc11i<='0'){

 $statusfbioRT="REGISTRATION FEE";

}


elseif($mxc11i>'0' ){

 $statusfbioRT="REGISTRATION FEE & PART TUTION";

}


$balances=($expected_amount-$tm);

$query4="insert into barcode set  
barcode='$barcode',db1='$db1',
matricule='$matricule',extra='1'";


$query4y="update admission set  

matricule='$matricule',country='2',barcode='$barocde'";


$query55="insert into historic  set  
matricule='$matricule',student_name='$fname',
class='$levels',amountpaid='$department',amount_paid='$tm',expected_amount='$expected_amount',balance='$balances',year='$Y',month='$month',xxx='$day',date='$dates' ,oldb='$db1'  ";



$query565="update matts  set  matt='$NJI' where roll='1'";



$query5g="update balancesheet  set  

fname='$matricule' where status='$fname'
and db1='$db1'";


$query5="insert into balancesheet  set  
id='3',name='$statusfbioRT',amount='0',amount2='22500',folk='$bbs',
date='$dates',fname='$matricule',month='$month',day='$day',db1='$db1',status='$fname',time='$time'
,year='$y'";

$query555="insert into courses  set  
matricule='$matricule',fname='$fname',
levels='$levels',departmet='$department',sex='$sex',db1='$db1',c110='$ids'  ";



mysql_query ($query5g) or die ('could not updated:'.mysql_error());
mysql_query ($query555) or die ('could not updated:'.mysql_error());
mysql_query ($query4y) or die ('could not updated:'.mysql_error());


mysql_query ($query4) or die ('could not updated:'.mysql_error());
mysql_query ($query565) or die ('could not updated:'.mysql_error());
mysql_query ($query55) or die ('could not updated:'.mysql_error());

mysql_query ($query5) or die ('could not updated:'.mysql_error());


echo "<script>alert('Update Created Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=updatebb.php?usr_name=$mats'>";

}
?>
<?php
$search=$_POST["search"];
$flag=0;
$query="select * from admission where recid='$mmp' and country='' ";
$result=mysql_query($query);
$i=0;
 while ($row = mysql_fetch_array($result)) {

?>
<form name="frmUser" method="post" action="inotss.php">
<fieldset>
<legend>Add Student Financial Record -</legend>
    <div class="w2ui-page page-0" style="float:left;width:560px;">
<?php
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
				
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Student Full Names:</label>
 




 <div> <input type="text" name="fname" value="<?php echo $row['fname'];?>" size="35">



</div>


</div>


		
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Matricule:</label>
 




 <div> <input type="text" name="matricule" value="<?php  $levels=$row['extra'];
 
 
 $sex=$row['sex'];
 
 $mms=$row['codes'];
 
 
 $mm=$row['department'];
 
 
 
$mxc11UI=$levels;
if(empty($mxc11UI)){

 $statusfbiomxc11UI="X";}
elseif($mxc11UI>='200' && $mxc11UI<='200'  ){

$statusfbiomxc11UI="HIMS/"; 
}

elseif($mxc11UI>='300' && $mxc11UI<='300'  ){

$statusfbiomxc11UI="HIMS/"; 
}
elseif($mxc11UI>='400' && $mxc11UI<='400'  ){

$statusfbiomxc11UI="UBa/HIMS/"; 
}

 echo $statusfbiomxc11UI;
 
 
 
 
 ?><?php 
 echo $mm;?>/<?php 
 echo $mu=date("y");?>/<?php

$query="select * from matts where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php  $mst=$row[1];
echo $NJI= $mst+1;

?>
<?php } ?><?php  $deptt=$row['codes'];
 
 
 
 $mxc11=$mm;

if(empty($mxc11)){

 $statusfbiomxc11="X";}
elseif($mxc11>='01' && $mxc11<='01'  ){

$statusfbiomxc11="ACCOUNTANCY"; 
}
elseif($mxc11>='02' && $mxc11<='02'  ){

$statusfbiomxc11="BANKING AND FINANCE"; 
}
elseif($mxc11>='03' && $mxc11<='03'  ){

$statusfbiomxc11="INSURANCE"; 
}

elseif($mxc11>='04' && $mxc11<='04'  ){

$statusfbiomxc11="MANAGEMENT"; 
}
elseif($mxc11>='05' && $mxc11<='05'  ){

$statusfbiomxc11="MARKETING"; 
}


$mxc111=$statusfbiomxc11;


if(empty($mxc111)){

 $statusfbiomxc111x="X";}
elseif(($mxc111>='ACCOUNTANCY' && $mxc111<='ACCOUNTANCY')  && $levels>='200' && $levels<='200' ){

$statusfbiomxc111x="352500"; 
}
elseif($mxc111>='BANKING AND FINANCE' && $mxc111<='BANKING AND FINANCE'  && $levels>='200' && $levels<='200' ){

$statusfbiomxc111x="352500"; 
}

elseif($mxc111>='INSURANCE' && $mxc111<='INSURANCE'  && $levels>='200' && $levels<='200' ){

$statusfbiomxc111x="367500"; 
}

elseif($mxc111>='MANAGEMENT' && $mxc111<='MANAGEMENT'  && $levels>='200' && $levels<='200' ){

$statusfbiomxc111x="342500"; 
}


elseif($mxc111>='MARKETING' && $mxc111<='MARKETING'  && $levels>='200' && $levels<='200' ){

$statusfbiomxc111x="342500"; 
}



 
 
 
 ?>" size="35">



</div>

</div>

                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Department:</label>
 

<input type="hidden" name="levels" value="<?php echo $levels;?>">

<input type="hidden" name="sex" value="<?php echo $sex;?>">

<input type="hidden" name="barcode" value="<?php echo "$mm$mu$NJI";?>">
 <div> <input type="text" name="department" value="<?php echo $mms;
 
 
 
 
 
 
 
 
 
 
 
 
 ?>" size="35">



</div>

</div>







                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Registration Fees</label>
 




 <div> <input type="text" name="regfee" value="<?php 

$qry = mysql_query("select sum(amount+amount2) as total
from balancesheet where fname='$ms' and  db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
echo $savet=$row['total']; ?>" size="35">



</div>

</div>

                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Expecteed Amount</label>
 




 <div> <input type="text" name="expected_amount" value="<?php 
echo $statusfbiomxc111x;
?>">



</div>

</div>






                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Amount Paid</label>
 




 <div> <input type="text" name="amount_paid" value="<?php 

$qry = mysql_query("select sum(amount_paid) as total
from historic where matricule='$mats' and amountpaid='$deptt' and  oldb='$take'  "); 
$row = mysql_fetch_assoc($qry); 
echo $save=$row['total']; ?>" size="35">



</div>

</div>

                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Balance</label>
 




 <div> <input type="text" name="balance" value="<?php 

$qry = mysql_query("select sum(balance) as total
from historic where matricule='$mats' and amountpaid='$deptt' and  oldb='$take'  "); 
$row = mysql_fetch_assoc($qry); 
 $saveuiii=$row['total'];

echo ($statusfbiomxc111x-$saveuiii);


 ?>" size="35">



</div>

</div>
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">New Installment</label>
 




 <div> <input type="text" name="paid" value="" size="35">



</div>

</div>

    <div class="w2ui-buttons">
        <button class="w2ui-btn" name="save" size="250px" style="flot:left; width:200px; height:30px;">Save</button>
    </div>
</div>
</fieldset>






















</table>
</form>
</div>
    <div class="w2ui-page page-0" style="float:left;width:200px; margin-left:650px;margin-top:-350px;">
 <?php 
				 $mxx=$mats;
				$qry = mysql_query("select id as total
from employees where empname='$mxx'  "); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row['total']; 
				?>
										<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="200px" height="125p" style="border:1px solid #000;box-shadow:1px 1px 1px #fff;">
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