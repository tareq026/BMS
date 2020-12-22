<?php

include("connection.php");
include("function.php");
include("navbar.php");



if(isset($_POST['supplier_update']))
{
    $supplier_name = $_POST['supplier_name'];
    $supplier_address = $_POST['supplier_address'];
    $supplier_contact_no = $_POST['supplier_contact_no'];
    $supplier_website = $_POST['supplier_website'];
    $supplier_email= $_POST['supplier_email'];
    $supplier_id = $_POST['supplier_id'];



    $sql = "UPDATE supplier set supplier_name='$supplier_name',supplier_address='$supplier_address', supplier_contact_no='$supplier_contact_no', supplier_website='$supplier_website', supplier_email='$supplier_email' WHERE supplier_id='$supplier_id'";



    $record = $conn->query($sql);
    if($record)
    {
        echo "Updated Successfully!";
        //header("Location: member_detail.php?eid=$emp_id");
        echo "<meta http-equiv='refresh' content='1;url=supplier_list_view.php'>";
        exit();
    }
}


if(isset($_GET['supplier_id']))
{
    $supplier_id = $_GET['supplier_id'];

    $sql = "SELECT * FROM supplier WHERE supplier_id='$supplier_id'";
    $result = $conn->query($sql);
    if($row = mysqli_fetch_array($result))
    {
        $supplier_name = $row['supplier_name'];
        $supplier_address = $row['supplier_address'];
        $supplier_contact_no = $row['supplier_contact_no'];
        $supplier_website = $row['supplier_website'];
        $supplier_email= $row['supplier_email'];
        $supplier_id = $row['supplier_id'];
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
    <div class="well" style=" background-color:#b3b3b3;height:680px;"></br>
        <h3 class="text-center text-black"><b style="background-color:#F0E68C">Supplier Info</b></h3>
        <hr>
        <h4 class="text-center text-success"></h4>
        <form class="form-horizontal" style= "background-color:#87CEFA; margin-left:30%; margin-right:30%;  border: 2px solid blanchedalmond;" method="POST" action="edit_supplier_info.php">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Supplier Name</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" value="<?php echo $supplier_name; ?>" id="inputEmail3" placeholder="Supplier Name" name="supplier_name" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Supplier Address</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" value="<?php echo $supplier_address; ?>"  placeholder="Supplier Address" name="supplier_address">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">Supplier Contact No</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" value="<?php echo $supplier_contact_no; ?>" id="inputEmail3" placeholder="Supplier Contact No" name="supplier_contact_no">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Supplier Website</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" value="<?php echo $supplier_website; ?>" id="inputEmail3" placeholder="Supplier Website"  name="supplier_website">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Supplier Email</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" value="<?php echo $supplier_email; ?>" id="inputEmail3" placeholder="Supplier Email"  name="supplier_email">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-9 col-sm-3">
                    <button type="submit" class="btn btn-primary" name="supplier_update" >Save</button>
                    <input type="hidden" name="supplier_id" value="<?php echo $supplier_id; ?>">
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
</html>