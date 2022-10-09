<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_data";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    print_r('<div class="alert alert-danger alert-dismissible fade show" role="alert">');
    print_r('<br><strong>Whoa slow down buddy, MySQL connection error: </strong> ' . $conn->connect_error);
    print_r(' <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>');
} else {
    print_r('<div class="alert alert-success alert-dismissible fade show" role="alert">');
    print_r('<br><strong>Connection Established!</strong>');
    print_r(' <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>');
}
