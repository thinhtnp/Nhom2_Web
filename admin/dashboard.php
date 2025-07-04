<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    .admin-container {
      max-width: 1200px;
      margin: 40px auto;
      padding: 20px;
    }

    .admin-title {
      text-align: center;
      font-size: 28px;
      margin-bottom: 30px;
      color: #0072ff;
    }

    .admin-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .admin-card {
      background: linear-gradient(to right, #00c6ff, #0072ff);
      color: white;
      padding: 25px;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      transition: transform 0.3s;
      cursor: pointer;
    }

    .admin-card:hover {
      transform: translateY(-5px);
    }

    .admin-card h3 {
      margin-bottom: 10px;
      font-size: 20px;
    }

    .admin-card p {
      font-size: 14px;
      color: #fff;
    }
  </style>
</head>
<body>

<div class="admin-container">
  <h2 class="admin-title">Bảng điều khiển Quản trị</h2>

  <div class="admin-grid">
    <div class="admin-card" onclick="location.href='manage_users.php'">
      <h3>Quản lý Người dùng</h3>
      <p>Xem, thêm, sửa, xoá người dùng</p>
    </div>

    <div class="admin-card" onclick="location.href='manage_rooms.php'">
      <h3>Quản lý Phòng trọ</h3>
      <p>Thêm hoặc chỉnh sửa thông tin phòng</p>
    </div>

    

    <div class="admin-card" onclick="location.href='manage_contacts.php'">
      <h3>Liên hệ & Phản hồi</h3>
      <p>Xử lý phản hồi từ người dùng</p>
    </div>
  </div>
</div>

</body>
</html>
