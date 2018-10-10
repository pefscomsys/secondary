<?php

ini_set('max_execution_time', 300000); //300 seconds = 5 minutes

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
	
	
<script type="text/javascript" language="javascript"> 
<!--
// By Adam Khoury @ www.developphp.com
function validateMyForm ( ) { 
    var isValid = true;
    if ( document.form1.first_name.value == "" ) { 
	    alert ( "Please type Your Name" ); 
	    isValid = false;
    } else if ( document.form1.first_name.value.length < 1 ) { 
            alert ( "student  first_name, Middle name, Last name  must be Enter " ); 
            isValid = false;
    } 
	
	 else if ( document.form1.middle_name.value.length < 1 ) { 
            alert ( "student   Middle name  must be Enter " ); 
            isValid = false;
    } 
	
	 else if ( document.form1.last_name.value.length < 1 ) { 
            alert ( "student   Last name  must be Enter " ); 
            isValid = false;
    } 
	
		else if ( document.form1.sex.value == "" ) { 
            alert ( "Please select a Valid SEX for the student! from the options " ); 
            isValid = false;
    } 
	
	
	
	
	else if ( document.form1.addr1.value.length < 1 ) { 
            alert ( "student  address must be set  " ); 
            isValid = false;
    }
	else if ( document.form1.form.value.length < 1 ) { 
            alert ( "student  first_name, Middle name, Last name  must be Enter " ); 
            isValid = false;
    }
	
	
	
	else if ( document.form1.expected_amount.value == "" ) { 
            alert ( "Please Enter Amount paid" ); 
            isValid = false;
    }
	
	
	else if ( document.form1.amount_paid.value == "" ) { 
            alert ( "Please Enter Amount paid" ); 
            isValid = false;
    }
	

	
	else if ( document.form1.file.value == "" ) { 
            alert ( "Please insert Photo" ); 
            isValid = false;
    }
    return isValid;
}
//-->
</script>
<script type="text/javascript">
function doCalc(form) {
  form.balance.value = parseInt(form.expected_amount.value) - parseInt(form.amount_paid.value);
}
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
Sq </div>

<div style="width:100px; float:left; height:25px; margin-left:10PX">
EXAM</div>
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
$takess=$_POST["gf"];
$clasf=$_POST["clasf"];
$table = "marks";
$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["id"] as $roll)
 {
	
  
  
  mysql_query("update marks SET
               teachercivic='".$_POST['c103'][$i]."',
			   
               english2='".$_POST['name11'][$i]."',

               total3='".$_POST['c101'][$i]."',
			   
               remarks='".$_POST['c102'][$i]."',
        
              last_name='".$_POST['classes'][$i]."',
			  
              teacherenglit='".$_POST['xv'][$i]."',
			   teacherhecon='".$_POST['name11s'][$i]."'

               where  first_name='" . $_POST['first_name'][$i] . "' 
               ");
			   
  $i++;

               

 }

echo "<script>alert('Datae Base Updated Successful!'); window.location.href('marks.php');</script>";

 echo  $statusf="<meta http-equiv='refresh' content='0; url=rankf3.php?roll=$clasf&term=3&year=$takess'>";  }
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
 $sql = "SELECT * FROM $table where form='$take' and last_name='$classes' order by first_name  ASC";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $first_name_array[] =mysql_escape_string($row["first_name"]);
 $matricule_array[] = $row["matricule"];
 $last_name_array[] = $row["last_name"];
 $form_array[] = $row["form"];
  $teachersport_array[] = $row["teachersport"];
 $teacherreligion_array[] = $row["teacherreligion"];
 
 $teachercivic_array[] = $row["teachercivic"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $first_name = $first_name_array[$i];
 $matricule = $matricule_array[$i];
 $last_name = $last_name_array[$i];
 $form = $form_array[$i];

 
 $teachercivic = $teachercivic_array[$i];
 $teachersport = $teachersport_array[$i];
 $teacherreligion = $teacherreligion_array[$i];
 
$t1term= $teachersport;

$t2term=$teachercivic;

 $t3term=$teacherreligion;
 if(empty($t1term)){
 $t1term="";
 $statusft1term="0";
}
elseif($t1term>=0.001 && $t1term<=20){
 $statusft1term="1";
}

if(empty($t2term)){
$t2term="";
 $statusft2term="0";
}
elseif($t2term>=0.001 && $t2term<=20){
 $statusft2term="1";
}
if(empty($t3term)){
$t3term="";
 $statusft3term="0";
}
elseif($t3term>=0.001 && $t3term<=20){
 $statusft3term="1";
}


$tannuals=$t3term+$t2term+$t1term;

//** MANIPULATE TO GET THE number of times to divide the annual average
//if all first term marks are empty. then divide by 2.
//if all second term marks are emtpty then divide by 1.

$start = 3;

//check the student's first term marks.
$query = "SELECT * FROM `resit` WHERE `c105` = '1' and `first_name` = '$first_name' AND (`c101`<>'' OR `c102` <> '') ";
$link = mysql_query($query);

//if the result is zero then divide by 2
if(mysql_num_rows($link) == 0)
{
	//subtract the number of times to divide
	--$start;
}


//now do same for second term
//check the student's first term marks.
$query = "SELECT * FROM `resit` WHERE `c105` = '2' and `first_name` = '$first_name' AND (`c101`<>'' OR `c102` <> '') ";
$link = mysql_query($query);

//if the result is zero then divide by 2
if(mysql_num_rows($link) == 0)
{
	//subtract the number of times to divide
	--$start;
}


//for third term we assume u have a mark
$tdivide=$start;

 
 
?>
        <div style='float:left; width:932px; background:#f4f4f4; font-size:12px; color:#686868; font-family:arial; text-transform:UPPERCASE;  '>
        <div style='float:left;width:300px; '>
		
		<input type='hidden' name='id[]' value='<?php echo $roll;?>'>
       
		<?php echo $first_name;?>
</div>
        <div style='float:left;width:20px; '>
<?php echo $matricule;?> 
 <input type='hidden' name='first_name[]' value="<?php echo $first_name;?>" size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='classes[]' value="<?php echo $classes;?>" size='8' style='BACKGROUND:#CCC;' maxlength='4'>
  <input type='hidden' name='clasf' value='<?php echo $classes;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='gf' value='<?php echo $take;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
    </div>    
  <div style='float:left;width:80px; '>
  
 <input type='hidden' name='subject[]' value='<?php echo $subject;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='coef[]' value='<?php echo $coef;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='teacher[]' value='<?php echo $fish;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='form[]' value='<?php echo $take;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='text' name='c101[]' value='<?php

 
$qry = mysql_query("select sum(((c101+c102)/2)*coef) as total
from resit where first_name='$first_name' and classes='$classes' and form='$take' and c105='3'  "); 
$row = mysql_fetch_assoc($qry); 
echo $save=$row['total']; 
 
 ?>' size='8' style='BACKGROUND:#CCC;' ></div>
        <div style='float:left;width:70px; '>
		<?php
		  "select sum(((c101+c102)/2)*coef) as total
from resit where first_name='$first_name' and classes='$classes' and form='$take' and c105='3'  "
; ?>
		
 <input type='hidden' name='c105[]' value='3' size='8' style='BACKGROUND:#CCC;' maxlength='2'>
 <input type='text' name='c102[]' value='<?php
 
$qry = mysql_query("select sum(coef) as total
from resit where first_name='$first_name' and classes='$classes' and form='$take' and (c101>'' || c102>'') and c105='3'  "); 
$row = mysql_fetch_assoc($qry); 
echo $saves=$row['total']; 
 
 ?>' size='8' style='BACKGROUND:#CCC;' maxlength='2'></div>
 
  <div style='float:left;width:70px; '>
		<?php
 
$qry = mysql_query("select sum(coef) as total
from resit where first_name='$first_name' and classes='$classes' and form='$take' and (c101>'' || c102>'') and c105='3'  "); 
$row = mysql_fetch_assoc($qry); 
 $savess=$row['total']; 
 
 ?>
 <input type='text' name='c103[]' value='<?php 
 
 $mxc11=$saves;
if(empty($mxc11)){$status="0";}
elseif($mxc11>'' ){
$status=$save/$saves;
 }
 elseif($mxc11="" ){
$status="0";
 }
 echo $status; 
 
 ?>' size='8' style='BACKGROUND:#CCC;' maxlength='2'>
 
 
 
 
 
 
 
 
 
 
 
 
 
  
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 </div>

 
 <input type='hidden' name='name1' value="<?php echo $first_name;?>" size='8' style='BACKGROUND:#CCC;' maxlength='2'>
 
 <input type='hidden' name='name11[]' value='<?php printf("%01.0f", ($status*100));?>' size='8' style='BACKGROUND:#CCC;' maxlength='2'>
 
  
 
 
 
 
 
 <div style='float:left; width:70px; border-bottom:1px solid #ccc;'>
 <input type='text' name='name11s[]' value='<?php $sstannual=($tannuals/$tdivide);
printf("%01.0f" ,$sstannual*100);?>' size='8' style='BACKGROUND:#CCC;' >
 

 <input type='hidden' name='xv[]' value='<?php $sstannual=($tannuals/$tdivide);
printf("%01.2f" ,$sstannual);?>' size='8' style='BACKGROUND:#CCC;' >
 </div>
 <div style='float:left; width:932; border-bottom:1px solid #ccc;'></div><?php
 }
 
echo "<input type='submit' name='submit' value='Submit'></form>";
?>






  


</div>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	</div>
	
	
	</div>
	</body>
	</html>