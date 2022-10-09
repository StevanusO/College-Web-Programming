<div>
    <?php
    require_once('config.php');
    ?>
</div>
<?php
if (isset($_GET['email'])) {
    $email = $_GET['email'];
}

$result = mysqli_query($conn, "SELECT * FROM student WHERE email='$email'");
while ($row = mysqli_fetch_array($result)) {
    $name = $row['name'];
    $email = $row['email'];
    $address = $row['address'];
    $major = $row['major'];
    $arr = array("name" => $name, "email" => $email, "address" => $address, "major" => $major);
    $json = json_encode($arr);
}
