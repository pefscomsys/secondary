<?php	
	include_once 'other/class.dbc.php';
	include_once 'other/functions.php';

	//get all th students iin the reecord
	$db = new dbc();
	$dbc = $db->connect();
	
	//now get the parameters passed to use.
	
	if(isset($_POST['year']))
	{
		//grab the values from post.
		$year = filter_post($_POST['year']);
		$class = filter_post($_POST['class']);
	}
	
	if(isset($_GET['year']))
	{
		//grab the values from get.
		$year = filter_post($_GET['year']);
		$class = filter_post($_GET['class']);
	}
	
	
	
	//NOW GET THE CLASS LIST
	
	$query = "SELECT * FROM `marks` WHERE `form` = '$year' AND `last_name` = '$class' ORDER BY `first_name`";
	$result = mysqli_query($dbc, $query);
	
	
	$count = 1;
  ?>
<html>

	<head>
		<title>Class List </title>
		<link rel="stylesheet" href="other/bootstrap.css" type="text/css">
		<style>
			td
			{
				border: 1px solid #444;
			}
			
			th
			{
				border: 1px solid #444;
			}
		</style>
	</head>
	<body>
  <div class="row">
    <br>
      <div class="col-md-12 text-center">
          <h2 class="page-header">
				GBHS TIKO
          </h2>
      </div>
  </div>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h4>
			<table class="table">
				<tr>
					<th>
						Academic Year
					</th>
					
					<td>
						<?php echo $year; ?>
					</td>
				</tr>
				
				<tr>
					<th>
						Class
					</th>
					
					<td>
						<?php echo $class; ?>
					</td>
				</tr>
				
			</table>
		</h4>
    </div>
</div>

<br>
<br>

<div class="row">
	<div class="text-center">
		<strong style="font-size: 18px; text-decoration: underline;">Class List </strong>
	</div>
</div>
<br>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="table-responsive">
			<table class="table table-stripped table-bordered">
				<tr>
					<th>
						S/N
					</th>
					
					<th>
						Student Name 
					</th>
					
					<th>
						Sex
					</th>
					
					<th>
						Class
					</th>
					
					<th>
						Acc. Year
					</th>
					
				</tr>
				
				<?php
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
						<?php echo $row['sex']; ?>
					</td>
					
					<td>
						<?php echo $class; ?>
					</td>
					
					<td>
						<?php echo $year; ?>
					</td>
					
					
				</tr>
					<?php
				}
				?>
			</table>
		</div>
    </div>
</div>

</body>

</html>