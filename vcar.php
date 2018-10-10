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
$timeout=date('H:i:s');
if($comment!=''){

$query5="update cars  set  comment='$comment',timeout='$timeout',status='2' where roll='$ms' and db1='$take'   ";



mysql_query ($query5) or die ('could not updated:'.mysql_error());


echo "<script>alert('update Successfully!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=visitorss.php?usr_name=$mats'>";


}



?>
<?php
$search=$_POST["search"];
$flag=0;
$query="select * from cars where roll='$ms' ";
$result=mysql_query($query);
$i=0;
 while ($row = mysql_fetch_array($result)) {

?>
<form method="post" action="vvist.php">
<div id="form" style="width: 1300px; border:0px;">
    <div class="w2ui-page page-0">
        <div style="width: 580px; float: left; margin-right: 0px;">
            <div style="padding: 3px; font-weight: bold; color: #777;">UPDATE CARS REGISTER</div>
            <div class="w2ui-group" style="height: auto;">
                <div class="w2ui-field w2ui-span4">
                    <label>Full Name:</label>
                    <div>
                        <input name="pname" type="text" value="<?php echo $row['pname'];?>" maxlength="100" style="width: 100%" size="350px" readonly='readonly'>
                    </div>
                </div>
				
			
				
				
				
                <div class="w2ui-field w2ui-span4">
                    <label>Purpose of Visit:</label>
                    <div>
                        <input name="pvisit" type="text" value="<?php echo $row['pvisit'];?>" maxlength="100" style="width: 100%" readonly='readonly'>
                    </div>
                </div>
				
                <div class="w2ui-field w2ui-span4">
                    <label>Car No:</label>
                    <div>
                        <input name="vno" type="text"  value="<?php echo $row['vno'];?>"maxlength="100" style="width: 100%" readonly='readonly'>
                    </div>
                </div>
				
				
				 <div class="w2ui-field w2ui-span4">
                    <label>Date of Visit:</label>
                    <div>
                        <input name="month" type="text" maxlength="100" value="<?php echo date('m');?>" readonly='readonly' style="width:30%" placeholder="mm" readonly='readonly'>
						
						
						
                        <input name="day" type="text" maxlength="100" value="<?php echo date('j');?>" readonly='readonly'style="width:30%" placeholder="dd" readonly='readonly'>
						
                        <input name="year" type="text" maxlength="100" value="<?php echo date('y');?>"readonly='readonly' style="width:30%" placeholder="YY" readonly='readonly'>
                    </div>
                </div>
				 
				
				
				
				
				
				
				
				
				
                <div class="w2ui-field w2ui-span4">
                    <label>Timein:</label>
                    <div>
                        <input name="contact" type="text" maxlength="100" style="width: 100%" value="<?php echo $row['timein'];?>" readonly='readonly'>
                    </div>
                </div>
				
				   <div class="w2ui-field w2ui-span4">
                    <label>Timeout:</label>
                    <div>
                        <input name="timeout" type="text" maxlength="100" style="width: 100%" value="<?php echo date("H:i:s");?>" readonly='readonly'>
                    </div>
                </div>
				    <div class="w2ui-field w2ui-span4">
                    <label>Comment:</label>
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
        <button class="w2ui-btn" name="save" size="250px">UPDATE CAR RECORDS</button>
    </div>
</div>
</form><?php } ?>
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