<?php

include("connection.php");
include("function.php");
include("navbar.php");


if(isset($_POST['training_update']))
{
    $expense_type 		= $_POST['expense_type'];
    $training_start_date 	= $_POST['training_start_date'];
    $training_end_date 		= $_POST['training_end_date'];
    $training_coordinator_name 		= $_POST['training_coordinator_name'];
    $training_id 			= $_POST['training_id'];




    $sql = "UPDATE training set expense_type='$expense_type', training_start_date='$training_start_date', training_end_date='$training_end_date', training_coordinator_name='$training_coordinator_name'  WHERE training_id='$training_id'";



    $record = $conn->query($sql);

    if($record)
    {
        echo "Updated Successfully!";
        //header("Location: member_detail.php?eid=$emp_id");
        echo "<meta http-equiv='refresh' content='1;url= training_batch_list_view.php'>";
        exit();
    }
}


if(isset($_GET['training_id']))
{
    $training_id = $_GET['training_id'];

    $sql = "SELECT * FROM training WHERE training_id='$training_id'";
    $result = $conn->query($sql);
    //echo $sql;die;
    if($row = mysqli_fetch_array($result))
    {
        $training_id = $row['training_id'];
        $expense_type = $row['expense_type'];
        $training_start_date = $row['training_start_date'];
        $training_end_date = $row['training_end_date'];
        $training_coordinator_name = $row['training_coordinator_name'];

    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Training Batch/Others Dept</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/jquery-ui.js"></script>
</head>
<script>

    $( function() {
        $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
        $( "#datepicker2" ).datepicker({ dateFormat: 'yy-mm-dd' });
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
    <div class="well" style="background-color:#b3b3b3; height:680px;"> </br>
        <h3 class="text-center text-black"> <b style="background-color:#F0E68C;">Training Batch/Others Dept</b></h3>
        <hr>
        <h4 class="text-center text-success"></h4>
        <form class="form-horizontal" style= "background-color:#87CEFA;margin-left:30%; margin-right:30%; border: 2px solid blanchedalmond;" method="POST" action="edit_training.php">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">Batch/Expenditure Name</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="inputEmail3" value="<?php echo $expense_type; ?>" placeholder="Batch/Expenditure Name" name="expense_type" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Batch Start Date</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="datepicker" value="<?php echo $training_start_date; ?>"autocomplete="off" placeholder="Batch Start Date" name="training_start_date">
                </div>
            </div>


            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Batch End Date</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="datepicker2" value="<?php echo $training_end_date; ?>"autocomplete="off" placeholder="Batch End Date" name="training_end_date">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">Batch Coordinator Name</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="inputEmail3"value="<?php echo $training_coordinator_name; ?>" placeholder="Batch Cordination Name"  name="training_coordinator_name">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-9 col-sm-3">
                    <button type="submit" class="btn btn-primary" name="training_update" >Save</button>
                    <input type="hidden" name="training_id" value="<?php echo $training_id; ?>">
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
