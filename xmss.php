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
$accountn=$_POST['accountn'];
$bname=$_POST['bname'];
$contact=$_POST['contact'];
$bname=$_POST['bname'];
$studentname=$_POST['studentname'];
$amount=$_POST['amount'];
$receipt=$_POST['receipt'];
$date=date("Y/m/j");
$day=date('j');
$month=date('m');
$y=date('Y');
if($studentname!=''){
$query5g="insert into trans  set  
accountn='$accountn',studentname='$studentname',
contact='$contact',acnumber='$accountn',

amount='$amount' ,
receipt='$receipt'  ,
date='$date',bearer='$notes',
month='$month' ,
day='$day',
year='$year' ,
db1='$take'   ";
mysql_query ($query5g) or die ('could not updated:'.mysql_error());
 

echo "<script>alert('Record Created Successfully!'); </script>";
 }
 
 

?>

<form name="frmUser" method="post" action="xmss.php">
<fieldset>
<legend>REGISTER BANK TRANSACTION</legend>
    <div class="w2ui-page page-0" style="float:left;width:560px;">

				
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">RECEIPT  NO</label>
 




 <div> <input type="text" name="receipt" value="<?php echo $row['fname'];?>" size="35">



</div>


</div>


		
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">STUDENT NAMES</label>
 




 <div> <input type="text" name="studentname" value="<?php  echo $mxx=$row['matricule'];
 
 
 
 ?>" size="35">



</div>

</div>


		
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">AMOUNT </label>
 




 <div> <input type="text" name="amount" value="<?php  echo $mxx=$row['matricule'];
 
 
 
 ?>" size="35">



</div>

</div>

                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">ACCOUNT NUMBER </label>
 




 <div>
<select name="accountn">
<?php
$rs=mysql_query("Select * from accounts order by  roll ASC");
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[1]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[1]'>$row[1]</option>";
}
}
?></select> 



</div>

</div>

                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">DATE </label>
 




 <div> <input type="text" name="date" value="<?php  echo $mxx=$row['matricule'];
 
 
 
 ?>" size="35">



</div>

</div>


    <div class="w2ui-buttons">
        <button class="w2ui-btn" name="save" size="250px" style="flot:left; width:235px; height:30px;margin-left:200px;">Save</button>
    </div>
</div>






                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;"></label>
 
<div>

</div>

</div>







</table>
</form>
</div>
    <div class="w2ui-page page-0" style="float:left;width:200px; margin-left:650px;margin-top:-350px;">
 </div>

        <div style="clear: both; padding-top: 15px;">
           
                </div> 


       
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