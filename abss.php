<?php
include 'dbc.php';?>




<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php  $take=$row[1];


?><?php } ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<title><?php echo $school;?></title>
        <link rel="shortcut icon" href="pef.png"> 
	<style>
	table,td,tr{font-family:arial; font-size:12px;}
	</style>
	
<script src="jquery.min.js"></script>
<script src="jquery.preimage.js"></script>

<script>

$(document).ready(function()
{
	$('.file').preimage();
});

</script>

<style>
.prev_container{
	overflow: auto;
	width: 300px;
	height: 200px;
}

.prev_thumb{
	margin: 10px;
	height: 200px;
}
</style>
	</head>
	<body>
	<div style="float:left; width:700px; height:400px;">
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
	<script type="text/javascript">
$(function(){
   $('input[id^="name_"], input[id^="description_"], input[id^="notes_"]')
.bind('keyup', function(e) {
    var $this = $(this);
    var $tr = $this.closest("tr");
    var id = this.id.substring(0, this.id.indexOf("_"));
    
    if(e.keyCode == 38){
        $tr.prev().find('input[id^='+id+']').focus();
    }
    else if(e.keyCode == 40)
    {
       $tr.next().find("input[id^='"+id+"']").focus();
    }
	   else if(e.keyCode == 39)
    {
       $(".tab:focus").find("input[id^='"+id+"']").focus();
    }
	   else if(e.keyCode == 37)
    {
        $tr.prev().find('input[id^='+id+']').focus();
    }
}); 
});
 </script>
	


		 
<?php
$fish=$_GET["roll"];
$subject=$_POST["subject"];

$classes=$_POST["classes"];
$coef=$_POST["coef"];



	?>
<div style="float:left; width:400px;">
Welcome To Marks Registration Page

<div  style="float:left;width:990px; height:540px;">

<div  style="float:left;width:750px; height:540px; ">
	
	
	
<div  style="float:left;width:750px; height:30px; background:#336666;color:#fff;">

<div style="width:472px; float:left; height:25px; margin-left:10PX">
STUDENT NAMES</div>

<div style="width:80px; float:left; height:25px; margin-left:10PX">
Absences </div>

</div>

<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php $take=$row[1];



?>
		 
		 
<?php
$table = "marks";



$term=$_POST["term"];
if(empty($term)){
	
}elseif($term>="1"  && $term<="1" ){
	
	$col="sport2";
	
	
	
}elseif($term>="2"  && $term<="2" ){
	
	$col="sport3";
	
	
	
}elseif($term>="3"  && $term<="3" ){
	
	$col="sport4";
	
	
	
}






$i = 0;
if(!empty($_POST["submit"]))
{
	echo $col=$_POST["cog"];

 foreach($_POST["id"] as $roll)
 {

  
echo $bon="update marks  SET
               $col='".$_POST['c101'][$i]."'
			 
 where roll='$roll'
               "; mysql_query($bon);
  $i++;

               

  }

 

//echo "<script>alert('Datae Base Updated Successful!'); window.location.href('marks.php');</script>";


 //echo  $statusf="<meta http-equiv='refresh' content='0; url=abs.php'>"; 


 }






?>
<?php } ?>			<?php
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
	  
	  ?>	<?php
 $sql = "SELECT * FROM $table where form='$take' and last_name='$classes' and first_name>'' order by first_name  ASC";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $first_name_array[] = $row["first_name"];
 $matricule_array[] = $row["matricule"];
 $last_name_array[] = $row["last_name"];
 $form_array[] = $row["form"];
 $cols_array[] = $row["$col"];
 }
 echo "<form action='#' method='post'id='keydown'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $first_name = $first_name_array[$i];
 $matricule = $matricule_array[$i];
 $last_name = $last_name_array[$i];
 $form = $form_array[$i];
 $colf = $cols_array[$i];
?>
		
		
        <div style='float:left; width:862px; background:#f4f4f4; font-size:12px; color:#686868; font-family:arial; text-transform:UPPERCASE;  '>
		
		<div style="float:left;width: 20px; padding: 5px;">
			<?php 
			$count = $i;
			echo ++$count; 
			?>
		</div>
		
        <div style='float:left;width:300px; '>
		
		<input type='hidden' name='id[]' value='<?php echo $roll;?>'></div>
        <div style='float:left;width:280px; '>
	<?php echo	$first_name;?>
</div>
        <div style='float:left;width:200px; '>
	<?php echo	$matricule;?> 
 <input type='hidden' name='first_name[]' value='<?php echo	$first_name;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='classes[]' value='<?php echo $last_name;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
  </div>      <div style='float:left;width:80px; '>
  
 <input type='hidden' name='subject[]' value='<?php echo $subject;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 
 <input type='hidden' name='teacher[]' value='<?php echo $fish;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='form[]' value='<?php echo $take;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='text' name='c101[]' id='c101' value='<?php echo $colf;?>' size='8' style='BACKGROUND:#CCC;' maxlength='5'></div>
        <div style='float:left;width:70px; '>
		</div>
 <input type='hidden' name='cog' value='<?php echo $col;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='coef[]' value='<?php echo $coef;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='c103[]' value='' size='8' style='BACKGROUND:#CCC;' maxlength='2'>
 
 <input type='hidden' name='subjects' value='<?php echo $subject;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 
 <input type='hidden' name='terms' value='1' size='8' style='BACKGROUND:#CCC;' maxlength='2'>
 
 <input type='hidden' name='classess' value='<?php echo $last_name;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='db1s' value='<?php echo $take;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 
 <input type='hidden' name='coefs' value='<?php echo $coef;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 
 </DIV>
 <div style='float:left; width:932; border-bottom:1px solid #ccc;'></div><?php
 }
 
echo "<input type='submit' name='submit' value='Submit'></form>";
?>






  


</div>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	</div>
	
	
	</div>
	</body>
	</html>