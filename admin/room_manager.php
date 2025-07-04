<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Quản lý phòng trọ và căn hộ</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background-color: #f0f8ff;
    }

    h2 {
      text-align: center;
      color: #0072ff;
      margin-bottom: 20px;
    }

    .btn {
      padding: 8px 12px;
      border: none;
      border-radius: 4px;
      font-weight: bold;
      cursor: pointer;
      text-decoration: none;
      color: white;
      margin: 2px;
    }

    .btn-edit { background-color: #007bff; }
    .btn-delete { background-color: #dc3545; }

    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    th, td {
      padding: 12px;
      border: 1px solid #ccc;
      text-align: center;
    }

    th {
      background-color: #0072ff;
      color: white;
    }

    img {
      width: 100px;
      height: 70px;
      object-fit: cover;
      border-radius: 6px;
    }

    .action-buttons {
      display: flex;
      justify-content: center;
      gap: 6px;
    }
  </style>
</head>
<body>

  <h2>Quản lý Phòng Trọ & Căn Hộ</h2>

  <table>
    <thead>
      <tr>
        <th>Hình ảnh</th>
        <th>Tiêu đề</th>
        <th>Giá</th>
        <th>Diện tích</th>
        <th>Địa chỉ</th>
        <th>Loại</th>
        <th>Hành động</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><img src="assets/imgs/images.jpg" alt="phong1"></td>
        <td>Phòng Trọ 1</td>
        <td>2.000.000 VNĐ</td>
        <td>20 m²</td>
        <td>281/3 Ung Văn Khiêm, Q.Bình Thạnh</td>
        <td>Phòng Trọ</td>
        <td class="action-buttons">
          <a href="edit_room.html" class="btn btn-edit">Sửa</a>
          <a href="#" class="btn btn-delete" onclick="return confirm('Xoá phòng này?')">Xoá</a>
        </td>
      </tr>
      <tr>
        <td><img src="assets/imgs/apartment.jpg" alt="canho1"></td>
        <td>Căn Hộ Mini</td>
        <td>4.500.000 VNĐ</td>
        <td>35 m²</td>
        <td>90 Nguyễn Oanh, Gò Vấp</td>
        <td>Căn Hộ</td>
        <td class="action-buttons">
          <a href="edit_apartment.html" class="btn btn-edit">Sửa</a>
          <a href="#" class="btn btn-delete" onclick="return confirm('Xoá căn hộ này?')">Xoá</a>
        </td>
      </tr>
    </tbody>
  </table>

</body>
</html>
