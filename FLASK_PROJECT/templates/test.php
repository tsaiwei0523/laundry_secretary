<?php
$servername = "54.65.230.207";
$username = "root";
$password = "kcliu10142023!";
$dbname = "laundry_secretary";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("FAIL: " . $conn->connect_error);
}

echo "it works";

// 关闭连接
$conn->close();
?>
