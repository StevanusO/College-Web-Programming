<?php

require_once('config.php');
print_r('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">');
$name = $email = $address = $major = "";
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$major = $_POST['major'];

$sql = "UPDATE student SET name='" . $name . "', address='" . $address . "', major='" . $major . "' WHERE email='" . $email . "'";
if ($conn->query($sql)) {
    print_r('<div class="alert alert-success alert-dismissible fade show" role="alert">');
    print_r('<br><strong>Student Updated!</strong>');
    print_r(' <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>');
    header("refresh:2; url=../view.php");
} else {
    print_r('<div class="alert alert-danger alert-dismissible fade show" role="alert">');
    print_r("ERROR: " . $conn->error);
    print_r(' <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>');
}
print_r('<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>');
mysqli_close($conn);
