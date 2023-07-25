<?php
    @include 'config.php';
    session_start(); // dont forget this
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
    
    <div class="d-flex justify-content-center position-relative">
        <div class="home-gradient-overlay-top"></div>

        <div  style="height: 100%; width: 100%; border: 1px solid red;">
            <img src="https://static.hbo.com/2022-05/fantastic-beasts-secrets-of-dumbledore-ka-1920_0.jpg?w=1200" alt="" style="height: 100vh; width: 100%; object-fit: cover;">
        </div>

        <div class="home-gradient-overlay-bottom"></div>


        <nav class="d-flex align-items-center justify-content-between position-absolute  "> 
            <img src="src\img\logo.png" alt="" height="50px" class="m-3">
            
            <div class="d-flex align-items-center justify-content-between" style="height: 100%;">

            <div class="links m-3 d-lg-flex d-md-flex d-none position-relative align-items-center w-auto" >
               
                <div class="d-flex align-items-center justify-content-center" style="height: 100%; width: 100px;">
                    
                    <a href="#" class="active text-decoration-none text-light">Home</a>
                </div> 

                <div class="d-flex align-items-center justify-content-center" style="height: 100%; width: 100px;">
                <a href="book.html" class="active text-decoration-none text-light">Book</a>
                </div> 

                <div class="d-flex align-items-center justify-content-center" style="height: 100%; width: 100px;">
                <a href="#" class="active text-decoration-none text-light">Contact</a>
                </div> 

                <div class="d-flex align-items-center justify-content-center" style="height: 100%; width: 100px;">
                <a href="#" class="active text-decoration-none text-light">About</a>
                </div> 

                <div class="d-flex align-items-center justify-content-center" style="height: 100%; width: 100px;">
                    <button class="px-3 py-1 border-0 rounded text-light shadow" style="background-color: #ff2c1f;">Sign in</button></a>
                </div> 

 
            </div>
            <div class="bi bi-list mobile-toggle m-3 d-lg-none d-md-none d-md-flex text-light"></div>

        </div>        
        
        </nav>

        <div id="mobile-content" class="position-fixed rounded" style="overflow: auto; z-index: 999">
            <div class="d-flex align-items-center justify-content-center flex-column gap-5 vh-100 p-5 position-relative" >

            <a href="#" class="mobile-active text-decoration-none text-light ">Home</a>
            <a href="#" class=" text-decoration-none mobile-links">Book</a>
            <a href="#" class=" text-decoration-none mobile-links">Contact</a>
            <a href="#" class=" text-decoration-none mobile-links">About</a>


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

            <!-- Movie 1 -->
            <div class="mb-5 mt-3 d-lg-flex flex-lg-row flex-md-column col-12 justify-content-center align-items-center">

                <div class=" col-lg-3 col-12 d-flex justify-content-center " >
                    <div class="" style="height: 100%;width: 200px;">
                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f4/The_Little_Mermaid_%282023_film%29.png/220px-The_Little_Mermaid_%282023_film%29.png" alt="" 
                        style="object-fit: cover; height: 100%; width: 100%;">
        
                    </div>
                </div>

                <div class=" col-lg-8 col-12 d-flex justify-content-center col-md-12" >
                    <div class="" style="height: 100%;width: 100%;">
                        <div  class=" p-1 d-flex flex-lg-row flex-column justify-content-lg-between justify-content-center align-items-center">
                            <div class=" text-lg-start text-center">
                                <h2 style="font-size: 20px; font-weight: bold; margin-bottom: 0;">
                                    The Little Mermaid
                                </h2>
                                <p style="font-size: 12px; margin-bottom: 0;"> 112 min | Fantasy </p>
                            </div>
                            <div class="">
                                <p style="font-size: 12px; margin-bottom: 0;">  IMDB 7.6 </p>
                            </div>
                        </div>


                        <div class="schedule-scroll-container p-1 ">
                            <div class="schedule-row py-2">
                                
                            <?php

    $connection_date = mysqli_connect('localhost','root','');
    $db_date = mysqli_select_db($connection_date, 'date');

    $sql = "SELECT * from day Where day = 'Monday';";
    $result = $conn->query($sql);

    if($result-> num_rows > 0){
        while ($row = $result->fetch_assoc()){
            echo 
            "<div class='schedule-individual rounded border mx-1' style='width: 100px; display: inline-block; text-align: center;'>
            <a href='' style='text-decoration: none;' class='text-light'>  
              <p style='font-size: 12px; margin-bottom: 0;'>" .

              $row['day'] .

              "</p> <h2 style='font-size: 50px; font-weight: bold; margin-bottom: 0;'>" .
              $row['date'] .
              " </h2>
              <p style='font-size: 12px; margin-bottom: 0;'>" .
              $row['month'] . 
               
               " </p>
          </a>
          </div>"
            ;
        }
     }
?>

<!-- NEXT IS FIGURE OUT ANAY KUN PANO IBUTANG ANG TIME SCHEDULES ON SPECIFIC DATES ONLY -->

                            <div class="schedule-individual rounded border mx-1" style="width: 100px; display: inline-block; text-align: center;">
                              <a href="" style="text-decoration: none;" class="text-light">  
                                <p style="font-size: 12px; margin-bottom: 0;"  >
                                    Monday
                                </p>
                                <h2 style="font-size: 50px; font-weight: bold; margin-bottom: 0;">
                                    15
                                </h2>
                                <p style="font-size: 12px; margin-bottom: 0;"> July </p>
                            </a>
                            </div>

                            <div class="schedule-individual rounded border mx-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;" >
                                      Tuesday
                                  </p>
                                  <h2 style="font-size: 50px; font-weight: bold; margin-bottom: 0;">
                                      16
                                  </h2>
                                  <p style="font-size: 12px; margin-bottom: 0;"> July </p>
                              </a>
                              </div>
                              <div class="schedule-individual rounded border mx-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;" >
                                      Wednesday
                                  </p>
                                  <h2 style="font-size: 50px; font-weight: bold; margin-bottom: 0;">
                                      17
                                  </h2>
                                  <p style="font-size: 12px; margin-bottom: 0;"> July </p>
                              </a>
                              </div>
                              
                              <div class="schedule-individual rounded border mx-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;" >
                                      Thursday
                                  </p>
                                  <h2 style="font-size: 50px; font-weight: bold; margin-bottom: 0;">
                                      18
                                  </h2>
                                  <p style="font-size: 12px; margin-bottom: 0;"> July </p>
                              </a>
                              </div>
                              
                              <div class="schedule-individual rounded border mx-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;" >
                                      Friday
                                  </p>
                                  <h2 style="font-size: 50px; font-weight: bold; margin-bottom: 0;">
                                      19
                                  </h2>
                                  <p style="font-size: 12px; margin-bottom: 0;"> July </p>
                              </a>
                              </div>

                              <div class="schedule-individual rounded border mx-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;" >
                                      Saturday
                                  </p>
                                  <h2 style="font-size: 50px; font-weight: bold; margin-bottom: 0;">
                                      20
                                  </h2>
                                  <p style="font-size: 12px; margin-bottom: 0;"> July </p>
                              </a>
                              </div>

                              <div class="schedule-individual rounded border mx-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;" >
                                      Sunday
                                  </p>
                                  <h2 style="font-size: 50px; font-weight: bold; margin-bottom: 0;">
                                      21
                                  </h2>
                                  <p style="font-size: 12px; margin-bottom: 0;"> July </p>
                              </a>
                              </div>

                              <div class="schedule-individual rounded border mx-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;" >
                                      Monday
                                  </p>
                                  <h2 style="font-size: 50px; font-weight: bold; margin-bottom: 0;">
                                      22
                                  </h2>
                                  <p style="font-size: 12px; margin-bottom: 0;"> July </p>
                              </a>
                              </div>

                            </div>

    
                        </div>

                        
                        <div class="schedule-scroll-container p-1 ">
                            <div class="schedule-row py-2 ">

                            <div class="schedule-individual rounded border mx-1 py-1" style="width: 100px; display: inline-block; text-align: center;">
                              <a href="" style="text-decoration: none;" class="text-light">  
                                <p style="font-size: 12px; margin-bottom: 0;"  >
                                    9:30 AM                               </p>
                            </a>
                            </div>
                            <div class="schedule-individual rounded border mx-1 py-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;"  >
                                      11:30 AM
                                  </p>
                              </a>
                              </div>
  
                              <div class="schedule-individual rounded border mx-1 py-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;"  >
                                      3:00 PM
                                  </p>
                              </a>
                              </div>
  
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Movie 2 -->

            <div class=" my-5 d-lg-flex flex-lg-row flex-md-column col-12 justify-content-center align-items-center">

                <div class=" col-lg-3 col-12 d-flex justify-content-center " >
                    <div class="" style="height: 100%;width: 200px;">
                        <img src="https://m.media-amazon.com/images/M/MV5BNmFkN2M2NzItOTY5YS00MmE2LTk3ZjctNTk2YzQ5ZmRiYzJjXkEyXkFqcGdeQXVyMjkwOTAyMDU@._V1_.jpg" alt="" 
                        style="object-fit: cover; height: 100%; width: 100%;">
        
                    </div>
                </div>

                <div class=" col-lg-8 col-12 d-flex justify-content-center col-md-12" >
                    <div class="" style="height: 100%;width: 100%;">
                        <div  class=" p-1 d-flex flex-lg-row flex-column justify-content-lg-between justify-content-center align-items-center">
                            <div class=" text-lg-start text-center">
                                <h2 style="font-size: 20px; font-weight: bold; margin-bottom: 0;">
                                    Dungeons and Dragons
                                </h2>
                                <p style="font-size: 12px; margin-bottom: 0;"> 112 min | Fantasy </p>
                            </div>
                            <div class="">
                                <p style="font-size: 12px; margin-bottom: 0;">  IMDB 7.6 </p>
                            </div>
                        </div>

                        <div class="schedule-scroll-container p-1 ">
                            <div class="schedule-row py-2">
                            <div class="schedule-individual rounded border mx-1" style="width: 100px; display: inline-block; text-align: center;">
                              <a href="" style="text-decoration: none;" class="text-light">  
                                <p style="font-size: 12px; margin-bottom: 0;"  >
                                    Monday
                                </p>
                                <h2 style="font-size: 50px; font-weight: bold; margin-bottom: 0;">
                                    15
                                </h2>
                                <p style="font-size: 12px; margin-bottom: 0;"> July </p>
                            </a>
                            </div>

                            <div class="schedule-individual rounded border mx-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;" >
                                      Tuesday
                                  </p>
                                  <h2 style="font-size: 50px; font-weight: bold; margin-bottom: 0;">
                                      16
                                  </h2>
                                  <p style="font-size: 12px; margin-bottom: 0;"> July </p>
                              </a>
                              </div>
                              <div class="schedule-individual rounded border mx-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;" >
                                      Wednesday
                                  </p>
                                  <h2 style="font-size: 50px; font-weight: bold; margin-bottom: 0;">
                                      17
                                  </h2>
                                  <p style="font-size: 12px; margin-bottom: 0;"> July </p>
                              </a>
                              </div>
                              
                              <div class="schedule-individual rounded border mx-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;" >
                                      Thursday
                                  </p>
                                  <h2 style="font-size: 50px; font-weight: bold; margin-bottom: 0;">
                                      18
                                  </h2>
                                  <p style="font-size: 12px; margin-bottom: 0;"> July </p>
                              </a>
                              </div>
                              
                              <div class="schedule-individual rounded border mx-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;" >
                                      Friday
                                  </p>
                                  <h2 style="font-size: 50px; font-weight: bold; margin-bottom: 0;">
                                      19
                                  </h2>
                                  <p style="font-size: 12px; margin-bottom: 0;"> July </p>
                              </a>
                              </div>

                              <div class="schedule-individual rounded border mx-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;" >
                                      Saturday
                                  </p>
                                  <h2 style="font-size: 50px; font-weight: bold; margin-bottom: 0;">
                                      20
                                  </h2>
                                  <p style="font-size: 12px; margin-bottom: 0;"> July </p>
                              </a>
                              </div>

                              <div class="schedule-individual rounded border mx-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;" >
                                      Sunday
                                  </p>
                                  <h2 style="font-size: 50px; font-weight: bold; margin-bottom: 0;">
                                      21
                                  </h2>
                                  <p style="font-size: 12px; margin-bottom: 0;"> July </p>
                              </a>
                              </div>

                              <div class="schedule-individual rounded border mx-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;" >
                                      Monday
                                  </p>
                                  <h2 style="font-size: 50px; font-weight: bold; margin-bottom: 0;">
                                      22
                                  </h2>
                                  <p style="font-size: 12px; margin-bottom: 0;"> July </p>
                              </a>
                              </div>

                            </div>

    
                        </div>

                        
                        <div class="schedule-scroll-container p-1 ">
                            <div class="schedule-row py-2 ">

                            <div class="schedule-individual rounded border mx-1 py-1" style="width: 100px; display: inline-block; text-align: center;">
                              <a href="" style="text-decoration: none;" class="text-light">  
                                <p style="font-size: 12px; margin-bottom: 0;"  >
                                    9:30 AM                               </p>
                            </a>
                            </div>
                            <div class="schedule-individual rounded border mx-1 py-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;"  >
                                      11:30 AM
                                  </p>
                              </a>
                              </div>
  
                              <div class="schedule-individual rounded border mx-1 py-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;"  >
                                      3:00 PM
                                  </p>
                              </a>
                              </div>
  
                            </div>
                        </div>

                    </div>
                </div>

            </div>

                        <!-- Movie 3 -->

            <div class=" my-5 d-lg-flex flex-lg-row flex-md-column col-12 justify-content-center align-items-center">

                <div class=" col-lg-3 col-12 d-flex justify-content-center " >
                    <div class="" style="height: 100%;width: 200px;">
                        <img src="https://images.ctfassets.net/usf1vwtuqyxm/1soIBawzwa52bYit498iYy/8b67c35d5116f96c187e8ba27f4cc264/fb3-poster-jude-law-full.jpg" alt="" 
                        style="object-fit: cover; height: 100%; width: 100%;">
        
                    </div>
                </div>

                <div class=" col-lg-8 col-12 d-flex justify-content-center col-md-12" >
                    <div class="" style="height: 100%;width: 100%;">
                        <div  class=" p-1 d-flex flex-lg-row flex-column justify-content-lg-between justify-content-center align-items-center">
                            <div class=" text-lg-start text-center">
                                <h2 style="font-size: 20px; font-weight: bold; margin-bottom: 0;">
                                    Fantastic Beasts: Secrets of Dumbledore
                                </h2>
                                <p style="font-size: 12px; margin-bottom: 0;"> 112 min | Fantasy </p>
                            </div>
                            <div class="">
                                <p style="font-size: 12px; margin-bottom: 0;">  IMDB 7.6 </p>
                            </div>
                        </div>

                        <div class="schedule-scroll-container p-1 ">
                            <div class="schedule-row py-2">
                            <div class="schedule-individual rounded border mx-1" style="width: 100px; display: inline-block; text-align: center;">
                              <a href="" style="text-decoration: none;" class="text-light">  
                                <p style="font-size: 12px; margin-bottom: 0;"  >
                                    Monday
                                </p>
                                <h2 style="font-size: 50px; font-weight: bold; margin-bottom: 0;">
                                    15
                                </h2>
                                <p style="font-size: 12px; margin-bottom: 0;"> July </p>
                            </a>
                            </div>

                            <div class="schedule-individual rounded border mx-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;" >
                                      Tuesday
                                  </p>
                                  <h2 style="font-size: 50px; font-weight: bold; margin-bottom: 0;">
                                      16
                                  </h2>
                                  <p style="font-size: 12px; margin-bottom: 0;"> July </p>
                              </a>
                              </div>
                              <div class="schedule-individual rounded border mx-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;" >
                                      Wednesday
                                  </p>
                                  <h2 style="font-size: 50px; font-weight: bold; margin-bottom: 0;">
                                      17
                                  </h2>
                                  <p style="font-size: 12px; margin-bottom: 0;"> July </p>
                              </a>
                              </div>
                              
                              <div class="schedule-individual rounded border mx-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;" >
                                      Thursday
                                  </p>
                                  <h2 style="font-size: 50px; font-weight: bold; margin-bottom: 0;">
                                      18
                                  </h2>
                                  <p style="font-size: 12px; margin-bottom: 0;"> July </p>
                              </a>
                              </div>
                              
                              <div class="schedule-individual rounded border mx-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;" >
                                      Friday
                                  </p>
                                  <h2 style="font-size: 50px; font-weight: bold; margin-bottom: 0;">
                                      19
                                  </h2>
                                  <p style="font-size: 12px; margin-bottom: 0;"> July </p>
                              </a>
                              </div>

                              <div class="schedule-individual rounded border mx-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;" >
                                      Saturday
                                  </p>
                                  <h2 style="font-size: 50px; font-weight: bold; margin-bottom: 0;">
                                      20
                                  </h2>
                                  <p style="font-size: 12px; margin-bottom: 0;"> July </p>
                              </a>
                              </div>

                              <div class="schedule-individual rounded border mx-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;" >
                                      Sunday
                                  </p>
                                  <h2 style="font-size: 50px; font-weight: bold; margin-bottom: 0;">
                                      21
                                  </h2>
                                  <p style="font-size: 12px; margin-bottom: 0;"> July </p>
                              </a>
                              </div>

                              <div class="schedule-individual rounded border mx-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;" >
                                      Monday
                                  </p>
                                  <h2 style="font-size: 50px; font-weight: bold; margin-bottom: 0;">
                                      22
                                  </h2>
                                  <p style="font-size: 12px; margin-bottom: 0;"> July </p>
                              </a>
                              </div>

                            </div>

    
                        </div>

                        
                        <div class="schedule-scroll-container p-1 ">
                            <div class="schedule-row py-2 ">

                            <div class="schedule-individual rounded border mx-1 py-1" style="width: 100px; display: inline-block; text-align: center;">
                              <a href="" style="text-decoration: none;" class="text-light">  
                                <p style="font-size: 12px; margin-bottom: 0;"  >
                                    9:30 AM                               </p>
                            </a>
                            </div>
                            <div class="schedule-individual rounded border mx-1 py-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;"  >
                                      11:30 AM
                                  </p>
                              </a>
                              </div>
  
                              <div class="schedule-individual rounded border mx-1 py-1" style="width: 100px; display: inline-block; text-align: center;">
                                <a href="" style="text-decoration: none;" class="text-light">  
                                  <p style="font-size: 12px; margin-bottom: 0;"  >
                                      3:00 PM
                                  </p>
                              </a>
                              </div>
  
                            </div>
                        </div>

                    </div>
                </div>

            </div>



            


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
              <li class="ms-3"><a class="text-light bi bi-twitter" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
              <li class="ms-3"><a class="text-light bi bi-instagram" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
              <li class="ms-3"><a class="text-light bi bi-facebook" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
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

    </script>

    <script src="src/script.js"></script>


    
</body>
</html>