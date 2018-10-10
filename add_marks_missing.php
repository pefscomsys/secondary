<?php



include 'dbcs.php';



$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=19){header("location: login.php?error=Unauthorized access");}




 $ip=@$_SERVER['REMOTE_ADDR'];

 ?><?php

$roll=$_GET["1"];
$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {



?>
<?php  $ids=$row['fax'];


?>
<?php } ?>


 <?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu where extra='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {



?>
<?php  $col1=$row['pagename'];


?>
<?php  $link1=$row['links'];


?>
<?php } ?>

<?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu where extra='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {



?>
<?php  $col2=$row['pagename'];


?>
<?php  $link2=$row['links'];


?>
<?php } ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu where extra='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {



?>
<?php  $col3=$row['pagename'];


?>
<?php  $link3=$row['links'];


?>
<?php } ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu where extra='4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {



?>
<?php  $col4=$row['pagename'];


?>
<?php  $link4=$row['links'];


?>
<?php } ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu where extra='5'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {



?>
<?php  $col5=$row['pagename'];


?>
<?php  $link5=$row['links'];


?>
<?php } ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu where extra='6'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {



?>
<?php  $col6=$row['pagename'];


?>
<?php  $link6=$row['links'];


?>
<?php } ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu where extra='7'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {



?>
<?php  $col7=$row['pagename'];


?>
<?php  $link7=$row['links'];


?>
<?php } ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu where extra='8'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {



?>
<?php  $col8=$row['pagename'];


?>
<?php  $link8=$row['links'];


?>
<?php } ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu where extra='9'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {



?>
<?php  $col9=$row['pagename'];


?>
<?php  $link9=$row['links'];


?>
<?php } ?>

<?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from mainmenu where extra='10'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {



?>
<?php  $col10=$row['pagename'];


?>
<?php  $link10=$row['links'];


?>
<?php } ?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>PEFSCOM SYSTEM</title>




        <link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="font-awesome/css/font-awesome.css" type="text/css" media="screen">

<link rel="stylesheet" href="other/bootstrap.css" type="text/css">
<link rel="stylesheet" href="other/AdminLTE.css" type="text/css">


  </head>

  <body>

    <div class="titles" ><h1 style="float:left;margin-top:20px; margin-left:10px;text-shadow:1px 0px 1px #fff;color:#50a3a2;">PEFSCOM COMPANY LIMITED</h1><br>
	<div style="float:left;color:#000; margin-top:35px; margin-left:-370px;font-size:13px;">Transforming all Manual System to Computerised System</div>
		<div style="float:left;color:#000; margin-top:15px;  HEIGHT:25PX; BACKGROUND:#efefef; margin-left:320px;font-size:13px;">
		<div style="float:left; WIDTH:500PX;"><div style="float:left;margin-top:5px; margin-left:5px;  WIDTH:120PX; HEIGHT:25PX;color:#009966; font-size:13px;">

<div style="float:left; WIDTH:15PX; HEIGHT:25PX;">	<i class="fa  fa-key fa-1x" style="float:left; color:#009966; ;">

</i></div>

		<div style="float:left; WIDTH:50PX; HEIGHT:25PX;">  <?php echo $notes;?>
		</div>


		</div>


  <a href="setting.php" style="color:#009966;">
		<div style="float:left;margin-top:5px; margin-left:5px;  WIDTH:100PX; HEIGHT:25PX;color:#009966; font-size:13px;">

		<div style="float:left; WIDTH:15PX; HEIGHT:25PX;">	<i class="fa  fa-cog fa-1x" style="float:left; color:#009966; ;">

</i></div>

		<div style="float:left; WIDTH:50PX; HEIGHT:25PX;"> Setting
		</div>

		</div>
		</a>
  <a href="accounts.php" style="color:#009966;">
			<div style="float:left;margin-top:5px; margin-left:5px;  WIDTH:100PX; HEIGHT:25PX;color:#009966; font-size:13px;">

<div style="float:left; WIDTH:15PX; HEIGHT:25PX;">	<i class="fa  fa-user fa-1x" style="float:left; color:#009966; ;">

</i></div>

		<div style="float:left; WIDTH:50PX; HEIGHT:25PX;"> Account
		</div>

		</div>
		</a>


  <a href="logout.php" style="color:#009966;">
			<div style="float:left;margin-top:5px; margin-left:5px;  WIDTH:120PX; HEIGHT:25PX;color:#009966; font-size:13px;">

		&#9658; Logout

		</div>
		</a>


		</DIV>

		</DIV>










		</div>

	<div style="float:left;
  background: #50a3a2;
  background: -webkit-linear-gradient(top left, #50a3a2 0%, #53e3a6 100%);
  background: linear-gradient(to bottom right, #50a3a2 0%, #53e3a6 100%);
margin-top:100px;
 color:#fff;
  width: 110%;
  height: 70px;">

  <div style="float:left; WIDTH:1400PX; height:60px; margin-top:5px; margin-left:15px;">

  <a href="<?php echo $link1;?>?roll=<?php echo $col1;?>" style="color:#fff;">
  <div style="float:left; WIDTH:130PX; height25px; margin-top:10px; ">

  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-users fa-2x" style="float:left; color:#fff; ;">

</i></div>




  <div style="float:left; WIDTH:85PX; HEIGHT:25PX;font-size:13px;font-weight:bold;">  <?php echo $col1;?></div>







  </div>
  </a>



  <a href="<?php echo $link2;?>?roll=<?php echo $col2;?>" style="color:#fff;">
  <div style="float:left; WIDTH:130PX; height25px; margin-top:10px; ">

  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-edit fa-2x" style="float:left; color:#fff; ;">

</i></div>




  <div style="float:left; WIDTH:85PX; HEIGHT:25PX;font-size:13px;font-weight:bold;"> <?php echo $col2;?></div>







  </div></a>








  <a href="<?php echo $link3;?>?roll=<?php echo $col3;?>" style="color:#fff;">

  <div style="float:left; WIDTH:130PX; height25px; margin-top:10px; ">

  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-print fa-2x" style="float:left; color:#fff; ;">

</i></div>




  <div style="float:left; WIDTH:80PX; HEIGHT:25PX;font-size:13px;font-weight:bold;"><?php echo $col3;?></div>







  </div>
  </a>













  <a href="<?php echo $link4;?>?roll=<?php echo $col4;?>" style="color:#fff;">
  <div style="float:left; WIDTH:130PX; height25px; margin-top:10px; ">

  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-clock-o fa-2x" style="float:left; color:#fff; ;">

</i></div>




  <div style="float:left; WIDTH:80PX; HEIGHT:25PX;font-size:13px;font-weight:bold; text-align:left;"><?php echo $col4;?></div>







  </div>
  </a>





  <a href="<?php echo $link5;?>?roll=<?php echo $col5;?>" style="color:#fff;">

  <div style="float:left; WIDTH:130PX; height25px; margin-top:10px; ">

  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-money fa-2x" style="float:left; color:#fff; ;">

</i></div>




  <div style="float:left; WIDTH:80PX; HEIGHT:25PX;font-size:13px;font-weight:bold;"><?php echo $col5;?></div>







  </div>

  </a>





  <a href="<?php echo $link6;?>?roll=<?php echo $col6;?>" style="color:#fff;">


  <div style="float:left; WIDTH:130PX; height25px; margin-top:10px; ">

  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-book fa-2x" style="float:left; color:#fff; ;">

</i></div>




  <div style="float:left; WIDTH:80PX; HEIGHT:25PX;font-size:13px;font-weight:bold;"><?php echo $col6;?></div>







  </div>

  </a>

















  <a href="<?php echo $link7;?>?roll=<?php echo $col7;?>" style="color:#fff;">
  <div style="float:left; WIDTH:140PX; height25px; margin-top:10px; ">

  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-qrcode fa-2x" style="float:left; color:#fff; ;">

</i></div>




  <div style="float:left; WIDTH:80PX; HEIGHT:25PX;font-size:13px;font-weight:bold;"><?php echo $col7;?> </div>







  </div>
  </a>

























  <a href="<?php echo $link8;?>?roll=<?php echo $col8;?>" style="color:#fff;">
  <div style="float:left; WIDTH:130PX; height25px; margin-top:10px; ">

  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-hand-o-right fa-2x" style="float:left; color:#fff; ;">

</i></div>




  <div style="float:left; WIDTH:80PX; HEIGHT:25PX;font-size:13px;font-weight:bold;"><?php echo $col8;?> </div>







  </div>


  </a>






  <a href="<?php echo $link9;?>?roll=<?php echo $col9;?>" style="color:#fff;">
  <div style="float:left; WIDTH:130PX; height:25px; margin-top:10px; ">

  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-hand-o-right fa-2x" style="float:left; color:#fff; ;">

</i></div>




  <div style="float:left; WIDTH:80PX; HEIGHT:25PX;font-size:13px;font-weight:bold;"><?php echo $col9;?> </div>







  </div>


  </a>




  <a href="<?php echo $link10;?>?roll=<?php echo $col10;?>" style="color:#fff;">
  <div style="float:left; WIDTH:130PX; height25px; margin-top:10px; ">

  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-subway fa-2x" style="float:left; color:#fff; ;">

</i></div>




  <div style="float:left; WIDTH:80PX; HEIGHT:25PX;font-size:13px;font-weight:bold;"><?php echo $col10;?> </div>







  </div>


  </a>


































  </div>

  </div>

	<div style="float:left;
  background: #efefef;
 color:#009966;
  width: 100%;
  height: 25px;margin-top:5px;">

  <div style="float:left; WIDTH:45PX; HEIGHT:25PX;">	<i class="fa  fa-chevron-right fa-2x" style="float:left; color:#fff; ;">

</i></div>
	- <?php echo $ms;?>

  </div>





	<div style="float:left;

  width: 100%;
  height: 25px;margin-top:5px;">
	<a href="omegahome.php">
	<div style="float:left;margin-left:5px;

  width: 110px;
  height: 25px;"><div style="float:left;

  width: 50px;
  height: 25px;">
  <i class="fa  fa-home fa-2x" style="float:left; color:#50a3a2; ;">

</i>

  </div><div style="float:left;

  width: 40px;
  height: 25px;color:#50a3a2;">
  <div style="float:left;margin-top:8px;font-size:12px;">
  Home
  </div>
  </div>

  </div></a>

	<a href="change.php">
	<div style="float:left;margin-left:5px;

  width: 110px;
  height: 25px;"><div style="float:left;

  width: 40px;
  height: 25px;">
  <i class="fa  fa-plane fa-2x" style="float:left; color:#50a3a2; ;">

</i>

  </div><div style="float:left;

  width: 40px;
  height: 25px;color:#50a3a2;">
  <div style="float:left;margin-top:8px;font-size:12px;">
  Change password
  </div>
  </div>

  </div></a>


	<a href="track.php">
	<div style="float:left;margin-left:5px;

  width: 110px;
  height: 25px;"><div style="float:left;

  width: 40px;
  height: 25px;">
  <i class="fa  fa-eye fa-2x" style="float:left; color:#50a3a2; ;">

</i>

  </div><div style="float:left;

  width: 40px;
  height: 25px;color:#50a3a2;">
  <div style="float:left;margin-top:8px;font-size:12px;">
Track Activities
  </div>
  </div>

  </div>

	</a>





<a href="change_dept.php">
	<div style="float:left;margin-left:5px;

  width: 110px;
  height: 25px;"><div style="float:left;

  width: 40px;
  height: 25px;">
  <i class="fa  fa-plus-circle fa-2x" style="float:left; color:#50a3a2; ;">

</i>
  
  </div>
  
  <div style="float:left;

  width: 20px;
  height: 25px;color:#50a3a2;">
  <div style="float:left;margin-top:8px;font-size:12px;">
      View Details
  </div>
  </div>
            
            <div style="float:left; padding-left: 10px;

  width: 40px;
  height: 25px;color:#50a3a2;">
  <div style="float:left;margin-top:8px;font-size:12px;">
      
	  Student
  </div>
  </div>
            
            <div style="float:left; padding-left: 10px;

  width: 40px;
  height: 25px;color:#50a3a2;">
  <div style="float:left;margin-top:8px;font-size:12px;">
      
  </div>
  </div>
  
  </div>
	
	</a>






















  </div>

		<div style="float:left; maring-left: 10%;
background:#efefef;
  width: 100%;
  margin-top:15px;">

  <div class="row">
    <br>
      <div class="col-md-12">
          <h2 class="page-header">
              Add Student Missing Marks
          </h2>
      </div>
  </div>
                    
   <?php
            include_once 'other/class.dbc.php';
            include_once 'other/functions.php';

            //get all th students iin the reecord
            $db = new dbc();
            $dbc = $db->connect();
            
            //now we get the students id and the term
            $stud_id = $_GET['id'];
            $term = $_GET['term'];
            
            //now get the student information.
            $query = "SELECT * FROM `marks` WHERE `roll` = '$stud_id'";
            $result = mysqli_query($dbc, $query);
            
            while($row = mysqli_fetch_array($result))
            {
                $name = $row['first_name'];
				$names = mysql_real_escape_string($name);
                $class = $row['last_name'];
                $sex = $row['sex'];
                $acc_year = $row['form'];
            }
            ?>

<div class="row" style="background-color: white;">
    <div class="col-md-4" style="padding-left: 40px;">
        <h3 class="page-header">
            Student Information
        </h3>
        
        <br>
        <div class="form-group row">
            <label for="name" class="control-label col-md-4">
                Student Name:
            </label>
            <div class="col-md-8">
                <?php echo $name; ?>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="name" class="control-label col-md-4">
                Class:
            </label>
            <div class="col-md-8">
                <?php echo $class; ?>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="name" class="control-label col-md-4">
                Sex:
            </label>
            <div class="col-md-8">
                <?php echo $sex; ?>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="name" class="control-label col-md-4">
                Academic Year:
            </label>
            <div class="col-md-8">
                <?php echo $acc_year; ?>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="name" class="control-label col-md-4">
                Term:
            </label>
            <div class="col-md-8">
                <?php 
                    if($term == '1')
                        echo "First";
                    elseif($term == '2')
                        echo "Second";
                    elseif ($term == '3') 
                        echo 'Third';
                    else
                        echo "Unknown";
                    
                    echo " Term";
                ?>
            </div>
        </div>
		
		<div class="row">
			<div class="col-md-12">
				<?php
				if($term != 1)
				{
					?>
					<a class="btn-block btn btn-success" 
					href="add_marks_missing.php?id=<?php echo $stud_id; ?>&term=1">
						Add 1<sup>st</sup> Term
					</a>
					<?php
				}
				
				if($term != 2)
				{
					?>
					<a class="btn-block btn btn-success" 
					href="add_marks_missing.php?id=<?php echo $stud_id; ?>&term=2">
						Add 2<sup>nd</sup> Term
					</a>
					<?php
				}
				
				if($term != 3)
				{
					?>
					<a class="btn-block btn btn-success" 
					href="add_marks_missing.php?id=<?php echo $stud_id; ?>&term=3">
						Add 3<sup>rd</sup> Term
					</a>
					<?php
				}
				
				if($term != 1)
				{
					?>
					<a class="btn-block btn btn-info" 
					href="edit_stud_marks.php?id=<?php echo $stud_id; ?>&term=1">
						Edit 1<sup>st</sup> Term
					</a>
					<?php
				}
				
				if($term != 2)
				{
					?>
					<a class="btn-block btn btn-info" 
					href="edit_stud_marks.php?id=<?php echo $stud_id; ?>&term=2">
						Edit 2<sup>nd</sup> Term
					</a>
					<?php
				}
				
				if($term != 3)
				{
					?>
					<a class="btn-block btn btn-info" 
					href="edit_stud_marks.php?id=<?php echo $stud_id; ?>&term=3">
						Edit 3<sup>rd</sup> Term
					</a>
					<?php
				}
				
				
				
				?>
			</div>
			<br>
			<br>
			<br>
		</div>
    </div>
    
    <!--next column-->
    <div class="col-md-4">
        <h3 class="page-header">
            Student Marks
        </h3>
        
        <?php
        //handle the post request
        if(isset($_POST['save']))
        {
            $subject = filter_post($_POST['subject']);
            $teacher = filter_post($_POST['teacher']);
            $sq1 = filter_post($_POST['sq1']);
            $sq2 = filter_post($_POST['sq2']);
            $coef = filter_post($_POST['coef']);

            //now if they are not null. then insert them.
            if(!empty($sq1) && !empty($sq2) && !empty($subject))
            {
                //insert into resit.
                $query = "INSERT INTO `resit` ("
                        . " `first_name`, `subject`, `classes`, `teacher`, "
                        . " `coef`, `form`, `c101`, `c102`, `c105` )"
                        . " VALUES ('$names', '$subject', '$class', '$teacher',"
                        . " '$coef', '$acc_year', '$sq1', '$sq2', '$term' ) ";
                $rs = mysqli_query($dbc, $query);
            }
        }
		
		if(isset($_GET['del_id']))
		{
			//get the id;
			$id = filter_post($_GET['del_id']);
			
			//delet te id
			$query = "DELETE FROM `resit` WHERE `roll` = '$id'";
			$res = mysqli_query($dbc, $query);
			
			echo "<script> alert('Mark Deleted'); </script>";
		}
        ?>
        
        <table class="table table-condensed table-striped">
            <tr>
                <th>
                    S/N
                </th>
                <th>
                    Subject
                </th>
				
				<th>
					Coef
				</th>
				
                <th>
                    <?php
						if($term == 1)
						{
							echo 'SQ1';
						}
						elseif($term == 2)
						{
							echo 'SQ3';
						}
						else
						{
							echo 'SQ5';
						}
					
					?>
                </th>
                <th>
                    <?php
						if($term == '1')
						{
							echo 'SQ2';
						}
						elseif($term == '2')
						{
							echo 'SQ4';
						}
						else
						{
							echo 'SQ6';
						}
					
					?>
                </th>
				<th>
                    Act.
                </th>
            </tr>
            
            <?php
            $count = 1;
            
            //select the students marks.
            $full_name = filter_post($name);
			
            //now get the student's sq1 and 2 tests
            $query = "SELECT * FROM `resit` WHERE"
                    . " `first_name` = '$full_name' AND "
                    . " `classes` = '$class' AND "
                    . " `form` = '$acc_year' AND "
                    . " `c105` = '$term' ";
            $result = mysqli_query($dbc, $query)
					or die("Cannot query");
            
            if(mysqli_num_rows($result) == 0)
            {
                ?>
            <tr>
                <td colspan="10" class="text-center">
                    <strong>
                        No marks for this Student For this term
                    </strong>
                </td>
            </tr>
                <?php
            }
            else
            {
                while($row = mysqli_fetch_array($result))
                {
                ?>
            <tr>
                <td>
                    <?php echo $count++; ?>
                </td>
                
                <td>
                    <?php
                    $sub = $row['subject'];
                    
                    //create an array that will hold subject that have already been registerED
                    $reg = array();
                    
                    //push that subject above into that array
                    array_push($reg, $sub);
                    
                    $query = "SELECT `subject` FROM `subject` WHERE `roll` = '$sub'";
                    $res = mysqli_query($dbc, $query);
                    
                    list($subject) = mysqli_fetch_array($res);
                    
                    echo $subject;
                    ?>
                </td>
                
				<td>
					<?php echo $row['coef']; ?>
				</td>
				
                <td>
                    <?php echo $row['c101']; ?>
                </td>
                
                <td>
                    <?php echo $row['c102']; ?>
                </td>
				
				<td>
                    <a href="add_marks_missing.php?id=<?php echo $stud_id; ?>&term=<?php echo $term; ?>&del_id=<?php echo $row['roll']; ?>" 
					title="Delete this mark" class="btn btn-danger btn-xs">
						<i class="fa fa-trash"></i>
					</a>
                </td>
            </tr>
                <?php
                } //end the while loop 
            }
            
            ?>
        </table>
    </div>
    
    <div class="col-md-4">
        <h3 class="page-header">
            Enter new mark
        </h3>
        
        <div class="text-center text-bold">
            Select Subject
            <br>
        </div>
        <br>
        <div class="text-center col-md-10 col-md-offset-1">
            <form action="reg_mark.php?id=<?php echo $stud_id; ?>&term=<?php echo $term; ?>" method="POST">
                <select name="subject" class="form-control">
                    <?php
                    echo $query = "SELECT * FROM `subject` ORDER BY `subject`";
                    $ress = mysqli_query($dbc, $query);

                    while($row = mysqli_fetch_array($ress))
                    {
                        $the_subject = $row['roll'];
						
                        //if this subject is not yet registered then display it.
                        if(!in_array($the_subject, $reg))
                        {
                        ?>
                    <option value="<?php echo $row['roll']; ?>">
                        <?php echo $row['subject']; ?>
                    </option>
                        <?php
                        }
                    }
                    ?>
                </select>
                
                <br>
                <input type="submit" class="btn btn-success" value="Add Subject">
            </form>
        </div>
    </div>
    <br>
    
    
</div>

                    

  </div>



	</div>
    <script src='jquery.min.js'></script>

        <script src="js/index.js"></script>


  </body>
</html>

