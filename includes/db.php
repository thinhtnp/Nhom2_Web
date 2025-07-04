<?php
$host = 'localhost';
$user = 'root';
$pass = ''; // Hoặc '123456' nếu bạn đã đặt
$dbname = 'nhom2_web'; // Tên database bạn đã tạo

$conn = mysqli_connect($host, $user, $pass, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối CSDL thất bại: " . mysqli_connect_error());
}
?>
