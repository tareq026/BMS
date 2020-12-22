<?php

function getexpense_type()
{

	include("connection.php");
	
	
	$sql = "SELECT * FROM training";
	$rec = $conn->query($sql);
	
	$trining_array = array();
	
	while($row = mysqli_fetch_array($rec))
	{
		$training_id = $row['training_id'];
		$expense_type = $row['expense_type'];
		
		//print_r($expense_type);
		
		$training_array[$training_id] = $expense_type;
	}
	
	return $training_array;
}













?>