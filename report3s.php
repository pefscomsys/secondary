
<?php
include 'dbc.php';

ini_set('max_execution_time', 300000); //300 seconds = 5 minutes
?>

<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $take=$row[1];

?>
<html>
<style>
   body {
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 12pt;
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 21cm;
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
        size: A4;
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

<body>




<?php

 $classes=$_POST["name1"];
 ?>




<?php

 $classes=$_POST["name1"];
 
 $classs=$_POST["name1"];
$roll=$_GET["1"];
$query="select * from closing where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $datss=$row[1];

?>

<?php } ?>




<?php } ?>
<?php
 $classes=$_POST["name1"];

		 ?>
		 
		 
		 
		 <?php 
		 
		 $qry = mysql_query("select recs as total
from classes where class='$classes'  "); 
$row = mysql_fetch_assoc($qry); 
$ss=$row['total'];
		 if(empty($ss)){
			 
			 
			 
			 
		 }elseif($ss>="2" && $ss<="2"){
			
			require 'inds3f2.php';
			 
			 
		 }
			 
			 elseif($ss>="1" && $ss<="1"){
			
			require 'inds3f1.php';
			 
			 
		 }
			 
			 
			 
			 
			 
		 
		 
		 
		 
		 
		 
		 
		 
		 ?>
		 
		 
		 