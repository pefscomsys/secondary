<?php
         if (isset($_POST['button1'])) //  Do  THE FOLLOWING WHEN BUTTON IS PRESSED
        {
                echo "button on is pressed";
                 if ($_FILES["file"]["error"] > 0)
                {
                        echo "Error: " . $_FILES["file"]["error"] . 
			"You have not selected a file or some other error <br />";
                }
                else
                {       //              Errorless  start 
                        $file_name=$_FILES["file"]["name"];echo $file_name;
                        $file_type=$_FILES["file"]["type"];
                        if($file_type!='text/csv')
                        {
                                echo "Please the input file should be a .csv file";
                        }
                        else
                        {       
                                //      only executed if file is .csv
                                echo "its correct";
                                
                                        // Creating a temporary copy on the server 
                                        $location=""; // write the location on 
					// server where a copy should be created
                                        move_uploaded_file($_FILES["file"]["tmp_name"],
					$location . $_FILES["file"]["name"]);
                                                                                
                connect_db(); // MYSQL connection settings
                // I have provided a sample query : 
	       // Please make changes as per your database table and columns 
                $q="LOAD DATA 
                                INFILE '$file_name' INTO TABLE resit
                                FIELDS TERMINATED BY \"\t\" 
                                LINES TERMINATED BY \"\n\" 
                                ( fname,matricule,departmet,levels,sex,
				db1,c101,c102,c103,c104,c105,c106 )";
                mysql_query($q) or die(mysql_error());
                        }
                }
}

?>
<?php
function connect_db()
{
        //  Please make changes : input your username and password 
        $con = mysql_connect("localhost","sofocol","sofocol");
        if (!$con)
        {
                die('Could not connect: ' . mysql_error());
        }
        // enter your database name
        mysql_select_db("himsbueas", $con);
}
?> 