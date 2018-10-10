<?php include 'dbcs.php';
$nki=$_GET['roll'];


?>
<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $take=$row[1];



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
<form method="post" action="addempst.php">
<div id="form" style="width: 1300px; border:0px;">
    <div class="w2ui-page page-0">
        <div style="width: 580px; float: left; margin-right: 0px;">
            <div style="padding: 3px; font-weight: bold; color: #777;">General- information</div>
            <div class="w2ui-group" style="height: auto;">
                <div class="w2ui-field w2ui-span4">
                    <label>First Name:</label>
                    <div>
                        <input name="first_name" type="text" maxlength="100" style="width: 100%" required='required'size="350px">
                    </div>
                </div>
				
				
				 <div class="w2ui-field w2ui-span4">
                    <label>Date of Birth:</label>
                    <div>
					
                        <input name="day" type="text" maxlength="100" style="width:30%" required='required' placeholder="dd">
						
                        <input name="month" type="text" maxlength="100" required='required' style="width:30%" placeholder="mm">
						
						
						
                        <input name="year" type="text" maxlength="100" style="width:30%" required='required' placeholder="YY">
                    </div>
                </div>
				 <div class="w2ui-field w2ui-span4">
                    <label>Sex:</label>
                    <div>
					<select name="sex"style="background:#ccc;" class="required"   required='required' id="select8">
               
                <option value="M">M</option>
                <option value="F">F</option>
				
				</select>
						
				
				     </div>
                </div>
				
				 <div class="w2ui-field w2ui-span4">
                    <label>Class:</label>
                    <div>
				
<select name="departmentpp"  required='required'>
<?php
$rs=mysql_query("Select * from classes  order by  roll ASC",$link);
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
                    <label>Expected Amouunt:</label>
                    <div>
				
<select name="expected_amount"  >
<?php
$rs=mysql_query("Select * from fees  order by  roll ASC",$link);
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[2]' selected>$row[4]</option>";
}
else
{
echo "<option value='$row[2]'>$row[4]</option>";
}
}
?></select>
				
				
				
				     </div>
                </div>
				
				
				
				
				
				
				 <div class="w2ui-field w2ui-span4">
                    <label>Amount Paid:</label>
                    <div>
				
                        <input name="amount_paid" type="text" maxlength="100"  style="width: 35%; background:red;color:#fff;">
				
				
				     </div>
                </div>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
                <div class="w2ui-field w2ui-span4">
				<table width="400px"><?php
				
$query="select * from options ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
 
		 ?>
				<tr>
				<td style="float:left;width:140px;height:25px;"><?php echo $row["items"];?> (<?php echo $row["price"];?>)</td>
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
				
             
				
				
               
                </div>
            </div>
        </div>
        <div style="width: 700px; float: right; margin-left: 0px;">
            <div style="padding: 3px; font-weight: bold; color: #777;">Address and other - information</div>
            <div class="w2ui-group" style="height: auto;">
                <div class="w2ui-field w2ui-span4">
                    <label>Address:</label>
                    <div>
                        <input name="address" type="text" maxlength="100"  style="width: 100%"/>
                    </div>
                </div>
                  
                <div class="w2ui-field w2ui-span4">
                    <label>Status</label>
                    <div><select name="levels"style="background:#ccc;"  id="select8">
               
                <option value="">--</option>
                <option value="New">NEW</option>
                <option value="Old">OLD</option>
				
				</select>
                    </div>
                </div>
                <div class="w2ui-field w2ui-span4">
                    <label>Sponsors Id card No</label>
                    <div>
                        <input name="city" type="text" maxlength="50" size="25"/>
                    </div>
                </div>
               
                
				 <div class="w2ui-field w2ui-span4">
                    <label>Contact:</label>
                    <div>
                        <input name="contact1" type="text" maxlength="100" style="width: 30%"/>
                        <input name="contact2" type="text" maxlength="100" style="width: 30%"/>
                    </div>
                </div>
				 <div class="w2ui-field w2ui-span4">
                    <label>Father's Name:</label>
                    <div>
                        <input name="father" type="text" maxlength="100"  style="width: 100%"/>
                    </div>
                </div>
				<div class="w2ui-field w2ui-span4">
                    <label>Mother's Name:</label>
                    <div>
                        <input name="mother" type="text" maxlength="100"  style="width: 100%"/>
                    </div>
                </div>
			
				 <div class="w2ui-field w2ui-span4">
                    <label>Guardain</label>
                    <div>
                        <input name="guardian1" type="text" maxlength="50"   size="25" placeholder="Guardian Conatact"/>
						
                        <input name="guardian2" type="text" maxlength="50"  size="15" placeholder="Guardian Conatact2"/>
                    </div>
				
				
				
				  <div class="w2ui-buttons">
        <button class="w2ui-btn" name="submit" size=""style="padding:10px 45px;">Save</button>
    </div>
				
				
            </div>
        </div>
        <div style="clear: both; padding-top: 15px;">
           
                </div>
          
        </div>
    </div>

  
</div>
</form>
<script type="text/javascript">
$(function () {
    $('#form').w2form({ 
        name   : 'form',
       
        url    : 'server/post',
        fields : [
            { field: 'first_name', type: 'text', required: true }, { field: 'middle_name',  type: 'text', required: true },
			 { field: 'departmentpp',  type: 'text', required: true }, { field: 'amount_paid',  type: 'text', required: true },
			  { field: 'expected_amount',  type: 'text', required: true }, { field: 'father',  type: 'text', required: true },
			   { field: 'mother',  type: 'text', required: true }, { field: 'guardian1',  type: 'text', required: true },
			    { field: 'contact1',  type: 'text', required: true }, { field: 'address',  type: 'text', required: true }, { field: 'levels',  type: 'text', required: true },
				 { field: 'city',  type: 'text', required: true },
			   { field: 'sex',  type: 'text', required: true },
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