<?php
    session_start();
    if(isset($_SESSION['id'])){
        header('Location: dashboard.php');
    }

    $message='';
    if(isset($_POST['registration'])){
        require_once('Login.php');
        $login = new Login();
        $message=$login->adminLoginCheck($_POST);
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body style="background:url(photo/b.jpg);">
    
    <div class="container " style="margin-top:15%; margin-left: 30%; ">
        <div class="row">
            <div class="col-sm-5 col-sm-offset-3">
                <div class="well" style="background-color:beige; border: 2px solid green;">
                <h3 class="text-center text-success">Admin Login Panel</h3>
                <hr/>
                    <h4 class="text-center text-danger"><?php echo $message;?></h4>
                    <h4 class="text-center text-danger">
                        <?php if(isset($_SESSION['message'])){echo $_SESSION['message'];};
                        unset($_SESSION['message']);
                        ?>
                    </h4>
                  <form class="form-horizontal" style="margin-left: 5%" method="post" action="">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-8 control-label">User Name</label>
                        <div class="col-sm-11">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="User Name" name="user_name">
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
                    <div class="col-sm-11">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="user_password">
                  </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Remember me
                  </label>
              </div>
          </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success btn-block" name="registration">Sign in</button>
      </div>
  </div>
</form>
</div>


</div>
<div class="col-sm-4"></div>
</div>
</div>
</body>
</html>