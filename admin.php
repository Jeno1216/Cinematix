<?php

@include 'config.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <!-- Title -->
  <title>Cinematix</title>

  <link rel="stylesheet" href="src/style.css">
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }


    .input-container {
      position: relative;
      margin-top: 20px;
      /* Adjust the margin as needed */
    }

    .input-container input[type="text"],
    .input-container input[type="email"],
    .input-container input[type="password"],
    .input-container input[type="date"],
    .input-container input[type="file"],
    .input-container select {
      display: block;
      width: 100%;
      padding: 10px 10px;
      border: 1px solid #b4b4b4;
      border-radius: 5px;
      background: none;
      font-size: 16px;
      color: white;
      text-align: center;
    }



    .input-container label {
      position: absolute;
      top: -10px;
      /* Adjust this value to align the label */
      left: 10px;
      background-color: rgb(0, 0, 0);
      padding: 0 10px;
      font-size: 14px;
      color: #b4b4b4;
      border-radius: 10px;
    }

    .submit {
      display: inline-block;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #b4b4b4;
      background: none;
      color: white;
      text-align: center;
      transition: .3s;
    }

    .submit:hover {
      background-color: #ff2c1f;
    }

    .custom-file-label {
      transition: .3s;
    }

    .custom-file-label:hover {
      background-color: #ff2c1f;
    }
  </style>

</head>

<body>

  <!-- Button in small screen -->
  <div class="button-toggle-nav w-100  p-3 d-lg-none d-md-none position-absolute" style="cursor: pointer; z-index: 999;">
    <i class="bi bi-list text-light fs-2"></i>
  </div>

  <div id="toggle-nav" class=" w-50 vh-100 shadow  flex-column d-none position-fixed" style="border-right: 1px solid #b4b4b4; background-color: black;">


    <div class="p-2   gap-2 col-12 d-flex flex-column justify-content-center align-items-center" style="height: auto;">

      <br><br>

      <div class=" rounded-1 d-flex w-75 p-3 justify-content-between" style="cursor: pointer;">
        <img src="src/img/logo.png" class="img-fluid" alt="">
      </div>

      <div class="user-list-button border rounded-1 d-flex w-75 p-3 justify-content-between" style="cursor: pointer;">
        <p class="m-0 text-light"> User List </p>
        <p class="m-0 text-light">&gt;</p>
      </div>

      <div class="booking-list-button border rounded-1 d-flex w-75 p-3 justify-content-between" style="cursor: pointer;">
        <p class="m-0 text-light"> Bookings </p>
        <p class="m-0 text-light">&gt;</p>
      </div>

      <hr style="width: 90%; border: 1px solid #b4b4b4;">

      <div class="featured-list-button border rounded-1 d-flex w-75 p-3 justify-content-between" style="cursor: pointer;">
        <p class="m-0 text-light"> Featured Movies </p>
        <p class="m-0 text-light">&gt;</p>
      </div>

      <div class="now-showing-list-button border rounded-1 d-flex w-75 p-3 justify-content-between" style="cursor: pointer;">
        <p class="m-0 text-light"> Now Showing Movies </p>
        <p class="m-0 text-light">&gt;</p>
      </div>

      <div class="coming-soon-list-button border rounded-1 d-flex w-75 p-3 justify-content-between" style="cursor: pointer;">
        <p class="m-0 text-light"> Coming Soon Movies </p>
        <p class="m-0 text-light">&gt;</p>
      </div>

    </div>
  </div>

  <div class=" col-12 d-flex ">

    <div class=" col-lg-3 col-md-3 col-4  vh-100 shadow d-lg-flex justify-content-center d-md-flex flex-column d-none" style="border-right: 1px solid #b4b4b4;">


      <div class="p-2  gap-2 col-12 d-flex flex-column justify-content-center align-items-center" style="height: auto;">

        <div class=" rounded-1 d-flex w-75 p-3 justify-content-between" style="cursor: pointer;">
          <img src="src/img/logo.png" class="img-fluid" alt="">
        </div>

        <div class="user-list-button border rounded-1 d-flex w-75 p-3 justify-content-between" style="cursor: pointer;">
          <p class="m-0 text-light"> User List </p>
          <p class="m-0 text-light">&gt;</p>
        </div>

        <div class="booking-list-button border rounded-1 d-flex w-75 p-3 justify-content-between" style="cursor: pointer;">
          <p class="m-0 text-light"> Bookings </p>
          <p class="m-0 text-light">&gt;</p>
        </div>

        <hr style="width: 90%; border: 1px solid #b4b4b4;">

        <div class="featured-list-button border rounded-1 d-flex w-75 p-3 justify-content-between" style="cursor: pointer;">
          <p class="m-0 text-light"> Featured Movies </p>
          <p class="m-0 text-light">&gt;</p>
        </div>

        <div class="now-showing-list-button border rounded-1 d-flex w-75 p-3 justify-content-between" style="cursor: pointer;">
          <p class="m-0 text-light"> Now Showing Movies </p>
          <p class="m-0 text-light">&gt;</p>
        </div>

        <div class="coming-soon-list-button border rounded-1 d-flex w-75 p-3 justify-content-between" style="cursor: pointer;">
          <p class="m-0 text-light"> Coming Soon Movies </p>
          <p class="m-0 text-light">&gt;</p>
        </div>

      </div>
    </div>

    <div class="col-lg-9 col-md-9 col-12  vh-100 d-flex justify-content-center">

      <!-- User List-->
      <div id="user-list" class="p-2  gap-2 col-11" style="height: auto; display:flex; justify-content: center; align-items: center; flex-direction: column;">

        <div>
          <h3 class="text-light"> User List</h3>
          <button id="refreshButton" class="rounded" style="background: none; color: white; border: 1px solid #b4b4b4; ">Refresh Page</button>
        </div>
        <div class=" movie-scroll-container">

          <table class="text-light ">
            <tr>
              <th> User ID </th>
              <th> Name </th>
              <th>Email</th>
              <th>Password</th>
              <th>Profile Picture</th>
              <th>Delete</th>

            </tr>

            <?php
            $select_users = "SELECT * FROM cinematix_user";
            $query_select_users = mysqli_query($conn, $select_users);


            if (isset($_POST['submit'])) {
              $userIdToDelete = $_POST['userId']; // Add this line to get the user ID to delete

              $delete_users = "DELETE FROM cinematix_user WHERE id = '$userIdToDelete'";
              $query_delete_users = mysqli_query($conn, $delete_users);
            }

            if (mysqli_num_rows($query_select_users) > 0) {
              while ($row_select_users = mysqli_fetch_assoc($query_select_users)) {
                $userId = $row_select_users['id'];
                $userName = $row_select_users['name'];
                $userEmail = $row_select_users['email'];
                $userPassword = $row_select_users['password'];
                $userPhoto = $row_select_users['profile_picture'];
            ?>
                <tr>
                  <td><?php echo $userId ?></td>
                  <td><?php echo $userName ?></td>
                  <td><?php echo $userEmail ?></td>
                  <td><?php echo $userPassword ?></td>
                  <td><img src="profile_pictures/<?php echo $userPhoto; ?>" class="img-fluid" alt="" style="border-radius: 50%; width:100px; height: 100px; display: block; margin: 0 auto;"></td>
                  <td>
                    <!-- Add the user ID to a hidden field -->
                    <form method="post">
                      <input type="hidden" name="userId" value="<?php echo $userId; ?>">
                      <input type="submit" name="submit" value="Delete">
                    </form>
                  </td>
                </tr>
            <?php
              }
            }
            ?>



          </table>

        </div>

      </div>

      <!-- Bookings -->
      <div id="booking-list" class="p-2  gap-2 col-11" style="height: auto; display:none; justify-content: center; align-items: center; flex-direction: column;">

        <div>
          <h3 class="text-light"> Booking List</h3>
        </div>
        <div class=" movie-scroll-container">

          <table class="text-light ">
            <tr>
              <th> Booking ID </th>
              <th> User ID </th>
              <th>Movie ID</th>
              <th>Movie Name</th>
              <th>Last Name</th>
              <th>First Name</th>
              <th>Email</th>
              <th>Booking Status</th>
              <th>Day</th>
              <th>Date</th>
              <th>Month</th>
              <th>ID Photo</th>


            </tr>

            <?php
            $select_bookings = "SELECT * FROM cinematix_bookings";
            $query_select_bookings = mysqli_query($conn, $select_bookings);


            if (isset($_POST['submit1'])) {
              $bookingIdToDelete = $_POST['bookingId']; // Add this line to get the user ID to delete

              $delete_users = "DELETE FROM cinematix_bookings WHERE booking_id = '$bookingIdToDelete'";
              $query_delete_users = mysqli_query($conn, $delete_users);
            }

            if (isset($_POST['submit1approve'])) {
              $bookingIdToApprove = $_POST['bookingIdApprove'];

              $approve_booking = "UPDATE cinematix_bookings SET booking_status = 'approved' WHERE booking_id = '$bookingIdToApprove';";
              $query_approve_booking = mysqli_query($conn, $approve_booking);
            }

            if (isset($_POST['submit1decline'])) {
              $bookingIdToDecline = $_POST['bookingIdDecline'];

              $decline_booking = "UPDATE cinematix_bookings SET booking_status = 'declined' WHERE booking_id = '$bookingIdToDecline';";
              $query_decline_booking = mysqli_query($conn, $decline_booking);
            }



            if (mysqli_num_rows($query_select_bookings) > 0) {
              while ($row_select_bookings = mysqli_fetch_assoc($query_select_bookings)) {
                $bookingId = $row_select_bookings['booking_id'];
                $userId = $row_select_bookings['user_id'];
                $movieId = $row_select_bookings['movie_id'];
                $movieName = $row_select_bookings['movie_name'];
                $lName = $row_select_bookings['lname'];
                $fName = $row_select_bookings['fname'];
                $email = $row_select_bookings['email'];
                $bookingStatus = $row_select_bookings['booking_status'];
                $day = $row_select_bookings['day'];
                $date = $row_select_bookings['date'];
                $month = $row_select_bookings['month'];

                $photo = $row_select_bookings['id_photo'];

            ?>
                <tr>
                  <td><?php echo $bookingId ?></td>
                  <td><?php echo $userId ?></td>
                  <td><?php echo $movieId ?></td>
                  <td><?php echo $movieName ?></td>
                  <td><?php echo $lName ?></td>
                  <td><?php echo $fName ?></td>
                  <td><?php echo $email ?></td>
                  <td><?php echo $bookingStatus ?></td>
                  <td><?php echo $day ?></td>
                  <td><?php echo $date ?></td>
                  <td><?php echo $month ?></td>

                  <td><img src="booking_photos/<?php echo $photo; ?>" alt="" style="border-radius: 50%; width:60px; height: 60px; display: block; margin: 0 auto;"></td>
                  <td>
                    <!-- Add the user ID to a hidden field -->
                    <form method="post" class="d-flex gap-2">
                      <input type="hidden" name="bookingId" value="<?php echo $bookingId; ?>">
                      <input type="submit" name="submit1" value="Delete" style="background-color: #ff2c1f; border: none; border-radius: 10px; padding: 5px 10px; color:white;">

                      <input type="hidden" name="bookingIdApprove" value="<?php echo $bookingId; ?>">
                      <input type="submit" name="submit1approve" value="Approve" style="background-color: green; border: none; border-radius: 10px; padding: 5px 10px; color:white;">

                      <input type="hidden" name="bookingIdDecline" value="<?php echo $bookingId; ?>">
                      <input type="submit" name="submit1decline" value="Decline" style="background-color: orange; border: none; border-radius: 10px; padding: 5px 10px; color:white;">


                    </form>
                  </td>
                </tr>
            <?php
              }
            }
            ?>

            <tr>

            </tr>

          </table>

        </div>

      </div>


      <!-- Featured Movies -->
      <div id="featured-list" class="p-2  gap-2 col-11" style="height: auto; display:none; justify-content: center; align-items: center; flex-direction: column;">

        <div>
          <h3 class="text-light"> Featured Movie List</h3>
        </div>
        <div class=" movie-scroll-container">

          <table class="text-light ">
            <tr>
              <th> Movie ID </th>
              <th> Title </th>
              <th>Genre</th>
              <th>Image URL</th>


            </tr>
            <?php
            $select_featured = "SELECT * FROM cinematix_featured";
            $query_select_featured = mysqli_query($conn, $select_featured);

            if (isset($_POST['submit2'])) {
              $featuredIdToDelete = $_POST['featuredId']; // Add this line to get the user ID to delete

              $delete_featured = "DELETE FROM cinematix_featured WHERE id = '$featuredIdToDelete'";
              $query_delete_featured = mysqli_query($conn, $delete_featured);
            }

            if (mysqli_num_rows($query_select_featured) > 0) {
              while ($row_select_featured = mysqli_fetch_assoc($query_select_featured)) {
                $id = $row_select_featured['id'];
                $title = $row_select_featured['title'];
                $genre = $row_select_featured['genre'];
                $img_url = $row_select_featured['img_url'];
            ?>
                <tr>
                  <td><?php echo $id ?></td>
                  <td><?php echo $title ?></td>
                  <td><?php echo $genre ?></td>
                  <td><?php echo $img_url ?></td>
                  <td>
                    <!-- Add the user ID to a hidden field -->
                    <form method="post">
                      <input type="hidden" name="featuredId" value="<?php echo $id; ?>">
                      <input type="submit" name="submit2" value="Delete">
                    </form>
                  </td>

                </tr>
            <?php
              }
            }
            ?>

          </table>

          <br>
        </div>

        <div class="d-flex flex-column justify-content-center align-items-center w-100">
          <h4 class="text-light"> Add Featured</h4>

          <?php
          if (isset($_POST['add-featured'])) {
            $title = ($_POST['title']);
            $genre = ($_POST['genre']);
            $url = ($_POST['url']);

            $insert_featured = "INSERT INTO cinematix_featured (title, genre, img_url) VALUES ('$title', '$genre', '$url')";
            $query_insert_featured = mysqli_query($conn, $insert_featured);
          }


          ?>
          <form action="" class="w-100" method="POST" enctype="multipart/form-data">
            <div class="input-container w-100">
              <input type="text" name="title" id="title" style="text-align: start; font-size: 14px;">
              <label for="title">Title</label>
            </div>

            <div class="input-container w-100">
              <input type="text" name="genre" id="genre" style="text-align: start; font-size: 14px;">
              <label for="genre">Genre</label>
            </div>

            <div class="input-container w-100">
              <input type="text" name="url" id="url" style="text-align: start; font-size: 14px;">
              <label for="url">URL of Image</label>
            </div>

            <br>
            <input type="submit" name="add-featured" value="Submit">



          </form>
        </div>


      </div>

      <!-- Now SHowing Movies -->
      <div id="now-showing-list" class="p-2  gap-2 col-11" style="height: auto; display:none; justify-content: center; align-items: center; flex-direction: column;">

        <div>
          <h3 class="text-light"> Now Showing Movie List</h3>
        </div>
        <div class=" movie-scroll-container">

          <table class="text-light ">
            <tr>
              <th> Movie ID </th>
              <th> Title </th>
              <th>Time</th>
              <th>Rating</th>
              <th>Image URL</th>
              <th>Genre</th>
            </tr>

            <?php
            $select_showing = "SELECT * FROM cinematix_now_showing";
            $query_select_showing = mysqli_query($conn, $select_showing);

            if (isset($_POST['submit3'])) {
              $showingIdToDelete = $_POST['showingId']; // Add this line to get the user ID to delete

              $delete_showing = "DELETE FROM cinematix_now_showing WHERE movie_id = '$showingIdToDelete'";
              $query_delete_showing = mysqli_query($conn, $delete_showing);
            }

            if (mysqli_num_rows($query_select_showing) > 0) {
              while ($row_select_showing = mysqli_fetch_assoc($query_select_showing)) {
                $movieId = $row_select_showing['movie_id'];
                $title = $row_select_showing['title'];
                $time = $row_select_showing['time'];
                $rating = $row_select_showing['rating'];
                $img_url = $row_select_showing['img_url'];
                $genre = $row_select_showing['genre'];

            ?>
                <tr>
                  <td><?php echo $movieId ?></td>
                  <td><?php echo $title ?></td>
                  <td><?php echo $time ?></td>
                  <td><?php echo $rating ?></td>
                  <td><?php echo $img_url ?></td>
                  <td><?php echo $genre ?></td>

                  <td>
                    <!-- Add the user ID to a hidden field -->
                    <form method="post">
                      <input type="hidden" name="showingId" value="<?php echo $movieId; ?>">
                      <input type="submit" name="submit3" value="Delete">
                    </form>
                  </td>

                </tr>
            <?php
              }
            }
            ?>


          </table>

        </div>


        <div class="d-flex flex-column justify-content-center align-items-center w-100">
          <h4 class="text-light"> Add Showing Movies </h4>

          <?php
          if (isset($_POST['add-showing'])) {
            $title = ($_POST['title-showing']);
            $time = ($_POST['time-showing']);
            $rating = ($_POST['rating-showing']);
            $img_url = ($_POST['img-showing']);
            $genre = ($_POST['genre-showing']);


            $insert_showing = "INSERT INTO cinematix_now_showing (title, time, rating, img_url, genre ) 
            VALUES ('$title', '$time', '$rating', '$img_url', '$genre')";
            $query_insert_showing = mysqli_query($conn, $insert_showing);
          }


          ?>
          <form action="" class="w-100" method="POST" enctype="multipart/form-data">
            <div class="input-container w-100">
              <input type="text" name="title-showing" id="title-showing" style="text-align: start; font-size: 14px;">
              <label for="title-showing">Title</label>
            </div>

            <div class="input-container w-100">
              <input type="text" name="time-showing" id="time-showing" style="text-align: start; font-size: 14px;">
              <label for="time-showing">Time</label>
            </div>

            <div class="input-container w-100">
              <input type="text" name="rating-showing" id="rating-showing" style="text-align: start; font-size: 14px;">
              <label for="rating-showing">Rating</label>
            </div>


            <div class="input-container w-100">
              <input type="text" name="img-showing" id="img-showing" style="text-align: start; font-size: 14px;">
              <label for="img-showing">URL of Image</label>
            </div>

            <div class="input-container w-100">
              <input type="text" name="genre-showing" id="genre-showing" style="text-align: start; font-size: 14px;">
              <label for="genre-showing">Genre</label>
            </div>


            <br>
            <input type="submit" name="add-showing" value="Submit">



          </form>
        </div>

      </div>

      <!-- Coming Soon Movies -->
      <div id="coming-soon-list" class="p-2  gap-2 col-11" style="height: auto; display:none; justify-content: center; align-items: center; flex-direction: column;">

        <div>
          <h3 class="text-light"> Coming Soon Movies List</h3>
        </div>
        <div class=" movie-scroll-container">

          <table class="text-light ">
            <tr>
              <th> Movie ID </th>
              <th> Title </th>
              <th>IMG URL</th>
            </tr>

            <?php
            $select_coming = "SELECT * FROM cinematix_coming_soon";
            $query_select_coming = mysqli_query($conn, $select_coming);

            if (isset($_POST['submit4'])) {
              $comingIdToDelete = $_POST['comingId']; // Add this line to get the user ID to delete

              $delete_coming = "DELETE FROM cinematix_coming_soon WHERE id = '$comingIdToDelete'";
              $query_delete_coming = mysqli_query($conn, $delete_coming);
            }

            if (mysqli_num_rows($query_select_coming) > 0) {
              while ($row_select_coming = mysqli_fetch_assoc($query_select_coming)) {
                $id = $row_select_coming['id'];
                $title = $row_select_coming['title'];
                $img_url = $row_select_coming['img_url'];

            ?>
                <tr>
                  <td><?php echo $id ?></td>
                  <td><?php echo $title ?></td>
                  <td><?php echo $img_url ?></td>

                  <td>
                    <!-- Add the user ID to a hidden field -->
                    <form method="post">
                      <input type="hidden" name="comingId" value="<?php echo $id; ?>">
                      <input type="submit" name="submit4" value="Delete">
                    </form>
                  </td>

                </tr>
            <?php
              }
            }
            ?>

          </table>

        </div>
        <div class="d-flex flex-column justify-content-center align-items-center w-100">
          <h4 class="text-light"> Add Coming Movies </h4>

          <?php
          if (isset($_POST['add-coming'])) {
            $title = ($_POST['title-coming']);
            $img_url = ($_POST['img-coming']);


            $insert_coming = "INSERT INTO cinematix_coming_soon (title, img_url ) 
            VALUES ('$title', '$img_url')";
            $query_insert_coming = mysqli_query($conn, $insert_coming);
          }


          ?>
          <form action="" class="w-100" method="POST" enctype="multipart/form-data">
            <div class="input-container w-100">
              <input type="text" name="title-coming" id="title-coming" style="text-align: start; font-size: 14px;">
              <label for="title-coming">Title</label>
            </div>



            <div class="input-container w-100">
              <input type="text" name="img-coming" id="img-coming" style="text-align: start; font-size: 14px;">
              <label for="img-coming">URL of Image</label>
            </div>

            <br>
            <input type="submit" name="add-coming" value="Submit">



          </form>
        </div>


      </div>







    </div>

  </div>

  <script>
    // Get references to the button and the navigation menu
    const buttonToggleNav = document.querySelector(".button-toggle-nav");
    const toggleNav = document.getElementById("toggle-nav");

    // Add a click event listener to the button
    buttonToggleNav.addEventListener("click", () => {
      // Toggle the visibility of the navigation menu
      toggleNav.classList.toggle("d-none");

    });


    document.querySelectorAll('.user-list-button').forEach(button => {
      button.addEventListener('click', function() {
        var userlist = document.querySelector('#user-list');
        var bookinglist = document.querySelector('#booking-list');
        var featuredlist = document.querySelector('#featured-list');
        var nowshowinglist = document.querySelector('#now-showing-list');
        var comingsoonlist = document.querySelector('#coming-soon-list');

        // Show the Approved tickets and hide the Declined and Pending tickets
        userlist.style.display = 'flex';
        bookinglist.style.display = 'none';
        featuredlist.style.display = 'none';
        nowshowinglist.style.display = 'none';
        comingsoonlist.style.display = 'none';
      })
    });

    document.querySelectorAll('.booking-list-button').forEach(button => {
      button.addEventListener('click', function() {
        var userlist = document.querySelector('#user-list');
        var bookinglist = document.querySelector('#booking-list');
        var featuredlist = document.querySelector('#featured-list');
        var nowshowinglist = document.querySelector('#now-showing-list');
        var comingsoonlist = document.querySelector('#coming-soon-list');

        // Show the Approved tickets and hide the Declined and Pending tickets
        userlist.style.display = 'none';
        bookinglist.style.display = 'flex';
        featuredlist.style.display = 'none';
        nowshowinglist.style.display = 'none';
        comingsoonlist.style.display = 'none';
      })
    });

    document.querySelectorAll('.featured-list-button').forEach(button => {
      button.addEventListener('click', function() {
        var userlist = document.querySelector('#user-list');
        var bookinglist = document.querySelector('#booking-list');
        var featuredlist = document.querySelector('#featured-list');
        var nowshowinglist = document.querySelector('#now-showing-list');
        var comingsoonlist = document.querySelector('#coming-soon-list');

        // Show the Approved tickets and hide the Declined and Pending tickets
        userlist.style.display = 'none';
        bookinglist.style.display = 'none';
        featuredlist.style.display = 'flex';
        nowshowinglist.style.display = 'none';
        comingsoonlist.style.display = 'none';
      })
    });

    document.querySelectorAll('.now-showing-list-button').forEach(button => {
      button.addEventListener('click', function() {
        var userlist = document.querySelector('#user-list');
        var bookinglist = document.querySelector('#booking-list');
        var featuredlist = document.querySelector('#featured-list');
        var nowshowinglist = document.querySelector('#now-showing-list');
        var comingsoonlist = document.querySelector('#coming-soon-list');

        // Show the Approved tickets and hide the Declined and Pending tickets
        userlist.style.display = 'none';
        bookinglist.style.display = 'none';
        featuredlist.style.display = 'none';
        nowshowinglist.style.display = 'flex';
        comingsoonlist.style.display = 'none';
      })
    });

    document.querySelectorAll('.coming-soon-list-button').forEach(button => {
      button.addEventListener('click', function() {
        var userlist = document.querySelector('#user-list');
        var bookinglist = document.querySelector('#booking-list');
        var featuredlist = document.querySelector('#featured-list');
        var nowshowinglist = document.querySelector('#now-showing-list');
        var comingsoonlist = document.querySelector('#coming-soon-list');

        // Show the Approved tickets and hide the Declined and Pending tickets
        userlist.style.display = 'none';
        bookinglist.style.display = 'none';
        featuredlist.style.display = 'none';
        nowshowinglist.style.display = 'none';
        comingsoonlist.style.display = 'flex';
      })
    });



    // Get the button element by its ID
    const refreshButton = document.getElementById('refreshButton');

    // Add a click event listener to the button
    refreshButton.addEventListener('click', function() {
      // Refresh the page
      location.reload();
    });
  </script>
</body>

</html>