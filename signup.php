<?php
error_reporting(0); // hide all error warnings

@include 'config.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = ($_POST['password']);
    $cpass = ($_POST['cpassword']);

    // will not allow two or more than register account with the same email OR name.
    $select = "SELECT * FROM cinematix_user WHERE email = '$email' || name = '$name' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $error[] = 'User already exists!';
    } else {
        if($pass != $cpass){
            $error[] = 'Password not matched!';
        } else {
            $insert = "INSERT INTO cinematix_user(name, email, password, cpassword) 
            VALUES('$name', '$email', '$pass', '$pass')";
            mysqli_query($conn, $insert);
            header('location:signin.php'); // point to login_form.php
        }
    }
};
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
  margin-top: 20px; /* Adjust the margin as needed */
}

.input-container input[type="text"], .input-container input[type="email"]
, .input-container input[type="password"], .input-container input[type="cpassword"] {
  display: block;
  width: 100%;
  padding: 10px;
  border: 1px solid #b4b4b4;
  border-radius: 5px;
  background: none;
  font-size: 16px;
  color: white;

}

.input-container label {
  position: absolute;
  top: -10px; /* Adjust this value to align the label */
  left: 10px;
  background-color: rgb(0, 0, 0);
  padding: 0 5px;
  font-size: 14px;
  color: #b4b4b4;
}
.submit{
    display: inline-block;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #b4b4b4;
    background: none;
    color: white;
    text-align: center;
    transition: .3s;
}
.submit:hover{
    background-color: #ff2c1f;
}
    </style>
</head>
<body>
    <div class="d-block " style="width: 90%; margin: 50px auto 0 auto;">

        <div class="d-lg-flex  d-block col-12">

        <div class="col-lg-6 col-12 p-3">

        <div class="" style="width: 200px;">
            <img src="src/img/logo.png" alt="" class="img-fluid">
        </div>

        <br>

    <div>
        <h2 class="text-light">Sign Up</h2>
        <br>

        <form action="" method="POST">

          <p class="mb-2 " style="color: #b4b4b4;"> Enter details below.</p>
          
          <div class="input-container">
              <input type="text" name="name" id="name" required>
              <label for="name">Name</label>
            </div>

            <div class="input-container">
              <input type="email" name="email" id="email" required>
              <label for="email">Email</label>
            </div>

            <div class="input-container">
              <input type="password" name="password" id="password" required>
              <label for="password">Password</label>
            </div>

            <div class="input-container">
              <input type="password" name="cpassword" id="cpassword" required>
              <label for="cpassword">Confirm Password</label>
            </div>


            <br>

            <?php
        if(isset($error)){
            foreach($error as $error){
              echo '<span class="error-msg" style="color: white">'.$error.'</span>';
            };
        };
        ?>
<br><br>
            
            <input type="submit" name="submit" value="Submit" class="form-btn submit">

      </form>

    </div>

        </div>

        <div class="col-lg-6 col-12 p-3 d-flex justify-content-center align-items-center">

            <div>
                <img  src="src/img/background.png" class="img-fluid" alt="">
            </div>
    
        </div>



        
    </div>

            <br>
    </div>
    <br>

    <script>

  function selectRole(role) {
    var adminLabel = document.querySelector('input[value="Admin"]').parentElement;
    var userLabel = document.querySelector('input[value="User"]').parentElement;

    if (role === 'Admin') {
      adminLabel.style.backgroundColor = '#ff2c1f';
      adminLabel.style.border = 'none';
      adminLabel.style.transition = '.3s';
      adminLabel.style.boxShadow = '0 0 5px rgba(0, 0, 0, 0.3)';

      userLabel.style.backgroundColor = '';
      userLabel.style.border = '1px solid white';

    } else if (role === 'User') {
        userLabel.style.backgroundColor = '#ff2c1f';
        userLabel.style.border = 'none';
        userLabel.style.transition = '.3s';
      adminLabel.style.backgroundColor = '';
      adminLabel.style.border = '1px solid white';

    }
  }
    </script>

    </body>
    </html>