<?php include 'dbcs.php';
$nki=$_GET['roll'];


?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="w2ui-1.4.2.min.css" />
    <script src="jquery.min.js"></script>
    <script type="text/javascript" src="w2ui-1.4.2.min.js"></script>
</head>
<body>
<form method="post" action="addemp.php">
<div id="form" style="width: 1300px; border:0px;">
    <div class="w2ui-page page-0">
        <div style="width: 580px; float: left; margin-right: 0px;">
            <div style="padding: 3px; font-weight: bold; color: #777;">General</div>
            <div class="w2ui-group" style="height: auto;">
                <div class="w2ui-field w2ui-span4">
                    <label>First Name:</label>
                    <div>
                        <input name="first_name" type="text" maxlength="100" style="width: 100%" size="350px" required='required'>
                    </div>
                </div>
				
				<div class="w2ui-field w2ui-span4">
                    <label>Middle Name:</label>
                    <div>
                        <input name="middle_name" type="text" maxlength="100" style="width: 100%">
                    </div>
				</div>
				
				
				
				
                <div class="w2ui-field w2ui-span4">
                    <label>Last Name:</label>
                    <div>
                        <input name="last_name" type="text" maxlength="100" style="width: 100%" required='required'>
                    </div>
                </div>
				
				
				   <div class="w2ui-field w2ui-span4">
                    <label>Classification:</label>
                    <div>
                        <select name="cm"style="background:#ccc;" class="required"   required='required'id="select8">
               
                <option value="">--Select--</option>
                <option value="1">Civil servant</option>
				
                <option value="1">Part Time</option>
                <option value="2">Permanent</option>
				</select>
                    </div>
                </div>
				
				
				
				
				
				
				
				
				
				 <div class="w2ui-field w2ui-span4">
                    <label>Date of Birth:</label>
                    <div>
                        <input name="month" type="text" maxlength="100" style="width:30%" placeholder="mm" required='required'>
						
						
						
                        <input name="day" type="text" maxlength="100" style="width:30%" placeholder="dd" required='required'>
						
                        <input name="year" type="text" maxlength="100" style="width:30%" placeholder="YY" required='required'>
                    </div>
                </div>
				 <div class="w2ui-field w2ui-span4">
                    <label>Sex:</label>
                    <div>
                        <input name="sex" type="text" maxlength="100" style="width:30%" placeholder="M or F" required='required'>
						
				
				     </div>
                </div>
				
				
				
				
				
				
				
				
				
				
                <div class="w2ui-field w2ui-span4">
                    <label>Place of Birth:</label>
                    <div>
                        <input name="place" type="text" maxlength="100" style="width: 100%" required='required'>
                    </div>
                </div>
				
                <div class="w2ui-field w2ui-span4">
                    <label>Nationality:</label>
                    <div>
                        <input name="nation" type="text" maxlength="100" style="width: 100%" required='required'>
                    </div>
                </div>
				
				
				
				
				
                <div class="w2ui-field w2ui-span4">
                    <label>Religion:</label>
                    <div>
                        <input name="religion" type="text" maxlength="100" style="width: 100%" required='required'>
                    </div>
                </div>
				
				 <div class="w2ui-field w2ui-span4">
                    <label>Highest Qualification:</label>
                    <div>
                        <input name="qualification" type="text" maxlength="100" style="width: 100%" >
                    </div>
                </div>
				
				
				
				
				
				
               
                </div>
            </div>
        </div>
        <div style="width: 700px; float: right; margin-left: 0px;">
            <div style="padding: 3px; font-weight: bold; color: #777;">Address</div>
            <div class="w2ui-group" style="height: auto;">
                <div class="w2ui-field w2ui-span4">
                    <label>Address:</label>
                    <div>
                        <input name="address" type="text" maxlength="100" style="width: 100%" required='required'/>
                    </div>
                </div>
               
                <div class="w2ui-field w2ui-span4">
                    <label>Id card No</label>
                    <div>
                        <input name="city" type="text" maxlength="50" size="25" required='required'/>
                    </div>
                </div>
               
              
				 <div class="w2ui-field w2ui-span4">
                    <label>Country:</label>
                    <div>
					
                        <input name="matricule" type="HIDDEN" value="" maxlength="100" style="width: 100%"/>
                        <input name="country" type="text" maxlength="100" style="width: 100%"required='required'/>
                    </div>
                </div>
				
				 <div class="w2ui-field w2ui-span4">
                    <label>Contact:</label>
                    <div>
                        <input name="contact1" type="text" maxlength="100" style="width: 30%"required='required'/>
                        <input name="contact2" type="text" maxlength="100" style="width: 30%"/>
                    </div>
                </div>
				 <div class="w2ui-field w2ui-span4">
                    <label>Father's Name:</label>
                    <div>
                        <input name="father" type="text" maxlength="100" style="width: 100%" required='required'/>
                    </div>
                </div>
				<div class="w2ui-field w2ui-span4">
                    <label>Mother's Name:</label>
                    <div>
                        <input name="mother" type="text" maxlength="100" style="width: 100%"/>
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