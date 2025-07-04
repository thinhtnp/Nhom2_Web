<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Quản lý người dùng</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background: #f0f8ff;
    }

    h2 {
      color: #0072ff;
      text-align: center;
      margin-bottom: 20px;
    }

    .btn {
      padding: 8px 14px;
      margin: 4px;
      border: none;
      border-radius: 4px;
      color: white;
      cursor: pointer;
      font-weight: bold;
      text-decoration: none;
    }

    .btn-add {
      background-color: #28a745;
    }

    .btn-edit {
      background-color: #007bff;
    }

    .btn-delete {
      background-color: #dc3545;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      background: #fff;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    th, td {
      padding: 12px;
      border: 1px solid #ddd;
      text-align: center;
    }

    th {
      background-color: #0072ff;
      color: white;
    }
  </style>
</head>
<body>

  <h2>Quản lý Người dùng</h2>

  <a href="add_user.html" class="btn btn-add">+ Thêm người dùng</a>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Họ tên</th>
        <th>Tài khoản</th>
        <th>Email</th>
        <th>Hành động</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Nguyễn Văn A</td>
        <td>nguyenvana</td>
        <td>a@gmail.com</td>
        <td>
          <a href="edit_user.html" class="btn btn-edit">Sửa</a>
          <a href="#" class="btn btn-delete">Xoá</a>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>Lê Thị B</td>
        <td>lethib</td>
        <td>b@gmail.com</td>
        <td>
          <a href="edit_user.html" class="btn btn-edit">Sửa</a>
          <a href="#" class="btn btn-delete">Xoá</a>
        </td>
      </tr>
    </tbody>
  </table>

</body>
</html>

