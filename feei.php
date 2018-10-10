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


  
  mysql_query("update control SET
			   

               firstin='".$_POST['firstin'][$i]."',
               department='".$_POST['department'][$i]."',
               db1='".$_POST['db1'][$i]."'
               where  roll='$id'");
  $i++;

               
 
  }

 

echo "<script>alert('Datae Base Updated Successful!'); </script>";
 }
?>
<div id="form" style="width: 1300px; border:0px;">
    <div class="w2ui-page page-0">
        <div style="width: 580px; float: left; margin-right: 0px;">
            <div style="padding: 3px; font-weight: bold; color: #777;">Access </div>
            

<?php

 $sql = "SELECT * FROM control  order by roll ASC";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"]; $department_array[] = $row["department"];$user_level_array[] = $row["user_level"];
 $firstin_array[] = $row["firstin"];
 $db1_array[] = $row["db1"];
 $ip_array[] = $row["ip"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $id = $id_array[$i];  
  $department = $department_array[$i];
  $firstin = $firstin_array[$i];
 $db1 = $db1_array[$i];
 
 $ip = $ip_array[$i];
 ?>

		<input type='hidden' name='id[]' value='<?php echo $id;?>'>
				 <div class="w2ui-field w2ui-span4 " style="width:600px;">
                    <label style="width:170px;">Access/ Right <?php echo $id;?>:</label>
                   
                    <div>
					
                        <input name='firstin[]' type="text" maxlength="100" value="<?php echo $firstin;?>"style="width:20%"placeholder="firstin">
						
                        <input name='db1[]' type="text" maxlength="100" value="<?php echo $db1;?>"style="width:10%"placeholder=" class">
                        <input name='department[]' type="text" maxlength="100" value="<?php echo $department;?>"style="width:25%"placeholder="department">
                        
					<a href="deleteoi.php?roll=<?php echo $id;?>" style="text-decoration:none;"><input type="button"id='button' class="button"name="button" value="Delete"></a>

						
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