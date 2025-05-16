<?php
// Include the database connection
include('database.php');

// Check if there's an 'updateid' in the URL (meaning we want to update a property)
if (isset($_GET['updateid'])) {
    // Get the property ID from the URL
    $id = $_GET['updateid'];

    // Fetch the existing property details from the database using the ID
    $sql = "SELECT * FROM imagetable WHERE ID = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    // Store the existing values from the database
    $pname = $row['pname'];
    $pdescription = $row['pdescription'];
    $pprice = $row['pprice'];
    $pimage = $row['image_dir'];  // This contains the current image path in the database
}

// Check if the form is submitted to update the property
if (isset($_POST['updatebtn'])) {
    // Get updated values from the form
    $pname = $_POST['pname'];
    $pdescription = $_POST['pdescription'];
    $pprice = $_POST['pprice'];

    // Check if a new image is uploaded
    if ($_FILES['file']['name']) {
        // Get the name of the uploaded image
        $pimage = $_FILES['file']['name'];

        // Define the folder where the images will be stored
        $target_dir = "uploadedimages/";

        // The full path to the uploaded image (including the folder)
        $target_file = $target_dir . basename($pimage);

        // Move the uploaded image to the target folder
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
            // If the file is uploaded successfully, it's now stored in 'uploadedimages/'
        } else {
            echo "Error uploading file.";
        }
    } else {
        // If no new image is uploaded, use the existing image path from the database
        $pimage = $row['image_dir'];
    }

    // Make sure the image path has the directory path ('uploadedimages/')
    // If the image doesn't already have 'uploadedimages/' prefix, add it
    if (strpos($pimage, 'uploadedimages/') === false) {
        $pimage = "uploadedimages/" . $pimage;
    }

    // Update the database with the new values (including the image path)
    $sql = "UPDATE imagetable SET 
            pname = '$pname', 
            pdescription = '$pdescription', 
            pprice = '$pprice', 
            image_dir = '$pimage' 
            WHERE ID = $id";

    // Execute the query and check if the update was successful
    if (mysqli_query($conn, $sql)) {
        echo "Successfully Updated!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Property</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Update Property</h1>
        <form action="update.php?updateid=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
            <!-- Property Name Input -->
            <div class="mb-3">
                <label for="pname" class="form-label">Property Name</label>
                <input type="text" name="pname" class="form-control" value="<?php echo $pname; ?>" required>
            </div>

            <!-- Property Price Input -->
            <div class="mb-3">
                <label for="pprice" class="form-label">Price</label>
                <input type="number" name="pprice" class="form-control" value="<?php echo $pprice; ?>" required>
            </div>

            <!-- Property Description Input -->
            <div class="mb-3">
                <label for="pdescription" class="form-label">Description</label>
                <input type="text" name="pdescription" class="form-control" maxlength="100" value="<?php echo $pdescription; ?>" required>
            </div>

            <!-- File Upload for Property Image -->
            <div class="mb-3">
                <label for="file" class="form-label">Upload New Image</label>
                <input type="file" name="file" class="form-control">
                <!-- Display current image -->
                <p>Current image: <img src="<?php echo $pimage; ?>" alt="Current Image" width="100"></p>
            </div>

            <!-- Submit Button -->
            <div class="d-flex justify-content-end">
                <button type="submit" name="updatebtn" class="btn btn-primary">Update Property</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
