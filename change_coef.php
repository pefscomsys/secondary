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
//change the coefficient here.
if(isset($_POST['year']))
{
	
	//get all the values.
	$subject = $_POST['subject'];
	$year = $_POST['year'];
	$new_coef = $_POST['coef'];
	$class = $_POST['class'];
	
	//now change the coeffieicnt
	$qq = "UPDATE `resit` SET `coef` = '$new_coef' 
			WHERE
			`subject` = '$subject' AND
			`form` = '$year' AND
			`classes` = '$class' 
			";
	$ress = mysql_query($qq);
	
	//get the subject name
	$q = "SELECT `subject` from `subject` WHERE `roll` = '$subject'";
	$res = mysql_query($q);
	
	while($r = mysql_fetch_array($res))
	{
		$sub = $r['subject'];
	}
	
	
	$success = "Coefficient Change to $new_coef for subject: $sub";
}


$fish=$_POST["teacher"];
$_GET["roll"]=$fish;

//get the values and change the cofficient


	  ?>
<div style="float:left; width:400px;">

	<h3>
		Change Subject Coefficent
	</h3>
	
	<?php
	if(isset($success))
	{
		?>
	<h4 style="color: green; padding: 10px; ">
		<?php echo $success; ?>
	</h4>
		<?php
	}
	?>
<br>
 <?php echo $fish;?>

<div  style="float:left;width:990px; height:540px;background:#ccc;">

<div  style="float:left;width:550px; height:540px; ">
<fieldset id="el02" style="width:480px;">
<legend >Select Your Class here</legend>
<input type="hidden" name="note" value="<?php echo $note;?>">

<form name="form1" action="" method="post" >

     <table style="" cellpadding="3px"  cellspacing="0px" align="left" width="550px"style="text-transform:uppercase;">
	 <tr>
      <td style="text-transform:uppercase;"style="background:#ccc;width:150px;">Subject (Course)</td
	  ><td>

<select name="subject"style="background:#ccc;">
<?php
$rs=mysql_query("Select * from subject order by  subject",$link);
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[0]' selected>$row[2]</option>";
}
else
{
echo "<option value='$row[0]'>$row[2]</option>";
}
}
?></select></td></tr>
  
   <tr><td>

	  <tr>
      <td style="text-transform:uppercase;"style="background:#ccc;width:150px;">Select Class/Division</td
	  ><td>

<select name="class"style="background:#ccc;">
<?php
$rs=mysql_query("Select * from classes order by  class",$link);
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[1]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[1]'>$row[1]</option>";
}
}
?></select></td></tr>


<tr>
<td>SELECT YOUR NEW COEF</td><td><select name="coef" class="required" id="select8"style="background:#ccc;">
               
                <option value=""></option>
                <option value="1">1</option>
 <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
 
 
 
 
 
 
 </select>
 </td>
 </TR>
 
 <tr>
<td>Select Year</td><td>
<select name="year" class="required" style="background:#ccc;">
               
                
 <?php
	//get the list of years.
	
	$q = "SELECT * FROM `marks` GROUP BY `form`";
	$res = mysql_query($q);
	
	while($row = mysql_fetch_array($res))
	{
		?>
	<option value="<?php echo $row['form']; ?>">
		<?php echo $row['form']; ?>
	</option>
		<?php
	}
 ?>
 
 </select>
 
 
 </td>
 </TR>


   <tr><td>

	</fieldset>
	
<input name="button" type="submit" value="change" />
</td></tr>
 </table>
	
	
	
	
	</div>
	
	
	</div>
	</body>
	</html>