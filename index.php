<?php
include('database.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
  <h1></h1>
  <table class="table table-striped">
    <tr>
      <!-- by default will -->
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email ID</th>
      <th>Phone number</th>
      <th>User Type</th>
      <th>Password</th>
    </tr>

    <?php
        $sql = "SELECT id,f_name,l_name,email_id,phone_no,user_type,password from user";
        $result = $conn->query($sql);
    
        if($result->num_rows >0){
            while ($row=$result->fetch_assoc())
            {
               echo"<tr>";
               echo"<td>".$row['id']."</td>";
               echo"<td>".$row['f_name']."</td>";
               echo"<td>".$row['l_name']."</td>";
               echo"<td>".$row['email_id']."</td>";
               echo"<td>".$row['phone_no']."</td>";
               echo"<td>".$row['user_type']."</td>";
               echo"<td>".$row['password']."</td>";
               echo"</tr>";
               
            }
        }
        else{
          echo"NO DATA FOUND!!";
        }
        ?>
  </table>

  <!-- <div class="row" style="margin:32px;"> -->
    <!--card 1-->
    <div class="col mb-4">
      <div class="card" style="width: 18rem;">
        <img
          src="images/buliding.jpg"
          class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>
  <!-- </div> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>