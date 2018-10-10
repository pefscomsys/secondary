<?php include 'dbcs.php';
$nki=$_GET['roll'];?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="w2ui-1.4.2.min.css" />
    <script src="jquery.min.js"></script>
    <script type="text/javascript" src="w2ui-1.4.2.min.js"></script>
</head>
<body><?php
$table = "timing";
$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["id"] as $id)
 {


  
  mysql_query("update fees SET
			   

               regfee='".$_POST['regfee'][$i]."',
               class='".$_POST['class'][$i]."',
               name='".$_POST['name'][$i]."',
               fees='".$_POST['fees'][$i]."'
               where  roll='$id'");
  $i++;

               
 
  }

 

echo "<script>alert('Datae Base Updated Successful!'); </script>";
 }
?>
<form method="post" action="setups.php">
<div id="form" style="width: 1300px; border:0px;">
    <div class="w2ui-page page-0">
        <div style="width: 580px; float: left; margin-right: 0px;">
            <div style="padding: 3px; font-weight: bold; color: #777;">Access </div>
            

<?php

 $sql = "SELECT * FROM fees  order by roll ASC";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"]; $name_array[] = $row["name"];$user_level_array[] = $row["user_level"];
 $class_array[] = $row["class"];
 $fees_array[] = $row["fees"];
 $regfee_array[] = $row["regfee"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $id = $id_array[$i];  
  $name = $name_array[$i];
  $class = $class_array[$i];
 $fees = $fees_array[$i];
 
 $regfee = $regfee_array[$i];
 ?>

		<input type='hidden' name='id[]' value='<?php echo $id;?>'>
				 <div class="w2ui-field w2ui-span4 " style="width:800px;">
                    <label style="width:170px;">Access/ Right <?php echo $id;?>:</label>
                   
                    <div>
					
                        <input name='class[]' type="text" maxlength="100" value="<?php echo $class;?>"style="width:20%"placeholder="regfee +school fee">
						
                        <input name='fees[]' type="text" maxlength="100" value="<?php echo $fees;?>"style="width:10%"placeholder="regfee +school fee">
                        <input name='name[]' type="text" maxlength="100" value="<?php echo $name;?>"style="width:25%"placeholder="department/class">
                        
                        <input name='regfee[]' type="text" maxlength="100" value="<?php echo $regfee;?>"style="width:10%"placeholder="Registration fee">
					<a href="deleteoii.php?roll=<?php echo $id;?>" style="text-decoration:none;"><input type="button"id='button' class="button"name="button" value="Delete"></a>

						
                    </div>
					
                    </div><?php
 }
 
echo "<input type='submit' name='submit' value='Submit'></form>";
?>








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