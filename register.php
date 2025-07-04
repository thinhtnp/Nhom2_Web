<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng ký</title>
  <link rel="stylesheet" href="assets/css/style.css"> <!-- Cập nhật đúng đường dẫn -->
</head>
<body>

<div class="login-container">
  <h2 class="login-title">Tạo tài khoản mới</h2>
  <form action="register_process.php" method="POST" class="login-form">
    <label for="fullname">Họ và tên</label>
    <input type="text" id="fullname" name="fullname" required>

    <label for="username">Tên đăng nhập</label>
    <input type="text" id="username" name="username" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Mật khẩu</label>
    <input type="password" id="password" name="password" required>

    <label for="confirm_password">Xác nhận mật khẩu</label>
    <input type="password" id="confirm_password" name="confirm_password" required>

    <button type="submit" class="btn-login">Đăng ký</button>
    <p class="login-note">Đã có tài khoản? <a href="login.html">Đăng nhập</a></p>
  </form>
</div>

</body>
</html>
