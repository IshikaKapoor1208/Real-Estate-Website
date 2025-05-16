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
  <div class="col-8">
    <h1>Properties</h1>
    <div class="row">

      <div class="col">
        <!-- dynamic php card -->
        <!-- <div class="card mt-4" style="width: 16rem;">
          <img src="https://placehold.co/600x400" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
              the card's
              content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div> -->

        <div class="container w-100">
          <table class="table ">
            <thead class="table-dark">
              <tr>
                <th>#</th>
                <th>Property Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Property Image</th>
                <th colspan=2 class="text-center">Operations</th>
                
              </tr>
            </thead>
            <tbody>

          <?php
          $imgfetchquery = "Select * from imagetable";
          $result = mysqli_query($conn, $imgfetchquery);
      
          $id=1;
          while($row = mysqli_fetch_assoc($result)){
              echo "<tr>";
              // echo "<td>".$row['ID']."</td>";
              echo "<td>".$id."</td>";
              echo "<td>".$row['pname']."</td>";
              echo "<td>".$row['pdescription']."</td>";
              echo "<td>".$row['pprice']."</td>";
              echo "<td><img src='".$row['image_dir']."' height='100px'></td>";
              echo '<td><button class="btn btn-primary"><a href="update.php?updateid='.$row['ID'].'"" class="text-light">Update</a></button></td>';
              echo '<td><button class="btn btn-danger"><a href="delete.php?deleteid='.$row['ID'].'" class="text-light">Delete</a></button></td>';
              echo "</tr>";
              $id += 1;
          }
          ?>
            </tbody>
          </table>
        </div>

      </div>


    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>