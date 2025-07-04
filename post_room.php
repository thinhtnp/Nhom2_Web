<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Đăng cho thuê phòng</title>
  <link rel="stylesheet" href="/Nhom2_Web/assets/css/style.css">
  <style>
    .post-container {
      max-width: 700px;
      margin: 50px auto;
      background: #f8f9fa;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .post-container h2 {
      text-align: center;
      color: #007bff;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      font-weight: 600;
      display: block;
      margin-bottom: 5px;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
    }

    .form-group textarea {
      resize: vertical;
      min-height: 100px;
    }

    .form-group input[type="file"] {
      padding: 5px;
    }

    .submit-btn {
      width: 100%;
      padding: 12px;
      background-color: #28a745;
      color: white;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .submit-btn:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>

<div class="post-container">
  <h2>Đăng cho thuê phòng</h2>
  <form action="upload_room.php" method="POST" enctype="multipart/form-data">
    
    <div class="form-group">
      <label for="title">Tiêu đề phòng:</label>
      <input type="text" name="title" id="title" required>
    </div>

    <div class="form-group">
      <label for="price">Giá thuê (VNĐ):</label>
      <input type="number" name="price" id="price" required>
    </div>

    <div class="form-group">
      <label for="address">Địa chỉ:</label>
      <input type="text" name="address" id="address" required>
    </div>

    <div class="form-group">
      <label for="area">Diện tích (m²):</label>
      <input type="number" name="area" id="area" required>
    </div>

    <div class="form-group">
      <label for="utilities">Tiện nghi:</label>
      <input type="text" name="utilities" id="utilities" required>
    </div>

    <div class="form-group">
      <label for="description">Mô tả chi tiết:</label>
      <textarea name="description" id="description" required></textarea>
    </div>

    <div class="form-group">
      <label for="main_image">Ảnh bìa (banner chính):</label>
      <input type="file" name="main_image" id="main_image" accept="image/*" required>
    </div>

    <div class="form-group">
      <label for="gallery_images">Ảnh chi tiết khác:</label>
      <input type="file" name="gallery_images[]" id="gallery_images" accept="image/*" multiple>
    </div>

    <button type="submit" class="submit-btn">Đăng phòng</button>
  </form>
</div>

</body>
</html>
