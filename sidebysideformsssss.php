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


  
  mysql_query("update users SET
			   

               user_name='".$_POST['user_name'][$i]."',
               full_name='".$_POST['full_name'][$i]."',
               user_level='".$_POST['user_level'][$i]."'
               where  id='$id'");
  $i++;

               
 
  }

 

echo "<script>alert('Datae Base Updated Successful!'); </script>";
 }
?>
<form method="post" action="sidebysideformsssss.php">
<div id="form" style="width: 1300px; border:0px;">
    <div class="w2ui-page page-0">
        <div style="width: 580px; float: left; margin-right: 0px;">
            <div style="padding: 3px; font-weight: bold; color: #777;">Access </div>
            

<?php

 $sql = "SELECT * FROM users order by id ASC";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["id"]; $full_name_array[] = $row["full_name"];$user_level_array[] = $row["user_level"];
 $user_name_array[] = $row["user_name"];
 $froms_array[] = $row["froms"];
 $ip_array[] = $row["ip"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $id = $id_array[$i];  $user_level = $user_level_array[$i];
  $full_name = $full_name_array[$i];
  $user_name = $user_name_array[$i];
 $froms = $froms_array[$i];
 
 $ip = $ip_array[$i];
 ?>

		<input type='hidden' name='id[]' value='<?php echo $id;?>'>
				 <div class="w2ui-field w2ui-span4 " style="width:600px;">
                    <label style="width:170px;">Access/ Right <?php echo $id;?>:</label>
                   
                    <div>
					
                        <input name='user_name[]' type="text" maxlength="100" value="<?php echo $user_name;?>"style="width:20%"placeholder="user_name">
						
                        <input name='user_level[]' type="text" maxlength="100" value="<?php echo $user_level;?>"style="width:10%"placeholder="user_level">
                        <input name='full_name[]' type="text" maxlength="100" value="<?php echo $full_name;?>"style="width:25%"placeholder="full_name">
                        
					<a href="delete.php?roll=<?php echo $id;?>" style="text-decoration:none;"><input type="button"id='button' class="button"name="button" value="Delete"></a>

						
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