<style>
			
	.button1 {
			  background-color: green; /* Green */
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

	 include("connection.php");
	 include("function.php");
	 include("navbar.php");
	 include("sidebar.php");
      $training_array = getexpense_type();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Expenditure Report</title>
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
  
  
   function print(parameter)
  {
		
		var prtContent = document.getElementById(parameter).innerHTML;
		var WinPrint = window.open('', '', 'left=0,top=0,width=1200,height=900,toolbar=0,scrollbars=0,status=0');
		WinPrint.document.write(prtContent);
		WinPrint.document.close();
		WinPrint.focus();
		WinPrint.print();
		WinPrint.close();
  
  }
  

</script>

<body>
<div class="col-sm-10">
      <div class="well" style="background-color:#87CEFA; height:680px;"> </br>
	  <h3 class="text-center text-dark" ><b style="background-color:#F0E68C" >Expenditure Report</b></h3>
    <hr>

<?php

echo "<table border='0' cellspacing='1' align='center'>";

echo "<form action='$_SERVER[SCRIPT_NAME]' method='post'>

	<tr style='height:20px;'></tr>

	<tr bgcolor='#87CEFA'>
	  
		<td style='width:100px;'>From Date :</td>
		<td><input type='text' name='from_date' id='datepicker' placeholder='Enter From Date' required autocomplete='off' style='width:110px; text-align:center;'></td>
		<td style='width:100px;'>To Date :</td>
		<td><input type='text' name='to_date' id='datepicker2' placeholder='Enter End Date' required autocomplete='off' style='width:110px; text-align:center;'></td>
		 <td style='width:200px;'>Budget For(Batch Name) :</td>
		<td>
			<select class='form-control' placeholder='Budget Expense type' name='budget_for' style='width:150px;'>
			<option value='0'>------Select Batch-------</option>";
			
			                 foreach($training_array as $key=>$value) {
			                 echo "<option value='$key'>$value</option>";
			   }
			 
                   echo "</select>
		</td>
		<td><input style='margin:4px 10px;' class='button1' type='submit' name='generate_report' value='Generate Report'></td>
		
	</tr>
	<tr style='height:20px;'></tr>
</form>";

echo "</table>";

	



if(isset($_POST['generate_report'])) {

	$from_date 		= $_POST['from_date'];
	$to_date 		= $_POST['to_date'];
	$budget_for 	= $_POST['budget_for'];
	
	$sql = "SELECT * FROM expenditure where";
	
	if(!empty($budget_for)) $sql .= " expense_type = $budget_for and";
	
	$sql .= " expenditure_date between '$from_date' and '$to_date'";
	
	$record =  $conn->query($sql);
	
	echo "<body>";
	
	echo "<div style='text-align:center;'><button class='button2' onclick=\"print('report_content')\">Print</button></div><br>";
	
	echo "<div id='report_content'>";
	
	echo "<table border='1' cellspacing='0' cellpadding='0' align='center'>";
	
	echo "<tr><td colspan='6' style='height:30px; text-align:center; font-weight:bold; background-color:#87CEFA;'>Organization Name : Bangladesh Computer Council</td></tr>";
	
	echo "<tr bgcolor='#F0E68C' style='height:30px; font-weight:bold;'>
		<td style='width:60px; text-align:center'>SL No.</td>
		<td style='width:120px; text-align:center'>Exp. Date</td>
		<td style='width:200px; text-align:center'>Budget For</td>
		<td style='width:150px; text-align:center'>Voucher No</td>
		<td style='width:120px; text-align:center'>Exp. Amount</td>
	</tr>";
	
	$i=0;
	
	while($row = mysqli_fetch_array($record)) 
	{	
		$i++;
		
		$expense_type 			= $row['expense_type'];
		$expenditure_date 		= $row['expenditure_date'];
		$voucher_no 	        = $row['voucher_no'];
		$expenditure_amount 	= $row['expenditure_amount'];
		
		
		
		
		
		
		$budget_for = array();
		$sql2 = "SELECT * FROM training";
		$rec2 = $conn->query($sql2);
		while($row2 = mysqli_fetch_array($rec2))
		{
			$budget_for[$row2['training_id']] = $row2['expense_type'];
		}
		
		
		
		
		echo "<tr bgcolor='#F4F4F4'>
			<td style='text-align:center'>$i</td>
			<td>$expenditure_date</td>
			<td style='text-align:center'>$budget_for[$expense_type]</td>
			<td style='text-align:center'>$voucher_no</td>
			<td style='text-align:right'>$expenditure_amount</td>
			
		</tr>";
	
	}
	
	
	
	
	echo "</table>";
	
	echo "</div>";
	
	echo "</body>";


}
	


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