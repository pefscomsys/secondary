<?php

include 'dbcs.php';

page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
$mmp=$_GET['roll'];


?>	<?php  $datess=date('j/m/y');?>
	<?php   $dayss=date('D');
	 $yt=date('Y');	 $ytt=date('M');
	$days7=date('j');
	
	?>



<html>
<head>
<title>Users List</title>

    <link rel="stylesheet" type="text/css" href="w2ui-1.4.2.min.css" />
    <script src="jquery.min.js"></script>
    <script type="text/javascript" src="w2ui-1.4.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body><?php
$acnumber=$_POST['acnumber'];
$bname=$_POST['bname'];
$contact=$_POST['contact'];
$day=date('j');
$month=date('m');
$y=date('Y');
if($bname!=''){
$query5g="insert into accounts  set  
acnumber='$acnumber',bname='$bname',
contact='$contact'";
mysql_query ($query5g) or die ('could not updated:'.mysql_error());
 

echo "<script>alert('Record Created Successfully!'); </script>";
 }
 
 
 
?>

<form name="frmUser" method="post" action="xms.php">
<fieldset>
<legend>CREATE BANK ACCOUNT</legend>
    <div class="w2ui-page page-0" style="float:left;width:560px;">

				
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">BANK FULL NAMES</label>
 




 <div> <input type="text" name="bname" value="<?php echo $row['fname'];?>" size="35">



</div>


</div>


		
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">ACCOUNT NUMBER</label>
 




 <div> <input type="text" name="acnumber" value="<?php  echo $mxx=$row['matricule'];
 
 
 
 ?>" size="35">



</div>

</div>


		
                <div class="w2ui-field w2ui-span4">
                    <label style="float:left;width:200px;">CONTACT </label>
 




 <div> <input type="text" name="contact" value="<?php  echo $mxx=$row['matricule'];
 
 
 
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