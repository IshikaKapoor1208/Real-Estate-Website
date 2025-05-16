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
    <h1>Add Properties</h1>
    <div class="row">
      <form action="addproperties.php" method="POST" enctype="multipart/form-data">
        <h1>...</h1>
        <br><br>
        <div class="input-group input-group-default mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Property Name</span>
          <input type="text" name="pname" class="form-control">
        </div>
        <div class="input-group input-group-default mb-3">
          <span class="input-group-text" id="inputGroup-sizing">Price</span>
          <input type="number" name="pprice" class="form-control">
        </div>
        <div class="input-group input-group-default mb-3">
          <span class="input-group-text" id="inputGroup-sizing">Description</span>
          <input type="text" class="form-control" name="pdescription" maxlength="50">
        </div>

        <!-- <input type="text" name="pname" placeholder="Property Name"><br> -->
        <!-- <input type="number" name="pprice" placeholder="Price"><br> -->
        <!-- <input type="text" name="pdescription" placeholder="Description"><br> -->
        
        <div class="mb-4">
          <input class="form-control form-control-default" id="formFileLg" name="file" type="file">
        </div>
        <div class="d-flex justify-content-end">
          <input type="submit" class="btn btn-lg btn-primary" name="uploadbtn" value="submit"><br>
        </div>
        <h1>...</h1>
        <br>
        
      </form>
    </div>

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


        <?php
          if(isset($_POST ['uploadbtn']))
          {
          $pname=$_POST['pname'];
          $pdescription=$_POST['pdescription'];
          $pprice=$_POST['pprice'];
          $file=$_FILES['file'];
      
          // echo $pname."<br>";
          // echo $pprice."<br>";
          // print_r($file);
      
          $image_name=$file['name'];
          $image_fullpath=$file['full_path'];
          $image_type=$file['type'];
          $image_tempname=$file['tmp_name'];
          $image_error=$file['error'];
          $image_size=$file['size'];
      
          // echo $image_name;
          // echo $image_fullpath;
          // echo $image_type;
          // echo $image_tempname;
          // echo $image_error;
          // echo $image_size;

          $upload_image='uploadedimages/'.$image_name;
          move_uploaded_file($image_tempname,$upload_image);
          $sql="Insert into imagetable(pname,pdescription,pprice,image_dir) 
          values('$pname','$pdescription','$pprice','$upload_image')";
          $result=mysqli_query($conn,$sql);
          if($result){
              echo "<div class='alert alert-success' role='alert'>
        Property Uploaded Successfully!
      </div>";
          }
          else{
              die("unsuccessfull");
          }
          }
        ?>
        </div>
      </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>