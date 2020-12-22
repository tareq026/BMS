<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>staff list view</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/jquery-ui.js"></script>
</head>

<?php

include("connection.php");
include("function.php");
include("navbar.php");


if(isset($_GET['staff_id']))
{
    $staff_id = $_GET['staff_id'];

    $sql = "DELETE FROM staff WHERE staff_id='$staff_id'";
    $conn->query($sql);
    header("Location: staff_list_view.php");
}


?>

<style>

    .right-button
    {
        float: none;
        display: block;
        text-align: right;
        margin: 5px;
    }

    .button1 {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 3px 6px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 13px;
        margin: 2px 2px;
        cursor: pointer;
        border-radius: 4px;
    }

    .button2 {
        background-color: #f44336; /* Red */
        border: none;
        color: white;
        padding: 3px 6px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 13px;
        margin: 2px 2px;
        cursor: pointer;
        border-radius: 4px;
    }

</style>

<?php

include("sidebar.php");

?>


<body>
<div class="col-sm-10">
    <div class="well" style=" background-color:#b3b3b3;height:680px;"></br>

        <br>
        <h3 class="text-center text-black"><b style="background-color:#F0E68C">Staff List View</b></h3>

        <div class="sub-catagory" style= " background-color:#87CEFA; margin-left:10%; margin-right:10%;  border: 2px solid blanchedalmond;">

            <div class="row">
                <div class="col-sm-12">
                    <div class="right-button">
                        <a href='staff_information.php' class='btn btn-primary'>Add New organization</a>
                    </div>
                </div>
            </div>

            <?php


            $sql = "SELECT * FROM staff";
            $rec = $conn->query($sql);

            echo "<table border='1' style='width:100%' cellpadding='0' cellspacing='0' align='center'>";
            echo "<thead>";
            echo "<tr style='background-color:#66CCCC'>
							<td align='center'>SL</td>
							<td align='center'>Staff Name</td>
							<td align='center'>Staff Designation</td>
							<td align='center'>Staff Id No</td>
							<td align='center'>Staff Password</td>
							<td align='center'>Staff Email</td>
							<td align='center'>Staff Address</td>
							<td align='center'>Staff Contact No</td>
							<td align='center'>Action</td>
						</tr>";

            echo "</thead>";
            echo "<tbody style='height:20px; overflow-y:scroll'>";

            $i=0;

            while($row = mysqli_fetch_array($rec))
            {
                $i++;
                $staff_name = $row['staff_name'];
                $staff_designation = $row['staff_designation'];
                $staff_id_no = $row['staff_id_no'];
                $staff_password = $row['staff_password'];
                $staff_email = $row['staff_email'];
                $staff_address = $row['staff_address'];
                $staff_contact_no = $row['staff_contact_no'];
                $staff_id = $row['staff_id'];


                echo "<tr>
							<td align='center'>$i</td>
							<td align='center'>$staff_name</td>
							<td align='center'>$staff_designation</td>
							<td align='center'>$staff_id_no</td>
							<td align='center'>$staff_password</td>
							<td align='center'>$staff_email</td>
							<td align='center'>$staff_address</td>
							<td align='center'>$staff_contact_no</td>
							
							<td>
								<a href='edit_staff_info.php?staff_id=$staff_id' class='button1'>Edit</a> | 
								<a href='$_SERVER[SCRIPT_NAME]?staff_id=$staff_id' class='button2' onClick=\"return confirm('Are you sure?')\">Delete</a>
							</td>
						</tr>";
            }

            echo "</tbody>";
            echo "</table>";

            ?>

        </div>
    </div>
</div>

</div>
<div class="card text-center  bg-success">
    <div class="card-footer text-light">
        <p class="ft">Copy Right@ Diploma in ICT (Batch#20)</p>
        <p class="ft"><a href="https://www.bcc.gov.bd">Bangladesh Computer Council</a></p>
    </div>
</div>
</div>

</body>
</html>