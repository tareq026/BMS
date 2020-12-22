
<?php

	include("connection.php");
	include("navbar.php");
	
	
	// Data insert Query
	if(isset($_POST['enter']))
	{
		$supplier_name = $_POST['supplier_name'];
		$supplier_address = $_POST['supplier_address'];
		$supplier_contact_no = $_POST['supplier_contact_no'];
		$supplier_website = $_POST['supplier_website'];
		$supplier_email= $_POST['supplier_email'];
		$sql = "insert into supplier (supplier_name, supplier_address,supplier_contact_no,supplier_website,supplier_email ) values ('$supplier_name', '$supplier_address','$supplier_contact_no','$supplier_website','$supplier_email')";
	   
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
    <title>Supplier Info</title>
    <link href="css/bootstrap.css" rel="stylesheet">
   
</head>
<?php  include("sidebar.php");  ?>

<body>
    
 <div class="col-sm-10">
     <div class="well" style=" background-color:#b3b3b3;height:680px;"></br>
               <h3 class="text-center text-black"><b style="background-color:#F0E68C">Supplier Info</b></h3>
               <hr>
            <h4 class="text-center text-success"></h4>
 <form class="form-horizontal" style= "background-color:#87CEFA; margin-left:30%; margin-right:30%;  border: 2px solid blanchedalmond;" method="POST" action="supplier_info.php">
        <div class="form-group">
                       <label for="inputEmail3" class="col-sm-4 control-label">Supplier Name</label>
             <div class="col-sm-11">
                   <input type="text" class="form-control" id="inputEmail3" placeholder="Supplier Name" name="supplier_name" required>
           </div>
     </div>

   <div class="form-group">
                 <label for="inputEmail3" class="col-sm-4 control-label">Supplier Address</label>
        <div class="col-sm-11">
                <input type="text" class="form-control"  placeholder="Supplier Address" name="supplier_address">
        </div>
  </div>

  <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">Supplier Contact No</label>
          <div class="col-sm-11">
                 <input type="text" class="form-control" id="inputEmail3" placeholder="Supplier Contact No" name="supplier_contact_no">
          </div>
  </div>

   <div class="form-group">
                 <label for="inputEmail3" class="col-sm-4 control-label">Supplier Website</label>
          <div class="col-sm-11">
                  <input type="text" class="form-control" id="inputEmail3" placeholder="Supplier Website"  name="supplier_website">
         </div>
  </div>
  <div class="form-group">
                 <label for="inputEmail3" class="col-sm-4 control-label">Supplier Email</label>
         <div class="col-sm-11">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Supplier Email"  name="supplier_email">
        </div>
  </div>
  <div class="form-group">
            <div class="col-sm-offset-9 col-sm-3">
                 <button type="submit" class="btn btn-primary" name="enter" >Save</button>
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

