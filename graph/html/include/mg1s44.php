<?php
ini_set('max_execution_time', 300000); //300 seconds = 5 minutes
?>
<?php
define('IN_CB', true);

if (version_compare(phpversion(), '5.0.0', '>=') !== true) {
    exit('Sorry, but you have to run this script with PHP5... You currently have the version <b>' . phpversion() . '</b>.');
}

if (!function_exists('imagecreate')) {
    exit('Sorry, make sure you have the GD extension installed before running this script.');
}

include_once('function.php');

// FileName & Extension
$department=$_POST['class'];

$levels=$_POST['levels'];
$system_temp_array = explode('/', $_SERVER['PHP_SELF']);
$filename = $system_temp_array[count($system_temp_array) - 1];
$system_temp_array2 = explode('.', $filename);
$availableBarcodes = listBarcodes();
$barcodeName = findValueFromKey($availableBarcodes, $filename);
$code = $system_temp_array2[0];

// Check if the code is valid
if (file_exists('config' . DIRECTORY_SEPARATOR . $code . '.php')) {
    include_once('config' . DIRECTORY_SEPARATOR . $code . '.php');
}
?>
<?php
include 'dbc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>STUDENT ID CARD</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link type="text/css" rel="stylesheet" href="style.css" />
        <link rel="shortcut icon" href="pef.png" />
        <script src="jquery-1.7.2.min.js"></script>
        <script src="barcode.js"></script>
    </head>
    <body ">
<?php
$roll=$_GET["1"];
$query="select * from school where roll='5'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $ji16= $row[1];

?>
<?php }?>
 <?php
$roll=$_GET["1"];
$query="select * from school where roll='4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $ji1= $row[1];

$ji12= $row[2];

?>
<?php }?>
 <?php
$roll=$_GET["1"];
$query="select * from school where roll='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php 


$ji2= $row[2];

?>
<?php }?>

<?php
$roll=$_GET["1"];
$query="select * from classes where  roll='4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off1in=$row['class'];


?><?php } ?>

 <?php
 
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php   $takes=$row[1];?><br>

<?php  $takes2=$row[2];?>
</b>

<br>
 <?php

$levels=$_POST["levels"];

$class=$_POST["class"];
?>
<?php } ?>
 <?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $take=$row[1];



?>
		 

<?php } ?>
<?php
$levels=$_POST["levels"];
$table='courses';
$class=$_POST["class"];
$roll=$_GET["1"];
$query="select * from $table where  db1='$take'  and levels>=400 && levels<=400 and  departmet='$off1in' order by departmet asc";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) { 
		 
		  $flag=1;
		  ?>


<HTML>
<HEAD>
<title>STUDENT ID CARD</title>
<style>
#pretcon{float:left;margin-left:30px;height:350px;width:493px;margin-top:1px;}
#container{float:left;
width:500px; height:300px;}

#containery{float:left;
width:500px; height:380px;}


#container2{float:left;margin-left:0px;
width:470px; height:200px;}


#container3{float:left;
width:500px; height:100px;}



#container4{float:left;
width:500px; height:20px;}


#coh1{float:left;MARGIN-LEFT:20PX;
width:350px; height:25px;FONT-FAMILY:Iskoola Pota;FONT-SIZE:13px;FONT-WEIGHT:BOLD;


}



#coh2{float:left;margin-left:10px;
width:265px; height:35px;TEXT-ALIGN:CENTER;FONT-WEIGHT:BOLD;COLOR:rgb(80,10,20); FONT-SIZE:30PX;MARGIN-TOP:-15PX;}


#coh3{float:left;
width:390px; height:20px;margin-left:10px;
FONT-FAMILY:Iskoola Pota;FONT-SIZE:11px;FONT-WEIGHT:BOLD;COLOR:#1188dd;}



#container5{float:left;margin-left:-60px;
width:120px; height:80px;margin-top:22px;}

#container6{float:left;margin-left:-10px;
width:400px; height:80px;background:url(image/fishs.png);margin-top:22px;}



#container422{float:left;margin-left:1px;
width:127px; height:5px;color:#fff;font-size:13px;background:rgb(80,10,20);}

#container41{float:left;
width:100px; height:17px;}

#container42{float:left;margin-left:-27px;
width:370px; height:17px;color:#fff;font-size:13px;background:rgb(80,10,20);}
.reflected {
    position: relative;
}
.reflected:after {
    content: 'MINISTRY OF HIGHER EDUCATION';
    display: block;
    position: right;
    bottom: -.8em; /* You should change this value to fit your font */
    left: 10px;
    right: 22px;
    opacity: .9;

    /* This is how the text is flipped vertically */
    -webkit-transform: scaleY(-1,1);
    -moz-transform: scaleY(-1,1);
    -o-transform: scaleY(-1,1);
}
.mirror{
display:block;
 -webkit-transform: matrix(-1,0,0,1,0,0);
    -moz-transform: matrix(-1,0,0,1,0,0);
    -o-transform: matrix(-1,0,0,1,0,0);
}
.mirror-icon:befor{
   -webkit-transform: scaleY(-1,1);
    -moz-transform: scaleY(-1,1);
    -o-transform: scaleY(-1,1);
}









</style>
</HEAD>
<BODY>
<div style="margin:auto; width:1100px;margin-top:10px;"><div class="mirror">
<div style="float:left; width:550px; height:350px; ">
<div style="float:left; width:500px; height:280px; ">

<div style="float:left; width:500px; height:85px; ">

<div style="float:left; width:100px; height:100px; ">

<div style="float:left;margin-top:10px;MARGIN-LEFT:15PX;">
<img src="logos.png" height="70px" width="100px">
</div>
</div>
<div style="float:left; width:300px; height:100px; ">
<div style="float:left; width:300px;FONT-WEIGHT:BOLD;FONT-SIZE:15PX; height:20px;TEXT-ALIGN:CENTER; MARGIN-TOP:10PX; ">
MINISTRY OF HIGHER EDUCATION
</div>
<div style="float:left; width:300px; height:15px;TEXT-ALIGN:CENTER;color:#1188aa; MARGIN-TOP:0PX;FONT-SIZE:14PX; ">
HIGHER INSTITUTE OF MANAGEMENT STUDIES 
</div>
<div style="float:left; width:300px; font-size:18px;height:15px;TEXT-ALIGN:CENTER; MARGIN-TOP:5PX; ">
(HIMS-BUEA)
</div>













</div>



<div style="float:left; width:100px; height:100px; ">

<div style="float:left;margin-top:5px;MARGIN-LEFT:-11PX;">
<img src="bamenda.png" height="80px" width="100px">
</div>
</div>








</div>

<div style="float:left; width:500px; height:20px;BACKGROUND:#1188aa; color:#fff;font-weight:bold;letter-spacing:1px;font-size:14px;text-align:center;">
Assiduty Creativity Professionalism
</div>


<div style="float:left; width:550px; height:150px;">

<div style="float:left; width:550px; height:10px;MARGIN-TOP:5PX;color:red;text-align:center;">STUDENT IDENTITY CARD</div>
<div style="float:left; width:210px;margin-top:10px; height:170px;">
<div style="float:left; width:200px; height:140px;">
<div style="float:left; MARGIN-LEFT:20PX;">
<?php $deptt=$row['departmet'];$levels=$row['levels'];$fname=$row['fname'];$barcode=$row['barcode'];$c101=$row['c101'];
				 $mxx=$row['matricule'];
				 $mxx=$row['matricule'];
				$qry = mysql_query("select id as total
from employees where empname='$mxx'"); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row['total']; 
				
				 ?>
					
					
			<?php  $roll=$row['roll'];?>	
			
<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="170px" height="128px" style="border:3px solid #efefef;">
</div>
</div>
</div>


<div style="float:left; width:320px;margin-top:10px; height:170px;">


<div style="float:left; width:200px;background:url(load_image.php?pic_id=<?php echo $savep4;?>); height:150px;opacity:0.1;">
</div>



<div style="float:left; width:320px;margin-top:-150px; height:170px;text-align:left;">


<div style="float:left;width:110px;text-align:left;COLOR:#484848;font-size:14px; height:21px;margin-left:-8px;">DEPARTMENT: </div>


<div style="float:left;width:180px;text-align:left;COLOR:#484848;font-size:14px; height:21px;"><b>
			<?php echo $deptt;?></b> </div>
			
			

<div style="float:left;width:110px;text-align:left;COLOR:#484848;font-size:14px; height:21px;margin-left:-8px;">MATRICULE: </div>


<div style="float:left;width:180px;text-align:left;COLOR:#484848;font-size:14px; height:21px;"><b>
			<?php echo $mxx;?></b> </div>
			
			
			
			
			

<div style="float:left;width:110px;text-align:left;COLOR:#484848;font-size:14px; height:21px;margin-left:-8px;">LEVEL: </div>


<div style="float:left;width:180px;text-align:left;COLOR:#484848;font-size:14px; height:21px;"><b>
			<?php echo $levels;?></b> </div>
			
			
			

<div style="float:left;width:110px;text-align:left;COLOR:#484848;font-size:14px; height:21px;margin-left:-8px;">PROGRAMME: </div>


<div style="float:left;width:180px;text-align:left;COLOR:#484848;font-size:14px; height:21px;"><b>
			BTECH</b> </div>

			
			

<div style="float:left;width:110px;text-align:left;COLOR:#ff9999;font-size:14px; height:21px;margin-left:-8px;"><i>Valid Till</i>: </div>


<div style="float:left;width:180px;text-align:left;COLOR:#ff9999;font-size:14px; height:21px;"><b>
		10/oct/	<?php echo $c101+1;?></b> </div>

</div>

		 <div style='float:left;width:250px;'>
<div style="float:left;margin-left:-32px;margin-top:-70px;width:42px; height:42px;"><img src="image/inds.png">
<div style="float:left;width:100px; margin-left:30px;margin-top:-25px;"><img src="image/signature.png"></div></div>
</div>
		 <div style='float:left;width:250px;height:25px;  margin-top:-105px;color:$989898;margin-left:200px;'>
<?php
 $matricule=$barcode;
$default_value = array();
$default_value['filetype'] = 'PNG';
$default_value['dpi'] = 72;
$default_value['scale'] = isset($defaultScale) ? $defaultScale : 1;
$default_value['rotation'] = 90;
$default_value['font_family'] = 'Arial.ttf';
$default_value['font_size'] = 0;
$default_value['text'] = '';
$default_value['a1'] = '';
$default_value['a2'] = '';
$default_value['a3'] = '';

$filetype = isset($_POST['filetype']) ? $_POST['filetype'] : $default_value['filetype'];
$dpi = isset($_POST['dpi']) ? $_POST['dpi'] : $default_value['dpi'];
$scale = intval(isset($_POST['scale']) ? $_POST['scale'] : $default_value['scale']);
$rotation = intval(isset($_POST['rotation']) ? $_POST['rotation'] : $default_value['rotation']);
$font_family = isset($_POST['font_family']) ? $_POST['font_family'] : $default_value['font_family'];
$font_size = intval(isset($_POST['font_size']) ? $_POST['font_size'] : $default_value['font_size']);
$text = isset($_POST['text']) ? $_POST['text'] : $default_value['text'];
$text=$matricule;
registerImageKey('filetype', $filetype);
registerImageKey('dpi', $dpi);
registerImageKey('scale', $scale);
registerImageKey('rotation', $rotation);
registerImageKey('font_family', $font_family);
registerImageKey('font_size', $font_size);
registerImageKey('text', $text);

$default_value['checksum'] = '';
$checksum = isset($_POST['checksum']) ? $_POST['checksum'] : $default_value['checksum'];
registerImageKey('checksum', $checksum);
registerImageKey('code', 'BCGcode39');

$characters = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '-', '.', '&nbsp;', '$', '/', '+', '%');

?>

            <?php  getSelectHtml('type', $filename, $availableBarcodes); ?>
   
<?php getSelectHtml('filetype', $filetype, array('PNG' => 'PNG - Portable Network Graphics', 'JPEG' => 'JPEG - Joint Photographic Experts Group', 'GIF' => 'GIF - Graphics Interchange Format')); ?>
                    
                        <?php getInputTextHtml('dpi', $dpi, array('type' => 'number', 'min' => 72, 'max' => 300, 'required' => 'required')); ?> 
  <?php  getInputTextHtml('scale', $scale, array('type' => 'number', 'min' => 1, 'max' => 4, 'required' => 'required')); ?>
                    <?php  getSelectHtml('rotation', $rotation, array(180 => '180&deg; clockwise', 180 => '180&deg; clockwise', 270 => '270&deg; clockwise')); ?>
                    <?php  getSelectHtml('font_family', $font_family, listfonts('../font')); ?> <?php  getInputTextHtml('font_size', $font_size, array('type' => 'number', 'min' => 1, 'max' => 30)); ?>
                  <?php  getInputTextHtml('text', $text, array('type' => 'text', 'required' => 'required')); ?> 

        
                    <?php
                        $finalRequest = '';
                        foreach (getImageKeys() as $key => $value) {
                            $finalRequest .= '&' . $key . '=' . urlencode($value);
                        }
                        if (strlen($finalRequest) > 0) {
                            $finalRequest[0] = '?';
                        }
                    ?>
                    <div id="imageOutput">
                        <?php if ($imageKeys['text'] !== '') { ?><img src="image.php<?php echo $finalRequest; ?>" alt="Barcode Image" /><?php }
                        else { ?><?php } ?>
                    </div>
                   
</div>       </section>
          

</div>
<div  style="float:left;width:500px;background:#75d5fa; height:40px; margin-top:-18px;">
<div style="float:left; color:#fff;margin-top:0px;margin-left:40px;margin-top:3px; color:#000;text-align:left; text-transform:uppercase;">


<div style="float:left;font-size:18px;font-family:Century Gothic;color:#000;margin-left:40px; "><DIV STYLE="FLOAT:LEFT; margin-left:7px;">
<b>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; NAME : <?php echo $fname;?></b></div></div> </div>



</div>

















</div>
</div>
</div>


</div>
<?php } ?>
