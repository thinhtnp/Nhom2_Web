<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hồ sơ cá nhân</title>
  <link rel="stylesheet" href="/Nhom2_Web/assets/css/style.css">
  <style>
    .profile-container {
      max-width: 600px;
      margin: 50px auto;
      background: #f1f1f1;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .profile-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #007bff;
    }

    .profile-item {
      margin-bottom: 15px;
    }

    .profile-item label {
      font-weight: 600;
      display: block;
      margin-bottom: 5px;
    }

    .profile-item input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      background-color: #fff;
    }

    .profile-actions {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    .profile-actions button {
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }

    .btn-edit {
      background-color: #ffc107;
      color: black;
    }

    .btn-save {
      background-color: #28a745;
      color: white;
    }
  </style>
</head>
<body>

<div class="profile-container">
  <h2>Hồ sơ người dùng</h2>
  
  <div class="profile-item">
    <label>Họ và tên:</label>
    <input type="text" value="Nguyễn Văn A" disabled>
  </div>

  <div class="profile-item">
    <label>Email:</label>
    <input type="email" value="user@example.com" disabled>
  </div>

  <div class="profile-item">
    <label>Số điện thoại:</label>
    <input type="text" value="0123456789" disabled>
  </div>

  <div class="profile-item">
    <label>Địa chỉ:</label>
    <input type="text" value="Quận Bình Thạnh, TP.HCM" disabled>
  </div>

  <div class="profile-actions">
    <button class="btn-edit" onclick="enableEdit()">Chỉnh sửa</button>
    <button class="btn-save" onclick="saveProfile()" disabled>Lưu</button>
  </div>
</div>

<script>
  function enableEdit() {
    const inputs = document.querySelectorAll('.profile-container input');
    inputs.forEach(input => input.disabled = false);
    document.querySelector('.btn-save').disabled = false;
  }

  function saveProfile() {
    alert('Thông tin đã được lưu!');
    const inputs = document.querySelectorAll('.profile-container input');
    inputs.forEach(input => input.disabled = true);
    document.querySelector('.btn-save').disabled = true;
  }
</script>

</body>
</html>
