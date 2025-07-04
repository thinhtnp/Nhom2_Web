<?php
// db.php - File kết nối cơ sở dữ liệu chung

// Thông tin kết nối
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'nhom2_web'; // Đổi thành tên database bạn đã tạo

// Tạo kết nối
$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

// Kiểm tra kết nối
if (!$conn) {
    die('Database connection failed: ' . mysqli_connect_error());
}

// Thiết lập charset utf8
mysqli_set_charset($conn, 'utf8mb4');

// Bây giờ bạn có thể include 'db.php' ở các file khác để dùng $conn
// Ví dụ: include 'db.php';
?>
