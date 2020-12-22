<?php
 
    include("connection.php");
    include("function.php");
    include("navbar.php");
	include("sidebar.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="css/bootstrap.css" rel="stylesheet">

</head>

<body>
 
  <div class="col-sm-10">
      <div class="well" style="height: 680px">
          <div class="bd-example">
              <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img src="PHOTO/bcc1.jpg" class="d-block w-100" alt="...">
						  
                          <div class="carousel-caption d-none d-md-block">
                              
                          </div>
                      </div>
                      <div class="carousel-item">
                          <img src="PHOTO/b.jpg" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                              
                          </div>
                      </div>
                      <div class="carousel-item">
                          <img src="PHOTO/d.jpg" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                              
                          </div>
                      </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
              </div>
          </div>
	
       </div>
  </div>
  

</div>


</body>
</html>
