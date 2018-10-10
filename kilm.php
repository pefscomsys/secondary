<?php 
include 'dbcs.php';
?>
<?php



 $sql = "SELECT fname,matricule,sex,c101,c102 FROM resit where levels='200' and db1='2014/2015'";
$result = mysql_query($sql);

while($obj = mysql_fetch_object($result)) {
$var[] = $obj;
}

echo '{"users":'.json_encode($var).'}';
?>
<p style="text-align: justify;">