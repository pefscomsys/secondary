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
<body><?php
$table = "timing";
$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["id"] as $recid)
 {


  
  mysql_query("update courstitle SET
			   

               coursecode='".$_POST['coursecode'][$i]."',
               days='".$_POST['days'][$i]."',
               from1='".$_POST['from1'][$i]."',
			   
			   
               db1='".$_POST['db1'][$i]."',
               department='".$_POST['department'][$i]."',
               stream='".$_POST['stream'][$i]."',
			   
			   
			   
               levels='".$_POST['levels'][$i]."',
               stream='".$_POST['stream'][$i]."',
			   
			   
			   
               to1='".$_POST['to1'][$i]."'
               where  id='$recid'");
  $i++;

               
 
  }

 

echo "<script>alert('Datae Base Updated Successful!'); </script>";
 }
?>
<form method="post" action="sidebysideformsS.php">
<div id="form" style="width: 1300px; border:0px;">
    <div class="w2ui-page page-0"  style="width: 800px; ">
        <div style=" margin-right: 0px;">
            <div style="padding: 3px; font-weight: bold; color: #777;">Schedule / Activities (E.g 7:30 am = 730, 1:00pm= 100)</div>
            

<?php
 $sql = "SELECT * FROM courstitle order by department  ASC";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["id"];
 $days_array[] = $row["days"];
  $levels_array[] = $row["levels"];
  $stream_array[] = $row["stream"];
 $department_array[] = $row["department"];
 $from1_array[] = $row["from1"];
 
 
 $coursecode_array[] = $row["coursecode"];
 $db1_array[] = $row["db1"];
 
 
 $to1_array[] = $row["to1"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $id = $id_array[$i];
  $days = $days_array[$i];
  
  $levels = $levels_array[$i];
  $stream = $stream_array[$i];
  $department = $department_array[$i];
  
  
  
 $coursecode = $coursecode_array[$i];
 
 $db1 = $db1_array[$i];
  
 $from1 = $from1_array[$i];
 
 $to1 = $to1_array[$i];
 ?>

		<input type='hidden' name='id[]' value='<?php echo $recid;?>'>
				 <div class="w2ui-field w2ui-span4">
                    <label>Activity <?php echo $id;?>:</label>
                    <div>
					
                        <input name='days[]' type="text" maxlength="100" value="<?php echo $days;?>"style="width:10%"placeholder="Day">
                        <input name='department[]' type="text" maxlength="100" value="<?php echo $department;?>"style="width:20%"placeholder="activities">
                        <input name='from1[]' type="text" maxlength="100" value="<?php echo $from1;?>"style="width:10%"placeholder="From">
				
						
                        <input name='to1[]' type="text" value="<?php echo $to1;


?>" maxlength="100" style="width:8%" placeholder="To">		 <input name='levels[]' type="text" maxlength="100" value="<?php echo $levels;?>"style="width:10%"placeholder="From">
						
						<input name='coursecode[]' type="text" maxlength="100" value="<?php echo $coursecode;?>"style="width:10%"placeholder="From">
						
						<input name='coursecode[]' type="text" maxlength="100" value="<?php echo $db1;?>"style="width:10%"placeholder="From">
						
							<a href="deletes.php?roll=<?php echo $id;?>" style="text-decoration:none;"><input type="button"id='button' class="button"name="button" value="Delete"></a>

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