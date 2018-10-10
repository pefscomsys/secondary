<?php 
include 'dbc.php';
page_protect();
$mats=$_GET['roll'];



if(@$_SESSION['userlevel']!=(111)){header("location: login.php?error=Unauthorized access");}

 $notes=$_SESSION['user_name'];
?>
<?php
$roll=$_GET["1"];
$query="select * from chooses where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $mms=$row[1];


?><?php } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Addmission Form</title>



 <script language="JavaScript">
function disableEnterKey(e)
{
     var key;

     if(window.event)
          key = window.event.keyCode;     //IE
     else
          key = e.which;     //firefox

     if(key == 13)
          return false;
     else
          return true;
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
body{background:blue;}
.prev_container{
	overflow: auto;
	width: 300px;
	height: 135px;
}

.prev_thumb{
	margin: 10px;
	height: 100px;
}
</style>
<style>
div.fileinputs {
	position: relative;
}

div.fakefile {
	position: absolute;
	top: 0px;
	left: 0px;
	z-index: 1;
}

table,td{border:1px solid #ccc; color:#000;
font-size:12px;
}

input {
	top: 0px;
	left: 0px;
	padding: 2px 2px 2px 5px  #CCC;
}
body{background:#f4f4f4;}
.prev_container{
	overflow: auto;
	width: 300px;
	height: 135px;
}

.prev_thumb{
	margin: 10px;
	height: 100px;
}
</style>



</head>















 <body bgcolor="blue">


<div style="width:700px; height:400px;">









<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php  $take=$row[1];


?><?php } 



$rollspm = $_POST ['rollspm'];


$fname = $_POST ['fname'];
$colors = $_POST ['colors'];

$acc = $_POST ['acc'];

$matricule = $_POST ['matricule'];

$levels = $_POST ['levels'];
$department = $_POST ['department'];

$codes= $_POST ['codes'];
$applied = $_POST ['applied'];



if($applied!="")
{
$query1="update election set  
matricule='$matricule'
,
fname='$fname',department='$department',extra='$acc',
levels='$levels',position='$applied',colors='$colors'

where roll='$rollspm'
";


mysql_query ($query1) or die ('could not updated:'.mysql_error());



echo "<script>alert('Candidate update Successful!'); </script>";

 echo "<meta http-equiv='refresh' content='0; url=elecc.php'>";
}
















?>





<?php
$roll=$_GET["roll"];
$query="select * from election where matricule='$mats'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php
	  /******************** ERROR MESSAGES*************************************************
	  This code is to show error messages 
	  **************************************************************************/
	  if(!empty($err))  {
	   echo "<div class=\"msg\">";
	  foreach ($err as $e) {
	    echo "$e <br>";
	    }
	  echo "</div>";	
	   }
	  /******************************* END ********************************/	  
	  ?><br><br><br>
<div style="margin-left:-70px;">

<script type="text/javascript" language="javascript"> 
<!--
// By Adam Khoury @ www.developphp.com
function validateMyForm ( ) { 
    var isValid = true;
    if ( document.form1.first_name.value == "" ) { 
	    alert ( "Please type your Name" ); 
	    isValid = false;
    } else if ( document.form1.first_name.value.length < 1 ) { 
            alert ( "student  first_name, Middle name, Last name  must be Enter " ); 
            isValid = false;
    } 
	
	
	
	
	
	
	
	
	else if ( document.form1.table.value.length < 1 ) { 
            alert ( "You must select a class for this student " ); 
            isValid = false;
    }
	else if ( document.form1.tables.value.length < 1 ) { 
            alert ( "enter target class numeric representation " ); 
            isValid = false;
    }
	
	
	
	
	
		
	
	
	
	else if ( document.form1.go.value == "" ) { 
            alert ( "Please select Motive or Reason" ); 
            isValid = false;
	}
	
    return isValid;
}



//-->
</script>

<form name="form1" method="post" action="choosesp.php">

<?php $notes=$_SESSION['user_name'];?>
<input type="hidden" name="rollspm" value="<?php echo $row[0];?>">
  <table style=" border:1px solid silver" cellpadding="1"width="550px" cellspacing="0px" align="center" border="0">
    <tr><td style="text-transform:uppercase;">




<table cellpadding="1" >
      <td colspan="18" style="background:#000; color:#FFFFFF; font-size:20px">CANDIDATE FOR ELECTION
    </tr>
   



 <tr>
      <td style="text-transform:uppercase;">MATRICULE</td>
      <td style="text-transform:uppercase;"><input type="text" name="matricule" size="19" value="<?php echo $row['matricule'];?>"style="background:#ccc;" ></td>
	
	

    </tr>
	   <td style="text-transform:uppercase;">Department</td>
	     <td style="text-transform:uppercase;"><input type="text" name="department" size="20" value="<?php echo $row['department'];?>"  style="background:#ccc;"></td>
    </tr>
 <tr><?php  $pic=$row["photo"];?>
      <td style="text-transform:uppercase;">Level</td>
      <td style="text-transform:uppercase;"> 

	  
	  <input type="text" name="levels" size="20" value="<?php echo $row['levels'];?>" readonly="readonly" style="background:#ccc;">

</td>
	
    </tr>
    
<tr>
      <td width="150px">NAMES OF STUDENT</td>
      <td style="text-transform:uppercase;"><input type="text" name="fname" size="20" value="<?php echo $row['fname'];?>" ></span> </td></tr><tr>
       
   
    <tr>
      <td style="text-transform:uppercase;">Accademic Year</td>
      <td style="text-transform:uppercase;"><input type="text" name="acc" size="7" value="<?php echo $take;?>" style="background:#ccc;"></td>

	
    </tr>
	
	 
    <tr>
      <td style="text-transform:uppercase;">Position Applied</td>
      <td style="text-transform:uppercase;"><input type="text" name="applied" size="20" value="<?php echo $row['position'];?>"  style="background:#ccc;">

   </td>
	
    </tr>
	
	
	
	
		 
    <tr>
      <td style="text-transform:uppercase;">Create ID for candidate</td>
      <td style="text-transform:uppercase;"><input type="text" name="codes" size="14" value="<?php echo $mms;?>" style="background:#ccc;"></td>
	</td>
	
    </tr>
	
	
	
		 
    <tr>
      <td style="text-transform:uppercase;">Party Name or Color</td>
      <td style="text-transform:uppercase;"><input type="text" name="colors" size="14" value="<?php echo $row['colors'];?>" style="background:#ccc;"></td>
	</td>
	
    </tr>
	
	
	
	
	
	</table>
<td>
		 <?php 
				$mxx=$mats;
				$qry = mysql_query("select id as total
from employees where empname='$mxx'  "); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row['total']; 
				 $mxx=$rec['empname'];?>
				<input type="hidden" name="changeme" size="10" value="<?php echo $savep4;?>" readonly="readonly" style="background:red;color:#fff;font-weight:bold;">
			

					<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="220px" height="170px">
  </td></tr></table>
  </div></td>
	
	  
	  
</tr>





		<?php } ?>


</table>
</div></tr><tr>
      <td colspan="4" align="center"><input type="hidden" name="do" value="update">
        <input type="submit" value="Update Candidate!" onClick="javascript:return validateMyForm();self.close();"/></td>
    </tr></table>

















	</div>


	
	
	</div>
	
	
	
	
	
</div>
</div>





</body>
</html>