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


	
	 $qry = mysql_query("select subject as total
from subject2 where subject='$subject'  and year2='2'  "); 
$row = mysql_fetch_assoc($qry); 
$comks=$row['total'];
$mxc10=$comks;

if(empty($mxc10)){


$query44="insert into subject2  set  
db1='$take',subject='$subject',department='$classes',year1='$coef', year2='2'";



mysql_query ($query44) or die ('could not updated:'.mysql_error());

}
elseif($mxc10>''){

$query44="update subject2  set  
department='$classes' where  year2='2' and subject='$subject'";



mysql_query ($query44) or die ('could not updated:'.mysql_error());

}

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
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php $take=$row[1];



?>
		 
		 
<?php
$table = "marks";
$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["id"] as $roll)
 {


  
  mysql_query("insert into subject2 SET
			   
               db1='".$_POST['db1'][$i]."',

               subject='".$_POST['subject'][$i]."',

               department='".$_POST['department'][$i]."',
               year1='".$_POST['year1'][$i]."'
               ");
  $i++;

               

  }
 }
 

echo "<script>alert('Datae Base Updated Successful!'); window.location.href('marks.php');</script>";
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
 $sql = "SELECT * FROM subject";
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
        <div style='float:left; width:800; background:#f4f4f4; font-size:12px; color:#686868; font-family:arial; text-transform:UPPERCASE;  '>
        <div style='float:left;width:100px; '>
		
		<input type='text' name='id[]' value='<?php echo $roll;?>'></div>
       

        <div style='float:left;width:300px; '>

 <input type='hidden' name='subject[]' value='<?php echo $roll;?>' size='25' style='BACKGROUND:#CCC;'>
 <input type='text' name='subjects[]' value='<?php echo $subject;?>' size='25' style='BACKGROUND:#CCC;' >
  </div>      <div style='float:left;width:200px; '>

 <input type='text' name='department[]' value='' size='25' style='BACKGROUND:#CCC;'>
 </div>
        <div style='float:left;width:70px; '>
		
 <input type='text' name='year1[]' value='term' size='8' style='BACKGROUND:#CCC;'>

 </DIV>
        <div style='float:left;width:70px; '>
		
 <input type='text' name='db1[]'  value="<?php echo $take;?>"size='8' style='BACKGROUND:#CCC;' >

 </DIV>


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