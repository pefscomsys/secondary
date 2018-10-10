<?php include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];
$nki=$_GET['roll'];


?><?php


$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $take=$row[1];


?>
<?php } ?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="w2ui-1.4.2.min.css" />
    <script src="jquery.min.js"></script>
    <script type="text/javascript" src="w2ui-1.4.2.min.js"></script>
</head>
<body>

<?php
$pname=$_POST['pname'];
$vno=$_POST['vno'];
$pvisit=$_POST['pvisit'];

$month=$_POST['month'];
$day=$_POST['day'];
$year=$_POST['year'];
$contact=$_POST['contact'];
$time=date('H:i:s');
if($pname!=''){
$query5="insert into cars  set  
matricule='$notes',pname='$pname',pvisit='$pvisit',
vno='$vno',month='$month',day='$day',year='$year',timein='$time',db1='$take'  ";



mysql_query ($query5) or die ('could not updated:'.mysql_error());



echo "<script>alert('Record Created Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=cars.php?usr_name=$mats'>";
 }


?>
<form method="post" action="cars.php">
<div id="form" style="width: 1300px; border:0px;">
    <div class="w2ui-page page-0">
        <div style="width: 580px; float: left; margin-right: 0px;">
            <div style="padding: 3px; font-weight: bold; color: #777;">DIGNITRIES / VEHICLE REGISTRATION</div>
            <div class="w2ui-group" style="height: auto;">
                <div class="w2ui-field w2ui-span4">
                    <label>Person Name:</label>
                    <div>
                        <input name="pname" type="text" maxlength="100" style="width: 100%" size="350px">
                    </div>
                </div>
				
				<div class="w2ui-field w2ui-span4">
                    <label>Vehicle #:</label>
                    <div>
                        <input name="vno" type="text" maxlength="100" style="width: 100%">
                    </div>
				</div>
				
				
				
				
                <div class="w2ui-field w2ui-span4">
                    <label>Purpose of Visit:</label>
                    <div>
                        <input name="pvisit" type="text" maxlength="100" style="width: 100%">
                    </div>
                </div>
				
				
				 <div class="w2ui-field w2ui-span4">
                    <label>Date of Visit:</label>
                    <div>
                      <input name="month" type="text" maxlength="100" value="<?php echo date('m');?>" readonly='readonly' style="width:30%" placeholder="mm">
						
						
						
                        <input name="day" type="text" maxlength="100" value="<?php echo date('j');?>" readonly='readonly'style="width:30%" placeholder="dd">
						
                        <input name="year" type="text" maxlength="100" value="<?php echo date('y');?>"readonly='readonly' style="width:30%" placeholder="YY">
                    </div>
                </div>
				 
				
				
				
				
				
				
				
				
				
                <div class="w2ui-field w2ui-span4">
                    <label>Contact:</label>
                    <div>
                        <input name="contact" type="text" maxlength="100" style="width: 100%">
                    </div>
                </div>
				
               
                </div>
            </div>
        </div>
       
				
				
				
				
				
            </div>
        </div>
        <div style="clear: both; padding-top: 15px;">
           
                </div>
          
        </div>
    </div>

    <div class="w2ui-buttons">
        <button class="w2ui-btn" name="save" size="250px">Save</button>
    </div>
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

</body>
</html>