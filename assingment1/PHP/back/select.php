<?php

require_once('config.php');
// require_once('../back');

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // var_dump(mysqli_num_rows($result) > 0);
    $count = 1;
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<th scope='col' class='text-center'>{$count}</th>";
        echo "<th class='text-center'>{$row['name']}</th>";
        echo "<th class='text-center'>{$row['email']}</th>";
        echo "<th class='text-center'>{$row['address']}</th>";
        echo "<th class='text-center'>{$row['major']}</th>";
        echo "<td class='text-center'><a href='update.php?email=$row[email]' class='link-warning'>Update</a>| <a href='delete.php?email=$row[email]' class='link-danger'>Delete</a></th>";
        echo "</tr>";
        $count++;
    }
    // require('..')
} else {
    echo "<tr>";
    echo "<th scope='col' class='text-center'>-</th>";
    echo "<th class='text-center'>-</th>";
    echo "<th class='text-center'>-</th>";
    echo "<th class='text-center'>-</th>";
    echo "<th class='text-center'>-</th>";
    echo "<td class='text-center'>-</th>";
    echo "</tr>";
}
