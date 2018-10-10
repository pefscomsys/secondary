<?php include 'dbcs.php';

$mmp=$_GET['roll'];

page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;

?><?php


$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $nki=$row['fax'];


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
$search=$_POST["search"];
$flag=0;
$query="select * from employer where matricule='$mmp' ";
$result=mysql_query($query);
$i=0;
 while ($row = mysql_fetch_array($result)) {

?>
<form method="post" action="picupss.php" enctype="multipart/form-data">
<div id="form" style="width: 1300px; border:0px;">
    <div class="w2ui-page page-0">
        <div style="width: 580px; float: left; margin-right: 0px;">
            <div style="padding: 3px; font-weight: bold; color: #777;">General</div>
            <div class="w2ui-group" style="height: auto;">
       
				<div class="w2ui-field w2ui-span4">
                    <label>Photo:</label>
                    <div>
					
                        <input name="sendme" type="hidden" value="<?php echo $nki;?>" maxlength="100" style="width: 100%"/>
						
                        <input name="mats" type="hidden" value="<?php echo $mmp;?>" maxlength="100" style="width: 100%"/>
						<input id="file1" id="file1" name="pic" type='file' multiple title="test #1" style="background:#ccc;" maxlength="100" style="width: 100%"/>

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