<?php

include("connection.php");
include("function.php");
include("navbar.php");

$training_array = getexpense_type();


if(isset($_POST['expenditure_update']))
{
	$photo_name = $_FILES['voucher_image']['name'];
    $photo_path = $_FILES['voucher_image']['tmp_name'];


    $expense_type 		= $_POST['expense_type'];
    $expenditure_date 	= $_POST['expenditure_date'];
    $expenditure_amount 		= $_POST['expenditure_amount'];
    $voucher_no 		= $_POST['voucher_no'];
    $expenditure_id 			= $_POST['expenditure_id'];
    $voucher_image =  $photo_name;


    move_uploaded_file($photo_path, "photo/$photo_name");


    $sql = "UPDATE expenditure set expense_type='$expense_type', expenditure_date='$expenditure_date', expenditure_amount='$expenditure_amount', voucher_no='$voucher_no', voucher_image='$voucher_image' WHERE expenditure_id='$expenditure_id'";



    $record = $conn->query($sql);
    if($record)
    {
        echo "Updated Successfully!";
        //header("Location: member_detail.php?eid=$emp_id");
        echo "<meta http-equiv='refresh' content='1;url=expenditure_list_view.php'>";
        exit();
    }
}


if(isset($_GET['expenditure_id']))
{
    $expenditure_id = $_GET['expenditure_id'];

    $sql = "SELECT * FROM expenditure WHERE expenditure_id='$expenditure_id'";
    $result = $conn->query($sql);
    if($row = mysqli_fetch_array($result))
    {
        $expenditure_id = $row['expenditure_id'];
        $expense_type = $row['expense_type'];
        $expenditure_date = $row['expenditure_date'];
        $expenditure_amount = $row['expenditure_amount'];
        $voucher_no = $row['voucher_no'];
        $voucher_image = $row['voucher_image'];
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Expenditure</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/jquery-ui.js"></script>

</head>
<script>

    $( function() {
        $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
    } );

</script>
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
<body>

<div class="col-sm-10">
    <div class="well" style="background-color:#b3b3b3; height:680px;"></br>
        <h3 class="text-center text-black"><b style="background-color:#F0E68C">Date Wise Expenditure</b></h3>
        <hr>
        <h4 class="text-center text-success"></h4>
        <form class="form-horizontal"  style= "background-color:#87CEFA;margin-left:30%; margin-right:30%; border: 2px solid blanchedalmond;" method= "POST" action="edit_expenditure.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">Expense type/Batch:</label>
                <div class="col-sm-11">
                    <select class="form-control" placeholder="Expense type/Batch" name="expense_type" >
                        <option></option>
                        <?php
                        foreach($training_array as $key=>$value) {
                            if($expense_type==$key) {
                                echo "<option value='$key' selected>$value</option>";
                            } else {
                                echo "<option value='$key'>$value</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Expenditure Date</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control"  id="datepicker"value="<?php echo $expenditure_date; ?>" autocomplete="off"  placeholder="Expenditure Date" name="expenditure_date" required>
                </div>
            </div>



            <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">Expenditure Amount</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="inputEmail3"value="<?php echo $expenditure_amount; ?>" placeholder="Expenditure Amount" name="expenditure_amount">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Voucher No</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="inputEmail3"value="<?php echo $voucher_no; ?>" placeholder="Voucher No"  name="voucher_no">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Voucher Image</label>
                <div class="col-sm-11">
                    <input type="file" class="form-control" id="inputEmail3"value="<?php echo $voucher_image; ?>" placeholder="Voucher Image"  name="voucher_image">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-9 col-sm-3">
                    <button type="submit" class="btn btn-primary" name="expenditure_update" >Save</button>
                    <input type="hidden" name="expenditure_id" value="<?php echo $expenditure_id; ?>">
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
