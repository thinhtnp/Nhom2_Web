<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhập</title>
  <link rel="stylesheet" href="assets/css/style.css"> <!-- Đảm bảo đường dẫn đúng -->
</head>
<body>

<div class="login-container">
  <h2 class="login-title">Đăng nhập tài khoản</h2>
  <form action="login_process.php" method="POST" class="login-form">
    <label for="username">Tên đăng nhập</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Mật khẩu</label>
    <input type="password" id="password" name="password" required>

    <button type="submit" class="btn-login">Đăng nhập</button>
    <p class="login-note">Chưa có tài khoản? <a href="register.php">Đăng ký ngay</a></p>
  </form>
</div>

</body>
</html>
