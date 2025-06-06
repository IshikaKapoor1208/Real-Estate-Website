<?php
    include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body{
            background-image: url(images/bg.jpg);
            background-size: cover;
        }
    </style>
</head>
<body class="bg-body-secondary">
    <h1><center>Login Page</center></h1>
    <div class="container col-xl-10 col-xxl-10 px-4 py-5">

    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Kapoor Realtors</h1>
        <p class="col-lg-10 fs-4">Khushiyo ka Ghar</p>
    </div>
      <div class="col-md-10 mx-auto col-lg-5">
          <form class="p-4 p-md-5 border rounded-3 bg-body-secondary" method="Post" action="user_dashboard.php">
          
              <div class="form-floating mb-3">
            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Email address*</label>
          </div>
          
          <div class="form-floating mb-3">
              <input type="password" class="form-control" name="upass" id="floatingPassword" placeholder="Password" required>
              <label for="floatingPassword">Password*</label>
            </div>
            
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
          
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Log in</button>
            <a href="register.php">Sign up</a>
            <hr class="my-4">
            <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
        </div>
    </div>
    
    <?php
        if(isset($_POST['login'])){
            $email = $_POST['email']; 
            $upass = $_POST['upass'];
            
            $sql = "SELECT * FROM user WHERE email_id='$email' AND password='$upass'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
            if ($row == 1){
                header("Location: user_dashboard.php");
            }
        }
        
    ?>

</form>
</div>
<div class="b-example-divider"></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>