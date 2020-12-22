<?php

    include("connection.php");
    include("function.php");
	include("navbar.php");
	include("sidebar.php");
	
?>

<style>
			
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
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Budget Approval</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    	
</head>


<body>

  <div class="col-sm-10">
      <div class="well" style="background-color:#87CEFA; height:680px;"></br>
	  <h3 class="text-center text-dark"><b style="background-color:#F0E68C">Budget Approval</b></h3>
    <hr>
      
<?php
 
 
   
	
	$budget_for = array();
	
	$sql2 = "SELECT * FROM training";
	$rec2 = $conn->query($sql2);
	while($row2 = mysqli_fetch_array($rec2))
	{
		$budget_for[$row2['training_id']] = $row2['expense_type'];
	}
	
	
	
	
	if(isset($_GET['budget_id'])) 
	{
		$budget_id = $_GET['budget_id'];
		//echo "update budget set approve_status = 1 WHERE budget_id='$budget_id'";die;
		$sql = "update budget set approve_status = 1 WHERE budget_id='$budget_id'";
		$conn->query($sql);
		
	}


	
	
		$sql = "SELECT * FROM budget";
		$rec = $conn->query($sql);
		
			echo "<table border='2' cellpadding='0' cellspacing='0' align='center'>";
			
			
			echo "<thead>";
			
			echo "<tr style='background-color:#66CCCC'>
					<td>Budget For</td>
					<td>Budget Entry Date</td>
					<td>No Of Days</td>
					<td>Budget Amount</td>
					<td>Approved Status</td>
					<td>Action</td>
				</tr>";
				
				echo "</thead>";
				
			echo "<tbody style='height:100px; overflow-y:scroll'>";
				
			while($row = mysqli_fetch_array($rec))
			{
			
				$expense_type 		= 	$row['expense_type'];
				$budget_entry_date 	= 	$row['budget_entry_date'];
				$no_of_days 		= 	$row['no_of_days'];
				$budget_amount 		= 	$row['budget_amount'];
				$budget_id 			= 	$row['budget_id'];
				$status 			= 	$row['approve_status'];
				
				if($status == 0)
				{
					$approved_status = 'Pending';
				}
				else
				{
					$approved_status = 'Approved';
				}
				
				echo "<tr bgcolor='#F4F4F4'>
					<td align='center'>$budget_for[$expense_type]</td>
					<td>$budget_entry_date</td>
					<td align='center'>$no_of_days</td>
					<td align='right'>$budget_amount</td>
					<td align='center'>$approved_status</td>
					<td>
						<a href='$_SERVER[SCRIPT_NAME]?budget_id=$budget_id' class='button1'>Approval</a>
					</td>
				</tr>";
			}
			
			echo "</tbody>";
			
			echo "</table>";	
	
?>

	
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



