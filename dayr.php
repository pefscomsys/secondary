<?php include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];



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
$comment=$_POST['comment'];;
$firstname=$_POST['firstname'];
$secondname=$_POST['secondname'];
$time=date('H:i:s');
$day=$_POST['day'];
$month=$_POST['month'];

$year=$_POST['year'];

if($comment!=''){

$query5="insert into remark  set  comment='$comment',firstname='$firstname',secondname='$secondname',month='$month',day='$day',year='$year',timeout='$time',db1='$take' ";



mysql_query ($query5) or die ('could not updated:'.mysql_error());


echo "<script>alert('update Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=visitorss.php?usr_name=$mats'>";


}



?>
<fieldset>
<form method="post" action="dayr.php">
<div id="form" style="width: 1300px; border:0px;">
    <div class="w2ui-page page-0">
        <div style="width: 580px; float: left; margin-right: 0px;">
            <div style="padding: 3px; font-weight: bold; color: #777;">Enter your End of Day Report</div>
            <div class="w2ui-group" style="height: auto;">
                <div class="w2ui-field w2ui-span4">
                    <label >Guard on duty:</label>
                    <div>
                        <input name="firstname" type="text" value="<?php echo $row['firstname'];?>" maxlength="100" style="width: 40%" size="250px" >
						
                        <input name="secondname" type="text" value="<?php echo $row['secondnamename'];?>" maxlength="100" style="width: 40%" size="350px" >
                    </div>
                </div>
				
			
				
				
				 <div class="w2ui-field w2ui-span4">
                    <label>Date:</label>
                    <div>
                        <input name="month" type="text" maxlength="100" value="<?php echo date('m');?>" readonly='readonly' style="width:30%" placeholder="mm" readonly='readonly'>
						
						
						
                        <input name="day" type="text" maxlength="100" value="<?php echo date('j');?>" readonly='readonly'style="width:30%" placeholder="dd" readonly='readonly'>
						
                        <input name="year" type="text" maxlength="100" value="<?php echo date('y');?>"readonly='readonly' style="width:30%" placeholder="YY" readonly='readonly'>
                    </div>
                </div>
				 
				
				
				
				
				    <div class="w2ui-field w2ui-span4">
                    <label>Remark:</label>
                    <div>
					<textarea name="comment" style="height:100px; width:450px;" ></textarea>
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
        <button class="w2ui-btn" name="save" size="250px">SAVE REPORTS</button>
    </div>
</div>
</form></fieldset>
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