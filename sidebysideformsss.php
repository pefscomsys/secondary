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


  
  mysql_query("update salary SET
			   

               cats='".$_POST['cats'][$i]."',
               days='".$_POST['days'][$i]."',
               salry='".$_POST['salry'][$i]."',
               echech='".$_POST['echech'][$i]."'
               where  recid='$recid'");
  $i++;

               
 
  }

 

echo "<script>alert('Datae Base Updated Successful!'); </script>";
 }
?>
<form method="post" action="sidebysideformsss.php">
<div id="form" style="width: 1300px; border:0px;">
    <div class="w2ui-page page-0">
        <div style="width: 580px; float: left; margin-right: 0px;">
            <div style="padding: 3px; font-weight: bold; color: #777;">Categories / Salaries </div>
            

<?php
 $sql = "SELECT * FROM salary where extra='$nki' order by recid ASC";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["recid"]; $days_array[] = $row["days"];$salry_array[] = $row["salry"];
 $cats_array[] = $row["cats"];
 $froms_array[] = $row["froms"];
 $echech_array[] = $row["echech"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $recid = $id_array[$i];  $salry = $salry_array[$i];
  $days = $days_array[$i];
  $cats = $cats_array[$i];
 $froms = $froms_array[$i];
 
 $echech = $echech_array[$i];
 ?>

		<input type='hidden' name='id[]' value='<?php echo $recid;?>'>
				 <div class="w2ui-field w2ui-span4">
                    <label>Category <?php echo $recid;?>:</label>
                    <div>
					
                        <input name='cats[]' type="text" maxlength="100" value="<?php echo $cats;?>"style="width:10%"placeholder="Category">
						
                        <input name='salry[]' type="text" maxlength="100" value="<?php echo $salry;?>"style="width:20%"placeholder="Salary">
                        <input name='days[]' type="text" maxlength="100" value="<?php echo $days;?>"style="width:10%"placeholder="Day">
						
						
						
                        <input name='echech[]' type="text" value="<?php echo $echech;


?>" maxlength="100" style="width:10%" placeholder="Echec">
								<a href="deletesss.php?roll=<?php echo $recid;?>" style="text-decoration:none;"><input type="button"id='button' class="button"name="button" value="Delete"></a>

					
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