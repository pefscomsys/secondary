<?php 
include 'dbc.php';
page_protect();




if(@$_SESSION['userlevel']!=(8)){header("location: login.php?error=Unauthorized access");}

 $notes=$_SESSION['user_name'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Addmission Form</title>



	<link rel="stylesheet" href="css/dg-picture-zoom.css" />
	<script type="text/javascript" src="js/external/mootools-1.2.4-core-yc.js"></script>
	<script type="text/javascript" src="js/external/mootools-more.js"></script>
	<script type="text/javascript" src="js/dg-picture-zoom.js"></script>
	<script type="text/javascript" src="js/dg-picture-zoom-autoload.js"></script>

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


<div style="width:600px; height:400px; MARGIN-TOP:105PX; font-family:helvetica;">

</script>

<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $take=$row[1];


?>
<?php } ?>
<?php
$roll=$_GET["roll"];
$query="select * from container where roll='$roll'";
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
	  ?>
<div style="margin-left:70px;">

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
	
	
	
	 
	else if ( document.form1.newon2.value!=document.form1.extra.value ) { 
            alert ( "Hello <?php echo $notes;?> The Amount you enter did not Match With That of the Principal! please be transparent" ); 
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

<form name="form1" method="post" action="editssa.php">

<?php $notes=$_SESSION['user_name'];?>
<input type="hidden" name="notes" value="<?php echo $notes;?>">
  <table style=" border:1px solid silver" cellpadding="1" bgcolor="#ffffcc"cellspacing="0px" align="center" border="0">
    <tr><td>



<table cellpadding="1" >
      <td colspan="18" style="background:#000; color:#FFFFFF; font-size:20px">CASH RECEIPT DATA BASE
    </tr>
    <tr>

      <td width="150px">id</td>
      <td>

        <input type="hidden" name="roll" size="20" value="<?php echo $row[0];?><input type="text" name="roll" size="20" value="<?php echo $row[0];?>" readonly="readonly" style="background:#ccc;"></td></tr><tr>
      <input type="hidden" name="name1" size="20" value="<?php echo $row[1];?>" readonly="readonly"style="background:#ccc;">
    <input type="hidden" name="suppose" size="20" value="<?php echo $row[4];?>" readonly="readonly"style="background:#ccc;">
   
	</tr>
      <td width="150px">Date of Trasaction</td>
      <td><input type="text" name="date" size="20" value="<?php
echo date('Y-m-j' );
?>" readonly="readonly" style="background:#ccc;"><input type="hidden" name="time" value="<?php
echo date('H: i :s ' );
?>"  readonly="readonly" style="background:#ccc;"></td></tr><tr><input type="hidden" name="month" size="20" value="<?php
echo date('M');
?>" style="background:#ccc;"/>
<input type="hidden" name="year" size="20" value="<?php
echo date('Y');
?>" style="background:#ccc;"/>
      
   <input type="hidden" name="last_name" size="20" value="<?php echo $row['date2'];?>" style="background:#ccc;"/>   
	  
      
   <input type="hidden" name="form" size="20" value="<?php echo $take?>" style="background:#ccc;"/>   
	  
	  <input type="hidden" name="photo" size="20" value="<?php echo $row["photo"];?>
?>" style="background:#ccc;"/>
      
    </tr>
 <tr>
      <td>Matricule</td>
      <td><input type="text" name="matricule" size="12" value="<?php echo $row['matricule'];?>"style="background:#ccc;" ></td>
	
    </tr>
 <tr>
      <td>supose class<input type="text" name="suppose" size="12" value="<?php echo $row['last_name'];?>"  style="background:#ccc;"></td>
     <td style="text-transform:uppercase;"> <select id="table" name="table" class="Fidld6" onChange="settableCode();">
                      <option value="" selected="selected">Select your Class</option>
                      <option value="formone">Form 1</option>
                      <option value="formtwo">Form 2</option>
                      <option value="formthree">Form 3</option>
                      <option value="formfour">Form 4</option>
                      <option value="formfive">Form 5</option>
                      <option value="lowersixth">L6 art</option>
                      <option value="lowersixthscience">L6 science</option>
                      <option value="uppersixth">uppersixth</option>
                      <option value="uppersixthscience">uppersixth science</option>
                      <option value="commercial3">commercial3</option>
                      <option value="commercial4">commercial4</option>
					    <option value="commercial5">commercial5</option>
                       <option value="commercial6">commercial6</option>
					     <option value="commercial7">commercial7</option>
					  </select></td>
 <td style="text-transform:uppercase;"><select name="tables" class="field-1" id="tables">
				<option value="0" selected="selected">Select</option>
                      <option value="formonespecial"> 1</option>
                      <option value="formtwospecial"> 2</option>
                      <option value="formthreespecial"> 3</option>
                      <option value="formfourspecial"> 4</option>
                      <option value="formfivespecial"> 5</option>
                      <option value="lowersixthspecial">L6 art</option>
                      <option value="lowersixthsciencespecial">L6 sci</option>
                      <option value="uppersixthspecial">uppersixth</option>
                      <option value="uppersixthsciencespecial">u6 sci</option>
                      <option value="commercial3special">com3</option>
                      <option value="commercial4special">com4</option>
					    <option value="commercial5special">com5</option>
                       <option value="commercial6special">com6</option>
					     <option value="commercial7special">com7</option>
				</select></td>
	
	
    </tr>
    <tr>
      
      <td>

</td>
</tr>
<tr>

      <td width="150px">Motive</td>
      <td>  <select name="go" class="required" id="select8" style="background:#ccc;">
           
                  <option value="historic">Admission</option>
				  </select>
                  </td></tr><tr>
<tr>
      <td width="150px">FULL NAME'S OF STUDENT</td>
      <td><input type="text" name="first_name" size="20" value="<?php echo $row[4];?>" readonly="readonly"></TD></TR>
      <td>Sex</td>
      <td><input type="text" name="sex" size="7" value="<?php echo $row[7];?>" readonly="readonly" style="background:#ccc;"></td>
	<input type="hidden" name="sex" size="7" value="<?php echo $row["sex"];?>" readonly="readonly" style="background:#ccc;"></td>
	
    </tr>


    <tr>
      
      <td>Guidiance address</td>
      <td><input type="text" name="addr1" size="8" value="<?php echo $row["addr1"];?>" readonly="readonly" style="background:#ccc;"></td>
    </tr>
    <tr>
      <td>Student address</td>
      <td><input type="text" name="addr2" size="11" value="<?php echo $row[9];?>"   readonly="readonly" style="background:#ccc;"> </td></tr><tr>
      <td>Expected amount</td>
       <td><input type="text" name="expected_amount" size="10" value="<?php echo $row['expected_amount'];?>" readonly="readonly" style="background:#ccc;"></td>
    </tr>
    <tr><td > 
	  
	  <tr>    
 <td>Deposite</td>
      <td bgcolor="#989898"><input type="text" name="amountpaidss" size="10"  value="<?php echo $row['amount_paid'];?>" readonly="readonly" onBlur="doCalc(this.form)" style="background:BLUE;COLOR:#FFF;"></td>
     <input type="hidden" name="amount_paid" size="10"  
	 value="<?php  echo $row['amount_paid'];
	  ?>" readonly="readonly" onBlur="doCalc(this.form)" style="background:BLUE;COLOR:#FFF;"></td>
     
  </TR>
	  
	  <TR>
  <td>Current Balance</td>
      <td>
	  
	  <input type="hidden" name="extra1" value="<?php echo $row['extra1'];?>">
	  
	  <input type="hidden" name="extra2" value="<?php echo $row['extra2'];?>">
	  
	  <input type="hidden" name="extra3" value="<?php echo $row['extra3'];?>">
	  
	  <input type="hidden" name="field1" value="<?php echo $row['field1'];?>">
	  
	  <input type="hidden" name="field2" value="<?php echo $row['field2'];?>">
	  <input type="hidden" name="newon" value="<?php echo $row['newon'];?>">
	  
	  
	  <input type="hidden" name="date6" value="<?php echo $row['date6'];?>">
	  
	  <input type="hidden" name="exam" value="<?php echo $row['exam'];?>">
	  
	  
	  <input type="hidden" name="computer" value="<?php echo $row['computer'];?>">
	  
	  
	  <input type="hidden" name="library" value="<?php echo $row['library'];?>">
	  
	  <input type="hidden" name="health" value="<?php echo $row['health'];?>">
	  
	  <input type="hidden" name="idcard" value="<?php echo $row['idcard'];?>">
	  
	  
	  
	  
	  <input type="hidden" name="tshirt1" value="<?php echo $row['tshirt1'];?>">
	  
	  
	  
	  <input type="hidden" name="tshirt2" value="<?php echo $row['tshirt2'];?>">
	  
	  
	  
	  <input type="hidden" name="social1" value="<?php echo $row['social1'];?>">
	  
	  
	  <input type="hidden" name="social2" value="<?php echo $row['social2'];?>">
	  
	  <input type="hidden" name="badges" value="<?php echo $row['badges'];?>">
	  
	  
	  <input type="hidden" name="file" value="<?php echo $row['files'];?>">
	  
	  <input type="hidden" name="sportware" value="<?php echo $row['newon3'];?>">
	  
	  
	  
	  
	  
	  <input type="text" name="mute" size="20"onBlur="doCalc(this.form)"  value="<?php 
	  
	   ($fin=($row['expected_amount']));
	  
	   echo ($row['expected_amount']-$row['amount_paid']);
		?>" placeholder="enter new amount" onBlur="doCalc(this.form)" style="background:#ccc;" readonly="readonly"></td>

      </tr>


<TR>
      <td width="150px">Date</td>
      <td bgcolor="#989898"><input type="text" name="date2" size="10" value="<?php echo date('Y-M-j');?>" readonly="readonly" style="background:#ccc;"></td><td width="150">&nbsp;</td></tr><tr>
      
    </tr>







</table></td><tr><td>
      <td><div style="margin-top:-450px;margin-left:-90px;"><?php  

@$sql="select * from container where roll='$roll' and status='0'";
@$query=mysql_query($sql);
while(@$row=mysql_fetch_array($query))
{
 @$image=$row ['photo'];
 ?>
<img src="image/<?php echo $image; ?>?url=image/<?php echo $image;?>" class="dg-picture-zoom" style="float:right" width="130" height="120" border="3px" style="background:#ccc;">
<?php
}
?></div></tr><tr>
      <td colspan="4" align="center"><input type="hidden" name="do" value="update">
        <input type="submit" value="CONFIRM Enrollment" onClick="javascript:return validateMyForm();self.close();"/></td>
    </tr></table>


















	</div>
<?php } ?>










<div style="float:left; width:200px;margin-top:0px;text-align:center; height:30px; "></div>

<div style="float:left; width:200px;margin-top:0px;text-align:center; height:30px; "></div>
<a href="formthree.php">
<div style="float:left; width:200px;margin-toP:-5px;text-align:center;  height:30px;"></div></a>



</div>

</DIV>


</div>

</body>
</html>
