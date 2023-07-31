<?php
@include 'config.php';

if (isset($_POST['submit_image'])) {
    $images = $_FILES['images']['name'];

    $query = "INSERT INTO cinematix_bookings (id_photo) VALUES ('$images')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        // this is to insert the image to the folder booking_photos
        move_uploaded_file($_FILES["images"]["tmp_name"], "booking_photos/" . $_FILES["images"]["name"]);
        echo "Success";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="POST" enctype="multipart/form-data">
        <div>
            <input type="file" name="images" id="images" required>
            <button type="submit" name="submit_image">Save</button>
        </div>
    </form>
</body>

</html>