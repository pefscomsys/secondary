<?php 
/*************** PHP LOGIN SCRIPT V 2.0*********************
***************** Auto Approve Version**********************
(c) Balakrishnan 2009. All Rights Reserved

Usage: This script can be used FREE of charge for any commercial or personal projects.

Limitations:
- This script cannot be sold.
- This script may not be provided for download except on its original site.

For further usage, please contact me.

***********************************************************/


include 'dbcs.php';

$err = array();
					 
if($_POST['doRegister'] == 'Register') 
{ 
/******************* Filtering/Sanitizing Input *****************************
This code filters harmful script code and escapes data of all POST data
from the user submitted form.
*****************************************************************/
foreach($_POST as $key => $value) {
	$data[$key] = filter($value);
}


/************************ SERVER SIDE VALIDATION **************************************/
/********** This validation is useful if javascript is disabled in the browswer ***/

if(empty($data['full_name']) || strlen($data['full_name']) < 4)
{
$err[] = "ERROR - Invalid name. Please enter atleast 3 or more characters for your name";
//header("Location: register.php?msg=$err");
//exit();
}



	  
$user_ip = $_SERVER['REMOTE_ADDR'];

// stores sha1 of password
$sha1pass = PwdHash($data['tel']);

// Automatically collects the hostname or domain  like example.com) 
$host  = $_SERVER['HTTP_HOST'];
$host_upper = strtoupper($host);
$path   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

$cxx= $data['cxx'];
$classes= $data['classes'];


$fax= $data['fax'];
$faxs= $data['faxs'];
$user_level= $data['user_level'];

$tel = $data['tel'];
$user_name = $data['user_name'];
 $usr_email ="$user_name@yahoo.com.fr";
/************ USER EMAIL CHECK ************************************
This code does a second check on the server side if the email already exists. It 
queries the database and if it has any existing email it throws user email already exists
*******************************************************************/

$rs_duplicate = mysql_query("select count(*) as total from users where user_email='$usr_email' OR user_name='$user_name'") or die(mysql_error());
list($total) = mysql_fetch_row($rs_duplicate);

if ($total > 0)
{
$err[] = "ERROR - The username/email already exists. Please try again with different username and email.";
//header("Location: register.php?msg=$err");
//exit();
}
/***************************************************************************/

if(empty($err)) {
if(empty($cxx)){
	
}elseif($cxx>="1"  && $cxx<="1" ){
	
	
}elseif($cxx>="2"  && $cxx<="2" ){
	
$sql_inserts = "INSERT into `cms`

(teacher,classs,status) VALUES('$data[full_name]','$classes','')
  			
			";

mysql_query($sql_inserts, $link) or die("Insertion Failed:" . mysql_error());
	
}

$sql_insert = "INSERT into `users`
  			(`full_name`,`user_email`,`pwd`,`address`,`user_level`,`tel`,`fax`,`website`,`date`,`users_ip`,`activation_code`,`country`,`user_name`
			)
		    VALUES
		    ('$data[full_name]','$usr_email','$sha1pass','$data[address]','$data[user_level]','$data[tel]','$data[fax]','$data[faxs]'
			,now(),'$user_ip','$activ_code','$data[country]','$user_name'
			)
			";

mysql_query($sql_insert, $link) or die("Insertion Failed:" . mysql_error());
$user_id = mysql_insert_id($link);  
$md5_id = md5($user_id);
mysql_query("update users set md5_id='$md5_id' where id='$user_id'");
//	echo "<h3>Thank You</h3> We received your submission.";



echo "<script>alert('Thank you!'); </script>";
 
 echo  $statusf="<meta http-equiv='refresh' content='0; url=regnew.php'>";
  exit();
	 
	 } 
 }					 

?>