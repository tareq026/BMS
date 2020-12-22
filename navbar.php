<?php
session_start();
if(!isset($_SESSION['id'])){
    header('Location: index.php');
}
if(isset($_GET['status'])){
    if($_GET['status']=='logout'){
        require_once('Login.php');
        $login= new Login();
        $message= $login->adminLogout();
        $_SESSION['message']=$message;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
</head>

<body>
    
      <nav class="navbar navbar-expand-lg navbar-dark bg-success ">
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav mr-auto">
                 <li class="nav-item active ">
                       <a class="nav-link" href="http://localhost/bms20/dashboard.php">Home </a>
                 </li>
                <li class="nav-item active">
                      <a class="nav-link" href="http://localhost/bms20/contact.php">Contact Us</a>
               </li>
     
               <li class="nav-item active ">
                     <a class="nav-link " href="http://localhost/bms20/gallery.php">Gallery</a>
               </li>
           </ul>
             <ul class="nav navbar-nav navbar-right">
                 <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="text-transform: uppercase; color:white;"><?php echo "Welcome ".$_SESSION['name'];?> <span class="caret"></span></a>
                     <ul style= "background-color:green;" class="dropdown-menu">
                         <li><a href="?status=logout" style="color:white;">Logout</a></li>
                     </ul>
                 </li>
             </ul>
       </div>
</nav>
</div>
</body>
</html>
