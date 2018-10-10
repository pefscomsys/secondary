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
<body>





<?php
$basic=$_POST["basic"];
if($basic!=''){
$allowa=$_POST["allowa"];


$pit=$_POST["pit"];

$crtv=$_POST["crtv"];


$act=$_POST["act"];

$nsif=$_POST["nsif"];

$lbr=$_POST["lbr"];

$ldt=$_POST["ldt"];
$rent=$_POST["rent"];

$matricule=$_POST["matricule"];

$query1="update salary set 
pit='$pit',nsif='$nsif',
crtv='$crtv',
lbr='$lbr',
ldt='$ldt',
act='$act',
rent='$rent',
basic='$basic',
allowa='$allowa'
where matricule='$matricule'


";


mysql_query ($query1) or die ('could not updated:'.mysql_error());


echo "<script>alert('update Successful!');</script>";




}



 
?>











<h4>Course Instructor:-	<?php 
$qry = mysql_query("select  fname as total
from employer where matricule='$mmp' "); 
$row = mysql_fetch_assoc($qry); 
echo $richooTTT=$row['total']; ?><?php 
$qry = mysql_query("select  category as total
from employer where matricule='$mmp' "); 
$row = mysql_fetch_assoc($qry); 
$richooTTTs=$row['total']; ?>





<?php

echo $matricule=$_GET["roll"];
$query="select * from salary where matricule='$matricule'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<form method="post" action="inotssppp.php">
<div id="form" style="width: 1300px; border:0px;">
    <div class="w2ui-page page-0"  style="width: 800px; ">
        <div style=" margin-right: 0px;">
            <div style="padding: 3px; font-weight: bold; color: #777;">Create Menu Item for Payslips</div>
            


		
					</div>
<input name='matricule' type="hidden" maxlength="100" value="<?php echo $matricule;?>">
                        <input name='basic' type="text" maxlength="100" value="<?php 
$qry = mysql_query("select  basic as total
from salary where matricule='$matricule' "); 
$row = mysql_fetch_assoc($qry); 
echo $basic=$row['total']; ?>"style="width:20%"placeholder="Basic Salary">
                        

 <input name='pit' type="text" maxlength="100" value="<?php 
$qry = mysql_query("select  pit as total
from salary where matricule='$matricule' "); 
$row = mysql_fetch_assoc($qry); 
echo $basic=$row['total']; ?>"style="width:20%"placeholder="PIT">
                        
 <input name='nsif' type="text" maxlength="100" value="<?php 
$qry = mysql_query("select  nsif as total
from salary where matricule='$matricule' "); 
$row = mysql_fetch_assoc($qry); 
echo $basic=$row['total']; ?>"style="width:8%"placeholder="NSIF">
                        

 <input name='lbr' type="text" maxlength="100" value="<?php 
$qry = mysql_query("select  lbr as total
from salary where matricule='$matricule' "); 
$row = mysql_fetch_assoc($qry); 
echo $basic=$row['total']; ?>"style="width:8%"placeholder="lbr">
                        

 <input name='act' type="text" maxlength="100" value="<?php 
$qry = mysql_query("select act as total
from salary where matricule='$matricule' "); 
$row = mysql_fetch_assoc($qry); 
echo $basic=$row['total']; ?>"style="width:8%"placeholder="act">
                        

 <input name='crtv' type="text" maxlength="100" value="<?php 
$qry = mysql_query("select  crtv as total
from salary where matricule='$matricule' "); 
$row = mysql_fetch_assoc($qry); 
echo $basic=$row['total']; ?>"style="width:8%"placeholder="crtv">
                   
 <input name='ldt' type="text" maxlength="100" value="<?php 
$qry = mysql_query("select  ldt as total
from salary where matricule='$matricule' "); 
$row = mysql_fetch_assoc($qry); 
echo $basic=$row['total']; ?>"style="width:8%"placeholder="ldt">
                             


 <input name='allowa' type="text" maxlength="100" value="<?php 
$qry = mysql_query("select  allowa as total
from salary where matricule='$matricule' "); 
$row = mysql_fetch_assoc($qry); 
echo $basic=$row['total']; ?>"style="width:8%"placeholder="Allowance">
                        




						</div>
					
                    </div><?php
 }
 
echo "<input type='submit' name='submit' value='Submit'></form>";
?>







</div>
 <div style='float:left; width:932; border-bottom:1px solid #ccc;'></div>

       
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