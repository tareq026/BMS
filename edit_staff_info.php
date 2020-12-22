<?php

include("connection.php");
include("function.php");
include("navbar.php");



if(isset($_POST['staff_update']))
{
    $staff_name = $_POST['staff_name'];
    $staff_designation = $_POST['staff_designation'];
    $staff_id_no = $_POST['staff_id_no'];
    $staff_password = $_POST['staff_password'];
    $staff_email = $_POST['staff_email'];
    $staff_address = $_POST['staff_address'];
    $staff_contact_no = $_POST['staff_contact_no'];
    $staff_id = $_POST['staff_id'];



    $sql = "UPDATE staff set staff_name='$staff_name', staff_designation='$staff_designation', staff_id_no='$staff_id_no', staff_password='$staff_password', staff_email='$staff_email',staff_address='$staff_address',staff_contact_no='$staff_contact_no' WHERE staff_id='$staff_id'";



    $record = $conn->query($sql);
    if($record)
    {
        echo "Updated Successfully!";
        //header("Location: member_detail.php?eid=$emp_id");
        echo "<meta http-equiv='refresh' content='1;url=staff_list_view.php'>";
        exit();
    }
}


if(isset($_GET['staff_id']))
{
    $staff_id = $_GET['staff_id'];

    $sql = "SELECT * FROM staff WHERE staff_id='$staff_id'";
    $result = $conn->query($sql);
    if($row = mysqli_fetch_array($result))
    {
        $staff_name = $row['staff_name'];
        $staff_designation = $row['staff_designation'];
        $staff_id_no = $row['staff_id_no'];
        $staff_password = $row['staff_password'];
        $staff_email = $row['staff_email'];
        $staff_address = $row['staff_address'];
        $staff_contact_no = $row['staff_contact_no'];
        $staff_id = $row['staff_id'];
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>edit staff</title>
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
    <div class="well" style="background-color:#b3b3b3;height:680px;">
        <h3 class="text-center text-black"><b style="background-color:#F0E68C">Staff Information</b></h3>

        <h4 class="text-center text-success"></h4>
        <form class="form-horizontal" style= "background-color:#87CEFA; margin-left:30%; margin-right:30%;  border: 2px solid blanchedalmond;"  method="POST" action="edit_staff_info.php">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Staff Name</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="inputEmail3"value="<?php echo $staff_name; ?>" placeholder="Staff Name" name="staff_name" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Staff Designation</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" value="<?php echo $staff_designation; ?>" placeholder="Staff Designation" name="staff_designation">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Staff Id No</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control"value="<?php echo $staff_id_no; ?>" id="inputEmail3" placeholder="Staff Id No" name="staff_id_no">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Staff Password</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" value="<?php echo $staff_password; ?>"id="inputEmail3" placeholder="Staff Password"  name="staff_password">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Staff Email</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" value="<?php echo $staff_email; ?>"id="inputEmail3" placeholder="Staff Email"  name="staff_email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Staff Address</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control"value="<?php echo $staff_address; ?>" id="inputEmail3" placeholder="Staff Address"  name="staff_address">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">Staff Contact No</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control"value="<?php echo $staff_contact_no; ?>" id="inputEmail3" placeholder="Staff Contact No"  name="staff_contact_no">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-9 col-sm-3">
                    <button type="submit" class="btn btn-primary" name="staff_update" >Save</button>
                    <input type="hidden" name="staff_id" value="<?php echo $staff_id; ?>">
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