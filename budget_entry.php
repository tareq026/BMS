<?php
 
    include("connection.php");
    include("function.php");
    include("navbar.php");
	
	
	// Data insert Query
	if(isset($_POST['entry']))
	{
		$expense_type = $_POST['expense_type'];
		$budge_entry_date = $_POST['budget_entry_date'];
		$no_of_days = $_POST['no_of_days'];
		$budget_amount = $_POST['budget_amount'];
		$budget_note = $_POST['budget_note'];
		
		$sql = "insert into budget(expense_type, budget_entry_date,no_of_days,budget_amount,budget_note  ) values ('$expense_type', '$budge_entry_date','$no_of_days','$budget_amount','$budget_note')";
	  
	  
		$result = $conn->query($sql);
		
		if($result==1) 
		{			
			header("Location: budget_list_view.php");
		} 
		else 
		{
			echo "Invalid Login Information!";
		}
	
	}
	
	$training_array = getexpense_type();
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
<script>

	$( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );

</script>

<?php  include("sidebar.php");  ?>

<body>
<div class="col-sm-10">
   <div class="well" style=" background-color:#b3b3b3;height:680px;"></br>
      <h3 class="text-center text-black"><b style="background-color:#F0E68C">Budget Entry</b></h3>
      <hr>
      <h4 class="text-center text-success"></h4>
<form class="form-horizontal" style= "background-color:#87CEFA; margin-left:30%; margin-right:30%;  border: 2px solid blanchedalmond;" method="POST" action="budget_entry.php" >
       <div class="form-group">
                  <label for="inputEmail3" class="col-sm-5 control-label">Budget Expense type</label>
            <div class="col-sm-11">
	                <select class="form-control" placeholder="Budget Expense type" name="expense_type" >
                  <option></option>
	          <?php
			                 foreach($training_array as $key=>$value) {
			                 echo "<option value='$key'>$value</option>";
			   }
			  ?>
                   </select>
      </div>
           </div>

      <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Budget Entry Date:</label>
             <div class="col-sm-11">
                  <input type="text" class="form-control" id="datepicker" placeholder="Budget Entry Date" autocomplete="off" name="budget_entry_date"/>
             </div>
      </div>

      <div class="form-group">
                 <label for="inputEmail3" class="col-sm-3 control-label">No Of Days</label>
            <div class="col-sm-11">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="No Of Days" name="no_of_days">
            </div>
     </div>

      <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Budget Amount</label>
          <div class="col-sm-11">
                 <input type="text" class="form-control" id="inputEmail3" placeholder="Budget Amount"  name="budget_amount">
          </div>
     </div>
     <div class="form-group">
               <label for="inputEmail3" class="col-sm-3 control-label">NOTE</label>
         <div class="col-sm-11">
                <input type="text" class="form-control" id="inputEmail3" placeholder="NOTE"  name="budget_note">
         </div>
    </div>

     <div class="form-group">
            <div class="col-sm-offset-9 col-sm-3">
                 <button type="submit" class="btn btn-primary" name="entry" >Save</button>
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