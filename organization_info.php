<?php
     include("connection.php");
     include("navbar.php");
    
	 
	// Data insert Query
	if(isset($_POST['registration']))
	{
		$organization_name      = $_POST['organization_name'];
		$organization_address   = $_POST['organization_address'];
		$organization_website   = $_POST['organization_website'];
		$organization_email     = $_POST['organization_email'];
		$organization_contact_no= $_POST['organization_contact_no'];
		
		
		$sql = "insert into organization(organization_name,organization_address,organization_website,organization_email,organization_contact_no) values ('$organization_name','$organization_address','$organization_website','$organization_email','$organization_contact_no')";
		
		//echo $sql;die;
	
		$result = $conn->query($sql);
		if($result==1) 
		{			
			header("Location: organization_list_view.php");
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
    <title>Organization Info</title>
    <link href="css/bootstrap.css" rel="stylesheet">
   
   </head>
<?php  include("sidebar.php");  ?>
<body>
    
<div class="col-sm-10">
   <div class="well" style=" background-color:#b3b3b3;height:680px;"></br>
      <h3 class="text-center text-black"><b style="background-color:#F0E68C">Organization Info</b></h3>
    <hr>
      <h4 class="text-center text-success"></h4>
 <form class="form-horizontal" style= "background-color:#87CEFA; margin-left:30%; margin-right:30%;  border: 2px solid blanchedalmond;" method= "POST" action="organization_info.php">
       <div class="form-group">
             <label for="inputEmail3" class="col-sm-5 control-label">Organization Name</label>
           <div class="col-sm-11">
                 <input type="text" class="form-control" id="inputEmail3" placeholder="Organization Name" name="organization_name" required>
           </div>
      </div>

      <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">Organization Address</label>
          <div class="col-sm-11">
               <input type="text" class="form-control" id="inputEmail3" placeholder="Organization Address" name="organization_address">
         </div>
    </div>

    <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">Organization Website</label>
            <div class="col-sm-11">
                 <input type="text" class="form-control" id="inputEmail3" placeholder="Organization Website" name="organization_website">
            </div>
    </div>

    <div class="form-group">
                 <label for="inputEmail3" class="col-sm-4 control-label">Organization Email</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Organization Email"  name="organization_email">
            </div>
      </div>
     <div class="form-group">
                  <label for="inputEmail3" class="col-sm-5 control-label">Organization Contact No</label>
             <div class="col-sm-11">
                  <input type="text" class="form-control" id="inputEmail3" placeholder="Organization Contact No"  name="organization_contact_no">
             </div>
     </div>

     <div class="form-group">
               <div class="col-sm-offset-9 col-sm-3">
                         <button type="submit" class="btn btn-primary" name="registration" >Save</button>
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
