<?php
include 'dbc.php';?>


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
    if ( document.form1.subjectname.value == "" ) { 
	    alert ( "please Enter  Student subject name" ); 
	    isValid = false;
    } else if ( document.form1.subjectname.value.length < 1 ) { 
            alert ( "please Enter  subject name  must be Enter " ); 
            isValid = false;
    } 
	
	 else if ( document.form1.subject.value.length < 1 ) { 
            alert ( "please Enter   subject Code  must be Enter " ); 
            isValid = false;
    } 
	
	 else if ( document.form1.credit.value.length < 0 ) { 
            alert ( "please  credit  must be Enter " ); 
            isValid = false;
    } 
	
		else if ( document.status.value == "" ) { 
            alert ( "Please status must be enter " ); 
            isValid = false;
    } 
	
	
	
//-->
</script>
<script type="text/javascript">
function doCalc(form) {
  form.balance.value = parseInt(form.expected_amount.value) - parseInt(form.amount_paid.value);
}
</script>

		 
<?php
	  /******************** ERROR MESSAGES*************************************************
	  This code is to show error messages 
	  **************************************************************************/
	  if(!empty($err))  {
	   echo "<div class=\"msg\" style='text-decoration:blink;'>";
	  foreach ($err as $e) {
	    echo "$e <br>";
	    }
	  echo "</div>";	
	   }
	  /******************************* END ********************************/	  
	  
	  ?>
<div style="float:left; width:400px;">
<?php $note=$_SESSION['user_name'];











{
$db1 = $_POST ['subjectname'];
$department = $_POST ['department'];
$subject = $_POST ['subject'];
$credit = $_POST ['credit'];
$status = $_POST ['status'];

$year1s = $_POST ['year1s'];
$year1 = $_POST ['year1'];
$year2 = $_POST ['year2'];
$levels = $_POST ['levels'];
$year1=$levels;


 

if(empty($newpost)){

 $statusbbnewpost="";
}elseif($newpost<=10){

 $statusbbnewpost="1";
}elseif($newpost>10 && $newpost<=20 ){

 $statusbbnewpost="2";
}

if($subject!="")
{

$rs_duplicate = mysql_query("select count(*) as total from subject2 where 
db1='pefscom' and subject='$subject'  ") or die(mysql_error());
list($total) = mysql_fetch_row($rs_duplicate);

if ($total > 0)
{
$err[] = "ERROR - The Subject has been recorded! Try with another subject Thank You! .";
//header("Location: finances.php?msg=$err");
//exit();
}


if(empty($err)) {
$query1="insert into subject set  
db1='pefscom',department='$department',subject='$subject',

year1='$year1s',year2='$year2',extra='$newpost'


";

mysql_query ($query1) or die ('could not updated:'.mysql_error());
echo "<script>alert('Course Created Successfully!'); window.location.href('courses.php');</script>";
 
}
}
}
?>


	<?php
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
<fieldset id="el02" style="float:left; width:550px;">
<legend >ADD SUBJECTS TO REPORT CARD ENTER ONLY ONCE</legend>
<input type="hidden" name="note" value="<?php echo $note;?>">

<form name="form1" action="courses.php" method="post" enctype="multipart/form-data" >
<table style="" cellpadding="3px"  cellspacing="0px" align="left" width="450px"style="text-transform:uppercase;">
  <tr>
<tr>
     <td>
</td>
    </tr>
	<tr>
      <td style="text-transform:uppercase;">Subject Name:</td> <td style="text-transform:uppercase;">
	  <input type="text" name="subject" class="bigLetter" size="18" onKeyUp="convertToUppercase(this)" value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    
      </tr> <tr>
     <td style="text-transform:uppercase;">Coef.</td> <td style="text-transform:uppercase;"><select name="year2" class="required" id="select8"style="background:#ccc;">
               
                <option value="">--select--</option>
                <option value="1">1</option>
 <option value="2">2</option>
              <option value="3">3</option>
 <option value="4">4</option>           <option value="5">5</option>
 <option value="6">6</option>
 
 </select>  
      </tr>
   <tr>
     <td style="text-transform:uppercase;">Section</td> <td style="text-transform:uppercase;">
	 <select name="year1s" class="required" id="select8"style="background:#ccc;" required='required'>
               
                <option value="">--select--</option>
                <option value="1">English</option>

                <option value="2">French</option>
				
				
 </select>  
      </tr>
	<tr><td style="text-transform:uppercase;">

<input name="button" type="submit" value="Submit Information" onClick="javascript:return validateMyForm();self.close();"/>
</td></tr>
 </table>
	
	
	
	
	
	
	
	</div>
	
	  
	  
	
	</div>
	
	
	
	
	</div>
	
	
	</body>
	</html>