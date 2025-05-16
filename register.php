<?php
    include('database.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body{
            background-image: url(images/bg.jpg);
            background-size: cover;
        }
    </style>
</head>

<body>
    <h1><center>Registration Form</center></h1>
    <div style="width:50%; padding:16px;" class="container-fluid bg-body-secondary mt-5 p-5 border" >
    
    <form method="POST" class="container-fluid bg-body-secondary">
        <div class="form-floating mb-3">
            <input type="text" name="fname" class="form-control" id="floatingInput" placeholder="First name">
            <label for="floatingInput">First Name*</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="lname" class="form-control" id="floatingPassword" placeholder="Last name">
            <label for="floatingPassword">Last Name*</label>
        </div>

        <div class="form-floating mb-3">
            <input type="email" name="mail" class="form-control" id="floatingInput" placeholder="email">
            <label for="floatingInput">Email address*</label>
        </div>

        <div class="input-group flex-nowrap mb-3">
            <span class="input-group-text" id="addon-wrapping">+91</span>
            <input type="tel" name="phone" class="form-control" placeholder="1234 567 891" aria-label="Phone no"
                   aria-describedby="addon-wrapping" pattern="[0-9]{10}" maxlength="10" required>
        </div>
        
        <select class="form-select mb-3" name="utype" aria-label="Default select example">
            <option selected disabled>I am...</option>
            <option value="tenant">Tenant</option>
            <option value="agent">Admin</option>
        </select>

        <div class="form-floating mb-3">
            <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="form-floating mb-3">
            <input type="password" name="cpass" class="form-control" id="floatingPassword"
                placeholder="Confirm Password">
            <label for="floatingPassword">confirm Password</label>
        </div>

        <input type="submit" name="signup" value="Register" class="btn btn-primary btn-lg">
        <a href="userlogin.php">Login</a>


        <?php
            if(isset($_POST['signup']) && $_SERVER["REQUEST_METHOD"] == "POST"){
                $fname = isset($_POST['fname']) ? $_POST['fname'] : '';
                $lname = isset($_POST['lname']) ? $_POST['lname'] : '';
                $mail = isset($_POST['mail']) ? $_POST['mail'] : '';
                $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
                $utype= isset($_POST['utype']) ? $_POST['utype'] : '';
                $pass = isset($_POST['pass']) ? $_POST['pass'] : '';
                $cpass = isset($_POST['cpass']) ? $_POST['cpass'] : '';
            
                $sql = "INSERT INTO user(f_name, l_name, email_id, phone_no, user_type, password, confirm_pass) 
                        VALUES ('$fname','$lname','$mail','$phone','$utype','$pass', '$cpass')";
                mysqli_query($conn, $sql);
                
                header('location: userlogin.php');
                
            }
        ?>
</form>
</div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>


<?php

?>