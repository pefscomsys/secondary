<?php
include 'dbcs.php';
page_protect();


 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from users where  full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $ids=$row['fax'];


?><?php } ?>



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
input:hover{background-color:#eee;}
input:focus{background-color:#ccf;}
input:not(:focus){text-align:right;}
table{
border-collapse:collapse;

}
td{border-left:1px solid black;
border-top:1px solid black;}
table{border-right:1px solid black;
border-bottom:1px solid black;}
<!---

tr:first-Child td,td:first-Child{background-color:#ccc;
padding:1px 3px;
font-weight:bold;
text-align:center;}
--->
</style>
	</head>
	<body>
		 
<?php
$fish=$_GET["roll"];
 echo $classes=$_POST["classes"];

	  ?>
<div style="float:left; width:400px;">
Welcome To Marks CORROECTION Page for <?php echo $subject;?>

<div  style="float:left;width:990px; height:540px;">

<div  style="float:left;width:750px; height:540px; ">
	
	
	
<div  style="float:left;width:750px; height:30px; background:#336666;color:#fff;">

<div style="width:350px; float:left; height:25px; margin-left:10PX">
STUDENT NAMES</div>

<div style="width:80px; float:left; height:25px; margin-left:10PX">
First Term </div>

<div style="width:80px; float:left; height:25px; margin-left:10PX">
Second Term </div>

<div style="width:80px; float:left; height:25px; margin-left:10PX">
Third Term </div>

</div>

<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<?php  $take=$row[1];



?>
		 
		 
<?php
$table = "marks";
$i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["id"] as $roll)
 {

  
  mysql_query("update marks SET
              
               date2='".$_POST['date2'][$i]."',
               
               
               teacher='".$_POST['teacher'][$i]."',
			   
               mxc1='".$_POST['mxc1'][$i]."'
			   where roll='$roll'
               ");
  $i++;

               

  }

 

echo "<script>alert('Datae Base Updated Successful!'); </script>";
 }
?>
<?php } ?>			<?php
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
	  
	  ?>	<?php
$i=1;
 $sql = "SELECT * FROM marks where last_name='$classes'  and  form='$take'  ";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $first_name_array[] = $row["first_name"];
 $date2_array[] = $row["date2"];
 $teacher_array[] = $row["teacher"];
 $mxc1_array[] = $row["mxc1"];
  $c101_array[] = $row["c101"];
$c102_array[] = $row["c102"];
$db1_array[] = $row["db1"];
$sex_array[] = $row["sex"];
 }
 echo "<form action='#' method='post'>
       ";
for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $first_name = $first_name_array[$i];
 $date2 = $date2_array[$i];
 $teacher = $teacher_array[$i];
 $mxc1 = $mxc1_array[$i];
$c101 = $c101_array[$i];
$c102 = $c102_array[$i];
$db1 = $db1_array[$i];
$sex = $sex_array[$i];
?>
        <div style='float:left; width:732px;  font-size:12px; color:#686868; font-family:arial; text-translevels:UPPERCASE;  '>
        <div style='float:left;width:300px; '>
		<table class="editabletable"  width="700px">
		
		<input type='hidden' name='id[]' value='<?php echo $roll;?>'></div>
      <tr> 
        <td style='float:left;width:200px; '>
	<?php echo	$first_name;?> 
  </td>  
  <td style='float:left;width:70px; '>
  
 <input type='text' name='date2[]' value='<?php echo $date2;?>' size='8' style='BACKGROUND:#CCC;'></td>
        <td style='float:left;width:70px; '>
		
 <input type='text' name='teacher[]' value='<?php echo $teacher;?>' size='8' style='BACKGROUND:#CCC;' ></td>
 
        <td style='float:left;width:70px; '>
		
 <input type='text' name='mxc1[]' value='<?php echo $mxc1;?>' size='8' style='BACKGROUND:#CCC;' ></td>
 
 </tr></table>
 <div style='float:left; width:932; border-bottom:1px solid #ccc;'></div><?php
 }
 
echo "<input type='submit' name='submit' value='Submit'></form>";
?><?PHP

 
 $mxc11= $c102 ;
 
 
 
if(empty($mxc11)){

 echo "<tr><td colspan='3' align='center' style='color:red'>No Record found for this semester $sex mr:-$notes please choose another semester or course or level;</td></tr>";
 }
elseif($mxc11>'' ){
	
}

	
		 		 
?>


<BR>


<BR>

<BR>

<BR>

<BR>

<BR>

 
<BR>


<BR>

<BR>

<BR>

<BR>

<BR>

<BR>


<BR>

<BR>

<BR>

<BR>

<BR>

<BR>


<BR>

<BR>

<BR>

<BR>

<BR>

<BR>


<BR>

<BR>

<BR>

<BR>

<BR>

<BR>


<BR>

<BR>

<BR>

<BR>

<BR>

<BR>


<BR>

<BR>

<BR>

<BR>

<BR>

<BR>


<BR>

<BR>

<BR>

<BR>

<BR>

<BR>
 


</div>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</div><script type="text/javascript">
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