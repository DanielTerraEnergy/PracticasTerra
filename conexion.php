<?php
$mysqli = mysqli_connect("localhost", "root", "", "empleados");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
