<?php 
include 'dbc.php';
page_protect();
 $cssv=$_GET['roll'];
 $ips=@$_SERVER['REMOTE_ADDR'];

  $notes=$_SESSION['user_name'];



?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<title><?php echo $school;?></title>
        <link rel="shortcut icon" href="pef.png"> 
		<style>

		
		</style>
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
	</head>
	<body ONLOAD='setFocus()'>

<form action="menuxshss.php" method="POST">
<table border=0 align=center bgcolor="#0000FF">
<tr><td style="color:#fff;">SCAN OR BARCODE </td><td>
<input type='text' name='barcode' id='inputFieldId' autofocus="autofocus" />
<input type='hidden' name='css' value='<?php echo $cssv;?>'>
<script>
    if (!("autofocus" in document.createElement("input")))
            document.getElementById("inputFieldId").focus();
</script>
</td>
</tr>

</table>
</form>
<hr />
</body>
</html>

	</div>
	
	
	
	
	</body>
	</html>