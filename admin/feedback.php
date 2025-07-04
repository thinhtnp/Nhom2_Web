<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Quản lý phản hồi</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background: #f0f8ff;
    }

    h2 {
      text-align: center;
      color: #0072ff;
      margin-bottom: 20px;
    }

    .feedback-box {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      margin-bottom: 25px;
      padding: 20px;
    }

    .room-info {
      margin-bottom: 10px;
    }

    .room-info strong {
      display: inline-block;
      width: 130px;
      color: #444;
    }

    .feedback-content {
      margin-top: 10px;
      background: #f9f9f9;
      padding: 12px;
      border-left: 4px solid #007bff;
      border-radius: 4px;
    }

    .confirm-btn {
      margin-top: 15px;
      padding: 8px 16px;
      background-color: #28a745;
      color: white;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
    }

    .confirm-btn:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>

  <h2>Phản hồi từ người dùng</h2>

  <div class="feedback-box">
    <div class="room-info">
      <p><strong>Tiêu đề phòng:</strong> Phòng Trọ 1</p>
      <p><strong>Giá:</strong> 2.000.000 VNĐ</p>
      <p><strong>Địa chỉ:</strong> 281/3 Ung Văn Khiêm, Bình Thạnh</p>
      <p><strong>Người gửi:</strong> Nguyễn Văn A - a@gmail.com</p>
    </div>
    <div class="feedback-content">
      "Phòng khá ổn nhưng wifi yếu, chủ nhà cần cải thiện."
    </div>
    <button class="confirm-btn" onclick="alert('Đã xác nhận phản hồi đến người dùng.')">Xác nhận đã phản hồi</button>
  </div>

  <div class="feedback-box">
    <div class="room-info">
      <p><strong>Tiêu đề phòng:</strong> Căn hộ mini</p>
      <p><strong>Giá:</strong> 4.500.000 VNĐ</p>
      <p><strong>Địa chỉ:</strong> 90 Nguyễn Oanh, Gò Vấp</p>
      <p><strong>Người gửi:</strong> Lê Thị B - b@gmail.com</p>
    </div>
    <div class="feedback-content">
      "Căn hộ đẹp nhưng không có chỗ để xe máy, cần thêm thông tin rõ ràng hơn."
    </div>
    <button class="confirm-btn" onclick="alert('Đã xác nhận phản hồi đến người dùng.')">Xác nhận đã phản hồi</button>
  </div>

</body>
</html>
