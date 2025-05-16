<?php
include('database.php');
$currentPage = basename($_SERVER['PHP_SELF']);

if(isset($_POST['signup']) && $_SERVER["REQUEST_METHOD"] == "POST")
    {
  $first_name = isset($_POST['fname']) ? $_POST['fname'] : '';
  $last_name = isset($_POST['lname']) ? $_POST['lname'] : '';   
  $email_id = isset($_POST['mail']) ? $_POST['mail'] : '';   
  $phone_no = isset($_POST['phone']) ? $_POST['phone'] : '';   
  $user_type = isset($_POST['utype']) ? $_POST['utype'] : '';   
  $password = isset($_POST['pass']) ? $_POST['pass'] : '';  
  $confirm_pass = isset($_POST['cpass']) ? $_POST['cpass'] : '';  
  
  $query="INSERT into user(f_name, l_name, email_id, phone_no, user_type, password, confirm_pass)
       values ('$first_name', '$last_name', '$email_id', '$phone_no' ,'$user_type','$password','$confirm_pass')";

mysqli_query($conn,$query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="col-12">
  <!-- <h1>Kapoor Realtors</h1> -->
    <img src="images/logo.png" alt="" style="height:150px">
  <br>
  <div class="row">
  </div>

  <div class="container bg-body-secondary">
    <div class="row">
      <!-- <div class="col-3"> -->
    <?php
            $imgfetchquery = "Select * from imagetable";
            $result = mysqli_query($conn, $imgfetchquery);
        
            $id=1;
            while($row = mysqli_fetch_assoc($result)){
                // echo "<tr>";
                // echo "<td>".$row['ID']."</td>";
                // echo "<td>".$id."</td>";
                // echo "<td>".$row['f_name']."</td>";
                // echo "<td>".$row['l_name']."</td>";
                // echo "<td><img src='".$row['image_dir']."' height='100px'></td>";
                // echo "</tr>";
                // $id += 1;

                // dynamic php card
        echo '<div class="col-3">';
        echo '<div class="card mt-4" style="width: 16rem;">';
        echo '<img src="'.$row['image_dir'].'" class="card-img-top" alt="">';
        echo '<div class="card-body">';
        echo '<h4 class="card-title">₹'.$row['pprice'].'</h4>';
        echo '<h5 class="card-title">'.$row['pname'].'</h5>';
        echo '<small class="card-title">Location: Koregaon Park</small>';
        echo '<p class="card-text mt-3">'.$row['pdescription'].'</p>';
        echo '<h6>Contact: 9764747433</h6>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        $id += 1;
          }
        ?>
        
      </div>
      
     

</div>
</div>
  
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>