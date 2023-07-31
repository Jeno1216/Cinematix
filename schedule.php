<?php

@include 'config.php';
session_start();

if (isset($_POST['submit'])) {

  $user_id = $_SESSION['user_id'];
  $day = mysqli_real_escape_string($conn, $_POST['selected-day']);
  $date = mysqli_real_escape_string($conn, $_POST['selected-date']);
  $month = mysqli_real_escape_string($conn, $_POST['selected-month']);
  $time = mysqli_real_escape_string($conn, $_POST['selected-time']);

  $movie_id = mysqli_real_escape_string($conn, $_POST['movie_id']);
  $movie = mysqli_real_escape_string($conn, $_POST['selected-movie']);

  $photo = $_FILES['photo']['name'];

  $lname = mysqli_real_escape_string($conn, $_POST['lname']);
  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);

  $insert_booking = "INSERT INTO cinematix_bookings (user_id, lname, fname, email, movie_name, movie_id, day, date, month, id_photo, time) 
  VALUES('$user_id', '$lname', '$fname', '$email', '$movie', '$movie_id', '$day', '$date', '$month', '$photo', '$time')";
  $query_run =  mysqli_query($conn, $insert_booking);

  if ($query_run) {
    move_uploaded_file($_FILES["photo"]["tmp_name"], "booking_photos/" . $_FILES["photo"]["name"]);
  }
}


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
      padding: 5px 10px;
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
      padding: 0 5px;
      font-size: 14px;
      color: #b4b4b4;
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

  <div class="d-flex justify-content-center position-relative">
    <div class="home-gradient-overlay-top"></div>

    <div style="height: 100%; width: 100%; border: 1px solid red;">
      <img src="https://static.hbo.com/2022-05/fantastic-beasts-secrets-of-dumbledore-ka-1920_0.jpg?w=1200" alt="" style="height: 100vh; width: 100%; object-fit: cover;">
    </div>

    <div class="home-gradient-overlay-bottom"></div>


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

          <a href="profile.php">
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

  <div style=" margin-top: -60vh; position: relative; " class="d-flex justify-content-center text-light">

    <div class="" style="width: 90%; ">
      <div class="title">
        <p class="text-light fs-5">
          SCHEDULE
        </p>
        <div style="height: 3px; background: linear-gradient(to right, rgba(255, 44, 31, 1), rgba(255, 44, 31, 0));                  "></div>
      </div>

      <br>

      <?php
      // NOWSHOWINg
      // Check if data is available and display slide elements
      //The number of slide depends on the number of instances in the database
      $select_now_showing = "SELECT movie_id, title, genre, time, rating, img_url FROM cinematix_now_showing";
      $result_now_showing = mysqli_query($conn, $select_now_showing);

      if (mysqli_num_rows($result_now_showing) > 0) {
        while ($row_now_showing = mysqli_fetch_assoc($result_now_showing)) {
          $id = $row_now_showing['movie_id'];
          $genre = $row_now_showing['genre'];
          $title = $row_now_showing['title'];
          $time = $row_now_showing['time'];
          $rating = $row_now_showing['rating'];
          $img_url = $row_now_showing['img_url'];
      ?>
          <form action="" method="post" enctype="multipart/form-data">

            <!-- Movie 1 -->
            <div class=" gap-3 mb-5 mt-3 d-flex flex-lg-row flex-md-row flex-column col-12 justify-content-center align-items-center">

              <div class=" col-lg-4 col-md-5 col-sm-6 col-6 d-flex justify-content-center ">
                <div class="" style="height: 100%;width: 100%;">
                  <img src="<?php echo $img_url; ?>" alt="" style="object-fit: cover; height: 100%; width: 100%;">
                </div>
              </div>

              <div class=" col-lg-7 col-md-7 col-12 d-flex justify-content-center ">
                <div class="" style="height: 100%;width: 100%;">
                  <div class="p-1 d-flex flex-lg-row flex-column justify-content-lg-between ">
                    <div class="text-lg-start text-md-start  text-center">
                      <h2 style="font-size: 20px; font-weight: bold; margin-bottom: 0;">
                        <?php echo $title; ?>

                      </h2>
                      <p style="font-size: 12px; margin-bottom: 0;"><?php echo $time; ?> min | IMBD <?php echo $rating; ?></p>
                    </div>
                    <div class="text-lg-start text-md-start  text-center">
                      <p style="font-size: 12px; margin-bottom: 0;"><?php echo $genre; ?> </p>
                    </div>
                  </div>


                  <div>

                    <div class="schedule-scroll-container p-1">

                      <div class="schedule-row-time py-2  ">

                        <?php
                        // DATE
                        // Fetch data from the cinematix_dates table which contains the available dates for each movie in cinematix_now_showing table.
                        $select_dates = "SELECT schedule_id, movie_id, day, date, month FROM cinematix_dates WHERE movie_id = '$id' ";
                        $result_dates = mysqli_query($conn, $select_dates);

                        if (mysqli_num_rows($result_dates) > 0) {
                          // loop through the instances
                          while ($row_dates = mysqli_fetch_assoc($result_dates)) {
                            $schedule_id = $row_dates['schedule_id'];
                            $movie_id = $row_dates['movie_id'];
                            $day = $row_dates['day'];
                            $date = $row_dates['date'];
                            $month = $row_dates['month'];

                        ?>
                            <div class="schedule-individual rounded border mx-1" style="width: 100px; display: inline-block; text-align: center; cursor:pointer" onclick="showSchedule('<?php echo $schedule_id ?>'); this.querySelectorAll('input[type=radio]').forEach(radio => radio.checked = true);">
                              <div style="text-decoration: none;" class="text-light">
                                <p style="font-size: 12px; margin-bottom: 0;"><?php echo $day ?></p>
                                <h2 style="font-size: 50px; font-weight: bold; margin-bottom: 0;"><?php echo $date ?></h2>
                                <p style="font-size: 12px; margin-bottom: 0;"><?php echo $month ?></p>
                                <input type="radio" name="selected-day" style="display: none;" value="<?php echo $day ?>">
                                <input type="radio" name="selected-date" style="display: none;" value="<?php echo $date ?>">
                                <input type="radio" name="selected-month" style="display: none;" value="<?php echo $month ?>">
                              </div>
                            </div>
                        <?php
                          }
                        }
                        ?>


                      </div>

                    </div>

                    <div class=" p-1">

                      <div class="schedule-row schedule-scroll-container py-2 ">

                        <?php
                        $select_time = "SELECT schedule_id, time FROM cinematix_time WHERE schedule_id IN (SELECT schedule_id FROM cinematix_dates WHERE movie_id = '$id')";
                        $result_time = mysqli_query($conn, $select_time);

                        if (mysqli_num_rows($result_time) > 0) {
                          // loop through the instances
                          while ($row_time = mysqli_fetch_assoc($result_time)) {
                            $schedule_id1 = $row_time['schedule_id'];
                            $time = $row_time['time'];

                        ?>

                            <div id="<?php echo $schedule_id1 ?>" class="schedule-individual-time rounded border mx-1 py-1" style="cursor:pointer; display: inline-block; width: 100px; display: none; text-align: center; " onclick="this.querySelectorAll('input[type=radio]').forEach(radio => radio.checked = true);">
                              <div style="text-decoration: none;" class="text-light">
                                <p style="font-size: 12px; margin-bottom: 0;"><?php echo $time ?></p>
                                <input type="radio" name="selected-time" value="<?php echo $time ?>" style="display: none;">
                              </div>
                            </div>
                        <?php }
                        } ?>

                      </div>

                      <div class="d-flex gap-4  justify-content-lg-start justify-content-md-start
                    justify-content-sm-center justify-content-center">

                        <div class="input-container ">
                          <label for="Title" class="text-light"> Title: * </label>
                          <select name="title" id="title">
                            <option class="text-black " value="apple">Mr</option>
                            <option class="text-black" value="Ms">Ms</option>
                            <option class="text-black" value="Mrs">Mrs</option>
                            <option class="text-black" value="Master">Master</option>
                            <option class="text-black" value="Miss">Miss</option>
                          </select>
                        </div>


                        <div class="input-container ">
                          <label for="gender" class="text-light"> Sex: * </label>
                          <select name="gender" id="gender">
                            <option class="text-black " value="apple">Male</option>
                            <option class="text-black" value="Ms">Female</option>
                          </select>
                        </div>

                      </div>

                      <div class="d-flex flex-column ">

                        <div class="input-container">
                          <input type="text" name="lname" id="lname" style="text-align: start;" required>
                          <label for="lname">Last Name</label>
                        </div>

                        <div class="input-container">
                          <input type="text" name="fname" id="fname" style="text-align: start;" required>
                          <label for="fname">Given Name</label>
                        </div>

                      </div>

                      <div class="d-flex gap-4  justify-content-lg-start justify-content-md-start
                    justify-content-sm-center justify-content-center">
                        <div class="input-container">
                          <input type="email" name="email" id="email" style="text-align: start;" required>
                          <label for="email">Email Address</label>
                        </div>
                      </div>

                      <div class="input-container">
                        <input type="text" name="selected-movie" id="selected-movie" style="text-align: start;" value="<?php echo $title ?>" placeholder="<?php echo $title ?>" readonly>
                        <label for="selected-movie">Movie</label>
                      </div>

                      <!-- not displayed-->
                      <div class="input-container">
                        <input type="text" name="movie_id" id="movie_id" style="text-align: start;" value="<?php echo $movie_id ?>" readonly>
                        <label for="movie_id">Movie ID</label>
                      </div>

                      <br>
                      <div class="d-flex gap-4 text-light gap-3 justify-content-lg-start justify-content-md-start justify-content-sm-center justify-content-center ">
                        <div class="input-container1">
                          <div class="file-input-container">
                            <label for="photo-<?php echo $id; ?>" class="custom-file-label border rounded-1" style="padding: 5px 10px;"><i class="bi bi-upload"></i>   ID Photo</label>
                            <input required type="file" name="photo" id="photo-<?php echo $id; ?>" accept=".jpg, .png" class="file-input d-none" onchange="document.getElementById('file-name<?php echo $id; ?>').textContent = this.files[0].name;">
                          </div>
                        </div>
                        <div class=" p-0 d-flex align-items-center">
                          <p class=" m-0" id="file-name<?php echo $id; ?>"></p>
                        </div>
                      </div>


                      <div class="d-flex gap-4 justify-content-lg-start justify-content-md-start
                    justify-content-sm-center justify-content-center" style="margin-top: 15px;">
                        <div>
                          <input type="submit" name="submit" value="Submit" class="px-3 py-1 border-0 rounded text-light shadow" style="background-color: #ff2c1f;">
                        </div>
                      </div>




                    </div>

                  </div>

                </div>
              </div>




            </div>
          </form>
          <hr>

      <?php

        } // End of while loop
      }
      ?>






    </div>





  </div>

  <div class="footer-container d-flex align-items-center justify-content-center border-top">

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 " style="width: 90%;">
      <div class="col-md-4 d-flex align-items-center ">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        </a>
        <span class="mb-md-0 text-light">© CINEMATIX</span>
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-light bi bi-twitter" href="#"><svg class="bi" width="24" height="24">
              <use xlink:href="#twitter"></use>
            </svg></a></li>
        <li class="ms-3"><a class="text-light bi bi-instagram" href="#"><svg class="bi" width="24" height="24">
              <use xlink:href="#instagram"></use>
            </svg></a></li>
        <li class="ms-3"><a class="text-light bi bi-facebook" href="#"><svg class="bi" width="24" height="24">
              <use xlink:href="#facebook"></use>
            </svg></a></li>
      </ul>
    </footer>
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

    function showSchedule(scheduleId) {
      const scheduleRows = document.querySelectorAll('.schedule-individual-time');
      scheduleRows.forEach(row => {
        if (row.id === scheduleId) {
          row.style.display = 'inline-block';
        } else {
          row.style.display = 'none';
        }
      });
    }

    // when date is clicked, it becomes red
    var scheduleDivs = document.getElementsByClassName('schedule-individual');
    var activeDiv = null;

    for (var i = 0; i < scheduleDivs.length; i++) {
      scheduleDivs[i].addEventListener('click', function() {
        // Remove red background from the previously clicked div
        if (activeDiv !== null) {
          activeDiv.style.backgroundColor = '';
        }

        // Set the background of the clicked div to red
        this.style.backgroundColor = '#ff2c1f';

        // Store the reference to the clicked div
        activeDiv = this;
      });
    }

    // when time is clicked, it becomes red
    var scheduleDivs1 = document.getElementsByClassName('schedule-individual-time');
    var activeDiv1 = null;

    for (var i = 0; i < scheduleDivs1.length; i++) {
      scheduleDivs1[i].addEventListener('click', function() {
        // Remove red background from the previously clicked div
        if (activeDiv1 !== null) {
          activeDiv1.style.backgroundColor = '';
        }

        // Set the background of the clicked div to red
        this.style.backgroundColor = '#ff2c1f';

        // Store the reference to the clicked div
        activeDiv1 = this;
      });
    }
  </script>

  <script src="src/script.js"></script>



</body>

</html>