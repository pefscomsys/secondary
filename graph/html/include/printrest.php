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
require('functiont.php');
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
?><?php
$roll=$_GET["roll"];
$query="select * from balancesheet where recid='$roll' ";
$result=mysql_query($query);$i=1;
		 while ($row = mysql_fetch_array($result)) {
		 
		 $take=$row["db1"];
		 ?><?php } ?><html>
<head><TITLE>result slip</TITLE>
 <link rel="stylesheet" href="test.css" 
type="text/css">
<style>
   body {size:A4 Landscape;
        margin: 0;
        padding: 0;
        font: 25pt;
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 1450px;
        min-height: 29.7cm;
        padding: 2cm;
        margin: 1cm auto;
        background: white;
    }
    .subpage {
        padding: 1cm;
        border: 5px black solid;
        height: 237mm;
        outline: 2cm #000 solid;
    }
    
    @page {
        size: A4 landscape;
        margin: 0;
    }
    @media print {
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }

</style>
</head>

<body onload="window.print();"><div style=" width:800px; height:400px; margin:auto;MARGIN-TOP:35PX;">

<div style="float:left; width:800px; height:100px; border-radius:5px 5px 5px 5px; border:1px solid #000;font-size:21px; text-align:center;">
<B>INTER COMPREHENSIVE HIGH SCHOOL BUEA</B>
<BR>Approval Ref. Ministerial Order No. JI/27/MINEDUC/DEP/SCAFES/BGS of 15th January 1991 Registration No: 6CC2WAD110875091 



<?php 
if(empty($take)){
	?>
	
<?php }elseif($take>"2016/2017"){
	?>
<sup>&copykc</sup>


<?php } ?>






</div>

<?php
$roll=$_GET["roll"];
$query="select * from balancesheet where recid='$roll' and db1='$take'";
$result=mysql_query($query);$i=1;
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<div style="float:left; width:800px; height:25px; margin-top:20px;">

<div style="float:left; width:350px; height:25px; border-radius:5px 5px 5px 5px; border:1px solid #000;background:#ccc;">
RECEIPT NO: <?PHP echo $rtt=$row["recid"];?>
</div>


<div style="float:left; width:250px; height:25px;">
</div>

<div style="float:left; width:150px; height:25px; border-radius:5px 5px 5px 5px; border:1px solid #000;background:#ccc;">
<?PHP echo $dates=$row['date'];?>
</div>




</div>



<?php  $mats=$row['fname'];
$m5=$row['xclass'];
$dates=$row['date'];
$dates=$row['date'];
$a1=$row['amount'];$a2=$row['amount2'];$a1=$row['amount'];$a3=$row['folk'];$a4=$row['scholarship'];
$tols=($a1+$a2+$a3+$a4);
?>
<div style="float:left; width:800px;margin-top:20px; height:100px;">

<?php 
if(empty($take)){
	?>
	
<?php }elseif($take>"2016/2017"){
	?><div style="float:left; width:110px; height:25px;">
ACC. YEAR:
</div>
<div style="float:left; width:600px; height:25px;text-transform:uppercase; border-bottom:1px solid #000;">
<i><?php 
echo $take;  ?></i>
 
</div>

<?php } ?>



<div style="float:left; width:110px; height:25px;">
NAME (S):
</div>



<div style="float:left; width:600px; height:25px;text-transform:uppercase; border-bottom:1px solid #000;">
<i><?php 
$qry = mysql_query("select fname as total
from courses where matricule='$mats' and  db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
 echo $savee4=$row['total'];  ?></i>
 
</div>


<div style="float:left; width:110px; height:25px;">
MATRICULE
</div>



<div style="float:left; width:150px; height:25px; border-bottom:1px solid #000;">
<?php echo $mats;?>
</div>




<div style="float:left; width:130px; height:25px;">
CLASS/SERIES
</div>



<div style="float:left; width:340px; height:25px; border-bottom:1px solid #000;">
<?php echo $m5;?>
</div>


<div style="float:left; width:800px; height:130px;margin-top:20px; border-radius:5px 5px 5px 5px; border:1px solid #000;font-size:21px; text-align:center;">

<div style="float:left; width:60px; height:30px;background:#ccc;border-right:1px solid #000;">
SN
</div><div style="float:left; width:340px; height:30px;background:#ccc;border-right:1px solid #000;">
Description
</div>

<div style="float:left; width:140px; height:30px;background:#ccc;border-right:1px solid #000;">
Expected Amt
</div>


<div style="float:left; width:130px; height:30px;background:#ccc;border-right:1px solid #000;">
Amt Paid.
</div>


<div style="float:left; width:125px; height:30px;background:#ccc;">
Balance
</div>



 <?php
 
 
 
$qry = mysql_query("select levels as total
from courses where matricule='$mats'  and levels='$m5'and  db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
 $levels=$row['total']; 




 
$qry = mysql_query("select expected_amount as total
from historic where matricule='$mats'  and amountpaid='$m5'and  oldb='$take'  "); 
$row = mysql_fetch_assoc($qry); 
 $exps=$row['total']; 




$qry = mysql_query("select SUM(items) as total
from boption where ids='$savee4'and tick='1'  and db1='$take' "); 
$row = mysql_fetch_assoc($qry); 
$pee=$row['total'];

$exp=($exps-$pee);

$tol=($tols-$pee);






 ?>

<div style="float:left; width:60px;font-size:14px; height:30px;border-right:1px solid #000;border-bottom:1px solid #000;">
<?PHP echo $i++;?>
</div><div style="float:left; width:340px;font-size:14px; height:30px;border-right:1px solid #000;border-bottom:1px solid #000;">
SCHOOL FEES & REGISTRATION
</div>

<div style="float:left; width:140px;font-size:14px; height:30px;border-right:1px solid #000;border-bottom:1px solid #000;">

<?php

		  
$number  =$exp;

// english notation (default)
$english_format_number = number_format($number);
// 1,235

?><?PHP 









		  
echo number_format($number, 0, '.', ',');?>


</div>


<div style="float:left; width:130px; font-size:14px;height:30px;border-right:1px solid #000;border-bottom:1px solid #000;">
<?php

		  
$number  =$tol;

// english notation (default)
$english_format_number = number_format($number);
// 1,235

?><?PHP 









		  
echo number_format($number, 0, '.', ',');?>
</div>


<div style="float:left; width:125px;font-size:14px; height:30px;border-bottom:1px solid #000;">
<?PHP $rt=($exp-$tol);?>

<?php

		  
$number  =$rt;

// english notation (default)
$english_format_number = number_format($number);
// 1,235

?><?PHP 









		  
echo number_format($number, 0, '.', ',');?>
</div>



</div>

</div></div>
<div style="margin:auto; width:800px; height:25px; margin-top:-10px;text-transform:uppercase;">In Word: <b><i><?php




 echo convert_number_to_words($tol);


?> Francs C.F.A</i></b>
</div>
</div>
<div style="margin:auto; width:800px; height:25px; margin-top:5px;">
<div style="float:left; width:590px; height:25px;">

</div>
<div style="float:left; width:200px; height:25px; border-radius:5px 5px 5px 5px; border:1px solid #000;background:#ccc;">
<b><i> =

<?php

		  
$number  =$tol;

// english notation (default)
$english_format_number = number_format($number);
// 1,235

?><?PHP 







$queryi="update balancesheet set g='1' where fname='$mats'   ";
mysql_query ($queryi) or die ('could not updated:'.mysql_error());



		  
echo number_format($number, 0, '.', ',');?>







 Francs C.F.A</i></b>
</div>





</div>


</div>

<div style="margin:auto; width:800px; height:55px; margin-top:15px;">

<div style="float:left; width:200px; height:25px;">
<div style="float:left; width:200px; height:25px;">
_________________________________________
</div>
<div style="float:left; width:200px; height:10px;"><i>Signature of Receiver</i>
</div>
</div>


<div style="float:left; width:250px; height:25px;">
</DIV>





<div style="float:left; width:200px; height:25px;">
<div style="float:left; width:200px; height:25px;">
_________________________________________
</div>
<div style="float:left; width:200px; height:10px;"><i>Signature of client</i>
</div>
</div>

</div>





















<?php
$date=date("j/m/Y");

$query="select * from boption where ids='$savee4' and db1='$take'  and tick='1' AND date='$date'";
$result=mysql_query($query);$i=1;
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<div style=" width:800px; height:400px; margin:auto;MARGIN-TOP:45PX;">

<div style="float:left; width:800px; height:100px; border-radius:5px 5px 5px 5px; border:1px solid #000;font-size:21px; text-align:center;">
<B>INTER COMPREHENSIVE HIGH SCHOOL BUEA</B>
<BR>Approval Ref. Ministerial Order No. JI/27/MINEDUC/DEP/SCAFES/BGS of 15th January 1991 Registration No: 6CC2WAD110875091

</div>
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
$query="select * from balancesheet where recid='$roll' and db1='$take'";
$result=mysql_query($query);$i=1;
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<div style="float:left; width:800px; height:25px; margin-top:20px;">

<div style="float:left; width:350px; height:25px; border-radius:5px 5px 5px 5px; border:1px solid #000;background:#ccc;">
RECEIPT NO: <?PHP echo $row["recid"];?>
</div>





</div>



<?php  $mats=$row['fname'];
$m5=$row['xclass'];
$dates=$row['date'];
$dates=$row['date'];
$a1=$row['amount'];$a2=$row['amount2'];$a1=$row['amount'];$a3=$row['folk'];$a4=$row['scholarship'];
$tol=($a1+$a2+$a3+$a4);


?>
<div style="float:left; width:800px;margin-top:20px; height:100px;">

<div style="float:left; width:110px; height:25px;">
ACC. YEAR:
</div>



<div style="float:left; width:600px; height:25px;text-transform:uppercase; border-bottom:1px solid #000;">
<i><?php 
ECHO $take;  ?></i>
 
</div>


<div style="float:left; width:110px; height:25px;">
NAME (S):
</div>



<div style="float:left; width:600px; height:25px;text-transform:uppercase; border-bottom:1px solid #000;">
<i><?php 
$qry = mysql_query("select fname as total
from courses where matricule='$mats' and  db1='$take'  "); 
$row = mysql_fetch_assoc($qry); 
 echo $savee4=$row['total'];  ?></i>
 
</div>


<div style="float:left; width:110px; height:25px;">
MATRICULE
</div>



<div style="float:left; width:150px; height:25px; border-bottom:1px solid #000;">
<?php echo $mats;?>
</div>




<div style="float:left; width:130px; height:25px;">
CLASS/SERIES
</div>



<div style="float:left; width:340px; height:25px; border-bottom:1px solid #000;">
<?php echo $m5;?>
</div>

<h4>OPTIONS PAID FOR </H4>

<?php } 
?>


<div style="margin:auto; width:800px;margin-top:10px; height:70PX; border-radius:5px 5px 5px 5px; border:1px solid #000;">


<?php
$date=date("j/m/Y");

$query="select * from boption where ids='$savee4' and db1='$take'  and tick='1'  AND date='$date'";
$result=mysql_query($query);$i=1;
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<div style="float:left; width:30px; height:25px;">
</div>

<div style="float:left; width:80px; height:25px;">

</div>
<div style="float:left; width:50px; height:25px;">
<?php echo $row["price"];?>,
</div>
<?PHP } ?>
</div>


<div style="margin:auto; width:800px;margin-top:10px; height:30PX; ">
TOTAL:<b> <u> =<?php 



$qry = mysql_query("select sum(items) as total
from boption where ids='$savee4' and  db1='$take' and tick='1'  "); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row['total'];  

?>
<?php
	  

$number  =$savep4;

// english notation (default)
$english_format_number = number_format($number);
// 1,235

?><?PHP 








		  
echo number_format($number, 0, '.', ',');?>







 Francs C.F.A </u></b>
</div>
<div style="margin:auto; width:800px; height:55px; margin-top:5px;">

<div style="float:left; width:200px; height:25px;">
<div style="float:left; width:200px; height:25px;">
_________________________________________
</div>
<div style="float:left; width:200px; height:10px;"><i>Signature of Receiver</i>
</div>
</div>




<div style="float:left; width:250px; height:25px;">
</DIV>





<div style="float:left; width:200px; height:25px;">
<div style="float:left; width:200px; height:25px;">
_________________________________________
</div>
<div style="float:left; width:200px; height:10px;"><i>Signature of client</i>
</div>
</div>



<?php
}

?>
</div>

		 <div style='float:left;width:250px;height:25px;  margin-top:-855px;color:$989898;margin-left:504px;'>
<?php


$ag="10015";
$rs=$rtt+$ag;
 $matricule=$rs;
$default_value = array();
$default_value['filetype'] = 'PNG';
$default_value['dpi'] = 72;
$default_value['scale'] = isset($defaultScale) ? $defaultScale : 1;
$default_value['rotation'] = 0;
$default_value['font_family'] = 'Arial.ttf';
$default_value['font_size'] = 14;
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
</div>


</div>


<div style="float:left; color:;margin-top:-57px;margin-left:10px; width:80px; height:25px;">

</div>


</div>
</div>



</div>





















			</div>
			</div>	</div>

</div>





</div>



</div>


</div>



			</div>
			</div>	</div>


			</div>
			</div>	</div>

			</div>
			</div>	</div>
			</div>	</div>
        </form>
<?php } 





?>
