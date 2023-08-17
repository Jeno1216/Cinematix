<?php

@include 'config.php';

// FEATURED
// Fetch data from the cinematix_featured table
$select_featured = "SELECT title, genre, img_url FROM cinematix_featured";
$result_featured = mysqli_query($conn, $select_featured);

// NOW SHOWING
// Fetch data from the cinematix_now_showing table
$select_now_showing = "SELECT title, time, rating, img_url FROM cinematix_now_showing";
$result_now_showing = mysqli_query($conn, $select_now_showing);

// COMING SOON
// Fetch data from the cinematix__coming_soon table
$select_coming_soon = "SELECT title, img_url FROM cinematix_coming_soon";
$result_coming_soon = mysqli_query($conn, $select_coming_soon);

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
</head>

<body>
    <header class="d-flex justify-content-center ">

        <div class="top-element" style="position: relative; top: 0; height: 100%; width: 100%;">

            <?php
            // FEATURED
            // Check if data is available and display slide elements
            //The number of slide depends on the number of instances in the database

            if (mysqli_num_rows($result_featured) > 0) {
                // loop through the instances
                while ($row_featured = mysqli_fetch_assoc($result_featured)) {
                    $title = $row_featured['title'];
                    $genre = $row_featured['genre'];
                    $img_url = $row_featured['img_url'];
            ?>

                    <div class="change-element" style="width: 100%;">
                        <div class="home-gradient-overlay-top"></div>

                        <img src="<?php echo $img_url; ?>" alt="" style="height: 100vh; width: 100%; object-fit: cover;">
                        <div class="home-gradient-overlay-bottom"></div>

                        <div class="col-12 d-flex justify-content-center align-items-center" style="position: absolute; bottom: 12%;">

                            <div class="slide-content text-center">
                                <p class="text-light px-3" style="font-size: 30px; margin-bottom: 0;">
                                    <?php echo $title; ?>
                                </p>
                                <p class="" style="font-size: 12px; color: rgb(211, 211, 211); margin-top: 0;">
                                    <?php echo $genre; ?>
                                </p>

                                <div class="col-12 d-flex justify-content-center align-items-center gap-3">
                                    <a href="#">
                                        <button class="px-3 py-1 border-0 rounded text-light shadow" style="background-color: #ff2c1f;">Book Now</button>
                                    </a>
                                    <a href="#" class="play bi bi-play" style="font-size: 30px;"></a>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php
                } // End of while loop
            }
            ?>


            <!-- numbers depends how many .change-element are there -->
            <div class="text-light position-absolute" style="bottom: 3%; width: 100%; text-align: center;">
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <div id="dot-container" class="d-inline-block"></div>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>

        </div>

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
    </header>

    <br><br><br>

    <section class="now-showing-section d-flex justify-content-center">
        <div class="now-showing">
            <div class="title">
                <p class="text-light fs-5">
                    NOW SHOWING
                </p>
                <div style="height: 3px; background: linear-gradient(to right, rgba(255, 44, 31, 1), rgba(255, 44, 31, 0));                  "></div>
            </div>
            <br>

            <div class="movie-scroll-container">
                <div class="movie-row py-3">

                    <?php
                    // NOW SHOWING
                    // Check if data is available and display slide elements
                    //The number of movies in now showing section depends on the number of instances in the database
                    if (mysqli_num_rows($result_now_showing) > 0) {
                        // loop through the instances
                        while ($row_now_showing = mysqli_fetch_assoc($result_now_showing)) {
                            $title = $row_now_showing['title'];
                            $time = $row_now_showing['time'];
                            $rating = $row_now_showing['rating'];
                            $img_url = $row_now_showing['img_url'];
                    ?>

                            <div class="movie-individual mx-2" style="border: 1px solid rgba(0, 0, 0, 0); height: auto; width: 200px; display: inline-block;">
                                <div class="position-relative" style="height: 300px; display: flex; justify-content: center;">

                                    <!-- Display only if hovered on the image, JavaScript is below the code -->
                                    <div class="movie-hover-bg" style="background-color: #00000081; height: 100%; width: 100%; position: absolute; display: none;"></div>
                                    <button class="movie-hover-button px-3 py-1 border-0 rounded text-light shadow position-absolute" style="font-size: 14px; background-color: #ff2c1f; top: 60%; display: none;">Book now</button>
                                    <p class="movie-hover-rating px-2 text-light bi bi-bookmark-star-fill" style="font-size: 14px; position: absolute; top: 50%; display: none;"> IMDB <?php echo $rating; ?></p>

                                    <!-- We set onmouseover="showHoverElements(this)" onmouseout="hideHoverElements(this);" here because this is the 
      element that when we hover over it, it shows the 3 elements above -->
                                    <img src="<?php echo $img_url; ?>" alt="" style="object-fit: cover; height: 100%; width: 100%;" onmouseover="showHoverElements(this)" onmouseout="hideHoverElements(this);">
                                </div>

                                <p class="px-2 pt-2 text-light" style="font-size: 14px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo $title; ?></p>
                                <p class="px-2" style="font-size: 12px; line-height: 1px; color: gray;"><?php echo $time; ?> min | IMDB <?php echo $rating; ?></p>
                            </div>

                    <?php
                        } // End of while loop
                    }
                    ?>

                </div>
            </div>
        </div>



    </section>
    <br><br><br>

    <!-- Copy pasted from now showing section, feel free to change it if needed -->

    <section class="now-showing-section d-flex justify-content-center">
        <div class="now-showing">
            <div class="title">
                <p class="text-light fs-5">
                    COMING SOON
                </p>
                <div style="height: 3px; background: linear-gradient(to right, rgba(255, 44, 31, 1), rgba(255, 44, 31, 0));                  "></div>
            </div>
            <br>


            <div class="movie-scroll-container">
                <div class="movie-row py-3">

                    <?php
                    // COMING SOON
                    // Check if data is available and display slide elements
                    //The number of movies in coming soon section depends on the number of instances in the database
                    if (mysqli_num_rows($result_coming_soon) > 0) {
                        // loop through the instances
                        while ($row_coming_soon = mysqli_fetch_assoc($result_coming_soon)) {
                            $title = $row_coming_soon['title'];
                            $img_url = $row_coming_soon['img_url'];
                    ?>

                            <div class="movie-individual mx-2" style="border: 1px solid rgba(0, 0, 0, 0); height: auto; width: 200px; display: inline-block;">
                                <div class="position-relative" style="height: 300px; display: flex; justify-content: center;">

                                    <!-- Display only if hovered on the image, JavaScript is below the code -->
                                    <!-- We set onmouseover="showHoverElements(this)" onmouseout="hideHoverElements(this);" here because this is the 
                    element that when we hover over it, it shows the 3 elements above -->
                                    <img src="<?php echo $img_url; ?> " alt="" style="object-fit: cover; height: 100%; width: 100%;">
                                </div>

                                <p class="px-2 pt-2 text-light" style="font-size: 14px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo $title; ?> </p>
                            </div>

                    <?php
                        } // End of while loop
                    }
                    ?>




                </div>
            </div>

    </section>

    <br><br> <br><br><br>




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

        function showHoverElements(image) {
            const parent = image.parentNode;
            const hoverBg = parent.querySelector('.movie-hover-bg');
            const hoverButton = parent.querySelector('.movie-hover-button');
            const hoverRating = parent.querySelector('.movie-hover-rating');
            hoverBg.style.display = 'block';
            hoverButton.style.display = 'block';
            hoverRating.style.display = 'block';
        }

        function hideHoverElements(image) {
            const parent = image.parentNode;
            const hoverBg = parent.querySelector('.movie-hover-bg');
            const hoverButton = parent.querySelector('.movie-hover-button');
            const hoverRating = parent.querySelector('.movie-hover-rating');
            hoverBg.style.display = 'none';
            hoverButton.style.display = 'none';
            hoverRating.style.display = 'none';
        }
    </script>

    <script src="src/script.js"></script>









</body>

</html>