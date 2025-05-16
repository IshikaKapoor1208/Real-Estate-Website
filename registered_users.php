
<?php
include('database.php');
$currentPage = basename($_SERVER['PHP_SELF']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

<?php 
  include('sidebar.php');
?>
<div class="col-8" style="height: 720px; overflow-y : scroll;">
  <h1>Registered Users</h1>
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
      <th>confirm password</th>
    </tr>

    <?php
        $sql = "SELECT f_name,l_name,email_id,phone_no,user_type,password,confirm_pass from user";
        $result = $conn->query($sql);
    
        if($result->num_rows >0){
          // $i=0;
            while ($row=$result->fetch_assoc())
            {
               echo"<tr>";
               echo"<td>1"."</td>";
               echo"<td>".$row['f_name']."</td>";
               echo"<td>".$row['l_name']."</td>";
               echo"<td>".$row['email_id']."</td>";
               echo"<td>".$row['phone_no']."</td>";
               echo"<td>".$row['user_type']."</td>";
               echo"<td>".$row['password']."</td>";
               echo"<td>".$row['confirm_pass']."</td>";
               echo"</tr>";
              //  $i=$i+1;
               
            }
        }
        else{
          if($result->num_rows <0){
            echo"NO DATA FOUND!!";
          }
        }
        ?>
  </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>