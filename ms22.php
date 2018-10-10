<?php
include 'dbc.php';?>




<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
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
	<script>
	
	function myFunction(){
	var x, text;
	x=document.getElementByid("numb").value;
	if(isNaN(x)|| x<1||x>20){
	text="input not valid";
	
	}else{
	text="Input OK";
	}
	
	document.getElementByid("demo").innerHTML=text;
	}
	
	
	</script>
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
Sq3 </div>

<div style="width:100px; float:left; height:25px; margin-left:10PX">
SQ4</div>
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




$subjects=$_POST["subjects"];
$classess=$_POST["classess"];
$db1s=$_POST["db1s"];
$coefs=$_POST["coefs"];$terms=$_POST["terms"];




$qry = mysql_query("select  department as total
from subject2 where db1='$db1s' and subject='$subjects' and department='$classess' and year1='$coefs' and  year2='2'"); 
$row = mysql_fetch_assoc($qry); 
 $cv=$row['total'];


 $mxc11UIS=$cv;
if(empty($mxc11UIS)){

$query44="insert into subject2  set  
db1='$db1s',subject='$subjects',department='$classess',year1='$coefs', year2='$terms'";


mysql_query ($query44) or die ('could not updated:'.mysql_error());



 
 
 
 
 }
elseif($mxc11UIS>'' ){

$query44="update subject2  set  
db1='$db1s',department='$classess',year1='$coefs', year2='$terms' where subject='$subjects' ";


mysql_query ($query44) or die ('could not updated:'.mysql_error());



 
 
}

$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["id"] as $roll)
 {

  
  mysql_query("insert into resit SET
               subject='".$_POST['subject'][$i]."',
			   

               classes='".$_POST['classes'][$i]."',
               first_name='".$_POST['first_name'][$i]."',
               form='".$_POST['form'][$i]."',
               coef='".$_POST['coef'][$i]."',
               teacher='".$_POST['teacher'][$i]."',
               c101='".$_POST['c101'][$i]."',
			   
               c105='".$_POST['c105'][$i]."',
               c104='".$_POST['c104'][$i]."',
                 c103='".$_POST['c103'][$i]."',
               c102='".$_POST['c102'][$i]."'
               ");
  $i++;

               

  }
 
 

echo "<script>alert('Datae Base Updated Successful!'); window.location.href('marks.php');</script>";

 echo  $statusf="<meta http-equiv='refresh' content='0; url=st2.php'>"; 

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

?>
        <div style='float:left; width:732; background:#f4f4f4; font-size:12px; color:#686868; font-family:arial; text-transform:UPPERCASE;  '>
        <div style='float:left;width:300px; '>
		
		<input type='hidden' name='id[]' value='$roll'></div>
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
 <input type='text'id="numb[]" name='c101[]' value='' size='8' style='BACKGROUND:#CCC;' maxlength='2'></div>
        <div style='float:left;width:70px; '>
		
 <input type='hidden' name='c105[]' value='2' size='8' style='BACKGROUND:#CCC;' maxlength='2'>
 <input type='text' id="numb" name='c102[]' value='' size='8' style='BACKGROUND:#CCC;' maxlength='2'></div>
 <input type='hidden' name='coef[]' value='<?php echo $coef;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='c103[]' value='' size='8' style='BACKGROUND:#CCC;' maxlength='2'>
 
 <input type='hidden' name='subjects' value='<?php echo $subject;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 
 <input type='hidden' name='terms' value='2' size='8' style='BACKGROUND:#CCC;' maxlength='2'>
 
 <input type='hidden' name='classess' value='<?php echo $last_name;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='db1s' value='<?php echo $take;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 
 <input type='hidden' name='coefs' value='<?php echo $coef;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 
 <p id="demo"></p>
 </DIV><script>
	
	function myFunction(){
	var x, text;
	x=document.getElementByid("numb").value;
	if(isNaN(x)|| x<1||x>20){
	text="input not valid";
	
	}else{
	text="Input OK";
	}
	
	document.getElementByid("demo").innerHTML=text;
	}
	
	
	</script>
 <div style='float:left; width:932; border-bottom:1px solid #ccc;'></div><?php
 }
 
echo "<input type='submit' onclick='myFunction()' name='submit' value='Submit'></form>";
?>






  


</div>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	</div>
	
	
	</div>
	</body>
	</html>