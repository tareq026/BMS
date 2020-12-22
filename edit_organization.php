<?php

include("connection.php");
include("function.php");
include("navbar.php");



if(isset($_POST['organization_update']))
{
    $organization_name 		= $_POST['organization_name'];
    $organization_address 	= $_POST['organization_address'];
    $organization_website 		= $_POST['organization_website'];
    $organization_email 		= $_POST['organization_email'];
    $organization_contact_no 		= $_POST['organization_contact_no'];
    $organization_id 			= $_POST['organization_id'];



    $sql = "UPDATE organization set organization_name='$organization_name', organization_address='$organization_address', organization_website='$organization_website', organization_email='$organization_email', organization_contact_no='$organization_contact_no' WHERE organization_id='$organization_id'";



    $record = $conn->query($sql);
    if($record)
    {
        echo "Updated Successfully!";
        //header("Location: member_detail.php?eid=$emp_id");
        echo "<meta http-equiv='refresh' content='1;url=organization_list_view.php'>";
        exit();
    }
}


if(isset($_GET['organization_id']))
{
    $organization_id = $_GET['organization_id'];

    $sql = "SELECT * FROM organization WHERE organization_id='$organization_id'";
    $result = $conn->query($sql);
    if($row = mysqli_fetch_array($result))
    {
        $organization_id = $row['organization_id'];
        $organization_name = $row['organization_name'];
        $organization_address = $row['organization_address'];
        $organization_website = $row['organization_website'];
        $organization_email = $row['organization_email'];
        $organization_contact_no = $row['organization_contact_no'];
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Budget Entry</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/jquery-ui.js"></script>
</head>


<style>

    .center-block
    {
        float: none;
        display: block;
        margin-left: 10px; margin-right: 10px; margin-bottom: 10px;
    }

    .center-button
    {
        float: none;
        display: block;
        text-align: center;
        margin-bottom: 10px;
    }

</style>
<?php

include("sidebar.php");

?>
<div class="col-sm-10">
    <div class="well" style=" background-color:#b3b3b3;height:680px;"></br>
        <h3 class="text-center text-black"><b style="background-color:#F0E68C">Organization Info</b></h3>
        <hr>
        <h4 class="text-center text-success"></h4>
        <form class="form-horizontal" style= "background-color:#87CEFA; margin-left:30%; margin-right:30%;  border: 2px solid blanchedalmond;" method= "POST" action="edit_organization.php">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">Organization Name</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="inputEmail3" value="<?php echo $organization_name; ?>" placeholder="Organization Name" name="organization_name" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">Organization Address</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="inputEmail3" value="<?php echo $organization_address; ?>" placeholder="Organization Address" name="organization_address">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">Organization Website</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="inputEmail3" value="<?php echo $organization_website; ?>"placeholder="Organization Website" name="organization_website">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Organization Email</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="inputEmail3" value="<?php echo $organization_email; ?>" placeholder="Organization Email"  name="organization_email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">Organization Contact No</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="inputEmail3" value="<?php echo $organization_contact_no; ?>" placeholder="Organization Contact No"  name="organization_contact_no">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-9 col-sm-3">
                    <button type="submit" class="btn btn-primary" name="organization_update" >Save</button>
                    <input type="hidden" name="organization_id" value="<?php echo $organization_id; ?>">
                </div>
            </div>
        </form>
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
