<?php include 'dbcs.php';
$ip=@$_SERVER['REMOTE_ADDR'];$day=date("j");
 $gm=$_GET['usr_name'];?><?php
 
 
 
 
 
 
 
 
 
 
 
?><?php 
$err = array();

foreach($_GET as $key => $value) {
	$get[$key] = filter($value); //get variables are filtered.
}

if ($_POST['doLogin']=='Login')
{

foreach($_POST as $key => $value) {
	$data[$key] = filter($value); // post variables are filtered
}


$user_email = $data['usr_email'];
$pass = $data['pwd'];


if (strpos($user_email,'@') === false) {
    $user_cond = "user_name='$user_email'";
} else {
      $user_cond = "user_email='$user_email'";
    
}

	
$result = mysql_query("SELECT `id`,`pwd`,`full_name`,`approved`,`user_level` FROM users WHERE 
           $user_cond
			AND `banned` = '0'
			") or die (mysql_error()); 
			 
$num = mysql_num_rows($result);

  // Match row found with more than 1 results  - the user is authenticated. 
    if ( $num > 0 ) { 
	
	list($id,$pwd,$user_name,$approved,$user_level) = mysql_fetch_row($result);
	
	
	 
		//check against salt
	if ($pwd === PwdHash($pass,substr($pwd,0,9))) { 
	if(empty($err)){			

     // this sets session and logs user in  
       session_start();
	   session_regenerate_id (true); //prevent against session fixation attacks.

	   // this sets variables in the session 
		$_SESSION['user_id']= $id;  
		$notes=$_SESSION['user_name'];
		$_SESSION['user_name'] = $user_name;
		$_SESSION['user_level'] = $user_level;
		$_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']);
		$monn=$user_name;
		//update the timestamp and key for cookie
		$stamp = time();
		$ckey = GenKey();
		mysql_query("update users set `ctime`='$stamp', `ckey` = '$ckey' where id='$id'") or die(mysql_error());
		
		//set a cookie 
		//set a cookie  
if ($user_level == 7) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location: myaccount1.php"); 
} 
else if ($user_level == 4) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  myaccount1.php");
	 
}else if ($user_level == 91) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  bustus.php");
	 
}
else if ($user_level == 66) 
{ 
    header ("Location:  bookup.php"); 
}
else if ($user_level == 2.1) 
{ 
    header ("Location:  regg2.php"); 
}
else if ($user_level == 3) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  teacher.php"); 
}

else if ($user_level == 5) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  bustme.php"); 
}
else if ($user_level == 33) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  deanss.php"); 
}
else if ($user_level == 8) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  busser.php"); 

}


else if ($user_level == 7) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  myaccount1.php"); 

}


else if ($user_level == 1) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  students.php"); 

}

else if ($user_level == 0) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  book.php"); 

}
else if ($user_level == 9) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  scanvotes.php"); 

}
else if ($user_level == 12) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  salesss.php"); 

}

else if ($user_level == 11) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  dean.php"); 

}

else if ($user_level ==2.1) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  sales.php"); 

}

else if ($user_level == 13) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmaster6.php"); 

}




else if ($user_level == 16) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmaster8.php"); 

}

else if ($user_level == 17) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  bookm.php"); 

}
else if ($user_level == 18) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmaster10.php"); 

}


else if ($user_level == 20) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmaster11.php"); 

}

else if ($user_level == 21) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmaster12.php"); 

}

else if ($user_level == 22) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmaster13.php"); 

}


else if ($user_level == 23) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmaster14.php"); 

}
else if ($user_level == 24) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmastercom7.php"); 

}


else if ($user_level == 15) 
{ 

		 $_SESSION['userlevel']= $user_level;
    header ("Location:  classmaster8.php"); 

}

else if ($user_level ==19) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  omegahome.php"); 
}

else if ($user_level ==29) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  systemadmin.php"); 
}

else if ($user_level ==41) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  library.php"); 
}



else if ($user_level ==111) 
{ 
		 $_SESSION['userlevel']= $user_level;
    header ("Location:  orditteam.php"); 
}




	   if(isset($_POST['remember'])){
				  setcookie("user_id", $_SESSION['user_id'], time()+60*60*24*COOKIE_TIME_OUT, "/");
				  setcookie("user_key", sha1($ckey), time()+60*60*24*COOKIE_TIME_OUT, "/");
				  setcookie("user_name",$_SESSION['user_name'], time()+60*60*24*COOKIE_TIME_OUT, "/");
				   }
		 }
		}
		else
		{
		//$msg = urlencode("Invalid Login. Please try again with correct user email and password. ");
		$err[] = "Invalid Password. Please you have $attempt left ";
		$statd='1';
		
$tm=date('H:i:s');
$idff=$_SESSION['user_id'];
$ip_value=date('d/m/y');
$ref=($_SERVER['SERVER_NAME']);
$notess=($_SESSION['full_name']);
$ref2=($_SERVER['PHP_SELF']);
$agent=($_SERVER['HTTP_USER_AGENT']);
$ip=@$_SERVER['REMOTE_ADDR'];





		//header("Location: login.php?msg=$msg");
		}
	} else {
		$err[] = "Error - Invalid login. No such user exists";
	  }		
}
					 
 ?>
 <!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>PEFSCOM COMPANY LTD</title>
    
    
    
    <script src='jquery.min.js'></script>

        <script src="js/index.js"></script>
    
        <link rel="stylesheet" href="css/style.css">

    
<link rel="stylesheet" href="font-awesome/css/font-awesome.css" type="text/css" media="screen">
    
    
  </head>

  <body>

    
    <div class="titles" ><h1 style="float:left;margin-top:20px; margin-left:10px;text-shadow:1px 0px 1px #fff;color:#50a3a2;">PEFSCOM COMPANY LIMITED</h1><br>
	<div style="float:left;color:#000; margin-top:35px; margin-left:-370px;font-size:13px;">Transforming all Manual System to Computerised System</div>
	</div>
    <div class="wrapper">
	<div class="container">
		<h1 >Welcome</h1>
		
   <form action="login.php" method="post" name="logForm" id="logForm" >
				
					<input class="username" name="usr_email"  type="text" value=""  placeholder="Username"size="33"/>
					<input class="password"  name="pwd" type="password" value="" size="40"placeholder="Password"/>
					
					<input id="login-button" name="doLogin" type="submit" class="submit" value="Login">
		</form>
		
		
		
		
		
		
		
		
		
		
		
		
		
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>

    
    
    
  </body>
</html>
