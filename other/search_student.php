<?php
require_once 'class.dbc.php';
require_once 'functions.php';


$search = filter_post($_POST['search']);


//setup database connection
$db = new dbc();
$dbc = $db->connect();

//now search the db and send results back
 $query  = "SELECT * FROM `marks` WHERE "
        . " `first_name` LIKE '%$search%'"
        . "  LIMIT 45";
$result = mysqli_query($dbc, $query);

//send out the result
$output = '';
$count = 1;

$output .= "<table class='table table-striped table-bordered '>"
        . "     <tr>"
        . "         <th>N<sup>o</sup> </th> "
        . "         <th> Student Name</th> "
        . "         <th> Class </th> "
        . "         <th> Year </th> "
        . "         <th> Action </th> "
        . "     </tr>";

if(mysqli_num_rows($result) == 0)
{
    $output .= "<tr>"
            . " <td colspan='9' class='text-center'>
                        <strong class='text-primary'>
                            No names Match this search
                        </strong>
                      </td>"
            . "</tr>";
}

else
{
    while($row = mysqli_fetch_array($result))
    {
        $output .= "<tr class='white_background'>"
                . "     <td>" . $count++ . "</td>"
                . "     <td>" . $row['first_name'] . "</td>"
                . "     <td>" . $row['last_name'] . "</td>"
                . "     <td>" . $row['form']  . "</td>"
                . "     <td class='text-center'>
                            <a href='add_mark.php?id=". $row['roll'] ."' data-id1=" . $row['roll'] . "
                                class='btn btn-success change' title='Change Department'>
                                View Details
                            </a>
							<a href='edit_marks.php?id=". $row['roll'] ."' data-id1=" . $row['roll'] . "
                                class='btn btn-info change' title='Change Department'>
                                Edit Marks
                            </a>
                            
                    </td>"
                . "</tr>";
    }
}

$output .= "</table>";

echo $output;
