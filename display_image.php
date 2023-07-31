<?php
@include 'config.php';

if (isset($_POST['submit_image'])) {

    $query = "SELECT id_photo FROM cinematix_bookings";
    $query_run = mysqli_query($conn, $query);

    // this is to fetch the image from the folder booking_photos

    while ($row = mysqli_fetch_assoc($query_run)) {


?>


        <img src="booking_photos/<?php echo $row['id_photo']; ?>" alt="" style="width:100px; height:auto">

<?php
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
            <button type="submit" name="submit_image">View Images</button>
        </div>
    </form>
</body>

</html>