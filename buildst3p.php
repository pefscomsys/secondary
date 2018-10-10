<?php include 
'dbc.php'
;




?>
<?php
$rollsx=$_GET["roll"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $take=$row[1];


?>
	<?php } ?>
	
	<div style="float:left; width:700px; height:auto;
">

Build Result Slip for <?php echo $rollsx;?><?php echo $rollsxs;?>
</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
<div style="float:left; width:700px; height:auto;
">

<div style="float:left; width:100px; height:25px;background:#336666;color:#fff;
">

Course Code

</div>

<div style="float:left; width:100px; height:25px;background:#336666;color:#fff;">


Course Ca

</div><div style="float:left; width:100px; height:25px;background:#336666;color:#fff;">


Course Exam

</div><div style="float:left; width:100px; height:25px;background:#336666;color:#fff;">


Coefficient

</div>
<div style="float:left; width:100px; height:25px;background:#336666;color:#fff;">

Teacher

</div>
<div style="float:left; width:100px; height:25px;background:#336666;color:#fff;">


Semester!

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
<form method="POST" action="buildst3p.php?roll<?php echo $rollsx;?>">

<div style="float:left; width:700px; height:28px;margin-top:2px;
">



	  


<input type="hidden" name="id[]" value="1" size="8">
<input type="hidden" name="form[]" value="<?php echo $take;?>" size="8">

<input type="hidden" name="first_name[]" value="<?php echo $rollsx;?>" size="8">



<div style="float:left; width:100px; height:25px;">

<input type="text" name="subject[]" value="" placeholder='subject'size="8">

</div>

<div style="float:left; width:100px; height:25px;
">
<input type="text" name="c101[]" value="" placeholder='test' size="8">

</div>
<div style="float:left; width:100px; height:25px;
">
<input type="text" name="c102[]" value="" placeholder='exam'size="8">

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

 
echo "<input type='submit' name='submit' value='Submit'></form>";
?>
</div>
</form>


</form>


</div>

</DIV>


</div>

</body>
</html>
