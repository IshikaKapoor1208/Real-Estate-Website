<?php
    include('database.php');

    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $sql = "DELETE from imagetable where ID=$id";
        $result = mysqli_query($conn,$sql);
        if($result){
            // echo "Deleted Successfully";
            header('Location: properties.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }
?>