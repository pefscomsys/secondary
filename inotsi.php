<?php

include 'dbcs.php';

page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
$mmp=$_GET['roll'];



 $ip=@$_SERVER['REMOTE_ADDR'];
 

$result = mysql_query("SELECT * FROM marks where first_name>'' order by first_name ASC");
?>
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
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $take=$row[1];
 
?>



<?php } ?>


<?php
$search=$_POST["search"];
$flag=0;
$query="select * from marks where roll='$mmp' ";
$result=mysql_query($query);
$i=0;
 while ($row = mysql_fetch_array($result)) {

?>
<html>
<head>
<title>Users List</title>

    <link rel="stylesheet" type="text/css" href="w2ui-1.4.2.min.css" />
    <script src="jquery.min.js"></script>
    <script type="text/javascript" src="w2ui-1.4.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="askoff.php">
<fieldset>
<legend>Move to New level -</legend>
    <div class="w2ui-page page-0" style="float:left;width:560px;">
<?php
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
				
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Student Full Names:</label>
 




 <div> <input type="text" name="fname" value="<?php echo $fname=$row['first_name'];?>" size="35">
<input type="hidden" name="barcode" value="<?php echo $row['barcode'];?>" size="35">



<input type="hidden" name="c110" value="<?php echo $row['c110'];?>" size="35">
<input type="hidden" name="sex" value="<?php echo $row['sex']; $mats=$row['matricule']; $deptt=$row['last_name'];?>" size="35">
</div>


</div>
  <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">old Department / old Class </label>
 




 <div> 	<?php echo $deptt;?>
</div>

</div>






                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">New Department /New Class</label>
 




 <div> 				
<input type='TEXT' name="departmentpp"  required='required' VALUE="<?php
 
 $qrys = "select  classs  as total
from classes where class='$deptt'   "; $qry=mysql_query($qrys);
$row = mysql_fetch_assoc($qry); 
 $sS=$row['total']; 
 

 
 
 
 $BNM=$sS+1;
 $sS=$BNM;
  if(empty($sS)){
 
 }elseif($sS<"10"){
	 
	 $fom="classs";
	 
	 
 }elseif($sS>"10"){
	 
	 $fom="oldstudent";
	 
 }
 
  $qrys = "select  class  as total
from classes where classs='$BNM'   "; $qry=mysql_query($qrys);
$row = mysql_fetch_assoc($qry); 
 echo $sS=$row['total']; 
 
 
 
?>">
</div>

</div>


		
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Matricule:</label>
 




 <div> <input type="text" name="matricule" value="<?php echo $mats;?>" size="35">



</div>

</div>

      





                <div class="w2ui-field w2ui-span4">
				
				
				
                    <label style="float:left;width:200px;">Balance Brought Forward</label>
 




 <div> <input type="text"  readonly='readonly' name="famount" value="<?php 


$qry = mysql_query("select sum(expected_amount-amount_paid) as total
from historic where student_name='$fname'   "); 
$row = mysql_fetch_assoc($qry); 
$save=$row['total']; ?>" size="35"><?php 


$qry = mysql_query("select sum(expected_amount-amount_paid) as total
from historic where student_name='$fname'   "); 
$row = mysql_fetch_assoc($qry); 
echo $save=$row['total']; ?>



</div>

				
				
				
				
				
				
				
				
				
                    <label style="float:left;width:200px;">Expecteed Amount</label>
 




 <div>

	
<input type="text" name="expected_amount"  value="<?php
 
  $qrys = "select  fees  as total
from fees where $fom='$BNM'   "; $qry=mysql_query($qrys);
$row = mysql_fetch_assoc($qry); 
echo $sss=$row['total'];
?>">






</div>

</div>




                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Scholarship Amount</label>
 

<?php 

$qry = mysql_query("select sum(scholarship) as total
from balancesheet where fname='$mats' and  db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
$savee4=$row['total']; 
$mxc11=$savee4;

if(empty($mxc11)){
 $statusfbio="<input type='text'   name='scholarship' value='' size='35' placeholder='0 for non Scholarship, >0 for Scholars'
";}
elseif($mxc11>'' ){
 $statusfbio="<input type='text' readonly='readonly'  name='scholarships' value='$mxc11' size='35' placeholder='0 for non Scholarship, >0 for Scholars'
";;
}


?>


 <div> <?php 

echo $statusfbio; ?>


</div>

</div>

</div>







                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Total Paid</label>
 




 <div> 
 <input type="text" name="amount_paid"  value="" size="35">



</div>

</div>

            
			
			
			
			
			 <div class="w2ui-field w2ui-span1" style='width:650px;'>
				<table width="600px" style='font-size:13px;'><?php
				
$query="select * from options ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
				<tr>
				<td style="float:left;width:250px;height:25px;"><?php echo $row["items"];?> (<?php echo $row["price"];?>)</td>
                   <td style="float:left;width:260px;">
				     <input name="id[]" style="float:left; width:20px;height:20px;"type="hidden" value="<?php echo $row["roll"];?>" maxlength="100" required='required' style="width: 100%">
                   <input name="date[]" style="float:left; width:20px;height:20px;"type="hidden" value="<?php echo $date=date("j/m/Y");?>" maxlength="100" required='required' style="width: 100%">
                  <input name="db1[]" style="float:left; width:20px;height:20px;"type="hidden" value="<?php echo $take;?>" maxlength="100" required='required' style="width: 100%">
                 
				   <input name="item[]" style="float:left; width:20px;height:20px;"type="hidden" value="<?php echo $row["items"];?>" maxlength="100" required='required' style="width: 100%">
                    <input name="price[]" style="float:left; width:20px;height:20px;"type="hidden" value="<?php echo $row["price"];?>"maxlength="100" required='required' style="width: 100%">
                  
                        <input name="tick[]" style="float:left; width:20px;height:20px;"type="text" value=""maxlength="100" style="width: 100%">
                    </td></tr>
				
					
					
					<?php } ?>	</table>
                </div>
			
			
			
			
			
			
			
			
			
			
			
			

    <div class="w2ui-buttons">
        <button class="w2ui-btn" name="save" type="<?php
 
echo $statusfbiopb;?>" size="250px" style="flot:left; width:200px; height:30px;">Save</button>
    </div>
</div>
</fieldset>






















</table>
</form>
</div>
    <div class="w2ui-page page-0" style="float:left;width:200px; margin-left:600px;margin-top:-360px;">
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