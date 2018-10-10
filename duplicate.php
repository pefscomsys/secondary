<?php
include 'dbc.php';

$classef=$_POST["classes"];$term=$_POST["term"];
$sql="select distinct first_name,subject,classes,teacher,coef,form,c105  from resit where classes='$classef' and c105='$term'";
$result=mysql_query($sql) ;
while($row=mysql_fetch_array($result))
{
    $first_name=$row["first_name"]; $subject=$row["subject"];
	
	$classes=$row["classes"];
	$teacher=$row["teacher"];
	$form=$row["form"];	$c105=$row["c105"];
 $sql2="select roll as id, first_name,subject,classes,teacher,coef,form,c105 from resit
 where classes='$classes' and subject='$subject' and teacher='$teacher' and form='$form' and c105='$c105' and first_name='$first_name' ";
      $num=mysql_num_rows(mysql_query($sql2));
    $res=mysql_query($sql2);
    // if $num > 1 then it will contain duplicate records
    if($num > 1)
    {
        $check=0;
        while($row_dup=mysql_fetch_array($res))
        {
            // if $check > 0 that's mean first record is passed
            if($check > 0)
            {
                 $id=$row_dup["id"];
                $sql_del="delete from resit where roll=".$id;
                $res_del=mysql_query($sql_del) or die(mysql_error());
				$bost="Duplicate Cleared";
            }
            $check++;
        }
        
    }else{
		
		$bost="No -Duplicate";
		
	}
    
    
}  

echo $bost;

?>