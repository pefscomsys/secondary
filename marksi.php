<?php include 'dbcs.php';
$nki=$_GET['roll'];


?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="w2ui-1.4.2.min.css" />
    <script src="jquery.min.js"></script>
    <script type="text/javascript" src="w2ui-1.4.2.min.js"></script>
</head>
<body><?php
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
	

<link rel="stylesheet" href="global.css" type="text/css" media="all" />
<script src="mootools.js" type="text/javascript"></script>
<link rel="stylesheet" href="sexyalertbox.css" type="text/css" media="all" />
<script src="sexyalertbox.packed.js" type="text/javascript"></script>
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
    if ( document.form1.comments.value == "" ) { 
	    alert ( "please Enter  Comment subject name" ); 
	    isValid = false;
    } else if ( document.form1.comments.value.length < 1 ) { 
            alert ( "please Enter  comment name  must be Enter " ); 
            isValid = false;
    } 
	
	 else if ( document.form1.from1.value.length < 1 ) { 
            alert ( "please Enter   start range Code  must be Enter " ); 
            isValid = false;
    } 
	
	 else if ( document.form1.from2.value.length < 0 ) { 
            alert ( "please  end point  must be Enter " ); 
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



<DIV Style="font-family:verdana;color:#282828:margin-top:7px;margin-left:7px;line-height:28px;font-size:13px; ">
<a href="st1.php">
<div style="float:left; width:200px;margin-toP:25px;text-align:center; border:1px solid #000; height:30px; background:#FFBB40;">REGISTER MARKS</div></a>

	</div>
<DIV Style="font-family:verdana;color:#282828:margin-top:7px;margin-left:7px;line-height:28px;font-size:13px; ">
<a href="st4.php">
<div style="float:left; width:200px;margin-toP:25px;text-align:center; border:1px solid #000; height:30px; background:#FFBB40;">ENTER RESIT MARKS </div></a>

	</div>


<DIV Style="font-family:verdana;color:#282828:margin-top:7px;margin-left:7px;line-height:28px;font-size:13px; ">
<a href="st3.php">
<div style="float:left; width:200px;margin-toP:25px;text-align:center; border:1px solid #000; height:30px; background:#FFBB40;">Moderate all semester</div></a>

	</div>

	

<DIV Style="font-family:verdana;color:#282828:margin-top:7px;margin-left:7px;line-height:28px;font-size:13px; ">
<a href="st2.php">
<div style="float:left; width:200px;margin-toP:25px;text-align:center; border:1px solid #000; height:30px; background:#FFBB40;">Enter Ca or CORRECT MARKS </div></a>

	</div>

<DIV Style="font-family:verdana;color:#282828:margin-top:7px;margin-left:7px;line-height:28px;font-size:13px; ">
<a href="st5.php">
<div style="float:left; width:200px;margin-toP:25px;text-align:center; border:1px solid #000; height:30px; background:#FFBB40;">Edit Courses Registered</div></a>

	</div>


	
	
<DIV Style="font-family:verdana;color:#282828:margin-top:7px;margin-left:7px;line-height:28px;font-size:13px; ">
<a href="st3build.php">
<div style="float:left; width:200px;margin-toP:25px;text-align:center; border:1px solid #000; height:30px; background:#FFBB40;">add Single Subject </div></a>

	</div>

	
	
	
	
	
	
	
	
		
<DIV Style="font-family:verdana;color:#282828:margin-top:7px;margin-left:7px;line-height:28px;font-size:13px; ">
<a href="st3buildop.php">
<div style="float:left; width:200px;margin-toP:25px;text-align:center; border:1px solid #000; height:30px; background:#FFBB40;">Edit Single Result slip</div></a>

	</div>
	<DIV Style="font-family:verdana;color:#282828:margin-top:7px;margin-left:7px;line-height:28px;font-size:13px; ">

<div style="float:left; width:200px;margin-toP:25px;text-align:center; border:1px solid #000; height:30px; background:#FFBB40;"></div></a>

	</div>
	  
	  
	
	</div>
	
	
	
	
	</div>
	
	
	</body>
	</html>
<script type="text/javascript">
$(function () {
    $('#form').w2form({ 
        name   : 'form',
       
        url    : 'server/post',
        fields : [
            { field: 'first_name', type: 'text', required: true },
            { field: 'last_name',  type: 'text', required: true },
            { field: 'comments',   type: 'text'},
            { field: 'address1', type: 'text', required: true },
            { field: 'address2', type: 'text' },
            { field: 'city', type: 'text', required: true },
            { field: 'state', type: 'text', required: true },
            { field: 'zip', type: 'int', required: true },
            { field: 'short_bio', type: 'text' },
            { field: 'talk_name', type: 'text', required: true },
            { field: 'description', type: 'text' }
        ],
        actions: {
            reset: function () {
                this.clear();
            },
            save: function () {
                this.save();
            }
        }
    });
});
</script>

</body>
</html>