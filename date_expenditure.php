<?php

	include("connection.php");
	include("function.php");
	include("navbar.php");
	

	// Data insert Query
	if(isset($_POST['date_expense']))
	{
	    $photo_name = $_FILES['voucher_image']['name'];
        $photo_path = $_FILES['voucher_image']['tmp_name'];
		
		//echo $photo_name.'_'.$photo_path;die;

		$expenditure_date = $_POST['expenditure_date'];
		$expense_type = $_POST['expense_type'];
		$expenditure_amount = $_POST['expenditure_amount'];
		$voucher_no = $_POST['voucher_no'];
		$voucher_image =  $photo_name;
		
		
		move_uploaded_file($photo_path, "photo/$photo_name");	
		
		
		
		$sql = "insert into expenditure(expenditure_date,expense_type,expenditure_amount,voucher_no,voucher_image) values ('$expenditure_date', '$expense_type','$expenditure_amount','$voucher_no','$voucher_image')";
		
		//echo $sql;die;
	
		$result = $conn->query($sql);
	if($result==1) 
		{			
			header("Location: expenditure_list_view.php");
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
    <title>Date Wise Expenditure</title>
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
     <div class="well" style="background-color:#b3b3b3;height:680px;"></br>
            <h3 class="text-center text-black"><b style="background-color:#F0E68C">Date Wise Expenditure</b></h3>
       <hr>
           <h4 class="text-center text-success"></h4>
 <form class="form-horizontal"   style= "background-color:#87CEFA;margin-left:30%; margin-right:30%; border: 2px solid blanchedalmond;" method= "POST" action="date_expenditure.php" enctype="multipart/form-data">
             <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Expenditure Date</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control"  id="datepicker" autocomplete="off"  placeholder="Expenditure Date" name="expenditure_date" required>
               </div>
           </div>

            <div class="form-group">
                   <label for="inputEmail3" class="col-sm-5 control-label">Expense type/Batch:</label>
                <div class="col-sm-11">
                   <select class="form-control" placeholder="Expense type/Batch" name="expense_type" >
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
                     <label for="inputEmail3" class="col-sm-5 control-label">Expenditure Amount</label>
               <div class="col-sm-11">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Expenditure Amount" name="expenditure_amount">
               </div>
         </div>

         <div class="form-group">
                     <label for="inputEmail3" class="col-sm-3 control-label">Voucher No</label>
              <div class="col-sm-11">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Voucher No"  name="voucher_no">
              </div>
         </div>
        <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Voucher Image</label>
            <div class="col-sm-11">
                 <input type="file" class="form-control" id="inputEmail3" placeholder="Voucher Image"  name="voucher_image">
           </div>
       </div>

       <div class="form-group">
             <div class="col-sm-offset-9 col-sm-3">
                 <button type="submit" class="btn btn-primary" name="date_expense" >Save</button>
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
