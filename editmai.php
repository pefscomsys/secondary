<?php

include 'dbcs.php';

page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;




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
<html>
<head>
<title>Users List</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<?php
$month=$_POST["month"];

$matricule=$_POST["matricule"];

$motive=$_POST["motive"];

$amount=$_POST["amount"];
$date=date("j/m/y");
if($amount!=''){

$query4t="insert into penalty  set  
matricule='$matricule',amount='$amount'  ,motive='$motive',month='$month',date='$date'";


mysql_query ($query4t) or die ('could not updated:'.mysql_error());
echo "<script>alert('Record Created Successfully!'); </script>";

}
?>















<form name="frmUser" method="post" action="">
<?php
$roll=$_GET["3"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $take=$row[1];
 
?>



<?php } ?>


<?php
$mxx=$_GET["roll"];
?>
<table width="750px" cellspacing="0"cellpadding="2">
<?php
$query="select * from employer where matricule='$mxx'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<tr><td style="float:left;width:170px;">Employee Name(s):</td><td  style="float:left;width:430px;"><input type="text" name="fname" value="<?php echo $row["fname"];?>"></td></tr>

<tr><td style="float:left;width:170px;">Matricule:</td><td  style="float:left;width:430px;"><input type="text" name="matricule" value="<?php echo $row["matricule"];?>"></td></tr>
<tr><td style="float:left;width:170px;">Penalty -Month</td><td  style="float:left;width:430px;">

<select name="month"style="background:#ccc;" class="required" REQUIRED='required'  id="select8">
               
                <option value="1">JAN</a></option>
                <option value="2">FEB</option>
                <option value="3">MARCH</option>
				
                <option value="4">APRIL</option>
                <option value="5">MAY</option>
                <option value="6">JUNE</option>
                <option value="7">JULY</option>
				
                <option value="8">AUGUST</option>
				
				
                <option value="9">SEPT</option>
                <option value="10">OCT</option>
                <option value="11">NOV</option>
				
                <option value="12">DEC</option>
				
      </select>


</td></tr>
<tr><td style="float:left;width:170px;">Penalty Amount</td><td  style="float:left;width:430px;"><input type="text" name="amount" value="" required='required'></td></tr>
<tr><td style="float:left;width:170px;">Motive</td><td  style="float:left;width:430px;"><input type="text" name="motive" value="" required='required'></td></tr>



<?php } ?><tr><td> <p align="center">
          <input name="doRegister" type="submit" id="doRegister" value="SAVE" STYLE="padding:10px 45px;">
        </p>
		</td><td></td></tr>
		</table>
</form>
</div>
</body></html>