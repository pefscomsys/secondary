<?php include 
'dbcs.php'
;




?>
<?php
$rollsx=$_GET["roll"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $take=$row[1];


?>
	<?php } ?>
	
	<div style="float:left; width:700px; height:auto;
">

Build Result Slip for <?php echo $rollsx;?>
</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
<div style="float:left; width:700px; height:auto;
">

<div style="float:left; width:200px; height:25px;background:#336666;color:#fff;
">

Course Name

</div>

<div style="float:left; width:100px; height:25px;background:#336666;color:#fff;">


SQ1

</div><div style="float:left; width:100px; height:25px;background:#336666;color:#fff;">


SQ2

</div><div style="float:left; width:100px; height:25px;background:#336666;color:#fff;">


Ceofficient

</div><div style="float:left; width:100px; height:25px;background:#336666;color:#fff;">


Teacher

</div>
<div style="float:left; width:100px; height:25px;background:#336666;color:#fff;">


Term

</div>
</div>
<?PHP
$table = "marks";
$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["id"] as $roll)
 {


  
  
  mysql_query("insert into resit SET
              
               first_name='".$_POST['first_name'][$i]."',
               
               classes='".$_POST['classes'][$i]."',
               subject='".$_POST['subject'][$i]."',
                 
				    teacher='".$_POST['teacher'][$i]."',
				    form='".$_POST['form'][$i]."',
				    coef='".$_POST['coef'][$i]."',
               c105='".$_POST['c105'][$i]."',
               c101='".$_POST['c101'][$i]."',
			   
               c102='".$_POST['c102'][$i]."'
			   
               ");
  $i++;

             

}
 

echo "<script>alert('Data Base Updated Successful!'); window.location.href('marks.php');</script>";

 echo $statusftydate="<meta http-equiv='refresh' content='0; url=st3build.php'>";
 }
?>		<?php
	  /******************** ERROR MESSAGES*************************************************
	  This code is to show error messages 
	  **************************************************************************/
	  if(!empty($err))  {
	   echo "<div class=\"msg\" style='text-decoration:blink;color:red;'>";
	  foreach ($err as $e) {
	    echo "$e <br>";
	    }
	  echo "</div>";	
	   }
	  /******************************* END ********************************/	  
	  
	  ?>
<?php

 $sql = "SELECT * FROM  subject where extra='0'  order by roll ASC";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $subject_array[] = $row["subject"];
 
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $subject = $subject_array[$i];
?>



<div style="float:left; width:700px; height:28px;margin-top:2px;
">










	  


<input type="hidden" name="id[]" value="<?php echo $roll;?>" size="8">
<input type="hidden" name="form[]" value="<?php echo $take;?>" size="8">

<input type="hidden" name="first_name[]" value="<?php echo $rollsx;?>" size="8">




<div style="float:left; width:700px; height:28px;
">
<div style="float:left; width:40px; height:25px;
">
<input type="TEXT" name="subject[]" value="<?php echo $roll;?>" size="3">
</DIV>
<div style="float:left; width:160px; height:25px;
"><?php echo $subject;?>

</div>













<div style="float:left; width:100px; height:25px;
">
<input type="text" name="c101[]" value="" size="8">

</div>
<div style="float:left; width:100px; height:25px;
">
<input type="text" name="c102[]" value="" size="8">

</div>


<div style="float:left; width:100px; height:25px;
">
<input type="text" name="coef[]" value="" placeholder='coeff' size="8">

</div><div style="float:left; width:100px; height:25px;
">
<input type="text" name="teacher[]" value="" placeholder='Teacher' size="8" maxlength='7' >

</div>
<div style="float:left; width:50px; height:25px;
">
<input type="text" name="c105[]" value="" size="8">

	
<input type="hidden" name="classes[]" value="<?php 
$qry = mysql_query("select last_name as total
from marks where first_name='$rollsx' and form='$take'  "); 
$row = mysql_fetch_assoc($qry); 
	echo $saves=$row['total']; ?>" size="8">
</div></div>
<div style="float:left; width:700px; height:25px;
"><?php
}
 
echo "<input type='submit' name='submit' value='Submit'></form>";
?>
</div>
</form>


</div>

</DIV>


</div>

</body>
</html>
