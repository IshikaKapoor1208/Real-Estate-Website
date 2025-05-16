<!-- <?php
include('database.php');
?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- <form action="imagepratice.php" method="POST" enctype="multipart/form-data">
        <h1>image pratice</h1>
        <input type= "text" name="fname" placeholder="first name"><br>
        <input type= "text" name="lname" placeholder="last name"><br>
        <input type="file" name="file"><br>
        <input type="submit" name="uploadbtn"  value="submit"><br>

    </form> -->
    <?php
    // if(isset($_POST ['uploadbtn']))
    // {
    // $fname=$_POST['fname'];
    // $lname=$_POST['lname'];
    // $file=$_FILES['file'];

    // echo $fname."<br>";
    // echo $lname."<br>";
    // print_r($file);

    // $image_name=$file['name'];
    // $image_fullpath=$file['full_path'];
    // $image_type=$file['type'];
    // $image_tempname=$file['tmp_name'];
    // $image_error=$file['error'];
    // $image_size=$file['size'];

    // echo $image_name;
    // echo $image_fullpath;
    // echo $image_type;
    // echo $image_tempname;
    // echo $image_error;
    // echo $image_size;

 


//     $upload_image='uploadedimages/'.$image_name;
//     move_uploaded_file($image_tempname,$upload_image);
//     $sql="Insert into imagetable(f_name,l_name,image_dir) 
//     values('$fname','$lname','$upload_image')";
//     $result=mysqli_query($conn,$sql);
//     if($result){
//         echo "<div class='alert alert-success' role='alert'>
//   Data Inserted Successfully!
// </div>";
//     }
//     else{
//         die("unsuccessfull");
//     }?>


<div class="container w-50">
    <table class="table ">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>First</th>
                <th>Last</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            
            
    <?php

    // $imgfetchquery = "Select * from imagetable";
    // $result = mysqli_query($conn, $imgfetchquery);

    // $id=1;
    // while($row = mysqli_fetch_assoc($result)){
    //     echo "<tr>";
    //     // echo "<td>".$row['ID']."</td>";
    //     echo "<td>".$id."</td>";
    //     echo "<td>".$row['f_name']."</td>";
    //     echo "<td>".$row['l_name']."</td>";
    //     echo "<td><img src='".$upload_image."' height='100px'></td>";
    //     echo "</tr>";
    //     $id += 1;
    // }
    ?>
    </tbody>
</table>
</div>


 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>