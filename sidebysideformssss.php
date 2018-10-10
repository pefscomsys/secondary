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
 foreach($_POST["id"] as $recid)
 {


  
  mysql_query("update allowance SET
			   

               matricule='".$_POST['matricule'][$i]."',
               benefit='".$_POST['benefit'][$i]."',
               reason='".$_POST['reason'][$i]."',
               days='".$_POST['days'][$i]."'
               where  recid='$recid'");
  $i++;

               
 
  }

 

echo "<script>alert('Datae Base Updated Successful!'); </script>";
 }
?>
<form method="post" action="sidebysideformssss.php">
<div id="form" style="width: 1300px; border:0px;">
    <div class="w2ui-page page-0">
        <div style="width: 580px; float: left; margin-right: 0px;">
            <div style="padding: 3px; font-weight: bold; color: #777;">Categories / Salaries </div>
            

<?php
 $sql = "SELECT * FROM allowance where extra='$nki' order by recid ASC";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["recid"]; $benefit_array[] = $row["benefit"];$reason_array[] = $row["reason"];
 $matricule_array[] = $row["matricule"];
 $froms_array[] = $row["froms"];
 $days_array[] = $row["days"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $recid = $id_array[$i];  $reason = $reason_array[$i];
  $benefit = $benefit_array[$i];
  $matricule = $matricule_array[$i];
 $froms = $froms_array[$i];
 
 $days = $days_array[$i];
 ?>

		<input type='hidden' name='id[]' value='<?php echo $recid;?>'>
				 <div class="w2ui-field w2ui-span4">
                    <label style="width:170px;">Allowances/ Benefit <?php echo $recid;?>:</label>
                    <div>
					
                        <input name='matricule[]' type="text" maxlength="100" value="<?php echo $matricule;?>"style="width:20%"placeholder="matricule">
						
                        <input name='reason[]' type="text" maxlength="100" value="<?php echo $reason;?>"style="width:20%"placeholder="reason">
                        <input name='benefit[]' type="text" maxlength="100" value="<?php echo $benefit;?>"style="width:15%"placeholder="benefit">
                        <input name='days[]' type="text" maxlength="100" value="<?php echo $days;?>"style="width:5%"placeholder="Hours/Days">
						
							<a href="deletess.php?roll=<?php echo $recid;?>" style="text-decoration:none;"><input type="button"id='button' class="button"name="button" value="Delete"></a>

						
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