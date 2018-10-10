<?php include 'dbc.php';
 $position=$_POST['applied'];




$qry = mysql_query("select  roll as total
from position where positions='$position' "); 
$row = mysql_fetch_assoc($qry);

  $fake=$row['total'];  

?>
<html>
<head>
<title><?php echo $position;?></title>
<script src="jquery-latest.js"></script>
<script>
(function($)
{
    $(document).ready(function()
    {
        $.ajaxSetup(
        {
            cache: false,
            beforeSend: function() {
                $('#content').hide();
                $('#loading').show();
            },
            complete: function() {
                $('#loading').hide();
                $('#content').show();
            },
            success: function() {
                $('#loading').hide();
                $('#content').show();
            }
        });
        var $container = $("#content");
        $container.load("charmss.php?roll=<?php echo $fake;?>");
        var refreshId = setInterval(function()
        {
            $container.load('charmss.php?roll=<?php echo $fake;?>');
        }, 10000);
    });
})(jQuery);
</script>
</head>
<body>
 
<div id="wrapper">
    <div id="content"></div>
    <img src="turning.gif" id="loading" alt="loading" style="display:none;" />
</div>
 
</body>
</html>
