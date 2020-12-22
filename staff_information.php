<?php
     include("connection.php");
     include("navbar.php");
	 
	 
	// Data insert Query
	if(isset($_POST['information']))
	{
		$staff_name = $_POST['staff_name'];
		$staff_designation = $_POST['staff_designation'];
		$staff_id_no = $_POST['staff_id_no'];
		$staff_password = $_POST['staff_password'];
		$staff_email = $_POST['staff_email'];
		$staff_address = $_POST['staff_address'];
		$staff_contact_no = $_POST['staff_contact_no'];
		$sql = "insert into staff (staff_name, staff_designation,staff_id_no,staff_password,staff_email,staff_address,staff_contact_no ) values ('$staff_name','$staff_designation','$staff_id_no','$staff_password','$staff_email','$staff_address','$staff_contact_no')";
	      
		  
		$result = $conn->query($sql);
	if($result==1) 
		{			
			header("Location: staff_list_view.php");
		} 
		else 
		{
			echo "Invalid Login Information!";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Staff Information</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    	
</head>

<?php  include("sidebar.php");  ?>
<body>
  
 <div class="col-sm-10">
     <div class="well" style="background-color:#b3b3b3;height:680px;">
          <h3 class="text-center text-black"><b style="background-color:#F0E68C">Staff Information</b></h3>

         <h4 class="text-center text-success"></h4>
<form class="form-horizontal" style= "background-color:#87CEFA; margin-left:30%; margin-right:30%;  border: 2px solid blanchedalmond;"  method="POST" action="staff_information.php">
       <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">Staff Name</label>
          <div class="col-sm-11">
              <input type="text" class="form-control" id="inputEmail3" placeholder="Staff Name" name="staff_name" required>
         </div>
     </div>

    <div class="form-group">
                   <label for="inputEmail3" class="col-sm-4 control-label">Staff Designation</label>
         <div class="col-sm-11">
                <input type="text" class="form-control"  placeholder="Staff Designation" name="staff_designation">
         </div>
   </div>

   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Staff Id No</label>
           <div class="col-sm-11">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Staff Id No" name="staff_id_no">
          </div>
  </div>

    <div class="form-group">
                 <label for="inputEmail3" class="col-sm-4 control-label">Staff Password</label>
         <div class="col-sm-11">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Staff Password"  name="staff_password">
         </div>
   </div>
    <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Staff Email</label>
           <div class="col-sm-11">
                  <input type="text" class="form-control" id="inputEmail3" placeholder="Staff Email"  name="staff_email">
          </div>
   </div>
   <div class="form-group">
               <label for="inputEmail3" class="col-sm-4 control-label">Staff Address</label>
        <div class="col-sm-11">
              <input type="text" class="form-control" id="inputEmail3" placeholder="Staff Address"  name="staff_address">
       </div>
  </div>
  <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">Staff Contact No</label>
           <div class="col-sm-11">
                  <input type="text" class="form-control" id="inputEmail3" placeholder="Staff Contact No"  name="staff_contact_no">
          </div>
  </div>
  <div class="form-group">
             <div class="col-sm-offset-9 col-sm-3">
                   <button type="submit" class="btn btn-primary" name="information" >Save</button>
            </div>
  </div>
</form>
   </div>
</div>

</div>
   <div class="card text-center  bg-success" >
    <div class="card-footer text-light">
         <p class="ft">Copy Right@ Diploma in ICT (Batch#20)</p>
         <p class="ft"><a href="https://www.bcc.gov.bd">Bangladesh Computer Council</a></p>
     </div>
    </div>
</div>

</body>
</html>
