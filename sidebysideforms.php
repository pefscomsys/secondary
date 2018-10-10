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
<?php
$table = "timing";
$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["id"] as $recid)
 {


  
  mysql_query("update timing SET
			   

               froms='".$_POST['froms'][$i]."',
               tos='".$_POST['tos'][$i]."'
               where  recid='$recid'");
  $i++;

               
 
  }

 

echo "<script>alert('Datae Base Updated Successful!'); </script>";
 }
?>
<form method="post" action="sidebysideforms.php">
<div id="form" style="width: 1300px; border:0px;">
    <div class="w2ui-page page-0">
        <div style="width: 580px; float: left; margin-right: 0px;">
            <div style="padding: 3px; font-weight: bold; color: #777;">Timing / Activities (E.g 7:30 am = 730, 1:00pm= 100)</div>
 
<?php
 $sql = "SELECT * FROM timing where extra='$nki' order by recid ASC";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["recid"];
 $froms_array[] = $row["froms"];
 $tos_array[] = $row["tos"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $recid = $id_array[$i];
 $froms = $froms_array[$i];
 
 $tos = $tos_array[$i];
 ?>

		<input type='hidden' name='id[]' value='<?php echo $recid;?>'>
				 <div class="w2ui-field w2ui-span4">
                    <label>Time <?php echo $recid;?>:</label>
                    <div>
                        <input name='froms[]' type="text" maxlength="100" value="<?php echo $froms;?>"style="width:30%"placeholder="From">
						
						
						
                        <input name='tos[]' type="text" value="<?php echo $tos;


?>" maxlength="100" style="width:25%" placeholder="To">
							<a href="deletessss.php?roll=<?php echo $recid;?>" style="text-decoration:none;"><input type="button"id='button' class="button"name="button" value="Delete"></a>

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