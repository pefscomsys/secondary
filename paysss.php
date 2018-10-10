<?php include 'dbcs.php';
$nki=$_GET['roll'];

?><?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

<?php $take=$row[1];
?>
<?php }?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="w2ui-1.4.2.min.css" />
    <script src="jquery.min.js"></script>
    <script type="text/javascript" src="w2ui-1.4.2.min.js"></script>
</head>
<body><?php
  
  
  

  
  
  
  
  
  
  
  $qry = mysql_query("select basic	 as total
from salaryy where month='$monthp'  "); 
$row = mysql_fetch_assoc($qry); 
 echo $sst=$row['total'];
  
$mxc11ep=$sst;
if(empty($mxc11ep)){

 
 $statusfbioste="insert into salaryy";
 $end="month='".$monthp[$i]."'";
 $statusfbiostet="insert into statment";
 }
elseif($mxc11ep>''){

 $statusfbioste="update salaryy";
 

 $end="where month='".$monthp[$i]."'";
 
 $statusfbiostet="update statment";
}
elseif($mxc11e>'1' ){
  $statusfbiose=($month); 
}  
  
  
 $i = 0;
if(!empty($_POST["submit"]))
{
 foreach($_POST["id"] as $roll)
 {
  
			  mysql_query("$statusfbiostet SET
               tbasic='".$_POST['tbasic'][$i]."',
               trent='".$_POST['trent'][$i]."',
               tspecial='".$_POST['tspecial'][$i]."',
               tseniorit='".$_POST['tseniorit'][$i]."',
			   
               tgrosss='".$_POST['tgrosss'][$i]."',
               tgrosst='".$_POST['tgrosst'][$i]."',
               tnett='".$_POST['tnett'][$i]."',
                 tpit='".$_POST['tpit'][$i]."',
				 
				 
				     tlbr='".$_POST['tlbr'][$i]."',
               tcrtv='".$_POST['tcrtv'][$i]."',
                 tldt='".$_POST['tldt'][$i]."',
				 
				 
               tnsif='".$_POST['tnsif'][$i]."',
                 ttotald='".$_POST['ttotald'][$i]."',
				 
				 
               tnet='".$_POST['tnet'][$i]."',
                 day='".$_POST['tday'][$i]."',
				 
				 
                 year='".$_POST['years'][$i]."',
				 
				 
                 extra1='".$_POST['extra1'][$i]."',
				 
                 extra2='".$_POST['extra2'][$i]."',
				 
                 extra3='".$_POST['extra3'][$i]."',
				 
                 extra4='".$_POST['extra4'][$i]."',
				 
                 extra5='".$_POST['extra5'][$i]."',
				 
				 
				 
				 
               tact='".$_POST['tact'][$i]."',
			   
             $end
               ");  
			 
 
  
			  mysql_query("update headers SET
               description='".$_POST['description'][$i]."'
              
				 where roll='$rolss'
         
               ");  
			
			
 
  mysql_query("  $statusfbioste SET
               matricule='".$_POST['matricule'][$i]."',
			   

               ecc='".$_POST['ecc'][$i]."',
               basic='".$_POST['basic'][$i]."',
               rent='".$_POST['rent'][$i]."',
               special='".$_POST['special'][$i]."',
               seniorit='".$_POST['seniorit'][$i]."',
			   
               grosss='".$_POST['grosss'][$i]."',
               grosst='".$_POST['grosst'][$i]."',
               nett='".$_POST['nett'][$i]."',
                 pit='".$_POST['pit'][$i]."',
				 
				 
				     lbr='".$_POST['lbr'][$i]."',
               crtv='".$_POST['crtv'][$i]."',
                 ldt='".$_POST['ldt'][$i]."',
				 
				 
               nsif='".$_POST['nsif'][$i]."',
                 totald='".$_POST['totald'][$i]."',
				 
				 
               net='".$_POST['net'][$i]."',
                 day='".$_POST['day'][$i]."',
				 
				 
                 year='".$_POST['yearss'][$i]."',
				 
				 
                cm='".$_POST['cm'][$i]."',
				 
                 extra1='".$_POST['extra1'][$i]."',
				 
                 extra2='".$_POST['extra2'][$i]."',
				 
                 extra3='".$_POST['extra3'][$i]."',
				 
                 extra4='".$_POST['extra4'][$i]."',
				 
                 extra5='".$_POST['extra5'][$i]."',
				 
				 
				 
				 
				 
				 
				 
               act='".$_POST['act'][$i]."',
			   $end
               ");
			   
			   
			   
			   
			   
			        mysql_query("update bank SET
              
               amountpaid='".$_POST['net'][$i]."',
              
                 months='".$monthp[$i]."',
				 
				 
				     years='".$_POST['yearss'][$i]."'
              
			   
            where 
               matricule='".$_POST['matricule'][$i]."'
               "); 
			  
			   
			   
			  mysql_query("update headers SET
               description='".$_POST['description'][$i]."'
              
				 where roll='".$_POST['rollss'][$i]."'
         
               ");  
			
			   
			   
			   
			   
			   
			   
			   
			   
			   
			   
  $i++;

               

  }

 

echo "<script>alert('Data Base Updated Successful!');</script>";

 echo  $statusf="<meta http-equiv='refresh' content='0; url=xx.php'>";
 exit;

 } 
 
 
?>
	<table  border="" style="width:1850px;border-collapse: collapse; border-bottom-width: 0px; border-right-width: 0px;color:#000;">
  <tr style="background-color: #EEEEEE;">
<?php 
 echo "<form action='#' method='post'>
       ";?><?php
 $ii=1;
 $sql = "SELECT * FROM headers order by roll ASC";

$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $tm_array[] = $row["tm"];
 $description_array[] = $row["description"];
 $tl_array[] = $row["tl"];
 
 }
?>

<?php
for($i=0;$i<count($id_array);$i++)
{
 $rollss = $id_array[$i];
 $tm = $tm_array[$i];$description = $description_array[$i];$tl = $tl_array[$i];
?>
<input type="hidden" size="4" name="rollss[]" value="<?PHP echo $rollss;?>">

  <?php } ?>
  </tr></table>
  
	<table  border="" style="width:1850px;border-collapse: collapse; border-bottom-width: 0px; border-right-width: 0px;color:#000;">
  <tr>
 
    <td>
	
	<input type="hidden" name="id[]"value="<?php echo $roll;?>">
	SN</td>
    <td style="float:left;width:200px;background:#fff;">Fname</td>
  
    <td style="float:left;width:50px;background:#fff;">Matricule
	</td>

    <td style="float:left;width:50px;background:#fff;">House
	</td>
    <td style="float:left;width:50px;background:#fff;">ECC</td>
      <td style="float:left;width:50px;background:#fff;text-align:right;">Allowance</td>
    <td style="float:left;width:50px;background:#fff;text-align:right;">Basic</td>
      <td style="float:left;width:50px;background:#fff;text-align:right;">Rent</td>
 
       <td style="float:left;width:50px;background:#fff;text-align:right;">Special</td>
   <td style="float:left;width:50px;background:#fff;text-align:right;">Seniority</td>
 
   <td style="float:left;width:50px;background:#fff;text-align:right;">Gross</td>
 
 <td style="float:left;width:50px;background:#fff;text-align:right;">GrossT</td>
 
 <td style="float:left;width:50px;background:#fff;text-align:right;">NetT</td>
 
 
 
   <td style="float:left;width:50px;background:#fff;text-align:right;">NETS</td>
 
 
 
 
 <td style="float:left;width:50px;background:#fff;text-align:right;">PIT</td>
 
 <td style="float:left;width:50px;background:#fff;text-align:right;">ACT</td>
 
 
 <td style="float:left;width:50px;background:#fff;text-align:right;">LBR</td>
 
 <td style="float:left;width:50px;background:#fff;text-align:right;">CRTV</td>
 <td style="float:left;width:50px;background:#fff;text-align:right;">LDT</td>
 
 
 
 <td style="float:left;width:50px;background:#fff;text-align:right;">NSIF</td>
 
 
 
 <td style="float:left;width:50px;background:#fff;text-align:right;">TOTALD</td>
 
 
   <td style="float:left;width:50px;background:#fff;text-align:right;">Extra</td>
 
 
   <td style="float:left;width:50px;background:#fff;text-align:right;">Extra</td>
 
   <td style="float:left;width:50px;background:#fff;text-align:right;">Extra</td>
 
   <td style="float:left;width:50px;background:#fff;text-align:right;">Extra</td>
  
 <td style="float:left;width:50px;background:#fff;text-align:right;">

 Salary
 </td>



  </tr>
  
  <?php
 $ii=1;
 $sql = "SELECT * FROM headers order by roll ASC";

$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $tm_array[] = $row["tm"];
 $description_array[] = $row["description"];
 $tl_array[] = $row["tl"];
 
 }

for($i=0;$i<count($id_array);$i++)
{
 $rollss = $id_array[$i];
 $tm = $tm_array[$i];$description = $description_array[$i];$tl = $tl_array[$i];
?>
<?php
 $ii=1;
 $sql = "SELECT * FROM salary order by basic DESC";

$results = mysql_query($sql);
while($row = mysql_fetch_assoc($results))
{
 $id_array[] = $row["roll"];
 $ecc_array[] = $row["ecc"];
 $matricule_array[] = $row["matricule"];
 $basic_array[] = $row["basic"];
 
 $allowa_array[] = $row["allowa"];
 $rent_array[] = $row["rent"];
 
 $salary_array[] = $row["salary"];
 $special_array[] = $row["special"];
 $seniorit_array[] = $row["seniorit"];
 $grosss_array[] = $row["grosss"];
 $grosst_array[] = $row["grosst"];
 
 $nett_array[] = $row["nett"];
 $pit_array[] = $row["pit"];
 
 
 $cm_array[] = $row["cm"];
 
 $house_array[] = $row["house"];
 $act_array[] = $row["act"];
 
 $lbr_array[] = $row["lbr"];
 
 $crtv_array[] = $row["crtv"];
 
 $ldt_array[] = $row["ldt"];
 
 $nsif_array[] = $row["nsif"];
 
 $extra1_array[] = $row["extra1"];
 $extra2_array[] = $row["extra2"];
 $extra3_array[] = $row["extra3"];
 
 $extra4_array[] = $row["extra4"];
 $extra5_array[] = $row["extra5"];
 $totald_array[] = $row["totald"];
 }

for($i=0;$i<count($id_array);$i++)
{
 $roll = $id_array[$i];
 $ecc = $ecc_array[$i];$totald = $totald_array[$i];$nsif = $nsif_array[$i];$ldt = $ldt_array[$i];$crtv = $crtv_array[$i];$lbr = $lbr_array[$i];$act = $act_array[$i]; $pit = $pit_array[$i];$nett = $nett_array[$i];
 $matricule = $matricule_array[$i];
 $basic = $basic_array[$i]; $house = $house_array[$i];
 $rent= $rent_array[$i]; $cm= $cm_array[$i];
 $special = $special_array[$i];
 $seniorit = $seniorit_array[$i];
 $grosss = $grosss_array[$i];
 
 $allowa = $allowa_array[$i];
 $grosst = $grosst_array[$i];
 $extra1 = $extra1_array[$i];
 $extra2 = $extra2_array[$i];
 $extra3 = $extra3_array[$i];
 $extra4 = $extra4_array[$i];
 
 $extra5 = $extra5_array[$i];
?>
<tr>
 
    <td>
	
	<input type="hidden" name="id[]"value="<?php echo $roll;?>">
	
	<?php echo $ii++;?></td>
    <td style="float:left;width:200px;background:#fff;">
	<input type="text" size="25"readonly='readonly'name="fname[]"style="text-transform:uppercase;"value="<?PHP
$qry = mysql_query("select  fname	 as total
from employer where matricule='$matricule'  "); 
$row = mysql_fetch_assoc($qry); 
echo $s=$row['total'];?>"></td>
  
    <td style="float:left;width:50px;background:#fff;">
	<input type="text" size="8" name="matricule[]"  value="<?php echo $matricule;?>">
	</td>

    <td style="float:left;width:50px;background:#fff;">
	<input type="text" size="3"  name="nsifs[]"  value="<?PHP
$qry = mysql_query("select  extra4	 as total
from salary where matricule='$matricule'  "); 
$row = mysql_fetch_assoc($qry); 
echo $s=$row['total'];?>">
	</td>
    <td style="float:left;width:50px;background:#fff;"><input type="text" size="3" name="ecc[]" value="<?php echo $ecc;?>"></td>
      <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="text" size="4" name="allowa[]" value="<?php echo $allowa;?>"></td>
    <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="text" size="4" name="basic[]" value="<?php echo $basic;?>"></td>
      <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="text" size="4" name="rent[]" value="<?PHP

	
	  
	  $qry = mysql_query("select  formula	 as total
from formula where mpos='1'  "); 
$row = mysql_fetch_assoc($qry); 
  $ss=$row['total'];
 
echo $rent=((($basic+$allowa)*$ss)/100);




$update="update salary set rent='$rent' where matricule='$matricule'";
MYSQL_QUERY($update)or die ('could not updated:'.mysql_error());

 ?>"></td>
 
       <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="text" size="4" name="house[]" value="<?PHP

	
 
echo $house;




$update="update salary set house='$house' where matricule='$matricule'";
MYSQL_QUERY($update)or die ('could not updated:'.mysql_error());

 ?>"></td>
   <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="text" size="4" name="special[]" value="<?PHP
$qry = mysql_query("select  formula	 as total
from formula where mpos='2'  "); 
$row = mysql_fetch_assoc($qry); 
  $ss=$row['total'];
 
echo $special=((($basic+$allowa)*$ss)/100);


$update="update salary set special='$special' where matricule='$matricule'";
MYSQL_QUERY($update)or die ('could not updated:'.mysql_error());

 ?>"></td>
 
   <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="text" size="4" name="seniorit[]" value="<?PHP
$qry = mysql_query("select seniorit as total FROM salary where matricule='$matricule'  "); 
$row = mysql_fetch_assoc($qry); 
 $sty=$row['total'];
 
echo $seniority=((($sty)));


$update="update salary set seniorit='$seniority' where matricule='$matricule'";
MYSQL_QUERY($update)or die ('could not updated:'.mysql_error());

 ?>"></td>
 
 <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="text" size="4" name="grosss[]" value="<?PHP
$ttms=($basic+$rent+$special+$seniority+$allowa+$house);


printf("%01.0f",$ttm=($ttms));
$update="update salary set grosss='$ttm' where matricule='$matricule'";
MYSQL_QUERY($update)or die ('could not updated:'.mysql_error());
 ?>"></td>
 
 <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="text" size="6" name="grosst[]" value="<?PHP

 $qry = mysql_query("select  formula	 as total
from formula where mpos='5'  "); 
$row = mysql_fetch_assoc($qry); 
  $nj=$row['total'];
 $jms=((((((($basic+$allowa+$house)/100)*$nj)+$special+$seniority+$basic+$allowa+$house))));

printf("%01.0f",$jm=($jms));
$update="update salary set grosst='$jm' where matricule='$matricule'";
MYSQL_QUERY($update)or die ('could not updated:'.mysql_error());
 ?>"></td>
 
 
 
   <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="text" size="3" name="nett[]" value="<?PHP
$qry = mysql_query("select  formula	 as total
from formula where mpos='6'  "); 
$row = mysql_fetch_assoc($qry); 
  $ss=$row['total'];
 
 $netts=((($jm)*$ss)/100);

printf("%01.0f",$nett=($netts));
$update="update salary set nett='$nett' where matricule='$matricule'";
MYSQL_QUERY($update)or die ('could not updated:'.mysql_error());
 ?>"></td>
 
 
 
 
 <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="text" size="3" name="pit[]" value="<?PHP

 
echo $pit;
 ?>"></td>
 
 <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="text" size="3" name="act[]" value="<?PHP

 
echo $act;
 ?>"></td>
 
 
 <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="text" size="3" name="lbr[]" value="<?PHP

 
echo $lbr;
 ?>"></td>
 
 <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="text" size="3" name="crtv[]" value="<?PHP

 
echo $crtv;
 ?>"></td>
 <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="text" size="3" name="ldt[]" value="<?PHP

 
echo $ldt;
 ?>"></td>
 
 
 
 <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="text" size="3" name="nsif[]" value="<?PHP

 
echo $nsif;
 ?>"></td>
 
 
 
 <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="text" size="3" name="totald[]" value="<?PHP

 
 $month=date('m');
$mxc11e=$month;

if(empty($mxc11e)){

 
 $statusfbiose='';
 }
elseif($mxc11e>='1' &&  $mxc11e<='1'){
  $statusfbiose="13"; 
}
elseif($mxc11e>'1' ){
  $statusfbiose=($month); 
}
 $months=($statusfbiose-1);

 
$qry = mysql_query("select  amount	 as total
from penalty where  matricule='$matricule' and month='$months'  "); 
$row = mysql_fetch_assoc($qry); 
  $extra4=$row['total'];
echo $totald=(($nsif+$ldt+$lbr+$crtv+$act+$pit+$extra4));

$update="update salary set totald='$totald' where matricule='$matricule'";
MYSQL_QUERY($update)or die ('could not updated:'.mysql_error());
 ?>"></td>
 
 
   <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="text" size="3" name="extra1[]" value="<?PHP
$qry = mysql_query("select  formula	 as total
from formula where mpos='11'  "); 
$row = mysql_fetch_assoc($qry); 
  $s11=$row['total'];
 
 $extra1=((($basic)*$s11)/100);

printf("%01.0f",$nett=($extra1));
$update="update salary set extra1='$extra1' where matricule='$matricule'";
MYSQL_QUERY($update)or die ('could not updated:'.mysql_error());
 ?>"></td>
 
 
   <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="text" size="3" name="extra2[]" value="<?PHP
$qry = mysql_query("select  formula	 as total
from formula where mpos='12'  "); 
$row = mysql_fetch_assoc($qry); 
  $s12=$row['total'];
 
 $extra2=((($basic)*$s12)/100);

printf("%01.0f",$nett=($extra2));
$update="update salary set extra2='$extra2' where matricule='$matricule'";
MYSQL_QUERY($update)or die ('could not updated:'.mysql_error());
 ?>"></td>
 
   <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="text" size="3" name="extra3[]" value="<?PHP
$qry = mysql_query("select  formula	 as total
from formula where mpos='13'  "); 
$row = mysql_fetch_assoc($qry); 
  $s13=$row['total'];
 
 $extra3=((($basic)*$s13)/100);

printf("%01.0f",$nett=($extra3));
$update="update salary set extra3='$extra3' where matricule='$matricule'";
MYSQL_QUERY($update)or die ('could not updated:'.mysql_error());
 ?>"></td>
 
   <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="text" size="3" name="extra4[]" value="<?php
   $month=date('m');
$mxc11e=$month;

if(empty($mxc11e)){

 
 $statusfbiose='';
 }
elseif($mxc11e>='1' &&  $mxc11e<='1'){
  $statusfbiose="13"; 
}
elseif($mxc11e>'1' ){
  $statusfbiose=($month); 
}
 $months=($statusfbiose-1);

 
$qry = mysql_query("select  amount	 as total
from penalty where  matricule='$matricule' and month='$months'  "); 
$row = mysql_fetch_assoc($qry); 
  echo $extra4=$row['total'];
 


$update="update salary set extra4='$extra4' where matricule='$matricule'";
MYSQL_QUERY($update)or die ('could not updated:'.mysql_error());
 ?>"></td>
  
 <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="text" size="3" name="net[]" value="<?PHP

 
echo $totalds=(($jm+$extra1+$extra2+$extra3)-$totald);

$update="update salary set net='$totalds' where matricule='$matricule'";
MYSQL_QUERY($update)or die ('could not updated:'.mysql_error());
 ?>"></td>
 
 
 
 <input type="hidden" size="3" name="cm[]" value="<?PHP

 
echo $cm;

 ?>">
 
  
 
 <input type="hidden" size="3" name="day[]" value="<?php
echo $day=date('j');

$update="update salary set day='$day' where matricule='$matricule'";
MYSQL_QUERY($update)or die ('could not updated:'.mysql_error());
?>">
 
 
 
 <input type="hidden" size="3" name="yearss[]" value="<?php
echo $year=date('Y');

$update="update salary set year='$year' where matricule='$matricule'";
MYSQL_QUERY($update)or die ('could not updated:'.mysql_error());
?>"> 
 
 <input type="hidden" size="3" name="monthsp" value="<?php
$month=date('m');
$mxc11e=$month;

if(empty($mxc11e)){

 
 $statusfbiose='';
 }
elseif($mxc11e>='1' &&  $mxc11e<='1'){
  $statusfbiose="13"; 
}
elseif($mxc11e>'1' ){
  $statusfbiose=($month); 
}
echo $months=($statusfbiose-1);

?>"><input type="hidden" size="3" name="xxroll[]" value="<?PHP
$qry = mysql_query("select  id	 as total
from bank where matricule='$matricule'  and fname>''"); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];
 ?>">
 <input type="hidden" size="3" name="months[]" value="<?php
$month=date('m');
$mxc11e=$month;

if(empty($mxc11e)){

 
 $statusfbiose='';
 }
elseif($mxc11e>='1' &&  $mxc11e<='1'){
  $statusfbiose="13"; 
}
elseif($mxc11e>'1' ){
  $statusfbiose=($month); 
}
echo $months=($statusfbiose-1);

$update="update salary set month='$months' where matricule='$matricule'";
MYSQL_QUERY($update)or die ('could not updated:'.mysql_error());
?>">
 
 



  </tr><?php
 }
 

 ?>
<table  border="" style="width:1000px;border-collapse: collapse; border-bottom-width: 0px; border-right-width: 0px;color:#000;">

 <tr>
    <td class="ExcelTableFormationRow"style="float:left;width:45px;background:#fff;color:#000;">
	
	<?php echo $ii++;?></td>
    <td style="float:left;width:250px;color:#fff;background:#fff;&nbsp;&nbsp;">
	<input type="hidden" size="30"readonly='readonly'name="fnamed[]"style="text-transform:uppercase;color:#fff;"value="<?PHP
	$month=$months;
$qry = mysql_query("select  fname	 as total
from employees where matricule='$matricule'  "); 
$row = mysql_fetch_assoc($qry); 
echo $s=$row['total'];?>"></td>
  
    <td style="float:left;width:50px;background:#fff;color:#fff;">
	<input type="hidden" size="8" name="matriculed[]"style="color:#fff;" readonly='readonly' value="<?php echo $matricule;?>">
	</td>

    <td style="float:left;width:50px;background:#fff;">
	<input type="hidden" size="3"  name="nsifsd[]"style="color:#fff;"  readonly='readonly' value="<?PHP
$qry = mysql_query("select  nsif	 as total
from employees where matricule='$matricule'  "); 
$row = mysql_fetch_assoc($qry); 
echo $s=$row['total'];?>">
	</td>
    <td style="float:left;width:50px;background:#fff;"><input type="hidden" size="4" name="eccd[]"style="color:#fff;" readonly='readonly' value="<?php echo $ecc;?>"></td>
     <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="hidden" size="4" style="color:#000;"name="tbasics[]"readonly='readonly' value="<?php 
	 $qry = mysql_query("select  SUM(basic)	 as total
from salary where month='$month'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];
 
	 
	 ?>"></td> <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="hidden" size="4" style="color:#000;"name="tbasic[]"readonly='readonly' value="<?php 
	 $qry = mysql_query("select  SUM(basic)	 as total
from salary where month='$month'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];
 
	 
	 ?>"></td>
      <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="hidden" size="4" name="trent[]" readonly='readonly'value="<?PHP
 $qry = mysql_query("select  SUM(rent)	 as total
from salary where month='$month'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];





 ?>"></td>
   <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="hidden" size="4" name="tspecial[]" readonly='readonly'value="<?PHP
 $qry = mysql_query("select  SUM(special)	 as total
from salary where month='$month'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];

 ?>"></td>
 
   <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="hidden" size="4" name="tseniorit[]"readonly='readonly' value="<?PHP
 $qry = mysql_query("select  SUM(seniorit)	 as total
from salary where month='$month'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];

 ?>"></td>
 
 <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="hidden" size="4" name="tgrosss[]"readonly='readonly' value="<?PHP
 $qry = mysql_query("select  SUM(grosss)	 as total
from salary where month='$month'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];
 ?>"></td>
 
 <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="hidden" size="6" name="tgrosst[]"readonly='readonly' value="<?PHP

  $qry = mysql_query("select  SUM(grosst)	 as total
from salary where month='$month'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];
 ?>"></td>
 
 
 
   <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="hidden" size="3" name="tnett[]"readonly='readonly' value="<?PHP
 $qry = mysql_query("select  SUM(nett)	 as total
from salary where month='$month'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];
 ?>"></td>
 
 
 
 
 <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="hidden" size="3" name="tpit[]"readonly='readonly' value="<?PHP

  $qry = mysql_query("select  SUM(pit)	 as total
from salary where month='$month'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];
 ?>"></td>
 
 <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="hidden" size="3" name="tact[]"readonly='readonly' value="<?PHP

  $qry = mysql_query("select  SUM(act)	 as total
from salary where month='$month'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];
 ?>"></td>
 
 
 <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="hidden" size="3" name="tlbr[]"readonly='readonly' value="<?PHP

  $qry = mysql_query("select  SUM(lbr)	 as total
from salary where month='$month'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];
 ?>"></td>
 
 <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="hidden" size="3" name="tcrtv[]" readonly='readonly'value="<?PHP

  $qry = mysql_query("select  SUM(crtv)	 as total
from salary where month='$month'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];
 ?>"></td>
 <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="hidden" size="3" name="tldt[]"readonly='readonly' value="<?PHP

  $qry = mysql_query("select  SUM(ldt)	 as total
from salary where month='$month'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];
 ?>"></td>
 
 
 
 <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="hidden" size="3" name="tnsif[]"readonly='readonly' value="<?PHP

  $qry = mysql_query("select  SUM(nsif)	 as total
from salary where month='$month'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];
 ?>"></td>
 
 
 
 <td style="float:left;width:50px;background:#fff;text-align:right;"><input type="hidden" size="3" name="ttotald[]"readonly='readonly' value="<?PHP

 
  $qry = mysql_query("select  SUM(totald)	 as total
from salary where month='$month'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total'];
 ?>"></td>
 
  
 <td style="float:left;width:50px;background:#fff;text-align:right;">
 
 
 
 <input type="hidden" size="3" name="tnet[]" readonly='readonly'value="<?PHP

 
  $qry = mysql_query("select  SUM(net)	 as total
from salary where month='$month'  "); 
$row = mysql_fetch_assoc($qry); 
 echo  $ss=$row['total']; ?>"></td>
 
 
 <input type="hidden" size="3" name="day[]" readonly='readonly'value="<?php
echo $months=date('j');

?>">
 
 
 
 <input type="hidden" size="3" name="years[]" readonly='readonly'value="<?php
echo $monthd=date('Y');

?>">
 
 <input type="hidden" size="3" name="months[]" readonly='readonly'value="<?php
$month=date('m');
$mxc11e=$month;

if(empty($mxc11e)){

 
 $statusfbiose='';
 }
elseif($mxc11e>='1' &&  $mxc11e<='1'){
  $statusfbiose="13"; 
}
elseif($mxc11e>'1' ){
  $statusfbiose=($month); 
}
echo $months=($statusfbiose-1);
?>">
 
 
  </tr>
  </table>

 <?php echo  $statusf="<meta http-equiv='refresh' content='0; url=salaries.php'>";?>
 
  </tr>
  </table>
<br>
<div style="float:left; width:700px; height:40px;margin-left:-290px;">
<input type='submit' name='submit' value='Submit' style="padding:10px 35px;">
</div>
</form>

<?php } ?>






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
            { field: 'fullcontent', type: 'text' }
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