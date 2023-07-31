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

  <div style="display: none;" id="edit-content">

    <div id="edit-profile" class=" d-flex justify-content-center align-items-center position-fixed rounded" style="overflow: auto; z-index: 999; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.747);">

      <div class="border shadow rounded col-10 p-5" style="background-color: rgba(0, 0, 0, 0.753);">
        <h3 class="text-light"> Edit Information</h3>
        <form action="" class="">
          <div class="input-container">
            <input type="text" name="lname" id="lname" style="text-align: start; font-size: 14px;">
            <label for="lname">Last Name</label>
          </div>

          <div class="input-container">
            <input type="text" name="fname" id="fname" style="text-align: start; font-size: 14px;">
            <label for="fname">Given Name</label>
          </div>

          <div class="input-container">
            <input type="email" name="email" id="email" style="text-align: start;">
            <label for="email">Email Address</label>
          </div>

          <br>
          <div class="d-flex gap-4 text-light gap-3  ">
            <div class="input-container1">
              <div class="file-input-container">
                <label for="photo-<?php echo $id; ?>" class="custom-file-label border rounded-1" style="padding: 5px 10px;"><i class="bi bi-upload"></i>   ID Photo</label>
                <input type="file" name="photo" id="photo-<?php echo $id; ?>" accept=".jpg, .png" class="file-input d-none" onchange="document.getElementById('file-name<?php echo $id; ?>').textContent = this.files[0].name;">
              </div>
            </div>
            <div class=" p-0 d-flex align-items-center">
              <p class=" m-0" id="file-name<?php echo $id; ?>"></p>
            </div>
          </div>

          <div class="d-flex gap-4 justify-content-lg-start justify-content-md-start
              justify-content-sm-center justify-content-center" style="margin-top: 15px;">
            <div>
              <input type="submit" name="submit" value="Confirm" class="px-3 py-1 border-0 rounded text-light shadow" style="background-color: #ff2c1f;">
            </div>
          </div>



        </form>
      </div>


    </div>
  </div>


  <div class="d-flex justify-content-center position-relative">


    <nav class="d-flex align-items-center justify-content-between position-absolute">
      <img src="src/img/logo.png" alt="" height="50px" class="m-3">

      <div class="d-flex align-items-center justify-content-between" style="height: 100%;">

        <div class="links m-3 d-lg-flex d-md-flex d-none position-relative align-items-center w-auto">

          <div class="d-flex align-items-center justify-content-center" style="height: 100%; width: 100px;">

            <a href="index.php" class="active text-decoration-none text-light">Home</a>
          </div>

          <div class="d-flex align-items-center justify-content-center" style="height: 100%; width: 100px;">
            <a href="schedule.php" class="active text-decoration-none text-light">Schedule</a>
          </div>

          <div class="d-flex align-items-center justify-content-center" style="height: 100%; width: 100px;">
            <a href="contact.html" class="active text-decoration-none text-light">Contact</a>
          </div>

          <a href="profile.html">
            <div class="d-flex align-items-center justify-content-center" style="height: 100%; width: auto;">
              <button class="px-3 py-1 border-0 rounded text-light shadow" style="background-color: #ff2c1f;"> <i class="bi bi-person"></i> Profile</button>
          </a>
        </div>
        </a>

      </div>
      <div class="bi bi-list mobile-toggle m-3 d-lg-none d-md-none d-md-flex text-light"></div>

  </div>

  </nav>


  <div id="mobile-content" class="position-fixed rounded" style="overflow: auto; z-index: 999">
    <div class="d-flex align-items-center justify-content-center flex-column gap-5 vh-100 p-5 position-relative">

      <a href="#" class="mobile-active text-decoration-none text-light ">Home</a>
      <a href="#" class=" text-decoration-none mobile-links">Schedule</a>
      <a href="#" class=" text-decoration-none mobile-links">Book</a>
      <a href="#" class=" text-decoration-none mobile-links">Contact</a>


      <button class="px-3 py-1 border-0 rounded text-light shadow" style="background-color: #ff2c1f;">Sign in</button></a>
      <div class="x bi bi-x mobile-content-toggle position-fixed d-lg-none  d-md-flex text-black bottom-10 p-2 bg-light" style="font-size: 30px;"></div>

    </div>
    <div class="gradient-overlay"></div>

  </div>




  </div>

  <div class="gap-1 col-12 d-flex flex-lg-row flex-column justify-content-lg-start align-items-lg-start" style="  margin: 100px auto; width: 90%;">

    <div class="border rounded-2 col-lg-3 col-12">
      <br>
      <div class=" col-3" style="display: block; margin: 0 auto;">

        <?php
        $select = "SELECT profile_picture FROM cinematix_user WHERE email = '$_SESSION[user_email]' ";
        $result = mysqli_query($conn, $select);

        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <img src="profile_pictures/<?php echo $row['profile_picture']; ?>" alt="" style="border-radius: 50%;  " class="border img-fluid">
        <?php
        }
        ?>

      </div>
      <br>
      <div class=" text-center">
        <h4 class="text-light m-0"> <?php echo $_SESSION['user_name'] ?> </h4>
        <p style="color: #b4b4b4; font-size: 14px;" class="m-0"> <?php echo $_SESSION['user_email'] ?> </p>
      </div>
      <br>
      <div class=" text-center">
        <button class="edit-button px-3 py-1 border-0 rounded text-light shadow" style="background-color: #ff2c1f;">Edit Profile</button></a>
      </div>
      <br>

    </div>

    <div class="border rounded-2 col-lg-9 col-12 d-flex flex-column gap-2 p-3">

      <div class="tickets  gap-3 d-flex  justify-content-lg-start justify-content-center">
        <button class="approve-button edit-button px-3 py-1 rounded text-light shadow" style="border: 1px solid #b4b4b4; background: none;">Approved</button></a>
        <button class="decline-button edit-button px-3 py-1 rounded text-light shadow" style="border: 1px solid #b4b4b4; background: none;">Declined</button></a>
        <button class="pending-button edit-button px-3 py-1 rounded text-light shadow" style="border: 1px solid #b4b4b4; background: none;">Pending</button></a>

      </div>

      <!-- APPROVED -->
      <div style="display: block;" id="approved-tickets">
        <div class=" col-12  d-flex flex-wrap justify-content-center">

          <?php
          $select_approved = "SELECT * FROM cinematix_bookings WHERE user_id =  '$_SESSION[user_id]' && booking_status = 'approved'";
          $query_select_approved = mysqli_query($conn, $select_approved);

          if (mysqli_num_rows($query_select_approved) > 0) {
            while ($row_query_select_approved = mysqli_fetch_assoc($query_select_approved)) {
              $movie_name = $row_query_select_approved['movie_name'];
              $lname = $row_query_select_approved['lname'];
              $fname = $row_query_select_approved['fname'];
              $booking_id = $row_query_select_approved['booking_id'];


          ?>
              <div class="border  m-2 rounded  p-4">
                <p class="m-1"> Ticket ID: <i class="text-light"> <?php echo $booking_id ?></i> </p>
                <h4 class="text-light"> <?php echo $movie_name ?></h4>
                <p class="m-1"> Recipient: <i class="text-light"> <?php echo $lname, $lname ?></i> </p>
                <p class="m-1"> Date: <i class="text-light"> Tuesday, 11 August</i> </p>
                <p class="m-1"> Time: <i class="text-light"> 2:30 PM</i> </p>
                <p class="m-1"> Status: <i class="text-light"> Approved</i> </p>
              </div>


            <?php
            }
          } else {
            ?>
            <div class="border rounded m-5">
              <p class="m-0  p-3 text-light">
                No Approved Bookings
              </p>
            </div>
          <?php
          }
          ?>

        </div>
      </div>

      <!-- Declined -->
      <div style="display: none;" id="declined-tickets">
        <div class=" col-12  d-flex flex-wrap justify-content-center">

          <?php
          $select_declined = "SELECT * FROM cinematix_bookings WHERE user_id =  '$_SESSION[user_id]' && booking_status = 'declined'";
          $query_select_declined = mysqli_query($conn, $select_declined);

          if (mysqli_num_rows($query_select_declined) > 0) {
            while ($row_query_select_declined = mysqli_fetch_assoc($query_select_declined)) {
              $movie_name = $row_query_select_declined['movie_name'];
              $lname = $row_query_select_declined['lname'];
              $fname = $row_query_select_declined['fname'];
              $booking_id = $row_query_select_declined['booking_id'];


          ?>
              <div class="border  m-2 rounded  p-4">
                <p class="m-1"> Ticket ID: <i class="text-light"> <?php echo $booking_id ?></i> </p>
                <h4 class="text-light"> <?php echo $movie_name ?></h4>
                <p class="m-1"> Recipient: <i class="text-light"> <?php echo $lname, $lname ?></i> </p>
                <p class="m-1"> Date: <i class="text-light"> Tuesday, 11 August</i> </p>
                <p class="m-1"> Time: <i class="text-light"> 2:30 PM</i> </p>
                <p class="m-1"> Status: <i class="text-light"> Declined</i> </p>
              </div>

            <?php
            }
          } else {
            ?>
            <div class="border rounded m-5">
              <p class="m-0  p-3 text-light">
                No Declined Bookings
              </p>
            </div>
          <?php
          }
          ?>
        </div>
      </div>


      <div style="display: none;" id="pending-tickets">
        <div class=" col-12  d-flex flex-wrap justify-content-center">

          <?php
          $select_pending = "SELECT * FROM cinematix_bookings WHERE user_id =  '$_SESSION[user_id]' && booking_status = 'pending'";
          $query_select_pending = mysqli_query($conn, $select_pending);

          if (mysqli_num_rows($query_select_pending) > 0) {
            while ($row_query_select_pending = mysqli_fetch_assoc($query_select_pending)) {
              $movie_name = $row_query_select_pending['movie_name'];
              $lname = $row_query_select_pending['lname'];
              $fname = $row_query_select_pending['fname'];
              $booking_id = $row_query_select_pending['booking_id'];
              $day = $row_query_select_pending['day'];
              $date = $row_query_select_pending['date'];
              $month = $row_query_select_pending['month'];
              $time = $row_query_select_pending['time'];
              $booking_status = $row_query_select_pending['booking_status'];

          ?>
              <div class="border  m-2 rounded  p-4">
                <p class="m-1"> Ticket ID: <i class="text-light"> <?php echo $booking_id ?></i> </p>
                <h4 class="text-light"> <?php echo $movie_name ?></h4>
                <p class="m-1"> Recipient: <i class="text-light"> <?php echo $lname, ' ', $fname ?></i> </p>
                <p class="m-1"> Date: <i class="text-light"> <?php echo $day, ' ', $date, ', ', $month ?></i> </p>
                <p class="m-1"> Time: <i class="text-light"> <?php echo $time ?></i> </p>
                <p class="m-1"> Status: <i class="text-light"> Pending </i> </p>
              </div>


            <?php
            }
          } else {
            ?>
            <div class="border rounded m-5">
              <p class="m-0  p-3 text-light">
                No pending Bookings
              </p>
            </div>
          <?php
          }
          ?>
        </div>
      </div>

    </div>






  </div>

  <script>
    document.querySelector('.mobile-toggle').addEventListener('click', function() {
      var mobileContent = document.querySelector('#mobile-content');
      if (mobileContent.style.visibility === 'block') {
        mobileContent.style.display = 'none';
      } else {
        mobileContent.style.display = 'block';
      }
    });

    document.querySelector('.mobile-content-toggle').addEventListener('click', function() {
      var mobileContent = document.querySelector('#mobile-content');
      if (mobileContent.style.display === 'none') {
        // Show the #mobile-content element
        mobileContent.style.display = 'flex';
        // Prevent the page from scrolling
        document.body.style.overflow = 'hidden';
      } else {
        // Hide the #mobile-content element
        mobileContent.style.display = 'none';
        // Allow the page to scroll
        document.body.style.overflow = 'auto';
      }
    });


    document.querySelector('.edit-button').addEventListener('click', function() {
      var mobileContent = document.querySelector('#edit-content');
      if (mobileContent.style.visibility === 'block') {
        mobileContent.style.display = 'none';
      } else {
        mobileContent.style.display = 'block';
      }
    });





    document.querySelector('.approve-button').addEventListener('click', function() {
      var approvedContent = document.querySelector('#approved-tickets');
      var declinedContent = document.querySelector('#declined-tickets');
      var pendingContent = document.querySelector('#pending-tickets');

      // Show the Approved tickets and hide the Declined and Pending tickets
      approvedContent.style.display = 'block';
      declinedContent.style.display = 'none';
      pendingContent.style.display = 'none';
    });

    document.querySelector('.decline-button').addEventListener('click', function() {
      var approvedContent = document.querySelector('#approved-tickets');
      var declinedContent = document.querySelector('#declined-tickets');
      var pendingContent = document.querySelector('#pending-tickets');

      // Show the Declined tickets and hide the Approved and Pending tickets
      approvedContent.style.display = 'none';
      declinedContent.style.display = 'block';
      pendingContent.style.display = 'none';
    });

    document.querySelector('.pending-button').addEventListener('click', function() {
      var approvedContent = document.querySelector('#approved-tickets');
      var declinedContent = document.querySelector('#declined-tickets');
      var pendingContent = document.querySelector('#pending-tickets');

      // Show the Pending tickets and hide the Approved and Declined tickets
      approvedContent.style.display = 'none';
      declinedContent.style.display = 'none';
      pendingContent.style.display = 'block';
    });
  </script>
</body>

</html>