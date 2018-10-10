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
	
	
<script src="jquery.min.js"></script>

	
 <script type="text/javascript">
    ko.bindingHandlers.nextFieldOnEnter = {
        init: function(element, valueAccessor, allBindingsAccessor) {
            $(element).on('keydown', 'input, select', function (e) {
                var self = $(this)
                , form = $(element)
                  , focusable
                  , next
                ;
                if (e.keyCode == 13) {
                    focusable = form.find('input,a,select,button,textarea').filter(':visible');
                    var nextIndex = focusable.index(this) == focusable.length -1 ? 0 : focusable.index(this) + 1;
                    next = focusable.eq(nextIndex);
                    next.focus();
                    return false;
                }
            });
        }
    };

    ko.applyBindings({});
    </script>

 
 <script type="text/javascript">
 
 $(function(){
      
  $('.number-only').keyup(function(e) {
        if(this.value!='-')
          while(isNaN(this.value))
            this.value = this.value.split('').reverse().join('').replace(/[\D]/i,'')
                                   .split('').reverse().join('');
    })
    .on("cut copy paste",function(e){
    	e.preventDefault();
    });

});
 
 
 
 
 
 
 
 
 
 
 
 
function fnc(value, min, max) 
{
    if(parseInt(value) < 0 || isNaN(value)) 
        return value; 
    else if(parseInt(value) > 20) 
	alert('Wrong Entry 0 input should be 0 and  <20');
    else return value;
}
</script>

<link rel="stylesheet" type="text/css" href="styles.css" />
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

		 
<?php
$fish=$_GET["roll"];
$subject=$_POST["subject"];

$classes=$_POST["classes"];
$coef=$_POST["coef"];



	?>
<div style="float:left; width:400px;">



<?php

$term=$_GET["term"];
	  
if(empty($term)){
	
}
elseif($term>="1"  &&  $term<="1" ){
	echo "<b style='color:red; '>First Term Marks Registration</b>";
		$bom="#11aacc;";
}

elseif($term>="2"  &&  $term<="2" ){
	echo "<b style='color:green; '>Second Term Marks Registration</b>";
	$bom="red;";
}
elseif($term>="3"  &&  $term<="3" ){
	echo "<b style='color:#000; '>Third Term Marks Registration</b>";
	$bom="#336666;";
}


?>

<div  style="float:left;width:990px; height:540px;">

<div  style="float:left;width:750px; height:540px; ">
	
	
	
<div  style="float:left;width:750px; height:30px; background:<?php echo $bom;?>;color:#fff;">

<div style="width:472px; float:left; height:25px; margin-left:10PX">
STUDENT NAMES</div>

<div style="width:80px; float:left; height:25px; margin-left:10PX">
<?php
if($term == '1')
{
	echo 'SQ1';
}
elseif($term == '2')
{
	echo 'SQ3';
}
elseif($term == '3')
{
	echo 'SQ5';
}
else
{
	echo 'SQ--';
}
?>
</div>

<div style="width:100px; float:left; height:25px; margin-left:10PX">

<?php
if($term == '1')
{
	echo 'SQ2';
}
elseif($term == '2')
{
	echo 'SQ4';
}
elseif($term == '3')
{
	echo 'SQ6';
}
else
{
	echo 'SQ--';
}
?>

</div>
</div>

<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php $take=$row[1];



?>
		 
		 
<?php
		 }
$table = "marks";


  $subject=$_POST["subject"];
 $class=$_POST["classes"];
 $user_name 	=$_POST["teacher"]; $user_name 	=$_POST["teacher"]; 
 $terms	=$_POST["terms"];
$i = 0;
if(!empty($_POST["submit"]))
{
	
	
	
  mysql_query("insert into filled SET subject='$subject' ,class='$class',user_name='$user_name',x='$terms'
	
	
	
	 ");
	
	
	
	
	
 foreach($_POST["id"] as $roll)
 {

  
  mysql_query("insert into resit SET
               subject='".$subject."',
			   

               classes='".$class."',
               first_name='".filter($_POST['first_name'][$i])."',
               form='".$_POST['form'][$i]."',
               coef='".$_POST['coef'][$i]."',
               teacher='".$user_name."',
               c101='".$_POST['c101'][$i]."',
			   
               c105='".$_POST['c105'][$i]."',
               c104='".$_POST['c104'][$i]."',
                 c103='".$_POST['c103'][$i]."',
               c102='".$_POST['c102'][$i]."'
               ");
  $i++;

               

  }

 

echo "<script>alert('Datae Base Updated Successful!'); window.location.href('ms2hss.php');</script>";


 echo  $statusf="<meta http-equiv='refresh' content='0; url=bollxt.php'>"; 


 }






?>

<?php

	  $classes=$_GET["class"];$subject=$_GET["subject"];$fish=$_GET["user_name"];$fish=$_GET["user_name"];$term=$_GET["term"];
	  
 $qrys = "select * from resit where 
subject='$subject'  and classes='$classes' and c105='$term' and teacher='$fish' and form='$take'";$qry=mysql_query($qrys); 
$row = mysql_fetch_assoc($qry); 
  $ss=$row['first_name'];
if(empty($ss)){
	
}
elseif($ss>''){
	echo "<b style='color:red; '>Sorry Sir please See the Principal if you have to modify this marks</b>";
	exit;
}

?>
<table border="0" cellpadding="0" cellspacing="1" width="750" >

<?php
	  $classes=$_GET["class"];$subject=$_GET["subject"];$fish=$_GET["user_name"];$fish=$_GET["user_name"]; $term=$_GET["term"];
	  
	  $coefx=$_GET["coef"];
	  
	
  $sql = "SELECT * FROM marks where form='$take' and last_name='$classes' and first_name>'' order by first_name  ASC";
$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $first_name_array[] = $row["first_name"];
 $matricule_array[] = $row["matricule"];
 $last_name_array[] = $row["last_name"];
 $form_array[] = $row["form"];
 }
 $count = 1;
 
 ?><form action="#" method="post" data-bind="nextFieldOnEnter:true">
      <?php

for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $first_name = $first_name_array[$i];
 $matricule = $matricule_array[$i];
 $last_name = $last_name_array[$i];
 $form = $form_array[$i];

?>
    <tr>
	
<td style="padding: 5px;">
	<?php echo $count++; ?>
</td>
<td style='height:30px; background:#fff;color:#000;width:40px;'>

	<input type='hidden' name='id[]' value='$roll'><?php echo	$matricule;?> 
</td>

<td style='height:30px; background:#fff;color:#000;width:350px;font-size:15px;font-family:arial; letter-spacing:2px;'>
 
	<?php echo	$first_name;?>
 <input type='hidden' name='first_name[]' value="<?php echo	$first_name;?>" size='8' style='BACKGROUND:#CCC;' maxlength='4'>
</td>



<td style='height:30px; background:#fff;color:#000;width:100px;'>


 <input type='hidden' name='classes[]' value="<?php echo $last_name;?>" style='BACKGROUND:#CCC;' maxlength='4'>

  
 <input type='hidden' name='subject[]' value='<?php echo $subject;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 
 <input type='hidden' name='teacher[]' value='<?php echo $fish;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='form[]' value='<?php echo $take;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 
 <input type='text' name='c101[]'  id="test_id" class="number-only" onkeyup="this.value = fnc(this.value, 0, 50)"   value=''  style='BACKGROUND:#CCC;padding:4px;' maxlength='5'>
 </td>
 
<td style='height:30px; background:#fff;color:#000;width:100px;'>

 <input type='text' name='c102[]'id="test_id" class="number-only" onkeyup="this.value = fnc(this.value, 0, 50)"   value=''  style='BACKGROUND:#CCC;padding:4px;' maxlength='5'>
 <input type='hidden' name='subjects' value='<?php echo $subject;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='c105[]' value='<?php echo $term;?>' size='8' style='BACKGROUND:#CCC;' maxlength='2'>
 
 <input type='hidden' name='terms' value='<?php echo $term;?>' size='8' style='BACKGROUND:#CCC;' maxlength='2'>
 <input type='hidden' name='classess' value='<?php echo $last_name;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='db1s' value='<?php echo $take;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 
 <input type='hidden' name='coef[]' value='<?php echo $coefx;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='coefs' value='<?php echo $coefx;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='subject' value='<?php echo $subject;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='teacher' value='<?php echo $fish;?>' size='8' style='BACKGROUND:#CCC;' maxlength='4'>
 <input type='hidden' name='classes' value="<?php echo $last_name;?>" style='BACKGROUND:#CCC;' maxlength='4'>
 
</td>
</tr>

<?php
 }
 ?>
 <tr>
	<td>
	
	</td>
	
	<td>
	
	</td>
	
	<td>
	
	</td>
	
	<td>
	
	</td>
	
	<td>
		<input type='submit' name='submit' value='Submit'
		style="padding: 10px; width 70%; margin: auto; "
		>
		
		</form>
	</td>
 </tr>
 
 <table>
 <?php

?>






  


</div>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	</div>
	
	
	</div>
	</body>
	</html>