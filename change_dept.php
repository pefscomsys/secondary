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
      <div class="col-md-8 col-md-offset-2">
          <h2 class="page-header">
              View Student Marks
          </h2>
      </div>
  </div>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <input type="text" name="search" id="search" placeholder="Enter student name"
            class="form-control" autofocus="true"
        >
    </div>
</div>


<div class="row">

<br>
<div class="col-md-10 col-md-offset-1">
    <div class="table-responsive table-bordered" >
      <div id="table_area">
        <table class="table table-bordered table-striped">
            <tr>
                <th>
                    N<sup>o</sup>
                </th>
                <th>
                    Student Name
                </th>

                <th>
                    Class
                </th>
                <th>
                    Year
                </th>
                <th>
                    Action
                </th>
            </tr>

            <?php
            include_once 'other/class.dbc.php';
            include_once 'other/functions.php';

            //get all th students iin the reecord
            $db = new dbc();
            $dbc = $db->connect();

            //initialise count variable.
            $count = 1;

            $query = "SELECT `year` FROM `rush` WHERE `roll` = '1'";
            $result = mysqli_query($dbc, $query)
                    or die("Could not query");
            list($year) = mysqli_fetch_array($result);

            //now select students only for this year
            $query = "SELECT * FROM `marks` WHERE `form` = '$year'
                ORDER BY `roll` DESC LIMIT 20";
            $result = mysqli_query($dbc, $query)
                  or die("Could not query");

            //now display the names
            while($row = mysqli_fetch_array($result))
            {
                ?>
            <tr>
                <td>
                    <?php echo $count++; ?>
                </td>

                <td>
                    <?php echo $row['first_name']; ?>
                </td>
                <td>
                    <?php echo $row['last_name']; ?>
                </td>
                <td>
                    <?php echo $row['form']; ?>
                </td>

                <td class="text-center">
                    <a href="add_mark.php?id=<?php echo $row['roll']; ?>" class="btn btn-success change" data-id1="<?php echo $row['roll']; ?>" >
                        View Marks
                    </a>
					
					<a href="edit_marks.php?id=<?php echo $row['roll']; ?>" class="btn btn-info change" data-id1="<?php echo $row['roll']; ?>" >
                        Edit Marks
                    </a>
                    
                </td>
            </td>
                <?php
            }


            ?>
        </table>
      </div>
    </div>
</div>

  </div>








	</div>
    <script src='jquery.min.js'></script>

        <script src="js/index.js"></script>


<script>
  $(document).ready(function(){
    //variables to keep track of events
       $search  = $("#search");
       $table_area = $("#table_area");

       $search.keyup(function(){
           var key = $search.val();


           //now search the results from the database
           $.ajax({
               url: "other/search_student.php",
               method: "POST",
               data: {search: key},
               dataType : "text",
               success: function(data){
                   showResults(data);
               }

           });
       });

       function showResults(output)
       {
           //show output
           //$table_area.html(output);
           $("#table_area").html(output);

       }

  });
</script>

  </body>
</html>
