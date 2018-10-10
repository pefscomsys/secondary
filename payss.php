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


  
  mysql_query("update money SET
			   

               fullcontent='".$_POST['fullcontent'][$i]."',
               heads='".$_POST['heads'][$i]."',
               matricule='".$_POST['matricule'][$i]."',
			   
			   
               rates='".$_POST['rates'][$i]."'
               where  roll='$recid'");
  $i++;

               
 
  }

 

echo "<script>alert('Datae Base Updated Successful!'); </script>";














 }
?>
<form method="post" action="PAYSS.php">
<div id="form" style="width: 1300px; border:0px;">
    <div class="w2ui-page page-0"  style="width: 800px; ">
        <div style=" margin-right: 0px;">
            <div style="padding: 3px; font-weight: bold; color: #777;">Create Menu Item for Payslips</div>
            

<?php
 $sql = "SELECT * FROM money order by roll  ASC";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 
 $fullcontent_array[] = $row["fullcontent"];
 $rates_array[] = $row["rates"];
 
 
 $matricule_array[] = $row["matricule"];
 $heads_array[] = $row["heads"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $heads = $heads_array[$i];
 $rates = $rates_array[$i]; $matricule = $matricule_array[$i];
 $fullcontent = $fullcontent_array[$i];
 ?>


		<input type='hidden' name='id[]' value='<?php echo $roll;?>'>
				 <div class="w2ui-field w2ui-span4">
                    <label>Activity <?php echo $roll;?>:</label>
                    <div>
					
                        <input name='heads[]' type="text" maxlength="100" value="<?php echo $heads;?>"style="width:10%"placeholder="#">
                        <input name='fullcontent[]' type="text" maxlength="100" value="<?php echo $fullcontent;?>"style="width:30%"placeholder="Description">
                        <input name='rates[]' type="text" maxlength="100" value="<?php echo $rates;?>"style="width:10%"placeholder="Rates">
				
						
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
            { field: 'fullcontent', type: 'text' }
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