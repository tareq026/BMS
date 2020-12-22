<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Organization List View</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/jquery-ui.js"></script>
</head>

<?php

include("connection.php");
include("function.php");
include("navbar.php");


if(isset($_GET['organization_id']))
{
    $organization_id = $_GET['organization_id'];

    $sql = "DELETE FROM organization WHERE organization_id='$organization_id'";
    $conn->query($sql);
    header("Location: organization_list_view.php");
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
        <h3 class="text-center text-black"><b style="background-color:#F0E68C">Organization List View</b></h3>

        <div class="sub-catagory" style= " background-color:#87CEFA; margin-left:10%; margin-right:10%;  border: 2px solid blanchedalmond;">

            <div class="row">
                <div class="col-sm-12">
                    <div class="right-button">
                        <a href='organization_info.php' class='btn btn-primary'>Add New organization</a>
                    </div>
                </div>
            </div>

            <?php


            $sql = "SELECT * FROM organization";
            $rec = $conn->query($sql);

            echo "<table border='1' style='width:100%' cellpadding='0' cellspacing='0' align='center'>";
            echo "<thead>";
            echo "<tr style='background-color:#66CCCC'>
							<td align='center'>SL</td>
							<td align='center'>Organization Name</td>
							<td align='center'>Organization Address</td>
							<td align='center'>Organization Website</td>
							<td align='center'>Organization Email</td>
							<td align='center'>Organization Contact No</td>
							<td align='center'>Action</td>
						</tr>";

            echo "</thead>";
            echo "<tbody style='height:20px; overflow-y:scroll'>";

            $i=0;

            while($row = mysqli_fetch_array($rec))
            {
                $i++;
                $organization_name = $row['organization_name'];
                $organization_address = $row['organization_address'];
                $organization_website = $row['organization_website'];
                $organization_email = $row['organization_email'];
                $organization_contact_no = $row['organization_contact_no'];
                $organization_id = $row['organization_id'];


                echo "<tr>
							<td align='center'>$i</td>
							<td align='center'>$organization_name</td>
							<td align='center'>$organization_address</td>
							<td align='center'>$organization_website</td>
							<td align='center'>$organization_email</td>
							<td align='center'>$organization_contact_no</td>
							
							<td>
								<a href='edit_organization.php?organization_id=$organization_id' class='button1'>Edit</a> | 
								<a href='$_SERVER[SCRIPT_NAME]?organization_id=$organization_id' class='button2' onClick=\"return confirm('Are you sure?')\">Delete</a>
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