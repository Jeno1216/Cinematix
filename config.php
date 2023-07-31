<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'cinematix';

$conn = mysqli_connect($servername, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<script>
    console.log('Connected to the database successfully!');
</script>