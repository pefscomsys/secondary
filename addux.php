<?php 
include 'dbc.php';
page_protect();




if(@$_SESSION['userlevel']!=(19)){header("location: login.php?error=Unauthorized access");}
//set the random id length 
$random_id_length = 10; 

//generate a random id encrypt it and store it in $rnd_id 
$rnd_id = crypt(uniqid(rand(),1)); 

//to remove any slashes that might have come 
$rnd_id = strip_tags(stripslashes($rnd_id)); 

//Removing any . or / and reversing the string 
$rnd_id = str_replace(".","",$rnd_id); 
$rnd_id = strrev(str_replace("/","",$rnd_id)); 

//finally I take the first 10 characters from the $rnd_id 
$rnd_id = substr($rnd_id,0,$random_id_length); 

			
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SCHOOL MANAGEMENT SYSTEM</title>
<script type="text/javascript">
var popupwin = null;
function popupWin(url,name) {
popupwin = window.open(url,name,'width=700,height=400');
}
if (!document.all) {
document.captureEvents (Event.CLICK);
}
document.onclick = function() {
if (popupwin != null && !popupwin.closed) {
popupwin.focus();
}
}
</script>
<style>
 .RolloverMenu { width:250px; font-size:11pt; font-weight:bold; color:#000000; background:rgb(180,235,230);}
   .RolloverMenu ul{ list-style-type:none; margin:0; padding:0;}
   .RolloverMenu li{  margin:2px; text-align:center; }
  .RolloverMenu a{ display:block; margin:0; padding:4px; border:1pt solid black; text-decoration:none;}
  .RolloverMenu a:hover{ background:#ffcc00}
  .RolloverMenu a:link, .RolloverMenu a:active, .RolloverMenu a:visited{ color:#000000;}
   
#headers {
		
                float:left;
		padding:0px 0;
		width:100%; border-bottom: 20px solid #660000; color: #CCC;
		z-index:9999px;
		background:#000;
		margin-top:-10px;
	}
table{font-family:Verdana, Geneva, sans-serif;}
.textfield {
	font-size: 11px;
	color: #333333;
	background: #F7F7F7;
	border: 1px solid #CCCCCC;
	padding-left: 1px;
}a {
	color: #2D3954;
	font-size: 11px;
}
a:hover {
	color: #99CC00;
}


body{
		background:#fff;}
#container{margin:auto;

width:800px; height:66900px;
background:#fff;
border-radius: 8px 8px 8px 8px;

-o-border-radius: 8px 8px 8px 8px;

-moz-border-radius: 8px 8px 8px 8px;

-khtml-border-radius: 8px 8px 8px 8px;

}.header{
margin:auto;

width:800px;
height:150px;
	
	
	}
.x{
margin:auto;

width:800px;
height:150px;
	
	
	}
#containers{margin:auto;
margin-top:-5px;
box-shadow:1px 1px 1px   #fff;
width:820px; height:70500px;
background-color:#660000; !important;-moz-linear-gradient(top, #E3E3E3 0%, #EDEDED 100%) );}

</style>
</head>

<body>


<DIV Style="font-family:verdana;color:#282828:margin-top:7px;margin-left:-27px;line-height:28px; ">

<ul>


<fieldset id="el02">
<legend>STAFF AND STUDENT REGISTRATION PAGE </legend>
<form action="registerrr.php" method="post" name="regForm" id="regForm" >
        <table width="95%" border="0" cellpadding="1" cellspacing="2" class="forms" bgcolor="#FFFFFF" border="1px">
          <tr> 
            <td colspan="2">Account Name<span class="required"><font color="#CC0000">*</font></span><br> 
              <input name="full_name" type="text" style="background:#ccc;"id="full_name" size="40" class="required" value="<?php echo $row[4];?>"></td>
          </tr>
          
          <tr> 
            <td colspan="2">Contact Address (with ZIP)<span class="required"><font color="#CC0000">*</font></span><br> 
              <input name="address" type="text" style="background:#ccc;"id="address" size="40" class="required" value="<?php echo $row[9];?>"></td></textarea> 
              <span class="example"><B></B></span> </td>
          </tr>
          <tr> 
            <td>Country <font color="#CC0000">*</font></span></td>
            <td><select name="country" style="background:#ccc;"class="required" id="select8" >
               
                <option value="Cameroon">Cameroon</option>
                
              </select></td>
          </tr>
          <tr> 
            <td>Phone<span class="required"><font color="#CC0000">*</font></span> 
            </td>
            <td><input name="tel" style="background:#ccc;"type="text" id="tel" class="required" value="<?php echo $row[8];?>">
			</td>
          </tr>
          
            <td colspan="2"><h4><strong>Login Details</strong></h4></td>
          </tr>
          <tr> 
            <td>Username<span class="required"><font color="#CC0000">*</font></span></td>
            <td><input name="user_name" type="text"style="background:#ccc;" id="user_name" class="required username" minlength="5" value="<?php echo $row[2];?>" > 
              <input name="btnAvailable" type="button" id="btnAvailable" 
			  onclick='$("#checkid").html("Please wait..."); $.get("checkuser.php",{ cmd: "check", user: $("#user_name").val() } ,function(data){  $("#checkid").html(data); });'
			  value="Check Availability"> 
			    <span style="color:red; font: bold 12px verdana; " id="checkid" ></span> 
            </td>
          </tr>
          <tr> 
            <td>Your Email<span class="required"><font color="#CC0000">*</font></span> 
            </td>
            <td><input name="usr_email"style="background:#ccc;" type="text" id="usr_email3" class="required email" value="<?php 
echo " $rnd_id"; ?>@yahoo.com"> 
              <span class="example">** Valid email please..</span></td>
          </tr>
          <tr> 
            <td>Password<span class="required"><font color="#CC0000">*</font></span> 
            </td>
            <td><input name="pwd" style="background:#ccc;"type="password" class="required password" minlength="5" id="pwd" value="<?php 
echo " $rnd_id"; ?>"> 
             </td>
          </tr>
          <tr> 
            <td>Retype Pwd<span class="required"><font color="#CC0000">*</font></span> 
            </td>
            <td><input name="pwd2"  style="background:#ccc;"id="pwd2" class="required password" type="password" minlength="5" equalto="#pwd" value="<?php 
echo " $rnd_id"; ?>"></td>
          </tr>
          <tr> 
            <td>Categories</td><td colspan="2"><select name="user_level"style="background:#ccc;" class="required"   id="select8">
               
                <option value="1">Student</a></option>
                <option value="3">Teacher</option>
				
                <option value="8">Bussers</option>
				
				
                <option value="0">Admin</option>
      </select></td>
          </tr>
          <tr> 
            
          
          </tr>
        </table>
        <p align="center">
          <input name="doRegister" type="submit" id="doRegister" value="Register">
        </p>
      </form>
      <p align="right"><span style="font: normal 9px verdana"></span></p>
	   
      </td>
    <td width="196" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
</form>
</fieldset>
</ul>
<br />
</DIV>
</body>
</html>
