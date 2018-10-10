<?php

include 'dbcs.php';

page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
$mmp=$_GET['roll'];



 $ip=@$_SERVER['REMOTE_ADDR'];
 

$result = mysql_query("SELECT * FROM courses where fname>'' order by fname ASC");
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
$query="select * from exm where roll='$mmp' ";
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



<?php
$rolls=$_POST['roll'];$pd=$_POST['pd'];
$bhead=$_POST['bhead'];
$paid=$_POST['paid'];

$sex=$_POST['sex'];
$status=$_POST['status'];
$regfee=$_POST['regfee'];$idcard=$_POST['idcard'];
$expenditure=$_POST['expenditure'];
$amount=$_POST['paid'];
$contact=$_POST['contact'];
$quantity=$_POST['quantity'];$motive=$_POST['motive'];
$expected_amount=$_POST['expected_amount'];
$month=date("m");

$day=date("j");
$y=date("Y");
$time=date("H:i:s");
$dates=date("Y-m-j");
if($status!=""){
$tm=($paid+pd);
$bbs=($tm-22500);

$balances=($expected_amount-$tm);



$query5="insert into balancesheet  set  
id='5',name='EXPENDITURE',
date='$dates',month='$month',day='$day',db1='$take',status='$status',time='$time'
,year='$y'  ,quantity='$quantity',expenditure='$paid',motive ='$motive', ass='$ids',bhead='$bhead'                  ";


$query555="update exm  set  
paid='$paid',balance='$balances',quantity='$quantity'where roll='$rolls'";


mysql_query ($query555) or die ('could not updated:'.mysql_error());

mysql_query ($query5) or die ('could not updated:'.mysql_error());

echo "<script>alert('Expenditure Created Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=inotsss.php?usr_name=$mats'>";

}
?>
<form name="frmUser" method="post" action="ps.php">
<fieldset>
<legend>Update Fees -</legend>
    <div class="w2ui-page page-0" style="float:left;width:560px;">
<?php
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
				 <input type="hidden" name="roll" value="<?php 
			
 echo $rolls=$mmp;?>" size="35">

<?php
$query="select * from exm where roll='$mmp' ";
$result=mysql_query($query);
$i=0;
 while ($row = mysql_fetch_array($result)) {

?>
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Benficiary:</label>
 




 <div> <input type="text" name="fname" value="<?php echo $fname=$row['fname'];?>" size="35">



</div>


</div>

                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Purpose</label>
 




 <div> <input type="text" name="quantity" value="<?php echo $levels=$row['quantity'];?>" size="35">



</div>

</div>



                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Contact:</label>
 




 <div> 
 <input type="text" name="contact" value="<?php echo $deptt=$row['contact'];?>" size="35">



</div>

</div>



				
				
				
				
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Expecteed Amount</label>
 




 <div> 
 <input type="text"  readonly='readonly' name="expected_amount" value="<?php 

 echo $exp=$row['expected_amount']; ?>" size="35">



</div>



</div>


    <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Budget Head</label>
 

 <div><select name="bhead"style="background:#ccc;" class="required"   id="select8">
               
                <option value=""></a></option>
                <option value="Tui">Tuition</a></option>
                <option value="Reg">Registration</option>

				
      </select>


</div>

</div>



                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Previous Transaction Amount</label>
 

 <input type="text"  readonly='readonly' name="paid" value="<?php 

  echo $paid=$row['paid']; ?>" size="35">


 <div>

</div>





                <div class="w2ui-field w2ui-span4">
				
                    <label style="float:left;width:200px;">Balance</label>
 




 <div> 
 
 <input type="text" name="balance" readonly='readonly' value="<?php 
 echo $bb=($exp-$paid);
 
 
 
 
 ?>" style="background:red;color:#fff;"size="35">



</div>

</div>




  <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">Add Transaction</label>
 




 <div> <?php
 
$mxc111=$bb;

if(empty($mxc111)){ $statusfbiopb="button";
  echo $statusfbiop="<input type='text' readonly='readonly'  name='pd' value='COMPLETED' size='35' >

";}
elseif($mxc111>'' ){$statusfbiopb="submit";
 echo $statusfbiop="<input type='text'   name='pd' value='' size='35' value=''>
";
}

?>




</div>



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
    <div class="w2ui-page page-0" style="float:left;width:200px; margin-left:600px;margin-top:-460px;">
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
<?php } 

}?>

       
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