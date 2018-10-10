<?php 
include 'dbc.php';
page_protect();
echo $roll=$_GET["roll"];

?>
<style type="text/css">
body{
	margin:0;
padding:0;
}
.img
    { background:#ffffff;
    padding:12px;
    border:1px solid #999999; }
.shiva{
 -moz-user-select: none;
    background: #2A49A5;
    border: 1px solid #082783;
    box-shadow: 0 1px #4C6BC7 inset;
    color: white;
    padding: 3px 5px;
    text-decoration: none;
    text-shadow: 0 -1px 0 #082783;
    font: 12px Verdana, sans-serif;}
</style>
<html>

<?php

$roll=$_GET["usr_name"];
$query="select * from courses where matricule='$roll'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<body style="background-color:#dfe3ee;">
<div id="outer" style="margin:0px; width:100%; height:90px;background-color:#3B5998;">
</div>
<div id="main" style="height:800px; width:100%">
<div id="content" style="float:left; width:500px; margin-left:50px; margin-top:20px;" align="center">
<script type="text/javascript" src="webcam.js"></script>
<script language="JavaScript">
		document.write( webcam.get_html(440, 240) );
</script>
<form>
<br />

		<input type=button value="Configure settings" onClick="webcam.configure()" class="shiva">
		&nbsp;&nbsp;
		<input type=button value="snap" onClick="take_snapshot()" class="shiva">
	</form>
 <?php 
 $matricule=$row["matricule"];
				
				$qry = mysql_query("select id as total
from employees where empname='$matricule'  "); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row['total']; ?>
					<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="120px" height="85px">

</div>

<script  type="text/javascript">
    webcam.set_api_url( 'sendf.php?roll=<?php echo $roll;?>' );
		webcam.set_quality( 90 ); // JPEG quality (1 - 100)
		webcam.set_shutter_sound( true ); // play shutter click sound
		webcam.set_hook( 'onComplete', 'my_completion_handler' );

		function take_snapshot(){
			// take snapshot and upload to server
			document.getElementById('img').innerHTML = '<h1>Uploading...</h1>';
			
			webcam.snap();
		}

		function my_completion_handler(msg) {
			// extract URL out of PHP output
			if (msg.match(/(http\:\/\/\S+)/)) {
				// show JPEG image in page
				
				document.getElementById('img').innerHTML ='<h3>Upload Successfuly done</h3>'+msg;
			     
				document.getElementById('img').innerHTML ="<img src="+msg+" class=\"img\">";
				
			
				// reset camera for another shot
				webcam.reset();
			}
			else {alert("Error occured we are trying to fix now: " + msg); }
		}
	</script>
  
<div id="img" style=" height:800px; width:500px; float:left; margin-left:40px; margin-top:20px;">
</div>
</div>
<?php } ?>
</body>
</html>