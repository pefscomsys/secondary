<?php 
include 'dbc.php';
page_protect();





 $notes=$_SESSION['user_name'];
?>

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

<script type="text/javascript">
     var mappedArray = [];
      mappedArray.push({tables:"formone",tableCode:"formonespecial"});
      mappedArray.push({tables:"formtwo",tableCode:"formtwospecial"});
	  
      mappedArray.push({tables:"formthree",tableCode:"formthreespecial"});
	  
      mappedArray.push({tables:"formfour",tableCode:"formfourspecial"});
	  
      mappedArray.push({tables:"formfive",tableCode:"formfivespecial"});
	  
	  
      mappedArray.push({tables:"lowersixth",tableCode:"lowersixthspecial"});
      mappedArray.push({tables:"lowersixthscience",tableCode:"lowersixthsciencespecial"});
   
      mappedArray.push({tables:"uppersixth",tableCode:"uppersixthspecial"});
	  
      mappedArray.push({tables:"uppersixthscience",tableCode:"uppersixthsciencespecial"});
	  
	  
	  
      mappedArray.push({tables:"commercial3",tableCode:"commercial3special"});
	  
      mappedArray.push({tables:"commercial4",tableCode:"commercial4special"});
	  
      mappedArray.push({tables:"commercial5",tableCode:"commercial5special"});
	  
      mappedArray.push({tables:"commercial6",tableCode:"commercial6special"});
	  
      mappedArray.push({tables:"commercial7",tableCode:"commercial7special"});
	  
      mappedArray.push({tables:"commercial8",tableCode:"commercial8special"});
	  
      mappedArray.push({tables:"commercial9",tableCode:"commercial9special"});
    
    function populatetableCode(cntry, phoneCode1, phoneCode2) {
      if(cntry == ''){
        document.getElementById(phoneCode1).value = '1';
        document.getElementById(phoneCode2).value = '1';
        return;
      }
      for(var i = 0; i < mappedArray.length; i++) {
        if(mappedArray[i].tables == cntry){
          document.getElementById(phoneCode1).value = mappedArray[i].tableCode;
          document.getElementById(phoneCode2).value = mappedArray[i].tableCode;
          break;
        }
      }
    }
  </script>
  <script type="text/javascript">
     
          /*************************************************/
          // Function to set Phone table Code according to 
          // selected table.
          /*************************************************/
          function settableCode() {
            var table2 = document.getElementById ('table' ).value;
			//alert(table2);
            populatetableCode(table2 , 'tables', 'phonetableCode2');
            //doNothing();


	        if(table2 == "United States")
       	    {
			    document.getElementById("hide_show").style.display = 'block';
			    document.getElementById("hide_show2").style.display = 'block';				
				
		    }
	        else
	        {
			    document.getElementById("hide_show").style.display = 'none';
			    document.getElementById("hide_show2").style.display = 'none';				
	        }
          }
        </script>
<meta charset=utf-8 />


</head>






</div>

<div style="float:left; margin:auto; width:500px; height:400px;">











 <body>


<div style="width:700px; height:400px;">

</script>



<?php



 $matricule = $_POST ['matricule'];
if($matricule!=''){
$sex = $_POST ['sex'];

$cxx1 = $_POST ['cxx1'];
$cxx2 = $_POST ['cxx2'];

$cxx6 = $_POST ['cxx6'];
$sex = $_POST ['sex'];

$query3="update  courses set  cxx1='$cxx1',sex='$sex',cxx2='$cxx2',cxx6='$cxx6'
 where matricule='$matricule'


";




 
mysql_query ($query3) or die ('could not updated:'.mysql_error());

echo "<script>alert('Admission Successful!'); </script>";

 echo "<meta http-equiv='refresh' content='0; url=dateoff.php'>";
}
?>








<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php  $take=$row[1];


?><?php } ?>





<?php
$roll=$_GET["roll"];
$query="select * from courses where matricule='$roll'";
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

<form name="form1" method="post" action="chargeinfo.php">

<?php $notes=$_SESSION['user_name'];?>
<input type="hidden" name="notesxs" value="<?php echo $notes;?>">
  <table style=" border:1px solid silver" cellpadding="1" bgcolor="#ffffcc"cellspacing="0px" align="center" border="0">
    <tr><td style="text-transform:uppercase;">




<table cellpadding="1" >
      <td colspan="18" style="background:#000; color:#FFFFFF; font-size:20px">NEW STUDENT DATA BASE
    </tr>
   

      <input type="hidden" name="name1" size="20" value="<?php echo $row[1];?>" readonly="readonly"style="background:#ccc;">
    </tr>
      <td width="150px">Date of Trasaction</td>
      <td style="text-transform:uppercase;"><input type="text" name="date" size="20" value="<?php
echo $row['date'];
?>" readonly="readonly" style="background:#ccc;"></td><td width="150"></td></tr>



<tr><input type="hidden" name="month" size="20" value="<?php
echo date('M');
?>" style="background:#ccc;"/>
<input type="hidden" name="year" size="20" value="<?php
echo date('Y');
?>" style="background:#ccc;"/>



<input type="hidden" name="stayoff" size="20" value="1" style="background:#ccc;"/>
      
   <input type="hidden" name="last_name" size="20" value="<?php echo $row['date2'];?>" style="background:#ccc;"/>   
	  
   <input type="hidden" name="db1" size="20" value="<?php echo $take;?>" style="background:#ccc;"/>   
	  
	  <input type="hidden" name="photo" size="20" value="<?php echo $pic=$row["photo"];
	  
	  
	 $bussh=$row["student_name"];
	  
	
?>" style="background:#ccc;"/>
      
    </tr>
 <tr>
      <td style="text-transform:uppercase;">MATRICULE</td>
      <td style="text-transform:uppercase;"><input type="text" name="matricule" size="19" value="<?php echo $row['matricule'];?>"style="background:#ccc;" ></td>
	
	

    </tr>
	   <td style="text-transform:uppercase;">Department</td>
	     <td style="text-transform:uppercase;"><input type="text" name="department" size="20" value="<?php echo $row['departmet'];?>"  style="background:#ccc;"></td>
    </tr>
 <tr>
      <td style="text-transform:uppercase;">Level</td>
      <td style="text-transform:uppercase;"> 

	  
	  <input type="text" name="class" size="20" value="<?php echo $row['levels'];?>"  style="background:#ccc;">

</td>
 <td style="text-transform:uppercase;">
	
    </tr>
    
<tr>
      <td width="150px">NAMES OF STUDENT</td>
      <td style="text-transform:uppercase;"><input type="text" name="fname" size="20" value="<?php echo $row['fname'];?>" ></span> </td></tr><tr>
       
   
    <tr>
      <td style="text-transform:uppercase;">Sex</td>
      <td style="text-transform:uppercase;"><input type="text" name="sex" size="7" value="<?php echo $row['sex'];?>" style="background:#ccc;"></td>
	</td>
	
    </tr>
 <tr><td >Place of Birth</td>
      <td bgcolor=""><input type="text" name="cxx1" size="10" value="<?php echo $row['cxx1'];?>"  style=""></td>
<tr>  

 <td style="text-transform:uppercase;">Date of Birth</td>
      <td bgcolor="#989898"><input type="text" name="cxx2" size="10"  value="<?php echo $row['cxx2'];?>" onBlur="doCalc(this.form)" style="background:#1188aa;color:#fff;"></td>
      </tr>
    <tr><td >Secondary School</td>
      <td bgcolor=""><input type="text" name="cxx6" size="10" value="<?php echo $row['cxx6'];?>"  style="background:red;color:#fff;font-weight:bold;"></td>
<tr>  
<tr>
      <td colspan="4" align="center"><input type="hidden" name="do" value="update">
        <input type="submit" value="UPDATE RECORDS" onClick="javascript:return validateMyForm();self.close();"/></td>
    </tr></table>

<?php
}
?>















	</div>


	
	
	</div>
	
	
	
	
	
</div>
</div>





</body>
</html>